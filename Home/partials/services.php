<?php 
//create team object class name
$srvc = new Services();
?>

<section id="services" class="section">
    <div class="container">
        <div class="row">

            <div class="title-box text-center">
                <h2 class="title">Services</h2>
            </div>
              
                <?php
            $service = $srvc->fetchService();
            while($row1 =$service->fetch_assoc()){
            ?>
            <!--Services Item-->
            <div class="col-md-4">
                <div class="services-box">
                    <div class="services-icon"> <?php echo $row1['s_image']; ?></div>
                    <div class="services-desc">
                        <h4><?php echo $row1['s_title']; ?></h4>

                        <p><?php echo  $row1['excerpt']."..."; ?></p>
                        <a class="btn btn-success" href="#?data=<?php echo $row1['s_description'];?>">Read More</a>

                    </div>
                </div>
            </div>
            <!--End services Item-->

            <?php }   ?>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>