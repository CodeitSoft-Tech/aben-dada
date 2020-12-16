<?php

   include("includes/db_conn.php");
   include("includes/header.php"); 

 ?>

				<div class="main-panel">
			    <div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Insert Listings</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">			
					<div class="row row-card-no-pd">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row card-tools-still-right">
										<h4 class="card-title">Listing Information</h4>
									</div>
								</div>
								<div class="card-body">
									
									
									<form class="form-horizontal" method="post" action="insert_listing.php">
										<h4 style="font-weight: bold; font-size: 20px;">General Information :</h4>
										<hr>
										<div class="form-group">
											<label>Listing Title</label>
											<input type="text" class="form-control" name="listing_title" placeholder="property name" required>
										</div>

										<div class="form-group">
										   <label>Category</label>
										   <select name="listing_category" class="form-control">
											<option disabled selected>Select Category</option>
												<?php
													$select_cat = "SELECT * FROM list_categories";
													$run_cat = mysqli_query($db, $select_cat);

													while($row_cat = mysqli_fetch_array($run_cat))
													{
														$cat_id = $row_cat['cat_id'];
														$cat_title = $row_cat['cat_title'];

														echo "
																<option value='$cat_id'>$cat_title</option>

														     ";
													}

												?>
											</select>
										</div>
										
										<div class="form-group">
											<label>Keywords</label>
											<input type="text" name="keywords" placeholder="Keywords should be separated by commas" class="form-control" required>
										</div>
															
									   		
										<div class="form-group">
											<label>Website</label>
											<input type="text" name="website" placeholder="Enter Website address" class="form-control">
										</div>
									

										<div class="form-group">
											<label>Price</label>
											<input type="text" name="price" placeholder="Property price" class="form-control" required>
										</div>

										<div class="form-group">
											<label>Phone Number</label>
											<input type="number" name="contact" placeholder="example 0541234566" class="form-control" required>
										</div>

										<div class="form-group">
											<label>Email</label>
											<input type="email" name="email" placeholder="Enter your email address" class="form-control">
										</div>

										<div class="form-group">
											<label>Amenities</label>
											<input type="text" name="amenities" placeholder="Example; tap water, toilet, etc.." class="form-control" required>
										</div>

										<div class="form-group">
											<label>Property Description</label>
											<textarea class="form-control" name="list_desc" required>
												
											</textarea>
										</div>


										
										<h4 style="font-weight: bold; font-size: 20px; margin-top: 30px">Location :</h4>
										<hr>

											<div class="form-group">
											<label>Location</label>
											<select name="listing_location" class="form-control">
											<option disabled selected>Select Location</option>
												<?php
													$select_loc = "SELECT * FROM list_location";
													$run_loc = mysqli_query($db, $select_loc);

													while($row_loc = mysqli_fetch_array($run_loc))
													{
														$loc_id = $row_loc['location_id'];
														$loc_title = $row_loc['location_title'];

														echo "
																<option value='$loc_id'>$loc_title</option>

														     ";
													}

												?>
											</select>
										</div>

										<div class="form-group">
										   <label>Region</label>
										   <select name="list_region" class="form-control">
											<option disabled selected>Select Region</option>
												<?php
													$select_reg = "SELECT * FROM list_region";
													$run_reg = mysqli_query($db, $select_reg);

													while($row_reg = mysqli_fetch_array($run_reg))
													{
														$reg_id = $row_reg['reg_id'];
														$reg_title = $row_reg['reg_title'];

														echo "
																<option value='$reg_id'>$reg_title</option>

														     ";
													}

												?>
											</select>
										</div>

										<div class="form-group">
											<label>Address /Landmark</label>
											<input type="text" name="address" placeholder="Enter either digital address or any popular place near your property" class="form-control" required>
										</div>

										<div class="form-group">
											<label>Listing Status</label>
											<select class="form-control" name="list_status">
												<option disabled selected>Select Status</option>
												<option value="Sale">Sale</option>
												<option value="Rent">Rent</option>
											</select>
										</div>

										<h4 style="font-weight: bold; font-size: 20px; margin-top: 30px">Gallery :</h4>
										<hr>

										<div class="form-group">
										<label>Property Image 1 </label>
										<input type="file" name="property_img1" class="form-control" required>
									    </div>

									    <div class="form-group">
										<label>Property Image 2</label>
										<input type="file" name="property_img2" class="form-control" required>
									    </div>

									    <div class="form-group">
										<label>Property Image 3 </label>
										<input type="file" name="property_img3" class="form-control" required>
									    </div>

									    <h4 style="font-weight: bold; font-size: 20px; margin-top: 30px">Social Networks :</h4>
										<hr>
										<div class="form-group">
											<label>Facebook</label>
											<input type="text" name="facebook" placeholder="Facebook URL" class="form-control">
										</div>
										<div class="form-group">
											<label>Twitter</label>
											<input type="text" name="twitter" placeholder="Twitter URL" class="form-control">
										</div>
										<div class="form-group">
											<label>Instagram</label>
											<input type="text" name="instagram" placeholder="Instagram URL" class="form-control">
										</div>
										<div class="form-group">
											<label>Linkedin</label>
											<input type="text" name="linkedin" placeholder="Linkedin URL" class="form-control">
										</div>

										<div class="form-group">
											<button type="submit" class="btn btn-primary" name="btn_submit" style="text-transform: uppercase;">Submit Listing</button>
										</div>
									
										
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include("includes/footer.php"); ?>
		</div>
	</div>
	<?php include("includes/footer_links.php"); ?>

	<?php

		if(isset($_POST['btn_submit']))
		{
			$list_title = mysqli_real_escape_string($db, $_POST['listing_title']);
			$list_cat   = mysqli_real_escape_string($db, $_POST['listing_category']);
			$keyword    = mysqli_real_escape_string($db, $_POST['keywords']);
			$website    = mysqli_real_escape_string($db, $_POST['website']);
			$price      = mysqli_real_escape_string($db, $_POST['price']);
			$phone      = mysqli_real_escape_string($db, $_POST['contact']);
			$email      = mysqli_real_escape_string($db, $_POST['email']);
			$amenities  = mysqli_real_escape_string($db, $_POST['amenities']);
			$list_desc  = mysqli_real_escape_string($db, $_POST['list_desc']);
			$list_loc   = mysqli_real_escape_string($db, $_POST['listing_location']);
			$address    = mysqli_real_escape_string($db, $_POST['address']);
			$list_region = mysqli_real_escape_string($db, $_POST['list_region']);
			$list_status = mysqli_real_escape_string($db, $_POST['list_status']);
			$facebook    = mysqli_real_escape_string($db, $_POST['facebook']);
			$twitter     = mysqli_real_escape_string($db, $_POST['twitter']);
			$instagram   = mysqli_real_escape_string($db, $_POST['instagram']);
			$linkedin    = mysqli_real_escape_string($db, $_POST['linkedin']); 

			// image processing
			$property_img1 = $_FILES['property_img1']['name'];
			$property_img2 = $_FILES['property_img2']['name'];
			$property_img3 = $_FILES['property_img3']['name'];

			$tmp_name1 = $_FILES['property_img1']['tmp_name'];
			$tmp_name2 = $_FILES['property_img2']['tmp_name'];
			$tmp_name3 = $_FILES['property_img3']['tmp_name'];

			move_uploaded_file($tmp_name1,"admin_area/listing_images/$property_img1");
			move_uploaded_file($tmp_name2,"admin_area/listing_images/$property_img2");
			move_uploaded_file($tmp_name3,"admin_area/listing_images/$property_img3");
 

			$insert_listing = "INSERT INTO listings(cat_id, location_id, reg_id, list_title, list_price, list_address, list_contact, list_email, list_website, list_keywords, list_amenities, list_img1, list_img2, list_img3, facebook_account, twitter_account, instagram_account, linkedin_account, list_desc, list_status)
			VALUES('$list_cat', '$list_loc','$list_region', '$list_title', '$price', '$address','$phone', '$email', '$website', '$keyword','$amenities','$property_img1', '$property_img2', '$property_img3', '$facebook', '$twitter', '$instagram', '$linkedin', '$list_desc', '$list_status')";

			$run_listing = mysqli_query($db, $insert_listing);

			if($run_listing)
			{
				echo "<script>alert('Property inserted successfully')</script>";
				echo "<script>document.location='view_listing.php'</script>";
			}

 

		}


	?>