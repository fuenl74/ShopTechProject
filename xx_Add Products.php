<?php
// xx_Add Products.php - Page 4
// Written by:  Luis Fuentes, November 2020	

// Verify that program was called from Landing Page and LOGON
	require('xx_landing.php');
	require($pfx . '_verify_logon.php');
	require('xx_variables.php');
// Variables
	$pgm 		= 'xx_Add Products.php';
	$table1 	= 'producttype';	
	$table2 	= 'product';
	$bold		= "style='font-weight:bold'";
	$msg 				= NULL;
	$msg_color 			= 'black';
	$center		 		= "align='center'"; 
	
// Get Input
	if (isset($_POST['productid']))	$productid = $_POST['productid']; 	else $productid = NULL;
	if (isset($_POST['productname']))	$productname = $_POST['productname']; 	else $productname = NULL;
	if (isset($_POST['productdescription']))	$productdescription = $_POST['productdescription']; 	else $productdescription = NULL;
	if (isset($_POST['productprice']))	$productprice = $_POST['productprice']; 	else $productprice = NULL; 
	if (isset($_POST['producttypeid']))	$producttypeid = $_POST['producttypeid']; 	else $producttypeid = NULL;
	if (isset($_POST['task']))		$task 	 = $_POST['task']; 		else $task   = NULL;	
 
	
// Connect to MySQL and the BCS350 Database
	include('xx_mysqli_connect.php'); 	

if(isset($_POST['Add'])){
 
		if(($productid || $productname || $productdescription || $productprice || $producttypeid || $name) == NULL )
		{	$msg = "Fill in all the fields";	
			$msg_color='red';}
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
		$query = "INSERT INTO $table2 SET
					ProductTypeID 		= '$producttypeid',
					ProductName 		= '$productname',
					ProductDescription 	= '$productdescription',
					ProductPrice		= '$productprice',
					ProductImage		= '$name'";
		$result = mysqli_query($mysqli, $query);
		if (!$result) {
				$msg =  "QUERY failed [$query]: " . mysqli_error($mysqli);
				$msg_color = 'red';
			}
		else $msg = "Product $productid added ". $producttypeid. " "  . $productname . " " . $productdescription. " "  . $productprice. " "  . $name;
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  }
 
}	
// Process Input

 	switch($task)
	{ 
		case 'Clear':	$productname = $productdescription = $productprice = $producttypeid = NULL;	$msg = 'Form Cleared';	break; 
	}  
	
// Output Page  
	echo "<b>Add Products</b><br>\n
		  <p>If you want to add a product, please select the <a style='$pVariable'>Product Type</a> and then add the <a style='$pVariable'>Product Name, Product Description</a> and the <a style='$pVariable'>Product Price</a></p>
		  <br>\n
		  <style> 
			.dropdown-contentt { 
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
			.Butnn:hover	{
								background-color:rgb(200, 200, 250);
							}
			.Butnn{
								background-color:rgb(255, 255, 255);
								font-size:110%;
								font-weight:bold; 
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
	echo "<p><form action='xx.php?p=Add Products' method='POST' enctype='multipart/form-data' $bold>Product Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <input type='hidden' name='task' value='producttypeid'>
		  <select name='producttypeid'class='dropdown-contentt'>
		  <option value=''>SELECT</option>";
	while(list($ProductTypeID, $ProductTypeName) = mysqli_fetch_row($result)) {
		if ($ProductTypeID == $producttypeid) $se = 'SELECTED'; else $se = NULL;
		echo "<option value='$ProductTypeID' $se>$ProductTypeName</option>";
		}	
	echo "</select>"; 
// Process Query Results
	echo "<table>
			<tr><td $bold>Product Image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td class='Butnn'><input type='file' name='file' /> </td>
			</tr>
		   <tr><td $bold>Product Name</td>
			   <td><input type='text' name='productname' value='$productname' size='20'></td></tr>
		   <tr><td $bold>Product Description</td>
			   <td><input type='text' name='productdescription' value='$productdescription' size='30'></td></tr>
		   <tr><td $bold>Product Price</td>
			   <td><input type='text' name='productprice' value='$productprice' size='20'></td></tr></table>";
			   
// Output 
	echo "<p><table><tr>
			<td>
			<input type='submit' name='task' value='Clear' class='Butnn' ></td>
			<td><input type='submit' value='Add' name='Add' class='Butnn' ></td>
			</td></tr></table></form>"; 
// Message
	echo "<p><table><tr>
			<td $bold>MESSAGE: </td> 
			<td style='color:$msg_color;'>$msg</td>
			</tr></table>";

// End of Page	 

	mysqli_close($mysqli);
?>