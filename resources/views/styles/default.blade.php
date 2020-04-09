
/* General */
* {
    margin: 0;
    padding: 0;
    font-family: "Roboto Condensed", sans-seirf;
    font-weight: 400;
    line-height: 1.5;
}

html, body {
    height: 100%;
    background-color: #f0f0f0;
    overflow-x: hidden;
}

main {
    margin: 0 auto;
    min-height: 100%;
    flex-direction: column;
    justify-content: space-between;
    align-items: stretch;
    display: flex;
}

.inv {
    visibility: hidden;
}

.ptr {
    cursor: pointer;
}

a.grey__link {
    color: #a5aaaf !important;
}

/* Header */
header {
    flex-direction: column;
    align-items: stretch;
    justify-content: space-between;
    display: flex;
}

/* Line of controls */
nav.services {
    padding: 12px 0pt 15px;
    background-color: #e8e8e8;
    justify-content: flex-end;
    display: flex;
}

.services section {
    padding: 8px 0;
    justify-content: center;
    display: flex;
}

.services a {
    margin-right: 25pt;
    color: #3399cc;
    text-decoration: none;
    border-bottom: 1px solid #cccccc;
}

span.news__counter {
    position: relative;
    top: -10px;
    left: 51pt;
    padding: 0 0 1px 1px;
    width: 16px;
    height: 16px;
    border-radius: 21px;
    color: #ffffff;
    text-align: center;
    background-color: #cc0000;
    font-family: Tahoma, sans-seirf;
    font-size: 8pt;
    display: inline-block;
    cursor: pointer;
}

form#search {
    font-size: 10pt;
    display: flex;
}

#search input {
    padding: 2px 0 3px 8pt;
    width: 160px;
    height: 18px;
    color: #666666;
    border-width: 0;
    border-left: 1px solid #cccccc;
    border-top: 1px solid #cccccc;
    border-bottom: 1px solid #cccccc;
    border-top-left-radius: 17px;
    border-bottom-left-radius: 17px;
}

#search button {
    padding: 0 10pt 1px 8pt;
    height: 25px;
    color: #333333;
    border-width: 0;
    border-left: 1px solid #cccccc;
    border-top: 1px solid #cccccc;
    border-bottom: 1px solid #cccccc;
    border-top-right-radius: 17px;
    border-bottom-right-radius: 17px;
    cursor: pointer;
    outline: none;
}

#search button:active {
    padding: 0 9pt 0;
    border-left: 1px solid #aaaaaa;
    border-top: 1px solid #aaaaaa;
}
/* End of line of controls */

/* Title and main menu */
section.site__header {
    justify-content: center;
    display: flex;
}

.site__header article {
    display: flex;
}

a.go__home {
    border-width: 0;
    text-decoration: none;
}

div.header {
    padding: 20px;
    text-align: right;
    background: #791428 url("/images/logo.png") no-repeat center center;
    background-size: 75%;
}

.header h2 {
    position: relative;
    color: #dac685;
}

nav.menu {
    justify-content: center;
    align-items: center;
    display: flex;
}

.menu a {
    margin: 0 20pt;
    color: #3399cc;
    text-decoration: none;
    border-bottom: 1px solid #cccccc;
}

.menu p {
    margin: 0 20pt;
    color: #444444;
}

/* End of title and main menu */

/* Page`s body */
    section.body, section.columns {
    color: #333333;
    display: flex;
}

section.orders, section.about {
    flex-direction: column;
}

h1 {
    font-family: "PT Sans", sans-seirf;
}

.announce nav {
    display: flex;
}

.body a {
    color: #3399cc;
    text-decoration: none;
    border-bottom: 1px solid #aaaaaa;
}

article.one__of {
    flex-direction: column;
    display: flex;
}

.one__of p {
    margin-bottom: 12px;
}
/* End of page`s body */

/* Footer */
footer {
    padding-top: 35px;
    min-height: 180px;
    background-color: #667788;
    justify-content: center;
    display: flex;
}

section.footer {
    color: #333333;
    justify-content: space-around;
    display: flex;
}

section.foot__pair {
    justify-content: space-around;
    align-self: flex-start;
    flex-basis: 50%;
    flex-grow: 1;
    display: flex;
}

nav.footer {
    margin-top: 10px;
    margin-bottom: 20px;
}

nav.foot__menu {
    padding-bottom: 12px;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    flex-basis: 120px;
    flex-grow: 1;
    display: flex;
}

div.footer {
    text-align: right;
    background: #791428 url("/images/logo.png") no-repeat center center;
    background-size: 75%;
}

.footer h2 {
    position: relative;
    color: #dac685;
}

.foot__menu h6 {
    color: #223344;
}

.foot__menu dl {
    color: #aabbcc;
}

.foot__menu dt {
    color: #ffcc66;
}

.foot__menu dd {
    text-indent: 5pt;
}

.foot__menu a {
    color: #bbccdd;
    text-decoration: none;
}

.foot__menu a:hover {
    color: #ddeeff;
}
/* End of footer */
