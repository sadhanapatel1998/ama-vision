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
                     <h1 class="text-anime-style-2" data-cursor="-opaque">Client & <span> Brand</span></h1>
                     <nav class="wow fadeInUp">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="./">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Client & Brand Portfolio</li>
                         </ol>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->

 <!-- Brand Gallery Section Start -->
 <div class="brand-gallery">
     <div class="container">

         <div class="row section-row">
             <div class="col-lg-12">
                 <div class="section-title section-title-center">
                     <span class="section-sub-title wow fadeInUp">
                         Client & Brand Portfolio
                     </span>
                     <h2 class="text-anime-style-2">
                         Brands We Have <span>Worked With</span>
                     </h2>
                 </div>
             </div>
         </div>

         <div class="brand-gallery-wrapper">

             <?php foreach ($rows as $index => $images): ?>

                 <div class="brand-gallery-marquee <?= $index != 2 ? 'mb-4' : '' ?>">
                     <div class="brand-gallery-track <?= ($index % 2 == 0) ? 'brand-scroll-right' : 'brand-scroll-left'; ?>">

                         <?php foreach ($images as $img): ?>
                             <div class="brand-gallery-card">
                                 <img src="<?= $img; ?>" loading="lazy" alt="Client Portfolio">
                             </div>
                         <?php endforeach; ?>

                         <!-- Duplicate for seamless infinite loop -->
                         <?php foreach ($images as $img): ?>
                             <div class="brand-gallery-card">
                                 <img src="<?= $img; ?>" loading="lazy" alt="Client Portfolio">
                             </div>
                         <?php endforeach; ?>

                     </div>
                 </div>

             <?php endforeach; ?>

         </div>

     </div>
 </div>
 <!-- Brand Gallery Section End -->



 <?php
    $content = ob_get_clean();
    require 'layout.php';
    ?>