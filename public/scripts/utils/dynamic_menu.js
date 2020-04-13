'use strict'

let menu_click_listener = null;
let menu_move_listener = null;
let menu_containers = [];
let checkElem = null;
let chkBlurHandler = 0;
let shutSMUHandler = 0;

function showsubmenu(src, node, level, mode, parent) {
    let rect = getCoordsRect(src);
    let smu_id = `n${node}l${level}m${mode}p${parent}`;
    let smu = document.querySelector(`#${smu_id}`);
    let section_id = smu.dataset.section;

    if (menu_click_listener == null) {
        menu_click_listener = menuClick;
        document.addEventListener('click', menu_click_listener, true);
        menu_move_listener = menuMove;
        document.addEventListener('pointermove', menu_move_listener, true);

        for (let node of smu.childNodes) {
            if (node.tagName == 'A') {
                node.classList = [];

                if (section_id == node.dataset.section) {
                    node.classList.add('disabled__link');
                } else {
                    node.classList.add('enabled__link');
                }
            }
        }
    }

    smu.style.left = (rect.left + 10) + 'px';
    smu.style.top = (rect.top + rect.height + 5) + 'px';

    smu.style.zIndex = 25;
    smu.classList.remove('off');
    smu.classList.add('on');

    menu_containers[level] = smu;
}


function hidesubmenu(smu, level = -1) {
    smu.classList.remove('on');
    smu.classList.add('off');

    menu_containers.splice(-1, 1);

    if (level == 1 && menu_click_listener != null) {
        document.removeEventListener('click', menu_click_listener, true);
        menu_click_listener = null;
        document.removeEventListener('pountermove', menu_move_listener, true);
        menu_move_listener = null;
    }
}

function menuClick(e) {
    if (e.target.tagName == 'A') {
        if (e.target.classList.contains('disabled__link')) {
            e.preventDefault();

            return false;
        } else if (e.target.closest('div') != null && e.target.dataset.level != undefined) {
            let cont = e.target.closest('div');
            let level = e.target.dataset.level;

            hidesubmenu(cont, level);
        }
    }
}

function menuMove(e) {
    let elem = null;
    switch (e.target.tagName) {
        case 'A':
            if (e.target.closest('div') != null)
                checkElem = e.target.closest('div');
            else
                checkElem = e.target;
            break;
        default:
            checkElem = e.target;
    }

    if (chkBlurHandler == 0) {
        chkBlurHandler = setTimeout(checkSubmenuBlur, 1000);
    }

}

function checkSubmenuBlur() {
    let needShut = false;
    for (let l = menu_containers.length; l > 0; l--) {
        if (menu_containers[l - 1] == checkElem) {
            break;
        }

        needShut = true;
    }

    if (needShut && shutSMUHandler == 0) {
        shutSMUHandler = setTimeout(shutAbandonedSubmenus, 500);
    } else if (!needShut && shutSMUHandler != 0) {
        clearTimeout(shutSMUHandler);
        shutSMUHandler = 0;
    }

    chkBlurHandler = 0;
}

function shutAbandonedSubmenus() {
    for (let l = menu_containers.length; l > 0; l--) {
        if (menu_containers[l - 1] == checkElem) {
            break;
        }

        hidesubmenu(menu_containers[l - 1], l);
    }

    shutSMUHandler = 0;
}