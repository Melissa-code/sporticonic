<!-- Navigation -->

<nav id="main-nav" class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid mx-5">

        <!-- logo -->
        <div id="logo">
            <a class="navbar-brand" href="home"><img class="logo" src="<?= URL ?>public/Assets/images/logo/logo.svg" /></a>
        </div>

        <!-- burger menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- links for navigation -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mr-1">
                    <a class="nav-link menu-link" href="<?= URL ?>home">Accueil</a>
                </li>
                <li class="nav-item mr-1">
                    <a class="nav-link menu-link" href="#">Franchise</a>
                </li>
                <li class="nav-item mr-1">
                    <a class="nav-link menu-link" href="#">Contact</a>
                </li>
            </ul>
            
            <!-- login links --> 
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                <?php if(empty($_SESSION['profil'])): ?>
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Se connecter</a>
                    <div class="dropdown-menu dropdown-custom">
                        <a class="dropdown-item" href="<?= URL ?>loginBrand">La Marque</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= URL ?>loginPartner">Partenaire</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= URL ?>loginStructure">Structure</a>
                    </div>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="<?= URL ?>accountStructure/profil">Profil</a>
                        </li>
                    <?php endif ?>
                </li>
            </ul>

        </div>

    </div>
</nav>