'use strict';
( function( $ ) {
	$( function() {
		$( '.modaal' ).modaal( {
			type: 'image'
		} );
		$( '.masonry .item' ).hover( function() {
			$( this ).toggleClass( 'hover' );
		} );
		$( '.card' ).click( function() {
			window.location = $( this ).find( 'a' ).attr( 'href' );
			return false;
		} );
		$( '.r-tabs-accordion-title' ).click( function() {
			window.location = $( this ).find( 'a' ).attr( 'href' );
			return false;
		} );
		$( window ).load( function() {
			$( '.slick .item' ).equalHeights();
		} );

		$( window ).resize( function() {
			$( '.slick .item' ).equalHeights();
		} );
		$( '.slick' ).slick( {
			appendArrows: $( '.slick-navigation' )
		} );
		$.stellar( {
			horizontalScrolling: false,
			verticalOffset: 40
		} );
		$( '.tabs-wrapper' ).responsiveTabs( {
			startCollapsed: 'accordion'
		} );
		var allPanels = $( '.accordion-content' ).hide();

		$( '.accordion-link' ).click( function() {
			allPanels.slideUp();
			$( '.accordion-link' ).removeClass( 'active' );
			$( this ).addClass( 'active' );
			$( this ).parent().next().slideDown();
			return false;
		} );
	} );
} )( jQuery );
