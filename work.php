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
                     <h1 class="text-anime-style-2" data-cursor="-opaque">Work / Case <span>Studies</span></h1>
                     <nav class="wow fadeInUp">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="./">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Work / Case Studies</li>
                         </ol>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->

 <!-- Work / Case Studies Section Start -->
 <section class="work-showcase">
     <div class="container">

         <div class="row section-row">
             <div class="col-lg-12">
                 <div class="section-title section-title-center">
                     <span class="section-sub-title wow fadeInUp">Work / Case Studies</span>
                     <h2 class="text-anime-style-2" data-cursor="-opaque">
                         Production Stories That <span>Create Impact</span>
                     </h2>
                     <p class="wow fadeInUp" data-wow-delay="0.2s">
                         From high-profile productions to brand experiences, our work reflects creative thinking backed by flawless execution.
                     </p>
                 </div>
             </div>
         </div>

         <!-- Featured Case -->
         <div class="featured-case wow fadeInUp">
             <div class="row align-items-center">
                 <div class="col-lg-7">
                     <div class="featured-case-image">
                         <!-- <AsyncImage query="premium corporate event production stage lights audience conference" aspectRatio="5:3" maxHeight=420 />
                         <span class="featured-case-badge">Featured</span> -->
                         <img src="images/resources/work.jpg" alt="">
                     </div>
                 </div>

                 <div class="col-lg-5">
                     <div class="featured-case-content">
                         <span class="case-category">Large Format Production</span>
                         <h3>Execution with Creative Precision</h3>
                         <p>
                             Every project combines strategic planning, production discipline and content-first execution to create experiences that extend beyond the event itself.
                         </p>

                         <div class="case-metrics">
                             <div class="metric">
                                 <h4>Pan-India</h4>
                                 <span>Execution</span>
                             </div>
                             <div class="metric">
                                 <h4>4+</h4>
                                 <span>Years</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Case Grid -->
         <div class="row g-4 case-grid">

             <div class="col-lg-4 col-md-6">
                 <div class="case-card wow fadeInUp" data-wow-delay="0.1s">
                     <div class="case-card-image">
                         <AsyncImage query="government summit event production stage India" aspectRatio="4:3" />
                         <span class="case-number">01</span>
                     </div>
                     <div class="case-card-content">
                         <span>Government Events</span>
                         <h4>High-Impact Event Production</h4>
                         <p>Large-scale productions managed with structured planning and seamless execution.</p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="case-card wow fadeInUp" data-wow-delay="0.2s">
                     <div class="case-card-image">
                         <AsyncImage query="corporate conference production LED stage cameras" aspectRatio="4:3" />
                         <span class="case-number">02</span>
                     </div>
                     <div class="case-card-content">
                         <span>Corporate Production</span>
                         <h4>Conference & Brand Experiences</h4>
                         <p>Professional event execution designed for audience engagement and brand impact.</p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="case-card wow fadeInUp" data-wow-delay="0.3s">
                     <div class="case-card-image">
                         <AsyncImage query="professional video production crew filming brand campaign" aspectRatio="4:3" />
                         <span class="case-number">03</span>
                     </div>
                     <div class="case-card-content">
                         <span>Content Production</span>
                         <h4>Stories Beyond the Event</h4>
                         <p>Cinematic content created to maximize value across digital and social platforms.</p>
                     </div>
                 </div>
             </div>

         </div>

         <div class="section-footer-text wow fadeInUp" data-wow-delay="0.4s">
             <p>Every production is built around planning, execution and content that delivers value beyond the event.</p>
         </div>

     </div>
 </section>
 <!-- Work / Case Studies Section End -->



 <?php
    $content = ob_get_clean();
    require 'layout.php';
    ?>