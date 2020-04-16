'use strict'

let _setup = [];
let _mmt = null;
let _mT = null;
let _mTHandler = 0;

function init() {

    if (_setup.length > 0) {
        for (let _item of _setup) {
            _item();
        }
    }

    _setup = [];
    _mmt = mainMoveTracker;
    document.addEventListener('pointermove', _mmt);
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

function whatsUnderPointer() {
    let target = null;

    if(_mT.closest('div') != null) {
        target = _mT.closest('div');
      //  console.log(target);
    }

    _mTHandler = 0;
}

function mainMoveTracker(e) {
    _mT = e.target;

    if (_mTHandler == 0) {
        _mTHandler = setTimeout(whatsUnderPointer, 200);
    }
}

function shut() {
    document.removeEventListener('pointermove', _mmt);
}

onload = init;
onunload = shut;
