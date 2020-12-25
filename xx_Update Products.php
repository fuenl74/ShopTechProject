<?php
// xx_Update Products.php
// Written by:  Luis Fuentes, November 2020	

// Verify that program was called from Landing Page and LOGON
	require('xx_landing.php');
	require('xx_variables.php');
	require($pfx . '_verify_logon.php');	

// Connect to MySQL and the BCS350 Database
	include('xx_mysqli_connect.php'); 		
//	Variables

	$table1 	= 'producttype';	
	$table2 	= 'product';
	$bold		= "style='font-weight:bold'";
	$msg 				= NULL;
	$msg_color 			= 'black';
	$center		 		= "align='center'"; 
	
//	Get Input
	if (isset($_POST['productid']))	$productid = $_POST['productid']; 	else $productid = NULL;
	if (isset($_POST['productname']))	$productname = $_POST['productname']; 	else $productname = NULL;
	if (isset($_POST['productdescription']))	$productdescription = $_POST['productdescription']; 	else $productdescription = NULL;
	if (isset($_POST['productprice']))	$productprice = $_POST['productprice']; 	else $productprice = NULL; 
	if (isset($_POST['producttypeid']))	$producttypeid = $_POST['producttypeid']; 	else $producttypeid = NULL;
	if (isset($_POST['task']))		$task 	 = $_POST['task']; 		else $task   = NULL;	
	if (isset($_GET['ProductID']))		{$productid = $_GET['ProductID'];	$task = 'Show';}  
	// Process Input 
	if(isset($_POST['UPDATE'])){
		
		$query = "SELECT ProductID, ProductName, ProductDescription, ProductPrice, ProductTypeID 
						  FROM $table2
						  WHERE ProductID='$productid'";						  
		$result = mysqli_query($mysqli, $query);
	 	if(($productid || $productname || $productdescription || $productprice || $producttypeid) == NULL )
		{	$msg = "Fill in all the fields";	
			$msg_color='red';}
		elseif(mysqli_num_rows($result) < 1)
		{ 				
			$msg = "ProductID $productid invalid or not found."; 	
			$msg_color='red';
		}
	  $name = $_FILES['file']['name'];
	  $target_dir = "template/images/";
	  $target_file = $target_dir . basename($_FILES["file"]["name"]);

	  // Select file type
	  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	  // Valid file extensions
	  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
	  if( in_array($imageFileType,$extensions_arr) ){
	 
		 // Insert record		
			
				$query = "UPDATE $table2 SET
							ProductTypeID 		= '$producttypeid',
							ProductName 		= '$productname',
							ProductDescription 	= '$productdescription',
							ProductPrice		= '$productprice',
							ProductImage		= '$name'
							WHERE ProductID 	= '$productid'";
					 $result = mysqli_query($mysqli, $query);
					 if (!$result){ 
							$msg =  "QUERY failed [$query]: " . mysqli_error($mysqli);
							$msg_color = 'red';
					}
					 else $msg = "ProductID $productid Updated"; 
			
		 // Upload file
		 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

	  }
	 
	}
	switch($task)
	{ 	 
			case 'Clear':	$productid = $productname = $productdescription = $productprice = $producttypeid = NULL;	$msg = 'Form Cleared';	break;		
			
			case 'Show': 
				$query = "SELECT ProductID, ProductName, ProductDescription, ProductPrice, ProductTypeID 
						  FROM $table2
						  WHERE ProductID='$productid'";
				$result = mysqli_query($mysqli, $query);
				if (!$result || $productid == NULL)
				{
					echo "Query failed [$query] – " . mysqli_error($mysqli)."<br>";  
					$msg = "Query Failed, ProductID does not exist";
					$msg_color = 'red';
				}
				else {
					list($productid, $productname, $productdescription, $productprice, $producttypeid) = mysqli_fetch_row($result); 
						if($productid == NULL)
						{
						$msg = "Insert a valid ProductID";
						$msg_color = 'red';
						}else{
						$msg = "Row $productid found"; 
						}
					} 
				break;
			
			case 'Delete':
				$query = "DELETE FROM $table2
						  WHERE ProductID 	= '$productid'";
				$result = mysqli_query($mysqli, $query);
				if (!$result || ($productid == NULL)) {
					$msg = "Invalid OR inexistent ProductID ". mysqli_error($mysqli);
					$msg_color = 'red';
					}
				else {
					if (mysqli_num_rows($result) < 1) {
					$msg = "ProductID $productid not found."; 
					$msg_color='red';}
					else{
						$msg = "ProductID $productid deleted";
						$productid = $productname = $productdescription = $productprice = $producttypeid = $name = NULL;
						}
					}
				break;
		
	}

