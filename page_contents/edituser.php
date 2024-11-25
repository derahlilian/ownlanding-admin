<?php
$id = $_GET['id'] ?? 0;
$user = $adminCl->getUserById($id);
if(isset($_POST['editUserSubmit'])){
    $fields = [
        'name' => $_POST['first'] !== $user['name'] ?  $_POST['first'] : null,
        'last_name' => $_POST['last'] !== $user['last_name'] ?  $_POST['last'] : null,
        'email' => $_POST['email'] !== $user['email'] ?  $_POST['email'] : null,
        'phone_number' => $_POST['phone'] !== $user['phone_number'] ?  $_POST['phone'] : null,
        'address' => $_POST['address'] !== $user['address'] ?  $_POST['address'] : null,
    ];

//    print json_encode($_POST);
    $updateStatus = $adminCl->updateUser($id, $fields);
    if ($updateStatus) {
        echo "<script>window.location.reload()</script>";
    }
}
?>
<div class="card-header">
    <h4 class="card-title">Edit Profile</h4>
</div>
<div class="card-body">
    <div class="basic-form">
        <form class="form-valide-with-icon needs-validation" method="post" >
            <div class="mb-3">
                <label class="text-label form-label" for="validationCustomUsername">Firstname</label>
                <div class="input-group">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    <input type="text" class="form-control" id="validationCustomUsername" value="<?php echo $user["name"] ?>" name="first" required>
                    <div class="invalid-feedback">
                        Please Enter a firstname.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="text-label form-label" for="validationCustomUsername">Lastname</label>
                <div class="input-group">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    <input type="text" class="form-control" id="validationCustomUsername" value="<?php echo $user["last_name"] ?>" name="last" required>
                    <div class="invalid-feedback">
                        Please Enter a lastname.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="text-label form-label" for="dlab-password">Email</label>
                <div class="input-group transparent-append">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    <input name="email" type="email" class="form-control" id="dlab-password" value="<?php echo $user["email"] ?>" >
                </div>
            </div>
            <div class="mb-3">
                <label class="text-label form-label" for="dlab-password">Phone</label>
                <div class="input-group transparent-append">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    <input name="phone" type="text" class="form-control" id="dlab-password" value="<?php echo $user["phone_number"] ?>">
                </div>
            </div>
            <div class="mb-3">
                <label class="text-label form-label" for="dlab-password">Address</label>
                <div class="input-group transparent-append">
                    <span class="input-group-text"> <i class="fa fa-location-arrow"></i> </span>
                    <input name="address" type="text" class="form-control" id="dlab-password" value="<?php echo $user["address"] ?>" >
                </div>
            </div>

            <button type="submit" name="editUserSubmit" class="btn me-2 btn-primary">Submit</button>
            <button class="btn btn-light" onclick="history.back(); return false;">Cancel</button>
        </form>

    </div>
</div>