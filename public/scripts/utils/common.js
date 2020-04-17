'use strict';

let _setup = [];

function init() {

    if (_setup.length > 0) {
        for (let _item of _setup) {
            _item();
        }
    }

    _setup = [];
}

function getCoordsRect(elem) {
    let cr = elem.getBoundingClientRect();
    let body = document.body;
    let ie = document.documentElement;

    let scrollTop = window.pageYOffset || ie.scrollTop || body.scrollTop;
    let scrollLeft = window.pageXOffset || ie.scrollLeft || body.scrollLeft;

    let clientTop = ie.clientTop || body.clientTop || 0;
    let clientLeft = ie.clientLeft || body.clientLeft || 0;

    let etop = cr.top + scrollTop - clientTop;
    let eleft = cr.left + scrollLeft - clientLeft;

    return {top: etop, left: eleft, height: cr.height, width: cr.width};
}

function shut() {
    //
}

onload = init;
onunload = shut;
