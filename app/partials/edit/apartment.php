<!-- <div class="row"> -->			
  <div class="col-md-11 col-xs-12 col-sm-12"><br>  	
  	<div class="alert alert-info" role="alert">
  		<?php
			if(isset($errMsg)){
				echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
			}
		?>
  		<h2 class="text-center">Apartment Room</h2>
  		<form action="" method="POST">
		  	 <div class="row">
		  	 	<div class="col-md-4">
			  	  <div class="form-group">
				    <label for="fullname">Full Name</label>
				     <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data['id']; ?>">
				    <input type="text" class="form-control" id="fullname" placeholder="Full Name" name="fullname" value="<?php echo $data['fullname']?$data['fullname']:''; ?>" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="mobile">Mobile</label>
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="mobile" title="10 digit mobile number" placeholder="10 digit mobile number" name="mobile" value="<?php echo $data['mobile']?$data['mobile']:''; ?>" required>
				  </div>
				 </div>

				<div class="col-md-4">
				  <div class="form-group">
				    <label for="alternat_mobile">Alternat Mobile</label>
				    <input type="text" class="form-control" pattern="^(\d{10})$" id="alternat_mobile" title="10 digit mobile number" placeholder="10 digit mobile number" value="<?php echo $data['alternat_mobile']?$data['alternat_mobile']:''; ?>">
				  </div>
				</div>
			</div>

			<div class="row">
		  	 	<div class="col-md-4">
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $data['email']?$data['email']:''; ?>" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="plot_number">Plot Number/Home Number</label>
				    <input type="text" class="form-control" id="plot_number" placeholder="Plot Number/Home Number" name="plot_number" value="<?php echo $data['plot_number']?$data['plot_number']:''; ?>" required>
				  </div>
				 </div>

				 <div class="col-md-4">
				  <div class="form-group">
				    <label for="apartment_name">Apartment Name</label>
				    <input type="text" class="form-control" id="apartment_name" placeholder="Apartment Name" name="apartment_name" value="<?php echo $data['apartment_name']?$data['apartment_name']:''; ?>" required>
				  </div>
				 </div>
			</div>

			<div class="row">
				<div class="col-md-4">
			  <div class="form-group">
			    <label for="country">Country</label>
			    <input type="country" class="form-control" id="country" placeholder="Country" name="country" value="<?php echo $data['country']?$data['country']:''; ?>" required>
			  </div>
			  </div>

			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="state">State</label>
			    <input type="state" class="form-control" id="state" placeholder="State" name="state" value="<?php echo $data['state']?$data['state']:''; ?>" required>
			  </div>
			  </div>
			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="city">City</label>
			    <input type="city" class="form-control" id="city" placeholder="City" name="city" value="<?php echo $data['city']?$data['city']:''; ?>" required>
			  </div>
			  </div>
			 </div>
			 
			 <div class="row">
			 	<div class="col-md-4">
				 <div class="form-group">
				    <label for="ap_number_of_plats">Flat Number</label>
				    <input type="ap_number_of_plats" class="form-control" id="Plat Number" placeholder="ap_number_of_plats" name="ap_number_of_plats" value="<?php echo $data['ap_number_of_plats']?$data['ap_number_of_plats']:''; ?>" required>
				  </div>
				</div>
				<div class="col-md-4">
				 <div class="form-group">
				    <label for="rooms">Rooms</label>
				    <input type="text" class="form-control" id="rooms" placeholder="Rooms" name="rooms" value="<?php echo $data['rooms']?$data['rooms']:''; ?>" required>
				  </div>
				</div>
				<div class="col-md-4">
				    <div class="form-group">
					    <label for="ownership">Owner/Rented </label>
					    <select class="form-control" id="ownership" name="own">
					      <option value="owner" <?php if($data['own'] == 'owner'){echo 'selected';}?>>Owner</option>
					      <option value="rented" <?php if($data['own'] == 'rented'){echo 'selected';}?>>Rented</option>
					    </select>
					 </div>
			  	</div>
			</div>


			<div class="row">
				<div class="col-md-4">
				  <div class="form-group">
				    <label for="area">Area</label>
				    <input type="area" class="form-control" id="area" placeholder="Area" name="area" value="<?php echo $data['area']?$data['area']:''; ?>">
				  </div>
			  	</div>

			 	<div class="col-md-4">
				    <div class="form-group">
					    <label for="purpose">Purpose</label>
					    <select class="form-control" id="purpose" name="purpose">
					      <option value="Residential" <?php if($data['purpose'] == 'Residential'){echo 'selected';}?>>Residential</option>
					      <option value="Commercial" <?php if($data['purpose'] == 'Commercial'){echo 'selected';}?>>Commercial</option>
					    </select>
					 </div>
			  	</div>

			  	<div class="col-md-4">
				    <div class="form-group">
					    <label for="floor">Floor</label>
					    <select class="form-control" id="floor" name="floor">
					      <option value="Ground Floor" <?php if($data['floor'] == 'Ground Floor'){echo 'selected';}?>>Ground Floor</option>
					      <option value="1st" <?php if($data['floor'] == '1st'){echo 'selected';}?>>1st</option>
					      <option value="2nd" <?php if($data['floor'] == '2nd'){echo 'selected';}?>>2nd</option>
					      <option value="3rd" <?php if($data['floor'] == '3rd'){echo 'selected';}?>>3rd</option>
					      <option value="4th" <?php if($data['floor'] == '4th'){echo 'selected';}?>>4th</option>
					      <option value="5th" <?php if($data['floor'] == '5th'){echo 'selected';}?>>5th</option>
					      <option value="6th" <?php if($data['floor'] == '6th'){echo 'selected';}?>>6th</option>
					      <option value="7th" <?php if($data['floor'] == '7th'){echo 'selected';}?>>7th</option>
					      <option value="8th" <?php if($data['floor'] == '8th'){echo 'selected';}?>>8th</option>
					    </select>
					 </div>
			  	</div>  
			</div>

			 <!-- <div class="row">			 			 	
				<div class="col-md-10"> 
					<div class="form-group">
						<a onclick="addMoreRows(this.form);" class="btn btn-info btn-sm">Add More(Plat Number/Description)</a>

						<div id="addedRows"></div>
					</div>
				</div>
			</div> -->

			 <div class="row">
			 	<div class="col-md-4">
				 <div class="form-group">
				    <label for="rent">Rent</label>
				    <input type="rent" class="form-control" id="rent" placeholder="Rent" name="rent" value="<?php echo $data['rent']?$data['rent']:''; ?>">
				  </div>
				</div>
			  	<div class="col-md-4">
			  		<div class="form-group">
					    <label for="deposit">Deposit</label>
					    <input type="deposit" class="form-control" id="deposit" placeholder="Deposit" name="deposit" value="<?php echo $data['deposit']?$data['deposit']:''; ?>">
			  		</div>
			  	</div>
			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="accommodation">Facilities</label>
			    <input type="accommodation" class="form-control" id="accommodation" placeholder="Facilities" name="accommodation" value="<?php echo $data['accommodation']?$data['accommodation']:''; ?>">
			  </div>
			  </div>
			  </div>

			   <div class="row">
			 	<div class="col-md-4">
			  <div class="form-group">
			    <label for="description">Description</label>
			    <input type="description" class="form-control" id="description" placeholder="Description" name="description" value="<?php echo $data['description']?$data['description']:''; ?>">
			  </div>
			   </div>
			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="landmark">Landmark</label>
			    <input type="landmark" class="form-control" id="landmark" placeholder="landmark" name="landmark" value="<?php echo $data['landmark']?$data['landmark']:''; ?>">
			  </div>
			   </div>
			  <div class="col-md-4">
			  <div class="form-group">
			    <label for="address">Address</label>
			    <input type="address" class="form-control" id="address" placeholder="Address" name="address" value="<?php echo $data['address']?$data['address']:''; ?>" required>
			  </div>
			   </div>
			    </div>				  
			  
			    <div class="row">
			    	<div class="col-4">
			 		 <div class="form-group">
					    <label for="vacant">Vacant/Occupied</label>
					    <select class="form-control" id="vacant" name="vacant">
					      <option value="1" <?php if($data['vacant'] == '1'){echo 'selected';}?>>Vacant</option>
					      <option value="0" <?php if($data['vacant'] == '0'){echo 'selected';}?>>Occupied</option>
					    </select>
					  </div>
			 	</div>
			 	
				<!-- <div class="col-md-4">
				  <div class="form-group">
				    <label for="description">Image</label>
				    <input type="file" class="form-control">
				  </div>
				  </div> -->
			  </div>			
			  <button type="submit" class="btn btn-primary" name='register_apartment' value="register_apartment">Submit</button>
			</form>	
			</div>			
  	</div>
<!-- </div> -->	