<?php
// UPDATE ADMIN FOOTER SIGNATURE
function bbwp_admin_footer_signature () {
	echo 'Web made by <a href="http://bbustamante.com" target="_blank">Beñat Bustamante</a>, powered by <a href="http://wordpress.org" target="_blank">WordPress</a>.';
}
add_filter('admin_footer_text', 'bbwp_admin_footer_signature');
?>
