<?php
include('includes/header.php');
include('includes/dbconnect.php');

//Selecting current user 
$query = "SELECT * FROM `fx_settings` WHERE ID='1' ";
$result = mysqli_query($con,$query) ;
$row = mysqli_fetch_array($result);
$phone_number =$row['phone_number'];
$address =$row['address'];
$location =$row['location'];
$email =$row['email'];
function sanitize($dirty){
   return htmlentities($dirty, ENT_QUOTES, 'UTF-8');
}
if(isset($_POST['submit'])){

   echo "hello";
   // $user_name = sanitize($_POST['user_name']);
   // $user_email = sanitize($_POST['user_email']);
   // $user_phone_number = sanitize($_POST['user_phone_number']);
   // $user_message = sanitize($_POST['user_message']);

   // $created = date("d-m-Y");

   // $query1 = "INSERT  into `fx_contact` 
   //    (username,useremail,userphonenumber,usermessage,created)
   //    VALUES 
   //    ('$user_name','$user_email','$user_phone_number','$user_message','$created')";
   //    $result1 = mysqli_query($con,$query1);

   $result1 = true;

}


?>
<!-- section -->
<section class="layout_padding theme_color_bg white_fonts ambess_section">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text_align_center">
                  <div class="full">
                     <h2>Contact</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- section -->
      <section class="layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="heading_main text_align_center">
                        <h2><span>GET IN TOUCH</span></h2>
                        <p>We Provide High Quality Services</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-4">
                  <div class="contact_information">
                     <div class="row">
                        <div class="col-md-12 col-xs-12 adress_cont">
                           <div class="information_bottom text_align_center">
                              <div class="icon_bottom">
                                 <i class="fa fa-road" aria-hidden="true"></i>
                              </div>
                              <div class="info_cont">
                                 <h4><?=$address?></h4>
                                 <p><?=$location?></p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-xs-12 adress_cont">
                           <div class="information_bottom text_align_center">
                              <div class="icon_bottom">
                                 <i class="fa fa-user" aria-hidden="true"></i>
                              </div>
                              <div class="info_cont">
                                 <h4><?= $phone_number?></h4>
                                 <p>Mon-Fri 8:30am-6:30pm</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-xs-12 adress_cont">
                           <div class="information_bottom text_align_center">
                              <div class="icon_bottom">
                                 <i class="fa fa-envelope" aria-hidden="true"></i>
                              </div>
                              <div class="info_cont">
                                 <h4><a href="#" class="__cf_email__"><?=$email?></a></h4>
                                 <p>24/7 online support</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="contact_form">
                     <div class="form_section">
                        <?php 
              
                           if (isset($_POST['submit']))
                              {
                                 if($result1){
                           echo "
                           <div class='container'><div class='alert alert-success'>Message sent successfully</div></div>";
                        }
                        else {
                              echo "<div class='container'><div class='alert alert-danger'>Message not sent</div></div>";
                        }
                        }
                        ?>
                        <form class="form_contant" method="POST" action="">
                           <fieldset class="row">
                              
                              <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <input class="field_custom" placeholder="Your name" type="text" name="user_name"/>
                              </div>
                              <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <input class="field_custom" placeholder="Email adress" type="email" name="user_email"/>
                              </div>
                              <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <input class="field_custom" placeholder="Phone number" type="text" name="user_phone_number"/>
                              </div>
                              <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <textarea class="field_custom" placeholder="Messager" name="user_message"></textarea>
                              </div>
                              <div class="center">
                                 <input class="read_more_bt" name="submit" type="submit" value="SUBMIT NOW"/>   
                              </div>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
      </section>
      <!-- end section -->
      <!-- section -->
      <section class="layout_padding dark_bg_theme dark_layer_2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d375.76436304542455!2d7.465342643804842!3d46.94736439869629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e3761e20367bf%3A0x777ecbdcc5761c1c!2sSchosshaldenstrasse%2037%2C%203006%20Bern%2C%20Switzerland!5e1!3m2!1sen!2sng!4v1660404361209!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->

<?php
include('includes/footer.php');
?>