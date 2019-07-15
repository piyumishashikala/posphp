<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 6/19/2019
 * Time: 12:20 PM
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer - Pos System</title>
    <link rel="stylesheet" href="css/simple-sidebar.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/84a9e6584a.js"></script>

</head>
<body>
<?php
include 'sidebar.php';
?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
<?php
include 'navbar.php';
?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <h1> POS System</h1>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customer.php">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="item.php">Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="placeorder.php">Place Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="report.php">Report</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="card m-1" style="height: fit-content;!important;">
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="customerID">Customer ID</label>
                                    <input type="text" class="form-control" id="customerID"
                                           placeholder="Enter customer ID">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="custFirstName">First Name</label>
                                <input type="text" class="form-control" id="custFirstName"
                                       placeholder="Enter Customer First Name">
                            </div>
                            <div class="col">
                                <label for="custLastName">Last Name</label>
                                <input type="text" class="form-control" id="custLastName"
                                       placeholder="Enter Customer Last Name ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="custAddress">Customer Address</label>
                                    <input type="text" class="form-control" id="custAddress"
                                           placeholder="Enter Customer Address">
                                </div>
                            </div>
                            <div class="col">
                                <label for="custSalary">Customer Salary</label>
                                <input type="text" class="form-control" id="custSalary"
                                       placeholder="Enter Customer Salary">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group align-content-center">
                                    <button type="button" id="btnAddThreePL" onclick="addCustomer()"
                                            class="btn btn-outline-primary col-2">Add
                                    </button>
                                    <button type="button" id="btnDeleteThreePL" onclick="removeRow()"
                                            class="btn btn-outline-danger col-2">
                                        Delete
                                    </button>
                                    <button type="button" id="btnUpdateThreePL" onclick="updatedetails()"
                                            class="btn btn-outline-success col-2">
                                        Update
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="card m-1" style="height: fit-content;!important;">
                <div class="card-header">
                    <h3><i class="fa fa-users"></i>Customer Form</h3>
                </div>
                <table>
                    <div class="card-body">
                        <table id="table" class="table table-bordered table-responsive-xl table-hover display">
                            <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>first name</th>
                                <th>last name</th>
                                <th>Customer Address</th>
                                <th>Customer Salary</th>
                            </tr>
                            </thead>
                            <!--<tbody id="CustomerForm">-->
                            <!--<tr>-->
                            <!--<td>C001</td>-->
                            <!--<td>Piyumi</td>-->
                            <!--<td>Mapalagama</td>-->
                            <!--<td>100000</td>-->
                            <!--</tr>-->
                            <!--<tr>-->
                            <!--<td>C002</td>-->
                            <!--<td>Kamal</td>-->
                            <!--<td>Galle</td>-->
                            <!--<td>230000</td>-->
                            <!--</tr>-->
                            <!--<tr>-->
                            <!--<td>C003</td>-->
                            <!--<td>Nimal</td>-->
                            <!--<td>Hikkaduwa</td>-->
                            <!--<td>1002000</td>-->
                            <!--</tr>-->
                            <!--<tr>-->
                            <!--<td>C004</td>-->
                            <!--<td>Sunimal</td>-->
                            <!--<td>Colombo</td>-->
                            <!--<td>1000</td>-->
                            <!--</tr>-->

                            <!--</tbody>-->
                        </table>

                    </div>
                </table>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<script src="js/customer.js"></script>
<script src="js/common.js"></script>
</body>

</html>

