<?= $this->extend('theme/admin') ?>
<?= $this->section('content') ?>

<form  class="needs-validation" novalidate action="<?php echo base_url('StructureByAssistRate/save') ?>" method="POST" id="strForm">
    <input type="hidden" name="id" value="<?php echo isset($save_data['positionMapID'])?$save_data['positionMapID']:'' ?>"/>
    <input type="hidden" name="org_id" value="<?php echo $org_id ?>"/>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body d-inline">

                    <span class="h2"><?php echo $title; ?></span>
                    <div class="float-end">
                        <a href="<?php echo base_url('StructureByAssistRate') ?>" class="btn btn-default"><i class="fas fa-chevron-left"></i> ย้อนกลับ</a>
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
                                <label for="" class="col-12 col-md-3 form-label">ชื่อตำแหน่งใน กอ.รมน./ชื่อตำแหน่งในการบริหาร</label>
                                <div class="col-12 col-md-6">
                                    <select class="form-select" required name="position" id="position">
                                        <option value="">---- เลือกตำแหน่ง ----</option>
                                        <?php if (isset($position))
                                            foreach ($position as $key => $value) {
                                            ?>
                                                <option value="<?php echo $value->id ?>"><?php echo $value->position_name ?></option>
                                            <?php 
                                            }
                                        ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        กรุณาเลือกตำแหน่ง
                                    </div>
                                </div>
                                
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-12 col-md-3 form-label">ตำแหน่งประเภท</label>
                                <div class="col-12 col-md-6">
                                    <select class="form-select" name="positionGroup" id="positionGroup" required>
                                        <option value="">---- เลือกตำแหน่งประเภท ----</option>
                                        <?php if (isset($positionGroup))
                                            foreach ($positionGroup as $key => $value) {
                                            ?>
                                                <option value="<?php echo $value->id ?>"><?php echo $value->position_group_name ?></option>
                                            <?php 
                                            }
                                        ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        กรุณาเลือกตำแหน่งประเภท
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-12 col-md-3 form-label">ชื่อตำแหน่งในสายงานพลเรือน</label>
                                <div class="col-12 col-md-6">
                                    <select class="form-select" name="positionCivilian" id="positionCivilian" required>
                                        <option value="">---- เลือกชื่อตำแหน่งในสายงานพลเรือน ----</option>
                                        <?php if (isset($positionCivilian))
                                            foreach ($positionCivilian as $key => $value) {
                                            ?>
                                                <option value="<?php echo $value->id ?>"><?php echo $value->position_civilian_name ?></option>
                                            <?php 
                                            }
                                        ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        กรุณาเลือกชื่อตำแหน่งในสายงานพลเรือน
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-12 col-md-3 form-label">ระดับพลเรือนหรือเทียบเท่า</label>
                                <div class="col-12 col-md-6">
                                    <select class="form-select" name="positionCivilianGroup" id="positionCivilianGroup" required>
                                        <option value="">---- เลือกระดับพลเรือนหรือเทียบเท่า ----</option>
                                        <?php if (isset($positionCivilianGroup))
                                            foreach ($positionCivilianGroup as $key => $value) {
                                            ?>
                                                <option value="<?php echo $value->id ?>"><?php echo $value->position_civilian_group_name ?></option>
                                            <?php 
                                            }
                                        ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        กรุณาเลือกระดับพลเรือนหรือเทียบเท่า
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-12 col-md-3 form-label">ชั้นยศ</label>
                                <div class="col-12 col-md-6">
                                    <select class="form-select" name="positionRank" id="positionRank" required>
                                        <option value="">---- เลือกชั้นยศ ----</option>
                                        <?php if (isset($positionRank))
                                            foreach ($positionRank as $key => $value) {
                                            ?>
                                                <option value="<?php echo $value->id ?>"><?php echo $value->rank_name ?></option>
                                            <?php 
                                            }
                                        ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        กรุณาเลือกชั้นยศ
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="" class="col-12 col-md-3 form-label">ตำแหน่งเลขที่</label>
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control" name="positionNumber" required value=""/>
                                    <div class="invalid-feedback">
                                        กรุณาระบุตำแหน่งเลขที่
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
<?= $this->section('jsContent') ?>
    <script src="<?php echo base_url() ?>/assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/pages/form-validation.init.js"></script>
    <script>
        $(document).ready(function(){
            // $('#strForm').submit(function(e) {

            //     e.preventDefault();
            // })
            // $('form').on('submit', function(e){
            //     // validation code here
            //     // if(!valid) {
            //     e.preventDefault();
            //     // }
            // });
        })
    </script>
        
<?= $this->endSection() ?>