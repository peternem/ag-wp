<?php
/**
 * Template Name: Newsletter Sign up Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package sparkling
 */
get_header();
?>
<section id="primary" class="content-area container-fluid white">

    <?php while (have_posts()) : the_post(); ?>

        <div class="post-inner-content aga-row row">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-content col-md-12">
                    <header class="entry-header page-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <?php
                        if (function_exists('the_subtitle')) {
                            echo '<p>' . the_subtitle() . '</p>';
                        }
                        ?>
                    </header><!-- .entry-header -->
                    <?php the_content(); ?>
                    <!--Begin CTCT Sign-Up Form-->
                    <!-- EFD 1.0.0 [Wed Dec 21 23:38:23 EST 2016] -->
                    <style>
                        .ctct-embed-signup input + span {
                            margin-left: 1rem;
                        }
                        .ctct-custom-form .Button.ctct-button {
                            background-color: #55a32a;
                        }
                        .ctct-custom-form .Button.ctct-button:hover {
                            background-color: #407a20;
                        }
                    </style>
                    <link rel='stylesheet' type='text/css' href='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/css/signup-form.css'>
                    <div class="ctct-embed-signup" style="max-width: 480px; width: 100%; font: 16px Helvetica Neue, Arial, sans-serif; font: 1rem Helvetica Neue, Arial, sans-serif; line-height: 1.5; -webkit-font-smoothing: antialiased;">
                        <div>
                            <span id="success_message" style="display:none;">
                                <div style="text-align:center; font-size: 2.5rem;">Thanks for signing up!</div>
                            </span>
                            <form data-id="embedded_signup:form" class="ctct-custom-form Form" name="embedded_signup" method="POST" action="https://visitor2.constantcontact.com/api/signup">
                                <!-- The following code must be included to ensure your sign-up form works properly. -->
                                <input data-id="ca:input" type="hidden" name="ca" value="1bc0a2ff-343c-4431-98e6-0a0b7f8d2f75">
                                <input data-id="source:input" type="hidden" name="source" value="EFD">
                                <input data-id="required:input" type="hidden" name="required" value="list,email,first_name,last_name,address_city,address_state,company">
                                <input data-id="url:input" type="hidden" name="url" value="">
                                <p data-id="Email Address:p" ><label data-id="Email Address:label" data-name="email" class="ctct-form-required">Email Address</label> <input data-id="Email Address:input" type="text" name="email" value="" maxlength="80"></p>
                                <p data-id="First Name:p" ><label data-id="First Name:label" data-name="first_name" class="ctct-form-required">First Name</label> <input data-id="First Name:input" type="text" name="first_name" value="" maxlength="50"></p>
                                <p data-id="Last Name:p" ><label data-id="Last Name:label" data-name="last_name" class="ctct-form-required">Last Name</label> <input data-id="Last Name:input" type="text" name="last_name" value="" maxlength="50"></p>
                                <p data-id="Phone Number:p" ><label data-id="Phone Number:label" data-name="phone">Phone Number</label> <input data-id="Phone Number:input" type="text" name="phone" value="" maxlength="50"></p>
                                <p data-id="City:p" ><label data-id="City:label" data-name="address_city" class="ctct-form-required">City</label> <input data-id="City:input" type="text" name="address_city" value="" maxlength="50"></p>
                                <p data-id="State/Province:p" ><label data-id="State/Province:label" data-name="address_state" class="ctct-form-required">Select a state/province</label></p>
                                <p data-id="Zip Code:p" ><label data-id="Zip Code:label" data-name="address_postal_code">Zip Code</label> <input data-id="Zip Code:input" type="text" name="address_postal_code" value="" maxlength="50"></p>
                                <p data-id="Job Title:p" ><label data-id="Job Title:label" data-name="job_title">Job Title</label> <input data-id="Job Title:input" type="text" name="job_title" value="" maxlength="50"></p>
                                <p data-id="Company:p" ><label data-id="Company:label" data-name="company" class="ctct-form-required">Company</label> <input data-id="Company:input" type="text" name="company" value="" maxlength="50"></p>
                                <p data-id="Lists:p" ><label data-id="Lists:label" data-name="list" class="ctct-form-required">Email Lists</label>
                                <div><input data-id="Lists:input" type="checkbox" name="list_0" value="20"><span data-id="Lists:span">Agalite Shower &amp; Bath Enclosures</span></div>
                                <div><input data-id="Lists:input" type="checkbox" name="list_1" value="17"><span data-id="Lists:span">Hartung Glass Industries</span></div>
<!--                                <div><input data-id="Lists:input" type="checkbox" name="list_2" value="19"><span data-id="Lists:span">Hartung Studio</span></div>
                                <div><input data-id="Lists:input" type="checkbox" name="list_3" value="34"><span data-id="Lists:span">Holcam Bath &amp; Shower Enclosures</span></div>
                                <div><input data-id="Lists:input" type="checkbox" name="list_4" value="18"><span data-id="Lists:span">Lami Glass</span></div>--></p>
                                <button type="submit" class="Button ctct-button Button--block Button-secondary" data-enabled="enabled">Sign Up</button>
                                <div><p class="ctct-form-footer">By submitting this form, you are granting: Hartung Glass Industries, 7344 Winston Street, Burnaby, BC, V5A 2G9, Canada, http://www.hartung-glass.com permission to email you. You may unsubscribe via the link found at the bottom of every email.  (See our <a href="http://www.constantcontact.com/legal/privacy-statement" target="_blank">Email Privacy Policy</a> for details.) Emails are serviced by Constant Contact.</p></div>
                            </form>
                        </div>
                    </div>
                    <script type='text/javascript'>
                        var localizedErrMap = {};
                        localizedErrMap['required'] = 'This field is required.';
                        localizedErrMap['ca'] = 'An unexpected error occurred while attempting to send email.';
                        localizedErrMap['email'] = 'Please enter your email address in name@email.com format.';
                        localizedErrMap['birthday'] = 'Please enter birthday in MM/DD format.';
                        localizedErrMap['anniversary'] = 'Please enter anniversary in MM/DD/YYYY format.';
                        localizedErrMap['custom_date'] = 'Please enter this date in MM/DD/YYYY format.';
                        localizedErrMap['list'] = 'Please select at least one email list.';
                        localizedErrMap['generic'] = 'This field is invalid.';
                        localizedErrMap['shared'] = 'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
                        localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
                        localizedErrMap['state_province'] = 'Select a state/province';
                        localizedErrMap['selectcountry'] = 'Select a country';
                        var postURL = 'https://visitor2.constantcontact.com/api/signup';
                    </script>
                    <script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>
                    <!--End CTCT Sign-Up Form-->
                </div><!-- .entry-content -->

                <?php edit_post_link(__('Edit', 'sparkling'), '<footer class="entry-footer col-md-12"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>'); ?>
            </article><!-- #post-## -->
        </div>

    <?php endwhile; // end of the loop.  ?>

</section><!-- #primary -->



<?php get_footer(); ?>
