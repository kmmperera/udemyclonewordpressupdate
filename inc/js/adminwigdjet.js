if (jQuery) {  
    console.log('Jquery Loaded');
} else {
    console.log('Jquery Not Loaded');
}



jQuery(document).ready(function ($) {
    console.log("hello");

	$('body').on('click', '.js-image-upload', function (e) {
        console.log("clicked");
		e.preventDefault();
		var $button = $(this);

		var file_frame = wp.media.frames.file_frame = wp.media({
			title: 'Select or Upload an Image',
			library: {
				type: 'image' // mime type
			},
			button: {
				text: 'Select Image'
			},
			multiple: false
		});

		file_frame.on('select', function() {
			var attachment = file_frame.state().get('selection').first().toJSON();
			$button.siblings('.image-upload').val(attachment.url);
		});

		file_frame.open();
	  });
});

console.log("from main js file");