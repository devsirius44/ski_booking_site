jQuery(document).ready(function (){
    jQuery('a.powdernav').click(function (e) {
        jQuery('a.powdernav').removeClass('active');
        jQuery(this).addClass('active');
    });
});



