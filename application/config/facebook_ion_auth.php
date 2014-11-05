<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Settings.
| -------------------------------------------------------------------------
*/
$config['app_id'] 		= '348477615333048'; 		// Your app id
$config['app_secret'] 	= 'dff20d4b85cd41b86943327dd3515010'; 		// Your app secret key
$config['scope'] 		= 'email'; 	// custom permissions check - http://developers.facebook.com/docs/reference/login/#permissions
$config['redirect_uri'] = ''; 		// url to redirect back from facebook. If set to '', site_url('') will be used