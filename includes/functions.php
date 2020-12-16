<?php

	include("includes/db_conn.php");

	// Get Product Categories

	function getProductCat()
	{
		global $db;

		$select_cat = "SELECT * FROM product_categories";
	    $run_cat = mysqli_query($db, $select_cat);

		   while($row_cat = mysqli_fetch_array($run_cat))
				{
					$cat_id = $row_cat['cat_id'];
				    $cat_title = $row_cat['cat_name'];

					 echo " <option value='$cat_id'>$cat_title</option>";
				}

	}


	// Get Product Category with Icon
		function getProdCatIcon()
		{
			global $db;

			$select_cat = "SELECT * FROM product_categories";
		    $run_cat    = mysqli_query($db, $select_cat);

			 while($row_cat = mysqli_fetch_array($run_cat))
				   {
					  $cat_id = $row_cat['cat_id'];
					  $cat_title = $row_cat['cat_name'];
					  $cat_icon = $row_cat['cat_icon'];

					echo "
							<div class='col-lg-2 col-md-4 col-sm-12'>
							  <div class='category_box'>
								<a href='listing_grid_sidebar.php'>
								 <div class='category_icon'>
								  <i class='$cat_icon'></i>
								  </div>
								<div class='category_info'>
							     <h5 style='text-transform: uppercase;'>$cat_title</h5>
								</div>
								</a>
							  </div>
						   </div>
					    ";
		}
	}

	// Get Product Location 
	function getLocation()
	{
		global $db;

		$select_loc = "SELECT * FROM locations";
		$run_loc = mysqli_query($db, $select_loc);

		while($row_loc = mysqli_fetch_array($run_loc))
		{
			$loc_id = $row_loc['location_id'];
			$loc_title = $row_loc['location_name'];

			echo "<option value='$loc_id'>$loc_title</option>";	
		}
	}



?>