( function( api ) {

	// Extends our custom "shree" section.
	api.sectionConstructor['shree'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
