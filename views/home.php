<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<div class="container-fluid p-0 page-header position-relative text-center" style="z-index: 8;">
    <img src="/img/store.png" width="1200px" alt="">
</div>

<!-- <div class="container-fluid p-0"> -->


<div class="container mx-auto pt-5 row">
    <div class="col text-center">
        <a href="http://"><img src="img/khuyenmai.png" width="60px" alt=""></a>
        <p>Khuyễn mãi</p>
    </div>
    <div class="col text-center">
        <a href="http://"><img src="img/newproduct.png" width="60px" alt=""></a>
        <p>Sản Phẩm Mới</p>
    </div>
    <div class="col text-center">
        <a href="http://"><img src="img/sgk.png" width="60px" alt=""></a>
        <p>Sách Giáo Dục</p>
    </div>
    <div class="col text-center">
        <a href="http://"><img src="img/comic.png" width="60px" alt=""></a>
        <p>Truyện Tranh</p>
    </div>
    <div class="col text-center">
        <a href="http://"><img src="img/kynang.png" width="60px" alt=""></a>
        <p>Kỹ Năng Sống</p>
    </div>
    <div class="col text-center">
        <a href="http://"><img src="img/vanhoc.png" width="60px" alt=""></a>
        <p>Tiểu Thuyết</p>
    </div>
</div>
 <!-- <div class="container-fluid">
    <img src="img/banner.jpg" class="w-100" alt="">
 </div> -->
<section class="overflow-hidden">

    <div class="container">
        <div class="row h-100">
            <div class="py-3 mx-auto my-3 text-center bg-info bg-opacity-10">
                <h3 class="fs-3 fs-lg-5 m-0">🔖 SẢN PHẨM NỔI BẬT 🔖</h3>
            </div>
            <div class="text-lg-right">
                <a href="/product_all">
                    <h5 class="text-secondary">Xem tất cả ></h5>
                </a>
            </div>
            <div class="col-12">
                <div class="carousel slide" id="carouselPopularItems" data-bs-touch="false" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="row gx-3 h-100 align-items-center">
                                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                    <div class="badge">Hot</div>
                                    <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="/img/product/img-01.jpg" alt="..." />
                                        <div class="card-body text-center ">
                                            <h5 class="fw-bold text-1000 mb-1">Cà Phê Đen</h5>
                                            <div class=""><span class="text-warning me-2"><i class="fa fa-tag fa-lg"></i></span><span class="text-primary"><del>55.000đ</del></span></div>
                                            <span class="text-1000 fw-bold">💵35.000đ</span>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-1"><a class="btn btn-lg btn-danger" href="#!" role="button">👜 Chọn mua</a></div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                    <div class="badge">Hot</div>
                                    <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="/img/product/img-02.jpg" alt="..." />
                                        <div class="card-body text-center ">
                                            <h5 class="fw-bold text-1000 text-truncate mb-1">Freeze Trà Xanh</h5>
                                            <div><span class="text-warning me-2"><i class="fa fa-tag fa-lg"></i></span><span class="text-primary"><del>60.000đ</del></span></div>
                                            <span class="text-1000 fw-bold">💵40.000đ</span>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-1"><a class="btn btn-lg btn-danger" href="#!" role="button">👜 Chọn mua</a></div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                    <div class="badge">Hot</div>
                                    <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="/img/product/img-03.jpg" alt="..." />
                                        <div class="card-body text-center ">
                                            <h5 class="fw-bold text-1000 text-truncate mb-1">Phin Đen Đá</h5>
                                            <div><span class="text-warning me-2"><i class="fa fa-tag fa-lg"></i></span><span class="text-primary"><del>60.000đ</del></span></div>
                                            <span class="text-1000 fw-bold">💵40.000đ</span>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-1"><a class="btn btn-lg btn-danger" href="#!" role="button">👜 Chọn mua</a></div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                    <div class="badge">New</div>
                                    <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="/img/product/img-04.jpg" alt="..." />
                                        <div class="card-body text-center ">
                                            <h5 class="fw-bold text-1000 text-truncate mb-1">Trà Hạt Sen </h5>
                                            <div><span class="text-warning me-2"><i class="fa fa-tag fa-lg"></i></span><span class="text-primary"><del>60.000đ</del></span></div>
                                            <span class="text-1000 fw-bold">💵40.000đ</span>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-1"><a class="btn btn-lg btn-danger" href="#!" role="button">👜 Chọn mua</a></div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                    <div class="badge">New</div>
                                    <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="/img/product/img-05.jpg" alt="..." />
                                        <div class="card-body text-center ">
                                            <h5 class="fw-bold text-1000 text-truncate mb-1">Cookie & Cream</h5>
                                            <div><span class="text-warning me-2"><i class="fa fa-tag fa-lg"></i></span><span class="text-primary"><del>60.000đ</del></span></div>
                                            <span class="text-1000 fw-bold">💵40.000đ</span>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-1"><a class="btn btn-lg btn-danger" href="#!" role="button">👜 Chọn mua</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <div class="row gx-3 h-100 align-items-center">
                                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                    <div class="badge">Hot</div>
                                    <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="/img/product/img-06.jpg" alt="..." />
                                        <div class="card-body text-center ">
                                            <h5 class="fw-bold text-1000 text-truncate mb-1">Capuchino 3 in 1</h5>
                                            <div><span class="text-warning me-2"><i class="fa fa-tag fa-lg"></i></span><span class="text-primary"><del>90.000đ</del></span></div>
                                            <span class="text-1000 fw-bold">💵60.000đ</span>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-1"><a class="btn btn-lg btn-danger" href="#!" role="button">👜 Chọn mua</a></div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                    <div class="badge">20%</div>
                                    <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="/img/product/img-07.jpg" alt="..." />
                                        <div class="card-body text-center ">
                                            <h5 class="fw-bold text-1000 text-truncate mb-1">Latte Vị Hạnh Nhân</h5>
                                            <div><span class="text-warning me-2"><i class="fa fa-tag fa-lg"></i></span><span class="text-primary"><del>60.000đ</del></span></div>
                                            <span class="text-1000 fw-bold">💵40.000đ</span>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-1"><a class="btn btn-lg btn-danger" href="#!" role="button">👜 Chọn mua</a></div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                    <div class="badge">new</div>
                                    <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="/img/product/img-08.jpg" alt="..." />
                                        <div class="card-body text-center ">
                                            <h5 class="fw-bold text-1000 mb-1">Cà phê Sữa Đá</h5>
                                            <div><span class="text-warning me-2"><i class="fa fa-tag fa-lg"></i></span><span class="text-primary"><del>60.000đ</del></span></div>
                                            <span class="text-1000 fw-bold">💵40.000đ</span>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-1"><a class="btn btn-lg btn-danger" href="#!" role="button">👜 Chọn mua</a></div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                    <div class="badge">Hot</div>
                                    <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="/img/product/img-09.jpg" alt="..." />
                                        <div class="card-body text-center ">
                                            <h5 class="fw-bold text-1000 text-truncate mb-1">Latte Mocha</h5>
                                            <div><span class="text-warning me-2"><i class="fa fa-tag fa-lg"></i></span><span class="text-primary"><del>60.000đ</del></span></div>
                                            <span class="text-1000 fw-bold">💵40.000đ</span>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-1"><a class="btn btn-lg btn-danger" href="#!" role="button">👜 Chọn mua</a></div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                    <div class="badge">25%</div>
                                    <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="/img/product/img-10.jpg" alt="..." />
                                        <div class="card-body text-center ">
                                            <h5 class="fw-bold text-1000 text-truncate mb-1">Latte Uống Liền</h5>
                                            <div><span class="text-warning me-2"><i class="fa fa-tag fa-lg"></i></span><span class="text-primary"><del>60.000đ</del></span></div>
                                            <span class="text-1000 fw-bold">💵40.000đ</span>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-1"><a class="btn btn-lg btn-danger" href="#!" role="button">👜 Chọn mua</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev-custom carousel-icon-custom" type="button" data-bs-target="#carouselPopularItems" data-bs-slide="prev">
                        <span class="carousel-control-prev-custom-icon hover-top-shadow" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next-custom carousel-icon-custom" type="button" data-bs-target="#carouselPopularItems" data-bs-slide="next">
                        <span class="carousel-control-next-custom-icon hover-top-shadow" aria-hidden="true"></span>
                        <span class="visually-hidden">Next </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Carousel Start -->
