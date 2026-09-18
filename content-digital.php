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
                     <h1 class="text-anime-style-2" data-cursor="-opaque">Content / <span>Digital</span></h1>
                     <nav class="wow fadeInUp">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="./">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Content / Digital</li>
                         </ol>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->

 <!-- Content / Digital Section Start -->
 <section class="content-digital-section">
     <div class="container">

         <div class="row section-row">
             <div class="col-lg-12">
                 <div class="section-title section-title-center">
                     <span class="section-sub-title wow fadeInUp">Content / Digital</span>
                     <h2 class="text-anime-style-2" data-cursor="-opaque">
                         Content That <span>Lives Beyond the Event</span>
                     </h2>
                     <p class="wow fadeInUp" data-wow-delay="0.2s">
                         From films and reels to social-first content and event coverage, we build content pipelines that keep your brand active long after the moment ends.
                     </p>
                 </div>
             </div>
         </div>

         <div class="content-digital-wrap">

             <div class="row align-items-center">

                 <!-- Left -->
                 <div class="col-lg-5">
                     <div class="content-digital-info">

                         <span class="content-badge">Content Ecosystem</span>

                         <h3>Create Once. <br>Publish Everywhere.</h3>

                         <p>
                             Every production is planned with distribution in mind, transforming one shoot into multiple high-performing content formats across digital platforms.
                         </p>

                         <div class="content-pipeline">

                             <div class="pipeline-step">
                                 <div class="pipeline-icon">
                                     <i class="fas fa-film"></i>
                                 </div>
                                 <div>
                                     <h4>Films</h4>
                                     <span>Brand stories & corporate films</span>
                                 </div>
                             </div>

                             <div class="pipeline-step">
                                 <div class="pipeline-icon">
                                     <i class="fas fa-video"></i>
                                 </div>
                                 <div>
                                     <h4>Reels</h4>
                                     <span>Short-form vertical content</span>
                                 </div>
                             </div>

                             <div class="pipeline-step">
                                 <div class="pipeline-icon">
                                     <i class="fas fa-share-alt"></i>
                                 </div>
                                 <div>
                                     <h4>Social-First Content</h4>
                                     <span>Platform-ready creative assets</span>
                                 </div>
                             </div>

                             <div class="pipeline-step">
                                 <div class="pipeline-icon">
                                     <i class="fas fa-camera-retro"></i>
                                 </div>
                                 <div>
                                     <h4>Event Content</h4>
                                     <span>Coverage, BTS & aftermovies</span>
                                 </div>
                             </div>

                         </div>

                     </div>
                 </div>

                 <!-- Right -->
                 <div class="col-lg-7">
                     <div class="content-visual">

                        <img src="images/resources/content-digital.jpg" alt="">
                         <div class="floating-stat top">
                             <i class="fas fa-bolt"></i>
                             <div>
                                 <h4>Fast Turnaround</h4>
                                 <span>Content-ready delivery</span>
                             </div>
                         </div>

                         <div class="floating-stat bottom">
                             <i class="fas fa-layer-group"></i>
                             <div>
                                 <h4>Content Pipeline</h4>
                                 <span>One shoot. Multiple assets.</span>
                             </div>
                         </div>

                     </div>
                 </div>

             </div>

         </div>

     </div>
 </section>
 <!-- Content / Digital Section End -->





 <?php
    $content = ob_get_clean();
    require 'layout.php';
    ?>