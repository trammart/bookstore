<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>

<main class="container text-center pb-5">
    <?php echo '<h4 class="ps-5 mt-5 mb-1 fw-bold">QUẢN LÝ CHI TIẾT HÓA ĐƠN ' . $_GET['mhd'] . ' </h4>'; ?>
    <div class="d-flex justify-content-between">
        <a href="/manageBill" class="btn btn-primary">
            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Trở về
        </a>
        <form class="delete" action="/manage/deleteBill/<?= $_GET['mhd'] ?>" method="POST" style="display: inline;">
            <button type="button" class="btn btn-xs btn-danger button-cancel" name="delete-product" data-bs-toggle="modal" data-bs-target="#cancel-confirm" style="padding: 6px 12px;">
                Hủy Hóa Đơn
            </button>
        </form>
    </div>
    <div class="row table-product mt-4">
        <table class="table text-center">
            <thead class="bg-info text-light">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">SẢN PHẨM</th>
                    <th scope="col">TÊN SẢN PHẨM</th>
                    <th scope="col">SỐ LƯỢNG</th>
                    <th scope="col">THÀNH TIỀN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($bill)) {
                    foreach ($bill as $index => $item) {

                        echo '<tr class="align-middle">
                        <th scope="row">' . $index + 1 . '</th>
                        <td class="col-4"> <a href="/detail?masp=' . $item->ma_san_pham . '""><img src="/img/product/' . $item->hinh_anh . '" width="40%" ></a></td>
                        <td><b class="text-primary">' . $item['ten_san_pham'] . '</b></td>
                        <td>' . $item['so_luong_sp'] . '</td>
                        <td>' . number_format($item['gia_khuyen_mai'] * $item['so_luong_sp'], 0, '.', ',')  . ' VNĐ</td>   
                        </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php
    if (isset($bill)) {
        $k = 0;
        foreach ($bill as $item) {
            while ($item['ma_hoa_don'] != $k) {
                echo '<div class="row bg-info bg-opacity-10 rounded"><div class="col text-start mt-4">
            <p><b>Trạng thái đơn hàng: </b>' . $item['trang_thai_giao_hang'] . '</p>
            <p><b>Trạng thái thanh toán: </b>' . $item['trang_thai_thanh_toan'] . '</p>
            <p><b>Ngày đặt hàng: </b>' . $item['ngay_lap'] . '</p>
            </div>
            <div class="col text-end mt-4">
            <p><b>Địa chỉ nhận hàng:</b></p>
            <p>' . $item['khach_hang'] . ' ' . $item['phone'] . '</p>
            <p>' . $item['dia_chi'] . '</p></div>
            </div>';
                $k = $item['ma_hoa_don'];
            }
        }
    }
    ?>
    <!-- Modal -->
    <div class="modal fade" id="cancel-confirm" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hủy hóa đơn</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn muốn hủy <span class="bill-info-delete fw-bold">hóa đơn <?= $_GET['mhd'] ?></span> này không?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="cancel">Hủy</button>
                    <button type="button" class="btn bg-secondary fw-bold text-white" data-bs-dismiss="modal">Không</button>
                </div>
            </div>
        </div>
    </div>

</main>

<script>
    $(document).ready(function() {
        $('button.button-cancel').on('click', function(e) {

            var form = $(this).closest('form');

            $('#cancel-confirm').modal({
                backdrop: 'static',
                keyboard: false
            }).one('click', '#cancel', function() {
                form.submit();
            });
        });

        $('body').css('background-color', '#F3F6FF');
    });
</script>
<?php $this->stop() ?>