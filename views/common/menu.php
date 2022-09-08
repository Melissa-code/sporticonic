<!-- Navigation -->

<nav id="main-nav" class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid mx-5">

        <!-- logo -->
        <div id="logo">
            <a class="navbar-brand" href="home"><img src="<?= URL ?>public/Assets/images/logo/logo.svg" style="width:30vh" class="logo" /></a>
        </div>

        <!-- burger menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- links for navigation -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mr-1">
                    <a class="nav-link" href="home">Accueil</a>
                </li>
                <li class="nav-item mr-1">
                    <a class="nav-link" href="#">Franchise</a>
                </li>
                <li class="nav-item mr-1">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <!-- login links --> 
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Se connecter</a>
                    <div class="dropdown-menu dropdown-custom">
                        <a class="dropdown-item" href="loginBrand">La Marque</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="loginPartner">Partenaire</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="loginStructure">Structure</a>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</nav>