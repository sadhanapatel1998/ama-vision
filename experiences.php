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
                     <h1 class="text-anime-style-2" data-cursor="-opaque">Experiences</h1>
                     <nav class="wow fadeInUp">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="./">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Experiences</li>
                         </ol>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->

 <!-- Experiences Section Start -->
 <section class="experience-showcase">
     <div class="container">

         <div class="row section-row">
             <div class="col-lg-12">
                 <div class="section-title section-title-center">
                     <span class="section-sub-title wow fadeInUp">Experiences</span>
                     <h2 class="text-anime-style-2" data-cursor="-opaque">
                         Where Brands Meet <span>Real Engagement</span>
                     </h2>
                     <p class="wow fadeInUp" data-wow-delay="0.2s">
                         We create immersive experiences that connect brands with audiences through activations, retail moments and launch-driven storytelling.
                     </p>
                 </div>
             </div>
         </div>

         <!-- Featured Experience -->
         <div class="experience-feature wow fadeInUp">
             <div class="row align-items-center">

                 <div class="col-lg-6">
                     <div class="experience-feature-content">
                         <span class="experience-label">Audience Engagement</span>
                         <h3>Experiences Designed to Be Remembered</h3>

                         <p>
                             Every activation combines creative thinking, flawless execution and content-first planning to transform everyday interactions into memorable brand moments.
                         </p>

                         <div class="experience-highlight">
                             <div class="highlight-item">
                                 <div class="highlight-icon">
                                     <i class="fas fa-bullhorn"></i>
                                 </div>
                                 <span>Brand Activations</span>
                             </div>

                             <div class="highlight-item">
                                 <div class="highlight-icon">
                                     <i class="fas fa-store"></i>
                                 </div>
                                 <span>Mall & Retail Experiences</span>
                             </div>

                             <div class="highlight-item">
                                 <div class="highlight-icon">
                                     <i class="fas fa-rocket"></i>
                                 </div>
                                 <span>Launch Experiences</span>
                             </div>

                             <div class="highlight-item">
                                 <div class="highlight-icon">
                                     <i class="fas fa-users-cog"></i>
                                 </div>
                                 <span>Audience Engagement</span>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-6">
                     <div class="experience-feature-image">
                        <img src="images/resources/experiences.jpg" alt="">
                         <div class="floating-card">
                             <h4>Interactive Experiences</h4>
                             <p>Designed for participation, engagement and social visibility.</p>
                         </div>
                     </div>
                 </div>

             </div>
         </div>

         <!-- Experience Grid -->

         <div class="row g-4 experience-grid">

             <div class="col-lg-4 col-md-6">
                 <div class="experience-card wow fadeInUp">
                     <div class="experience-icon">
                        <i class="fas fa-bullhorn"></i>
                     </div>
                     <h4>Brand Activations</h4>
                     <p>Create memorable experiences that strengthen audience connection and brand recall.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="experience-card wow fadeInUp" data-wow-delay="0.1s">
                     <div class="experience-icon">
                          <i class="fas fa-store"></i>
                     </div>
                     <h4>Mall & Retail Experiences</h4>
                     <p>Interactive retail environments designed to increase visibility and engagement.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="experience-card wow fadeInUp" data-wow-delay="0.2s">
                     <div class="experience-icon">
                        <i class="fas fa-rocket"></i>
                     </div>
                     <h4>Launch Experiences</h4>
                     <p>Product and brand launches built to create excitement and lasting impact.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="experience-card wow fadeInUp">
                     <div class="experience-icon">
                         <i class="fas fa-lightbulb"></i>
                     </div>
                     <h4>Experiential Formats</h4>
                     <p>Creative audience interactions that make every touchpoint more meaningful.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="experience-card wow fadeInUp" data-wow-delay="0.1s">
                     <div class="experience-icon">
                         <i class="fas fa-camera-retro"></i>
                     </div>
                     <h4>Social Content Moments</h4>
                     <p>Capture experiences that naturally extend into digital and social platforms.</p>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="experience-card wow fadeInUp" data-wow-delay="0.2s">
                     <div class="experience-icon">
                           <i class="fas fa-users-cog"></i>
                     </div>
                     <h4>Audience Engagement</h4>
                     <p>Interactive formats that encourage participation, conversation and recall.</p>
                 </div>
             </div>

         </div>

     </div>
 </section>
 <!-- Experiences Section End -->



 <?php
    $content = ob_get_clean();
    require 'layout.php';
    ?>