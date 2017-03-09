<?php

require_once "./passwordLib.php";

class User{
	public $user_name = '';
	public $hash = '';
}

function makeNewUser($user, $h){
	$u = new User();
	$u->user_name = $user;
	$u->hash = $h;
	return $u;
}

function setDefaultUsers(){
	$users = array();
	$i = 0;
	$users[$i++] = makeNewUser('jack', '5d41402abc4b2a76b9719d911017c592');
	$users[$i++] = makeNewUser('bobby', '81dc9bdb52d04dc20036dbd8313ed055');
	$users[$i++] = makeNewUser('ct310', '81dc9bdb52d04dc20036dbd8313ed055');
	writeUsers($users);
}

function writeUsers($users) {
	$fh = fopen ( 'users.csv', 'w+' ) or die ( "Can't open file" );
	fputcsv ( $fh, array_keys ( get_object_vars ( $users [0] ) ) );
	for($i = 0; $i < count ( $users ); $i ++) {
		fputcsv ( $fh, get_object_vars ( $users [$i] ) );
	}
	fclose ( $fh );
}

?>
