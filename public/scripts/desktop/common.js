'use strict';

let onoffVeilLR = null;
let onoffVeilOn = false;
let request_sent = false;

function initDesktop() {
    onoffVeil('Загрузка');
    let params = [
        'opcode=INID',
        pullToken()
    ];

    AJAX.post('/desktop', params.join('&'), setUpDesktop);
    request_sent = true;
}

function setUpDesktop(rsp) {
    let response = {};
    try {
        response = JSON.parse(rsp);
    } catch {

    } finally {
        if (response.loaded) {
            onoffVeil();
            request_sent = false;
        }
    }
}

function rqCloseDesktop() {
    if (!request_sent) {
        onoffVeil('Ожидание закрытия приложений');
        let params = [
            'canclose=1',
            pullToken()
        ];

        AJAX.post('/logout', params.join('&'), canLogoff);
        request_sent = true;
    }
    return false;
}

function canLogoff(rsp) {
    let response = {};
    try {
        response = JSON.parse(rsp);
    } catch {

    } finally {
        if (response.logoff) {
            location.replace('/logout');
            onoffVeil();
        }
    }
}

function pullToken() {
    let fm = document.body.querySelector('#desktop_main_form');
    return `_token=${fm._token.value}`;
}

function onoffVeil(text = '', status = true, level = 250) {
    if(onoffVeilOn ^ status) {
        if(onoffVeilLR == null) {
            onoffVeilLR = document.createElement('div');
            onoffVeilLR.id = "on_off_veil";
            onoffVeilLR.className = 'off';
            onoffVeilLR.innerHTML = '<h1>&nbsp;</h1>';
            document.body.appendChild(onoffVeilLR);
        } else {
            onoffVeilLR = document.body.querySelector('#on_off_veil');
        }
        console.log(onoffVeilLR);
        onoffVeilLR.classList.toggle('off');
        onoffVeilLR.style.zIndex = level;
        onoffVeilLR.style.left = 0;
        onoffVeilLR.style.top = 0;
        onoffVeilLR.style.right = 0;
        onoffVeilLR.style.bottom = 0;
        onoffVeilLR.querySelector('h1').innerHTML = text;
        onoffVeilLR.querySelector('h1').style.display = 'block';
        onoffVeilLR.classList.toggle('on');
        onoffVeilOn = true;
    } else {
        onoffVeilLR.classList.toggle('on');
        onoffVeilLR.style.right = 'auto';
        onoffVeilLR.style.bottom = 'auto';
        onoffVeilLR.classList.toggle('off');
        onoffVeilLR.querySelector('h1').innerHTML = '';
        onoffVeilLR.querySelector('h1').style.display = 'none';
        onoffVeilOn = false;
    }
}

_setup[_setup.length] = initDesktop;
