
<?php require 'template/partials/header.inc.php'; ?>

        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-8">

                    <h2>Catégorie : <?= $categoryName ?></h2>
                    
                    <?php foreach ($posts as $post) { ?>
                    
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="?page=post&slug=<?= $post['postSlug'] ?>">
                            <h3 class="post-title"><?= $post['title'] ?></h2>
                            <img class="w-25" src="<?= $post['image'] ?>" alt="">
                            <h4 class="post-subtitle"><?= $post['content'] ?>...</h3>
                        </a>
                        <p class="post-meta">
                            <?= $post['updatedAt'] ?>
                            <?php if ($post['nbComments'] > 0) { ?>
                                 - <?= $post['nbComments'] ?> <?= pluralize('commentaire', $post['nbComments']) ?>
                            <?php } ?>

                        </p>
                    </div>

                    <!-- Divider-->
                    <hr class="my-4" />
                        
                    <?php } ?>

                </div>
                <div class="col-md-2 col-lg-4 col-xl-4 border">
                    <h2>Catégories</h2>
                    <div class="list-group">
                        <?php foreach ($categories as $category) { ?>
                            <a href="?page=category&slug=<?= $category['slug'] ?>" class="list-group-item list-group-item-action"><?= $category['name'] ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

<?php require 'template/partials/footer.inc.php'; ?>
