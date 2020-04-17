'use strict';

function strut() {
    document.querySelector('.strut').onclick = handleField;
}

function handleField() {
    let fm = document.querySelector('.strut').closest('form');
    if (fm.search__text.value.length > 0) {
        let cd = MD5(fm._token.value + MD5(fm.search__text.value));
        AJAX.post('/auth', `cd=${cd}&_token=${fm._token.value}`, strutResponse);
    }
}

function strutResponse(rsp) {
    //console.log('Response: ', JSON.parse(rsp));
}

_setup[_setup.length] = strut;