// Output Page  
	echo "<b>Update Products</b><br>\n"; 
	echo "<p>If you want to update a product, please provide the 
			<a style='$pVariable'>Product ID</a>, 
			<a style='$pVariable'>Product Type</a> and then add the 
			<a style='$pVariable'>Product Name, Product Description</a> and the 
			<a style='$pVariable'>Product Price.</a>
			<a style='$pVariable1'>(If you want to delete a record just provide the Product ID).</a></p> 
		  <style> 
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
			.RetButn:hover, .Butn:hover	{
								background-color:rgb(200, 200, 250);
								color: black;
							}
			.RetButn{
				color:white; 
				background-color:green; 
				font-weight:bold; 
				padding: 1em;
			}
			.Butn{
								background-color:rgb(255, 255, 255);
								font-size:110%;
								font-weight:bold; 
							}
				
		   #content{
			width: 50%;
			margin: 20px auto;
			border: 1px solid #cbcbcb;
		   } 
		   </style> 
		  ";
				
// Start the Form
	echo "<div $bold>Product Details</div>";

// Product Type Dropdown
	$query = "SELECT ProductTypeID, ProductTypeName 
			  FROM $table1";
	$result = mysqli_query($mysqli, $query);
	if (!$result) echo "Query Failed [$query]: " . mysqli_error($mysqli); 
	echo "<p><form action='xx.php?p=Update Products' 
			method='POST' enctype='multipart/form-data' $bold>";
	echo "Product Type
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <input type='hidden' name='task' value='producttypeid'>
		  <select name='producttypeid'class='dropdown-content'>
		  <option value=''>SELECT</option>";
	while(list($ProductTypeID, $ProductTypeName) = mysqli_fetch_row($result)) {
		if ($ProductTypeID == $producttypeid) $se = 'SELECTED'; else $se = NULL;
		echo "<option value='$ProductTypeID' $se>$ProductTypeName</option>";
		}	
	echo "</select>"; 
	
	
// Process Query Results
	echo "<table>
			<tr><td $bold>Product ID</td>
				<td><input type='text' name='productid' value='$productid' size='15'></td></tr>
			<tr><td $bold>Product Image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td class='Butn'><input type='file' name='file' /> </td>
			</tr>
		   <tr><td $bold>Product Name</td>
			   <td><input type='text' name='productname' value='$productname' size='20'></td></tr>
		   <tr><td $bold>Product Description</td>
			   <td><input type='text' name='productdescription' value='$productdescription' size='30'></td></tr>
		   <tr><td $bold>Product Price</td>
			   <td><input type='text' name='productprice' value='$productprice' size='20'></td></tr></table>";
			   
// Output 
	echo "<p><table><tr>
			<td><input type='submit' name='task' value='Show' class='Butn' ></td>
			<td><input type='submit' name='task' value='Clear' class='Butn' ></td>
			<td><input type='submit' name='task' value='Delete' class='Butn'></td>
			<td><input type='submit' value='UPDATE' name='UPDATE' class='Butn'></td>
			</tr></table></form>
			<p><a href='xx.php?p=Products'><button class='RetButn'>Return to Products Listing</button></a>"; 
// Message
	echo "<p><table><tr>
			<td $bold>MESSAGE: </td> 
			<td style='color:$msg_color;'>$msg</td>
			</tr></table>";

// End of Page	 

	mysqli_close($mysqli);
?>