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
                     <h1 class="text-anime-style-2" data-cursor="-opaque">Production <span> Management</span>
                     </h1>
                     <nav class="wow fadeInUp">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="./">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Production Management</li>
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
                             <img src="images/services/production-management.jpg" alt="Production Management">
                         </figure>
                     </div>

                     <div class="service-entry">

                         <p class="wow fadeInUp">
                             AMA Vision delivers end-to-end production management that keeps every project organized, efficient and execution-ready from planning to final delivery. We coordinate people, equipment, vendors and logistics to ensure productions run smoothly at every stage.
                         </p>

                         <p class="wow fadeInUp" data-wow-delay="0.2s">
                             Our team combines disciplined planning with on-ground supervision to manage schedules, locations and production workflows with precision. Every detail is monitored to maintain quality, timelines and seamless execution across projects of every scale.
                         </p>

                         <div class="service-why-choose-box">
                             <h2 class="text-anime-style-2" data-cursor="-opaque">
                                 Production <span>Management</span>
                             </h2>

                             <p class="wow fadeInUp">
                                 Complete production management services designed to streamline planning, coordination and execution with one accountable team.
                             </p>

                             <div class="service-why-choose-list wow fadeInUp" data-wow-delay="0.2s">
                                 <ul>
                                     <li>End-to-End Project Management</li>
                                     <li>Crew Planning & Management</li>
                                     <li>Equipment Planning</li>
                                     <li>Location & Logistics Coordination</li>
                                     <li>Vendor Coordination</li>
                                     <li>Run-of-Show Support</li>
                                     <li>On-Ground Production Supervision</li>
                                     <li>Quality Control & Final Delivery</li>
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
                                         1. What does Production Management include?
                                     </button>
                                 </h2>

                                 <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Our production management includes project planning, crew coordination, equipment management, logistics, vendor supervision and quality control from start to finish.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                 <h2 class="accordion-header" id="heading2">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse2">
                                         2. Do you manage vendors and logistics?
                                     </button>
                                 </h2>

                                 <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Yes, we coordinate vendors, locations, transportation and production logistics to ensure smooth execution without operational delays.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                 <h2 class="accordion-header" id="heading3">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse3">
                                         3. Can you supervise production on-site?
                                     </button>
                                 </h2>

                                 <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>Absolutely. Our team provides on-ground production supervision, run-of-show support and real-time coordination throughout the event or shoot.</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                 <h2 class="accordion-header" id="heading4">
                                     <button class="accordion-button collapsed" type="button"
                                         data-bs-toggle="collapse"
                                         data-bs-target="#collapse4">
                                         4. How do you ensure quality and timely delivery?
                                     </button>
                                 </h2>

                                 <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                     <div class="accordion-body">
                                         <p>We follow structured planning, continuous supervision and final quality checks to ensure every project is delivered on schedule and meets production standards.</p>
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