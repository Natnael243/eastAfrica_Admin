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
                                <h4 class="header-title" style="font-size:30px;">List of Orders</h4>
                            </div>
                            <div class="card-body">
                                <table id="order-datatable" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Order Number</th>
                                            <th>Customer Name</th>
                                            <th>Sub-city</th>
                                            <th>Phone Number</th>
                                            <th>Total Price</th>
                                            <th>Number of Items</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>0001</td>
                                            <td>Natnael Zelalem</td>
                                            <td>Addis Ketema</td>
                                            <td>0932634925</td>
                                            <td>470ETB</td>
                                            <td>2</td>
                                            <td>Paid</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm" onclick="showDetails(1)">View Details</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>0002</td>
                                            <td>Yosef CR7</td>
                                            <td>Merkato</td>
                                            <td>0923456789</td>
                                            <td>800ETB</td>
                                            <td>2</td>
                                            <td>Not Paid</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm" onclick="showDetails(2)">View Details</button>
                                            </td>
                                        </tr>
                                        <!-- Additional rows for other orders can be added here -->
                                    </tbody>
                                </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div> <!-- end row-->
            </div> <!-- container -->
        </div> <!-- content -->

        <!-- Modal -->
        <div class="modal fade" id="orderDetailsModal" tabindex="-1" aria-labelledby="orderDetailsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="orderDetailsModalLabel">Order Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Order Number:</strong> <span id="modalOrderNumber"></span></p>
                        <p><strong>Customer Name:</strong> <span id="modalCustomerName"></span></p>
                        <p><strong>Phone Number:</strong> <span id="modalPhoneNumber"></span></p>
                        <p><strong>Location:</strong> <span id="modalLocation"></span></p>
                        <p><strong>Street Name:</strong> <span id="modalStreetName"></span></p>
                        <p><strong>House Number:</strong> <span id="modalHouseNumber"></span></p>
                        <h5>Purchased Items:</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Product Type</th>
                                    <th>Product Price</th>
                                </tr>
                            </thead>
                            <tbody id="modalPurchasedItems">
                                <!-- Dynamic content will be injected here -->
                            </tbody>
                        </table>
                        <p><strong>Service Charge:</strong> <span id="modalServiceCharge"></span></p>
                        <p><strong>Total Price:</strong> <span id="modalTotalPrice"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <?php
        include 'footer.php'
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

    <!-- Bootstrap js (for modal) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <script>

        const orders = {
            1: {
                orderNumber: 1,
                customerName: 'Natnael Zelalem',
                phoneNumber: '0932634925',
                location: 'Addis Ketema',
                streetName: 'sebatega wered blo',
                houseNumber: '1234',
                serviceCharge: '$30',
                totalPrice: '$470',
                items: [
                    { productName: 'Crown Detergent', quantity: 2, productType: 'Type 1', productPrice: '$240' },
                ]
            },
            2: {
                orderNumber: 2,
                customerName: 'Yosef CR7',
                phoneNumber: '0923456789',
                location: 'Merkato',
                streetName: 'Satn tera',
                houseNumber: '456',
                serviceCharge: '$20',
                totalPrice: '$800',
                items: [
                    { productName: 'Vitex shampoo', quantity: 8, productType: 'Personal Care', productPrice: '$350' },
                    { productName: 'solo Vasiline', quantity: 4, productType: 'Personal Care', productPrice: '$320' }
                ]
            }
        };

        function showDetails(orderId) {
            const order = orders[orderId];

            document.getElementById('modalOrderNumber').innerText = order.orderNumber;
            document.getElementById('modalCustomerName').innerText = order.customerName;
            document.getElementById('modalPhoneNumber').innerText = order.phoneNumber;
            document.getElementById('modalLocation').innerText = order.location;
            document.getElementById('modalStreetName').innerText = order.streetName;
            document.getElementById('modalHouseNumber').innerText = order.houseNumber;
            document.getElementById('modalServiceCharge').innerText = order.serviceCharge;
            document.getElementById('modalTotalPrice').innerText = order.totalPrice;

            const itemsTable = document.getElementById('modalPurchasedItems');
            itemsTable.innerHTML = '';
            order.items.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.productName}</td>
                    <td>${item.quantity}</td>
                    <td>${item.productType}</td>
                    <td>${item.productPrice}</td>
                `;
                itemsTable.appendChild(row);
            });

            const orderDetailsModal = new bootstrap.Modal(document.getElementById('orderDetailsModal'));
            orderDetailsModal.show();
        }
    </script>

</body>

</html>
