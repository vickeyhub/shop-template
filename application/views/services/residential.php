<div class="container-fluid">
    <img src="<?= base_url("assets/images/interior.jpg"); ?>" alt="interiors_and_design" class="img-fluid">
</div>
<div class="container">
    <h1 class="text-center py-5 fw-light"><?= $title; ?></h1>
</div>
<div class="container mt-5 pt-5">
    <div class="row">
        <?php foreach($residential as $resi): ?>
        <div class="col-md-6">
            <div class="parent-layer">
                <img src="<?= $resi->post_thumbnail; ?>" alt="Residential" class="img-fluid">
                <div class="second-layer d-flex align-items-center justify-content-center">
                    <a href="<?= base_url('view-service')."/".$resi->post_slug_url; ?>" class="nav-link p-5 text-white card-hover-text"><?= $resi->post_title; ?></a>
                </div>
            </div>
        </div>
            <?php endforeach; ?>
    </div>
</div>