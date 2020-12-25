<?php
// xx_Products.php - ProductsPage
// Written by:  Luis Fuentes, November 2020		

// Verify that program was called from Landing Page and LOGON
	require('xx_landing.php');
	require('xx_variables.php');
//	require($pfx . '_verify_logon.php');	

	require('xx_variables.php');
// Variables
	$pgm 				= 'xx_Products.php';
	$table1 			= 'producttype';	
	$table2 			= 'product';
	$bold				= "style='font-weight:bold'";
	$msg 				= NULL;
	$msg_color 			= 'black';
	$center		 		= "align='center'"; 
	$ctgys				= array("Computer" => "Category", "Cellphone" => "Cellphone","TV" => "TV");	

// Connect to MySQL and the BCS350 Database
	include('xx_mysqli_connect.php');

// Get No of records

	
// Get Input Category
	if(isset ($_POST['ctgy'])) $ctgy = $_POST['ctgy']; else $ctgy = NULL;
	if ($ctgy == 'SELECT')  $ctgy = NULL;
	if ($ctgy != NULL) $where = "WHERE ProductTypeName = '$ctgy'";
	else $where = NULL;

// Output Page  
	echo "<style>
			#Product
			{
				background-color:white;
				  font-family: Arial, Helvetica, sans-serif;
				  border-collapse: collapse;
			}
			#Product td, #Product th
			{
				  border: 1px solid #ddd;
				  padding: 8px;
			}
			#Product tr:nth-child(even)
			{
				background-color: #f2f2f2;
			}

			#Product th {
				  padding-top: 12px;
				  padding-bottom: 12px;
				  text-align: center;
				  background-color: #4CAF50;
				  color: white;
			}
			.price
			{
				background-color:yellow;
				padding: 5px; 
			}
			#title
			{
				font-size:120%;
			}			
			.dropdown-content { 
			  color: black;
			  font-weight: bold;
			  font-family: roboto;
			  font-size: 110%;
			  background-color: white;
			  min-width: 160px;
			  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			  padding: 5px 14px;
			  z-index: 1;
			
			}
			.Butn:hover	{
							background-color:rgb(200, 200, 250);
						}
			.Butn{
					background-color: rgb(209, 239, 209);
					font-size:110%;
					font-weight:bold;
					font-family:roboto; 
					outline: 1px dashed blue;
				}
				
		  </style> 
		  ";
// CATEGORY DropDown
	echo " <div $center $bold><form action='xx.php?p=Products' method='post'><br>
	CATEGORY <select name='ctgy' onchange='this.form.submit()' class='dropdown-content'>
	<option>SELECT</option>";
	foreach($ctgys as $key => $value){
	if ($key == $ctgy) $se='SELECTED'; else $se = NULL;
	echo "<option $se>$key</option>\n";
	}
	echo "</select></div>";

// Products table  
	$query = "SELECT ProductID, ProductTypeName, ProductName, ProductDescription, ProductPrice, ProductImage FROM $table2 
				join $table1 on $table1.ProductTypeID = $table2.ProductTypeID $where  ";
	$result = mysqli_query($mysqli, $query);
	if (!$result) echo "Query Failed [$query]: " . mysqli_error($mysqli);
	echo "<p><div $bold $center id='title'>Products</div>
		  <table border='frame' rules='all' $center id='Product'><tr $bold>
		  <th>Product ID</th>
		  <th>Product Type</th>
		  <th>Product Name</th>
		  <th>Description</th>
		  <th>Image</th>
		  <th>Price</th>";
	if($logon)echo  "<th>UPDATE</th>";
	echo "</tr>";
	while(list($productid, $ptype, $pname, $pdescription, $pprice, $pimage) = mysqli_fetch_row($result)) {
		$image_src = "images/" . $pimage;
		$url= "xx.php?p=Update Products&ProductID=$productid";
		echo "<tr $center>
			  <td>$productid</td>
			  <td>$ptype</td>
			  <td>$pname</td>
			  <td>$pdescription</td>
			  <td $center><img src='$image_src' height='100px'></td>
			  <td $bold><a class='price'>$$pprice</a></td>";
		if($logon)echo  "<td><a href='$url' class='Butn'>UPDATE</a></td>";
		echo "</tr>";
		}
	echo "</table>";
 
	if (mysqli_num_rows($result) < 1) echo "<p><div $bold>No Products Found</div>";	 
// End of Page	 
	mysqli_close($mysqli);
?>