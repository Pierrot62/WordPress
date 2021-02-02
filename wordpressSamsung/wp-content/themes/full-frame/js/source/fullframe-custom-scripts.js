 /*
 * Custom scripts
 * Description: Custom scripts for fullframe
 */



jQuery(document).ready(function() {
    var jQueryheader_search = jQuery( '#header-toggle' );
    jQueryheader_search.click( function() {

        var jQueryform_search = jQuery("div").find( '#masthead' );  
            
        if ( jQueryform_search.hasClass( 'displaynone' ) ) {
            jQueryform_search.removeClass( 'displaynone' ).addClass( 'displayblock' ).animate( { opacity : 1 }, 300 );
        } else {
            jQueryform_search.removeClass( 'displayblock' ).addClass( 'displaynone' ).animate( { opacity : 0 }, 300 );      
        }
    });

    //Fit vids
    if ( jQuery.isFunction( jQuery.fn.fitVids ) ) {
        jQuery('.hentry, .widget').fitVids();
    }

    //sidr
    if ( jQuery.isFunction( jQuery.fn.sidr ) ) {
        jQuery('#mobile-header-left-menu').sidr({
           name: 'mobile-header-left-nav',
           side: 'left' // By default
        });
        jQuery('#mobile-header-right-menu').sidr({
           name: 'mobile-header-right-nav',
           side: 'right' // By default
        });
        jQuery('#mobile-secondary-menu').sidr({
           name: 'mobile-secondary-nav',
           side: 'left' // By default
        });

        jQuery( '.menu-item-has-children > a' ).after( '<button class="dropdown-toggle" aria-expanded="false"><span class="screen-reader-text">collapse child menu</span></button>' );

        var sub_menu = jQuery('.dropdown-toggle');

        sub_menu.click(function() {
            //e.preventDefault();
            jQuery(this).toggleClass('toggled-on');
            jQuery(this).next().slideToggle();
            jQuery(this).prev().toggleClass('is-open');

             // jscs:disable
                jQuery(this).attr( 'aria-expanded', jQuery(this).attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
    }); 

    }   

    //Sticky Header
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 40) {
            jQuery('#fixed-header').addClass("is-sticky");
        } else {
            jQuery('#fixed-header').removeClass("is-sticky");
        }
    });

});

( function( $ ) {
        var body, masthead, menuToggle, siteNavigation, siteHeaderMenu, resizeTimer;

        function initMainNavigation( container ) {

            // Add dropdown toggle that displays child menu items.
            var dropdownToggle = $( '<button />', {
                'class': 'dropdown-toggle',
                'aria-expanded': false
            } ).append( $( '<span />', {
                'class': 'screen-reader-text',
                text: screenReaderText.expand
            } ) );

            container.find( '.menu-item-has-children > a' ).after( dropdownToggle );

            // Toggle buttons and submenu items with active children menu items.
            container.find( '.current-menu-ancestor > button' ).addClass( 'toggled-on' );
            container.find( '.current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );

            // Add menu items with submenus to aria-haspopup="true".
            container.find( '.menu-item-has-children' ).attr( 'aria-haspopup', 'true' );

            container.find( '.dropdown-toggle' ).click( function( e ) {
                var _this            = $( this ),
                    screenReaderSpan = _this.find( '.screen-reader-text' );

                e.preventDefault();
                _this.toggleClass( 'toggled-on' );
                _this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );

                // jscs:disable
                _this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
                // jscs:enable
                screenReaderSpan.text( screenReaderSpan.text() === screenReaderText.expand ? screenReaderText.collapse : screenReaderText.expand );
            } );
        }
        initMainNavigation( $( '.main-navigation' ) );

        masthead         = $( '#masthead' );
        menuToggle       = masthead.find( '#menu-toggle' );
        siteHeaderMenu   = masthead.find( '#site-header-menu' );
        siteNavigation   = masthead.find( '#site-navigation' );

        // Enable menuToggle.
        ( function() {

            // Return early if menuToggle is missing.
            if ( ! menuToggle.length ) {
                return;
            }

            // Add an initial values for the attribute.
            //menuToggle.add( siteNavigation ).add( socialNavigation ).attr( 'aria-expanded', 'false' );

            menuToggle.on( 'click.rock-star-pro', function() {
                $( this ).add( siteHeaderMenu ).toggleClass( 'toggled-on' );

                // jscs:disable
                //$( this ).add( siteNavigation ).add( socialNavigation ).attr( 'aria-expanded', $( this ).add( siteNavigation ).add( socialNavigation ).attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
                // jscs:enable
            } );
        } )();

        // Fix sub-menus for touch devices and better focus for hidden submenu items for accessibility.
        ( function() {
            if ( ! siteNavigation.length || ! siteNavigation.children().length ) {
                return;
            }

            // Toggle `focus` class to allow submenu access on tablets.
            function toggleFocusClassTouchScreen() {
                if ( window.innerWidth >= 910 ) {
                    $( document.body ).on( 'touchstart.rock-star-pro', function( e ) {
                        if ( ! $( e.target ).closest( '.main-navigation li' ).length ) {
                            $( '.main-navigation li' ).removeClass( 'focus' );
                        }
                    } );
                    siteNavigation.find( '.menu-item-has-children > a' ).on( 'touchstart.rock-star-pro', function( e ) {
                        var el = $( this ).parent( 'li' );

                        if ( ! el.hasClass( 'focus' ) ) {
                            e.preventDefault();
                            el.toggleClass( 'focus' );
                            el.siblings( '.focus' ).removeClass( 'focus' );
                        }
                    } );
                } else {
                    siteNavigation.find( '.menu-item-has-children > a' ).unbind( 'touchstart.rock-star-pro' );
                }
            }

            if ( 'ontouchstart' in window ) {
                $( window ).on( 'resize.rock-star-pro', toggleFocusClassTouchScreen );
                toggleFocusClassTouchScreen();
            }

            siteNavigation.find( 'a' ).on( 'focus.rock-star-pro blur.rock-star-pro', function() {
                $( this ).parents( '.menu-item' ).toggleClass( 'focus' );
            } );
        } )();

});