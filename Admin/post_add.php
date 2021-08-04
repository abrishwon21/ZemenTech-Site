<?php include_once "partials/head.php"; ?>
<?php include_once "control.php"; ?>
<?php include_once "partials/customJs.php"; ?>
<?php include_once "partials/nav.php"; ?>
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <center>Add Post</center>
                            </h4>

                            <form class="forms-sample" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="postTitle">Post Title</label>
                                    <input type="text" class="form-control" name="postTitle" id="postTitle"
                                        placeholder="Title" required>
                                </div>

                                <div class="form-group">
                                    <label for="postDescript">Post Description</label>
                                    <textarea name="postDescript" id="postDescript"
                                        style="height:20vh; color:black;">
                                        
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="postdate">Date</label>
                                    <input type="date" name="postdate" class="form-control" id="postdate" required>
                                </div>
                                <div class="form-group">
                                    <label for="postAuthor">Author</label>
                                    <select class='form-control' name="postAuthor" id='postAuthor' required>
                                        <option>Select Author</option>
                                        <?php fetchAuthor(); ?>
                                    </select>

                                </div>


                                <button type="submit" name="addpost" class="btn btn-primary mr-2">Add</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


<?php include_once "partials/footer.php";  ?>

