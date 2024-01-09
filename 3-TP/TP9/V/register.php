<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="button.css">
    <title>Inscription</title>
    <link rel="stylesheet" href="register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Mansalva&display=swap" rel="stylesheet">
</head>

<body>

<!--Début formulaire-->
<form>
    <h1>Inscription</h1>
    <div class="inscription">
        <!--Inputs-->
        <input type="text" class="profil" name="name" placeholder="Nom" id="name" required>
        <input type="text" class="profil" name="firstname" placeholder="Prénom" id="firstname" required>
        <input type="email" class="profil" name="mail"  placeholder="Mail" id="mail" required>
        <input type="tel" class="profil" name="tel" placeholder="Téléphone" id="tel" required>
        <input type="password" class="profil" name="password" placeholder="Password" id="password" required>
        <input type="password" class="profil" placeholder="Confirmer Password" id="confirmpass" required>
            <!--Adresse-->
            <input type="text" class="profil" id="inputRue" name="inputRue" placeholder="Adresse">   
            <!--Suggestions API adresse-->
            <div class="suggestions-container">
                <ul class="adress-suggestions"></ul>
            </div>         
            <input type="text" class="profil" id="inputCodePostal" minlength="5" maxlength="5" placeholder="Code Postal">
            <input type="text" class="profil" id="inputVille" name="inputVille" placeholder="Ville">
    </div>  
<p class= sengager>S'engager ?</p>
<!--Bouton validation-->
<input type="image" src="../V/assets/sceau.png"  class="sceau" id="submit" value =" "/>   
</form>

<!--Jquery link-->
<script src="js/jquery-3.3.1.min.js"></script>

</body>
</html>

<!--Script pour récupérer infos du formulaire-->
<script>
$(document).ready(function() {
    
    /*Autocompletion adresse API gouv*/
    $("#inputRue").keyup(function(event) {
        event.preventDefault();
        
        let rue = $("#inputRue").val();
        /*Requete*/
        $.get('https://api-adresse.data.gouv.fr/search/', {
            q: rue,
            limit: 5,
            autocomplete: 1
        }, function(data, status, xhr) {
            let suggestions = "";
            $.each(data.features, function(i, obj) {
                suggestions += '<li class="address-item" data-name="' + obj.properties.name + '" data-postcode="' + obj.properties.postcode + '" data-city="' + obj.properties.city + '">' + obj.properties.label + '</li>';
            });
            $('.adress-suggestions').html(suggestions);
        }, 'json').fail(function() {
            console.log("Error fetching address suggestions.");
        });
    });

    /*Afficher suggestions*/
    $('.adress-suggestions').on("click", ".address-item", function() {
        $("#inputRue").val($(this).attr("data-name"));
        $("#inputCodePostal").val($(this).attr("data-postcode"));
        $("#inputVille").val($(this).attr("data-city"));

        /*Vider champ suggestion*/
        $('.adress-suggestions').empty();
    });

    /*Envoi du formulaire au controleur*/
    $("#submit").click(function(e){
        e.preventDefault();
            /*Call Ajax*/
            $.ajax({
            /*Chemin controleur*/
            url:"../C/createUser.action.php",
            type:'POST',
            dataType: 'json',
            data: {
                name : $("#name").val(), 
                firstname : $("#firstname").val(),
                mail : $("#mail").val(),
                tel : $("#tel").val(),
                password : $("#password").val(),
                adresse : $("#inputRue").val(),
                codepostal : $("#inputCodePostal").val(),
                ville : $("#inputVille").val(),                
            },
            /*Success*/
            success:function(response) {		
            //var json = $.parseJSON(response);
                console.log(response);
                /*Afficher résultat dans pop-up*/
                alert(response.name + response.firstname + response.ville);
                /*Clean output fields*/
                $("form")[0].reset();
            },
            /*False*/
            error:function(response) {
                console.log('error');
                alert("error");
            }
        });
    });
 });

</script>