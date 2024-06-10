jQuery(document).ready(function() {
	jQuery('.ami-metabox-item-image').each(function(index) {
		var src = jQuery('.image img', jQuery(this)).attr('src');
		if (!(src == '' || src === undefined)) {
			jQuery('.image', jQuery(this)).show();
			jQuery('.button-delete', jQuery(this)).show();
		}
	});

	jQuery('.ami-metabox-item-image .button-select').click(function(e) {
		var index = jQuery('.ami-metabox-item-image .button-select').index(this);
		var parent = jQuery('.ami-metabox-item-image:eq(' + index + ')');

		var title = jQuery(this).attr('data-title');
		var size = e.target.id;

		var uploader = wp.media.frames.file_frame = wp.media({
			title: title,
			multiple: false
		});

		uploader.on('select', function() {
			attachment = uploader.state().get('selection').first().toJSON();

			jQuery('.image input', parent).val(attachment.url);
			jQuery('.image img', parent).attr('src', attachment.url);
			jQuery('.image', parent).show();
			jQuery('.button-delete', parent).show();
		});

		uploader.open();
	});

	jQuery('.ami-metabox-item-image .button-delete').click(function() {
		var index = jQuery('.ami-metabox-item-image .button-delete').index(this);
		var parent = jQuery('.ami-metabox-item-image:eq(' + index + ')');

		jQuery('.image input', parent).val('');
		jQuery('.image img', parent).attr('src', '');
		jQuery('.image', parent).hide();
		jQuery(this).hide();
	});
});