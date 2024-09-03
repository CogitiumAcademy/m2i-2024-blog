
<?php require 'template/partials/header.inc.php'; ?>

        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-8">

                    <h2>Modération des articles</h2>
                    
                    <?php foreach ($posts as $post) { ?>
                    
                    <!-- Post preview-->
                    <div class="post-preview">
                        <h4 class="post-title"><?= $post['title'] ?></h4>
                        <img class="w-25" src="<?= $post['image'] ?>" alt="">
                        <a href="?page=moder&action=activate&id=<?= $post['id'] ?>" class="btn btn-primary">Activer</a>
                        <a href="?page=moder&action=delete&id=<?= $post['id'] ?>&token=<?= $_SESSION["token"] ?>" class="btn btn-danger" onclick="return confirm('Confirmation ?')">Supprimer</a>
                        <p class="post-subtitle"><?= $post['content'] ?>...</p>
                        <p class="post-meta">
                            <?= $post['updatedAt'] ?>
                        </p>
                    </div>

                    <!-- Divider-->
                    <hr class="my-4" />
                        
                    <?php } ?>

                </div>
            </div>
        </div>

<?php require 'template/partials/footer.inc.php'; ?>
