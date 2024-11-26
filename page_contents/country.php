<?php
$countries = $adminCl->getCountries();



?>
<!--**********************************
   Content body start
***********************************-->
<div class="container">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="card-header">
                        <h4 class="card-title">Country List</h4>
                    </div>
            <div class="d-flex align-items-center mb-2 flex-wrap">
                <button type="button" class="btn btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalLong">Add Country</button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Country</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="card-body">
                                            <div class="basic-form">
                                                <form class="form-valide-with-icon needs-validation"  method="post">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="validationCustomUsername">Country Name</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                            <input type="text" name="country_name" class="form-control" id="validationCustomUsername" placeholder="Enter Country Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="text-label form-label" for="validationCustomUsername">Country Code</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                            <input type="text" name="country_code" class="form-control" id="validationCustomUsername" placeholder="Enter Country Code" required>
                                                        </div>
                                                    </div>
                                                    <button type="submit" name="createCountryButton" class="btn me-2 btn-secondary">Create</button>
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
                                    <th>Country </th>
                                    <th>Action</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $num = 1; foreach ($countries as $country): ?>
                                    <tr>
                                        <td><?php echo $num++?></td>
                                        <td><?php echo $country["country_name"]?></td>
                                        <td>
                                            <a href="state.php?countryid=<?php echo $country["id"]; ?>" class="btn   btn-secondary">View States</a>
                                 
                                            
                                        </td>
                                        
                                        <td>
                                        <a  class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#countryEditModal" data-countryname="<?php echo $country["country_name"]; ?>" data-countryid="<?php echo $country["id"]; ?>" data-countrycode="<?php echo $country["country_code"]; ?>">Edit</a>
                                            <!-- Edit country Modal Start -->
                                             <div class="modal fade" id="countryEditModal">
                                                 <div class="modal-dialog">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                             <h5 class="modal-title">Edit Country</h5>
                                                             <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                             </button>
                                                         </div>
                                                         <div class="modal-body">
                                                             <div class="col-lg-12">
                                                                 <div class="card">
                                                                     <div class="card-body">
                                                                         <div class="basic-form">
                                                                             <form class="form-valide-with-icon needs-validation"  method="post">
                                                                                 <div class="mb-3">
                                                                                     <label class="text-label form-label" for="edit_countryname">Country Name</label>
                                                                                     <div class="input-group">
                                                                                         <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                                                         <input type="text" name="country_name" class="form-control" id="edit_countryname" placeholder="Enter Country Name"" required>
                                                                                     </div>
                                                                                 </div>
                                                                                 <div class="mb-3">
                                                                                     <label class="text-label form-label" for="edit_countrycode">Country Code</label>
                                                                                     <div class="input-group">
                                                                                         <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                                                         <input type="text" name="country_code" class="form-control" id="edit_countrycode" placeholder="Enter Country Code" required>
                                                                                     </div>
                                                                                 </div>
                                                                                 <input type="hidden" name="countryid" id="edit_countryid">
                                                                                 <button type="submit" name="editCountryButton" class="btn me-2 btn-secondary">Update</button>
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
                                            <!-- Edit country Modal End -->
                                        </td>
                                        <td>
                                        <a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#countryDeleteModal" data-countryname="<?php echo $country["country_name"]; ?>" data-countryid="<?php echo $country["id"]; ?>">Delete</a>
                                                <!-- Delete country Modal Start -->
                                                    <div class="modal fade" id="countryDeleteModal">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Delete Country</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="col-lg-12">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div class="basic-form">
                                                                                    <form class="form-valide-with-icon needs-validation"  method="post">
                                                                                        <div class="mb-3">
                                                                                            <h6>Are you sure you want to delete <span id="delete_countryname"></span> ?</h6>
                                                                                            <input type="hidden" name="countryid" id="delete_countryid">
                                                                                        </div>
                                                                                        <button type="submit" name="deleteCountryButton" class="btn me-2 btn-danger">Yes, Delete</button>
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
                                                <!-- Delete country Modal End -->
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
<!--**********************************
    Content body end
***********************************-->

<script>
    // Delete Modal
    document.getElementById('countryDeleteModal').addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const countryid = button.getAttribute('data-countryid');
        const countryname = button.getAttribute('data-countryname');

        document.getElementById('delete_countryid').value = countryid;
        document.getElementById('delete_countryname').textContent = countryname;
    });

    // Edit Modal
    document.getElementById('countryEditModal').addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const countryid = button.getAttribute('data-countryid');
        const countryname = button.getAttribute('data-countryname');
        const countrycode = button.getAttribute('data-countrycode');

        document.getElementById('edit_countryid').value = countryid;
        document.getElementById('edit_countryname').value = countryname;
        document.getElementById('edit_countrycode').value = countrycode;
    });
</script>