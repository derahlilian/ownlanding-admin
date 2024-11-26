<?php
$id = $_GET['countryid'] ?? 0;
$states = $adminCl->getStatesByCountryId($id);
?>
<div class="container">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="card-header">
                        <h4 class="card-title">State List</h4>
                    </div>
            <div class="d-flex align-items-center mb-2 flex-wrap">
                <button type="button" class="btn btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalLong">Add State</button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Create New State</h5>
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
                                                        <label class="text-label form-label" for="validationCustomUsername">State</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                            <input type="text" name="state_name" class="form-control" id="validationCustomUsername" placeholder="Enter a state" required>
                                                            <input type="hidden" name="country_id" value="<?php echo $states[0]["country_id"]; ?>">
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="createStateButton" class="btn me-2 btn-secondary">Create</button>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example4" class="display" style="min-width: 845px">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>State</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $num = 1; if (isset($states[0]["id"])): foreach ($states as $state): ?>
                                    <tr>
                                        <td><?php echo $num++?></td>
                                        <td><?php echo $state["state_name"]?></td>
                                        <td>
                                            <a href="./locations.php?stateId=<?php echo $state["id"]; ?>" class="btn   btn-secondary">View Location</a>
                                    
                                        </td>
                                        <td>
                                        <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#stateEditModal" data-statename="<?php echo $state["state_name"]; ?>" data-stateid="<?php echo $state["id"]; ?>">Edit</a>
                                            <!-- Edit State Modal Start -->
                                            <div class="modal fade" id="stateEditModal">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit State</h5>
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
                                                                                    <label class="text-label form-label" for="edit_statename">State</label>
                                                                                    <div class="input-group">
                                                                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                                                        <input type="text" name="state_name" class="form-control" id="edit_statename" placeholder="state name" required>
                                                                                    </div>
                                                                                </div>
                                                                                <input type="hidden" name="state_id" id="edit_stateid">
                                                                                <button type="submit" name="editStateButton" class="btn me-2 btn-secondary">Update</button>
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
                                            <!-- Edit State Modal End -->
                                        </td>
                                        <td>
                                        <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#stateDeleteModal" data-statename="<?php echo $state["state_name"]; ?>" data-stateid="<?php echo $state["id"]; ?>">Delete</a>
                                            <!-- Delete state Modal Start -->
                                            <div class="modal fade" id="stateDeleteModal">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete State</h5>
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
                                                                                    <h6>Are you sure you want to delete <span id="delete_statename"></span> ?</h6>
                                                                                    <input type="hidden" name="state_id" id="delete_stateid">
                                                                                </div>
                                                                                <button type="submit" name="deleteStateButton" class="btn me-2 btn-danger">Yes, Delete</button>
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
                                            <!-- Delete state Modal End -->
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
    document.getElementById('stateDeleteModal').addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const stateid = button.getAttribute('data-stateid');
        const statename = button.getAttribute('data-statename');

        document.getElementById('delete_stateid').value = stateid;
        document.getElementById('delete_statename').textContent = statename;
    });

    document.getElementById('stateEditModal').addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const stateid = button.getAttribute('data-stateid');
        const statename = button.getAttribute('data-statename');

        document.getElementById('edit_stateid').value = stateid;
        document.getElementById('edit_statename').value = statename;
    });
</script>