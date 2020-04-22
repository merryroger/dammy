/**
 *  The Desktop class uses "Tyrion Desktop" concept by Ehwaz Raido ( http://www.ehwaz.ru )
 *  Created by Merry Roger ( https://merryroger.github.io )
 *  Create date: 22.04.2020 ( The birthday of V. I. Lenin  {22.04.1870} )
 */

'use strict';

let desktop = (() => {

    class Desktop {

        constructor() {
            this.transport = transport('/desktop');
            this.callParams = {
                'init': { params: [ 'opcode=INIT' ] },
                'close': { params: [ 'opcode=CLOD', 'canclose=1' ] }
            };
        }

        getRequestParams(intention, params = []) {
            let _params = this.callParams[intention]['params'];
            return (params.length == 0) ? _params : _params.concat(params);
        }

    }

    let self;

    return {
        init: (initparams, response, weltCallBack = null) => {
            self = new Desktop();
            initparams = self.getRequestParams('init', initparams);
            self.transport.setCallback(response());
            self.transport.send(initparams, weltCallBack);
            return true;
        },
        close: (initparams, weltCallBack = null) => {
            initparams = self.getRequestParams('close', initparams);
            self.transport.send(initparams, weltCallBack, '/logout');
        },
        response: () => {
            return self.transport.response;
        }
    }

})();