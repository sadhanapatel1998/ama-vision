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
                     <h1 class="text-anime-style-2" data-cursor="-opaque">Industries &  <span>Sectors</span></h1>
                     <nav class="wow fadeInUp">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item"><a href="./">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page">Industries & Sectors</li>
                         </ol>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Page Header End -->

    <!-- Our Industries & Sectors Section Start -->
    <div class="industries-grid">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title section-title-center">
                        <span class="section-sub-title wow fadeInUp">Industries & Sectors </span>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Selected Event & <span>Production Experience</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">The following credentials are based on the portfolio information supplied by AMA Vision and previously developed
                            company decks. Public web sources were used only to validate the existence and scale/context of named events;
                            they do not independently verify AMA Vision's role in each project.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($industries as $index => $item): ?>
                    <div class="col-xl-6 col-lg-6 mb-4">
                        <div class="industry-modern-card wow fadeInUp"
                            data-wow-delay="<?= '0.' . ($index % 3) . 's' ?>">
                            <div class="industry-number">
                                <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
                            </div>
                            <div class="industry-thumb">
                                <img src="<?= $item['image']; ?>"
                                    alt="<?= htmlspecialchars($item['alt']); ?>">
                            </div>
                            <div class="industry-info">
                                <span><?= $item['tag']; ?></span>
                                <h3><?= $item['title']; ?></h3>
                                <p><?= $item['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Our Industries & Sectors Section End -->



 <?php
    $content = ob_get_clean();
    require 'layout.php';
    ?>