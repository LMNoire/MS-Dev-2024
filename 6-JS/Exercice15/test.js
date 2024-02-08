$(document).ready(function() {
    /*Hide suggestions lists*/
    $('.suggestions-container').hide();

    /*ZipCode START*/
    $("#zipCode").keyup(function(e) {
        e.preventDefault();
        /*Init city with Zip Code*/
        let city = $("#zipCode").val();
        /*Query for city*/
        $.get('https://api-adresse.data.gouv.fr/search/?q=' + city, {
            limit: 5,
            autocomplete: 1,
            dataType: 'json' 
        }, function(data, status, xhr) {
        /*Declare variable to store unique cities*/
            let uniqueCities = {}; 
        if (data.features && data.features.length > 0) {
            let suggestions = "";
            $.each(data.features, function(i, obj) {
        /*Check if the city is unique before adding it to suggestions*/
        if (!uniqueCities[obj.properties.city]) {
            uniqueCities[obj.properties.city] = true;
            suggestions += '<li class="city-suggestions">' + obj.properties.city + '</li>';
            }
        });
        /* Display suggestions to the container */
        $('.city-suggestions').html(suggestions);
        /* Display suggestion container */
        $('.suggestions-container').show();
            } else {
        /* Hide suggestion container */
        $('.suggestions-container').hide();
            }
        /*If error*/
        }, 'json').fail(function() {
            console.log("Error fetching address suggestions.");
        });
        /*Display suggestions*/
        $('.city-suggestions').on("click", ".city-suggestions", function() {
        $("#city").val($(this).text());
        /*Clear suggestions*/
        $('.suggestions-container').hide();
        });
    /*ZipCode END*/
    })

/*Street START*/
$("#street").keyup(function(e) {
    e.preventDefault();

    let city = $("#city").val();

    /*Query for street*/
    $.get('https://api-adresse.data.gouv.fr/search/?q=' + city, {
        q: $(this).val(), 
        limit: 10,
        autocomplete: 1,
        dataType: 'json' 
    }, function(data, status, xhr) {
        if (data.features && data.features.length > 0) {
            let suggestions = "";
            $.each(data.features, function(i, obj) {
                suggestions += '<li class="street-suggestions">' + obj.properties.street + '</li>';
            });
            /* Append suggestions to the container */
            $('.street-suggestions').html(suggestions);
            /* Display suggestion container */
            $('.suggestions-container2').show();
        } else {
            /* Hide suggestion container */
            $('.suggestions-container2').hide();
        }
        /*If error*/
    }, 'json').fail(function() {
        console.log("Error fetching address suggestions.");
    });
});

/* Event delegation for street suggestions */
$('.street-suggestions').on("click", ".street-suggestions", function() {
    $("#street").val($(this).text());
    /*Clear suggestions*/
    $('.suggestions-container2').hide();
});
/*Street END*/

/*End of document*/        
})


        


