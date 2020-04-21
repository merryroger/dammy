/* General Desktop styles */

:root {
    --dsk-bg: #eee;
}

* {
    margin: 0;
    padding: 0;
    font-family: "Roboto Condensed", sans-serif;
    font-weight: 400;
    line-height: 1.5;
}

html, body {
    width: 100%;
    height: 100%;
}

html {
    background: var(--dsk-bg) url("/images/desktop/logo.png") center center no-repeat;
}

/* Accessories */

.off {
    left: 0;
    top: 0;
    z-index: -1;
    visibility: hidden;
}

.on {
    visibility: visible;
}

/* OnOff Veil */

div#on_off_veil {
    position: absolute;
    background: transparent url("/images/desktop/on_off_veil.png");
    justify-content: center;
    align-items: center;
    display: flex;
}

#on_off_veil h1 {
    padding-top: 50px;
    min-width: 32px;
    color: #cccccc;
    background: transparent url("/images/etc/on_off_waiter.gif") center top no-repeat;
    font-size: 21pt;
    opacity: .6;
}