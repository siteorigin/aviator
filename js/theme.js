jQuery(function($){
    $('.entry-content').fitVids();

    if( aviator.navSticky ) {
        $('#site-navigation').sticky( {
            topSpacing: ( $('#wpadminbar').css('position') !== 'absolute' && $('#wpadminbar').length ? $('#wpadminbar').outerHeight() : 0 )
        } );

        $(window).resize( function(){
            // Reset the sticky when the window resizes to account for changing admin bar positioning.
            $('#site-navigation').unstick().sticky( {
                topSpacing: ( $('#wpadminbar').css('position') !== 'absolute' && $('#wpadminbar').length ? $('#wpadminbar').outerHeight() : 0 )
            } );
        } );
    }

});