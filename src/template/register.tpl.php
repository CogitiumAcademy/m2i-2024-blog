
<?php require 'template/partials/header.inc.php'; ?>

        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h2>Enregistrement</h2>
                        <div class="my-5">
                            <form id="contactForm" action="?page=register" method="post">

                                <div class="form-floating">
                                    <input name="firstName" class="form-control" id="firstName" type="text" placeholder="Entrez votre prénom...">
                                    <label for="firstName">Prénom</label>
                                </div>

                                <div class="form-floating">
                                    <input name="lastName" class="form-control" id="lastName" type="text" placeholder="Entrez votre nom...">
                                    <label for="lastName">Nom</label>
                                </div>

                                <div class="form-floating">
                                    <input name="email" class="form-control" id="email" type="email" placeholder="Entrez votre email...">
                                    <label for="email">Email</label>
                                </div>
                                
                                <div class="form-floating">
                                    <input name="password" class="form-control" id="name" type="password" placeholder="Entrez votre mot de passe...">
                                    <label for="name">Mot de passe</label>
                                </div>

                                <div class="form-floating">
                                    <input name="phone" class="form-control" id="phone" type="text" placeholder="Entrez votre numéro de téléphone...">
                                    <label for="phone">Téléphone</label>
                                </div>
                                <br />

                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">M'inscrire'</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<?php require 'template/partials/footer.inc.php'; ?>
