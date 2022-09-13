<!-------------------------------------------------------------------------------
                            Main (login Structure)
--------------------------------------------------------------------------------->
<div class="row profil">
   <div class="col-12">

        <!-- title title section --> 

        <section>
            <h1>Profil de la structure <?= $structure['name_structure'] ?></h1>
        </section>


        <!-- Structure Profil section -->

        <section id="profil">
            <div class="row">

                <!-- Structure profil title -->
                <div class="col-12 pt-2 pb-3 profil-structure">
                    <h2><?= $structure['name_structure'] ?></h2>
                </div>

                <!-- Structure profil  --> 
                <div class="col-12 d-flex justify-content-center align-items-center my-5">
                    <div class="row">
                        <!-- Structure Information --> 
                        <article class="col-12 col-md-6">
                            <div class="card-container my-1">
                                <div>
                                    <h3 class="my-3">Informations</h3>
                                    <ul class="infoStructure">
                                        <li><?= $structure['description_structure'] ?></li>
                                        <li><?= $structure['address_structure'] ?></li>
                                        <li><?= $structure['email_structure'] ?></li>
                                        <li><?= $structure['phone_structure'] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </article>

                         <!-- Modules Structure --> 
                        <article class="col-12 col-md-6">
                            <div class="card-container my-1">
                                <h3 class="my-3">Modules</h3>
                                <div class="d-flex">
                                    <ul class="infoStructure">
                                        <?php foreach($modules_partner as $module_partner): ?>
                                        <li><?= $module_partner['name_module'] ?></li>
                                        <?php endforeach ?>
                                        <?php foreach($modules_structure as $module_structure): ?>
                                        <li><?= $module_structure['name_module'] ?></li>
                                        <?php endforeach ?>
                                    </ul>
                                    <!-- toggle switch -->
                                    <div class="d-block ml-3">
                                        <?php foreach($modules_partner as $module_partner): ?>
                                            <?php if($module_partner['isActive_modpartner']) : ?>
                                                <div class="container toggleSwitch my-1">
                                                    <input type="checkbox" name="box" class="box" checked>
                                                    <div class="colorLayer"></div>
                                                    <div class="switch"></div>
                                                </div>
                                            <?php else :?>
                                                <div class="container toggleSwitch my-2">
                                                    <input type="checkbox" name="box" class="box" >
                                                    <div class="colorLayer"></div>
                                                    <div class="switch"></div>
                                                </div>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                        <?php foreach($modules_structure as $module_structure): ?>
                                            <?php if($module_structure['isActive_modstructure']) : ?>
                                                <div class="container toggleSwitch my-1">
                                                    <input type="checkbox" name="box" class="box" checked>
                                                    <div class="colorLayer"></div>
                                                    <div class="switch"></div>
                                                </div>
                                            <?php else :?>
                                                <div class="container toggleSwitch my-2">
                                                    <input type="checkbox" name="box" class="box" >
                                                    <div class="colorLayer"></div>
                                                    <div class="switch"></div>
                                                </div>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </div>

                                </div>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
        </section>