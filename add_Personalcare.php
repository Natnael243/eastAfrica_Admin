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

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title"> New Personal Care Product</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Add Product</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form id="product-form">
                                                <div class="mb-3">
                                                    <label for="product_name" class="form-label">Product Name</label>
                                                    <input type="text" id="product_name" class="form-control" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="product_price" class="form-label">Product Price</label>
                                                    <input class="form-control" id="product_price" type="number" name="number" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="product_quantity" class="form-label">Product Quantity</label>
                                                    <input class="form-control" id="product_quantity" type="number" name="number" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="product_description" class="form-label">Product Description</label>
                                                    <textarea class="form-control" id="product_description" rows="5" required></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="product_image" class="form-label">Product Image</label>
                                                    <input type="file" id="product_image" class="form-control" required>
                                                </div>
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </form>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row" style="padding-top: 50px">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Added Items</h4>
                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0 table-nowrap" id="product-table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Product Name</th>
                                                    <th>Product Price</th>
                                                    <th>Product Description</th>
                                                    <th>Product Quantity</th>
                                                    <th>Product Image</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>

                                            <tbody id="product-tbody">
                                                <!-- Existing products can be added here -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end .table-responsive-->
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
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

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    <!-- Table Editable plugin-->
    <script src="assets/vendor/jquery-tabledit/jquery.tabledit.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let productCount = 0;

            const productForm = document.getElementById('product-form');
            const productTbody = document.getElementById('product-tbody');

            productForm.addEventListener('submit', function(event) {
                event.preventDefault();

                const productName = document.getElementById('product_name').value;
                const productPrice = document.getElementById('product_price').value;
                const productQuantity = document.getElementById('product_quantity').value;
                const productDescription = document.getElementById('product_description').value;
                const productImage = document.getElementById('product_image').value.split('\\').pop();

                productCount++;

                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${productCount}</td>
                    <td class="editable" data-name="product_name">${productName}</td>
                    <td class="editable" data-name="product_price">${productPrice}</td>
                    <td class="editable" data-name="product_description">${productDescription}</td>
                    <td class="editable" data-name="product_quantity">${productQuantity}</td>
                    <td>${productImage}</td>
                    <td><button class="btn btn-primary btn-sm edit-btn">Edit</button></td>
                `;

                productTbody.appendChild(newRow);

                // Clear form fields
                productForm.reset();
            });

            // Event delegation for edit functionality
            productTbody.addEventListener('click', function(event) {
                if (event.target.classList.contains('edit-btn')) {
                    const row = event.target.closest('tr');
                    const editableCells = row.querySelectorAll('.editable');

                    editableCells.forEach(cell => {
                        const cellValue = cell.textContent;
                        cell.innerHTML = `<input type="text" class="form-control" value="${cellValue}">`;
                    });

                    event.target.textContent = 'Save';
                    event.target.classList.remove('edit-btn');
                    event.target.classList.add('save-btn');
                } else if (event.target.classList.contains('save-btn')) {
                    const row = event.target.closest('tr');
                    const inputs = row.querySelectorAll('.form-control');

                    inputs.forEach(input => {
                        const cell = input.closest('td');
                        cell.textContent = input.value;
                    });

                    event.target.textContent = 'Edit';
                    event.target.classList.remove('save-btn');
                    event.target.classList.add('edit-btn');
                }
            });
        });
    </script>
</body>

</html>
