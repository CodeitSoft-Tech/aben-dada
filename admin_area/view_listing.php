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
									<div class="table-responsive">
										<table id="multi-filter-select" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>No.</th>
													<th>Name</th>
													<th>Category</th>
													<th>Location</th>
													<th>Region</th>
													<th>Price</th>
													<th>Address</th>
													<th>Phone Number</th>
													<th>Email</th>
													<th>Website</th>
													<th>Keywords</th>
													<th>Amenities</th>
													<th>Image 1</th>
													<th>Image 2</th>
													<th>Image 3</th>
													<th>Facebook Account</th>
													<th>Twitter Account</th>
													<th>Instagram Account</th>
													<th>Linkedin Account</th>
													<th>Description</th>
													<th>Status</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>No.</th>
													<th>Name</th>
													<th>Category</th>
													<th>Location</th>
													<th>Region</th>
													<th>Price</th>
													<th>Address</th>
													<th>Phone Number</th>
													<th>Email</th>
													<th>Website</th>
													<th>Keywords</th>
													<th>Amenities</th>
													<th>Image 1</th>
													<th>Image 2</th>
													<th>Image 3</th>
													<th>Facebook Account</th>
													<th>Twitter Account</th>
													<th>Instagram Account</th>
													<th>Linkedin Account</th>
													<th>Description</th>
													<th>Status</th>
												</tr>
											</tfoot>
											<tbody>
												<?php
													$select_list ="SELECT * FROM listings";
													$run_list = mysqli_query($db, $select_list);

												 if(mysqli_num_rows($run_list))
                    								
                    								{

													while($row_list = mysqli_fetch_array($run_list))
													{
														$list_id    = $row_list['list_id'];
														$list_title = $row_list['list_title'];
														$cat_id	    = $row_list['cat_id'];
														$loc_id	    = $row_list['location_id'];
														$reg_id     = $row_list['reg_id'];
														$price      = $row_list['list_price'];
														$address    = $row_list['list_address'];
														$contact    = $row_list['list_contact'];
														$email      = $row_list['list_email'];
														$website    = $row_list['list_website'];
														$keyword    = $row_list['list_keywords'];
														$amenities  = $row_list['list_amenities'];
														$list_img1  = $row_list['list_img1'];
														$list_img2  = $row_list['list_img2']; 
														$list_img3  = $row_list['list_img3'];
														$fb_acc		= $row_list['facebook_account'];
														$tw_acc		= $row_list['twitter_account'];
														$ins_acc	= $row_list['instagram_account'];
														$lin_acc	= $row_list['linkedin_account'];
														$desc 		= $row_list['list_desc'];
														$status     = $row_list['list_status'];


														// Displaying Cat Name
													$select_cat = "SELECT * FROM list_categories WHERE cat_id = '$cat_id'";
													$run_cat    = mysqli_query($db, $select_cat);
													$row_cat	= mysqli_fetch_array($run_cat);
													$cat_title  = $row_cat['cat_title']; 
													// Displaying Loc Name
													$select_loc = "SELECT * FROM list_location WHERE location_id  = '$loc_id'";
													$run_loc    = mysqli_query($db, $select_loc);
													$row_loc	= mysqli_fetch_array($run_loc);
													$loc_title  = $row_loc['location_title'];
													// Displaying Reg Name
													$select_reg = "SELECT * FROM list_region WHERE reg_id  = '$reg_id'";
													$run_reg    = mysqli_query($db, $select_reg);
													$row_reg	= mysqli_fetch_array($run_reg);
													$reg_title  = $row_reg['reg_title'];  

													?>
													
													<tr>
														<td><?php echo $list_id;  ?></td>
														<td><?php echo $list_title;  ?></td>
														<td><?php echo $cat_title;  ?></td>
														<td><?php echo $loc_title;  ?></td>
														<td><?php echo $reg_title;  ?></td>
														<td><?php echo $price;  ?></td>
														<td><?php echo $address;  ?></td>
														<td><?php echo $contact;  ?></td>
														<td><?php echo $email;  ?></td>
														<td><?php echo $website;  ?></td>
														<td><?php echo $keyword;  ?></td>
														<td><?php echo $amenities;  ?></td>

														<td><img  width="60" height="60" src="listing_images/<?php echo $list_img1; ?>" alt="<?php echo $list_title;  ?>"></td>
														<td><img  width="60" height="60" src="listing_images/<?php echo $list_img2; ?>" alt="<?php echo $list_title;  ?>"></td>
														<td><img  width="60" height="60" src="listing_images/<?php echo $list_img3; ?>" alt="<?php echo $list_title;?>"></td>
														<td><?php echo $fb_acc;  ?></td>
														<td><?php echo $tw_acc;  ?></td>
														<td><?php echo $ins_acc;  ?></td>
														<td><?php echo $lin_acc;  ?></td>
														<td><?php echo $desc;  ?></td>
														<td><?php echo $status;  ?></td>
													</tr>
												<?php } } ?>
											</tbody>
										</table>
									</div>
									
									
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

