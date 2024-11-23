<?php
$countries = $adminCl->getCountries();

?>
<!--**********************************
   Content body start
***********************************-->
<div class="container">
    <button type="button" class="btn btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalLong">Add Country</button>

    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="xcard">
                    <div class="card-header">
                        <h4 class="card-title">Country List</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">

                            <table id="example4" class="display" style="min-width: 845px">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Country </th>
                                    <th>Action</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $num = 1; foreach ($countries as $country): ?>
                                    <tr>
                                        <td><?php echo $num++?></td>
                                        <td><?php echo $country["country_name"]?></td>
                                        <td>
                                            <a href="state.php?countryid=<?php echo $country["id"]; ?>" class="btn   btn-secondary">View States</a>
<!--                                            <a href="javascript:void(0);" class="btn   btn-secondary">Edit</a>-->
<!--                                            <a href="javascript:void(0);" class="btn   btn-secondary">Delete</a>-->
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class=><i class=""></i></a>
                                                <a href="#" class=""><i class=""></i></a>
                                                <a href="#" class=" "><i class=""></i></a>
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

                                        <button type="submit" name="createCountry" class="btn me-2 btn-secondary">Create</button>
                                        <button class="btn btn-light" data-bs-dismiss="modal">cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button> -->
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->