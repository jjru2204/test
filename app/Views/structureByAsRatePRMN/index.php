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
<div class="row form-group">
    <div class="col-md-12 col-sm-12 col-xs-12 text-right">
        <a href="<?php echo base_url('BenefitPersonal/exportWord')."?" ?>" class="btn btn-sm btn-info ">
            <i class="fa fa-file-word-o"></i>
            ส่งออก Word
        </a>

        <a href="<?php echo base_url('BenefitPersonal/exportPdf')."?" ?>" class="btn btn-sm btn-danger ">
            <i class="fa fa-file-pdf-o"></i>
            ส่งออก PDF
        </a>

        <a href="<?php echo base_url('StructureByAssistRatePRMN/exportExcel')."?" ?>" class="btn btn-sm btn-success ">
            <i class="fa fa-file-excel-o"></i>
            ส่งออก Excel
        </a>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?= view('partials/flash_message') ?>
                
                <div class="col-md-12">
                    <div class="row form-group align-items-baseline">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="text-dark fw-bold text-center" style="width:6rem;">ลำดับ</th>
                                        <th scope="col" class="text-dark fw-bold text-center" style="width:15rem;">
                                            ชื่อตำแหน่งใน กอ.รมน./<br>ชื่อตำแหน่งในการบริหาร</th>
                                        <th scope="col" class="text-dark fw-bold text-center" style="width:6rem;">
                                            เหล่า</th>
                                        <th scope="col" class="text-dark fw-bold text-center" style="width:9rem;">
                                            ประเภท</th>
                                        <th scope="col" class="text-dark fw-bold text-center" style="width:11rem;">
                                            ชื่อตำแหน่งใน<br>สายงานพลเรือน</th>
                                        <th scope="col" class="text-dark fw-bold text-center" style="width:7rem;">
                                            ระดับพลเรือนหรือเทียบเท่า</th>
                                        <th scope="col" class="text-dark fw-bold text-center" style="width:10rem;">ชั้นยศ</th>
                                        <th scope="col" class="text-dark fw-bold text-center" style="width: 5rem;">
                                            ตำแหน่ง<br>เลขที่</th>
                                        <th scope="col" class="text-dark fw-bold text-center" style="width: 14rem;">
                                            เครื่องมือ</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        echo $table_content;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('cssTopContent')?>
<link href="<?php echo base_url() ?>/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
<?= $this->endSection() ?>
<?= $this->section('jsContent')?>
<script src="<?php echo base_url() ?>/assets/libs/sweetalert2/sweetalert2.min.js"></script>
<script>
    function confirmDelete(id){
        Swal.fire({
            title: "ท่านต้องการลบข้อมูลใช่หรือไม่?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#f46a6a",
            cancelButtonText: "ยกเลิก",
            confirmButtonText: "ลบข้อมูล",
            reverseButtons: true
            }).then(function (result) {
            if (result.value) {
                location.href = '<?php echo base_url("StructureByAssistRatePRMN/delete"); ?>/'+id;
            }
        });
    }
</script>

<?= $this->endSection() ?>
