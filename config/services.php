<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'secret' => '',
	],

	'google' => [
		'client_id'     => '475859888716-dlf1tog6ff4jtlbu2rpmmcoer7vsidbv.apps.googleusercontent.com',
		'client_secret' => 'mMaD5APkn-8GLt50RGwlD1wO',
		'redirect'      => 'http://localhost:8000/login/google/callback',
	],

	'facebook' => [
        'client_id' => '357585788336563',
        'client_secret' => '6dd5c1e168e79aa50a27d7ab4140ed00',
        'redirect' => 'http://www.facebook.com',
    ],

	

];
