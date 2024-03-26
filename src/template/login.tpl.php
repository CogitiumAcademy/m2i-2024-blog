
<?php require 'template/partials/header.inc.php'; ?>

        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h2>Connexion</h2>
                        <div class="my-5">
                            <form id="contactForm" action="?page=login" method="post">
                                
                                <div class="form-floating">
                                    <input name="email" class="form-control" id="email" type="email" placeholder="Entrez votre email...">
                                    <label for="email">Email</label>
                                </div>
                                
                                <div class="form-floating">
                                    <input name="password" class="form-control" id="name" type="text" placeholder="Entrez votre mot de passe...">
                                    <label for="name">Mot de passe</label>
                                </div>
                                <br />

                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Me connecter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<?php require 'template/partials/footer.inc.php'; ?>
