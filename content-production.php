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
                     <h1 class="text-anime-style-2" data-cursor="-opaque">Content <span> Production</span>
                     </h1>
                     <nav class="wow fadeInUp">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="./">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Content Production</li>
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
                             <img src="images/services/content-production.jpg" alt="Content Production">
                         </figure>
                     </div>

                     <div class="service-entry">

                         <p class="wow fadeInUp">
                             AMA Vision creates high-quality content that helps brands communicate with clarity, authenticity and lasting impact. From corporate films and brand campaigns to documentaries and event stories, we produce content designed for every stage of the audience journey.
                         </p>

                         <p class="wow fadeInUp" data-wow-delay="0.2s">
                             Our team combines cinematic storytelling, professional production and platform-ready delivery to create films, photography and social-first content that strengthen brand presence across digital, corporate and event-driven platforms.
                         </p>

                         <div class="service-why-choose-box">
                             <h2 class="text-anime-style-2" data-cursor="-opaque">
                                 Content <span>Production</span>
                             </h2>

                             <p class="wow fadeInUp">
                                 Professional content production services designed to create impactful films, photography and digital content tailored for modern audiences and multiple platforms.
                             </p>

                             <div class="service-why-choose-list wow fadeInUp" data-wow-delay="0.2s">
                                 <ul>
                                     <li>Corporate Films</li>
                                     <li>Brand Films & Campaign Films</li>
                                     <li>Documentary & Documentary-Style Films</li>
                                     <li>Product & Service Films</li>
                                     <li>Event Films & Aftermovies</li>
                                     <li>Interviews & Testimonial Films</li>
                                     <li>Photography & BTS Coverage</li>
                                     <li>Social-First Content Packages</li>
                                     <li>Creator-Ready Content</li>
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
                                         1. What types of content do you produce?
                                     </button>
                                 </h2>

                                 <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>We produce corporate films, brand campaigns, documentaries, product videos, event films, interviews, photography and social-first content for multiple platforms.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                 <h2 class="accordion-header" id="heading2">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse2">
                                         2. Can you create content for social media?
                                     </button>
                                 </h2>

                                 <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Yes, we create social-first content packages, creator-ready assets and platform-specific videos optimized for Instagram, LinkedIn, YouTube and other digital channels.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                 <h2 class="accordion-header" id="heading3">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse3">
                                         3. Do you cover events and behind-the-scenes content?
                                     </button>
                                 </h2>

                                 <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Absolutely. We provide event films, aftermovies, photography and behind-the-scenes coverage that extends the value of your event beyond the venue.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                 <h2 class="accordion-header" id="heading4">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse4">
                                         4. Can you create interview and testimonial films?
                                     </button>
                                 </h2>

                                 <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Yes, we produce professional interviews and testimonial films that help businesses showcase leadership, customer success stories and authentic brand credibility.</p>
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