<!-------------------------------------------------------------------------------
                            Main (login Partner)
--------------------------------------------------------------------------------->
<div class="row login">
   <div class="col-12">

        <!-- Page title section --> 
        <section>
            <h1>Connexion du Partenaire</h1>
        </section>


        <!-- Login Partner section -->

        <section id="login">
            <div class="row">

                <!-- Login Partner title -->
                <div class="col-12 pt-4 pb-3 login-partner">
                    <h2>Connexion</h2>
                </div>

                <!-- Login Partner form --> 
                <article class="col-12 d-flex justify-content-center">
                    <form action="loginPartnerValidation" method="POST" class="form-container">
                        <div class="mb-2 mb-md-4">
                            <h3 class="animate__animated animate__heartBeat">Franchisé</h3>
                        </div>
                        <div class="form-group">
                            <label for="login_partner">Email</label>
                            <input type="email" class="form-control" id="login_partner" name="login_partner" placeholder="exemple@gmail.com" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password_partner">Mot de passe</label>
                            <input type="password" class="form-control" id="password_partner" name="password_partner" placeholder="************" required>
                        </div>
                        <!-- Login button -->
                        <div>
                            <button type="submit" class="btn w-100 d-block mx-auto btn-login font-weight-bold">Se connecter</button>
                        </div>
                        <!-- Create an account link -->
                        <div class="d-flex justify-content-center align-items-center mt-2 mt-md-4">
                            <a href="#" class="text-white createAccountLink">Créer un compte</a><i class="fa-solid fa-arrow-right fa-2xs ml-2"></i>
                        </div>
                    </form>
                </article>

            </div>
        </section>

    </div>
</div>