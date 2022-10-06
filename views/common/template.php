<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $page_description; ?>">
    <title><?= $page_title; ?></title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Palanquin&family=Poppins:wght@400;700&family=Roboto&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Bootstrap v 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Bootswatch v 4 Cyborg theme -->
    <link href="https://bootswatch.com/4/cyborg/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= URL ?>public/CSS/main.css" rel="stylesheet">
    <?php if(!empty($page_css)) : ?>
        <link href="<?= URL ?>public/CSS/<?=$page_css?>" rel="stylesheet">
    <?php endif; ?> 
</head>

<body>
    <!-- Header -->
    <?php require_once("views/common/header.php"); ?>

    <!-- Main -->
    <main>
        <div class="container-fluid">
            <?php 
                if(!empty($_SESSION['alert'])) {

                    foreach($_SESSION['alert'] as $alert){
                        
                        echo "<div class='row'>";
                            echo "<div class='col-12 d-flex justify-content-center w-75'>";
                                echo "<div class='alert alert-dismissible mt-2 ". $alert['type'] ."' role='alert'>
                                    ".$alert['message']."  <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                    </div>";
                            echo "</div>";
                        echo "</div>";
                    }
                    unset($_SESSION['alert']);
                }
            ?>
            <?= $page_content; ?>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once("views/common/footer.php"); ?>


    <!-- JQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <?php if(!empty($page_javascript)) : ?>
        <?php foreach($page_javascript as $fichier_javascript) : ?>
            <script src="<?= URL?>public/JavaScript/<?= $fichier_javascript ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

</body>
</html>