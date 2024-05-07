<?php
require_once 'src/layouts/header.php';
?>
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dunia Game</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">
                            @gametopupshop tempatnya TopUp Game!</li>
                    </ol>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="src/assets/img/coc2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="src/assets/img/pubg.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="src/assets/img/valorant.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <h1 class="mt-4">Games</h1>

                        <div class="d-flex flex-wrap col-12">
                            <div class="card mt-3 col-10" style="width: 18rem; margin-right:20px;">
                                <img src="src/assets/img/games1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Mobile Lagends</h5>
                                    <a href="src/pages/topups/create.php" class="btn btn-warning">Top Up</a>
                                </div>
                            </div>
                            <div class="card mt-3 col-10" style="width: 18rem; margin-right:20px;">
                                <img src="src/assets/img/games2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">PUBG Mobile</h5>
                                    <a href="src/pages/topups/create.php" class="btn btn-warning">Top Up</a>
                                </div>
                            </div>
                            <div class="card mt-3 col-10" style="width: 18rem; margin-right:20px;">
                                <img src="src/assets/img/games3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Valorant</h5>
                                    <a href="src/pages/topups/create.php" class="btn btn-warning">Top Up</a>
                                </div>
                            </div>
                            <div class="card mt-3 col-10" style="width: 18rem; margin-right:20px;">
                                <img src="src/assets/img/FF.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Free Fire</h5>
                                    <a href="src/pages/topups/create.php" class="btn btn-warning">Top Up</a>
                                </div>
                            </div>
                            <div class="card mt-3 col-10" style="width: 18rem; margin-right:20px;">
                                <img src="src/assets/img/coc.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Clash of Clans</h5>
                                    <a href="src/pages/topups/create.php" class="btn btn-warning">Top Up</a>
                                </div>
                            </div>
                            <div class="card mt-3 col-10" style="width: 18rem; margin-right:20px;">
                                <img src="src/assets/img/sg.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Stumble Guys</h5>
                                    <a href="src/pages/topups/create.php" class="btn btn-warning">Top Up</a>
                                </div>
                            </div>

                        </div>
                        <h1 class="mt-4">Promo dan Diskon</h1>
                        <div class="row row-cols-1 row-cols-md-2 g-2" style="width:50rem; margin-right:30px;">
                            <div class="col-8">
                                <div class="card">
                                    <img src="src/assets/img/pubg.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Diskon 5%</h5>
                                        <p class="card-text">Topup sekarang dan nikmati diskon 5% untuk game PUBG Mobile!</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card">
                                    <img src="src/assets/img/promo1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Diskon 10%</h5>
                                        <p class="card-text">Diskon 10% untuk topup dalam 24 jam pertama setelah promo dimulai!</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Last updated 5 mins ago</small>
                                    </div>
                                </div>
                            </div>
</main>
<?php
require_once 'src/layouts/footer.php'
?>