<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-uppercase d-flex justify-content-center my-3">Quản lý tài khoản người dùng</h2>
        </div>
        <div class="mb-4 d-flex flex-row justify-content-end">
            <form class="text-right" role="search" action="/users" method="POST">
                <select class="form-select form-select-sm h-100" style="display: inline" name="sort-user" onchange="this.form.submit()">
                    <option value="1" <?= isset($old_user_selected['val']) ? ($old_user_selected['val'] == 1 ? 'selected' : '') : '' ?>>Mặc định</option>
                    <option value="2" <?= isset($old_user_selected['val']) ? ($old_user_selected['val'] == 2 ? 'selected' : '') : '' ?>>ID: Thấp đến Cao</option>
                    <option value="3" <?= isset($old_user_selected['val']) ? ($old_user_selected['val'] == 3 ? 'selected' : '') : '' ?>>ID: Cao đến Thấp</option>
                    <option value="4" <?= isset($old_user_selected['val']) ? ($old_user_selected['val'] == 4 ? 'selected' : '') : '' ?>>Mới nhất</option>
                </select>
            </form>

        </div>
        <table id="all-users" class="table table-bordered table-responsive mb-5" style="border-color: #cacaca!important;"> 
            <thead class="bg-info text-light text-center">
                <tr>
                    <th scope="col" class="text-uppercase">ID</th>
                    <th scope="col" class="text-uppercase">Tên Người Dùng</th>
                    <th style="width: 300px" scope="col" class="text-uppercase">Email</th>
                    <th style="width: 120px" scope="col" class="text-uppercase">SĐT</th>
                    <th scope="col" class="text-uppercase">Địa Chỉ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users_manage as $user_manage) : ?>
                    <tr>
                        <input class="" type="hidden" name="id" value="<?= $this->e($user_manage->id) ?>">
                        <td style="text-align: center; vertical-align: middle;"><?= $this->e($user_manage->id) ?></td>
                        <td style="vertical-align: middle;"><?= $this->e($user_manage->name) ?></a></td>
                        <td style="vertical-align: middle;"><?= $this->e($user_manage->email) ?></td>
                        <td style="vertical-align: middle;"><?= $this->e($user_manage->phone) ?></td>
                        <td style="vertical-align: middle;"><?= $this->e($user_manage->address) ?></td>
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
            var ma_san_pham = $(this).closest('tr').find('input[name=id]').val();
            var ten_san_pham = $(this).closest('tr').find('td:eq(1)').text();

            if (ten_san_pham.length > 0) {
                $('.product-info-delete').html(ten_san_pham + " (ID: " + ma_san_pham + ") ");
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