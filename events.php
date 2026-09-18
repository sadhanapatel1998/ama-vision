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
                     <h1 class="text-anime-style-2" data-cursor="-opaque">Event &<span> Projects</span></h1>
                     <nav class="wow fadeInUp">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="./">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Event Projects</li>
                         </ol>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->

 <!-- Our Portfolio Section Start -->
 <section class="our-portfolio">
     <div class="container">

         <div class="row section-row">
             <div class="col-lg-12">
                 <div class="section-title section-title-center">
                     <span class="section-sub-title wow fadeInUp">PROJECT / EVENT</span>

                     <h2 data-cursor="-opaque">
                         Selected Event & <span>Production Experience</span>
                     </h2>

                     <p class="wow fadeInUp" data-wow-delay="0.2s">
                         The following credentials are based on the portfolio information supplied by AMA Vision
                         and previously developed company decks. Public web sources were used only to validate
                         the existence and scale/context of named events; they do not independently verify
                         AMA Vision's role in each project.
                     </p>
                 </div>
             </div>
         </div>

         <div class="row">
             <?php foreach ($portfolio as $index => $item): ?>
                 <div class="col-lg-4 col-md-4 mb-4">

                     <div class="portfolio-item wow fadeInUp"
                         data-wow-delay="<?= number_format(($index % 3) * 0.2, 1) ?>s">

                         <div class="portfolio-item-image">
                             <figure class="mb-0">
                                 <img src="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>"
                                     alt="<?= htmlspecialchars($item['alt'], ENT_QUOTES, 'UTF-8') ?>"
                                     class="img-fluid"
                                     loading="lazy"
                                     decoding="async">
                             </figure>
                         </div>

                         <div class="portfolio-item-content">
                             <ul class="mb-2 list-unstyled">
                                 <li><?= htmlspecialchars($item['category'], ENT_QUOTES, 'UTF-8') ?></li>
                             </ul>

                             <h3><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                         </div>

                     </div>

                 </div>
             <?php endforeach; ?>
         </div>
     </div>
 </section>
 <!-- Our Portfolio Section End -->



 <?php
    $content = ob_get_clean();
    require 'layout.php';
    ?>