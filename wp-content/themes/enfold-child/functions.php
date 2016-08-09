<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
*/


add_filter('comment_form_default_fields', 'comment_form_default_fields_mod', 10, 1);
function comment_form_default_fields_mod($args) {
    $args['author'] = '<p class="comment-form-author"><input id="author" name="author" placeholder="Name *" type="text" value="" size="30" aria-required="true" required="required" /></p>';
    $args['email'] = '<p class="comment-form-email"><input id="email" name="email" placeholder="Email *" type="text" value="" size="30" required="required" aria-describedby="email-notes"/></p>';
    $args['url'] = '';
    return $args;
}



function add_custom_submit_button(){
?>
<script>
jQuery(window).load(function(){
jQuery('.comment_container p.form-submit input').attr('value','Send');
});
</script>
<?php
}
add_action('wp_footer', 'add_custom_submit_button');




