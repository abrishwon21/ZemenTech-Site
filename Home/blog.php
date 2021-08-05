<?php 

require_once "includes/db.inc.php";
ob_start();
?>

<!doctype html>
<html lang="en-gb" class="no-js">
<head>
    <meta charset="utf-8">
    <title>Zemen Tech</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!--styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" href="css/etlinefont.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--Start Logo -->
                <div class="logo-nav">
                    <a href="index.php">
                        <img src="images/logo.png" style="width:100px; height:60px; margin-top: 7px;"
                            lt="Company logo" />
                    </a>
                </div>
            
                <!-- end main-menu -->
            </div>
        </div>
    </div>
</header>

		<!-- page-header -->
		<section id="page-header" class="parallax">
           <div class="overlay"></div>
			<div class="container">
				<h1>Blog</h1>
                <!--Start Breadcrumb-->
                <div class="breadcrumb">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li class="current">
							<a href="blog.php">Blog Post</a>
						</li>
					</ul>
				</div>
                <!--End Breadcrumb-->
			</div>
		</section>
		<!-- /page-header -->
		<?php 
   if(isset($_GET['post_id'])){
		 $p_id = $_GET['post_id'];

			$sql = "SELECT * FROM `posts` where p_id='$p_id' AND `status`='approved'";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result);
			$author_id = $row['p_author'];

			// comment counter

			$comment_sql = "SELECT * FROM `comments` where p_id='$p_id' AND `c_status`='approved'";
			$comment_result = mysqli_query($conn,$comment_sql);
			$comment_count = mysqli_num_rows($comment_result);

			// author 
			$team_sql = "SELECT * FROM `team_members` where tm_id='$author_id'";
			$team_result = mysqli_query($conn,$team_sql);
			$team_row = mysqli_fetch_array($team_result);

	 
   ?>
		
		<!--Start blog -->
		<section class="section">
			<div class="container">
				<div class="row">
					<!-- Blog Post -->
					<div class="col-md-8 col-sm-8">
						<div class="post-content">	
							<!-- Post Image -->
							<div class="post-img">
								<img src="images/blog/<?php echo $row['p_photo']; ?>" alt="">
							</div>
							<!-- /Post Image-->
							
							<!-- Post Meta-->
							<div class="post-meta">
                                <ul class="list-inline">
                                  <li><a href="#"><i class="fa fa-calendar"></i><?php echo $row['created']; ?></a> </li>
                                  <li><a href="#"><i class="fa fa-user"></i>by <?php echo $team_row['tm_name']; ?></a></li>
                                  <li><a href="#"><i class="fa fa-comments"></i> <?php echo $comment_count; ?> Comments</li>
                                </ul>
							</div>
							<!-- /Post Meta-->
							
							<!-- Post Description -->
							<div class="post-description">							
								<h3><?php echo $row['p_title']; ?></h3>          
                  <p><?php echo $row['p_description']; ?></p>
							</div>
							<!-- /Post Description -->
                          					
							<!-- Comment list -->
							<div class="comment-list">
								<h3><?php echo $comment_count; ?> Comments</h3>
														
								<ol>
				
							<?php while($cmt_row=mysqli_fetch_assoc($comment_result)){ ?>
									<li class="comment">					
										<div class="single_comment">
											<div class="comment-avatar">
												<div class="avatar">
													<img src="images/blog/avatar2.jpg" alt="">
												</div>
											</div>
											<div class="comment-content">
												<div class="comment-name"><a href="#"><?php echo $cmt_row['c_uname']; ?></a><span>-</span><a href="#" class="comment-reply">Reply</a></div>
												<div class="comment-desc"><?php echo $cmt_row['created']; ?></div>
												<div class="comment-text">
													<p>
													<?php echo $cmt_row['c_message']; ?>
													</p>
												</div>
											</div>
										</div>
																		
										<!-- comment-sub -->
										<!-- <ol class="comment-sub">
											<li class="comment">
												<div class="single_comment">
													<div class="comment-avatar">
														<div class="avatar">
															<img src="images/blog/avatar3.jpg" alt="">
														</div>
												   </div>
													<div class="comment-content">
														<div class="comment-name"><a href="#">John Doe</a><span>-</span><a href="#" class="comment-reply">Reply</a></div>
														<div class="comment-desc">23 November, 2014 at 12:48 pm</div>                                
														<div class="comment-text">
															<p>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in molestie neque, eget posuere risus. In mauris orci, imperdiet quis hendrerit eget, dapibus sed nisi.. 
															</p>
														</div>
													</div>
												</div>										
												<ol class="comment-sub">
													<li class="comment">
														<div class="single_comment">
															<div class="comment-avatar">
																<div class="avatar">
																	<img src="images/blog/avatar4.jpg" alt="">
																</div>
															</div>
															<div class="comment-content">
																<div class="comment-name"><a href="#">John Doe</a><span>-</span><a href="#" class="comment-reply">Reply</a></div>
																<div class="comment-desc">26 November, 2014 at 10:21 pm</div>
																<div class="comment-text">
																	<p>
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in molestie neque, eget posuere risus. In mauris orci, imperdiet quis hendrerit eget, dapibus sed nisi.. 
																	</p>
																</div>
															</div>
														</div>
													</li>
												</ol>
											</li>
										</ol> -->
										<!--End comment-sub-->
									</li>
									<?php } ?>
								</ol>
							</div>
							<!-- /comment List -->

							<?php
							if(isset($_POST['submit_cmt'])){
								$name = $_POST['name'];
								$email = $_POST['email'];
								$message = $_POST['cmt'];

								$cmt_insert_sql ="INSERT INTO `comments`(`c_uname`, `c_uemail`, `c_message`, `p_id`) 
													VALUES ('$name','$email','$message','$p_id')";
								$cmt_insert_rlt = mysqli_query($conn,$cmt_insert_sql);
								if($cmt_insert_rlt){
									echo "<div class='alert alert-success'>comment posted</div>";
									//header("Location:blog.php");

								}else{
									echo "<div class='alert alert-danger'>Something wents wrong</div>";
								}

							}
							
							?>
									
							<!-- Comment Section -->
							<div class="comments-section">								
								<h3>Leave a Comment</h3>
								<div class="comment-form">
									<form method="post" action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                                            </div>
                                            <div class="col-md-12">
                                                <textarea class="form-control" placeholder="Your Comment" rows="7" name="cmt"></textarea>
                                            </div>
                                            <div class="col-md-12 text-right">
                                                <button type="submit" class="btn btn-gray-border" name="submit_cmt">Send Comment</button>
                                            </div>
                                        </div>
                                    </form>
								</div>						
							</div>
							<!-- /Comment Section -->	
							<?php } ?>												
						</div>
					</div>	
					<!-- /Blog Post -->

					<!-- Right Sidebar -->					
				   <div class="col-md-4 col-sm-4">	
                    
                       <div class="widget widget-sidebar">
							<div class="search-box">
								<form>
									<input type="search" class="form-control"  placeholder="Search">
									<i class="fa fa-search"></i>
								</form>
							</div>
						</div>
                        
				  <!--Start popular Post -->
						<div class="widget-main">
								<h4>Recent Post</h4>
								<?php
								
								$rcnt_sql = "SELECT * FROM `posts` WHERE  `status`='approved' ORDER BY `created` LIMIT 5";
								$rcnt_rlt = mysqli_query($conn,$rcnt_sql);
								while($rcnt_row = mysqli_fetch_assoc($rcnt_rlt)){

								?>
								<div class="sidebar-widget clearfix">	
									<a href="#"><img src="images/blog/<?php echo $rcnt_row['p_photo']; ?>" alt=""></a>
									<p class="sidebar-widget-title"><a href="blog.php?post_id=<?php echo $rcnt_row['p_id']; ?>"><?php echo $rcnt_row['p_title']; ?></a></p>
									<p class="date"><?php echo $rcnt_row['created']; ?></p>
								</div>	
								<?php } ?>
						</div>	
						<!-- / popular Post -->
						
                        <!--start post categories-->
                        <div class="widget-main">
                             <h4>Top Categories</h4>
                            <div  class="post-categories">
                                <ul>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">WordPress</a></li>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Video</a></li>
                                <li><a href="#">Photography</a></li>
                               </ul>
                             </div>
                        </div>
                        <!--/ post categories-->
                    
						<!-- Text -->
						<!-- <div class="widget-main">	
							<h4>Text Widget </h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in molestie neque, eget posuere risus. In mauris orci, imperdiet quis hendrerit eget, dapibus sed nisi.. 
							</p>
						</div> -->
						<!-- /Text -->
						

						<!-- Tags -->
						<div class="widget-main">
						   <h4>Tags</h4>
							<div class="tags">
								<a href="">Web Design</a>
                                <a href="">Graphic Design</a>
                                <a href="">PHP</a>
                                 <a href="">Jquery</a>
                                <a href="">Wordpress</a>
                                <a href="">Animation</a>
                                <a href="">Audio</a>
                                <a href="">Photo Gallery</a>						
							</div>
						</div>
						<!-- /Tags -->
					</div>
					<!-- /right Sidebar -->
				</div> <!-- /row -->			
			</div>		
		</section>
		<!-- /blog -->

		<?php require_once "partials/footer.php"; ?>
