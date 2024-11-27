<?php
$packages = $adminCl->getPackagesByLocationId($_GET['locationId'] ?? 0);
?>
<!--**********************************
    Content body start
***********************************-->
<div class="container">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
           <div class="card-header">
              <h4 class="card-title">Property List</h4>
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
                                    <th>Code</th>
                                    <th>Location</th>
                                    <th>Subscriptions</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $num = 1; foreach ($packages as $package):?>
                                    <tr>
                                        <td><?php echo $num++; ?></td>
                                        <td style="color:white;background-color: <?= '#' . $package['color_code'] ?> !important">
                                            <div>
                                                <?php echo strtoupper($package["package_code"]); ?>
                                                <br> N<?= number_format($package['package_amount']) ?>
                                            </div></td>
                                        <td>
                                            <?= $package['estate_name'] ?> <br>
                                            <?= $package['packages_size'] ?> SQM
                                        </td>
                                        <td>
                                            <?= $package['subscr'] ?>: Subscription, <?= $package['paid'] ?>: Paid
                                        </td>
                                        <td class="text-right">
                                            <a href="./viewsubscriptions.php?packageId=<?= $package['id'] ?>" class="btn   btn-secondary">View Subscriptions</a>
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

</div>
<!--**********************************
    Content body end
***********************************-->