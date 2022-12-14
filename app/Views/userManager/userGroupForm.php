<?= $this->extend('theme/admin') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <span class="h2"><?php echo $title; ?></span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <span class="h4">เพิ่มข้อมูลกลุ่มผู้ใช้งาน</span>
                <div class="float-end">
                    <a href="<?php echo base_url('userManager/userGroupView') ?>" class="btn btn-default"><i class="fas fa-chevron-left"></i> ย้อนกลับ</a>
                    <button class="btn btn-default" type="submit"><i class="fas fa-save"></i> บันทึก</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="row mt-2">
                        <label for="" class="col-md-4 form-label"> ชื่อกลุ่มงาน</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="NLABEL" value="<?php echo isset($save_data['NLABEL'])?$save_data['NLABEL']:'' ?>" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4 form-label">หน่วยงาน</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="department_name" value="<?php echo isset($save_data['department_name'])?$save_data['department_name']:'' ?>" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4 form-label">ชื่อกลุ่มงาน (ภาษาอังกฤษ) </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="NLABEL_ENG" value="<?php echo isset($save_data['NLABEL_ENG'])?$save_data['NLABEL_ENG']:'' ?>" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4 form-label">หน่วยงาน (ภาษาอังกฤษ) </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="department_name_eng" value="<?php echo isset($save_data['department_name_eng'])?$save_data['department_name_eng']:'' ?>" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4 form-label">ที่ตั้ง (ภาษาไทย)</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="address" value="<?php echo isset($save_data['address'])?$save_data['address']:'' ?>"></textarea>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4 form-label">ที่ตั้ง (ภาษาอังกฤษ)</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="address_en" value="<?php echo isset($save_data['address_en'])?$save_data['address_en']:'' ?>"></textarea>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4 form-label">เบอร์โทรศัพท์</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="tel1" value="<?php echo isset($save_data['tel1'])?$save_data['tel1']:'' ?>" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4 form-label">อีเมล</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="email" value="<?php echo isset($save_data['email'])?$save_data['email']:'' ?>" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4 form-label">เว็บไซต์</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="website" value="<?php echo isset($save_data['website'])?$save_data['website']:'' ?>" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4 form-label">สถานะการอนุญาตให้เข้าใช้ระบบ</label>
                        <div class="col-md-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_login" id="active" value="1" checked>
                                <label class="form-check-label" for="active">
                                    ใช้งาน
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_login" id="deactive" value="0">
                                <label class="form-check-label" for="deactive">
                                    ไม่ใช้งาน
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4 form-label">วัน/เดือน/ปี เริ่มต้น การเข้าใช้งานระบบ</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="date_start" value="<?php echo isset($save_data['date_start'])?$save_data['date_start']:'' ?>" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4 form-label">วัน/เดือน/ปี สิ้นสุด การเข้าใช้งานระบบ</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="date_end" value="<?php echo isset($save_data['date_end'])?$save_data['date_end']:'' ?>" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4 form-label">เวลา เริ่มต้น</label>
                        <div class="col-md-8">
                            <input type="time" class="form-control" name="time_start" value="<?php echo isset($save_data['time_start'])?$save_data['time_start']:'' ?>"/>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <label for="" class="col-md-4 form-label">เวลา สิ้นสุด</label>
                        <div class="col-md-8">
                            <input type="time" class="form-control" name="time_end" value="<?php echo isset($save_data['time_end'])?$save_data['time_end']:'' ?>"/>
                        </div>
                    </div>
<!--                    <div class="row mt-2">-->
<!--                        <label for="" class="col-md-4 form-label">รูปสัญลักษณ์ประจำหน่วยงาน</label>-->
<!--                        <div class="col-md-8">-->
<!--                            <input type="file" class="form-control" name="banner" />-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row mt-2">-->
<!--                        <div class="col-md-12 text-center">-->
<!--                            <input type="submit" value="บันทึก" class="btn btn-success">-->
<!--                            <a class="btn btn-danger">ยกเลิก</a>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('cssTopContent') ?>
    <link href="<?php echo base_url() ?>/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
    <script src="<?php echo base_url() ?>/assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/pages/form-validation.init.js"></script>
    <script src="<?php echo base_url() ?>/assets/libs/select2/js/select2.min.js"></script>

<?= $this->endSection() ?>
