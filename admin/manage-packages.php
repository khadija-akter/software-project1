<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 
	?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin</title>

<!-- //lined-icons -->
</head> 
<body>
   

<div>	
				<!-- tables -->
				
				<div>
					<div>
					  <h2>Manage Packages</h2>
					    <table id="table">
						<thead>
						  <tr>
						  <th>#</th>
							<th >Name</th>
							<th>Type</th>
							<th>Location</th>
							<th>Price</th>
							<th>Creation Date</th>
							<th>Action</th>
						  </tr>
						</thead>
						<tbody>
<?php $sql = "SELECT * from TblTourPackages";
$query = $dbh -> prepare($sql);
//$query -> bindParam(':city', $city, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>		
						  <tr>
							<td><?php echo htmlentities($cnt);?></td>
							<td><?php echo htmlentities($result->PackageName);?></td>
							<td><?php echo htmlentities($result->PackageType);?></td>
							<td><?php echo htmlentities($result->PackageLocation);?></td>
							<td>$<?php echo htmlentities($result->PackagePrice);?></td>
							<td><?php echo htmlentities($result->Creationdate);?></td>
							<td><a href="update-package.php?pid=<?php echo htmlentities($result->PackageId);?>"><button type="button" >View Details</button></a></td>
						  </tr>
						 <?php $cnt=$cnt+1;} }?>
						</tbody>
					  </table>
					</div>
				  </table>

				
			</div>
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>

<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
						<?php include('includes/sidebarmenu.php');?>
							
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
<?php } ?>