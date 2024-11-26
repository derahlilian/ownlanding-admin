<?php
if ($_GET["packageId"]) {
    $id = $_GET["packageId"];
    $subscriptions = $adminCl->getSubscriptionsByPackageId($id);
}
else {
    $subscriptions = $adminCl->getAllSubscriptions();
}
?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="card-action coin-tabs mb-2">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#AllGuest">All Subscriptions</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="AllGuest">
                            <div class="table-responsive">
                                <table class="table card-table display mb-4 shadow-hover table-responsive-lg" id="guestTable-all4">
                                    <thead>
                                    <tr>
                                        <th class="bg-none">
                                            <div class="form-check style-1">
                                                <input class="form-check-input" type="checkbox" value="" id="checkAll5">
                                            </div>
                                        </th>
                                        <th>Package Id</th>
                                        <th>Amount</th>
                                        <th>Payment Reference</th>
                                        <th>Status</th>
                                        <th class="text-center"> Payment Date</th>
                                        <th class="bg-none"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($subscriptions as $subscription):  ?>
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
                                                                <?php echo $subscription["package_code"]; ?>
                                                            </a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="text-nowrap">
                                                <span><?php echo $subscription["amount"] ?? "N/A"; ?></span>
                                            </td>

                                            <td>
                                                <div>
                                                    <h5 class="text-nowrap"><?php echo $subscription["reference"] ?? "N/A"; ?></h5>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="request">
                                                    <a href="javascript:void(0);" class="btn btn-md text-primary"><?php echo $subscription["sub_status"] ?? "N/A"; ?></a>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="request">
                                                    <h5 class="text-nowrap"><?php echo $subscription["created_at"] ?? "N/A"; ?></h5>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown dropend">
                                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z" stroke="#262626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
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