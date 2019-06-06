$(document).ready(function(){

    document.addEventListener('DOMContentLoaded', function(){
        map = this.getElementById('map'); // je selectionne mon élément global
        paths = map.getElementsByTagName('path'); // je mets dans un tableau chacunes des formes

        for (var i = 0; i < paths.length; i++) {
            paths[i].addEventListener("click", function(e){
                // pour chaque forme, je fais en sorte qu'un click retourne l'id
                console.log(e.target.id);
            })
        }
    });

    // ///////////////////////////////////
    // ////// FLEXSLIDER DU HEADER ///////
    // ///////////////////////////////////
    $('.flexslider-header').flexslider({
    animation: "slide",
    controlNav: false,
    directionNav: false,
    animationSpeed: 2000,
    slideshowSpeed: 15000
    },10 );

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    // ///////////////////////////////////
    // ////// MESSAGES FLASH ///////
    // ///////////////////////////////////
    setTimeout(function() {  $('.java').hide(1000); }, 6000);




})
