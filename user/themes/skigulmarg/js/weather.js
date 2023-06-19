// Weather widget

// Darksky API
var apiKey = '55abe3bd34deec2b21d51fcadc4b0614';
var latitude = '34.049';
var longitude = '74.3921';
var units = 'si';
var lang = $('html').attr('lang');
lang == 'cn' ? lang = 'zh-tw' : lang = lang
var url = 'https://api.darksky.net/forecast/' + apiKey + '/' + latitude + ',' + longitude + '?units=' + units + '&lang=' + lang;

// Translations
if (lang == 'en') {
    var gulmarg = 'Gulmarg';
    var forecast = 'Forecast';
    var weekDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    var hi = 'Hi';
    var lo = 'Lo';
    var moreInfo = 'More Info';
    var moreInfoLink = '/gulmarg-ski-resort/about-gulmarg/weather';
} else if (lang == 'fr') {
    var gulmarg = 'Gulmarg';
    var forecast = 'Prévoir';
    var weekDays = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
    var hi = 'Hi';
    var lo = 'Lo';
    var moreInfo = 'Plus d\'Info';
    var moreInfoLink = '/fr/gulmarg-station-de-ski/a-propos/meteo';
} else if (lang == 'zh-tw') {
    var gulmarg = '古尔马尔格';
    var forecast = '預測';
    var weekDays = ['星期天', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'];
    var hi = '高';
    var lo = '低';
    var moreInfo = '更多信息';
    var moreInfoLink = '/gulmarg-ski-resort/about-gulmarg/weather';
} else if (lang == 'es') {
    var gulmarg = 'Gulmarg';
    var forecast = 'Pronóstico';
    var weekDays = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
    var hi = 'Hi';
    var lo = 'Lo';
    var moreInfo = 'Más información';
    var moreInfoLink = '/gulmarg-ski-resort/about-gulmarg/weather';
}

function getIconClass(currentIconName) {
    switch(currentIconName) {
        case 'clear-day':
            return 'flaticon-sunny-day';
        case 'clear-night':
            return 'flaticon-night';
        case 'rain':
            return 'flaticon-rainy-day';
        case 'snow':
            return 'flaticon-snow-cloud';
        case 'sleet':
            return 'flaticon-sleet';
        case 'wind':
            return 'flaticon-windy-day';
        case 'fog':
            return 'flaticon-foggy';
        case 'cloudy':
            return 'flaticon-cloudy-day';
        case 'partly-cloudy-day':
            return 'flaticon-partialy-cloudy';
        case 'partly-cloudy-night':
            return 'flaticon-dark-night';
        default:
            return 'flaticon-blizzard';
    }
}

function getDayOfWeek(date) {
  var dayOfWeek = new Date(date).getDay();
  return isNaN(dayOfWeek) ? null : weekDays[dayOfWeek];
}

$.ajax({
    headers:{
        "Access-Control-Allow-Origin": "*",
        "Accept":"application/json",
        "Content-type":"application/x-www-form-urlencoded"
    },
    dataType: 'jsonp',
    type: "GET",
    url: url,
    success: function(response){
        // console.log(response.currently.icon);
        if (response.error) {
            console.log("An error occured while getting weather from Darksky.");
        } else {
            var currentIconClass = getIconClass(response.currently.icon);
            var currentTemperature = Math.round(response.currently.temperature);
            var currentSummary = response.currently.summary;
            var todayHigh = Math.round(response.daily.data[1].apparentTemperatureHigh);
            var todayLow = Math.round(response.daily.data[1].apparentTemperatureLow);

            var tomorrowWeekDay = getDayOfWeek(response.daily.data[2].time*1000);
            var tomorrowIconClass = getIconClass(response.daily.data[2].icon);
            var tomorrowHigh = Math.round(response.daily.data[2].apparentTemperatureHigh);
            var tomorrowLow = Math.round(response.daily.data[2].apparentTemperatureLow);

            var secondDayWeekDay = getDayOfWeek(response.daily.data[3].time*1000);
            var secondDayIconClass = getIconClass(response.daily.data[3].icon);
            var secondDayHigh = Math.round(response.daily.data[3].apparentTemperatureHigh);
            var secondDayLow = Math.round(response.daily.data[3].apparentTemperatureLow);

            var thirdDayWeekDay = getDayOfWeek(response.daily.data[4].time*1000);
            var thirdDayIconClass = getIconClass(response.daily.data[4].icon);
            var thirdDayHigh = Math.round(response.daily.data[4].apparentTemperatureHigh);
            var thirdDayLow = Math.round(response.daily.data[4].apparentTemperatureLow);

            var fourthDayWeekDay = getDayOfWeek(response.daily.data[5].time*1000);
            var fourthDayIconClass = getIconClass(response.daily.data[5].icon);
            var fourthDayHigh = Math.round(response.daily.data[5].apparentTemperatureHigh);
            var fourthDayLow = Math.round(response.daily.data[5].apparentTemperatureLow);

            var fifthDayWeekDay = getDayOfWeek(response.daily.data[6].time*1000);
            var fifthDayIconClass = getIconClass(response.daily.data[6].icon);
            var fifthDayHigh = Math.round(response.daily.data[6].apparentTemperatureHigh);
            var fifthDayLow = Math.round(response.daily.data[6].apparentTemperatureLow);

            var sixsDayWeekDay = getDayOfWeek(response.daily.data[7].time*1000);
            var sixsDayIconClass = getIconClass(response.daily.data[7].icon);
            var sixsDayHigh = Math.round(response.daily.data[7].apparentTemperatureHigh);
            var sixsDayLow = Math.round(response.daily.data[7].apparentTemperatureLow);

            $('#weather').html('\
                <a href="javascript:void(0);" class="title" title="Weather">\
                    <span class="title ' + currentIconClass + '" id="current-icon"></span>\
                    <span id="current-temperature" class="title">' + currentTemperature + '</span>\
                    <span id="current-temperature-unit">&#x2103;</span>\
                </a>\
                <ul class="dropdown-menu">\
                    <li class="mega-menu-content">\
                        <div id="weather-dropdown">\
                            <span id="weather-close">\
                                <i class="fa fa-close" aria-hidden="true"></i>\
                            </span>\
                            <div class="row">\
                                <div class="col-xs-12 col-md-3">\
                                    <h5 class="text-center" style="text-transform: uppercase;">' + gulmarg + '</h5>\
                                    <div id="dropdown-menu-current-weather" class="row">\
                                        <div class="col-xs-12 text-center" style="position:relative">\
                                            <span id="dropdown-menu-current-icon" class="' + currentIconClass + '"></span>\
                                            <span id="dropdown-menu-current-temperature">' + currentTemperature + '</span>\
                                            <span id="dropdown-menu-current-temperature-unit">&#x2103;</span>\
                                        </div>\
                                        <div id="dropdown-menu-current-summary" class="col-xs-12 text-center">'
                                            + currentSummary +
                                        '</div>\
                                        <div class="col-xs-12 text-center">\
                                            <span id="dropdown-menu-today-high">' + hi + ' <span id="dropdown-menu-today-high-temperature">' + todayHigh + '&#x2103;</span></span>\
                                            <span id="dropdown-menu-today-low">' + lo + ' <span id="dropdown-menu-today-low-temperature">' + todayLow + '&#x2103;</span></span>\
                                        </div>\
                                    </div>\
                                </div>\
                                <div class="col-xs-12 col-md-9">\
                                    <h5 class="text-center sm-m-b-20" style="text-transform: uppercase;">' + forecast + '</h5>\
                                    <div id="forecast" class="row">\
                                        <div class="col-xs-6 col-sm-4 col-md-2 p-b-15 text-center" style="position:relative">\
                                            <div class="forcast-weekday">' + tomorrowWeekDay + '</div>\
                                            <div class="forcast-icon"><span class="' + tomorrowIconClass + '"></span></div>\
                                            <span class="forcast-high">' + hi + ' <span class="forcast-temperature">' + tomorrowHigh + '&#x2103;</span></span>\
                                            <span class="forcast-low">' + lo + ' <span class="forcast-temperature">' + tomorrowLow + '&#x2103;</span></span>\
                                        </div>\
                                        <div class="col-xs-6 col-sm-4 col-md-2 p-b-15 text-center" style="position:relative">\
                                            <div class="forcast-weekday">' + secondDayWeekDay + '</div>\
                                            <div class="forcast-icon"><span class="' + secondDayIconClass + '"></span></div>\
                                            <span class="forcast-high">' + hi + ' <span class="forcast-temperature">' + secondDayHigh + '&#x2103;</span></span>\
                                            <span class="forcast-low">' + lo + ' <span class="forcast-temperature">' + secondDayLow + '&#x2103;</span></span>\
                                        </div>\
                                        <div class="col-xs-6 col-sm-4 col-md-2 p-b-15 text-center" style="position:relative">\
                                            <div class="forcast-weekday">' + thirdDayWeekDay + '</div>\
                                            <div class="forcast-icon"><span class="' + thirdDayIconClass + '"></span></div>\
                                            <span class="forcast-high">' + hi + ' <span class="forcast-temperature">' + thirdDayHigh + '&#x2103;</span></span>\
                                            <span class="forcast-low">' + lo + ' <span class="forcast-temperature">' + thirdDayLow + '&#x2103;</span></span>\
                                        </div>\
                                        <div class="col-xs-6 col-sm-4 col-md-2 p-b-15 text-center" style="position:relative">\
                                            <div class="forcast-weekday">' + fourthDayWeekDay + '</div>\
                                            <div class="forcast-icon"><span class="' + fourthDayIconClass + '"></span></div>\
                                            <span class="forcast-high">' + hi + ' <span class="forcast-temperature">' + fourthDayHigh + '&#x2103;</span></span>\
                                            <span class="forcast-low">' + lo + ' <span class="forcast-temperature">' + fourthDayLow + '&#x2103;</span></span>\
                                        </div>\
                                        <div class="col-xs-6 col-sm-4 col-md-2 p-b-15 text-center" style="position:relative">\
                                            <div class="forcast-weekday">' + fifthDayWeekDay + '</div>\
                                            <div class="forcast-icon"><span class="' + fifthDayIconClass + '"></span></div>\
                                            <span class="forcast-high">' + hi + ' <span class="forcast-temperature">' + fifthDayHigh + '&#x2103;</span></span>\
                                            <span class="forcast-low">' + lo + ' <span class="forcast-temperature">' + fifthDayLow + '&#x2103;</span></span>\
                                        </div>\
                                        <div class="col-xs-6 col-sm-4 col-md-2 p-b-15 text-center" style="position:relative">\
                                            <div class="forcast-weekday">' + sixsDayWeekDay + '</div>\
                                            <div class="forcast-icon"><span class="' + sixsDayIconClass + '"></span></div>\
                                            <span class="forcast-high">' + hi + ' <span class="forcast-temperature">' + sixsDayHigh + '&#x2103;</span></span>\
                                            <span class="forcast-low">' + lo + ' <span class="forcast-temperature">' + sixsDayLow + '&#x2103;</span></span>\
                                        </div>\
                                    </div>\
                                    <div class="col-xs-12 text-right m-t-10">\
                                        <a href="' + moreInfoLink + '">\
                                            <span id="more-info">' + moreInfo + '<i class="fa fa-info-circle m-l-5"></i></span>\
                                        </a>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                    </li>\
                </ul>\
            ');
        }
    },
    error: function(){
        console.log("An error occured while getting response from Darksky.");
    }
});

$('#header .menu-right > ul > li#weather').on('click', function() {
    if ($(window).width() < 992) {
        $('#header .menu-right > ul > li#weather > ul.dropdown-menu').addClass('mobile-active');
    }
});

$('body').on('click', '#header .menu-right > ul > li .dropdown-menu.mobile-active .mega-menu-content #weather-close', function() {
    if ($(window).width() < 992) {
        $('#header .menu-right > ul > li#weather > ul.dropdown-menu').removeClass('mobile-active');
    }
});
