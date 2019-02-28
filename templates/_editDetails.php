<div class="memberdeck ignitiondeck">
	<?php include_once IDC_ADDON_PATH.'templates/_mdDetailsTabs.php'; ?>
	<ul class="md-box-wrapper full-width cf">
	<?php echo (isset($error) ? '<p class="error">'.$error.'</p>' : ''); ?>
	<?php echo (isset($success) ? '<p class="success">'.$success.'</p>' : ''); ?>
        <form action="?user-details=<?php echo (isset($current_user->ID) ? $current_user->ID : ''); ?>&amp;edited=1" method="POST" id="user-details" name="user-details" enctype="multipart/form-data">
            <li class="md-box">
                <div class="md-profile">
                    <div id="logged-input" class="no">
                        <p><h4 class="border-bottom"><?php _e('Founder Information', 'memberdeck'); ?></h4></p>
                        <div class="form-row half left">
                            <label for="user_count"><?php _e('How many founders/co-founders do you have?', 'memberdeck'); ?></label>
                            <select id="user_count" name="user_count" class="form-control ng-pristine ng-valid ng-valid-required ng-touched" required="">
                                <option value="1" <?php if (isset($user_count)) { if ($user_count == "1") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>>1</option>
                                <option value="2" <?php if (isset($user_count)) { if ($user_count == "2") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>>2</option>
                                <option value="3" <?php if (isset($user_count)) { if ($user_count == "3") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>>3</option>
                                <option value="4" <?php if (isset($user_count)) { if ($user_count == "4") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>>4</option>
                                <option value="5" <?php if (isset($user_count)) { if ($user_count == "5") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>>5</option>
                            </select>
                        </div>
                        <div class="form-row full">
                            <label><?php _e('Your Information', 'memberdeck'); ?></label>
                        </div>
                        <div class="form-row half left first">
                            <label><?php _e('Name', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <input type="text" size="20" class="nicename" value="<?php echo (isset($user_nicename) ? $user_nicename : ''); ?>" required/>
                        </div>
                        <div class="form-row half">
                            <label for="email"><?php _e('Email', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <input type="text" size="20" class="email" name="email" value="<?php echo (isset($user_email) ? $user_email : ''); ?>" required/>
                        </div>
                        <div class="form-row half left first">
                            <label><?php _e('Mobile', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <input type="text" size="20" class="mobile" name="mobile" value="<?php echo (isset($user_mobile) ? $user_mobile : ''); ?>" required/>
                        </div>
                        <div class="form-row half">
                            <label><?php _e('LinkedIn URL', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <input type="text" size="20" class="linkedin-url" name="linkedin-url" value="<?php echo (isset($user_linkedinurl) ? $user_linkedinurl : ''); ?>" required/>
                        </div>
                        <div class="form-row full" id="user-info2" <?php if ((int)$user_count < 2) echo 'style="display:none"'; ?>>
                            <div class="form-row full">
                                <label><?php _e('Founder 2', 'memberdeck'); ?></label>
                            </div>
                            <div class="form-row half left first">
                                <label><?php _e('Name', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="nicename2" name="nicename2" value="<?php echo (isset($user_nicename2) ? $user_nicename2 : ''); ?>" required/>
                            </div>
                            <div class="form-row half">
                                <label for="email"><?php _e('Email', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="email2" name="email2" value="<?php echo (isset($user_email2) ? $user_email2 : ''); ?>" required/>
                            </div>
                            <div class="form-row half left first">
                                <label><?php _e('Mobile', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="mobile2" name="mobile2" value="<?php echo (isset($user_mobile2) ? $user_mobile2 : ''); ?>" required/>
                            </div>
                            <div class="form-row half">
                                <label><?php _e('LinkedIn URL', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="linkedin-url2" name="linkedin-url2" value="<?php echo (isset($user_linkedinurl2) ? $user_linkedinurl2 : ''); ?>" required/>
                            </div>
                        </div>
                        <div class="form-row full" id="user-info3" <?php if ((int)$user_count < 3) echo 'style="display:none"'; ?>>
                            <div class="form-row full">
                                <label><?php _e('Founder 3', 'memberdeck'); ?></label>
                            </div>
                            <div class="form-row half left first">
                                <label><?php _e('Name', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="nicename3" name="nicename3" value="<?php echo (isset($user_nicename3) ? $user_nicename3 : ''); ?>" required/>
                            </div>
                            <div class="form-row half">
                                <label for="email"><?php _e('Email', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="email3" name="email3" value="<?php echo (isset($user_email3) ? $user_email3 : ''); ?>" required/>
                            </div>
                            <div class="form-row half left first">
                                <label><?php _e('Mobile', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="mobile3" name="mobile3" value="<?php echo (isset($user_mobile3) ? $user_mobile3 : ''); ?>" required/>
                            </div>
                            <div class="form-row half">
                                <label><?php _e('LinkedIn URL', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="linkedin-url3" name="linkedin-url3" value="<?php echo (isset($user_linkedinurl3) ? $user_linkedinurl3 : ''); ?>" required/>
                            </div>
                        </div>
                        <div class="form-row full" id="user-info4" <?php if ((int)$user_count < 4) echo 'style="display:none"'; ?>>
                            <div class="form-row full">
                                <label><?php _e('Founder 4', 'memberdeck'); ?></label>
                            </div>
                            <div class="form-row half left first">
                                <label><?php _e('Name', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="nicename4" name="nicename4" value="<?php echo (isset($user_nicename4) ? $user_nicename4 : ''); ?>" required/>
                            </div>
                            <div class="form-row half">
                                <label for="email"><?php _e('Email', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="email4" name="email4" value="<?php echo (isset($user_email4) ? $user_email4 : ''); ?>" required/>
                            </div>
                            <div class="form-row half left first">
                                <label><?php _e('Mobile', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="mobile4" name="mobile4" value="<?php echo (isset($user_mobile4) ? $user_mobile4 : ''); ?>" required/>
                            </div>
                            <div class="form-row half">
                                <label><?php _e('LinkedIn URL', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="linkedin-url4" name="linkedin-url4" value="<?php echo (isset($user_linkedinurl4) ? $user_linkedinurl4 : ''); ?>" required/>
                            </div>
                        </div>
                        <div class="form-row full" id="user-info5" <?php if ((int)$user_count < 5) echo 'style="display:none"'; ?>>
                            <div class="form-row full">
                                <label><?php _e('Founder 5', 'memberdeck'); ?></label>
                            </div>
                            <div class="form-row half left first">
                                <label><?php _e('Name', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="nicename5" name="nicename5" value="<?php echo (isset($user_nicename5) ? $user_nicename5 : ''); ?>" required/>
                            </div>
                            <div class="form-row half">
                                <label for="email"><?php _e('Email', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="email5" name="email5" value="<?php echo (isset($user_email5) ? $user_email5 : ''); ?>" required/>
                            </div>
                            <div class="form-row half left first">
                                <label><?php _e('Mobile', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="mobile5" name="mobile5" value="<?php echo (isset($user_mobile5) ? $user_mobile5 : ''); ?>" required/>
                            </div>
                            <div class="form-row half">
                                <label><?php _e('LinkedIn URL', 'memberdeck'); ?> <span class="starred">*</span></label>
                                <input type="text" size="20" class="linkedin-url5" name="linkedin-url5" value="<?php echo (isset($user_linkedinurl5) ? $user_linkedinurl5 : ''); ?>" required/>
                            </div>
                        </div>
                        <p><h4 class="border-bottom"><?php _e('Startup Information', 'memberdeck'); ?></h4></p>
                        <div class="form-row full">
                            <label for="nicename"><?php _e('You have full control over who can access your startup information. Change your default privacy settings.', 'memberdeck'); ?></label>
                        </div>
                        <div class="form-row half left first">
                            <label for="startup-name"><?php _e('Startup Name', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <input type="text" size="20" class="startup-name" name="startup-name" value="<?php echo (isset($user_startupname) ? $user_startupname : ''); ?>" required/>
                        </div>
                        <div class="form-row half">
                            <label for="stage"><?php _e('Stage', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <select name="stage" class="form-control ng-pristine ng-valid ng-valid-required ng-touched" required="">
                                <option value="" <?php if (isset($user_stage)) { if ($user_stage == "") echo 'selected="selected"'; else echo ''; } else { echo 'selected="selected"'; } ?>><?php _e('Select Startup Stage', 'memberdeck'); ?></option>
                                <option value="1" <?php if (isset($user_stage)) { if ($user_stage == "1") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Ideation', 'memberdeck'); ?></option>
                                <option value="2" <?php if (isset($user_stage)) { if ($user_stage == "2") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Proof of Concept', 'memberdeck'); ?></option>
                                <option value="3" <?php if (isset($user_stage)) { if ($user_stage == "3") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Beta Launched', 'memberdeck'); ?></option>
                                <option value="4" <?php if (isset($user_stage)) { if ($user_stage == "4") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Early Revenues', 'memberdeck'); ?></option>
                                <option value="5" <?php if (isset($user_stage)) { if ($user_stage == "5") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Steady Revenues', 'memberdeck'); ?></option>
                            </select>
                        </div>
                        <div class="form-row half left first">
                            <label for="website-address"><?php _e('Website Address', 'memberdeck'); ?></label>
                            <input type="text" size="20" class="website-address" name="website-address" value="<?php echo (isset($user_websiteaddress) ? $user_websiteaddress : ''); ?>"/>
                        </div>
                        <div class="form-row half">
                            <label for="founded-in"><?php _e('Founded In', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <input type="date" size="20" class="founded-in" name="founded-in" value="<?php echo (isset($user_foundedin) ? $user_foundedin : ''); ?>" required/>
                        </div>
                        <div class="form-row half left first">
                            <label for="location"><?php _e('Location', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <input type="text" size="20" class="location" name="location" value="<?php echo (isset($user_location) ? $user_location : ''); ?>" required/>
                        </div>
                        <div class="form-row half">
                            <label for="type-of-business"><?php _e('Type of Business', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <select name="type-of-business" class="form-control ng-pristine ng-valid ng-valid-required ng-touched" required="">
                                <option value="" <?php if (isset($user_typeofbusiness)) { if ($user_typeofbusiness == "") echo 'selected="selected"'; else echo ''; } else { echo 'selected="selected"'; } ?>><?php _e('Select Business type', 'memberdeck'); ?></option>
                                <option value="B2B" <?php if (isset($user_typeofbusiness)) { if ($user_typeofbusiness == "B2B") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('B2B', 'memberdeck'); ?></option>
                                <option value="B2C" <?php if (isset($user_typeofbusiness)) { if ($user_typeofbusiness == "B2C") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('B2C', 'memberdeck'); ?></option>
                            </select>
                        </div>
                        <div class="form-row half left first">
                            <label for="productservice-summary"><?php _e('Product/Service Summary', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <textarea size="20" class="description" name="productservice-summary" row="10" required><?php echo (isset($user_productservicesummary) ? $user_productservicesummary : ''); ?></textarea>
                        </div>
                        <div class="form-row half">
                            <label for="twitter-pitch"><?php _e('Twitter Pitch', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <textarea type="text" size="20" class="description" name="twitter-pitch" row="10" required><?php echo (isset($user_twitterpitch) ? $user_twitterpitch : ''); ?></textarea>
                        </div>
                        <div class="form-row half left first">
                            <label for="team-summary"><?php _e('Team Summary', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <textarea size="20" class="description" name="team-summary" row="10" required><?php echo (isset($user_teamsummary) ? $user_teamsummary : ''); ?></textarea>
                        </div>
                        <div class="form-row half">
                            <label for="customer-traction"><?php _e('Customer Traction', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <textarea type="text" size="20" class="description" name="customer-traction" row="10" required><?php echo (isset($user_customertraction) ? $user_customertraction : ''); ?></textarea>
                        </div>
                        <div class="form-row half left first">
                            <label for="different"><?php _e('How are you different', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <textarea size="20" class="description" name="different" row="10" required><?php echo (isset($user_different) ? $user_different : ''); ?></textarea>
                        </div>
                        <div class="form-row half">
                            <label for="cloud-platform"><?php _e('Cloud Platform you use', 'memberdeck'); ?> </label>
                            <select name="cloud-platform" class="form-control ng-pristine ng-valid ng-valid-required ng-touched">
                                <option value="" <?php if (isset($user_cloudplatform)) { if ($user_cloudplatform == "") echo 'selected="selected"'; else echo ''; } else { echo 'selected="selected"'; } ?>><?php _e('Select cloud platform', 'memberdeck'); ?></option>
                                <option value="0" <?php if (isset($user_cloudplatform)) { if ($user_cloudplatform == "0") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Amazon AWS', 'memberdeck'); ?></option>
                                <option value="1" <?php if (isset($user_cloudplatform)) { if ($user_cloudplatform == "1") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Microsoft Azure', 'memberdeck'); ?></option>
                                <option value="2" <?php if (isset($user_cloudplatform)) { if ($user_cloudplatform == "2") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Google Cloud', 'memberdeck'); ?></option>
                                <option value="3" <?php if (isset($user_cloudplatform)) { if ($user_cloudplatform == "3") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Other', 'memberdeck'); ?></option>
                                <option value="4" <?php if (isset($user_cloudplatform)) { if ($user_cloudplatform == "4") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('None', 'memberdeck'); ?></option>
                            </select>
                            <label for="letsventure"><?php _e('How did you hear about LetsVenture', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <select name="letsventure" class="form-control ng-pristine ng-valid ng-valid-required ng-touched" required="">
                                <option value="" <?php if (isset($user_letsventure)) { if ($user_letsventure == "") echo 'selected="selected"'; else echo ''; } else { echo 'selected="selected"'; } ?>><?php _e('--- select one ---', 'memberdeck'); ?></option>
                                <option value="1" <?php if (isset($user_letsventure)) { if ($user_letsventure == "1") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Referral Code', 'memberdeck'); ?></option>
                                <option value="2" <?php if (isset($user_letsventure)) { if ($user_letsventure == "2") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Referral from Investor', 'memberdeck'); ?></option>
                                <option value="3" <?php if (isset($user_letsventure)) { if ($user_letsventure == "3") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Referral from Startup', 'memberdeck'); ?></option>
                                <option value="4" <?php if (isset($user_letsventure)) { if ($user_letsventure == "4") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('News/Media', 'memberdeck'); ?></option>
                                <option value="5" <?php if (isset($user_letsventure)) { if ($user_letsventure == "5") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Events', 'memberdeck'); ?></option>
                                <option value="6" <?php if (isset($user_letsventure)) { if ($user_letsventure == "6") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Social Media', 'memberdeck'); ?></option>
                                <option value="7" <?php if (isset($user_letsventure)) { if ($user_letsventure == "7") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Facebook for SheLeadsTech', 'memberdeck'); ?></option>
                                <option value="8" <?php if (isset($user_letsventure)) { if ($user_letsventure == "8") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('Others', 'memberdeck'); ?></option>
                            </select>
                        </div>
                        <p><h4 class="border-bottom"><?php _e('Funding Information', 'memberdeck'); ?></h4></p>
                        <div class="form-row half left first">
                            <label for="expect-letsventure"><?php _e('What do you expect from LetsVenture?', 'memberdeck'); ?> <span class="starred">*</span></label>
                            <select name="expect-letsventure" class="form-control ng-pristine ng-valid ng-valid-required ng-touched" required="">
                                <option value="" <?php if (isset($user_expectletsventure)) { if ($user_expectletsventure == "") echo 'selected="selected"'; else echo ''; } else { echo 'selected="selected"'; } ?>><?php _e('--- select one ---', 'memberdeck'); ?></option>
                                <option value="1" <?php if (isset($user_expectletsventure)) { if ($user_expectletsventure == "1") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('I have a lead investor, I want to close the round', 'memberdeck'); ?></option>
                                <option value="2" <?php if (isset($user_expectletsventure)) { if ($user_expectletsventure == "2") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('I have some commitment, I want to close the round', 'memberdeck'); ?></option>
                                <option value="3" <?php if (isset($user_expectletsventure)) { if ($user_expectletsventure == "3") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('I don\'t have any investor commitments for my startup', 'memberdeck'); ?></option>
                                <option value="4" <?php if (isset($user_expectletsventure)) { if ($user_expectletsventure == "4") echo 'selected="selected"'; else echo ''; } else { echo ''; } ?>><?php _e('I want to fundraise and don\'t know what to do', 'memberdeck'); ?></option>
                            </select>
                        </div>
                        <div class="form-row half">
                            <label for="raise-amount"><?php _e('What is the amount you want to raise?', 'memberdeck'); ?> </label>
                            <input type="text" size="20" class="raise-amount" name="raise-amount" value="<?php echo (isset($user_raiseamount) ? $user_raiseamount : ''); ?>" required/>
                            <span class="input-group-addon">Lakhs(INR)</span>
                        </div>
                    </div>
                    <?php do_action('md_details_extrasettings'); ?>
                    <div class="border-bottom"></div>
                        <button type="submit" id="user-details-submit" class="submit-button" name="user-details-submit"><?php _e('Update Details', 'memberdeck'); ?></button>
                    </div>
                </div>
            </li>
        </form>
	</ul>
</div>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#user_count').click(function() {
            var user_count = parseInt(jQuery('#user_count').val());
            if (user_count == 1) {
                jQuery('#user-info2').hide();
                jQuery('#user-info3').hide();
                jQuery('#user-info4').hide();
                jQuery('#user-info5').hide();
            } else if (user_count == 2) {
                jQuery('#user-info2').show();
                jQuery('#user-info3').hide();
                jQuery('#user-info4').hide();
                jQuery('#user-info5').hide();
            } else if (user_count == 3) {
                jQuery('#user-info2').show();
                jQuery('#user-info3').show();
                jQuery('#user-info4').hide();
                jQuery('#user-info5').hide();
            } else if (user_count == 4) {
                jQuery('#user-info2').show();
                jQuery('#user-info3').show();
                jQuery('#user-info4').show();
                jQuery('#user-info5').hide();
            } else if (user_count == 5) {
                jQuery('#user-info2').show();
                jQuery('#user-info3').show();
                jQuery('#user-info4').show();
                jQuery('#user-info5').show();
            }
        });
    });
</script>
<style>
.ignitiondeck form .form-row input:not([type="button"]) {
    margin: 0 0 5px 0!important;
}
.memberdeck form .form-row {
    margin: 0 0 6px 0!important;
}
</style>