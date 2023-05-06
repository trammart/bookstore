<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Admin Bookworms Store</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="img/favicon.jpg" rel="shortcut icon">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a href="/home" class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 ">
            <h5 class="m-0 display-4 fs-5 text-secondary fw-bold"><span class="text-primary fs-5 fw-bold">BOOK</span>worm</h5>
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="w-100 boder-bottom p-1">
            <h3 class="fs-4 px-2 text-white text-center text-uppercase pt-2">Quản lý đơn hàng</h3>
        </div>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="/logout" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Đăng xuất</a>
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                </form>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/home">
                                <i class="fas fa-home"></i>
                                Trang Chủ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/manageProduct">
                                <i class="fa fa-book"></i>
                                Sản Phẩm
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/manageBill">
                                <i class="fa fa-shopping-cart"></i>
                                Đơn Hàng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/users">
                                <i class="fas fa-user-friends"></i>
                                Người Dùng
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <table class="table mt-5 text-center" id="all-bills">
                    <thead class="bg-info text-light">
                        <tr>
                            <th scope="col">MÃ HÓA ĐƠN</th>
                            <th scope="col">TỔNG TIỀN</th>
                            <th scope="col">NGÀY MUA HÀNG</th>
                            <th scope="col">NGƯỜI MUA HÀNG</th>
                            <th scope="col">TRẠNG THÁI</th>
                            <th scope="col">XEM CHI TIẾT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $bill_id = 0;
                        foreach ($bills as $index => $hoadon) {
                            echo '<tr class="align-middle">
                    <td class="col-2">' . $hoadon['ma_hoa_don'] . '</td>
                    <td class="col-2">' . number_format($hoadon['tong_tien'], 0, '.', ',')  . ' VNĐ</td>
                    <td class="col-2">' . $hoadon['ngay_lap'] . '</td>
                    <td class="col-2">' . $hoadon['name'] . '</td> 
                    <td class="col-2">' . $hoadon['trang_thai_giao_hang'] . '</td>
                    <td class="col-3"><a href="/manageDetailBill?mhd=' . $hoadon->ma_hoa_don . '"><i class="fa fa-info-circle" style="color:#f2749b; font-size:24px;"></i></a></td>
                    </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>
</body>

</html>