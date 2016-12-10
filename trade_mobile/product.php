<?php 
	session_start();
?> 
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
					<ul class="nav navbar-nav navbar-right">
           
					<?php
					if (isset($_SESSION['username'])){
						echo "<li><a href='myaccount.php'>Hi, ". $_SESSION['username']."</a></li>";
						echo "<li><a href='logout.php'>Log out</a></li>";
					}else{
						echo "<li><a href='login.html'>Sign in</a></li><li><a href='signup.html'>Sign up</a></li>";
					}
					?>
                
                </ul>
                </ul>
                <form class="navbar-form" role="search" action="search.php" method="get">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Keyword Here ..." class="form-control" name="keyword">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-success">Search</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="row">
            <div class="col-md-3">
                <div>
                    <p class="list-group-item active list-group-item-success">Brand</p>
                    <ul class="list-group">

                        <li class="list-group-item" style="padding:0px;"><form action="search.php" method="get"><input style="padding:10px; padding-right:78%; border: 0px; margin: 0px;" type="submit" name="keyword" value="Iphone" class="btn btn-default option"></input></form>
							
                        </li>
                        <li class="list-group-item" style="padding:0px;"><form action="search.php" method="get"><input style="padding:10px; padding-right:72.5%; border: 0px; margin: 0px;" type="submit" name="keyword" value="Samsung" class="btn btn-default option"></input></form>
						
                        </li>
                        <li class="list-group-item" style="padding:0px;"><form action="search.php" method="get"><input style="padding:10px; padding-right:89.5%; border: 0px; margin: 0px;" type="submit" name="keyword" value="LG" class="btn btn-default option"></input></form>
					
                        </li>
                        <li class="list-group-item" style="padding:0px;"><form action="search.php" method="get"><input style="padding:10px; padding-right:85.5%; border: 0px; margin: 0px;" type="submit" name="keyword" value="HTC" class="btn btn-default option"></input></form>
                           
                        </li>
                        <li class="list-group-item" style="padding:0px;"><form action="search.php" method="get"><input style="padding:10px; padding-right:84%; border: 0px; margin: 0px;" type="submit" name="keyword" value="Sony" class="btn btn-default option"></input></form>
                        
                        </li>
						<li class="list-group-item" style="padding:0px;"><form action="search.php" method="get"><input style="padding:10px; padding-right:84%; border: 0px; margin: 0px;" type="submit" name="keyword" value="Asus" class="btn btn-default option"></input></form>
                        
                        </li>
						<li class="list-group-item" style="padding:0px;"><form action="search.php" method="get"><input style="padding:10px; padding-right:78%; border: 0px; margin: 0px;" type="submit" name="keyword" value="Lenovo" class="btn btn-default option"></input></form>
                          
                        </li>
						<li class="list-group-item" style="padding:0px;"><form action="search.php" method="get"><input style="padding:10px; padding-right:77%;; border: 0px; margin: 0px;" type="submit" name="keyword" value="Huewei" class="btn btn-default option"></input></form>
                           
                        </li>
						<li class="list-group-item" style="padding:0px;"><form action="search.php" method="get"><input style="padding:10px; padding-right:78.5%;; border: 0px; margin: 0px;" type="submit" name="keyword" value="Xiaomi" class="btn btn-default option"></input></form>
                         
                        </li>
						<li class="list-group-item" style="padding:0px;"><form action="search.php" method="get"><input style="padding:10px; padding-right:82%;; border: 0px; margin: 0px;" type="submit" name="keyword" value="Oppo" class="btn btn-default option"></input></form>
                      
                        </li>
						<li class="list-group-item" style="padding:0px;"><form action="search.php" method="get"><input style="padding:10px; padding-right:72.5%; border: 0px; margin: 0px;" type="submit" name="keyword" value="Q-mobile" class="btn btn-default option"></input></form>
                       
                        </li>
						<li class="list-group-item" style="padding:0px;"><form action="search.php" method="get"><input style="padding:10px; padding-right:81.5%; border: 0px; margin: 0px;" type="submit" name="keyword" value="Nokia" class="btn btn-default option"></input></form>
                     
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
                                <li><a href="index.html#_product">By Price Low</a></li>
                                <li class="divider"></li>
                                <li><a href="index.html#_product">By Price High</a></li>
                                <li class="divider"></li>
                                <li><a href="index.html#_product">$30-$50</a></li>
                                <li class="divider"></li>
                                <li><a href="index.html#_product">$50-$100</a></li>
								<li class="divider"></li>
                                <li><a href="index.html#_product">$100-$200</a></li>
								<li class="divider"></li>
                                <li><a href="index.html#_product">$200-$500</a></li>
								<li class="divider"></li>
                                <li><a href="index.html#_product">$500-$1000</a></li>
								<li class="divider"></li>
                                <li><a href="index.html#_product">> $2000</a></li>
                            </ul>	
						</li>
                        <li class="list-group-item dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Quality</a>
							<ul class="dropdown-menu">
                                <li class="divider"></li>
                                <li><a href="index.html#_product">NEW</a></li>
                                <li class="divider"></li>
                                <li><a href="index.html#_product">>95%</a></li>
								<li class="divider"></li>
                                <li><a href="index.html#_product">>90%</a></li>
								<li class="divider"></li>
                                <li><a href="index.html#_product">90%</a></li>
                            </ul>	
						</li>
                        <li class="list-group-item"><a href="index.html#_product">Time used</a></li>

                    </ul>
                </div>
                <!-- /.div -->
            </div>
		<div class="col-md-9">
			<div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                    </ol>
                </div>
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-head-line">Information product and seller</h1>
					<h1 class="page-subhead-line">You must contact to seller</h1>
				</div>
			</div>
			<!--Information-->
			<?php 
				$idphone = $_POST['product'];
				mysql_connect("localhost","root","");
				mysql_select_db("trademobile");
				$sql = mysql_query("SELECT phonename, price, brand, quality, age, imglink, _user.username, password, phone, email, address FROM _product, _trade, _user WHERE _trade.username = _user.username and _product.idphone = _trade.idphone and _product.idphone = '$idphone'");
				$row=mysql_fetch_array($sql);
				echo '<div class="col-md-8 col-sm-12 col-xs-12">';
				echo '<div class="panel panel-info">';
				echo '<div class="panel-heading">PHONE</div>';
				echo '<div class="panel-body"><div class="form-group">';
				echo "<img style='width: 370px' src='".$row["imglink"]."'/>";
				echo "<p>Phone Name: ".$row["phonename"]." </p>";
				echo "<p>Brand: ".$row["brand"]." </p>";
				echo "<p>Price: $".$row["price"]." </p>";
				//set quality
				if($row['quality'] == 1){
					$quality='New';
				}
				else if($row['quality'] == 2){
					$quality='95% - 100%';
				}
				else if($row['quality'] == 3){
					$quality='90% - 95%';
				}
				else if($row['quality'] == 4){
					$quality='90%';
				}
				//set time used
				if($row['age'] == 1){
					$age='I used it near 1 month';
				}
				else if($row['age'] == 2){
					$age='I used it near 3 months';
				}
				else if($row['age'] == 3){
					$age='I used it near 6 months';
				}
				else if($row['age'] == 4){
					$age='I used it near 1 year';
				}
				else if($row['age'] == 5){
					$age='I used it near 2 years';
				}
				else if($row['age'] == 6){
					$age='I used it near 5 years';
				}
				
				echo "<p>Quality: ".$quality." </p>";
				echo "<p>Time used: ".$age." </p>";
				echo "</div></div></div></div>";
				
				echo '<div class="col-md-4 col-sm-12 col-xs-12">';
				echo '<div class="panel panel-info">';
				echo '<div class="panel-heading">Seller</div>';
				echo '<div class="panel-body"><div class="form-group" id="sellerinfo">';
				echo "<p>Name: ".$row["username"]." </p>";
				echo "<p>Phone: ".$row["phone"]." </p>";
				echo "<p>Email: ".$row["email"]." </p>";
				echo "<p>Address: ".$row["address"]." </p>";
				echo "</div></div>";
				echo '<center><button id="show" class="btn btn-success">Show info</button></center>';
				echo "</div></div>";
			?>
				
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
    <!--Slider JavaScript file  -->
    <script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="assets/ItemSlider/js/jquery.catslider.js"></script>
    <script>
        $(function () {

            $('#mi-slider').catslider();

        });
		$(function(){
				$('#sellerinfo').hide();
		});
		$(function(){
			$("#show").click(function(){
				$('#sellerinfo').toggle();
			});
		});
		</script>
</body>
</html>
