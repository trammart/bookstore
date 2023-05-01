<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-uppercase d-flex justify-content-center my-3">Quản lý sản phẩm</h2>
        </div>
        <div class="mb-4 d-flex flex-row justify-content-between">
            <a href="/create" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i> Thêm Sản Phẩm</a>
            <form class="text-right" role="search" action="/management" method="POST">
                <select class="form-select form-select-sm h-100" style="display: inline" name="sort-price" onchange="this.form.submit()">
                    <option value="1" <?= isset($old_selected['val']) ? ($old_selected['val'] == 1 ? 'selected' : '') : '' ?>>Mặc định</option>
                    <option value="2" <?= isset($old_selected['val']) ? ($old_selected['val'] == 2 ? 'selected' : '') : '' ?>>Giá Khuyến Mãi: Thấp đến Cao</option>
                    <option value="3" <?= isset($old_selected['val']) ? ($old_selected['val'] == 3 ? 'selected' : '') : '' ?>>Giá Khuyến Mãi: Cao đến Thấp</option>
                    <option value="4" <?= isset($old_selected['val']) ? ($old_selected['val'] == 4 ? 'selected' : '') : '' ?>>Sản phẩm mới nhất</option>
                </select>
            </form>

        </div>
        <table id="all-products" class="table table-bordered table-responsive mb-5" style="border-color: #cacaca!important;">
            <thead class="bg-info text-light text-uppercase text-center align-middle">
                <tr>
                    <th>ID</th>
                    <th>Tên Sản Phẩm</th>
                    <th style="width: 100px">Giá Gốc</th>
                    <th style="width: 100px">Giá Khuyến Mãi</th>
                    <th>Hình Ảnh</th>
                    <th>Số Lượng</th>
                    <th>Loại Sản Phẩm</th>
                    <th>Mô Tả</th>
                    <th style="width: 100px">Ngày Tạo</th>
                    <th>Cập Nhật</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products_manage as $product_manage) : ?>
                    <tr style="font-size: 15px;">
                        <input class="" type="hidden" name="id" value="<?= $this->e($product_manage->ma_sach) ?>">
                        <td style="text-align: center; vertical-align: middle;"><?= $this->e($product_manage->ma_sach) ?></td>
                        <td style="vertical-align: middle;"><a class="text-black" href="/detail?masp=<?= $product_manage->ma_sach ?>"><?= $this->e($product_manage->ten_sach) ?></a></td>
                        <td style="vertical-align: middle;"><?= $this->e(number_format($product_manage->gia_sach, 0, ',', '.')) ?> VNĐ</td>
                        <td style="vertical-align: middle;"><?= $this->e(number_format($product_manage->gia_khuyen_mai, 0, ',', '.')) ?> VNĐ</td>
                        <td style="text-align: center; vertical-align: middle;"><img src="/img/product/<?= $this->e($product_manage->hinh_anh) ?>" style="width: 90px;"></td>
                        <td style="text-align: center; vertical-align: middle;"><?= $this->e($product_manage->so_luong) ?></td>
                        <td style="text-align: center; vertical-align: middle;"><?= $this->e($product_manage->ten_loai_sach) ?></td>
                        <td style="vertical-align: middle;"><?= $this->e($product_manage->mo_ta) ?></td>
                        <td style="vertical-align: middle;"><?= $this->e($product_manage->created_at) ?></td>
                        <td style="text-align: center; vertical-align: middle;"><a href="/manage/<?= $this->e($product_manage->ma_sach) ?>" class="btn btn-xs btn-warning" style="padding: 3px 6px;">
                                <i alt="Edit" class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            <form class="delete" action="/manage/delete/<?= $this->e($product_manage->ma_sach) ?>" method="POST" style="display: inline;">
                                <button type="button" class="btn btn-xs btn-danger button-delete" name="delete-product" data-bs-toggle="modal" data-bs-target="#delete-confirm" style="padding: 3px 9px;">
                                    <i alt="Delete" class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="delete-confirm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Xóa sản phẩm</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bạn muốn xóa sản phẩm <span class="product-info-delete fw-bold"></span> này không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="delete">Xóa</button>
                <button type="button" class="btn bg-secondary fw-bold text-white" data-bs-dismiss="modal">Không</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('button.button-delete').on('click', function(e) {

            var form = $(this).closest('form');
            var ma_sach = $(this).closest('tr').find('input[name=id]').val();
            var ten_sach = $(this).closest('tr').find('td:eq(1)').text();

            if (ten_sach.length > 0) {
                $('.product-info-delete').html(ten_sach + " (ID: " + ma_sach + ") ");
            }

            $('#delete-confirm').modal({
                backdrop: 'static',
                keyboard: false
            }).one('click', '#delete', function() {
                form.submit();
            });
        });

        $('body').css('background-color', '#F3F6FF');
    });
</script>

<?php $this->stop() ?>