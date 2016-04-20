<?php
/*
Template Name: Contact Us
*/
session_start();
 

?>
<?php get_header(); ?>

<div id="container" class="twelve columns">
  <div id="content">
    <div class="tri-col-span right detail-page">
      <div class="cpsAjaxLoaderSingle"> </div>
    </div>
    <?php cps_ajax_search_results(); ?>
    <div class="tri-col-span hideOnSearch">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="blog-post">
        <h2><a href="<?php the_permalink() ?>">
          <?php the_title();?>
          </a></h2>
        <?php the_content();?>
      </div>
      <?php 

//If the form is submitted

if(isset($_POST['submitted'])) {	
		
$error_message = '';

	//Check to see if the honeypot captcha field was filled in

	if(trim($_POST['checking']) !== '') {

		$captchaError = true;

	} else {	

		//Check to make sure that the name field is not empty

		if(trim($_POST['contactName']) === '') {

			$nameError = __('You forgot to enter your name.','language');
			$error_message .= 'Your Name\n';
			$hasError = true;

		} else {

			$name = trim($_POST['contactName']);

		}

		

		//Check to make sure sure that a valid email address is submitted

		if(trim($_POST['email']) === '')  {

			$emailError = __('You forgot to enter your email address.','language');
			$error_message .= 'Your Email\n';
			$hasError = true;

		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {

			$emailError = __('You entered an invalid email address.','language');
			$error_message .= 'Enter a valid Email\n';
			$hasError = true;

		} else {

			$email = trim($_POST['email']);

		}



			

		//Check to make sure comments were entered	

		if(trim($_POST['comments']) === '') {

			$commentError = __('You forgot to enter your comments.','language');
			$error_message .= 'Comments\n';
			$hasError = true;

		} else {

			if(function_exists('stripslashes')) {

				$comments = stripslashes(trim($_POST['comments']));

			} else {

				$comments = trim($_POST['comments']);

			}

		}


	if( $_SESSION['security_code1'] == $_POST['security_code1'] && !empty($_SESSION['security_code1'] ) ) {
			unset($_SESSION['security_code1']);
			$errors['security_code1'] = '';
	   } else {
			$errors['security_code1'] = 'Incorrect Security Code';			
			$error_message .= 'Incorrect Security Code\n';
			$hasError = true;
	   }
   
		if($hasError) echo 	'<script>alert("\nPlease re-enter mandatory fields below: " + "\n\n'.$error_message.'");</script>';

		//If there is no error, send the email

		if(!isset($hasError)) {



			$emailTo = get_option('admin_email'); 

			$subject = 'Contact Form Submission from '.$name;

			$sendCopy = trim($_POST['sendCopy']);

			$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";

			$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

			

			wp_mail($emailTo, $subject, $body, $headers);



			if($sendCopy == true) {

				$subject = 'You emailed Your '.get_bloginfo('name');

				$headers = 'From:  '.get_option('admin_email');

				wp_mail($email, $subject, $body, $headers);

			}



			$emailSent = true;



		}

	}

} ?>
      <?php get_header(); ?>
      <?php if(isset($emailSent) && $emailSent == true) { ?>
      <div class="thanks">
        <h4>
          <?php _e('Thanks,','language');?>
          <?=$name;?>
        </h4>
        <p>
          <?php _e('Your email was successfully sent. I will be in touch soon.','language')?>
        </p>
      </div>
      <?php } else { ?>
      <?php if(isset($hasError) || isset($captchaError)) { ?>
      <p class="error">
        <?php _e('There was an error submitting the form.','language');?>
      <p>
        <?php } ?>
      <form action="" id="contactFormUs" name="contactFormUs" method="post" class="forms-contact formsec">
        <div class="pro_fields">
          <li>
            <label for="contactName">
              <?php _e('Name','language');?>
            </label>
            <br/>
            <?php $contactName = $_POST['contactName']; 
					if($contactName != '' && $contactName !='Please enter your name'){
						$contactName = $_POST['contactName']; 
					}else{
						$contactName = 'Please enter your name'; 
					}
				?>
            <input type="text" name="contactName" id="cs_contactName" class="field" value="<?php echo $contactName; ?>" class="requiredField" onblur="if(this.value == '') { this.value = 'Please enter your name'; }"  onfocus="if(this.value == 'Please enter your name') { this.value = ''; }" />
            <?php if($nameError != '') { ?>
            <span class="error">
            <?=$nameError;?>
            </span>
            <?php } ?>
          </li>
        </div>
        <div class="pro_fields">
          <li>
            <label for="email">
              <?php _e('Email','language');?>
            </label>
            <br/>
            <?php $email = $_POST['email']; 
					if($email != '' && $email !='Please enter your e-mail'){
						$email = $_POST['email']; 
					}else{
						$email = 'Please enter your e-mail'; 
					}
				?>
            <input type="text" name="email" id="cs_email" class="field" value="<?php echo $email; ?>" class="requiredField email" onblur="if(this.value == '') { this.value = 'Please enter your e-mail'; }"  onfocus ="if(this.value == 'Please enter your e-mail') { this.value = ''; }"/>
            <?php if($emailError != '') { ?>
            <span class="error">
            <?=$emailError;?>
            </span>
            <?php } ?>
          </li>
        </div>
        <div class="pro_fields">
          <li>
            <label for="commentsText">
              <?php _e('Comments','language');?>
            </label>
            <br/>
            <?php $comments = $_POST['comments']; 
					if($comments != '' && $comments !='Please enter your message'){
						$comments = $_POST['comments']; 
					}else{
						$comments = 'Please enter your message'; 
					}
				?>
            <textarea name="comments" id="cs_comments" onblur="if(this.value == '') { this.value = 'Please enter your message'; }"  onfocus ="if(this.value == 'Please enter your message') { this.value = ''; }" class="requiredField"><?php echo $comments; ?>
</textarea>
            <?php if($commentError != '') { ?>
            <br>
            <span class="error">
            <?=$commentError;?>
            </span>
            <?php } ?>
          </li>
          <div style="clear:both"></div>
          <div class="pro_fields">
            <li>
              <div class="captcha_form"> <span class="error">
                <?=$errors['security_code1'];?>
                </span>
                <div class="securityText">
                  <label>
                    <?php _e('Security Text','language');?>
                  </label>
                </div>
                <div class="securityImage1"> <img src="<?php echo get_bloginfo('template_directory'); ?>/includes/captcha/CaptchaSecurityImages1.php?width=100&height=40&characters=5" />
                  <?php if($errors['security_code1'] != '') { ?>
                  <?php } ?>
                </div>
                <div class="clear"></div>
                <div class="securityCodeText">
                  <label for="security_code"><?php _e('Security Code: ','language');?></label>
                </div>
                <div class="securityInputField">
                  <input id="security_code1" name="security_code1" value="<?php echo $_POST['security_code1']; ?>" type="text" />
                </div>
                <div class="clear"></div>
              </div>
               <div class="clear"></div>
            </li>
          </div>
          <div style="clear:both"></div>
          <input type="submit" name="submitted" id="submitted" class="send-contact" value="Send" />
          <div style="clear:both"></div>
        </div>
        <div style="clear:both"></div>
      </form>
      <?php } ?>
      <?php endwhile; ?>
    </div>
  </div>
  <div id="sidebar-right">
    <?php if ( ! dynamic_sidebar( 'Common Right Sidebar' )) : ?>
    <?php endif; ?>
  </div>
  <div class="clearfix"></div>
</div>

<?php get_footer(); ?>