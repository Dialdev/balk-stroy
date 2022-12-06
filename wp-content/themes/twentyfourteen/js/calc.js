'use strict';

(function(){

    // if ($(location).attr('href', 'https://xn-----6kcdht5aheqk6cn1i.xn--p1ai/production/')) {
    //     $('h1').hide();
    // }
	



    if(document.querySelector('#balconCalc'))
    document.querySelector('#balconCalc').addEventListener('input', function () {
        var PRICE_FOR_METR = 2000;

        var innerPrice = {
            none: 0,
            pvh: 300,
            mdf: 450,
            drywall: 600,
            wood: 1000
        };

        var outerPrice = {
            none: 0,
            corrugated: 300,
            vinylPaneling: 450,
            siding: 600
        };

        var total = document.querySelector('#result');
        total.setAttribute('readonly', 'readonly');
        var totalResult = total.value;

        var squareTotal; //площадь балкона
        var squarePrice; // цена за балкон
        var summCheckArr = 0; // сумма всех чекбоксов
        var glazingPrice;
        var windowPrice;
        var innerTotalPrice = 0;
        var outerTotalPrice = 0;

        var lenght = document.querySelector('#lenght-balcon');
        var height = document.querySelector('#width-balcon');
        var parapet = document.querySelector('#heightParapet');

        var lenghtValue = Number(lenght.value);
        var heightValue = Number(height.value);
        var parapetValue = Number(parapet.value);

        var square = document.querySelector('.square');

        square.setAttribute('readonly', 'readonly');
        square.style = 'border: none; outline: none;';

        var rounded = function(number){
            return Number(number).toFixed(2);
        };

        var calculatedSquare = function () {

            squareTotal = (lenghtValue * heightValue) - parapetValue;

            square.setAttribute('placeholder', rounded(squareTotal) + ' м²');

            squarePrice = squareTotal * PRICE_FOR_METR;

            totalResult = squarePrice;
        };

        var typeInnerFinish = document.querySelector('#finish-inner');
        var innerPriceVal = document.getElementById('inner_price');
        var totalInnerFinish = document.querySelector('.total-inner__square');
        var totalInnerPrice = document.querySelector('#total-inner_price');

        var calcInnerPrice = function () {
            switch (typeInnerFinish.value) {
                case 'none':
                    innerPriceVal.value = innerPrice.none;
                    break;
                case 'pvh':
                    innerPriceVal.value = innerPrice.pvh;
                    break;
                case 'mdf':
                    innerPriceVal.value = innerPrice.mdf;
                    break;
                case 'drywall':
                    innerPriceVal.value = innerPrice.drywall;
                    break;
                case 'wood':
                    innerPriceVal.value = innerPrice.wood;
                    break;
            }
            innerTotalPrice = (squareTotal + parapetValue) * Number(innerPriceVal.value);
            totalInnerFinish.textContent = rounded(squareTotal + parapetValue);
            totalInnerPrice.value = rounded(innerTotalPrice);
        };

        var typeOuterFinish = document.querySelector('#finish-outer');
        var outerPriceVal = document.getElementById('outer_price');
        var totalOuterFinish = document.querySelector('.total-outer__square');
        var totalOuterPrice = document.querySelector('#total-outer_price');

        var calcOuterPrice = function () {
            switch (typeOuterFinish.value) {
                case 'none':
                    outerPriceVal.value = outerPrice.none;
                    break;
                case 'corrugated':
                    outerPriceVal.value = outerPrice.corrugated;
                    break;
                case 'vinyl-paneling':
                    outerPriceVal.value = outerPrice.vinylPaneling;
                    break;
                case 'siding':
                    outerPriceVal.value = outerPrice.siding;
                    break;
            }
            outerTotalPrice = (squareTotal + parapetValue) * Number(outerPriceVal.value);
            totalOuterFinish.textContent = rounded(squareTotal + parapetValue);
            totalOuterPrice.value = rounded(outerTotalPrice);
        };

        var calculateGlazing = function () {
            var glazingRadio = document.querySelectorAll('.glazing__item');
            glazingRadio.forEach(function (item) {
                if (item.checked) {
                    glazingPrice = Number(item.value);
                }
            });
        };

        var calculatedCheck = function () {
            var checkedValue = null;
            var checkArr = [];
            var reducer = (accumulator, currentValue) => accumulator + currentValue;
            var inputElements = document.getElementsByClassName('wiping');
            for (var i = 0; inputElements[i]; ++i) {
                if (inputElements[i].checked) {
                    checkedValue = Number(inputElements[i].value);
                    checkArr.push(checkedValue);
                    summCheckArr = checkArr.reduce(reducer);
                }
            }
        };

        var calculateWindow = function () {
            var windowRadio = document.querySelectorAll('.window_item');
            windowRadio.forEach(function (item) {
                if (item.checked) {
                    windowPrice = Number(item.value);
                }
            });
        };


        calculatedSquare();
        calculateGlazing();
        calculatedCheck();
        calculateWindow();
        calcInnerPrice();
        calcOuterPrice();

        totalResult = squarePrice + summCheckArr + windowPrice + glazingPrice + innerTotalPrice + outerTotalPrice;

        total.setAttribute('value', totalResult + ' руб.');
    });

})();