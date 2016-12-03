<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="you can buy and sell your phone easy by there">
    <meta name="author" content="Bui Le Huynh">
    <title>Trade Mobile</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header	">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong style="color:#33CC66">TRADE</strong>MOBILE</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<?php
					if (isset($_SESSION['username'])){
						echo "<li><a href='#'>Hi, ".$_SESSION['username']."</a></li>";
						echo "<li><a href='logout.php'>Log out</a></li>";
					}else{
						echo "<li><a href='login.html'>Sign in</a></li><li><a href='signup.html'>Sign up</a></li>";
					}
					?>
                </ul>
				
                <form id="search" class="navbar-form" role="search" action="search.php" method="get">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Keyword Here ..." class="form-control" name="keyword">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
			
        </div>
        <!-- /.container-fluid -->
    </nav>
	<br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 bestproduct">
                <div class="main box-border">
				
                    <div id="mi-slider" class="mi-slider">
                        <ul id="price">
							<!--Price-->
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/dummyimg.png" alt="img01"><h4>Samsung Galaxy</h4>
								<p class="price">Price : <strong>$500</strong>  </p>
								<p class="quality">Quality : <strong>95%</strong></p>
								<p  class="age">Age : <strong>1 year</strong></p>
								<p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/dummyimg.png" alt="img02"><h4>Samsung Galaxy</h4>
								<p class="price">Price : <strong>$500</strong>  </p>
								<p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/dummyimg.png" alt="img03"><h4>Samsung Galaxy</h4>
								<p class="price">Price : <strong>$500</strong>  </p><p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/dummyimg.png" alt="img04"><h4>Samsung Galaxy</h4>
								<p class="price">Price : <strong>$500</strong>  </p><p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                        </ul>
                        <ul id="quality">
							<!--Quality-->
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/iphone.jpg" alt="img05"><h4>Iphone</h4><p class="price">Price : <strong>$500</strong>  </p><p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/iphone.jpg" alt="img06"><h4>Iphone</h4><p class="price">Price : <strong>$500</strong>  </p><p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/iphone.jpg" alt="img07"><h4>Iphone</h4><p class="price">Price : <strong>$500</strong>  </p><p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/iphone.jpg" alt="img08"><h4>Iphone</h4><p class="price">Price : <strong>$500</strong>  </p><p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                        </ul>
                        <ul id="age">
							<!--Age-->
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/IPhone_4.jpg" alt="img09"><h4>Iphone</h4><p class="price">Price : <strong>$500</strong>  </p><p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/IPhone_4.jpg" alt="img10"><h4>Iphone</h4><p class="price">Price : <strong>$500</strong>  </p><p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/IPhone_4.jpg" alt="img11"><h4>Iphone</h4><p class="price">Price : <strong>$500</strong>  </p><p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
							<li><a href="#">
                                <img src="assets/ItemSlider/images/IPhone_4.jpg" alt="img12"><h4>Iphone</h4><p class="price">Price : <strong>$500</strong>  </p><p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                        </ul>
                       
						<ul id="view">
							<!--Hot-->
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/dummyimg.png" alt="img12"><h4>Samsung Galaxy</h4><p class="price">Price : <strong>$500</strong>  </p><p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/dummyimg.png" alt="img13"><h4>Samsung Galaxy</h4><p class="price">Price : <strong>$500</strong>  </p><p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/dummyimg.png" alt="img14"><h4>Samsung Galaxy</h4><p class="price">Price : <strong>$500</strong>  </p><p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/dummyimg.png" alt="img15"><h4>Samsung Galaxy</h4><p class="price">Price : <strong>$500</strong>  </p><p class="quality">Quality : <strong>95%</strong></p><p  class="age">Age : <strong>1 year</strong></p><p  class="view">View : <strong>1000 view</strong></p>
                            </a></li>
                        </ul>
					
						<!--Loc san pham theo:-->
                        <nav class="navbar" data-toggle="collapse" data-target="#bs-example-navbar-collapse-12">
                            <a href="#">Price</a>
                            <a href="#">Quality</a>
                            <a href="#">Age</a>
              				<a href="#">View</a>
							
                        </nav>
                    </div>
                    
                </div>
                <br />
            </div>
            <!-- /.col: More Product -->
            
            <div class="col-md-2 text-center ">	
				
                <div id="sellphone" class="btn btn-danger">
					<a href="seller.php">
                        <h4> <i class="fa fa-money"></i>&nbsp;SELL MY PHONE</h4>	
					</a>
                </div>
				
				<br class="space"><br class="space"><br class="space"><br class="space"><br class="space"><br class="space"><br class="space">
				<br class="space"><br class="space"><br class="space">
				<a href="#_product"><div class="thumbnail moreproduct">	
					<h3 style="margin: 0;">MORE...</h3>
					<h1 class="fa fa-angle-double-down" style="margin: 0"></h1>			
                </div></a>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3">
                <div>
                    <p class="list-group-item active list-group-item-success">Brand</p>
                    <ul class="list-group">

                        <li class="list-group-item"><a href="#search">Iphone</a>
							
                        </li>
                        <li class="list-group-item"><a href="#search">Sumsung</a>
						
                        </li>
                        <li class="list-group-item"><a href="#search">LG</a>
					
                        </li>
                        <li class="list-group-item"><a href="#search">HTC</a>
                           
                        </li>
                        <li class="list-group-item"><a href="#search">Sony</a>
                        
                        </li>
						<li class="list-group-item"><a href="#search">Asus</a>
                        
                        </li>
						<li class="list-group-item"><a href="#search">Lenovo</a>
                          
                        </li>
						<li class="list-group-item"><a href="#search">Huewei</a>
                           
                        </li>
						<li class="list-group-item"><a href="#search">Xiaomi</a>
                         
                        </li>
						<li class="list-group-item"><a href="#search">Oppo</a>
                      
                        </li>
						<li class="list-group-item"><a href="#search">Q-mobile</a>
                       
                        </li>
						<li class="list-group-item"><a href="#search">Nokia</a>
                     
                        </li>
                    </ul>
                </div>
                <!-- /.div -->
				<!--Sort Property-->
                <div>
                    <p class="list-group-item active list-group-item-success">Sort</p>
                    <ul class="list-group">

                        <li class="list-group-item dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Price</a>
							<ul class="dropdown-menu">
                                <li><a href="#">By Price Low</a></li>
                                <li class="divider"></li>
                                <li><a href="#">By Price High</a></li>
                                <li class="divider"></li>
                                <li><a href="#">$30-$50</a></li>
                                <li class="divider"></li>
                                <li><a href="#">$50-$100</a></li>
								<li class="divider"></li>
                                <li><a href="#">$100-$200</a></li>
								<li class="divider"></li>
                                <li><a href="#">$200-$500</a></li>
								<li class="divider"></li>
                                <li><a href="#">$500-$1000</a></li>
								<li class="divider"></li>
                                <li><a href="#">> $2000</a></li>
                            </ul>	
						</li>
                        <li class="list-group-item dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Quality</a>
							<ul class="dropdown-menu">
                                <li class="divider"></li>
                                <li><a href="#">NEW</a></li>
                                <li class="divider"></li>
                                <li><a href="#">>95%</a></li>
								<li class="divider"></li>
                                <li><a href="#">>90%</a></li>
								<li class="divider"></li>
                                <li><a href="#">90%</a></li>
								
                            </ul>	
						</li>
                        <li class="list-group-item"><a href="#">Age</a></li>
						<li class="list-group-item"><a href="#">Lastest</li>
						<li class="list-group-item"><a href="#">View</li>
                    </ul>
                </div>
                <!-- /.div -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div>
                    <ol class="breadcrumb" id="_product">
                        <li><a href="#">Home</a></li>
                    </ol>
                </div>
                <!-- /.div -->
                <div class="row">
                    <div class="btn-group alg-right-pad">
                        <button type="button" class="btn btn-default"><strong id="count_item"></strong>items</button>
                        
                    </div>
                </div
                <!-- /.row -->
				<div id="_product">
					<!--Product-->
                        ;<?php
						include 'data_access_helper.php';
						$db = new DataAccessHelper;
						$db->connect();
						$tmp = $db->executeQuery("SELECT phonename, price, brand, quality, age, imglink FROM _product, _trade, _user WHERE _trade.idphone = _product.idphone and _user.id = _trade.iduser");
						if(mysqli_num_rows($tmp) > 0){

							while($row = mysqli_fetch_assoc($tmp)){
								echo "<div class='col-md-4 text-center col-sm-6 col-xs-6 product'>";
								echo "<div class='thumbnail product-box'>";
								echo "<img class='img' src='".$row["imglink"]."'/>";
								echo "<div class='caption'>";
								echo "<br>";
								echo "<h4><a href='#'>".$row["phonename"]." - ".$row["brand"]."</a></h4>";
								$quality;
								$age;
								switch($row["quality"]){
									case 1: $quality = "new"; break;
									case 2: $quality = "95%"; break;
									case 3: $quality = "91%"; break;
									case 4: $quality = "90%"; break;
								}
								switch($row["age"]){
									case 1: $age = "1 month"; break;
									case 2: $age = "3 months"; break;
									case 3: $age = "6 months"; break;
									case 4: $age = "1 year"; break;
									case 5: $age = "2 years"; break;
									case 6: $age = "5 years"; break;
								}
                                echo "<p class='price'>Price : <strong>$".$row["price"]."</strong></p><p class='quality'>Quality : <strong>".$quality."</strong></p><p  class='age'>Age : <strong>".$age."</strong></p>";
                                echo "<p><a href='#' class='btn btn-success' role='button'>Add To Cart</a></p>";
								echo "</div></div></div>";	
							}
						} else{
							echo "0 results";
					}
	
						$db->close();
?>
                </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <ul class="pagination alg-right-pad">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
                <!-- /.row -->
            </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
     <!--Footer -->   
    <!-- /.col -->
    <div class="col-md-12 end-box ">
        &copy; 2016 | &nbsp; All Rights Reserved | Design by: Bui Le Huynh (Lawliet)
    </div>
	</div>
    <!-- /.col -->
    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
	<!--my script-->
	<script src="assets/js/control.js"></script>
    <!--Slider JavaScript file  -->
    <script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="assets/ItemSlider/js/jquery.catslider.js"></script>
    <script>
        $(function () {

            $('#mi-slider').catslider();

        });
		</script>
</body>
</html>
