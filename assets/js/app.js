(function($) {

	/**
	 *  INPUT FORM
	 */

	var form = $('#add-form');
	var	list = $('#item-list');
	var	input = form.find('#text');

	/**
	 *  SETTINGS
	 */
	
	var animation = {
		startColor: '#00bc8c',
		endColor  : '#fff',
		delay     : 200
	}
	
	input.val('').focus();

	form.on('submit', function(event) {
		event.preventDefault();

		var req = $.ajax({
			url: form.attr('action'),
			type: 'POST',
			data: form.serialize()
		});

		req.done(function(data) {
			if (data === 'success') {
				$.ajax({ url: baseURL }).done(function(html) {
					var newItem = $(html).find('li:last-child');

					newItem.appendTo( list )
					  .css({ backgroundColor: animation.startColor })
					  .delay( animation.delay )
					  .animate({ backgroundColor: animation.endColor });

					input.val('').focus();  
				});
			}
		});
	});

	input.on('keypress', function(event) {
		if ( event.which === 13 ) {
			form.submit();
			return false;
		}
	});



	/**
	 *  EDIT FORM
	 */
	
	 $('#edit-form').find('#text').select();

	
	/**
	 *  DELETE FORM
	 */
	
	$('#delete-form').on('submit', function(event) {
		return confirm('Really delete this item?');
	});



}(jQuery));