<?php
//$id = $_GET['locationId'] ?? 0;
$locations = $adminCl->getPackages($_GET['locationId'] ?? 0);
//print json_encode($locations);
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