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
                     <h1 class="text-anime-style-2" data-cursor="-opaque">Post <span> Production</span>
                     </h1>
                     <nav class="wow fadeInUp">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="./">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Post Production</li>
                         </ol>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->

 <div class="page-service-single">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 order-2 order-md-1 mt-5 mt-md-0">
                 <?php include('include/services-sidebar.php'); ?>
             </div>

             <div class="col-lg-8 order-1 order-md-2">
                 <div class="service-single-content">

                     <div class="page-single-image">
                         <figure class="image-anime reveal">
                             <img src="images/services/post-production.jpg" alt="Post-Production">
                         </figure>
                     </div>

                     <div class="service-entry">

                         <p class="wow fadeInUp">
                             AMA Vision delivers professional post-production services that transform raw footage into polished visual stories with precision, creativity and technical excellence. Every project is refined to match your brand identity, audience and platform requirements.
                         </p>

                         <p class="wow fadeInUp" data-wow-delay="0.2s">
                             Our team combines cinematic editing, motion graphics, color grading and audio finishing with fast-turnaround workflows to deliver content that looks professional, performs across platforms and leaves a lasting impression.
                         </p>

                         <div class="service-why-choose-box">
                             <h2 class="text-anime-style-2" data-cursor="-opaque">
                                 Post-<span>Production</span>
                             </h2>

                             <p class="wow fadeInUp">
                                 Complete post-production services designed to enhance quality, improve storytelling and deliver platform-ready content with speed and consistency.
                             </p>

                             <div class="service-why-choose-list wow fadeInUp" data-wow-delay="0.2s">
                                 <ul>
                                     <li>Professional Video Editing</li>
                                     <li>Short-Form / Reels Editing</li>
                                     <li>Motion Graphics & Titles</li>
                                     <li>Color Correction & Color Grading</li>
                                     <li>Sound Design & Audio Finishing</li>
                                     <li>Versioning for Multiple Platforms</li>
                                     <li>Same-Day / Fast-Turnaround Event Edits</li>
                                 </ul>
                             </div>
                         </div>

                         <?php include('include/service-offer-box.php'); ?>

                     </div>

                     <div class="page-single-faqs">

                         <div class="section-title">
                             <h2 class="text-anime-style-2" data-cursor="-opaque">
                                 Frequently Asked <span>Questions</span>
                             </h2>
                         </div>

                         <div class="faq-accordion" id="accordion">

                             <div class="accordion-item wow fadeInUp">
                                 <h2 class="accordion-header" id="heading1">
                                     <button class="accordion-button" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse1"
                                         aria-expanded="true">
                                         1. What does your post-production service include?
                                     </button>
                                 </h2>

                                 <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Our post-production includes video editing, motion graphics, color grading, audio finishing, platform versioning and fast-turnaround content delivery.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                 <h2 class="accordion-header" id="heading2">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse2">
                                         2. Do you create short-form and Reels content?
                                     </button>
                                 </h2>

                                 <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Yes, we produce engaging short-form videos, Instagram Reels and platform-optimized edits designed for maximum audience engagement.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                 <h2 class="accordion-header" id="heading3">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse3">
                                         3. Can you deliver same-day event edits?
                                     </button>
                                 </h2>

                                 <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Absolutely. We provide same-day and fast-turnaround edits for events, helping brands share highlights while audience engagement is at its peak.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                 <h2 class="accordion-header" id="heading4">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse4">
                                         4. Do you prepare videos for different platforms?
                                     </button>
                                 </h2>

                                 <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Yes, we create multiple versions of the same content with platform-specific formats, dimensions and exports for social media, websites and presentations.</p>
                                     </div>
                                 </div>
                             </div>

                         </div>

                     </div>

                 </div>
             </div>
         </div>
     </div>
 </div>




 <?php
    $content = ob_get_clean();
    require 'layout.php';
    ?>