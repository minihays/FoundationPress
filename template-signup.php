<?php
/*
Template Name: SignUp
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page" role="main">
<article class="main-content">
<?php do_action( 'foundationpress_before_content' ); ?>

<!--Begin CTCT Sign-Up Form-->
<!-- EFD 1.0.0 [Thu Jun 09 15:46:27 EDT 2016] -->
<link rel='stylesheet' type='text/css' href='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/css/signup-form.css'>
<div class="ctct-embed-signup" style="font: 16px Helvetica Neue, Arial, sans-serif; font: 1rem Helvetica Neue, Arial, sans-serif; line-height: 1.5; -webkit-font-smoothing: antialiased;">
   <div style="color:#5b5b5b; background-color:#e8e8e8; border-radius:5px;">
       <span id="success_message" style="display:none;">
           <div style="text-align:center;">Thanks for signing up!</div>
       </span>
       <form data-id="embedded_signup:form" class="ctct-custom-form Form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">
           <h2 style="margin:0;">Sign up to stay in touch!</h2>
           <p>Sign up to get interesting news and updates delivered to your inbox.</p>
           <!-- The following code must be included to ensure your sign-up form works properly. -->
           <input data-id="ca:input" name="ca" value="37b77444-c969-4057-97cc-2e747c7f830a" type="hidden">
           <input data-id="list:input" name="list" value="1802111437" type="hidden">
           <input data-id="source:input" name="source" value="EFD" type="hidden">
           <input data-id="required:input" name="required" value="list,email" type="hidden">
           <input data-id="url:input" name="url" value="" type="hidden">
           <p data-id="Email Address:p" ><label data-id="Email Address:label" data-name="email" class="ctct-form-required">Email Address</label> <input data-id="Email Address:input" name="email" value="" maxlength="80" type="text"></p>
           <p data-id="First Name:p" ><label data-id="First Name:label" data-name="first_name">First Name</label> <input data-id="First Name:input" name="first_name" value="" maxlength="50" type="text"></p>
           <button type="submit" class="Button ctct-button Button--block Button-secondary" data-enabled="enabled">Sign Up</button>
           <div><p class="ctct-form-footer">By submitting this form, you are granting: Operation High Ground, , , , , ,  permission to email you. You may unsubscribe via the link found at the bottom of every email.  (See our <a href="http://www.constantcontact.com/legal/privacy-statement" target="_blank">Email Privacy Policy</a> for details.) Emails are serviced by Constant Contact.</p></div>
       </form>
   </div>
</div>
<script type='text/javascript'>
   var localizedErrMap = {};
   localizedErrMap['required'] =         'This field is required.';
   localizedErrMap['ca'] =             'An unexpected error occurred while attempting to send email.';
   localizedErrMap['email'] =             'Please enter your email address in name@email.com format.';
   localizedErrMap['birthday'] =         'Please enter birthday in MM/DD format.';
   localizedErrMap['anniversary'] =     'Please enter anniversary in MM/DD/YYYY format.';
   localizedErrMap['custom_date'] =     'Please enter this date in MM/DD/YYYY format.';
   localizedErrMap['list'] =             'Please select at least one email list.';
   localizedErrMap['generic'] =         'This field is invalid.';
   localizedErrMap['shared'] =         'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
   localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
    localizedErrMap['state_province'] = 'Select a state/province';
   localizedErrMap['selectcountry'] =     'Select a country';
   var postURL = 'https://visitor2.constantcontact.com/api/signup';
</script>
<script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>
<!--End CTCT Sign-Up Form-->

<?php do_action( 'foundationpress_after_content' ); ?>
</article>
<?php get_sidebar(); ?>
</div>

<?php get_footer();
