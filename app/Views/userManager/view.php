<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body d-inline">
                <span class="h4">รายชื่อผู้ใช้</span>
                <div class="float-end">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" title="คำค้น เลขประจำตัวประชาชนมชื่อ-สกุล,ตำแหน่ง"  placeholder="ป้อนคำที่ต้องการค้นหา" value="<?php echo isset($_GET['search'])?$_GET['search']:'' ?>">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-success">ค้นหา</button>
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <a href="<?php echo base_url('PersonalManagement/form') ?>" class="btn btn-outline-light"><i class="mdi mdi-plus-circle-outline"></i> เพิ่มข้อมูล</a>
                        </div>
                    </form>
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
                    <div class="row form-group align-items-baseline">
                        <div class="table-responsive">
                            <table class="table table-bordered datatable">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="text-dark fw-bold text-center col-1">ลำดับ</th>
                                        <th scope="col" class="text-dark fw-bold text-center col-3">รหัสผู้ใช้</th>
                                        <th scope="col" class="text-dark fw-bold text-center col-3">ชื่อผู้ใช้</th>
                                        <th scope="col" class="text-dark fw-bold text-center col-3">สังกัดหน่วยงาน</th>
                                        <th scope="col" class="text-dark fw-bold text-center col-2">เครื่องมือ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($users) && !empty($users)):
                                            $no = 0;
                                            foreach ($users as $key => $user):
                                                $no++;
                                                ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no ?></td>
                                                    <td class="text-left"><?php echo $user['username']?></td>
                                                    <td class="text-left"><?php echo $user['name_th']." ".$user['surname_th']?></td>
                                                    <td class="text-left"><?php echo $user['office']?></td>
                                                    <td class="text-center"></td>
                                                </tr>
                                                <?php
                                            endforeach;
                                        endif;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col-4">
                        <div class="pagination justify-content-start" role="group" aria-label="pager counts">
                            <!-- <span class=""><?php //'หน้าที่ '.$currentPage.' จาก '.$totalPages; ?></span> -->
                        </div>
                    </div>
                    <div class="col-8">
                        <?php //echo $pager->links('bootstrap', 'bootstrap_pagination') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>