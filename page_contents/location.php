<?php
$id = $_GET['stateId'] ?? 0;
$locations = $adminCl->getLocations($id);
?>

<div class="container">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="card-header">
                        <h4 class="card-title">Location List</h4>
                    </div>
            <div class="d-flex align-items-center mb-2 flex-wrap">
                <button type="button" class="btn btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalLong">Add Location</button>
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
                                                <form class="form-valide-with-icon needs-validation" method="post">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="validationCustomUsername">Location Name</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"> <i class="fa fa-map"></i> </span>
                                                            <input type="text" name="location_name" class="form-control" id="validationCustomUsername" placeholder="Enter Location Name" required>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="state_id" value="<?php echo $locations[0]["state_id"]; ?>">
                                                    <button type="submit" name="createLocationButton" class="btn me-2 btn-secondary">Create</button>
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
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example4" class="display" style="min-width: 845px">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $num = 1; if (isset($locations[0]["id"])): foreach ($locations as $location):?>
                                    <tr>
                                        <td><?php echo $num++; ?></td>
                                        <td><?php echo $location["location_name"]; ?></td>
                                        <td>
                                            <a href="./properties.php?locationId=<?= $location['id'] ?>" class="btn btn-secondary">View Properties</a>
                                        </td>
                                        <td>
                                        <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#locationEditModal" data-location_name="<?php echo $location["location_name"]; ?>" data-locationid="<?php echo $location["id"]; ?>">Edit</a>
                                            <!-- Edit Location Modal Start -->
                                            <div class="modal fade" id="locationEditModal">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Location</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h4 class="card-title">Please Fill All Field!</h4>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="basic-form">
                                                                            <form class="form-valide-with-icon needs-validation" method="post">
                                                                                <div class="mb-3">
                                                                                    <label class="text-label form-label" for="edit_location_name">Location</label>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                                                        <input type="text" name="location_name" class="form-control" id="edit_location_name" placeholder="location name" required>
                                                                                    </div>
                                                                                </div>
                                                                                <input type="hidden" name="location_id" id="edit_locationid">
                                                                                <button type="submit" name="editLocationButton" class="btn me-2 btn-secondary">Update</button>
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
                                            <!-- Edit Location Modal End -->
                                        </td>
                                        <td>
                                        <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#locationDeleteModal" data-location_name="<?php echo $location["location_name"]; ?>" data-locationid="<?php echo $location["id"]; ?>">Delete</a>
                                            <!-- Delete Location Modal Start -->
                                            <div class="modal fade" id="locationDeleteModal">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Location</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="basic-form">
                                                                            <form class="form-valide-with-icon needs-validation" method="post">
                                                                                <div class="mb-3">
                                                                                    <h6>Are you sure you want to delete <span id="delete_location_name"></span> ?</h6>
                                                                                    <input type="hidden" name="location_id" id="delete_locationid">
                                                                                </div>
                                                                                <button type="submit" name="deleteLocationButton" class="btn me-2 btn-danger">Yes, Delete</button>
                                                                                <button class="btn btn-secondary" data-bs-dismiss="modal">No, cancel</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Delete Location Modal End -->
                                        </td>
                                    </tr>
                                <?php endforeach; endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
    Content body end
***********************************-->

<script>
    document.getElementById('locationDeleteModal').addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const locationid = button.getAttribute('data-locationid');
        const location_name = button.getAttribute('data-location_name');

        document.getElementById('delete_locationid').value = locationid;
        document.getElementById('delete_location_name').textContent = location_name;
    });

    document.getElementById('locationEditModal').addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const locationid = button.getAttribute('data-locationid');
        const location_name = button.getAttribute('data-location_name');

        document.getElementById('edit_locationid').value = locationid;
        document.getElementById('edit_location_name').value = location_name;
    });
</script>