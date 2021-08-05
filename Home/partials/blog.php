<?php 
    require_once "includes/db.inc.php";
    $sql = "SELECT * FROM `posts` where `status`='approved' Limit 10";
    $result = mysqli_query($conn,$sql);
?>

<section id="blog" class="section">
    <div class="container">
        <div class="row">

            <div class="title-box text-center">
                <h2 class="title">Latest Blog</h2>
            </div>

            <!-- Start Blog item #1-->
         
            <div class="col-md-4">
                <div class="blog-post">
                <?php while($row = mysqli_fetch_assoc($result)){?>
                    <div class="post-media">
                        <img src="images/blog/<?php echo $row['p_photo'];?>" alt="">
                    </div>
                    <div class="post-desc">
                        <h4><?php echo $row['p_title'];?></h4>
                        <h5><?php echo $row['created'];?> / comment(<?php echo mysqli_num_rows($result);?>)</h5>
                        <p><?php echo $row['p_description'];?></p>
                        <a href="blog.php?post_id=<?php echo $row['p_id'];?>" class="btn btn-gray-border">Read More</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
         



        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
