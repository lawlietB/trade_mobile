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
    <nav class="navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
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
						echo "<li><a href='myaccount.php'>Hi, ".$_SESSION['username']."</a></li>";
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
                    <button type="submit" class="btn btn-success">Search</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
			
        </div>
        <!-- /.container-fluid -->
    </nav>
	<br>
    <div class="container">
        <div class="row">
            <div class="col-md-2 text-center ">	
                <div id="sellphone" class="btn btn-danger">
					<a href="seller.php">
                        <h4> <i class="fa fa-money"></i>&nbsp;SELL MY PHONE</h4>	
					</a>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-3" id="_nav">
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
                        <li class="list-group-item"><a href="#">Time used</a></li>

                    </ul>
                </div>
                <!-- /.div -->
            </div>
            <!-- /.col -->
            <div class="col-md-9 ">
                <div>
                    <ol class="breadcrumb">
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
                <?php
					$per_page = 12;
					mysql_connect("localhost","root","");
					mysql_select_db("trademobile");
					//count product
					$res_cou = mysql_query("SELECT idphone from _product");
					$cou = mysql_num_rows($res_cou);
					if(isset($_GET["page"]))
						$page = $_GET["page"];
					else $page = 0;
					if($page=="" || $page < "1"|| $page=="1"){
						$page_num = 0;
					}
					else if($page > ceil($cou/$per_page)){
						$page_num =  ceil($cou/$per_page);
					}
					else{
						$page_num = ($page*$per_page) -	$per_page;
					}
					$res=mysql_query("SELECT phonename, price, brand, quality, age, imglink, idphone FROM _product limit $page_num, $per_page");
					while($row=mysql_fetch_array($res)){
						echo "<div class='col-md-4 text-center col-sm-6 col-xs-6'>";
								echo "<div class='thumbnail product-box' style='height:300px'>";
								echo "<img style='height:130px' src='".$row["imglink"]."'/>";
								echo "<div class='caption'>";
								echo "<br>";
								echo "<h4>".$row["phonename"]."<h4>";
								echo "<h5>$".$row["price"]."<h5>";
								echo '<form action="product.php" method="post"><button type="submit" class="btn btn-success" name="product" value='.$row["idphone"].'>Contact</button></form>';
								echo "</div></div></div>";
					}
				//count number of page
				$a = ceil($cou/$per_page); //a is number of page
				?>
					<div class="row">
						<ul class="pagination alg-right-pad">
							<?php
								for($b = 1; $b <= $a; $b++){
								?><li><a href="index.php?page=<?php echo $b;?>"> <?php echo $b." "; ?></a><?php	
							}
							?>
						</ul>
					</div>
				</div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
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
	<!--my script-->
	<script src="assets/js/control.js"></script>
    <!--Slider JavaScript file  -->
    <script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="assets/ItemSlider/js/jquery.catslider.js"></script>
    <script>
      
		</script>
</body>
</html>
