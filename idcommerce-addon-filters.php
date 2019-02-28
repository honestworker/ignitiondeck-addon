<?php
/**
 * Filter called from memberdeck_details_form() in idc-functions
 */
function memberdeck_details_form($content) {
    ob_start();
    
    include IDC_ADDON_PATH . 'templates/_editDetailsTabs.php';
    
    $current_user = wp_get_current_user();
    $user_id = $current_user->ID;
    $user_nicename = $current_user->display_name;
    $user_email = $current_user->user_email;
    
	$usermeta = get_user_meta($user_id);
	if (isset($usermeta['user_count'][0]))
		$user_count = $usermeta['user_count'][0];
	if (isset($usermeta['mobile'][0]))
		$user_mobile = $usermeta['mobile'][0];
	if (isset($usermeta['linkedin_url'][0]))
		$user_linkedinurl = $usermeta['linkedin_url'][0];
	if (isset($usermeta['nicename2'][0]))
		$user_nicename2 = $usermeta['nicename2'][0];
	if (isset($usermeta['email2'][0]))
		$user_email2 = $usermeta['email2'][0];
	if (isset($usermeta['mobile2'][0]))
		$user_mobile2 = $usermeta['mobile2'][0];
	if (isset($usermeta['linkedin_url2'][0]))
		$user_linkedinurl2 = $usermeta['linkedin_url2'][0];
	if (isset($usermeta['nicename3'][0]))
		$user_nicename3 = $usermeta['nicename3'][0];
	if (isset($usermeta['email3'][0]))
		$user_email3 = $usermeta['email3'][0];
	if (isset($usermeta['mobile3'][0]))
		$user_mobile3 = $usermeta['mobile3'][0];
	if (isset($usermeta['linkedin_url3'][0]))
		$user_linkedinurl3 = $usermeta['linkedin_url3'][0];
	if (isset($usermeta['nicename4'][0]))
		$user_nicename4 = $usermeta['nicename4'][0];
	if (isset($usermeta['email4'][0]))
		$user_email4 = $usermeta['email4'][0];
	if (isset($usermeta['mobile4'][0]))
		$user_mobile4 = $usermeta['mobile4'][0];
	if (isset($usermeta['linkedin_url4'][0]))
		$user_linkedinurl4 = $usermeta['linkedin_url4'][0];
	if (isset($usermeta['nicename5'][0]))
		$user_nicename5 = $usermeta['nicename5'][0];
	if (isset($usermeta['email5'][0]))
		$user_email5 = $usermeta['email5'][0];
	if (isset($usermeta['mobile5'][0]))
		$user_mobile5 = $usermeta['mobile5'][0];
	if (isset($usermeta['linkedin_url5'][0]))
		$user_linkedinurl5 = $usermeta['linkedin_url5'][0];
	if (isset($usermeta['startup_name'][0]))
		$user_startupname = $usermeta['startup_name'][0];
	if (isset($usermeta['stage'][0]))
		$user_stage = $usermeta['stage'][0];
	if (isset($usermeta['website_address'][0]))
		$user_websiteaddress = $usermeta['website_address'][0];
	if (isset($usermeta['founded_in'][0]))
		$user_foundedin = $usermeta['founded_in'][0];
	if (isset($usermeta['location'][0]))
		$user_location = $usermeta['location'][0];
	if (isset($usermeta['type_of_business'][0]))
		$user_typeofbusiness = $usermeta['type_of_business'][0];
	if (isset($usermeta['productservice_summary'][0]))
		$user_productservicesummary = $usermeta['productservice_summary'][0];
	if (isset($usermeta['twitter_pitch'][0]))
		$user_twitterpitch = $usermeta['twitter_pitch'][0];
	if (isset($usermeta['team_summary'][0]))
		$user_teamsummary = $usermeta['team_summary'][0];
	if (isset($usermeta['customer_traction'][0]))
		$user_customertraction = $usermeta['customer_traction'][0];
	if (isset($usermeta['different'][0]))
		$user_different = $usermeta['different'][0];
	if (isset($usermeta['cloud_platform'][0]))
		$user_cloudplatform = $usermeta['cloud_platform'][0];
	if (isset($usermeta['letsventure'][0]))
		$user_letsventure = $usermeta['letsventure'][0];
	if (isset($usermeta['expect_letsventure'][0]))
		$user_expectletsventure = $usermeta['expect_letsventure'][0];
	if (isset($usermeta['raise_amount'][0]))
		$user_raiseamount = $usermeta['raise_amount'][0];
	
	if (isset($_GET['edited'])) {
		$success = __('User Detail Information Updated!', 'memberdeck');
	}
	// Setting error if there is one
	if (isset($_GET['error_msg'])) {
		$error = $_GET['error_msg'];
	}
    include IDC_ADDON_PATH . 'templates/_editDetails.php';
    $content = ob_get_contents();
    ob_end_clean();
    
    return $content;
}