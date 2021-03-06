<?php 
	session_start();
	if (!isset($_SESSION['username'])) {
	header('Location: login.html');
}
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
					<h1 class="page-head-line">FILL INFORMATION</h1>
					<h1 class="page-subhead-line">Fill your information and your phone</h1>
				</div>
			</div>
			<!--Information-->
			<form action="createpost.php" method='post' enctype="multipart/form-data">		
					<div class="col-md-10 col-sm-12 col-xs-12">
						<div class="panel panel-info">
							<div class="panel-heading">
								YOUR PHONE
							</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Phone Name</label></br>
                                <input class="form-control" type="text" name="phonename" id="phonename">
								<h6 id="checkphonename" style="color: red;"></h6>
                            </div>
							
							<div class="form-group">
                                <label>Brand</label><br>
                                <select name="type" id="brand">
									<option>Iphone</option>
									<option>Samsung</option>
									<option>LG</option>
									<option>HTC</option>
									<option>Sony</option>
									<option>Asus</option>
									<option>Lenovo</option>
									<option>Huewei</option>
									<option>Xiaomi</option>
									<option>Oppo</option>
									<option>Q-mobile</option>
									<option>Nokia</option>
								</select>
                            </div>
							<div class="form-group">
                                <label>Price</label><p>(use dollar)</p>
                                <input class="form-control" type="text" placeholder="100" name="price" id="price">
								<h6 id="checkprice" style="color: red;"></h6>
                            </div>
							<div class="form-group">
                                <label>Quality</label>
                                <select name="new">
									<option>new</option>
									<option>>95%</option>
									<option>>90%</option>
									<option>90%</option>
								</select>
                            </div>
							<div class="form-group">
                                <label>Time used</label>
                                <select name="age" id="age">
									<option>< 1 month</option>
									<option>< 3 months</option>
									<option>< 6 months</option>
									<option>< 1 year</option>
									<option>< 2 years</option>
									<option>< 5 years</option>
								</select>
                            </div>
							<div class="form-group choose_pic">
								<label class="control-label col-lg-3">Image Upload</label>
									<input type="file" name="imglink" id="img">
									<h6 id="checkimg" style="color: red;"></h6>
							</div>
							<div name="error" class="error"></div>
							
						</div>
					</div>
				<button type="submit" name="submit" class="btn btn-danger" id="info">Trade Now </button>
			</form>
			
		</div>
	</div>
        <!-- /.row -->
</div>
    <!-- /.container -->
	
     <!--Footer -->   
    <!-- /.col -->
    <div class="col-md-12 end-box ">
        &copy; 2016 | &nbsp; All Rights Reserved | Design by: Bui Le Huynh (Lawliet)<br>
		Email: binhnguyen2805@gmail.com<br>
		Phone: 0973154950
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
		
		$(function () {
            $('#info').hover(function(){
				if($('#phonename').val() == NULL || $('#price').val() == NULL || $('#img').val() == NULL){
					alert("You must fill all value");
					exit();
				}
				
			});
        });
		</script>
</body>
</html>
