<?php if($_SESSION['login'])
{?>
<div class="top-header">
	<div class="container">
	

<link href="mystyle2.css" rel='stylesheet' type='text/css' />


	<ul  data-wow-delay=".5s">
		
				<li><a href="logout.php" >Logout</a></li>
			<li><a href="profile.php">My Profile</a></li>
				<li><a href="change-password.php">Update Password</a></li>
			<li ><a href="tour-history.php">My Tour</a></li>
				<li ><a href="index.php">Home</a></li>
		
			
		
		</ul>
		<ul data-wow-delay=".5s"> 
						
		
        </ul>
















		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="top-header">
	<div class="container">
		


<link href="mystyle.css" rel='stylesheet' type='text/css' />


<ul class="p">
  <li class="regi"><a href="#" data-toggle="modal" data-target="#myModal" >Registar</a></li> 
			<li class="log"><a href="#" data-toggle="modal" data-target="#myModal4" >Log In</a></li>
				<li class="hm"><a href="admin/index.php">Admin Panel</a></li>
</ul>

		<div class="clearfix"></div>
	</div>
</div>
<?php }?>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			
           
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							
								<li><a href="package-list.php">Packages</a></li>
							
							
								
								<?php if($_SESSION['login'])
{?>
								<?php } else { ?>
								<li><a href="enquiry.php"> Contact</a>  </li>
								<li><a href="page.php?type=aboutus">About</a></li>
								<?php } ?>










								<div class="clearfix"></div>

						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->






			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>