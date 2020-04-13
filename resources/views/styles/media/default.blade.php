/* Screen width from 1200 px and more... */
@media screen and (min-width: 1200px) {

    * {
        font-size: 12pt;
    }

    main {
        width: 1200px;
    }

    header {
        position: relative;
        left: 50%;
        width: 100vw;
        transform: translateX(-50%);
    }

    form#search {
        margin-right: 50pt;
    }

    #search input {
        font-size: 10pt;
    }

    #search button {
        font-size: 11pt;
    }

    .services a, .services p {
        font-size: 11pt;
    }

    section.site__header {
        padding-top: 60px;
        padding-bottom: 60px;
        margin-bottom: 50px;
    }

    .site__header article {
        width: 1200px;
        justify-content: space-between;
    }

    div.header {
        margin-left: 20pt;
        width: 180px;
        height: 180px;
        border-radius: 258px;
    }

    .header h2 {
        top: 105px;
        right: 8px;
        font-size: 11pt;
    }

    .menu * {
        font-size: 19pt;
    }

    section.body {
        margin-bottom: 150px;
        width: 1200px;
        justify-content: center;
        align-items: center;
    }

    section.columns {
        padding: 0 40pt;
        justify-content: space-between;
    }

    article.one__of {
        max-width: 48%;
        flex-basis: 50%;
        flex-grow: 1;
    }

    h1 {
        margin-bottom: 25px;
        font-size: 36pt;
    }

    .announce article {
        background: transparent url("/images/etc/many_others.png") no-repeat right bottom;
    }

    .announce nav {
        justify-content: space-between;
    }

    .announce a {
        font-size: 15pt;
    }

    div.blk {
        padding: 10px 2pt;
    }

    footer {
        position: relative;
        left: 50%;
        width: 100vw;
        transform: translateX(-50%);
    }

    section.footer {
        flex-basis: 1200px;
    }

    div.footer {
        padding: 20px;
        width: 104px;
        height: 104px;
        border-radius: 104px;
    }

    .footer h2 {
        top: 62px;
        right: -2px;
        font-size: 10pt;
    }

    .foot__menu * {
        font-size: 10pt;
    }

}

/* Screen width between 1100 and 1200 px */
@media screen and (min-width: 1100px) and (max-width: 1199px) {

    * {
        font-size: 12pt;
    }

    main {
        width: 100%;
    }

    form#search {
        margin-right: 50pt;
    }

    #search input, #search button {
        font-size: 10pt;
    }

    .services a, .services p {
        font-size: 11pt;
    }

    section.site__header {
        padding-top: 60px;
        padding-bottom: 60px;
        margin-bottom: 50px;
    }

    .site__header article {
        width: 100%;
        justify-content: space-around;
    }

    div.header {
        margin-left: 20pt;
        width: 150px;
        height: 150px;
        border-radius: 180px;
    }

    .header h2 {
        top: 86px;
        right: 4px;
        font-size: 11pt;
    }

    .menu * {
        font-size: 17pt;
    }

    section.body {
        margin-bottom: 150px;
        width: 100%;
        justify-content: center;
        align-items: center;
    }

    section.columns {
        padding: 0 40pt;
        justify-content: space-between;
    }

    article.one__of {
        max-width: 48%;
        flex-basis: 50%;
        flex-grow: 1;
    }

    h1 {
        margin-bottom: 25px;
        font-size: 32pt;
    }

    .announce article {
        width: 100%;
        margin: 0 auto;
        padding: 0 40pt;
        background: transparent url("/images/etc/many_others.png") no-repeat right bottom;
    }

    .announce nav {
        justify-content: space-between;
    }

    .announce a {
        font-size: 15pt;
    }

    div.blk {
        padding: 10px 2pt;
    }

    footer {
        width: 100%;
    }

    section.footer {
        flex-basis: 1100px;
        padding: 0 10pt;
    }

    div.footer {
        padding: 20px;
        width: 104px;
        height: 104px;
        border-radius: 104px;
    }

    .footer h2 {
        top: 62px;
        right: -2px;
        font-size: 10pt;
    }

    .foot__menu * {
        font-size: 10pt;
    }

}

