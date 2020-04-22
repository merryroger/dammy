'use strict';

let onoffVeilLR = null;
let onoffVeilOn = false;
let onoffVeilDefault = { 'div': 'waiter', 'h1': 'h', 'p': 'h' };

function pullToken() {
    let fm = getServiceForm();
    return `_token=${fm._token.value}`;
}

function onoffVeil(text = {}, status = true, level = 250, acss = null) {
    if (onoffVeilOn ^ status) {
        if (onoffVeilLR == null) {
            onoffVeilLR = document.createElement('div');
            onoffVeilLR.id = "on_off_veil";
            onoffVeilLR.className = 'off';
            acss = (acss === null) ? onoffVeilDefault : acss;
            onoffVeilLR.innerHTML = setVeilContainers(onoffVeilLR, acss);
            document.body.appendChild(onoffVeilLR);
        } else {
            onoffVeilLR = document.body.querySelector('#on_off_veil');
        }

        onoffVeilLR.classList.toggle('off');
        onoffVeilLR.style.zIndex = level;
        onoffVeilLR.style.left = 0;
        onoffVeilLR.style.top = 0;
        onoffVeilLR.style.right = 0;
        onoffVeilLR.style.bottom = 0;
        setVeilData(onoffVeilLR, text);
        onoffVeilLR.classList.toggle('on');
        onoffVeilOn = true;
    } else {
        onoffVeilLR.classList.toggle('on');
        onoffVeilLR.style.right = 'auto';
        onoffVeilLR.style.bottom = 'auto';
        onoffVeilLR.classList.toggle('off');
        clearVeil(onoffVeilLR, 'h1', 'p');
        onoffVeilOn = false;
    }
}

function setVeilContainers(veil, acss) {
    let cont = [];
    for(let [tag, cls] of Object.entries(acss)) {
        cont[cont.length] = `<${tag} class="${cls}"></${tag}>`;
    }

    return cont.join('');
}

function setVeilData(veil, ds) {
    for(let [key, val] of Object.entries(ds)) {
        let e = veil.querySelector(key);
        e.innerHTML = val;
        e.className = '';
    }
}

function clearVeil(veil, ...elems) {
    if (elems.length > 0) {
        for (let elem of elems) {
            let e = veil.querySelector(elem);
            e.innerHTML = '';
            e.className = 'h';
        }
    }
}

function getServiceForm() {
    return document.body.querySelector('#desktop_main_form');
}

