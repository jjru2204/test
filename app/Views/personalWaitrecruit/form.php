<?= $this->extend('theme/admin') ?>
<?= $this->section('content') ?>
<?php

use PhpOffice\PhpSpreadsheet\Calculation\Information\Value;

$action = isset($save_data['pid']) ? base_url('PersonalWaitrecruit/update/' . $save_data['pid']) : base_url('PersonalWaitrecruit/save');
if (isset($save_data['cardID'])) {
    $head = $save_data['cardID'];
    $s1 = substr($head, 0, 1); //1
    $s2 = substr($head, 1, 4); //5601
    $s3 = substr($head, 5, 5); //01525
    $s4 = substr($head, 10, 2); //76
    $s5 = substr($head, 12, 1); // 5
    $save_data['cardID'] = "$s1-$s2-$s3-$s4-$s5";
}
?>
<script>
    function autoTab(obj) {
        var pattern = new String("_-____-_____-__-_"); // กำหนดรูปแบบในนี้
        var pattern_ex = new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
        var returnText = new String("");
        var obj_l = obj.value.length;
        var obj_l2 = obj_l - 1;
        for (i = 0; i < pattern.length; i++) {
            if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
                returnText += obj.value + pattern_ex;
                obj.value = returnText;
            }
        }
        if (obj_l >= pattern.length) {
            obj.value = obj.value.substr(0, pattern.length);
        }
    }
</script>

<form class="needs-validation" novalidate action="<?php echo $action ?>" method="POST" id="strForm">
    <input type="hidden" name="id" value="<?php echo isset($save_data['pid']) ? $save_data['pid'] : '' ?>" />
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body d-inline">
                    <span class="h2"><?php echo $title; ?></span>
                    <div class="float-end">
                        <a href="<?php echo base_url('PersonalWaitrecruit') ?>" class="btn btn-default"><i class="fas fa-chevron-left"></i> ย้อนกลับ</a>
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
                        <div class="mb-3 row">
                            <label for="" class="col-12 col-md-3 form-label">เลขประจำตัวประชาชน</label>
                            <div class="col-12 col-md-3">
                                <input type="text" class="form-control" required onkeyup="autoTab(this)" minlength="13" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" id="cardID" name="cardID" value="<?php echo isset($save_data['cardID']) ? $save_data['cardID'] : '' ?>" />
                                <div class="invalid-feedback">
                                    กรุณาระบุเลขประจำตัวประชาชน 13 หลัก
                                </div>
                                <span style="color: red;">
                                    <?php
                                    if (isset($errors)) {
                                        echo '*' . $errors;
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-12 col-md-3 form-label">คำนำหน้าชื่อ/ยศ</label>
                            <div class="col-12 col-md-3">
                                <select class="form-select select2" id="mySelect" onchange="myFunction()" required name="codePrefix" id="codePrefix">
                                    <option value="">---- คำนำหน้าชื่อ/ยศ ----</option>

                                    <?php if (isset($codePrefix)) {
                                        foreach ($codePrefix as $key => $value) {
                                            $sel = '';
                                            if (isset($save_data['codePrefix'])) {
                                                $sel = $save_data['codePrefix'] == $key ? 'selected' : '';
                                            } elseif (isset($oldPrefix)) {
                                                $a = substr($oldPrefix, 0, 3);
                                                $sel = $a == $key ? 'selected' : '';
                                            }
                                    ?>
                                            <option value="<?php echo $key ?>&<?= $value->codeGender ?>" <?php echo $sel ?>><?php echo $value->titlePrefix ?></option>
                                    <?php
                                        }
                                    } ?>

                                </select>
                                <div class="invalid-feedback">
                                    กรุณาเลือกคำนำหน้าชื่อ/ยศ
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="" class="col-12 col-md-3 form-label">เพศ</label>
                            <div class="col-12 col-md-3">
                                <select class="form-select select3" required name="gender" id="gender">
                                    <option id="0" value="">---- เพศ ----</option>
                                    <option id="1" value="0" <?php if (isset($save_data['gender'])) {
                                                                    if ($save_data['gender'] == 0) {
                                                                        echo 'selected';
                                                                    }
                                                                } ?> <?= isset($oldGender) ? 'selected' : '' ?>>ชาย</option>
                                    <option id="2" value="1" <?php if (isset($save_data['gender'])) {
                                                                    if ($save_data['gender'] == 1) {
                                                                        echo 'selected';
                                                                    }
                                                                } ?><?= isset($oldGender) ? 'selected' : '' ?>>หญิง</option>
                                </select>
                                <div class="invalid-feedback">
                                    กรุณาเลือกเพศ
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-12 col-md-3 form-label">ชื่อ - นามสกุล</label>
                            <div class="col-12 col-md-3">
                                <input type="text" class="form-control" required id="firstName" minlength="2" name="firstName" placeholder="ชื่อ" value="<?php echo isset($save_data['firstName']) ? $save_data['firstName'] : '' ?><?= isset($fname) ? $fname : '' ?>" />

                                <div class="invalid-feedback">
                                    กรุณาระบุชื่อ
                                </div>
                            </div>
                            <!-- <label for="" class="col-12 col-md-3 form-label">นามสกุล</label> -->
                            <div class="col-12 col-md-3">
                                <input type="text" class="form-control" required id="lastName" minlength="2" name="lastName" placeholder="นามสกุล" value="<?php echo isset($save_data['lastName']) ? $save_data['lastName'] : '' ?><?= isset($lname) ? $lname : '' ?>" />
                                <div class="invalid-feedback">
                                    กรุณาระบุนามสกุล
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="col-12 col-md-3 form-label">ตำแหน่งและสังกัด</label>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" required id="originPosition" name="originPosition" value="<?php echo isset($save_data['originPosition']) ? $save_data['originPosition'] : '' ?><?= isset($originPosition) ? $originPosition : '' ?>" />
                                <div class="invalid-feedback">
                                    กรุณาระบุตำแหน่ง
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>









<?= $this->endSection() ?>
<?= $this->section('cssTopContent') ?>
<link href="<?php echo base_url() ?>/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<?= $this->endSection() ?>
<?= $this->section('jsContent') ?>
<script>
    function myFunction() {
        var x = document.getElementById("mySelect").value;
        console.log(x);
        const myArray = x.split("&");
        console.log(myArray[1]);
        // document.getElementById("demo").innerHTML = "You selected: " + x;
        if (myArray[1] == 1) {
            document.getElementById("1").selected = true;
            console.log('ชาย')
        } else if (myArray[1] == 2) {
            console.log('หญิง')
            document.getElementById("2").selected = true;
        } else {
            console.log('ไม่มีเพศ')
            document.getElementById("0").selected = true;
        }
    }
</script>
<script src="<?php echo base_url() ?>/assets/libs/parsleyjs/parsley.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/pages/form-validation.init.js"></script>
<script src="<?php echo base_url() ?>/assets/libs/select2/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $(".select2").select2();
    })
</script>


<?= $this->endSection() ?>