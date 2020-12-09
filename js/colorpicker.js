$(document).ready(function(){

// AU CLICK SUR L'ICONE GOUTTE
$('.goutte').click(function(){
    $('.colorpicker').toggleClass( "colorpicker_anim")
    $('.goutte').toggleClass( "goutte_anim")
})

//AU CLICK SUR LE BOUTON VERT
    $('.vert').click(function(){
        $('.art_3 button').css("border", "1px solid greenyellow")
        $(".trait, .trait_about").css("background-color", "greenyellow")
        $(".filtre_content a").removeClass("ACTIVE")
        $(".art_1 a, .art_2 i, .about a, footer p a").css("color", "greenyellow")
        $('.ACTIVE').css("color", "greenyellow!important")

        
        // CHANGEMENT COULEUR BUTTON
        $('.btn').addClass('btn-green')
        $('.btn-color-orange').addClass('btn-color-green')
        $('.btn-background-orange').addClass('btn-background-green')
        
        // AJOUTER LA CLASS ACTIVE_GREEN
        $(".filtre_content a").click(function(){
            $(this).css("color", "greenyellow");
        });
        // HOVER SUR LA NAV DU PORTFOLIO
        $(".filtre_content a").hover(function(){
            $(this).css("color", "greenyellow");
        }, function(){
            $(this).css("color", "grey");
        });
        // HOVER SUR L'ELEMENT ACCORDION
        $(".accordion ").hover(function(){
            $(this).css("background-color", "greenyellow");
        }, function(){
            $(this).css("background-color", "white");
        });
        // SUPPRIMER LES AUTRES CLASS
        // BOUTON BLEUE
        $('.btn-blue').removeClass('btn-blue')
        $('.btn-color-blue').removeClass('btn-color-blue')
        $('.btn-background-blue').removeClass('btn-background-blue')
    });

    //AU CLICK SUR LE BOUTON BLEUE
    $('.bleue').click(function(){
        $('.art_3 button').css("border", "1px solid cornflowerblue")
        $(".trait, .trait_about").css("background-color", "cornflowerblue")
        $(".filtre_content a").removeClass("ACTIVE")
        $(".art_1 a, .art_2 i, .about a, footer p a").css("color", "cornflowerblue")

        
        // CHANGEMENT COULEUR BUTTON
        $('.btn').addClass('btn-blue')
        $('.btn-color-orange').addClass('btn-color-blue')
        $('.btn-background-orange').addClass('btn-background-blue')
        
        // AJOUTER LA CLASS ACTIVE_GREEN
        $(".filtre_content a").click(function(){
            $(this).css("color", "blue");
        });
        // HOVER SUR LA NAV DU PORTFOLIO
        $(".filtre_content a").hover(function(){
            $(this).css("color", "cornflowerblue");
        }, function(){
            $(this).css("color", "grey");
        });
        // HOVER SUR L'ELEMENT ACCORDION
        $(".accordion ").hover(function(){
            $(this).css("background-color", "cornflowerblue");
        }, function(){
            $(this).css("background-color", "white");
        });
        // SUPPRIMER LES AUTRES CLASS
        // BOUTON VERT
        $('.btn').removeClass('btn-green')
        $('.btn-color-orange').removeClass('btn-color-green')
        $('.btn-background-orange').removeClass('btn-background-green')
    });
    
}) // FIN READY FUNCTION
