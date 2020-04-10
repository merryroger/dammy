'use strict'

const esl_1 = "https://api-maps.yandex.ru/2.1/?lang=ru_RU";

function loadForeignScript(fs) {
    let esl = document.createElement('script');
    esl.src = fs;
    esl.type = "text/javascript";
    document.getElementsByTagName('head')[0].appendChild(esl);
}

function init1() {
        let mainMap = new ymaps.Map("central_office", { center: [55.458398, 65.334739], zoom: 17, controls: ['zoomControl', 'typeSelector'/*, 'fullscreenControl'*/]});
        let myPlacemark = new ymaps.Placemark([55.458398, 65.334739], { hintContent: 'Центральный офис «ДАММИ»', balloonContent: 'Центральный офис «ДАММИ»' });
        mainMap.geoObjects.add(myPlacemark);

        let pdMap = new ymaps.Map("print_yard", { center: [55.434752, 65.330955], zoom: 17, controls: ['zoomControl', 'typeSelector'/*, 'fullscreenControl'*/]});
        let pdPlacemark = new ymaps.Placemark([55.435052, 65.331255], { hintContent: 'Филиал «Печатный двор»', balloonContent: 'Филиал «Печатный двор»' });
        pdMap.geoObjects.add(pdPlacemark);

        let dpMap = new ymaps.Map("print_house", { center: [55.441938, 65.344844], zoom: 17, controls: ['zoomControl', 'typeSelector'/*, 'fullscreenControl'*/]});
        let dpPlacemark = new ymaps.Placemark([55.441968, 65.344844], { hintContent: 'Филиал «Дом печати»', balloonContent: 'Филиал «Дом печати»' });
        dpMap.geoObjects.add(dpPlacemark);

        let pmMap = new ymaps.Map("print_world", { center: [55.437113, 65.320982], zoom: 17, controls: ['zoomControl', 'typeSelector'/*, 'fullscreenControl'*/]});
        let pmPlacemark = new ymaps.Placemark([55.437113, 65.320982], { hintContent: 'Филиал «Печатный мир»', balloonContent: 'Филиал «Печатный мир»' });
        pmMap.geoObjects.add(pmPlacemark);

        let pkMap = new ymaps.Map("pechatnik", { center: [55.440677, 65.355370], zoom: 17, controls: ['zoomControl', 'typeSelector'/*, 'fullscreenControl'*/]});
        let pkPlacemark = new ymaps.Placemark([55.440677, 65.355270], { hintContent: 'Филиал «Печатник»', balloonContent: 'Филиал «Печатник»' });
        pkMap.geoObjects.add(pkPlacemark);
}

function initmaps() {
    ymaps.ready(init1);
}

loadForeignScript(esl_1);

onload = initmaps;
