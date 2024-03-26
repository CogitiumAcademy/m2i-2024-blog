
<?php require 'template/partials/header.inc.php'; ?>

        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <?= $post['content'] ?>

                        <?php if (!empty($comments)) { ?>
                        <h2>Les commentaires :</h2>
                        <ul class="list-group">
                            <?php foreach ($comments as $comment) { ?>
                                <li class="list-group-item">Le <?= $comment['createdAt'] ?>, <?= $comment['firstName'] ?> <?= $comment['lastName'] ?> à écrit : <br><i><b><?= $comment['content'] ?></b></i></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </article>

<?php require 'template/partials/footer.inc.php'; ?>
