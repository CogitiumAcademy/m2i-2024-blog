
<?php require 'template/partials/header.inc.php'; ?>

        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    
                    <?php foreach ($posts as $post) { ?>
                    
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="?page=post&slug=<?= $post['postSlug'] ?>">
                            <h2 class="post-title"><?= $post['title'] ?></h2>
                            <img class="w-100" src="<?= $post['image'] ?>" alt="">
                            <h3 class="post-subtitle"><?= $post['content'] ?>...</h3>
                        </a>
                        <p class="post-meta">
                            Rédigé par
                            <a href="#!"><?= $post['firstName'] . ' ' . $post['lastName'] ?></a>
                            <?= $post['updatedAt'] ?>
                            - Classé dans : <a href=""><?= $post['name'] ?></a>
                            <?php if ($post['nbComments'] > 0) { ?>
                                <br><?= $post['nbComments'] ?> <?= pluralize('commentaire', $post['nbComments']) ?>
                            <?php } ?>

                        </p>
                    </div>

                    <!-- Divider-->
                    <hr class="my-4" />
                        
                    <?php } ?>

                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>

                </div>
            </div>
        </div>

<?php require 'template/partials/footer.inc.php'; ?>
