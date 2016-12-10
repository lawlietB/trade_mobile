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
	<style>
		table, td	{
			border: 1px solid black;
			padding-top: 7px;
			padding-bottom: 7px;
		}
	</style>
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
					<h1 class="page-head-line">Information</h1>
					<h1 class="page-subhead-line">My account</h1>
				</div>
			</div>
			<!--Information-->
			<?php 
				$username = $_SESSION['username'];
				mysql_connect("localhost","root","");
				mysql_select_db("trademobile");
				$sql = mysql_query("SELECT _user.username, password, phone, email, address FROM _user WHERE username = '$username'");
				$row=mysql_fetch_array($sql);
			?>
	<div class="col-md-10 col-sm-12 col-xs-12">
		<div class="panel panel-info" id="myinfo">
			<div class="panel-heading">My information</div>
				<div class="panel-body form-horizontal">
<form class="form-horizontal" action="myaccount.php" method="post" role="form">
  <div class="form-group">
    <label class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control myinfor" readonly="true" name="name" value="<?php echo $row["username"];?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control myinfor" readonly="true" name="phone" value="<?php echo $row["phone"];?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control myinfor" readonly="true" name="email" value="<?php echo $row["email"];?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control myinfor" readonly="true" name="address" value="<?php echo $row["address"];?>">
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="btn btn-success" id="changeacc">Change</div>
	  <button type="submit" class="btn btn-danger" id="done" name="submit">Done</button>
    </div>
  </div>
</form>
</div></div></div>
<?php
if(isset($_POST['submit'])){
	mysql_connect("localhost","root","");
	mysql_select_db("trademobile");
	$username = $_SESSION['username'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	mysql_query("UPDATE _user SET phone='$phone' WHERE username='$username'");
	mysql_query("UPDATE _user SET email='$email' WHERE username='$username'");
	mysql_query("UPDATE _user SET address='$address' WHERE username='$username'");
	mysql_query("UPDATE _user SET username='$name' WHERE username='$username'");
	header('Location:myaccount.php');
}
?>
<div class="col-md-10 col-sm-12 col-xs-12">
	<div class="panel panel-info">
		<div class="panel-heading">My Phone</div>
			<div class="panel-body">
				<div class="form-group">
				<table class="col-md-12 col-sm-12 col-xs-12">
				<tr>
					<td style="background-color: #DFF0D8;"><center><b>Phone name<b></center></td>
					<td style="background-color: #DFF0D8;"><center><b>Price<b></center></td>
					<td style="background-color: #DFF0D8;"><center><b>Brand<b></center></td>
					<td style="background-color: #DFF0D8;"><center><b>Quality<b></center></td>
					<td style="background-color: #DFF0D8;"><center><b>Time used<b></center></td>
					<td style="background-color: #DFF0D8;"><center><b><b></center></td>
				</tr>
				<?php
				$_sql = mysql_query("SELECT phonename, price, brand, quality, age, imglink, _trade.idphone FROM _product, _trade WHERE _product.idphone = _trade.idphone and _trade.username = '$username'");
					while($row=mysql_fetch_array($_sql)){
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
					$age='near 1 month';
				}
				else if($row['age'] == 2){
					$age='near 3 months';
				}
				else if($row['age'] == 3){
					$age='near 6 months';
				}
				else if($row['age'] == 4){
					$age='near 1 year';
				}
				else if($row['age'] == 5){
					$age='near 2 years';
				}
				else if($row['age'] == 6){
					$age='near 5 years';
				}
						echo "<tr><td>".$row["phonename"]."</td><td><center>".$row["price"]."</center></td><td><center>".$row["brand"]."</center></td><td><center>".$quality."</center></td><td><center>".$age."</center></td>";
						echo '<td><center><button type="submit" class="btn btn-danger" id="'.$row["phonename"].'">Del	</button></center></td></tr>';
					}
				?>
				</table>
				</div>
			</div>
		</div>
	</div>

				
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
			$('#done').click(function(){
				$('.myinfor').attr('readonly', true);
				$('#done').addClass('disabled');	
			});
        });
		$(function () {	
			$('#changeacc').click(function(){
				$('.myinfor').attr('readonly', false);
				$('#done').removeClass('disabled');	
			});
		});

		
		
		</script>
</body>
</html>