<div id="header-carousel" class="carousel slide mx-auto position-relative w-100 pt-5" style="z-index: 7;" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
        <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
        <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item carousel-item-next carousel-item-start" data-bs-interval="3000">
            <img src="/img/banner1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="/img/banner2.jpg" class="d-block  w-100" alt="...">
        </div>
        <div class="carousel-item active carousel-item-start" data-bs-interval="3000">
            <img src="/img/banner3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel End -->
<!-- <main> -->
<!-- About Start -->
<!-- <div class="container-fluid py-5 bg-body-login">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <h1 class="section-title position-relative text-center mb-5">Cà Phê Hương Vị Truyền Thống Từ Năm 1990</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 py-3">
                        <h4 class="font-weight-bold mb-3">Nguồn Gốc</h4>
                        <h5 class="text-muted mb-3">Câu Chuyện Này Là Của Chúng Mình</h5>
                        <p>Highlight Coffee® được thành lập vào năm 1990, bắt nguồn từ tình yêu dành cho đất Việt cùng với cà phê và cộng đồng nơi đây. Ngay từ những ngày đầu tiên, mục tiêu của chúng mình là có thể phục vụ
                            và góp phần phát triển cộng đồng bằng cách siết chặt thêm sự kết nối và sự gắn bó giữa người với người.</p>
                        <a href="" class="btn btn-secondary mt-2">Tìm hiểu thêm</a>
                    </div>
                    <div class="col-lg-4" style="min-height: 400px;">
                        <div class="position-relative h-100 rounded overflow-hidden">
                            <img class="position-absolute w-100 h-100" src="/img/product/choco_about.png" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-4 py-3">
                        <h4 class="font-weight-bold mb-3">Dịch vụ</h4>
                        <p>Highlight Coffee® là không gian của chúng mình nên mọi thứ ở đây đều vì sự thoải mái của chúng mình. Đừng giữ trong lòng,
                            hãy chia sẻ với chúng mình điều bạn mong muốn để cùng nhau giúp Highlight Coffee® trở nên tuyệt vời hơn</p>
                        <h6 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i> Giao hàng tận nơi</h6>
                        <h6 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i> Tư vấn trực tuyến</h6>
                        <a href="" class="btn btn-primary mt-2">Tìm hiểu thêm</a>
                    </div>
                </div>
            </div>
        </div> -->
<!-- About End -->

<!-- Featured Products Start -->

<!-- Featured Products End -->
<div class="container-fluid p-0 m-0 text-center">
    <img class="w-100" src="/img/bg-footer.png" alt="">
</div>
<!-- </main> -->
<!-- </div> -->
<?php $this->stop() ?>