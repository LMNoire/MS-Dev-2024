$(document).ready(function () {
    const apiUrl = 'https://geo.api.gouv.fr/communes?codePostal=';
    const streetsUrl = 'https://api-adresse.data.gouv.fr/search/?q=';
    const format = '&format=json';

    let zipcode = $('#postalCode');
    let city = $('#city');
    let street = $('#street');
    let errorMessage = $('#error-message');

    $(zipcode).on('blur', function () {
        let code = $(this).val();
        let url = apiUrl + code + format;

        fetch(url, { method: 'get' })
            .then(response => response.json())
            .then(results => {
                $(city).find('option').remove();
                if (results.length) {
                    $(errorMessage).text('').hide();
                    $.each(results, function (key, value) {
                        console.log(value);
                        $(city).append('<option value="' + value.nom + '">' + value.nom + '</option>');
                    });
                }
                else {
                    $(city).empty();
                    $(errorMessage).text('Aucune commune avec ce code postal.').show();
                }
            })
            .catch(err => {
                console.log(err);
                $(city).find('option').remove();
            });
    });

    $(city).on('click', function () {
        let selectedCity = $(this).val();
        let selectedZipcode = $(zipcode).val();

        if (selectedCity && selectedZipcode) {
            let url2 = streetsUrl + selectedCity + '+' + selectedZipcode + format + '&limit=99';

            fetch(url2)
                .then(response => response.json())
                .then(results => {
                    console.log(results);
                    $(street).empty();
                    if (results.features && results.features.length) {
                        results.features.forEach(feature => {
                            $(street).append('<option value="' + feature.properties.name + '">' + feature.properties.name + '</option>');
                        });
                    }
                    else {
                        $(errorMessage).text('Aucune rue trouvée pour cette ville.').show();
                    }
                })
                .catch(err => {
                    console.log(err);
                    $(street).empty();
                });
        }
    });

    $("#getWeather").click(function () {
        var cityVal = $("#city").val();
        console.log(cityVal);
        var url = "https://api.openweathermap.org/data/2.5/weather?q=" + cityVal + "&appid=ffeaea7bc4baf864b1225474808ff12e&units=metric&lang=fr";

        $.get(url, function (data) {
            console.log(data);

            var cityName = data.name;
            var description = data.weather[0].description;
            var temp = data.main.temp;
            var icon = data.weather[0].icon;
            var iconurl = "http://openweathermap.org/img/w/" + icon + ".png";

            $("#weather-response").html("<p>Ville: " + cityName + "</p><p>Description: " + description + "</p><p>Température: " + temp + "°C</p><img src='" + iconurl + "' alt='Weather Icon'>");
        }).fail(function () {
            $("#weather-response").text("Impossible de récupérer la météo pour " + cityVal);
        });
    });
});

