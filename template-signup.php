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
<!-- EFD 1.0.0 [Mon Aug 01 14:47:21 EDT 2016] -->
<link rel='stylesheet' type='text/css' href='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/css/signup-form.css'>
<div class="ctct-embed-signup" style="font: 16px Helvetica Neue, Arial, sans-serif; font: 1rem Helvetica Neue, Arial, sans-serif; line-height: 1.5; -webkit-font-smoothing: antialiased;">
   <div style="color:#5b5b5b; background-color:#FFFFFF; border-radius:5px;">
       <span id="success_message" style="display:none;">
           <div style="text-align:center;">Thanks for signing up!</div>
       </span>
       <form data-id="embedded_signup:form" class="ctct-custom-form Form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">
           <h2 style="margin:0;">Passing The Baton - The Long Journey Home</h2>
           <p>This comprehensive program is only available through your church or civic group. It is offered at no charge. If you are a church or civic group please fill out the form below and we will send you a copy of this program. The results are eye-opening. Get your copy now and don't wait. By getting your contact information it will allow us to get updates to you when they are ready. </p>
           <!-- The following code must be included to ensure your sign-up form works properly. -->
           <input data-id="ca:input" name="ca" value="37b77444-c969-4057-97cc-2e747c7f830a" type="hidden">
           <input data-id="list:input" name="list" value="1802111437" type="hidden">
           <input data-id="source:input" name="source" value="EFD" type="hidden">
           <input data-id="required:input" name="required" value="list,email,first_name,last_name,phone,address_street,address_city,address_state,address_postal_code,address_country,company" type="hidden">
           <input data-id="url:input" name="url" value="" type="hidden">
           <p data-id="Email Address:p" ><label data-id="Email Address:label" data-name="email" class="ctct-form-required">Email Address</label> <input data-id="Email Address:input" name="email" value="" maxlength="80" type="text"></p>
           <p data-id="First Name:p" ><label class="ctct-form-required" data-id="First Name:label" data-name="first_name">First Name</label> <input data-id="First Name:input" name="first_name" value="" maxlength="50" type="text"></p>
           <p data-id="Last Name:p" ><label class="ctct-form-required" data-id="Last Name:label" data-name="last_name">Last Name</label> <input data-id="Last Name:input" name="last_name" value="" maxlength="50" type="text"></p>
           <p data-id="Phone Number:p" ><label class="ctct-form-required" data-id="Phone Number:label" data-name="phone">Phone Number</label> <input data-id="Phone Number:input" name="phone" value="" maxlength="50" type="text"></p>
           <p data-id="Country:p" ><label class="ctct-form-required" data-id="Country:label" data-name="address_country">Select a country</label></p>
           <p data-id="Street Address:p" ><label class="ctct-form-required" data-id="Street Address:label" data-name="address_street">Street</label> <input data-id="Street Address:input" name="address_street" value="" maxlength="50" type="text"></p>
           <p data-id="City:p" ><label class="ctct-form-required" data-id="City:label" data-name="address_city">City</label> <input data-id="City:input" name="address_city" value="" maxlength="50" type="text"></p>
           <p data-id="State/Province:p" ><label class="ctct-form-required" data-id="State/Province:label" data-name="address_state">Select a state/province</label></p>
           <p data-id="Zip Code:p" ><label class="ctct-form-required" data-id="Zip Code:label" data-name="address_postal_code">Zip Code</label> <input data-id="Zip Code:input" name="address_postal_code" value="" maxlength="50" type="text"></p>
           <p data-id="Job Title:p" ><label data-id="Job Title:label" data-name="job_title">Job Title</label> <input data-id="Job Title:input" name="job_title" value="" maxlength="50" type="text"></p>
           <p data-id="Company:p" ><label class="ctct-form-required" data-id="Company:label" data-name="company">Company</label> <input data-id="Company:input" name="company" value="" maxlength="50" type="text"></p>
           <p data-id="Website:p" ><label data-id="Website:label" data-name="website">Website</label> <input data-id="Website:input" name="website" value="" maxlength="50" type="text"></p>
           <button type="submit" class="Button ctct-button Button--block Button-secondary" data-enabled="enabled">Sign Up</button>
           <div><p class="ctct-form-footer">By submitting this form, you are granting: Operation High Ground, 10149 Irwin Road, Bloomington, Minnesota, 55437, United States,  permission to email you. You may unsubscribe via the link found at the bottom of every email.  (See our <a href="http://www.constantcontact.com/legal/privacy-statement" target="_blank">Email Privacy Policy</a> for details.) Emails are serviced by Constant Contact.</p></div>
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
