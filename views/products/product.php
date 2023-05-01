<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>

<main>
    <div class="container-fluid px-0">
        <form action="/product" method="POST">
            <div class="row mx-0 justify-content-end">
                <div class="page-header card-cover text-bg-dark" style="background-image: url('/img/menu-bg.jpg');">
                    <div class="d-flex flex-column col-7 h-100 p-5 pb-3 text-white text-shadow-1">
                        <a href="/product_all">
                            <h2 class="mt-5 mb-3 display-6 lh-1 fw-bold" style="color:burlywood">CÀ PHÊ</h2>
                        </a>
                        <h5 class="mb-4" style="color:burlywood">Sự kết hợp hoàn hảo giữa hạt cà phê Robusta & Arabica thượng hạng được trồng trên những vùng cao nguyên
                            Việt Nam màu mỡ, qua những bí quyết rang xay độc đáo, HiCoffee tự hào giới thiệu những
                            dòng sản phẩm Cà phê mang hương vị đậm đà và tinh tế.</h5>
                        <button class="btn btn-primary mb-4 col-lg-4 text-light" name="cafe">MUA NGAY</button></a>
                    </div>
                </div>

                <div class="text-lg-right page-header col-6 p-0" style="position: absolute; margin-top: -15px;">
                    <img style="margin-right: 100px;" width="400px" src="img/cafe-menu.png" alt="">
                </div>
            </div>

            <div class="row mx-0">
                <div class="card-cover overflow-hidden text-bg-dark" style="background-image: url('/img/menu-tra.jpg');">
                    <div class="flex-column col-lg-6 text-lg-right h-100 p-5 pb-3 text-white text-shadow-1" style="float: right;">
                        <a href="/product_all">
                            <h2 class="mt-5 mb-3 display-6 lh-1 text-success fw-bold">TRÀ</h2>
                        </a>
                        <h5 class="mb-4 text-lg-right text-success">Hương vị tự nhiên, thơm ngon của Trà Việt với phong cách
                            hiện đại tại HiCoffee sẽ giúp bạn gợi mở vị giác của bản thân và tận hưởng một cảm giác thật tươi mới.</h5>
                        <button class="btn btn-primary mb-4 col-lg-4 text-light" name="tra">MUA NGAY</button></a>
                    </div>
                </div>

                <div class="text-lg-left page-header col-lg-6 p-0" style="position: absolute; z-index: 10;">
                    <img style="margin-left: 130px; margin-top: -80px;" width="550px" src="img/tra-menuu.png" alt="">
                </div>
            </div>

            <div class="row mx-0 justify-content-end">
                <div class="card-cover" style="background-color: #7e4634b0 ;">
                    <div class="d-flex flex-column col-lg-6 h-100 p-5 pb-3 text-white text-shadow-1">
                        <a href="/product_all">
                            <h2 class="mt-5 mb-3 display-6 lh-1 fw-bold text-white">CÀ PHÊ ĐÓNG GÓI</h2>
                        </a>
                        <h5 class="mb-4 text-white">Hạt cà phê thượng hạng trồng ở vùng
                            cao nguyên của Việt Nam được rang và phối trộn theo công thức độc đáo tại Highlight.</h5>
                        <button class="btn btn-primary mb-5 col-lg-4 text-light" name="khac">MUA NGAY</button></a>
                    </div>
                </div>

                <div class="text-lg-right page-header col-6 p-0" style="position: absolute; z-index: 10;">
                    <img style="margin-right: 100px; margin-top: -70px;" width="550px" src="img/product/latte.png" alt="">
                </div>
            </div>
        </form>
    </div>
</main>

<?php $this->stop() ?>