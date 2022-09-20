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

            <section class="row" id="profil">
                <!-- Structure profil title -->
                <div class="col-12 pt-2 pb-md-3 profil-structure d-flex justify-content-center">
                    <h2><?= $structure['name_structure'] ?></h2>
                </div>

                <!-- Structure profil Informations & Modules  --> 
                <div class="col-12 d-flex justify-content-center my-2 my-md-5">
                    <div class="row">
                        <!-- Structure Information --> 
                        <article class="col-12 col-md-6">
                            <div class="card card-container py-1 m-1" style="width: 22rem;">
                                <div class="card-body">
                                    <h3 class="my-2 my-md-3">Informations</h3>
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
                            <div class="card card-container py-1 m-1" style="width: 22rem;">
                                <div class="card-body">
                                    <h3 class="my-2 my-md-3">Modules</h3>
                                    <ul class="infoStructure">
                                        <!-- Display the checked partner modules --> 
                                        <?php foreach($modules as $module): ?>
                                            <?php foreach($modules_partner as $module_partner): ?>
                                                <?php if($module['name_module'] === $module_partner['name_module']) :?> 
                                                    <li class="d-flex"><?= $module_partner['name_module'] ?>
                                                        <!-- toggle switch checked -->
                                                        <div class="container toggleSwitch my-1">
                                                            <input type="checkbox" name="box" class="box" checked>
                                                            <div class="colorLayer"></div>
                                                            <div class="switch"></div>
                                                        </div> 
                                                    </li>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        <?php endforeach ?>
                                        <!-- Display the checked structure modules --> 
                                        <?php foreach($modules as $module): ?>
                                            <?php foreach($modules_structure as $module_structure): ?>
                                                <?php if($module['name_module'] === $module_structure['name_module'] && $module_structure['isActive_modstructure']) :?>
                                                    <li class="d-flex"><?= $module_structure['name_module'] ?> 
                                                        <!-- toggle switch checked -->
                                                        <div class="container toggleSwitch my-1">
                                                            <input type="checkbox" name="box" class="box" checked>
                                                            <div class="colorLayer"></div>
                                                            <div class="switch"></div>
                                                        </div>
                                                    </li>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        <?php endforeach ?>
                                    
                                        <!-- TO DO : Display the not checked structure modules --> 
                                        <!-- <?php foreach($modules_partner as $module_partner): ?>
                                            <?php foreach($modules_structure as $module_structure): ?>
                                                <?php if($module_structure['name_module'] !== $module_partner['name_module'] && $module_structure['isActive_modstructure'] == 0) : ?>
                                                    <li class="d-flex"><?= $module_structure['name_module'] ?> 
                                                      
                                                        <div class="container toggleSwitch mb-2">
                                                            <input type="checkbox" name="box" class="box" >
                                                            <div class="colorLayer"></div>
                                                            <div class="switch"></div>
                                                        </div> 
                                                    </li>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        <?php endforeach ?> -->
                                    </ul>   
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
        </section>

     
    </div>
</div>