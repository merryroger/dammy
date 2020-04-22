/* General Desktop styles */

:root {
    --dsk-bg: #eee;
    --mmu-cl: #444433;
    --mdv-cl: #aaaa99;
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

/* Main menu */

div#main__menu__slider {
    position: absolute;
    width: 100%;
    min-height: 42px;
    box-shadow: 0 2px 2px rgba(0,0,0,0.4);
    background: transparent url("/images/desktop/menu_bar_bg.png") left top repeat-x;
    justify-content: space-between;
    display: flex;
}

div.mms {
    height: 42px;
    font-size: 10pt;
    color: var(--mmu-cl);
    align-items: center;
    display: flex;
}

div.quit__control {
    padding-left: 20pt;
    padding-right: 20pt;
    border-left: 1px solid var(--mdv-cl);
    cursor: pointer;
}

.quit__control span {
    border-bottom: 1px solid var(--mmu-cl);
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

.h {
    display: hidden;
}

/* OnOff Veil */

div#on_off_veil {
    position: absolute;
    background: transparent url("/images/desktop/on_off_veil.png");
    flex-direction: column;
    justify-content: center;
    align-items: center;
    display: flex;
}

#on_off_veil > * {
    opacity: .6;
}

#on_off_veil div.waiter {
    width: 50px;
    height: 50px;
    background: transparent url("/images/etc/on_off_waiter.gif") center center no-repeat;
}

#on_off_veil h1 {
    color: #cccccc;
    font-size: 21pt;
    line-height: 2;
}

#on_off_veil p {
    color: #cccccc;
    font-size: 10pt;
}
