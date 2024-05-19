<!DOCTYPE html>
<html lang="en">

<?php
include 'header.php';
?>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php
        include 'sidebar.php';
        ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title" style="font-size:30px;">Manage Product Quantities</h4>
                            </div>
                            <div class="card-body">
                                <table id="product-quantity-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>SKU</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SOLO Vasline</td>
                                            <td>SV001</td>
                                            <td class="quantity">100</td>
                                            <td>50.00ETB</td>
                                            <td class="status"></td>
                                            <td>
                                                <button class="btn btn-primary btn-sm update-btn">Update Quantity</button>
                                                <div class="update-form" style="display:none;">
                                                    <input type="number" class="form-control new-quantity" placeholder="Enter new quantity">
                                                    <button class="btn btn-success btn-sm save-btn">Save</button>
                                                    <button class="btn btn-secondary btn-sm cancel-btn">Cancel</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Vitex Shampoo</td>
                                            <td>VS002</td>
                                            <td class="quantity">2</td>
                                            <td>30.00ETB</td>
                                            <td class="status"></td>
                                            <td>
                                                <button class="btn btn-primary btn-sm update-btn">Update Quantity</button>
                                                <div class="update-form" style="display:none;">
                                                    <input type="number" class="form-control new-quantity" placeholder="Enter new quantity">
                                                    <button class="btn btn-success btn-sm save-btn">Save</button>
                                                    <button class="btn btn-secondary btn-sm cancel-btn">Cancel</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Florida Sanitizer</td>
                                            <td>FS003</td>
                                            <td class="quantity">2</td>
                                            <td>190.00ETB</td>
                                            <td class="status"></td>
                                            <td>
                                                <button class="btn btn-primary btn-sm update-btn">Update Quantity</button>
                                                <div class="update-form" style="display:none;">
                                                    <input type="number" class="form-control new-quantity" placeholder="Enter new quantity">
                                                    <button class="btn btn-success btn-sm save-btn">Save</button>
                                                    <button class="btn btn-secondary btn-sm cancel-btn">Cancel</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div> <!-- end row-->
            </div> <!-- container -->
        </div> <!-- content -->

        <!-- Footer Start -->
        <?php
        include 'footer.php';
        ?>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- Datatables js -->
    <script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

    <!-- Datatable Demo App js -->
    <script src="assets/js/pages/datatable.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const threshold = 5; // Define the quantity threshold for low stock warning
            const rows = document.querySelectorAll('#product-quantity-datatable tbody tr');

            rows.forEach(row => {
                const quantityCell = row.querySelector('.quantity');
                const statusCell = row.querySelector('.status');
                const updateBtn = row.querySelector('.update-btn');
                const updateForm = row.querySelector('.update-form');
                const saveBtn = row.querySelector('.save-btn');
                const cancelBtn = row.querySelector('.cancel-btn');
                const newQuantityInput = row.querySelector('.new-quantity');

                const quantity = parseInt(quantityCell.textContent);

                if (quantity <= threshold) {
                    statusCell.innerHTML = '<span style="color: red; font-weight: bold;">Low Stock</span>';
                } else {
                    statusCell.innerHTML = '<span style="color: green;">In Stock</span>';
                }

                updateBtn.addEventListener('click', () => {
                    updateForm.style.display = 'block';
                });

                cancelBtn.addEventListener('click', () => {
                    updateForm.style.display = 'none';
                });

                saveBtn.addEventListener('click', () => {
                    const newQuantity = parseInt(newQuantityInput.value);
                    if (!isNaN(newQuantity) && newQuantity >= 0) {
                        quantityCell.textContent = newQuantity;
                        if (newQuantity <= threshold) {
                            statusCell.innerHTML = '<span style="color: red; font-weight: bold;">Low Stock</span>';
                        } else {
                            statusCell.innerHTML = '<span style="color: green;">In Stock</span>';
                        }
                        updateForm.style.display = 'none';
                    } else {
                        alert('Please enter a valid quantity.');
                    }
                });
            });
        });
    </script>

</body>

</html>
