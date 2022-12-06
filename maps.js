ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [54.512516,36.278268],
            zoom: 13
        }),
        myPlacemark = new ymaps.Placemark([54.522353,36.29041], {
            balloonContent: '<img src="http://potolkikaluga.ru/template/img/logo_cart.png""><strong>ОФИС ПРОДАЖ</strong><br>ТСЦ "Белый дом 3"<br>Грабцевское шоссе, 22<br>',
            hintContent: '<strong>ОФИС ПРОДАЖ</strong>'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'http://potolkikaluga.ru/template/img/zn.png',
            // Размеры метки.
            iconImageSize: [30, 50],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-8, -60]
        }),
myPlacemark1 = new ymaps.Placemark([54.514347,36.271492], {
            balloonContent: '<img src="http://potolkikaluga.ru/template/img/logo_cart.png"><strong>ГОЛОВНОЙ ОФИС</strong><br>пер. Теренинский 6, <br>Офис 301<br>',
            hintContent: '<strong>ОФИС ПРОДАЖ</strong>'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'http://potolkikaluga.ru/template/img/zn.png',
            // Размеры метки.
            iconImageSize: [30, 50],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-8, -60]
        }),
    myPlacemark2 = new ymaps.Placemark([54.508859, 36.257316], {
            balloonContent: '<img src="http://potolkikaluga.ru/template/img/logo_cart.png"><strong>ГОЛОВНОЙ ОФИС</strong><br>Калуга, ул. Ленина, 102<br>',
            hintContent: '<strong>ГОЛОВНОЙ ОФИС</strong>'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'http://potolkikaluga.ru/template/img/zn.png',
            // Размеры метки.
            iconImageSize: [30, 50],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-8, -60]
        });
    myMap.geoObjects.add(myPlacemark);
	myMap.geoObjects.add(myPlacemark1);
    myMap.geoObjects.add(myPlacemark2);
});