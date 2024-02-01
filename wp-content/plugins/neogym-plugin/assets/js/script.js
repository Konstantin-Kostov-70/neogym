
jQuery(document).ready(async function ($) {
    $('.program_joined').on('click',async function (e) {
        e.preventDefault();
     
        let post_id = jQuery(this).attr('data-post-id'); // we'll need this later
       
        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: my_ajax_object.ajax_url,
            data: {
                action: 'program_joined', // PHP function
                post_id // we need to make this dynamic
            },
            success: function (response) {
              
               $('.joined-span').text(response);
            },
        });
    });
});