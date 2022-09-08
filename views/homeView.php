<!-----------------------------------------------------------
                            Main (Home)
------------------------------------------------------------->

<!-- Page title section --> 
<section>
    <h1>Sport Iconic</h1>
</section>


<!-- Slogan section -->

<section id="slogan-section">
    <div class="row">
        <!-- Background image -->
        <div class="col-12 img-slogan">
            <h2 class="pt-5 text-white text-uppercase font-weight-bold font-italic display-3">Sport Iconic</h2>
            <!-- Slogan -->
            <div class="slogan">
                <blockquote class="text-center text-white font-italic px-auto">"Une nouvelle façon de faire du sport"</blockquote>
            </div>
            <!-- Link to Courses section -->
            <a href="#courses"><img src="<?= URL ?>public/Assets/images/icons/chevron.png" alt="icône chevron bas" class="chevron-icon"></a>
        </div>
    </div>
</section>


<!-- Concept section -->

<section id="concept">
    <div class="container">
        <div class="row">

            <!-- Concept title -->
            <div class="col-12 pt-5 pb-3">
                <h2>Le concept</h2>
            </div>

            <!-- Concept description --> 
            <div class="col-11 mx-auto">
                <div class="row">
                    <div class="col-12 text-justify">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor elementum odio, vel viverra augue. Sed pellentesque pretium tortor, nec porta nisl. Aenean dictum ex ultricies, lacinia est at, maximus tortor. </p>
                        <p>Nunc vitae massa metus. Duis varius nulla eget felis malesuada laoreet. Aliquam feugiat et odio vel vehicula. Praesent sit amet purus tempor, luctus lectus a, bibendum sapien. Duis id interdum lacus. Proin lacinia</p> 
                        <p>Diam sed convallis ullamcorper, odio libero pellentesque odio, eu tristique est dui pulvinar quam. Maecenas eget augue orci. Nulla dictum urna id nulla gravida, sit amet condimentum ligula pellentesque. Ut erat purus, aliquet sed lorem ut, tristique efficitur arcu. Morbi sed consectetur nulla.</p>
                    </div>
                </div>
            </div>

            <!-- Concept separator line --> 
            <div class="col-11 mx-auto mt-4">
                <div class="row separator-line mx-auto"></div>
            </div>

        </div>
    </div>
</section>


<!-- Statistics section -->

<section id="statistics">
    <div class="container">
        <div class="row">

            <!-- Statistics title -->
            <div class="col-12 pt-5 pb-3">
                <h2>Les statistiques</h2>
            </div>

            <!-- Statistics numbers -->
            <div class="col-12 d-flex justify-content-center">
                <div class="row mb-5">
                    <!-- 1st card Success -->
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <div class="card statistics-card mb-3">
                            <div class="d-flex justify-content-center mt-3">
                                <img src="<?= URL ?>public/Assets/images/icons/business-success.svg" class="card-img-top card-icons" alt="icône de succès">
                            </div>
                            <div class="card-body text-center">
                                <h3 class="card-title">Ouverture 99%</h3>
                                <p class="card-text text-dark">de taux de réussite</p>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd card France -->
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <div class="card statistics-card mb-3">
                            <div class="d-flex justify-content-center mt-3">
                                <img src="<?= URL ?>public/Assets/images/icons/france-flag.svg" class="card-img-top card-icons" alt="icône de la France">
                            </div>
                            <div class="card-body text-center">
                                <h3 class="card-title">200 salles</h3>
                                <p class="card-text text-dark">partout en France</p>
                            </div>
                        </div>
                    </div>
                    <!-- 3rd card World -->
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <div class="card statistics-card mb-3">
                            <div class="d-flex justify-content-center mt-3">
                                <img src="<?= URL ?>public/Assets/images/icons/globe.svg" class="card-img-top card-icons" alt="icône d'un globe" >
                            </div>
                            <div class="card-body text-center">
                                <h3 class="card-title">Bientôt 500</h3>
                                <p class="card-text text-dark">dans le monde</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Courses section -->

