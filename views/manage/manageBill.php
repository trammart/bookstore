<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>

<main class="container text-center pb-5">
    <div class="mt-5">
        <h4 class="fw-bold">QUẢN LÝ HÓA ĐƠN</h4>
    </div>
    <div class="row table-product mt-5">
        <table class="table text-center" id="all-bills">
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
                    $hd = $hoadon['ma_hoa_don'];
                    if ($hd != $bill_id) {
                        echo '<tr class="align-middle">
                    <td class="col-1">' . $hoadon['ma_hoa_don'] . '</td>
                    <td class="col-2">' . number_format($hoadon['tong_tien'], 0, '.', ',')  . ' VNĐ</td>
                    <td class="col-2">' . $hoadon['ngay_lap'] . '</td>
                    <td class="col-3">' . $hoadon['name'] . '</td> 
                    <td class="col-3">' . $hoadon['trang_thai_giao_hang'] . '</td>
                    <td class="col-3"><a href="/manageDetailBill?mhd=' . $hoadon->ma_hoa_don . '"><i class="fa fa-info-circle" style="color:#f2749b; font-size:24px;"></i></a></td>
                    </tr>';
                        $bill_id = $hd;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</main>

<script>
    $(document).ready(function() {
        $('body').css('background-color','#F3F6FF');
    });
</script>
<?php $this->stop() ?>