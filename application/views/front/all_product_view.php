<!-- this is all product categroy page -->
<main role="main">
    <div class="container">
        <div>
            <h1 class="text-center fw-light"><?= $category->post_category_title; ?></h1>
            <hr class="text-center mx-auto" style="width:100px;">
        </div>

        <div> 
            <?php foreach($posts as $post): ?>
            <div class="image-box">
                <img src="<?= $post->post_thumbnail; ?>" alt="">
            </div>     
            <?php endforeach; ?>
        </div>
    </div>
</main>