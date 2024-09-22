<!-- config file is included -->
<?php include("../trader-ezycrd/php/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Trader Ezycrd</title>
      <?php include (S_INCLUDESPATH . "head.php"); ?> 
   </head>
   <body>
      <article id="bussiness-card">
          <!-- profile section  start-->
          <div class="container">
            <section class="profile-section">
               <div class="profile-provider">
                  <img src="<?= S_IMGPATH ?>logo2.png" alt="">
                  <img src="<?= S_IMGPATH ?>profile1.png" alt="">
               </div>
            </section>
                  <div class="profile-details">
                     <h2 class="profile-divider-name">Darshan Rote</h2>
                     <p>( Owner )</p>
                  </div>
               </div>
            </section>
            <!-- profile section  end-->
            <hr>
            <!-- profile-contact section  start-->
            <div class="contact-details-sec">
               <div class="contact-details-with-icon">
                  <div class="contact-details">
                     <div class="contact-icon "> <a href="tel:+918356328967" target="_blank"><i class="fa-solid fa-phone"></i></a></div>
                     <div class="contact-info"> <a href="#" target="_blank">+918356328967</a></div>
                  </div>
                  <div class="contact-details">
                     <div class="contact-icon "><a href="https://accounts.google.com/v3/signin/identifier?authuser=0&continue=https%3A%2F%2Fmail.google.com%2Fmail&ec=GAlAFw&hl=en&service=mail&flowName=GlifWebSignIn&flowEntry=AddSession&dsh=S-1492129458%3A1716994397343437&ddm=0" target="_blank"><i class="fa-solid fa-envelope"></i></a></div>
                     <div class="contact-info"> <a href="https://accounts.google.com/v3/signin/identifier?authuser=0&continue=https%3A%2F%2Fmail.google.com%2Fmail&ec=GAlAFw&hl=en&service=mail&flowName=GlifWebSignIn&flowEntry=AddSession&dsh=S-1492129458%3A1716994397343437&ddm=0" target="_blank">Sumitsujgure@gmail.com</a></div>
                  </div>
                  <div class="contact-details">
                     <div class="contact-icon "><a href="https://maps.app.goo.gl/zQVm6yUvoeHwQSBa6" target="_blank"><i class="fa-solid fa-location-dot"></i></a></div>
                     <div class="contact-info"><a href="https://maps.app.goo.gl/zQVm6yUvoeHwQSBa6" target="_blank">Gangawadi,Raviwar Karanja,Panchavati , Nashik ,Maharashtra, India</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="contact-end"></div>
         </div>
         <!-- profile-contact section  end-->

         <!--Connect now section  -->
         <div class="container">
         <section class="main-card-sec pb-3 mb-0" id="link-sec">
            <h3 class="text-center d-block mx-auto my-2">Connect Now</h3>
            <div class="main-card-sec p-0 position-relative" id="other-links">
                <ul>
                    <li><a href="#" download><img class="img-fluid rounded-circle me-2"src="<?= S_IMGPATH ?>social-icons/user-circle-plus-icon.svg" alt="Add To Contact">Add toPhoneBook</a></li>
                    <li><a href="whatsapp.php" target="_blank"><img src="<?= S_IMGPATH ?>social-icons/whatsapp-icon.svg"alt="whatsapp" title="whatsapp" class="me-2"><span> Whatsapp Chat</span></a></li>
                    <li><a href="https://maps.app.goo.gl/zQVm6yUvoeHwQSBa6" target="_blank"><img src="<?= S_IMGPATH ?>social-icons/map-location-icon.svg" alt="Direction" title="Direction" class="me-2"><span>View Location </span></a></li>
                    <li><a href="https://go4fresh.com/" target="_blank"><img class="img-fluid rounded-circle me-2" src="<?= S_IMGPATH ?>social-icons/globe-icon.svg" alt="Website">Website Link</a></li>
                </ul>
            </div>
        </section>
        </div>
         
          <!-- About us  section included here -->
          
        <?php include(S_INCLUDESPATH . "au.php"); ?>   


        <!-- products section start -->
        <div class="container">
            <section class="product-sec">
               <h2 class="sec-heading">Products</h2>
               <div class="products-container">
                  <div class="product">
                     <img src="<?= S_IMGPATH ?>Products/fresh veg.webp" alt="">
                     <button class="expand-btn" onclick="toggleDetails('details1')">Fresh Vegetables</button>
                  </div>
                  <div class="product">
                     <img src="<?= S_IMGPATH ?>Products/seasonal.webp" alt="">
                     <button class="expand-btn" onclick="toggleDetails('details2')">Seasonal Produce</button>
                  </div>
                  <div class="product" data-name="p-3">
                     <img src="<?= S_IMGPATH ?>Products/exotic.jpg" alt="">
                     <button class="expand-btn" onclick="toggleDetails('details3')">Exotic Products</button>
                  </div>
                  <div class="product" data-name="p-4">
                     <img src="<?= S_IMGPATH ?>Products/bulk.jpg" alt="">
                     <button class="expand-btn" onclick="toggleDetails('details4')">Bulk Orders</button>
                  </div>
               </div>
               <div class="products-preview">
                  <div class="preview" id="details1">
                     <img src="<?= S_IMGPATH ?>Products/fresh veg.webp" alt="">
                     <h3>Fresh Vegetables</h3>
                     <p>A wide variety of locally sourced and organic vegetables.</p>
                     <button class="enquiry-btn" onclick="scrollToForm()">Enquire Now</button>
                  </div>
               </div>
               <div class="products-preview">
                  <div class="preview" id="details2">
                     <img src="<?= S_IMGPATH ?>Products/seasonal.webp" alt="">
                     <h3>Seasonal Produce</h3>
                     <p>Highlighting seasonal specialties and limited-time offerings.</p>
                     <button class="enquiry-btn" onclick="scrollToForm()">Enquire Now</button>
                  </div>
               </div>
               <div class="products-preview">
                  <div class="preview" id="details3">
                     <img src="<?= S_IMGPATH ?>Products/exotic.jpg" alt="">
                     <h3>Exotic Products</h3>
                     <p>A delightful assortment of rare and tropical fruits including dragon fruit,lychee,rambutan,passionfruit.</p>
                     <button class="enquiry-btn" onclick="scrollToForm()">Enquire Now</button>
                  </div>
               </div>
               <div class="products-preview">
                  <div class="preview" id="details4">
                     <img src="<?= S_IMGPATH ?>Products/bulk.jpg" alt="">
                     <h3>Bulk Orders</h3>
                     <p>Serving restaurants,hotels,and institutions with large quantities.</p>
                     <button class="enquiry-btn" onclick="scrollToForm()">Enquire Now</button>
                  </div>
               </div>
            </section>
         </div> 
         <!-- products section end -->
</div>

         <!-- enquiry section  start-->
         <div class="container">
            <section id="enquiry-sec">
               <div class="enquiry-sec">
                  <h2 class="sec-heading sec-heading-color ">Client Enquiry Form</h2>
                  <div class="enquiry-form">
                     <form  method="post" name="enquiry-from" id="enquiry-from">
                        <div class="mb-3">
                           <label for="name" class="form-label">Name:</label>
                           <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                           <label for="email" class="form-label">Email:</label>
                           <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                           <label for="phone" class="form-label">Phone Number:</label>
                           <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                           <label for="message" class="form-label">Nature of Enquiry:</label>
                           <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                           <label for="type" class="form-label">Specific Requirements or Comments:</label>
                           <textarea class="form-control" id="type" name="type" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                           <label for="theme" class="form-label">Preferred Contact Method:</label>
                           <textarea class="form-control" id="theme" name="theme" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                           <label for="menu" class="form-label">Urgency Level:</label>
                           <textarea class="form-control" id="menu" name="menu" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="button-61" role="button" >Submit</button>
                     </form>
                  </div>
               </div>
            </section>
         </div>
         <!-- enquiry section  end-->
         <!-- download section start-->
         <div class="container">
            <div class="download-sec">
               <h2 class="sec-heading sec-heading-color ">Downloads</h2>
               <div class="download-container">
                  <div class="download-item">
                     <a href="<?= S_IMGPATH ?>FDI certificate.jpg"><img src="<?= S_IMGPATH ?>FDI certificate.jpg" alt=""></a>
                     <p>FDI Certificate</p>
                  </div>
                  <div class="download-item">
                     <a href="<?= S_IMGPATH ?>import-export-license certificate.webp"><img src="<?= S_IMGPATH ?>import-export-license certificate.webp" alt=""></a>
                     <p>Inport-Export licence Certificate</p>
                  </div>
                  <div class="download-item">
                     <a href="<?= S_IMGPATH ?>fruits.pdf"><img src="<?= S_IMGPATH ?>img2.jpg" alt=""></a>
                     <p>Manual</p>
                  </div>
               </div>
            </div>
         </div>
         <!-- download section end-->

         <!-- testimonial section  start-->
         <?php include (S_INCLUDESPATH . "testimonial.php"); ?>  
         <!-- testimonial section  end-->
        
         <!-- Social media links section starts here -->
         <div class="container ">
            <div class="social-link-sec">
               <div><a href="https://www.linkedin.com/login" target="_blank">
                  <img src="<?=S_IMGPATH?>social-media-icon/linkedin-icon.svg" class="img-fluid"></a>
               </div>
               <div><a href="https://www.facebook.com/login/" target="_blank">
                  <img src="<?=S_IMGPATH?>social-media-icon/facebook-icon.svg" class="img-fluid"></a> 
               </div>
               <div><a href="https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2Faccounts%2Fonetap%2F%3Fnext%3D%252F%26__coig_login%3D2" target="_blank">
                  <img src="<?=S_IMGPATH?>social-media-icon/instagram-icon.svg" class="img-fluid"></a>  
               </div>
               <div><a href="https://www.youtube.com/index?persist_app=1&app=desktop" target="_blank">
                  <img src="<?=S_IMGPATH?>social-media-icon/youtube-icon.svg" class="img-fluid"></a>
               </div>
            </div>
         </div>
         <!-- Social media links section ends here -->
      </article>
      <!-- footer section  start-->
      <?php include (S_INCLUDESPATH . "footer.php"); ?>  
      <!-- footer section  end-->
      <script>
         // enquiry section 
         const scriptURL = 'https://script.google.com/macros/s/AKfycbz3v8cfZ4p0JkJ5I8MNm-OpbTGGyb21VuQjTTu6X8pK4EzwbujPFmnitd_EK3WZ2ZTy/exec'
         const form = document.forms['enquiry-from']
         
         form.addEventListener('submit', e => {
         e.preventDefault()
         fetch(scriptURL, { method: 'POST', body: new FormData(form) })
         .then(response => alert('Message send Successfully!', response))
         .catch(error => alert('Error!', error.message))
         })
      </script>
   </body>
</html>