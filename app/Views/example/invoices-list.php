<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <!-- bootstrap-datepicker css -->
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/menu-ex') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <?= $page_title ?>

                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <button type="button" class="btn btn-success waves-effect waves-light mb-3"><i class="mdi mdi-plus me-1"></i> Add Invoice</button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="float-end">
                            <div class=" mb-3">
                                <div class="input-daterange input-group" id="datepicker6" data-date-format="dd M, yyyy" data-date-autoclose="true" data-provide="datepicker" data-date-container='#datepicker6'>
                                    <input type="text" class="form-control text-start" placeholder="From" name="From" />
                                    <input type="text" class="form-control text-start" placeholder="To" name="To" />

                                    <button type="button" class="btn btn-primary"><i class="mdi mdi-filter-variant"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <div class="table-responsive mb-4">
                            <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                <thead>
                                    <tr class="bg-transparent">
                                        <th style="width: 24px;">
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck">
                                                <label class="form-check-label" for="invoicecheck"></label>
                                            </div>
                                        </th>
                                        <th>Invoice ID</th>
                                        <th>Date</th>
                                        <th>Billing Name</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Download Pdf</th>
                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck1">
                                                <label class="form-check-label" for="invoicecheck1"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0131</a> </td>
                                        <td>
                                            10 Jul, 2020
                                        </td>
                                        <td>Connie Franco</td>

                                        <td>
                                            $141
                                        </td>
                                        <td>
                                            <div class="badge bg-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck2">
                                                <label class="form-check-label" for="invoicecheck2"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0130</a> </td>
                                        <td>
                                            09 Jul, 2020
                                        </td>
                                        <td>Paul Reynolds</td>

                                        <td>
                                            $153
                                        </td>
                                        <td>
                                            <div class="badge bg-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck3">
                                                <label class="form-check-label" for="invoicecheck3"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0129</a> </td>
                                        <td>
                                            09 Jul, 2020
                                        </td>
                                        <td>Ronald Patterson</td>

                                        <td>
                                            $220
                                        </td>
                                        <td>
                                            <div class="badge bg-soft-warning font-size-12">Pending</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck4">
                                                <label class="form-check-label" for="invoicecheck4"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0128</a> </td>
                                        <td>
                                            08 Jul, 2020
                                        </td>
                                        <td>Adella Perez</td>

                                        <td>
                                            $175
                                        </td>
                                        <td>
                                            <div class="badge bg-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck5">
                                                <label class="form-check-label" for="invoicecheck5"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0127</a> </td>
                                        <td>
                                            07 Jul, 2020
                                        </td>
                                        <td>Theresa Mayers</td>

                                        <td>
                                            $160
                                        </td>
                                        <td>
                                            <div class="badge bg-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck6">
                                                <label class="form-check-label" for="invoicecheck6"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0126</a> </td>
                                        <td>
                                            06 Jul, 2020
                                        </td>
                                        <td>Michael Wallace</td>

                                        <td>
                                            $150
                                        </td>
                                        <td>
                                            <div class="badge bg-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck7">
                                                <label class="form-check-label" for="invoicecheck7"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0125</a> </td>
                                        <td>
                                            05 Jul, 2020
                                        </td>
                                        <td>Oliver Gonzales</td>

                                        <td>
                                            $165
                                        </td>
                                        <td>
                                            <div class="badge bg-soft-warning font-size-12">Pending</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck8">
                                                <label class="form-check-label" for="invoicecheck8"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0124</a> </td>
                                        <td>
                                            05 Jul, 2020
                                        </td>
                                        <td>David Burke</td>

                                        <td>
                                            $170
                                        </td>
                                        <td>
                                            <div class="badge bg-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck9">
                                                <label class="form-check-label" for="invoicecheck9"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0123</a> </td>
                                        <td>
                                            04 Jul, 2020
                                        </td>
                                        <td>Willie Verner</td>

                                        <td>
                                            $140
                                        </td>
                                        <td>
                                            <div class="badge bg-soft-warning font-size-12">Pending</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck10">
                                                <label class="form-check-label" for="invoicecheck10"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0122</a> </td>
                                        <td>
                                            03 Jul, 2020
                                        </td>
                                        <td>Felix Perry</td>

                                        <td>
                                            $155
                                        </td>
                                        <td>
                                            <div class="badge bg-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck11">
                                                <label class="form-check-label" for="invoicecheck11"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0121</a> </td>
                                        <td>
                                            02 Jul, 2020
                                        </td>
                                        <td>Virgil Kelley</td>

                                        <td>
                                            $165
                                        </td>
                                        <td>
                                            <div class="badge bg-soft-success font-size-12">Paid</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check text-center">
                                                <input type="checkbox" class="form-check-input" id="invoicecheck12">
                                                <label class="form-check-label" for="invoicecheck12"></label>
                                            </div>
                                        </td>

                                        <td><a href="javascript: void(0);" class="text-dark fw-bold">#MN0120</a> </td>
                                        <td>
                                            02 Jul, 2020
                                        </td>
                                        <td>Matthew Lawler</td>

                                        <td>
                                            $170
                                        </td>
                                        <td>
                                            <div class="badge bg-soft-warning font-size-12">Pending</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button class="btn btn-light btn-sm w-xs">Pdf <i class="uil uil-download-alt ms-2"></i></button>
                                            </div>
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="px-3 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            <a href="javascript:void(0);" class="px-3 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/right-sidebar') ?>

<?= $this->include('partials/vendor-scripts') ?>

<!-- bootstrap datepicker -->
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/ecommerce-datatables.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>