<section id="courses" class="row">
    <div class="container">
        <div class="row">

            <!-- Courses title -->
            <div class="col-12 pb-3 pt-5">
                <h2>Nos cours</h2>
            </div>

            <!-- Courses carousel --> 
            <div class="col-12 mb-5">
                <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner carousel">
                        <!-- 1srt slide about collective courses -->
                        <div class="carousel-item active d-flex justify-content-center">
                            <img src="<?= URL ?>public/Assets/images/photos/course.png" alt="cours collectifs en salle" class="w-50 d-block carousel-img">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="title-carousel">Des cours collectifs</h3>
                                <p class="title-carousel">accessibles à tous</p>
                            </div>
                        </div>
                        <!-- 2e slide about personalised accompanying -->
                        <div class="carousel-item d-flex justify-content-center">
                            <img src="<?= URL ?>public/Assets/images/photos/dumbbell-woman.png" alt="femme soulevant des altères" class="w-50 d-block carousel-img">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="title-carousel">Un accompagnement</h3>
                                <p class="title-carousel">et un suivi personnalisé</p>
                            </div>
                        </div>
                        <!-- 3rd slide about equipment based on the latest technology -->
                        <div class="carousel-item d-flex justify-content-center">
                            <img src="<?= URL ?>public/Assets/images/photos/bike.png" alt="vélo d'appartement" class="w-50 d-block carousel-img">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="title-carousel">De nombreux équipements</h3>
                                <p class="title-carousel">à la pointe de la technologie</p>
                            </div>
                        </div>
                    </div>

                    <!-- Previous control -->
                    <a class="carousel-control-prev" href="#myCarousel" data-target="#myCarousel" data-slide="prev">
                        <button class="btn control-btn">
                            <span class="visually-hidden previous-next"></span>
                            <span class="carousel-control-prev-icon carousel-icon" style="width: 30px"></span>
                        </button>
                    </a>
                    <!-- Next control -->
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <button class="btn control-btn">
                            <span class="visually-hidden previous-next"></span>
                            <span class="carousel-control-next-icon carousel-icon" style="width: 30px"></span>
                        </button>
                    </a>
                </div>
            </div> 

        </div>
    </div>
</section>


<!-- Become a Partner section -->

<section id="partner">
    <div class="container">
        <div class="row">

    <!-- Partner title -->
    <div class="col-12 pt-5 pb-3">
        <h2>Devenir franchisé</h2>
    </div>

     <!--  -->
     <div class="col-12 d-flex justify-content-center mb-5">
        <div class="row">

            <!-- 1st card new openings -->
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <div class="card partner-card mb-3">
                    <div class="d-flex justify-content-center mt-4">
                        <img src="<?= URL ?>public/Assets/images/icons/gym.svg" class="card-img-top card-icons" alt="icône de succès">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Ouvertures de salles</h3>
                        <p class="card-text text-center text-dark" >Lubersac (19), Aiserey (21), Peipin (04), Saint-Flour (15), Veynes (05), Boulogne-sur-Mer (62), Alès (30)</p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-partner mt-2"><a href="#" class="card-link text-white">Découvrir</a></button>
                        </div>
                    </div>
                </div>
            </div>
             <!-- 2nd card Brand infos-->
             <div class="col-12 col-md-6 d-flex justify-content-center ">
                <div class="card partner-card mb-3">
                    <div class="d-flex justify-content-center mt-4">
                        <img src="<?= URL ?>public/Assets/images/icons/infos.svg" class="card-img-top card-icons" alt="icône de succès" >
                    </div>
                    <div class="card-body">
                        <h3 class="card-title font-weight-bold">Plus d'infos</h3>
                  
                        <div class="card-text text-center">
                            <p class="text-dark"><img src="<?= URL ?>public/Assets/images/icons/phone.svg" alt="icône téléphone" style="width:1rem" class="mr-2">06.43.65.66.87<br>
                                <img src="<?= URL ?>public/Assets/images/icons/email.svg" alt="icône email" style="width:1.4rem" class="mr-2">infos-sporticonic@gmail.com
                            </p>
                        </div>
                        <div class="d-flex justify-content-center mt-5 mt-lg-4">
                            <button type="button" class="btn btn-partner "><a href="#" class="card-link text-white">Contact</a></button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

        </div>
    </div>
</section>

