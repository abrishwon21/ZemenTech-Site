<!DOCTYPE html>
<html lang="en">

<?php include_once "partials/head.php"; ?>

<body>
    <div class="container-scroller">
        <?php include_once "partials/nav.php"; ?>

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <center>Edit Service</center>
                            </h4>

                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="exampleInputName1">Service Title</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Service Description</label>
                                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectAuthor">Author</label>
                                    <select class="form-control" id="exampleSelectAuthor">
                                        <option>Select Author</option>
                                        <option>Fitsum Mesfin</option>
                                        <option>Temam Hashim</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>icon/image</label>
                                    <input type="file" accept="image/*" name="img" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDate">Date</label>
                                    <input type="date" class="form-control" id="exampleInputDate"
                                        placeholder="Location">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


            <?php include_once "partials/footer.php";  ?>