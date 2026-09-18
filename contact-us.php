 <?php
    ob_start();
    include('include/data.php');
    ?>


 <!-- Page Header Start -->
 <div class="page-header dark-section parallaxie">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="page-header-box">
                     <h1 class="text-anime-style-2" data-cursor="-opaque">Contact<span> Us</span></h1>
                     <nav class="wow fadeInUp">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="./">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                         </ol>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->

 <div class="page-contact-us">
     <div class="container">
         <div class="row">
             <div class="col-xl-12">
                 <!-- Contact Form Box Start -->
                 <div class="contact-form-box">
                     <!-- Contact Form Image Box Start -->
                     <div class="contact-form-image-box">
                         <!-- Contact Form Image Start -->
                         <div class="contact-form-image">
                             <figure>
                                 <img src="images/resources/contact-bg.jpg" alt="Image">
                             </figure>
                         </div>
                         <!-- Contact Form Image End -->

                         <!-- Contact Form Content Box Start -->
                         <div class="contact-form-content-box">
                             <!-- Section Title Start -->
                             <div class="section-title">
                                 <span class="section-sub-title wow fadeInUp">Contact Us</span>
                                 <h2 class="text-anime-style-2" data-cursor="-opaque">
                                     Let's Create Something <span>Impactful</span>
                                 </h2>
                                 <!-- <p class="wow fadeInUp" data-wow-delay="0.1s">
                                     Ready to bring your next event, film or production to life? Connect with AMA Vision and let's make it happen.
                                 </p> -->
                             </div>
                             <!-- Section Title End -->

                             <!-- Contact Info List Start -->
                             <div class="contact-info-list wow fadeInUp" data-wow-delay="0.2s">
                                 <ul>
                                     <li>
                                         <img src="images/icon-mail-accent.svg" alt="">
                                         <a href="mailto:hello@amavision.in">hello@amavision.in</a>
                                     </li>

                                     <li>
                                         <img src="images/icon-phone-accent.svg" alt="">
                                         <a href="tel:+919876543210">+91 98765 43210</a>
                                     </li>

                                     <li>
                                         <img src="images/icon-location-accent.svg" alt="">
                                         Delhi-NCR, India
                                     </li>
                                 </ul>
                             </div>
                             <!-- Contact Info List End -->
                         </div>
                         <!-- Contact Form Content Box End -->
                     </div>
                     <!-- Contact Form Image Box End -->

                     <!-- Contact Us Form Start -->
                     <div class="contact-us-form">
                         <!-- Contact Form Start -->
                         <form id="contactForm" action="#" method="POST" data-toggle="validator" class="contact-form wow fadeInUp" data-wow-delay="0.2s" novalidate="true" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                             <div class="row">
                                 <div class="form-group col-md-6 mb-4">
                                     <label>First Name *</label>
                                     <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter First Name *" required="">
                                     <div class="help-block with-errors"></div>
                                 </div>

                                 <div class="form-group col-md-6 mb-4">
                                     <label>Last Name *</label>
                                     <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter Last Name *" required="">
                                     <div class="help-block with-errors"></div>
                                 </div>

                                 <div class="form-group col-md-6 mb-4">
                                     <label>Phone Number *</label>
                                     <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number *" required="">
                                     <div class="help-block with-errors"></div>
                                 </div>

                                 <div class="form-group col-md-6 mb-4">
                                     <label>Email Address *</label>
                                     <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email Address *" required="">
                                     <div class="help-block with-errors"></div>
                                 </div>

                                 <div class="form-group col-md-12 mb-5">
                                     <label>Message *</label>
                                     <textarea name="message" class="form-control" id="message" rows="5" placeholder="Any Message..."></textarea>
                                     <div class="help-block with-errors"></div>
                                 </div>

                                 <div class="col-md-12">
                                     <button type="submit" class="btn-default disabled">submit Message</button>
                                     <div id="msgSubmit" class="h3 hidden"></div>
                                 </div>
                             </div>
                         </form>
                         <!-- Contact Form End -->
                     </div>
                     <!-- Contact Us Form End -->
                 </div>
                 <!-- Contact Form Box End -->
             </div>
         </div>
     </div>
 </div>



 <?php
    $content = ob_get_clean();
    require 'layout.php';
    ?>