/* Screen width between 900 and 1100 px */
@media screen and (min-width: 900px) and (max-width: 1099px) {

    * {
        font-size: 11pt;
    }

    main {
        width: 100%;
    }

    form#search {
        margin-right: 50pt;
    }

    #search input, #search button {
        font-size: 10pt;
    }

    section.site__header {
        padding-top: 60px;
        padding-bottom: 60px;
        margin-bottom: 50px;
    }

    .site__header article {
        width: 100%;
        justify-content: space-around;
    }

    div.header {
        margin-left: 20pt;
        width: 124px;
        height: 124px;
        border-radius: 124px;
    }

    .header h2 {
        top: 70px;
        right: 0px;
        font-size: 10pt;
    }

    .menu * {
        font-size: 14pt;
    }

    section.body {
        margin-bottom: 100px;
        width: 100%;
        justify-content: space-between;
        align-items: center;
    }

    section.columns {
        padding: 0 60pt;
        flex-flow: wrap;
        justify-content: space-between;
    }

    article.one__of {
        max-width: 100%;
        min-width: 600px;
        flex-basis: 100%;
        flex-grow: 1;
    }

    h1 {
        margin-bottom: 20px;
        font-size: 28pt;
        line-height: 1;
    }

    .announce article {
        width: 100%;
        margin: 0 auto;
        padding: 0 60pt;
        background: transparent url("/images/etc/many_others.png") no-repeat 95% bottom;
    }

    .announce nav {
        justify-content: space-between;
    }

    .announce a {
        font-size: 13pt;
    }

    div.blk {
        padding: 10px 2pt;
    }

    .blk p {
        font-size: 11pt;
    }

    footer {
        width: 100%;
    }

    section.footer {
        flex-basis: 1200px;
        padding: 0 20pt;
    }

    div.footer {
        padding: 20px;
        width: 104px;
        height: 104px;
        border-radius: 104px;
    }

    .footer h2 {
        top: 62px;
        right: -2px;
        font-size: 10pt;
    }

    .foot__menu * {
        font-size: 10pt;
    }

}

/* Screen width up to 900 px */
@media screen and (max-width: 899px) {

    * {
        font-size: 10pt;
    }

    main {
        min-width: 450px;
        width: 100%;
    }

    nav.services {
        flex-direction: column-reverse;
        justify-content: center !important;
    }

    #search input, #search button {
        font-size: 10pt;
    }

    section.site__header {
        padding-top: 40px;
        padding-bottom: 40px;
        margin-bottom: 50px;
    }

    .site__header article {
        width: 100%;
        justify-content: center;
    }

    div.header {
        margin-right: 10pt;
        width: 124px;
        height: 124px;
        border-radius: 124px;
    }

    .header h2 {
        top: 70px;
        right: 0px;
        font-size: 10pt;
    }

    nav.menu {
        flex-direction: column;
    }

    .menu * {
        font-size: 14pt;
    }

    section.body {
        margin-bottom: 60px;
        width: 100%;
        justify-content: space-between;
        align-items: center;
    }

    section.columns {
        padding: 0 8%;
        flex-flow: wrap;
        justify-content: space-between;
    }

    article.one__of {
        max-width: 100%;
        min-width: 400px;
        flex-basis: 100%;
        flex-grow: 1;
    }

    h1 {
        margin-bottom: 20px;
        font-size: 21pt;
        line-height: 1;
    }

    .announce article {
        width: 100%;
        margin: 0 auto;
        padding: 0 8%;
        //		background: transparent url("/images/etc/many_others.png") no-repeat 90% bottom;
    }

    .announce nav {
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .announce span {
        margin-bottom: 25px;
        min-width: 160px;
    }

    .announce a {
        font-size: 11pt;
    }

    div.blk {
        padding: 5px 2pt;
    }

    .blk p {
        font-size: 10pt;
    }

    footer {
        width: 100%;
    }

    section.footer {
        flex-basis: 100%;
        padding: 0 5%;
    }

    section.foot__pair.ent__data {
        flex-wrap: wrap-reverse;
    }

    section.foot__pair.navigation {
        justify-content: flex-start;
        flex-wrap: wrap;
    }

    div.footer {
        padding: 20px;
        width: 52px;
        height: 52px;
        border-radius: 60px;
    }

    .footer h2 {
        top: 30px;
        right: -7px;
        font-size: 7pt;
    }

    .foot__menu * {
        font-size: 9pt;
    }

    nav.foot__menu {
        margin: 0 10pt;
        min-width: 190px;
    }

}