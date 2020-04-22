'use strict';

let request_sent = false;

function initDesktop() {
    onoffVeil({'h1': getServiceForm().ihf.value});
    request_sent = desktop.init([pullToken()], desktop.response, setUpDesktop);
}

function setUpDesktop(response) {
    if (response.loaded) {
        onoffVeil();
    }

    request_sent = false;
}

function rqCloseDesktop() {
    if (!request_sent) {
        onoffVeil({'h1': 'Ожидание закрытия приложений'}); // Make loadable message text
        request_sent = desktop.close([pullToken()], canLogoff);
    }

    return false;
}

function canLogoff(response) {
    if (response.logoff) {
        location.replace('/logout');
        return;
    }

    onoffVeil();
    request_sent = false;
}

_setup[_setup.length] = initDesktop;
