jQuery(document).ready(function(){
    var a = new Date();
    a.setMonth(a.getMonth()+3);
    jQuery('.yesiagree').click(function(){
        jQuery('.stripPopup').hide();
        Cookies.set("home_cookie_bar",1 ,{expires: a});
    });
});