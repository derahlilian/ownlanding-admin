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
                                                <form class="form-valide-with-icon needs-validation" method="post" action="/ownlanding-admin/controllers/Administrator.php">
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
                                                            <input type="color" name="color_code" class="complex-colorpicker form-control" value="#364e29">
                                                        
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                                            <label class="form-check-label" for="invalidCheck2">
                                                            I Agree to Create New Package
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="createPackage" class="btn me-2 btn-secondary">Submit</button>
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
														
														<div>
															<h5 class="fs-16 mb-0 text-nowrap">
																<a class="text-black hover-text" href="javascript:void(0);" 
																style="transition: transform 0.3s ease-in-out; color: inherit;">
																<?php echo $package['package_code']; ?>
																</a>
															</h5>
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
														<a href="/ownlanding-admin/controllers/Administrator.php?packageId=<?php echo $package['id'];?>" class="btn btn-md text-secondary">View Subscription</a>
													</div>
													
												</td>
												<td>
												<button type="button" class="btn btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#editPackage">Edit Package</button>
																	<!-- Modal -->
																	<div class="modal fade" id="editPackage">
																		<div class="modal-dialog">
																			<div class="modal-content">
																				<div class="modal-header">
																					<h5 class="modal-title">Edit Package Details</h5>
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
																									<form class="form-valide-with-icon needs-validation" method="post" action="/ownlanding-admin/controllers/Administrator.php">
																										<div class="mb-3">
																											<label class="text-label form-label" for="validationCustomUsername">Package Code</label>
																											<div class="input-group">
																												<span class="input-group-text"> <i class="fa fa-user"></i> </span>
																												<input type="text" class="form-control" id="validationCustomUsername" name="package_code" placeholder="fetch previous package code" required>
																											</div>
																										</div>
																										<div class="mb-3">
																											<label class="text-label form-label" for="validationCustomUsername">Package Size</label>
																											<div class="input-group">
																												<span class="input-group-text"> <i class="fa fa-user"></i> </span>
																												<input type="text" class="form-control" id="validationCustomUsername" name="package_size" placeholder="Get previous package size" required>
																											</div>
																										</div>
																										<div class="mb-3">
																											<label class="text-label form-label" for="validationCustomUsername">Package Amount</label>
																											<div class="input-group">
																												<span class="input-group-text"> <i class="fa fa-user"></i> </span>
																												<input type="number" class="form-control" id="validationCustomUsername" name="package_amount" placeholder="fetch package price" required>
																											</div>
																										</div>
																										<div class="mb-3">
																											<label class="text-label form-label" for="validationCustomUsername">Estate Name</label>
																											<div class="input-group">
																												<span class="input-group-text"> <i class="fa fa-user"></i> </span>
																												<input type="text" class="form-control" id="validationCustomUsername" name="estate_name" placeholder="fetch estate name" required>
																											</div>
																										</div>
																										<div class="mb-3">
																											<label class="text-label form-label" for="validationCustomUsername">Location</label>
																											<div class="input-group">
																											<button class="btn btn-secondary" type="button">Location</button>
																											<select name="location_id" class="default-select form-control wide">
																												<option value="" selected>Choose preferred</option>
																												<option value="france">france</option>
																											</select>
																											</div>
																										</div>
																										<div class="mb-3">
																											<div class="form-check">
																												<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
																												<label class="form-check-label" for="invalidCheck2">
																												I Agree to Changes Made To This Package.
																												</label>
																											</div>
																										</div>
																										<button type="submit" name="createPackage" class="btn me-2 btn-secondary">Submit</button>
																										<button class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
																									</form>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
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