<!-------------------------------------------------------------------------------
                            Profil Partner
--------------------------------------------------------------------------------->
<div class="row">
    <div class="col-12 partnerInfo-bg">

        <!-- title section h1 --> 
        <section>
            <h1>Profil du Partenaire <?= $partner['name_partner'] ?></h1>
        </section>



        <!-- Title h2 & toggle switch -->
        <section class="row py-3 profil-title">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h2 class="mr-3"><?= $partner['id_partner'] ?>. <?= $partner['name_partner'] ?></h2>
                <!-- toggle switch checked or not -->
                <div class="toggleSwitch my-1 ml-3">
                    <input type="checkbox" name="box" class="box" checked>
                    <div class="colorLayer"></div>
                    <div class="switch"></div>
                </div>
            </div>    
        </section>

        <section class="row d-flex justify-content-center my-5" id="partnerInfo-bg">
            <article class="col-12 " >
        
                <div class="row">
                    <!-- card -->
                    <div class="col-12 d-flex flex-wrap justify-content-center">

                        <div class="card border-light mr-3 card-struct" style="max-width: 20rem;">
                            <div class="card-header text-center"> 
                                <span class="d-flex justify-content-center">
                                    Paris-Clichy 
                                    <div class="mx-3 my-1 custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch" checked="">
                                        <label class="custom-control-label" for="customSwitch"></label>
                                    </div>
                                </span>
                            </div>
                            <div class="card-body">
                                <p>Superficie de 750m2, 5 salles</p>
                                <ul>
                                    <li>10 rue Gabriel Péri, 92110 Clichy</li>
                                    <li>infos-siparisclichy@gmail.com</li>
                                    <li>01.45.65.78.90</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card border-light mr-3 card-struct" style="max-width: 20rem;">
                            <div class="card-header text-center"> 
                                <span class="d-flex justify-content-center">
                                    Paris-Les Halles
                                    <div class="mx-3 my-1 custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input customSwitch" id="customSwitch" checked="">
                                        <label class="custom-control-label" for="customSwitch"></label>
                                    </div>
                                </span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Success card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card border-light mr-3 card-struct" style="max-width: 20rem;">
                            <div class="card-header text-center"> 
                                <span class="d-flex justify-content-center">
                                    Paris-Beaugrenelle
                                    <div class="mx-3 my-1 custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch" checked="">
                                        <label class="custom-control-label" for="customSwitch"></label>
                                    </div>
                                </span>
                            </div>
                            <div class="card-body">
                                <p>Superficie de 750m2, 5 salles</p>
                                <ul>
                                    <li>10 rue Gabriel Péri, 92110 Clichy</li>
                                    <li>infos-siparisclichy@gmail.com</li>
                                    <li>01.45.65.78.90</li>
                                </ul>
                            </div>
                        </div>
                  

                    </div>
                </div>

                <!-- pagination -->
                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-center mt-5">
                        <div class="">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">&laquo;</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">5</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </article>
        </section>

    </div>
</div>