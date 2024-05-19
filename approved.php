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
                                <h4 class="header-title" style="font-size:30px;">List of Paid Orders</h4>
                            </div>
                            <div class="card-body">
                                <table id="paid-orders-datatable" 
                                    class="table table-striped dt-responsive nowrap w-100">
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
                                            <td>Addis Abeba</td>
                                            <td>0932634925</td>
                                            <td>470 ETB</td>
                                            <td>1</td>
                                            <td>Paid</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm" onclick="showDetails(1)">View Details</button>
                                                <button class="btn btn-secondary btn-sm" onclick="showPrintDetails(1)">Print</button>
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

        <!-- Modal for Viewing Details -->
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

        <!-- Modal for Printing Details -->
        <div class="modal fade" id="printDetailsModal" tabindex="-1" aria-labelledby="printDetailsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="printDetailsModalLabel">Print Order Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="printContent">
                        <!-- Dynamic content will be injected here -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="printDiv('printContent')">Print</button>
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
        // Dummy data for demonstration purposes
        const orders = {
            1: {
                orderNumber: 0001,
                customerName: 'Natnael Zelalem',
                phoneNumber: '0932634925',
                location: 'Addis Ketema',
                streetName: 'sebatega wered blo ',
                houseNumber: '1234',
                serviceCharge: '$30',
                totalPrice: '$470',
                items: [
                    { productName: 'Crown Detergent', quantity: 2, productType: 'Home Detergent', productPrice: '$240' },
                ]
            },
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

            const purchasedItems = document.getElementById('modalPurchasedItems');
            purchasedItems.innerHTML = '';
            order.items.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.productName}</td>
                    <td>${item.quantity}</td>
                    <td>${item.productType}</td>
                    <td>${item.productPrice}</td>
                `;
                purchasedItems.appendChild(row);
            });

            const orderDetailsModal = new bootstrap.Modal(document.getElementById('orderDetailsModal'));
            orderDetailsModal.show();
        }

        function showPrintDetails(orderId) {
            const order = orders[orderId];

            let printContent = `
                <h3 class="text-center">Order Details</h3>
                <p><strong>Order Number:</strong> ${order.orderNumber}</p>
                <p><strong>Customer Name:</strong> ${order.customerName}</p>
                <p><strong>Phone Number:</strong> ${order.phoneNumber}</p>
                <p><strong>Location:</strong> ${order.location}</p>
                <p><strong>Street Name:</strong> ${order.streetName}</p>
                <p><strong>House Number:</strong> ${order.houseNumber}</p>
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
                    <tbody>
            `;

            order.items.forEach(item => {
                printContent += `
                    <tr>
                        <td>${item.productName}</td>
                        <td>${item.quantity}</td>
                        <td>${item.productType}</td>
                        <td>${item.productPrice}</td>
                    </tr>
                `;
            });

            printContent += `
                    </tbody>
                </table>
                <p><strong>Service Charge:</strong> ${order.serviceCharge}</p>
                <p><strong>Total Price:</strong> ${order.totalPrice}</p>
                <br><br>
                <div class="row">
                    <div class="col-6">
                        <p>Verified by: ____________________</p>
                    </div>
                    <div class="col-6">
                        <p>Dispatched by: ____________________</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Delivered by: ____________________</p>
                    </div>
                    <div class="col-6">
                        <p>Customer Sign: ____________________</p>
                    </div>
                </div>
            `;

            document.getElementById('printContent').innerHTML = printContent;
            const printDetailsModal = new bootstrap.Modal(document.getElementById('printDetailsModal'));
            printDetailsModal.show();
        }

        function printDiv(divId) {
            const printContents = document.getElementById(divId).innerHTML;
            const originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            window.location.reload(); // reload to restore event listeners
        }
    </script>

</body>

</html>
