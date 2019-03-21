
$(document).ready(function(){

    $('#flex1').flexslider({
        animation:"slides"

    },10);

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


})