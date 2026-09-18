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
                     <h1 class="text-anime-style-2" data-cursor="-opaque">Creative <span> Production</span>
                     </h1>
                     <nav class="wow fadeInUp">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="./">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Creative Production</li>
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
                             <img src="images/services/creative-production.jpg" alt="Creative Production">
                         </figure>
                     </div>

                     <div class="service-entry">

                         <p class="wow fadeInUp">
                             AMA Vision transforms ideas into compelling creative experiences through strategic thinking, concept development and production-led storytelling. We shape campaigns, events and brand narratives with creative direction that aligns every visual element with your communication goals.
                         </p>

                         <p class="wow fadeInUp" data-wow-delay="0.2s">
                             Our expertise covers campaign ideation, event concepts, scriptwriting, storyboarding and production planning. By combining creativity with execution-ready planning, we create visually engaging experiences that bring consistency, clarity and lasting impact to every project.
                         </p>

                         <div class="service-why-choose-box">
                             <h2 class="text-anime-style-2" data-cursor="-opaque">
                                 Creative <span>Production</span>
                             </h2>

                             <p class="wow fadeInUp">
                                 End-to-end creative development services designed to transform ideas into memorable brand experiences through strategic planning and visual excellence.
                             </p>

                             <div class="service-why-choose-list wow fadeInUp" data-wow-delay="0.2s">
                                 <ul>
                                     <li>Creative Direction</li>
                                     <li>Concept Development</li>
                                     <li>Campaign Ideation</li>
                                     <li>Event Concepts & Experience Design</li>
                                     <li>Scriptwriting & Storyboarding</li>
                                     <li>Visual Treatment & Production Design</li>
                                     <li>Creative Decks & Production Planning</li>
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
                                         1. What does Creative Production include?
                                     </button>
                                 </h2>

                                 <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Our creative production includes concept development, creative direction, scriptwriting, storyboarding and production planning.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                 <h2 class="accordion-header" id="heading2">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse2">
                                         2. Do you create campaign concepts for brands?
                                     </button>
                                 </h2>

                                 <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Yes, we develop campaign ideas, event concepts and branded experiences tailored to your communication goals.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                 <h2 class="accordion-header" id="heading3">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse3">
                                         3. Do you provide scriptwriting and storyboarding?
                                     </button>
                                 </h2>

                                 <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Yes, our team creates scripts, storyboards and visual treatments that prepare projects for smooth production.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                 <h2 class="accordion-header" id="heading4">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse4">
                                         4. Why is production planning important?
                                     </button>
                                 </h2>

                                 <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Detailed production planning aligns creative ideas with timelines, budgets and execution for a more efficient workflow.</p>
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