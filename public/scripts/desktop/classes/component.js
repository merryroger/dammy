/**
 *  The Desktop Transport class uses "Tyrion Desktop" concept by Ehwaz Raido ( http://www.ehwaz.ru )
 *  Created by Merry Roger ( https://merryroger.github.io )
 *  Create date: 22.04.2020 ( The birthday of V. I. Lenin  {22.04.1870} )
 */

'use strict';

let desktopComponent = (cimg, cbf) => {

    class Component {

        constructor(cbf) {
            this.id             = null;
            this.container_id   = null;
            this.defImage       = null;
            this.layer          = null;
            this.parentNode     = null;
            this.is_system      = false;
            this.callbacks      = cbf;
            this.level          = -1;
            this.status         = -1;
            this.__applyImage(cimg);
            this.__render();
        };

        __applyImage(img) {
            for(let [pkey, val] of Object.entries(img)) {
                switch(pkey) {
                    default:
                        this[pkey] = val;
                }
            }
        }

        _getStatus() {
            return this.status;
        }

        _setStatus(status) {
            if (this._setHidden(status)) {
                return;
            }

            if (this._setLocked(status)) {
                return;
            }

            this._setComponentState(status);
        }

        _setHidden(status) {
            let hs = ((status & 0x8) == 0x8);
            if(this._isHidden() ^ hs) {
                this.callbacks.hidden(this.id, hs);
            }

            return hs;
        }

        _isHidden() {
            return ((this.status & 0x8) == 0x8);
        };

        _hide(hide) {
            //
        }

        _setLocked(ststus) {
            let ls = ((status & 0x4) == 0x4);
            if (this._isLocked() ^ ls) {
                this.callbacks.locked(this.id, ls);
            }

            return ls;
        }

        _isLocked() {
            return ((this.status & 0x4) == 0x4);
        }

        _lock(lock) {
            //
        }

        _setComponentState(status) {
            let ns = ((status & 0x2) == 0x2);
            let fs = ((status & 0x1) == 0x1;
            if (this._isNormal() && ns) {
                return;
            } else if (this._isNormal() ^ ns) {
                if (ns) {
                    this.callbacks.normalize(this.id);
                } else {
                    if (fs == this._isFull() && fs ^ this._isMinimized()) {
                        return;
                    }

                    let cb = (fs) ? this.callbacks.fullscreen : this.callbacks.minimize;
                    cb(this.id);
                }
            }
        }

        _isNormal() {
            return ((this.status & 0xe) == 0x2);
        }

        _normalize() {
            //
        }

        _isFull() {
            return this.status == 0x1;
        }

        _fullscreen() {
            //
        }

        _isMinimized() {
            return this.status == 0;
        }

        _minimize() {
            //
        }

        __render() {
            if (this.layer == null) {
                this.layer = document.createElement('div');
                this.layer.id = this.id;
                this.layer.className = this.className;
                this.layer.innerHTML = this.defImage;
                let parentNode = (this.parentNode == null) ? document.body : document.body.querySelector(this.parentNode);
                parentNode.appendChild(this.layer);
            }
        }

    }

    let self = new Component(cimg, cbf);

    return {
        getStatus: () => { return self._getStatus(); },
        setStatus: (status = 2) => { self._setStatus(status); }
        hide: (hide) => { self._hide(hide); },
        lock: (lock) => { self._lock(lock); },
        norm: () => { self._normalize(); },
        full: () => { self._fullscreen(); },
        mini: () => { self._minimize(); }
    };
};
