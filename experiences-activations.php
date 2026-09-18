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
                     <h1 class="text-anime-style-2" data-cursor="-opaque">Experiences & <span> Activations</span>
                     </h1>
                     <nav class="wow fadeInUp">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="./">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Experiences & Activations</li>
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
                             <img src="images/services/experiences-activations.jpg" alt="Experiences & Activations">
                         </figure>
                     </div>

                     <div class="service-entry">

                         <p class="wow fadeInUp">
                             AMA Vision creates immersive brand experiences that turn audiences into active participants through thoughtfully designed activations, engagement formats and interactive environments. Every experience is built to strengthen brand recall and encourage meaningful audience interaction.
                         </p>

                         <p class="wow fadeInUp" data-wow-delay="0.2s">
                             Our team combines creative planning, on-ground execution and content-first thinking to deliver experiential campaigns, retail activations and social-ready moments that extend the impact of every event beyond the venue.
                         </p>

                         <div class="service-why-choose-box">
                             <h2 class="text-anime-style-2" data-cursor="-opaque">
                                 Experiences & <span>Activations</span>
                             </h2>

                             <p class="wow fadeInUp">
                                 End-to-end activation services designed to create memorable audience experiences that drive engagement, visibility and long-lasting brand impact.
                             </p>

                             <div class="service-why-choose-list wow fadeInUp" data-wow-delay="0.2s">
                                 <ul>
                                     <li>Brand Activations</li>
                                     <li>Experiential Zones</li>
                                     <li>Audience Engagement Formats</li>
                                     <li>Interactive Installations & Content Moments</li>
                                     <li>Mall & Retail Experiences</li>
                                     <li>Influencer / Creator-Led Activations</li>
                                     <li>Event Content Ecosystems for Social Distribution</li>
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
                                         1. What are brand activations?
                                     </button>
                                 </h2>

                                 <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Brand activations create interactive experiences that help audiences connect with your brand through engaging on-ground activities and memorable moments.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                 <h2 class="accordion-header" id="heading2">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse2">
                                         2. Do you manage mall and retail activations?
                                     </button>
                                 </h2>

                                 <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Yes, we execute mall promotions, retail experiences and audience engagement activities with complete on-ground coordination and production support.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                 <h2 class="accordion-header" id="heading3">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse3">
                                         3. Can you create influencer-led activations?
                                     </button>
                                 </h2>

                                 <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Absolutely. We design creator-led campaigns and influencer activations that combine live experiences with social-ready content for wider audience reach.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                 <h2 class="accordion-header" id="heading4">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse4">
                                         4. How do you make activations effective?
                                     </button>
                                 </h2>

                                 <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>We combine creative concepts, audience interaction, seamless execution and content capture to ensure every activation delivers measurable engagement and lasting brand impact.</p>
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