<!-- footer -->
<?php
//Selecting current user 
$query = "SELECT * FROM `fx_settings` WHERE ID='1' ";
$result = mysqli_query($con,$query) ;
$row = mysqli_fetch_array($result);
$phone_number =$row['phone_number'];
$address =$row['address'];
$location =$row['location'];
$email =$row['email'];

?>
<footer class="layout_padding_2">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="full">
                     <div class="footer_logo">
                        <img class="img-responsive" src="<?= $sitelogo ?>" alt="#" width="250"/>
                     </div>
                  </div>
                  <div class="full">
                     <p class="margin_bottom_0">The goal is to give you the easiest and most convenient way to mine cryptocurrency. There's never been a better time to join this billion dollar industry!.</p>
                  </div>
                  
               </div>
               <div class="col-md-7 offset-md-1">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="full">
                           <h3 class="footer_heading">ABOUT US</h3>
                        </div>
                        <div class="full">
                           <ul class="footer_links">
                              <li><a href="index.php">Home</a></li>
                              <li><a href="about.php">About</a></li>
                              <li><a href="contact.php">Contact</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="full">
                           <h3 class="footer_heading">Account</h3>
                        </div>
                        <div class="full">
                           <ul class="footer_links">
                              <li><a href="login">Login</a></li>
                              <li><a href="signup">Signup</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <center>
                            <!-- GTranslate: https://gtranslate.io/ -->
                        <a href="#" onclick="doGTranslate('en|ar');return false;" title="Arabic" class="gflag nturl" style="background-position:-100px -0px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Arabic" /></a><a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="English" /></a><a href="#" onclick="doGTranslate('en|fr');return false;" title="French" class="gflag nturl" style="background-position:-200px -100px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="French" /></a><a href="#" onclick="doGTranslate('en|de');return false;" title="German" class="gflag nturl" style="background-position:-300px -100px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="German" /></a><a href="#" onclick="doGTranslate('en|it');return false;" title="Italian" class="gflag nturl" style="background-position:-600px -100px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Italian" /></a><a href="#" onclick="doGTranslate('en|es');return false;" title="Spanish" class="gflag nturl" style="background-position:-600px -200px;"><img src="//gtranslate.net/flags/blank.png" height="16" width="16" alt="Spanish" /></a>

                        <style type="text/css">
                        <!--
                        a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
                        a.gflag img {border:0;}
                        a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
                        #goog-gt-tt {display:none !important;}
                        .goog-te-banner-frame {display:none !important;}
                        .goog-te-menu-value:hover {text-decoration:none !important;}
                        body {top:0 !important;}
                        #google_translate_element2 {display:none!important;}
                        -->
                        </style>

                        <br /><select onchange="doGTranslate(this);"><option value="">Select Language</option><option value="en|af">Afrikaans</option><option value="en|sq">Albanian</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|az">Azerbaijani</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|hr">Croatian</option><option value="en|cs">Czech</option><option value="en|en">English</option><option value="en|et">Estonian</option><option value="en|tl">Filipino</option><option value="en|fr">French</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|is">Icelandic</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|mk">Macedonian</option><option value="en|ms">Malay</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|sk">Slovak</option>
                        <option value="en|sl">Slovenian</option>
                        <option value="en|es">Spanish</option>
                        <option value="en|th">Thai</option>
                        <option value="en|tr">Turkish</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option></select><div id="google_translate_element2"></div>
                        <script type="text/javascript">
                        function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
                        </script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


                        <script type="text/javascript">
                        /* <![CDATA[ */
                        eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
                        /* ]]> */
                        </script>
                        </center>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="bottom_footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <p>Kionvest. All Rights Reserved.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
    
      <!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "<?= $phone_number ?>", // WhatsApp number
            call_to_action: "Message us", // Call to action
            button_color: "#FF6550", // Color of button
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->


<!-- end footer -->
<!--=========== js section ===========-->
<!-- jQuery (necessary for Bootstrap's JavaScript) -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/embed.min.js"></script>
<!-- calculator -->
<script src="js/coinponent.js"></script>
<!-- end calculator -->
<!-- custom js -->
<script src="js/custom.js"></script>
<script src="js/spop.min.js"></script>
<script src="js/notification.js"></script>
    
   
</html>