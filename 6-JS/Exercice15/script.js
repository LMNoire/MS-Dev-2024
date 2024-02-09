/*When DOM is ready*/
$(document).ready(function () {

    const apiUrl = 'https://geo.api.gouv.fr/communes?codePostal='; //Endpoint get city
    const streetsUrl = 'https://api-adresse.data.gouv.fr/search/?q='; //Endpoint get street
    const format = '&format=json'; //Data format

    /*Init variables*/
    let zipcode = $('#postalCode');
    let city = $('#city');
    let street = $('#street');
    let errorMessage = $('#error-message');

    /*Get city with zipcode*/
    $(zipcode).on('blur', function () {
        let code = $(this).val(); //Init var code with typed value
        let url = apiUrl + code + format; //Init url with route, typed value and data format

        fetch(url, { method: 'get' }) //Get request
            .then(response => response.json()) //Json response
            .then(results => { 
                $(city).find('option').remove();
                if (results.length) {
                    $(errorMessage).text('').hide(); //Hide error message if result
                    $.each(results, function (key, value) {
                        console.log(value);
                        $(city).append('<option value="' + value.nom + '">' + value.nom + '</option>'); //Put city name inside city select
                    });
                }
                /*If no data found*/
                else {
                    $(city).empty();
                    $(errorMessage).text('Aucune commune avec ce code postal.').show(); //Display error
                }
            })
            /*If error*/
            .catch(err => {
                console.log(err);
                $(city).find('option').remove();
            });
    }); //End of city retrieve

    /*Get street with city*/
    $(city).on('click', function () {
        let selectedCity = $(this).val(); //Init var selected city with selected city data
        let selectedZipcode = $(zipcode).val(); //Init var selected zipcode with zipcode function data

        if (selectedCity && selectedZipcode) {
            let url2 = streetsUrl + selectedCity + '+' + selectedZipcode + format + '&limit=99'; //Init url with route, typed value and data format

            fetch(url2) //Get request
                .then(response => response.json()) //Json response
                .then(results => {
                    console.log(results);
                    $(street).empty();
                    if (results.features && results.features.length) {
                        results.features.forEach(feature => {
                            /*Put street name inside street select*/
                            $(street).append('<option value="' + feature.properties.name + '">' + feature.properties.name + '</option>');
                        });
                    }
                    /*If no data found*/
                    else {
                        $(errorMessage).text('Aucune rue trouvée pour cette ville.').show(); //Display error
                    }
                })
                .catch(err => {
                    console.log(err);
                    $(street).empty();
                });
        }
    });
    /*Get weather from city*/
    $("#getWeather").click(function () {
        var cityVal = $("#city").val(); //Init var cityVal with selected city
        console.log(cityVal);
        /*Init endpoint url to get the weather with parameters*/
        var url = "https://api.openweathermap.org/data/2.5/weather?q=" + cityVal + "&appid=ffeaea7bc4baf864b1225474808ff12e&units=metric&lang=fr";

        /*Get request*/
        $.get(url, function (data) {
            console.log(data);

            /*Init var for responses*/
            var cityName = data.name;
            var description = data.weather[0].description;
            var temp = data.main.temp;
            var icon = data.weather[0].icon;
            var iconurl = "http://openweathermap.org/img/w/" + icon + ".png";

            /*Display responses in html*/
            $("#weather-response").html("<p>Ville: " + cityName + "</p><p>Description: " + description + "</p><p>Température: " + temp + "°C</p><img src='" + iconurl + "' alt='Weather Icon'>");
        }).fail(function () {
            $("#weather-response").text("Impossible de récupérer la météo pour " + cityVal); //If fail to retrieve weather for this city
        });
    });
});

