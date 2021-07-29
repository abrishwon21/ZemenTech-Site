<!DOCTYPE html>
<html lang="en">

<?php include_once "partials/head.php"; ?>

<body>
    <div class="container-scroller">
        <?php include_once "partials/nav.php"; ?>

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Categotry Section</h4>
                            <p class="card-description">View and<code>edit/delet option</code>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Category ID</th>
                                            <th>Category Title</th>
                                            <th>Catogory Author</th>
                                            <th>Status</th>
                                            <th colspan="2">
                                                <center> Action</center>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12</td>
                                            <td>Web Development</td>
                                            <td>Fitsum Mesfin</td>
                                            <td><label class="badge badge-warning">Pending</label></td>
                                            <td><label class="badge badge-danger">Delete</label></td>
                                            <td><label class="badge badge-success">Edit</label></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php include_once "partials/footer.php";  ?>