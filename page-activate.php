<?php

$uid = $_GET['uid'];
$key = $_GET['key'];

if( ! $uid ) {

	print "USER ID NOT FOUND.";

}

if( ! $key ) {

	print "KEY NOT FOUND.";

}

print $uid;
print '<hr />';
print $key;

// Do user meta query check.

$isActivated = get_user_meta( $uid, '_sbm_email_activation', 1 );

if( $isActivated ) {

	print '<hr />';
	print 'This account already activated.';

} else {

	$activationKey = get_user_meta( $uid, '_sbm_email_activation_key', 1 );
	if( $activationKey !== $key ) {

		print $activationKey;

		print '<hr />';
		print 'Invalid key.';

	} else {

		print '<hr />';
		print 'Key good, account activated.';

	}

}
