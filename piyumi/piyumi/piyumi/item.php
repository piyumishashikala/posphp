<?php
/**
 * Created by IntelliJ IDEA.
 * User: Piyumi Shashikala
 * Date: 6/19/2019
 * Time: 12:21 PM
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Item - Pos System</title>
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
                                    <label for="itemCOde">Item Code</label>
                                    <input type="text" class="form-control" id="itemCOde"
                                           placeholder="Enter Item Code">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="itemName">Item Name</label>
                                <input type="text" class="form-control" id="itemName"
                                       placeholder="Enter Item Name">
                            </div>
                            <div class="col">
                                <label for="itemqty">Item Qty</label>
                                <input type="number" class="form-control" id="itemqty"
                                       placeholder="Enter Item Qty ">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="itemPrice">Item Price</label>
                                    <input type="text" class="form-control" id="itemPrice"
                                           placeholder="Enter Item Price">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group align-content-center">
                                    <button  type="button" class="btn btn-outline-primary col-2" onclick="additem()">
                                        Add
                                    </button>
                                    <button  onclick="removeRow()" type="button" class="btn btn-outline-danger col-2">
                                        Delete
                                    </button>
                                    <button onclick="" type="button" class="btn btn-outline-success col-2">
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
                    <h3><i class="fa fa-users"></i>Item Form</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-responsive-xl table-hover display">
                        <thead>
                        <tr>
                            <th>Item Code</th>
                            <th>Item Name</th>
                            <th>Item Qty</th>
                            <th>Item Price</th>
                        </tr>
                        </thead>
                        <!--<tbody id="CustomerForm">-->
                        <!--<tr>-->
                        <!--<td>I001</td>-->
                        <!--<td>Suger</td>-->
                        <!--<td>100</td>-->
                        <!--<td>122</td>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--<td>I002</td>-->
                        <!--<td>Bun</td>-->
                        <!--<td>20</td>-->
                        <!--<td>50</td>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--<td>I003</td>-->
                        <!--<td>Rice</td>-->
                        <!--<td>167</td>-->
                        <!--<td>233</td>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--<td>I004</td>-->
                        <!--<td>Tea bags</td>-->
                        <!--<td>10023</td>-->
                        <!--<td>1222</td>-->
                        <!--</tr>-->
                        <!--</tbody>-->
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<script src="js/common.js"></script>
<script src="js/item.js"></script>
</body>
</html>

