'use strict';

let float_message_panel = null;
let float_panel = false;
let rq_sent = false;

function strut() {
    document.querySelector('.strut').onclick = handleField;
}

function handleField() {
    if(float_panel || rq_sent) {
        return;
    }

    let fm = document.querySelector('.strut').closest('form');
    if (fm.search__text.value.length > 0) {
        let cd = MD5(fm._token.value + MD5(fm.search__text.value));
        AJAX.post('/auth', `cd=${cd}&_token=${fm._token.value}`, strutResponse);
        rq_sent = true;
    }
}

function showResponse(rsp) {
    let strut = document.querySelector('.strut');
    let rect = getCoordsRect(strut);
    if(!float_panel && rsp.length > 0) {
        if(float_message_panel == null) {
            float_message_panel = document.createElement('div');
            float_message_panel.id = 'float_panel';
            float_message_panel.className = 'off';
            strut.closest('section').appendChild(float_message_panel);
        } else {
            float_message_panel = strut.closest('section').querySelector('#float_panel');
        }

        float_message_panel.innerHTML = rsp.split('&amp;').join('&');
        float_message_panel.style.left = (rect.left + 10) + 'px';
        float_message_panel.style.top = (rect.top + 30) + 'px';
        float_message_panel.classList.remove('off');
        float_message_panel.classList.add('on');
        float_message_panel.querySelector('.float__message__button').onclick = hideResponse;
        float_panel = true;
    }
}

function hideResponse() {
    if(float_message_panel !== null && float_panel) {
        float_message_panel.classList.remove('on');
        float_message_panel.classList.add('off');
        float_message_panel.innerHTML = '';
        float_panel = false;
        rq_sent = false;
    }
}

function strutResponse(rsp) {
    let response = null;
    try {
        response = JSON.parse(rsp);
    } catch(e) {
        response = null;
    } finally {
        if(response !== null && +response.retcode < 400) {
            showResponse(response.message_panel);
        }
    }
}

_setup[_setup.length] = strut;
