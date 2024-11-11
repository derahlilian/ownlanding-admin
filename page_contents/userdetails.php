<?php
$id = $_GET['id'] ?? 0;
$user = $adminCl->getUserById($id);
$packages = $adminCl->getPackagesByUserId($id);
$Downlines = $adminCl->getDownlineByUserId($id);
?>

<div>
    <!-- row -->

    <div class="row mt-4">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card overflow-hidden">
                        <div class="row m-0">
                            <div class="col-12 p-0">
                                <div class="card-body">
                                    <div class="guest-profile">
                                        <div class="d-flex">
                                            <img src="<?= $user['profile_image'] ?? "public/assets/images/avatar/0.png" ?>" alt="">
                                            <div>
                                                <h2 class="font-w600"><?php echo $user["name"] . " " . $user["last_name"] ?></h2>
                                                <span class="text-secondary"><?= $user['email'] ?></span> <br/>
                                                <span class="text-secondary"><?= $user['phone_number'] ?></span>
                                                <div class="call d-flex align-items-center">
                                                    <button onclick=window.location.href="edituser?id=<?= $user['id'] ?>" class="btn btn-secondary ms-3">
                                                        Edit User Profile
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h4">User Packages</div>
                                    <?php
                                    if($packages){
                                        foreach ($packages as $package): ?>
                                            <div class="text-center"
                                                 style="width:150px;padding:10px;border-radius:10px;background-color: <?php echo "#" . $package['color_code']; ?>;">
                                                <h4 class="font-w500"><?php echo $package["package_code"]; ?></h4>
                                                <h4 class="font-w500"><?php echo $package["package_amount"]; ?></h4>
                                            </div>
                                            <hr>
                                        <?php endforeach;
                                    }else{
                                        ?>
                                        <div class="alert alert-danger">This User has not subscribed for any package</div>
                                        <?php
                                    }
                                    ?>
                                    <?php  ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">User Downline</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card-csontent">
                        <div class="nestable">
                            <div class="dd" id="nestable2">
                                <ol class="dd-list">

                                    <?php
                                    foreach($Downlines as $downline){
                                        ?>
                                        <li class="dd-item" style="max-width:500px;">
                                            <div class="dd-handle">
                                                <a href="./userdetails?id=<?= $downline['id'] ?>" style="color:white">
                                                    <img src="<?= $user['profile_image'] ?? "public/assets/images/avatar/0.png" ?>" alt="" class="img img-thumbnail" style="height:50px;width:50px;">
                                                    <br>
                                                    <?php echo $downline["name"] . " " . $downline["last_name"] ?> <br>
                                                    <?= count($adminCl->getDownlineByUserId($downline['id'])) ?> Downliners
                                                </a>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
