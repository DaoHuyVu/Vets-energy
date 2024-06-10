<section class="section-cover page-cover page-center text-white">
    <div class="container-fluid px-0">
        <div class="position-relative">
            <div class="image-wrapper position-relative">
                <div class="position-absolute image" style="background-image:url('<?php echo $category['cover']; ?>');"></div>
            </div>
            <div class="container position-absolute">
                <div class="main-info mx-auto text-center">
                    <h1 class="title mb-3"><?php echo $category['name']; ?></h1>
                    <div class="summary"><?php echo $category['description']; ?></div>
                </div>
            </div>
        </div>
    </div>
</section>