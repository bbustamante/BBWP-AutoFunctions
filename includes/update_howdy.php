<?php
// UPDATE CUSTOM WORDPRES HOWDY BY RANDOM MESSAGE
function bbwp_howdy_mod( $wp_admin_bar ) {
	// Get user info
	$user_id = get_current_user_id();
	$current_user = wp_get_current_user();
	$profile_url = get_edit_profile_url( $user_id );

	// Custom greatings
	$messages = array(
		'May the 4th be with you',
		'Do... or do not. There is no try',
		'Bazzinga',
		'Kame Hame Ha',
	);

	// Get a ranfom greating
	$all=(count($messages)-1);
	$num=rand(0,$all);
	$greating = $messages[$num];

	// Print user menu with custom greeting
	if ( 0 != $user_id ){
		$avatar = get_avatar( $user_id, 28 );
		$howdy = sprintf( __($greating.', %1$s'), $current_user->display_name );
		$class = empty( $avatar ) ? '' : 'with-avatar';

		$wp_admin_bar->add_menu( array(
			'id' => 'my-account',
			'parent' => 'top-secondary',
			'title' => $howdy . $avatar,
			'href' => $profile_url,
			'meta' => array(
				'class' => $class,
			),
		) );
	}
}

add_action( 'admin_bar_menu', 'bbwp_howdy_mod', 11 );
?>
