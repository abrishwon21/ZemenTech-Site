<!DOCTYPE html>
<html lang="en">

<?php include_once "partials/head.php"; ?>
<?php include_once "control.php"; ?>

<body>
    <div class="container-scroller">
        <?php include_once "partials/nav.php"; ?>

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Service Provided by Company</h4>
                            <p class="card-description">View and<code>edit/delete option</code>
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Service Title</th>
                                            <th>Author</th>
                                            <th>Status</th>
                                            <th colspan="2">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php fetchService(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php include_once "partials/footer.php";  ?>