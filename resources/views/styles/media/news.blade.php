/* Screen width from 1200 px and more... */
@media screen and (min-width: 1200px) {



    .news_body h1 {
        margin-bottom: 50px;
        margin-left: 40pt;
        font-size: 25pt;
    }

    .one__of.news p {
        margin-bottom: 20px;
        font-size: 11pt;
        line-height: 1.4;
    }

}

/* Screen width between 1100 and 1200 px */
@media screen and (min-width: 1100px) and (max-width: 1199px) {

    .news_body h1 {
        margin-bottom: 40px;
        margin-left: 40pt;
        margin-right: 40pt;
        font-size: 25pt;
    }

    .one__of.news p {
        margin-bottom: 20px;
        font-size: 11pt;
        line-height: 1.4;
    }

}

/* Screen width between 900 and 1100 px */
@media screen and (min-width: 900px) and (max-width: 1099px) {

    .news_body h1 {
        margin-bottom: 40px;
        margin-left: 60pt;
        margin-right: 20pt;
        font-size: 23pt;
        line-height: 1.2;
    }

    .one__of.news p {
        margin-bottom: 20px;
        font-size: 11pt;
        line-height: 1.4;
    }

}

/* Screen width up to 900 px */
@media screen and (max-width: 899px) {

    section.headline_news {
        flex-direction: column-reverse;
        align-items: stretch;
    }

    .news_body h1 {
        margin-bottom: 40px;
        margin-left: 8%;
        margin-right: 20pt;
        font-size: 19pt;
        line-height: 1.2;
    }

    section.one__of.news {
        min-width: 120px;
    }

    .one__of.news p {
        margin-bottom: 20px;
        font-size: 10pt;
        line-height: 1.4;
    }

}