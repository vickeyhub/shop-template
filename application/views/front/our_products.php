<main role="main">
    <div class="wrapper">
        <h1 class="text-center py-5 fw-light">OUR PRODUCTS</h1>

        <div class="container-fluid">
            <div class="service-box">
                <div class="w-100">
                    <img src="<?= base_url('assets/images/home/media.jpg'); ?>" class="w-100">
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <p class="normal-og light-grey font-12">we believe that the furniture is one of the key features that shapes and defines the design of a space.<br><br>



                at essentia we offer our clients the opportunity to have bespoke furniture for their homes. when we say bespoke we mean it as our clients have the liberty to customize every aspect of their furniture from design, material, time and cost. our pieces are handmade using world class materials of the finest quality. all the furniture is made in-house at our own production facility at manesar.<br><br>



                as a company, we also offer our clients the flexibility to source from all vendors across the globe as well. the process is entirely project driven, and the choice of vendor is made keeping in mind the project requirement and available budget.<br><br>



                the choice between essentia, baker, giorgetti, b&b, polyform, fendi, flexform, foscarini, artemide and scores of others from across the globe is made primarily based on what style best enhances the overall look and feel of the project. our strong logistic capabilities allow us to choose and bring various items across borders without any challenge.<br><br>
            </p>
        </div>

        <div class="container my-5">
            <div class="row">
                <?php foreach ($all_categories as $category) : ?>
                    <div class="col-md-3 col-sm-12 d-flex flex-wrap justify-content-center">
                        <a href="<?= base_url('product') . '/' . $category->post_category_slug; ?>">
                            <img src="<?= $category->category_thumbnail; ?>" class="img-fluid">
                        </a>
                        <a href="<?= base_url('product') . '/' . $category->post_category_slug; ?>" class="btn btn-light fw-light text-uppercase mt-4"><?= $category->post_category_title; ?></a>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </div>
</main>