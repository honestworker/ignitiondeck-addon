<?php

function memberdeck_details_check() {
    if (is_user_logged_in()) {
        if (isset($_GET['user-details'])) {
            $current_user = wp_get_current_user();
            $user_id = $current_user->ID;
			$user_nicename = $current_user->display_name;
			$user_email = $current_user->user_email;
            if (isset($_GET['user-details']) && $_GET['user-details'] == $user_id) {
                if (isset($_POST['user-details-submit'])) {
                    $user_count = sanitize_text_field($_POST['user_count']);
                    $mobile = sanitize_text_field($_POST['mobile']);
                    $linkedinurl = sanitize_text_field($_POST['linkedin-url']);
                    $nicename2 = sanitize_text_field($_POST['nicename2']);
                    $email2 = sanitize_text_field($_POST['email2']);
                    $mobile2 = sanitize_text_field($_POST['mobile2']);
                    $linkedinurl2 = sanitize_text_field($_POST['linkedin-url2']);
                    $nicename3 = sanitize_text_field($_POST['nicename3']);
                    $email3 = sanitize_text_field($_POST['email3']);
                    $mobile3 = sanitize_text_field($_POST['mobile3']);
                    $linkedinurl3 = sanitize_text_field($_POST['linkedin-url3']);
                    $nicename4 = sanitize_text_field($_POST['nicename4']);
                    $email4 = sanitize_text_field($_POST['email4']);
                    $mobile4 = sanitize_text_field($_POST['mobile4']);
                    $linkedinurl4 = sanitize_text_field($_POST['linkedin-url4']);
                    $nicename5 = sanitize_text_field($_POST['nicename5']);
                    $email5 = sanitize_text_field($_POST['email5']);
                    $mobile5 = sanitize_text_field($_POST['mobile5']);
                    $linkedinurl5 = sanitize_text_field($_POST['linkedin-url5']);
                    $startupname = sanitize_text_field($_POST['startup-name']);
                    $stage = sanitize_text_field($_POST['stage']);
                    $websiteaddress = sanitize_text_field($_POST['website-address']);
                    $foundedin = sanitize_text_field($_POST['founded-in']);
                    $location = sanitize_text_field($_POST['location']);
                    $typeofbusiness = sanitize_text_field($_POST['type-of-business']);
                    $productservicesummary = sanitize_text_field($_POST['productservice-summary']);
                    $twitterpitch = sanitize_text_field($_POST['twitter-pitch']);
                    $teamsummary = sanitize_text_field($_POST['team-summary']);
                    $customertraction = sanitize_text_field($_POST['customer-traction']);
                    $different = sanitize_text_field($_POST['different']);
                    $cloudplatform = sanitize_text_field($_POST['cloud-platform']);
                    $letsventure = sanitize_text_field($_POST['letsventure']);
                    $expectletsventure = sanitize_text_field($_POST['expect-letsventure']);
                    $raiseamount = sanitize_text_field($_POST['raise-amount']);
                    
                    update_user_meta($user_id, 'user_count', $user_count);
                    update_user_meta($user_id, 'mobile', $mobile);
                    update_user_meta($user_id, 'linkedin_url', $linkedinurl);
                    update_user_meta($user_id, 'nicename2', $nicename2);
                    update_user_meta($user_id, 'email2', $email2);
                    update_user_meta($user_id, 'mobile2', $mobile2);
                    update_user_meta($user_id, 'linkedin_url2', $linkedinurl2);
                    update_user_meta($user_id, 'nicename3', $nicename3);
                    update_user_meta($user_id, 'email3', $email3);
                    update_user_meta($user_id, 'mobile3', $mobile3);
                    update_user_meta($user_id, 'linkedin_url3', $linkedinurl3);
                    update_user_meta($user_id, 'nicename4', $nicename4);
                    update_user_meta($user_id, 'email4', $email4);
                    update_user_meta($user_id, 'mobile4', $mobile4);
                    update_user_meta($user_id, 'linkedin_url4', $linkedinurl4);
                    update_user_meta($user_id, 'nicename5', $nicename5);
                    update_user_meta($user_id, 'email5', $email5);
                    update_user_meta($user_id, 'mobile5', $mobile5);
                    update_user_meta($user_id, 'linkedin_url5', $linkedinurl5);
                    update_user_meta($user_id, 'startup_name', $startupname);
                    update_user_meta($user_id, 'stage', $stage);
                    update_user_meta($user_id, 'website_address', $websiteaddress);
                    update_user_meta($user_id, 'founded_in', $foundedin);
                    update_user_meta($user_id, 'location', $location);
                    update_user_meta($user_id, 'type_of_business', $typeofbusiness);
                    update_user_meta($user_id, 'productservice_summary', $productservicesummary);
                    update_user_meta($user_id, 'twitter_pitch', $twitterpitch);
                    update_user_meta($user_id, 'team_summary', $teamsummary);
                    update_user_meta($user_id, 'customer_traction', $customertraction);
                    update_user_meta($user_id, 'different', $different);
                    update_user_meta($user_id, 'cloud_platform', $cloudplatform);
                    update_user_meta($user_id, 'letsventure', $letsventure);
                    update_user_meta($user_id, 'expect_letsventure', $expectletsventure);
                    update_user_meta($user_id, 'raise_amount', $raiseamount);
                }
                add_filter('the_content', 'memberdeck_details_form');
            }
        }
	}
}

add_action('init', 'memberdeck_details_check');