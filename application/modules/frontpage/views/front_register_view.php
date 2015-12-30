<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
     <meta charset="UTF-8">

     <title><?php echo $header; ?></title>

     <meta name="description" content="Berkarir di Netmedia">
     <meta name="keywords" content="NET,netmedia,karir,career">
     <meta name="author" content="Firman Qodry, firman.qodry@gmail.com">

     <meta name="viewport" content="width=device-width, initial-scale=1.0" />

     <link rel="shortcut icon" href="<?php echo base_url("assets/img/favicon.png");?>" type="image/x-icon" />

     <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/foundation.css"); ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/jquery-ui.min.css"); ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/hero.css"); ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/animate.min.css"); ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/animate.delay.css"); ?>" />
     <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/foundation-icons/foundation-icons.css"); ?>"/>

     <script type="text/javascript" src="<?php echo base_url("assets/js/vendor/modernizr.js"); ?>"></script>
     <script type="text/javascript" src="<?php echo base_url("assets/js/vendor/jquery-1.11.3.min.js"); ?>"></script>
     <script type="text/javascript" src="<?php echo base_url("assets/js/vendor/jquery-ui.min.js"); ?>"></script>
     <script type="text/javascript" src="<?php echo base_url("assets/js/custom.js");?>"></script>
</head>
<body>
     <section class="hero">
          <div class="row">
               <div class="small-centered medium-uncentered medium-12 large-12 columns">
                    <a href="<?php echo site_url(); ?>"><div class="logo"></div></a>
               </div>
          </div>
          <div class="row intro">
               <div class="small-centered medium-uncentered medium-12 large-12 columns">
                    <h1>Join with us!</h1>

                    <div class="button-holder">
                         <a class="button radius alert" href="<?php echo base_url("frontpage/auth"); ?>">START</a>
                    </div>

                    <blockquote>"<?php echo $show_rand_quotes->qt_words; ?>"<cite><?php echo $show_rand_quotes->qt_authors; ?></cite></blockquote>
               </div>

               <!--register modal begin-->
               <div id="registerModal" class="reveal-modal small" data-reveal aria-labelledby="registerModalTitle" aria-hidden="true" role="dialog">
                    <h2 class="text-center" id="registerModalTitle">Register</h2>

                    <?php 
                         if(validation_errors() == FALSE) {
                              echo "";
                         } else {
                              echo '<div data-alert class="alert-box alert radius animate0 tada">';
                              echo "Oops sowwy... registration failed! Please fill all required field.";
                              echo '<a href="#" class="close">&times;</a>';
                              echo '</div>';
                         }

                         if (isset($reg_err)) {
                              echo '<div data-alert class="alert-box alert radius animate0 tada">';
                              echo $reg_err;
                              echo '<a href="#" class="close">&times;</a>';
                              echo '</div>';
                         }

                         /*if (isset($capcay_err)) {
                              echo '<div data-alert class="alert-box alert radius animate0 tada">';
                              echo $capcay_err;
                              echo '<a href="#" class="close">&times;</a>';
                              echo '</div>';
                         }*/

                     ?>

                    <?php echo form_open('frontpage/register_process'); ?>
                         
                         <div class="row">
                              <div class="small-12 medium-12 large-12 columns">
                                   <div class="row collapse prefix-radius">
                                        <div class="small-2 columns">
                                             <span class="prefix"><i class="fi-torso"></i></span>
                                        </div>
                                        <div class="small-10 columns">
                                             <input type="text" name="fname" value="" placeholder="Your First Name" autofocus />
                                        </div>
                                        <span><?php echo form_error('fname'); ?></span>
                                   </div>
                              </div>
                         </div>

                         <div class="row">
                              <div class="small-12 medium-12 large-12 columns">
                                   <div class="row collapse prefix-radius">
                                        <div class="small-2 columns">
                                             <span class="prefix"><i class="fi-torso"></i></span>
                                        </div>
                                        <div class="small-10 columns">
                                             <input type="text" name="lname" value="" placeholder="Your Last Name" />
                                        </div>
                                        <span><?php echo form_error('lname'); ?></span>
                                   </div>
                              </div>
                         </div>

                         <div class="row">
                              <div class="small-12 medium-12 large-12 columns">
                                   <div class="row collapse prefix-radius">
                                        <div class="small-2 columns">
                                             <span class="prefix"><i class="fi-mail"></i></span>
                                        </div>
                                        <div class="small-10 columns">
                                             <input type="text" name="email" value="" placeholder="Your email" />
                                        </div>
                                        <span><?php echo form_error('email'); ?></span>
                                   </div>
                              </div>
                         </div>

                         <div class="row">
                              <div class="small-12 medium-12 large-12 columns">
                                   <div class="row collapse prefix-radius">
                                        <div class="small-2 columns">
                                             <span class="prefix"><i class="fi-lock"></i></span>
                                        </div>
                                        <div class="small-10 columns">
                                             <input type="password" name="password" value="" placeholder="Your password" />
                                        </div>
                                        <span><?php echo form_error('password'); ?></span>
                                   </div>
                              </div>
                         </div>

                         <div class="row">
                              <div class="small-12 medium-12 large-12 columns">
                                   <div class="row collapse prefix-radius">
                                        <div class="small-2 columns">
                                             <span class="prefix"><i class="fi-lock"></i></span>
                                        </div>
                                        <div class="small-10 columns">
                                             <input type="password" name="repassword" value="" placeholder="Retype Your password" />
                                        </div>
                                        <span><?php echo form_error('repassword'); ?></span>
                                   </div>
                              </div>
                         </div>

                         <div class="row">
                              <div class="small-12 medium-12 large-12 columns">
                                   <label for="captcha"><?php echo $capcay['image']; ?></label><br/>
                                   <div class="row collapse prefix-radius">
                                        <div class="small-2 columns">
                                             <span class="prefix"><i class="fi-flag"></i></span>
                                        </div>
                                        <div class="small-10 columns">
                                             <input type="text" name="capcay" value="" placeholder="Enter above code" />
                                        </div>
                                        <span><?php echo form_error('capcay'); ?></span>
                                   </div>
                              </div>
                         </div>

                         <div class="row">
                              <div class="small-12 medium-12 large-12 columns">
                                   <input class="button radius small success" type="submit" name="submit" value=" Submit " />
                                   <input type="reset" class="button radius small alert" value=" Reset " />
                              </div>
                         </div>

                         <hr/>

                         <div class="row">
                              <div class="small-12 medium-12 large-12 columns">
                                   <a href="<?php echo base_url("frontpage/auth/"); ?>" class="button radius small right">Cancel</a>
                              </div>
                         </div>
                    <?php echo form_close(); ?>
                    
                    <a class="close-reveal-modal" aria-label="Close">&times;</a>
          </div>
          <!--end of authModal-->

          </div>

          <footer class="row">
               <div class="large-12 medium-12 small-12 columns">
                    <p>Copyright &copy; <?php echo date("Y"); ?>. PT Net Mediatama Televisi</p>
               </div>
          </footer>
     </section>

     <script type="text/javascript" src="<?php echo base_url("assets/js/vendor/jquery.js"); ?>"></script>
     <script type="text/javascript" src="<?php echo base_url("assets/prettify/prettify.js"); ?>"></script>
     <script type="text/javascript" src="<?php echo base_url("assets/js/foundation.min.js"); ?>"></script>
     <script>
      $(document).foundation();

      $('#registerModal').foundation('reveal', 'open');

      $(document).on('opened.fndtn.reveal', '[data-reveal]', function() {
          var modal = $(this);
          modal.find('[autofocus]').focus();
      });

    </script>
</body>
</html>