jQuery(function($){
    $('.entry-content').fitVids();

    if( aviator.navSticky ) {
        $('#site-navigation').sticky({
            topSpacing: ( $('#wpadminbar').length ? $('#wpadminbar').outerHeight() : 0 )
        });
    }

});