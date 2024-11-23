<?php
$id = $_GET['locationId'] ?? 0;
$locations = $adminCl->getPackages($id);
//print json_encode($locations);
?>
<!--**********************************
    Content body start
***********************************-->
<div class="contianer">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="zcard">
                    <div class="card-header">
                        <h4 class="card-title">Packages List</h4>
                    </div>

                    <div class="card-body">
                        <div class="text-right" style="width:100%">
                            <button type="button" class="btn btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalLong">Add Package</button>
                        </div>

                        <div class="table-responsive">
                            <table id="example4" class="display" style="min-width: 845px">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Code</th>
                                    <th>Location</th>
                                    <th>Subscriptions</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $num = 1; foreach ($locations as $location):?>
                                    <tr>
                                        <td><?php echo $num++; ?></td>
                                        <td style="color:white;background-color: #<?= $location['color_code'] ?> !important">
                                            <div>
                                                <?php echo strtoupper($location["package_code"]); ?>
                                                <br> N<?= number_format($location['package_amount']) ?>
                                            </div></td>
                                        <td>
                                            <?= $location['estate_name'] ?> <br>
                                            <?= $location['packages_size'] ?> SQM
                                        </td>
                                        <td>
                                            <?= $location['subscr'] ?>: Subscription, <?= $location['paid'] ?>: Paid
                                        </td>
                                        <td class="text-right">
                                            <a href="./viewsubscriptions.php?subscriptionId=<?= $location['id'] ?>" class="btn   btn-secondary">View Subscriptions</a>
                                            <a href="#" class="btn   btn-secondary">Edit</a>
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New St</h5>
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
                                    <form class="form-valide-with-icon needs-validation" action="/ownlanding-admin/controllers/Administrator.php" method="post">
                                        <div class="mb-3">
                                            <label class="text-label form-label" for="validationCustomUsername">Location Name</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="fa fa-map"></i> </span>
                                                <input type="text" name="location_name" class="form-control" id="validationCustomUsername" placeholder="Enter Location Name" required>
                                                <input type="hidden" name="state_id" value="<?php echo $locations[0]["state_id"]; ?>">
                                            </div>
                                        </div>


                                        <button type="submit" name="createLocation" class="btn me-2 btn-secondary">Create</button>
                                        <button class="btn btn-light" data-bs-dismiss="modal">cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-danger light" data-bs-dismiss="modal"> </button> -->
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->