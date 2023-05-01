<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<div class="container">
    <section id="inner" class="inner-section section">
        <div class="container">

            <!-- SECTION HEADING -->
            <h2 class="section-heading text-center wow fadeIn text-uppercase my-3" data-wow-duration="1s">Thêm sản phẩm</h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="wow fadeIn" data-wow-duration="2s"></p>
                </div>
            </div>

            <div class="inner-wrapper row">
                <div class="col-md-12 d-flex justify-content-center">

                    <form name="frm" id="frm" action="/createProduct" method="post" class="col-md-6 col-md-offset-3 p-5 bg-body border border-2 mb-5" enctype="multipart/form-data">

                        <!-- ID -->
                        <div class="form-group mb-3<?= isset($errors['ma_sach']) ? ' has-error' : '' ?>">
                            <label class="fw-bold" for="id">Mã Sản Phẩm</label>
                            <input type="text" name="ma_sach" class="form-control border border-1 border-secondary" maxlen="255" id="id" placeholder="Nhập mã" value="<?= isset($ma_sp['ma_sach']) ? $this->e($ma_sp['ma_sach']) : '' ?>" style="background-color: #F3F6FF;" readonly />

                            <?php if (isset($errors['ma_sach'])) : ?>
                                <span class="help-block text-danger">
                                    <strong><?= $this->e($errors['ma_sach']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>

                        <!-- Name -->
                        <div class="form-group mb-3<?= isset($errors['ten_sach']) ? ' has-error' : '' ?>">
                            <label class="fw-bold" for="name">Tên Sản Phẩm</label>
                            <input type="text" name="ten_sach" class="form-control border border-1 border-secondary" maxlen="255" id="name" placeholder="Nhập tên" value="<?= isset($old['ten_sach']) ? $this->e($old['ten_sach']) : '' ?>" style="background-color: #F3F6FF;" />

                            <?php if (isset($errors['ten_sach'])) : ?>
                                <span class="help-block text-danger">
                                    <strong><?= $this->e($errors['ten_sach']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>

                        <!-- Price -->
                        <div class="form-group mb-3<?= isset($errors['gia_sach']) ? ' has-error' : '' ?>">
                            <label class="fw-bold" for="price">Giá Sản Phẩm (VNĐ)</label>
                            <input type="number" name="gia_sach" class="form-control border border-1 border-secondary" id="price" placeholder="Nhập giá" value="<?= isset($old['gia_sach']) ? $this->e($old['gia_sach']) : '' ?>" style="background-color: #F3F6FF;" />

                            <?php if (isset($errors['gia_sach'])) : ?>
                                <span class="help-block text-danger">
                                    <strong><?= $this->e($errors['gia_sach']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>

                        <!-- Discount Percent -->
                        <div class="form-group mb-3<?= isset($errors['khuyen_mai']) ? ' has-error' : '' ?>">
                            <label class="fw-bold" for="discount-percent">Phần Trăm Khuyến Mãi (%)</label>
                            <input type="number" name="khuyen_mai" class="form-control border border-1 border-secondary" id="discount-percent" placeholder="Nhập phần trăm khuyến mãi" value="<?= isset($old['khuyen_mai']) ? $this->e($old['khuyen_mai']) : '' ?>" style="background-color: #F3F6FF;" />

                            <?php if (isset($errors['khuyen_mai'])) : ?>
                                <span class="help-block text-danger">
                                    <strong><?= $this->e($errors['khuyen_mai']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>

                        <!-- Quantity -->
                        <div class="form-group mb-3<?= isset($errors['so_luong']) ? ' has-error' : '' ?>">
                            <label class="fw-bold" for="quantity">Số Lượng Sản Phẩm</label>
                            <input type="number" name="so_luong" class="form-control border border-1 border-secondary" id="quantity" placeholder="Nhập số lượng" value="<?= isset($old['so_luong']) ? $this->e($old['so_luong']) : '' ?>" style="background-color: #F3F6FF;" />

                            <?php if (isset($errors['so_luong'])) : ?>
                                <span class="help-block text-danger">
                                    <strong><?= $this->e($errors['so_luong']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>

                        <!-- Image -->
                        <div class="form-group mb-3<?= isset($errors['hinh_anh']) ? ' has-error' : '' ?>">
                            <label class="fw-bold" for="image">Ảnh Sản Phẩm</label>
                            <input type="file" name="hinh_anh" class="form-control border border-1 border-secondary" id="image" placeholder="Nhập ảnh" style="background-color: #F3F6FF;" />

                            <?php if (isset($errors['hinh_anh'])) : ?>
                                <span class="help-block text-danger">
                                    <strong><?= $this->e($errors['hinh_anh']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>
                        <div class="preview-image" style="width: 110px"></div>

                        <div class="form-group mb-3<?= isset($errors['anh_1']) ? ' has-error' : '' ?>">
                            <label class="fw-bold" for="image1">Ảnh Chi Tiết Sản Phẩm</label>
                            <div class="input-group">
                                <input type="file" name="anh_1" class="form-control border border-1 border-secondary" id="image1" placeholder="Nhập ảnh" style="background-color: #F3F6FF;" />
                                <input type="file" name="anh_2" class="form-control border border-1 border-secondary" id="image2" placeholder="Nhập ảnh" style="background-color: #F3F6FF;" />
                            </div>

                            <?php if (isset($errors['anh_1'])) : ?>
                                <span class="help-block text-danger">
                                    <strong><?= $this->e($errors['anh_1']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>
                        <!-- <div class="preview-image" style="width: 110px"></div> -->


                        <!-- Type -->
                        <div class="form-group mb-3<?= isset($errors['ma_loai_sach']) ? ' has-error' : '' ?>">
                            <label class="fw-bold" for="type">Mã Loại Sản Phẩm</label>
                            <select name="ma_loai_sach" class="form-select border border-1 border-secondary" id="type" style="background-color: #F3F6FF;">
                                <?php foreach ($loai_sp as $type) : ?>
                                    <option value="<?= isset($type['ma_loai_sach']) ? $this->e($type['ma_loai_sach']) : '' ?>"><?= $this->e($type['ten_loai_sach']) ?></option>
                                <?php endforeach ?>
                            </select>

                            <?php if (isset($errors['ma_loai_sach'])) : ?>
                                <span class="help-block text-danger">
                                    <strong><?= $this->e($errors['ma_loai_sach']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>

                        <!-- Author -->
                        <div class="form-group mb-3<?= isset($errors['ma_tac_gia']) ? ' has-error' : '' ?>">
                            <label class="fw-bold" for="type">Mã Loại Sản Phẩm</label>
                            <select name="ma_tac_gia" class="form-select border border-1 border-secondary" id="type" style="background-color: #F3F6FF;">
                                <?php foreach ($tacgia as $t) : ?>
                                    <option value="<?= isset($t['ma_tac_gia']) ? $this->e($t['ma_tac_gia']) : '' ?>"><?= $this->e($t['ten_tac_gia']) ?></option>
                                <?php endforeach ?>
                            </select>

                            <?php if (isset($errors['ma_tac_gia'])) : ?>
                                <span class="help-block text-danger">
                                    <strong><?= $this->e($errors['ma_tac_gia']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>

                        <!-- NXB -->
                        <div class="form-group mb-3<?= isset($errors['ma_nxb']) ? ' has-error' : '' ?>">
                            <label class="fw-bold" for="type">Mã Loại Sản Phẩm</label>
                            <select name="ma_nxb" class="form-select border border-1 border-secondary" id="type" style="background-color: #F3F6FF;">
                                <?php foreach ($nxb as $n) : ?>
                                    <option value="<?= isset($n['ma_nxb']) ? $this->e($n['ma_nxb']) : '' ?>"><?= $this->e($n['ten_nxb']) ?></option>
                                <?php endforeach ?>
                            </select>

                            <?php if (isset($errors['ma_nxb'])) : ?>
                                <span class="help-block text-danger">
                                    <strong><?= $this->e($errors['ma_nxb']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>


                        <!-- Description -->
                        <div class="form-group mb-3<?= isset($errors['mo_ta']) ? ' has-error' : '' ?>">
                            <label class="fw-bold" for="description">Mô Tả Sản Phẩm </label>
                            <textarea name="mo_ta" id="description" class="form-control border border-1 border-secondary" rows="4" placeholder="Nhập mô tả (tối đa: 500 ký tự)" style="background-color: #F3F6FF;"><?= isset($old['mo_ta']) ? $this->e($old['mo_ta']) : '' ?></textarea>

                            <?php if (isset($errors['mo_ta'])) : ?>
                                <span class="help-block text-danger">
                                    <strong><?= $this->e($errors['mo_ta']) ?></strong>
                                </span>
                            <?php endif ?>
                        </div>

                        <!-- Submit -->
                        <button type="submit" name="submit" id="submit" class="btn btn-primary me-2">Thêm Sản Phẩm</button>
                        <a href="/management" id="cancel-create" class="btn bg-secondary text-white fw-bold">Hủy</a>
                    </form>

                </div>
            </div>

        </div>
    </section>
</div>

<script>
    $(document).ready(function() {
        $('body').css('background-color', '#F3F6FF');

        //Image Reader
        function readURL(input) {
            if (input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $('.preview-image').empty();
                    $('.preview-image').append("<img src='" + event.target.result + "' id='preview-image' width='100px'>");
                    $('.preview-image').addClass("mb-3 border border-2");
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#image").change(function() {
            readURL(this);
        });
    });
</script>
<?php $this->stop() ?>