<div class="container">
	<!-- row -->
	<div class="container-fluid">
		<div class="d-flex justify-content-between align-items-center flex-wrap">
			<div class="card-action coin-tabs mb-2">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#">All Packages</a>
					</li>
				</ul>
			</div>
			<div class="d-flex align-items-center mb-2 flex-wrap">
                <button type="button" class="btn btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalLong">Add Package</button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Create New Package</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Please Fill All Field!</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="basic-form">
                                                <form class="form-valide-with-icon needs-validation" method="post"">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="validationCustomUsername">Package Code</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                            <input type="text" class="form-control" id="validationCustomUsername" name="package_code" placeholder="Enter a package code" required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="validationCustomUsername">Package Size</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                            <input type="text" class="form-control" id="validationCustomUsername" name="package_size" placeholder="Enter a package size" required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="validationCustomUsername">Package Amount</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                            <input type="number" class="form-control" id="validationCustomUsername" name="package_amount" placeholder="Enter the package price" required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="validationCustomUsername">Estate Name</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                            <input type="text" class="form-control" id="validationCustomUsername" name="estate_name" placeholder="Enter estate name" required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="validationCustomUsername">Location</label>
                                                        <div class="input-group">
                                                        <button class="btn btn-secondary" type="button">Location</button>
                                                        <select name="location_id" class="default-select form-control wide">
                                                            <option value="" selected>Choose...</option>
                                                            <?php foreach ($adminCl->getAllLocations() as $location): ?>
                                                            <option value="<?php echo $location["id"]; ?>"><?php echo $location["location_name"]; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="dlab-password">Color Code*</label>
                                                        <div class="input-group transparent-append">
                                                        <div class="example">
                                                            <input type="text" name="color_code" class="complex-colorpicker form-control" value="#364e29">
                                                        </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                                            <label class="form-check-label" for="invalidCheck2">
                                                            I Agree to Create New Package
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="createPackageButton" class="btn me-2 btn-secondary">Submit</button>
                                                    <button class="btn btn-light" data-bs-dismiss="modal">cancel</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body p-0">
						<div class="tab-content">	
							<div class="tab-pane active show" id="AllGuest">
								<div class="table-responsive">
                                    <?php
                                    if (isset($_SESSION["createPackageError"])) {
                                        echo "<p>" . htmlspecialchars($_SESSION["createPackageError"]) . "</p>";
                                    }
                                    unset($_SESSION["createPackageError"]);
                                    ?>
									<table class="table card-table display mb-4 shadow-hover table-responsive-lg" id="guestTable-all4">
										<thead>
											<tr>
												<th class="bg-none">
													<div class="form-check style-1">
														<input class="form-check-input" type="checkbox" value="" id="checkAll5">
													</div>
												</th>
												<th>Package Code</th>
												<th>package Size</th>
												<th>Amount</th>
												<th>Estate Name</th>
												<th>Location</th>
												<th class="text-center">Action</th>
												<th class="bg-none"></th>
											</tr>
										</thead>
										<tbody>
                                        <?php foreach ($adminCl->getAllPackages() as $package): ?>
											<tr>
												<td>
													<div class="form-check style-1">
														<input class="form-check-input" type="checkbox" value="">
													</div>
												</td>
												<td>
													<div class="concierge-bx d-flex align-items-center" style="cursor: pointer; transition: background-color 0.3s ease-in-out;">
														<!-- <a href="user-details.php">
															<img class="me-3 rounded profile-img" src="public/assets/images/avatar/2.jpg" alt="Guest Avatar" 
																style="transition: transform 0.6s ease-in-out, box-shadow 0.3s ease-in-out;" />
														</a> -->
														<div>
															<h5 class="fs-16 mb-0 text-nowrap">
																<a class="text-black hover-text" href="javascript:void(0);" 
																style="transition: transform 0.3s ease-in-out; color: inherit;">
																<?php echo $package['package_code']; ?>
																</a>
															</h5>
															<!-- <span class="text-primary fs-14">#ABJ-00002</span> -->
														</div>
													</div>
												</td>

												<td class="text-nowrap">
													<span>200SQM</span>
												</td>
												<td>
													<div>
														<h5 class="text-nowrap"><?php echo $package["package_amount"]?></h5>
													</div>
												</td>
												<td>
													<div>
														<h5 class="text-nowrap"><?php echo $package['estate_name']; ?></h5>
													</div>
												</td>
												<td class="request">
														<h5 class="text-nowrap"><?php echo $package['location_name']; ?></h5>
												</td>
											
												<td>
													<div class="request">
														<a href="./viewsubscriptions.php?packageId=<?php echo $package['id'];?>" class="btn btn-md text-secondary">View Subscription</a>
													</div>
												</td>
												<td>
													<div class="dropdown dropend">
														<a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																<path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
																<path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
															</svg>
														</a>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</td>
											</tr>
                                        <?php endforeach; ?>
										</tbody>
									</table>
								</div>	
							</div>	
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>