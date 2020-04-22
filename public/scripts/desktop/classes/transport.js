/**
 *  The Desktop Transport class uses "Tyrion Desktop" concept by Ehwaz Raido ( http://www.ehwaz.ru )
 *  Created by Merry Roger ( https://merryroger.github.io )
 *  Create date: 22.04.2020 ( The birthday of V. I. Lenin  {22.04.1870} )
 */

'use strict';

let transport = (url) => {

    class Transport {

        constructor(url) {
            this.URL = url;
            this.callback = null;
            this.weltCallBack = null;
        }

        setCallbackFunction(cbf) {
            this.callback = cbf;
        }

    }

    let self = new Transport(url);

    return {
        setCallback: (cbf) => {
            self.setCallbackFunction(cbf);
        },
        send: (initparams, weltCallBack = null, url = null) => {
            let URL = (url == null) ? self.URL : url;
            self.weltCallBack = weltCallBack;
            AJAX.post(URL, initparams.join('&'), self.callback);
            return true;
        },
        response:
            (rsp) => {
                let response = {};
                try {
                    response = JSON.parse(rsp);
                } catch {
                    response = {};
                } finally {
                    if (self.weltCallBack !== null) {
                        self.weltCallBack(response);
                    }
                }
            }

    }

};