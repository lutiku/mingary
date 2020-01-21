/*___________________Navbar____________*/
$(document).on("scroll", function(){
    if
    ($(document).scrollTop() > 86){
        $("#banner").addClass("shrink");
    }
    else
    {
        $("#banner").removeClass("shrink");
    }
});

/*________________________________Formulaire de contact_____________________________*/
/*$(document).ready(function() {
    // Test for placeholder support
    $.support.placeholder = (function(){
        var i = document.createElement('input');
        return 'placeholder' in i;
    })();

    // Hide labels by default if placeholders are supported
    if($.support.placeholder) {
        $('.form-label').each(function(){
            $(this).addClass('js-hide-label');
        });

        // Code for adding/removing classes here
        $('.form-group').find('input, textarea').on('keyup blur focus', function(e){

            // Cache our selectors
            var $this = $(this),
                $label = $this.parent().find("label");

            switch(e.type) {
                case 'keyup': {
                    $label.toggleClass('js-hide-label', $this.val() == '');
                } break;
                case 'blur': {
                    if( $this.val() == '' ) {
                        $label.addClass('js-hide-label');
                    } else {
                        $label.removeClass('js-hide-label').addClass('js-unhighlight-label');
                    }
                } break;
                case 'focus': {
                    if( $this.val() !== '' ) {
                        $label.removeClass('js-unhighlight-label');
                    }
                } break;
                default: break;
            }
            // previous implementation with ifs
            /*if (e.type == 'keyup') {
                if( $this.val() == '' ) {
                    $parent.addClass('js-hide-label');
                } else {
                    $parent.removeClass('js-hide-label');
                }
            }
            else if (e.type == 'blur') {
                if( $this.val() == '' ) {
                    $parent.addClass('js-hide-label');
                }
                else {
                    $parent.removeClass('js-hide-label').addClass('js-unhighlight-label');
                }
            }
            else if (e.type == 'focus') {
                if( $this.val() !== '' ) {
                    $parent.removeClass('js-unhighlight-label');
                }
            }*/
      /*  });
    }
});
*/
/*_________________________Anim Fiche de présentation de partenaires______________*/



/*_________________Select bouton_________________________*/

$(function() {
    $('#colorselector').change(function(){
        $('.colors').hide();
        $('#' + $(this).val()).show();
        $("#part").addClass("test");
        $("#row-au-chargement").addClass("opacity");
        $("#pro").removeClass("opacity");



    });
});
// [forked from](http://jsfiddle.net/FvMYz/)
// [show-hide-based-on-select-option-jquery)(http://stackoverflow.com/questions/2975521/show-hide-div-based-on-select-option-jquery/2975565#2975565)

/*_______________________________________Accueil-Ateliersetaccompagnements principaux_____________*/

$(document).ready(function() {
    $('.menu').click(function() {
        $('nav').toggleClass('active');
        $('div.menu').toggleClass('rotated');
    });
});