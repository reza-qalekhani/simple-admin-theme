jQuery(document).ready(function ($) {
    $('.main-color-field').wpColorPicker();
    $('#loginbg-upload-btn').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            multiple: false
        }).open()
        .on('select', function(e){
            var uploaded_image = image.state().get('selection').first();
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            $('#rqsat_login_bg').val(image_url);
        });
    });
});