// Bootstrap specific functions and styling
jQuery(document).ready(function(){
	function wpex_staticheader() {
		var header_height = jQuery('.navbar').outerHeight();
		jQuery('#page').css({
			paddingTop: header_height
		});

		if (jQuery('#wpadminbar').length) {
			var admin_height = jQuery('#wpadminbar').outerHeight();
			jQuery('.navbar').css({
				position: 'fixed',
				top: admin_height
			});

		}
	}

	wpex_staticheader();

	jQuery(window).resize(function () {
		wpex_staticheader();
	});

	jQuery(window).bind('orientationchange', function(event) {
		var header_height = jQuery('.navbar').outerHeight();
		jQuery('#page').css({
			paddingTop: header_height
		});

		if (jQuery('#wpadminbar').length) {
			var admin_height = jQuery('#wpadminbar').outerHeight();
			jQuery('.navbar').css({
				position: 'fixed',
				top: admin_height
			});

		}
	});


	// here for each comment reply link of WordPress
	jQuery( '.fscf-div-clear .fscf-div-field-left' ).addClass( 'form-group' );
	jQuery( '.fscf-div-field .fscf-input-text' ).addClass( 'form-control' );
	jQuery( '.fscf-div-field .fscf-input-textarea' ).addClass( 'form-control' );


	jQuery( '.comment-reply-link' ).addClass( 'btn btn-sm btn-default' );

	// here for the submit button of the comment reply form
	jQuery( '#submit, button[type=submit], button, html input[type=button], input[type=reset], input[type=submit]' ).addClass( 'btn btn-default' );

	// Now we'll add some classes for the WordPress default widgets - let's go
	jQuery( '.widget_rss ul' ).addClass( 'media-list' );

	// Add Bootstrap style for drop-downs
	jQuery( '.postform' ).addClass( 'form-control' );

	// Add Bootstrap styling for tables
	jQuery( 'table#wp-calendar' ).addClass( 'table table-striped');

	jQuery( '#submit, .tagcloud, button[type=submit], .comment-reply-link, .widget_rss ul, .postform, table#wp-calendar' ).show( "fast" );

	jQuery(function() {
		jQuery('.pop').click(function (e) {
			jQuery('#imagemodal .imagepreview').attr('src', jQuery(this).attr('data-img-url'));
			jQuery('#imagemodal .modal-title').html(jQuery(this).attr('data-img-alt'));
			jQuery('#imagemodal').modal('show');
		});
	});

	//Check to see if the window is top if not then display button
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 100) {
			jQuery('.scroll-to-top').fadeIn();
		} else {
			jQuery('.scroll-to-top').fadeOut();
		}
	});

	//Click event to scroll to top
	jQuery('.scroll-to-top').click(function(){
		jQuery('html, body').animate({scrollTop : 0},800);
		return false;
	});

	jQuery(function() {
		jQuery('.carousel-caption a[href*=#]:not([href=#]), .jumbo-caption a[href*=#]:not([href=#])').click(function() {
			var location = "";
		    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
		      var target = jQuery(this.hash);
		      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        jQuery('html,body').animate({
		          scrollTop: (target.offset().top - 50)
		        }, 1000);
		        return false;
		      }
		    }
		});
		jQuery('.opt-jumpmenu a[href*=#]:not([href=#])').click(function() {
			var location = "";
		    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
		      var target = jQuery(this.hash);
		      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        jQuery('html,body').animate({
		          scrollTop: (target.offset().top-125)
		        }, 1000);
		        return false;
		      }
		    }
		});
	});
});
