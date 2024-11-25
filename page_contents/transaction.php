<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="card-action coin-tabs mb-2">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#">All Transactions</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0 table-striped">
                            <thead>
                            <tr>
                                <th class=" pe-3">
                                    <div class="form-check custom-checkbox mx-2">
                                        <input type="checkbox" class="form-check-input" id="checkAll">
                                        <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Payment Ref</th>
                                <th>Type</th>
                                <th class="ps-5" style="min-width: 200px;">Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="customers">
                            <?php foreach ($adminCl->getAllTransactions() as $transaction): ?>
                                <tr class="btn-reveal-trigger">
                                    <td class="py-2">
                                        <div class="form-check custom-checkbox mx-2">
                                            <input type="checkbox" class="form-check-input" id="checkbox2">
                                            <label class="form-check-label" for="checkbox2"></label>
                                        </div>
                                    </td>
                                    <td class="py-2"><?php
                                        try {
                                            $dateString = (string)$transaction["created_at"];
                                            $date = new DateTime($dateString);
                                            $formattedDate = $date->format('j M, Y');
                                            echo $formattedDate;
                                        } catch (DateMalformedStringException $e) {
                                            echo $transaction["created_at"];
                                        }
                                        ?></td>
                                    <td class="py-3">
                                        <a href="#">
                                            <div class="media d-flex align-items-center">
                                                <div class="avatar avatar-xl me-2">
                                                    <img class="rounded-circle img-fluid"
                                                         src="public/assets/images/avatar/1.png" alt="" width="30" />
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mb-0 fs--1"><?php echo $transaction["name"] . " " . $transaction["last_name"]; ?></h5>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="py-2"><a href=""><?php echo $transaction["description"]; ?></a>
                                    </td>
                                    <td class="py-2"> <a href=" "><?php echo $transaction["transaction_amount"]; ?></a></td>
                                    <td class="py-2"> <a href=" "><?php echo $transaction["reference"]; ?></a></td>

                                    <td class="request">
                                        <div class="request">
                                            <a href="javascript:void(0);" class="btn btn-md text-primary" style="background-color:#D8BFD8 !important;"><?php echo $transaction["type"]; ?></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="request">
                                            <a href="javascript:void(0);" class="btn btn-md text-primary" style="background-color:#D8BFD8 !important;"><?php echo $transaction["status"]; ?></a>
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