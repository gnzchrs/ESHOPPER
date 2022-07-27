<?php
	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="jandgdb";
	 $port = 3306;

	$conn= mysqli_connect($server_name, $username, $password, $database_name,$port);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home | J&G Stores</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +63 936 3892 744</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> gonz@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<!--
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>
						</div>
						-->

					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li name = "log"><a href="login.php"><i class="fa fa-lock"></i> Logout</a>
								</li>
								<!-- <li><a href="register.html"><i class="fa fa-lock"></i> Register</a> -->
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<!--<li><a href="product-details.html">Product Details</a></li> 
											!!!!! for individual products
										-->
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.php">Cart</a></li> 
                                    </ul>
                                </li> 
                                <!--
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								-->
								<li><a href="./webs/contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>J&G</span>-STORE</h1>
									<h2>Sportswear available for all of you.</h2>
									<p>Shop now with just one tap from your favorite prodicts. Fast delivery from our store to your door step!</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>J&G</span>-STORE</h1>
									<h2>Less Shipping.</h2>
									<p>We offer different payment method including CASH ON DELIVERY! SHOP NOW! </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>J&G</span>-STORE</h1>
									<h2>Affordable promos waiting.</h2>
									<p>Get your first 10% discount by just buying 5 items in any of your favorite products.</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="images/home/pricing.png" class="pricing" alt="" /> -->
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#outdorecration">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Outdoor Recreation
										</a>
									</h4>
								</div>	
								<div id="outdorecration" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Bikes </a></li>
											<li><a href="#">Bikes Parts</a></li>
											<li><a href="#">Bike Accessories</a></li>
											<li><a href="#">Tents</a></li>
											<li><a href="#">Sleeping Gear </a></li>
											<li><a href="#">Backpacks </a></li>
											<li><a href="#">Survival Kits</a></li>
											<li><a href="#">Knives and Tools </a></li>
											<li><a href="#">Electric Scooters</a></li>
											<li><a href="#">Camp Furniture</a></li>
											<li><a href="#">Camp Kitchen </a></li>
											<li><a href="#">Under Armour </a></li>
											<li><a href="#">Skateboards </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportshoes">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sports Shoes
										</a>
									</h4>
								</div>
								<div id="sportshoes" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Mens - Basketball Shoes</a></li>
											<li><a href="#">Mens - Running Shoes</a></li>
											<li><a href="#">Mens - Sports Sneakers</a></li>
											<li><a href="#">Mens - Water Shoes</a></li>
											<li><a href="#">Mens - Hiking Shoes</a></li>
											<li><a href="#">Mens - Cycling Shoes</a></li>
											<li><a href="#">Womens - Running Shoes</a></li>
											<li><a href="#">Womens - Sports Sneakers</a></li>
											<li><a href="#">Womens - Water Shoes</a></li>
											<li><a href="#">Womens - Hiking Shoes</a></li>
											<li><a href="#">Womens - Badminton Shoes</a></li>
											<li><a href="#">Womens - Training Shoes</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportsapparel">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sports Apparel
										</a>
									</h4>
								</div>
								<div id="sportsapparel" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Pants</a></li>
											<li><a href="#">Compression</a></li>
											<li><a href="#">T-shirt and Tops</a></li>
											<li><a href="#">Jackets</a></li>
											<li><a href="#">Swimwear</a></li>
											<li><a href="#">Jerseys</a></li>
											<li><a href="#">Bags</a></li>
											<li><a href="#">Accessories</a></li>
											<li><a href="#">Sports Bras</a></li>
											<li><a href="#">Rashguards</a></li>
											<li><a href="#">Shorts</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#exerciseandfitness">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Exercise and Fitness Equipment
										</a>
									</h4>
								</div>
								<div id="exerciseandfitness" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Yoga Mats</a></li>
											<li><a href="#">Water Bottles</a></li>
											<li><a href="#">Treadmills</a></li>
											<li><a href="#">Exercise Bikes</a></li>
											<li><a href="#">Weight</a></li>
											<li><a href="#">Supports and Braces</a></li>
											<li><a href="#">Step Machines</a></li>
											<li><a href="#">Sauna Suits</a></li>
											<li><a href="#">Pull-Up and Push-Up Bars</a></li>
											<li><a href="#">Running Belt</a></li>
											<li><a href="#">Exercise Balls</a></li>
											<li><a href="#">Core and Abdominal Trainers</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportsequipment">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sports Equipment
										</a>
									</h4>
								</div>
								<div id="sportsequipment" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Basketball</a></li>
											<li><a href="#">Boxing Gloves</a></li>
											<li><a href="#">Swimming</a></li>
											<li><a href="#">Diving and Snorkeling</a></li>
											<li><a href="#">Badminton</a></li>
											<li><a href="#">Tennis</a></li>
											<li><a href="#">Volleyball</a></li>
											<li><a href="#">Football</a></li>
											<li><a href="#">Golf</a></li>
											<li><a href="#">Baseball</a></li>
											<li><a href="#">Gymnastics</a></li>
											<li><a href="#">Cheerleading</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#teammerchandise">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Team Merchandise/Fan Shop
										</a>
									</h4>
								</div>
								<div id="teammerchandise" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Basketball</a></li>
											<li><a href="#">Formula 1</a></li>
											<li><a href="#">International Football Clubs</a></li>
											<li><a href="#">National Football Teams</a></li>
											<li><a href="#">Tennis</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#musicalinstruments">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Musical Instruments
										</a>
									</h4>
								</div>
								<div id="musicalinstruments" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Guitars</a></li>
											<li><a href="#">Keyboards and Pianos</a></li>
											<li><a href="#">Drums and Percussion</a></li>
											<li><a href="#">Instrument Accessories</a></li>
											<li><a href="#">Woodwind</a></li>
											<li><a href="#">Band and Orchestra</a></li>
											<li><a href="#">DJ, Karaoke and Electronic Music</a></li>
											<li><a href="#">Traditional Instruments</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#books">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Books
										</a>
									</h4>
								</div>
								<div id="books" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">English Books</a></li>
											<li><a href="#">Local Books</a></li>
											<li><a href="#">Chinese Books</a></li>
											<li><a href="#">Calendars</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#music">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Music
										</a>
									</h4>
								</div>
								<div id="music" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">OPM</a></li>
											<li><a href="#">Hip-Hop</a></li>
											<li><a href="#">Pop</a></li>
											<li><a href="#">R and B</a></li>
											<li><a href="#">Religion</a></li>
											<li><a href="#">Jazz</a></li>
											<li><a href="#">Rock</a></li>
											<li><a href="#">Alternative Rock</a></li>
											<li><a href="#">Rap</a></li>
											<li><a href="#">Reggae</a></li>
											<li><a href="#">Country</a></li>
											<li><a href="#">Blues</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#movies">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Movies
										</a>
									</h4>
								</div>
								<div id="movies" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Action</a></li>
											<li><a href="#">Comedy</a></li>
											<li><a href="#">Drama</a></li>
											<li><a href="#">Educational</a></li>
											<li><a href="#">Horror</a></li>
											<li><a href="#">Romance</a></li>
											<li><a href="#">Romantic Comedy</a></li>
											<li><a href="#">Box Sets</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#magazines">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Magazines
										</a>
									</h4>
								</div>
								<div id="magazines" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Women's Lifestyle Magazines</a></li>
											<li><a href="#">Men's Lifestyle Magazines</a></li>
											<li><a href="#">Mom and Babies Magazines</a></li>
											<li><a href="#">Teen Magazines</a></li>
											<li><a href="#">Health and Beauty Magazines</a></li>
											<li><a href="#">Tourism Magazines</a></li>
											<li><a href="#">Entertainment Magazines</a></li>
											<li><a href="#">Lifestyle Magazines</a></li>
											<li><a href="#">Home Deco Magazines</a></li>
											<li><a href="#">Culinary Magazines</a></li>
											<li><a href="#">Automotive Magazines</a></li>
											<li><a href="#">Sports Magazines</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							
						</div><!--/category-products-->
					
						<!--<div class="brands_products">brands_products
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Brand1</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Brand2</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Brand3</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Brand4</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Brand5</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Brand6</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Brand7</a></li>
								</ul>
							</div>
						</div>/brands_products-->
						
						<!-- <div class="price-range">price-range
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div>price-range -->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

						<!--putol ni-->

						<?php
							$query = "select * from products where prod_feat = 1;";
							$result = $conn -> query($query);

							if($result-> num_rows > 0){

								while ($row = $result->fetch_assoc()){
								$prod_id = $row['prod_id'];
						?>
						

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $row['img'] ?>" alt="" height="242px" width="225px"/>
											<h2><?php echo $row['prod_price'] ?></h2>
											<p><?php echo $row['prod_name'] ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo $row['prod_price'] ?></h2>
												<p><?php echo $row['prod_name'] ?></p>
												<!-- <a href="index.html" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
												<!-- <script>alert("Add")</script>; -->
												<form method="POST" action="index.php" style="color: orange;">
													<a class="btn btn-default add-to-cart">	
														<input type="submit" name="check<?php echo$prod_id?>" value="Add to Cart" >
													<i class="fa fa-shopping-cart"></i>
													</a>
												</form>
												<?php
													if(isset($_POST['check'.$row['prod_id']])){
														$pr_id = $row['prod_id']; 
														$pr_price = $row['prod_price']; 
														$pr_quantity = 1; 
														$nam = $row['prod_name'];
														$im = $row['img'];
														$total = 1 * $pr_price;

														$addcart = "select * from cart where prod_id = '$pr_id';";
														$result1 = mysqli_query($conn, $addcart);
														

														if($result1-> num_rows > 0){

																	$insertart = "UPDATE cart SET quantity = quantity + '$pr_quantity', total = total + '$total' where cart.prod_id = '$pr_id';";
																	$result3 = mysqli_query($conn, $insertart);
																	echo '<script>alert("Added")</script>';
																}
														else if($result1-> num_rows == 0){

																	$insertart = "INSERT INTO cart (prod_id, prod_price, quantity, total) VALUES ($pr_id, $pr_price, $pr_quantity, $pr_price);";
																	$result3 = mysqli_query($conn, $insertart);
																	echo '<script>alert("Added")</script>';
																}	
													}
												?>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="product-details.php?prod_id=<?php echo$row['prod_id'];?>"><i class="fa fa-plus-square"></i>Quick View</a></li>
									</ul>
								</div>
							</div>
						</div>

						<?php			
								}
							}
							else{
								echo "nosers";

							}

							$conn -> close();


						?>
					</div><!--features_items-->
					
					<!--<div class="category-tab">category-tab
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#pants" data-toggle="tab">Pants</a></li>
								<li><a href="#bshoes" data-toggle="tab">Basketball Shoes</a></li>
								<li><a href="#bags" data-toggle="tab">Bags</a></li>
								<li><a href="#treadmills" data-toggle="tab">Treadmills</a></li>
								<li><a href="#book" data-toggle="tab">Books</a></li>								
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="pants" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/pants/pants1.jpg" alt="" height="183px" width="161px" />
												<h2>₱902.50</h2>
												<p>HABAGAT Trailite Trek Pants</p><br><br>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/pants/pants2.jpg" alt="" height="183px" width="161px" />
												<h2>₱2,577.00</h2>
												<p>Nike Men's Tech Pack Running Tights - Black</p><br>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/pants/pants3.jpg" alt="" height="183px" width="161px" />
												<h2>₱209.00</h2>
												<p>MOSO Men's Striped Training Pants Sports Track Pants UF078</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/pants/pants4.jpg" alt="" height="183px" width="161px" />
												<h2>₱98.01</h2>
												<p>NK Men's Athletic Tights Sports GYM Compression Wear</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade active in" id="bshoes" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/shoes/shoes1.jpg" alt="" height="183px" width="161px" />
												<h2>₱2,697.00</h2>
												<p>Nike Men's KD Trey 5 VII Basketball Shoes - Black</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/shoes/shoes2.jpg" alt="" height="183px" width="161px" />
												<h2>₱3,080.00</h2>
												<p>adidas BASKETBALL Pro Boost Low Shoes Unisex Grey FX9241</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/shoes/shoes3.jpg" alt="" height="183px" width="161px" />
												<h2>₱1,724.25</h2>
												<p>World Balance GAME TIME Men's Basketball Shoes (Black)</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/shoes/shoes4.jpg" alt="" height="183px" width="161px" />
												<h2>₱1,499.00</h2>
												<p>361 Degrees Men's New Fashion Professional Middle-Top Anti-slip Cushioning Basketball Shoes</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade active in" id="bags" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/bags/bag1.jpg" alt="" height="183px" width="161px" />
												<h2>₱1,255.50</h2>
												<p>Under Armour UA Undeniable Sackpack 2.0</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/bags/bag2.jpg" alt="" height="183px" width="161px" />
												<h2>₱2,444.00</h2>
												<p>Nike Elite Pro Basketball Backpack - University Red</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/bags/bag3.jpg" alt="" height="183px" width="161px" />
												<h2>₱1,500.00</h2>
												<p>adidas Essentials Logo Duffel Bag Extra Small Unisex Black GN2034</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/bags/bag4.jpg" alt="" height="183px" width="161px" />
												<h2>₱1,097.78</h2>
												<p>Reebok Convertible 2.0 Unisex Training Grip Bag (Black)</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade active in" id="treadmills" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/threadmill/mill1.jpg" alt="" height="183px" width="161px" />
												<h2>₱7,150.00</h2>
												<p>Electric treadmill 2.5 hp + with shock absorbing system</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/threadmill/mill2.jpg" alt="" height="183px" width="161px" />
												<h2>₱18,521.00</h2>
												<p>XIAOMI WalkingPad K12 2-in-1 Smart Foldable Treadmill</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/threadmill/mill3.jpg" alt="" height="183px" width="161px" />
												<h2>₱24,995.00</h2>
												<p>Toby's Sports Ovicx Q1 Treadmill</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/threadmill/mill4.jpg" alt="" height="183px" width="161px" />
												<h2>₱7,150.00</h2>
												<p>Yeesall Treadmill 2.5 hp + with shock absorption system</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade active in" id="book" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/books/book1.jpg" alt="" height="183px" width="161px" />
												<h2>₱99.00</h2>
												<p>Mini-book: Higit Kaysa Ginto</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/books/book2.jpg" alt="" height="183px" width="161px" />
												<h2>₱280.00</h2>
												<p>Veggietales: Growing Day by Day (365 Daily Devos for Boys)</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/books/book3.jpg" alt="" height="183px" width="161px" />
												<h2>₱280.00</h2>
												<p>The Multiplication Challenge</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/books/book4.jpg" alt="" height="183px" width="161px" />
												<h2>₱99.00</h2>
												<p>The Gift of Leadership Book 1 (Mini-book)</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							
							
							
						</div>
					</div>category-tab-->
					
					<!--<div class="recommended_items">recommended_items
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/books/book3.jpg" alt="" height="255px" width="127px" />
													<h2>₱280.00</h2>
													<p>The Multiplication Challenge</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/bags/bag3.jpg" alt="" height="255px" width="127px"  />
													<h2>₱1,500.00</h2>
													<p>adidas Essentials Logo Duffel Bag Extra Small Unisex Black GN2034</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/featured/prod1.1.jpg" alt="" height="255px" width="127px"/>
													<h2>₱5,800.00</h2>
													<p>Naturehike Ultralight Bear 2 Tent</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/featured/prod2.1.jpg" alt="" height="255px" width="127px"/>
													<h2>₱3,854.00</h2>
													<p>Nike Men's LeBron Witness V EP Basketball Shoes - Lime Glow</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/featured/prod5.1.jpg" alt="" height="255px" width="127px"/>
													<h2>₱2,943.00</h2>
													<p>Global GL - 444 54 Key Electronic Keyboard w/ D - Stand</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/featured/prod4.1.jpg" alt="" height="255px" width="127px"/>
													<h2>₱120.00</h2>
													<p>Magnetic Back Shoulder Lumbar Support Posture Correction Belt</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div>/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>J&G</span> Store</h2>
							<p>Jhudel : parag. here insert</p>
						</div>
					</div>
					<!-- <div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div> -->
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>Pangdan, City of Naga, Cebu, Philippines 6037</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quick Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 J&G store Inc. All rights reserved.</p>
						
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>