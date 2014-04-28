
// Menu inside Nav
$(document).ready(function(){
            $('#menu a').click(function(e){
                e.preventDefault();
                $(this).closest('li').find('>ul').slideToggle();
            });
        });

