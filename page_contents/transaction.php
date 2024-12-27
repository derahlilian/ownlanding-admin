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
                                <th>Date</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th class="ps-5" style="min-width: 200px;">Status</th>
                            </tr>
                            </thead>
                            <tbody id="customers">
                            <?php foreach ($adminCl->getAllTransactions() as $transaction): ?>
                                <tr class="btn-reveal-trigger">
                                    <td class="py-2">
                                        <?php
                                        try {
                                            $dateString = (string)$transaction["created_at"];
                                            $date = new DateTime($dateString);
                                            $formattedDate = $date->format('j M, Y');
                                            echo $formattedDate;
                                        } catch (Exception $e) {
                                            echo $e->getMessage();
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
                                    <td class="py-2">
                                        <span style="display:<?= $transaction['reference'] ? 'block' : 'none' ?>" class="badge badge-primary">
                                            Ref: <?php echo $transaction["reference"]; ?>
                                        </span>
                                         <br>
                                        <a href=""><?php echo $transaction["description"]; ?></a>
                                    </td>
                                    <td class="py-2"> <a href=" ">NGN <?php echo $transaction["transaction_amount"]; ?></a></td>
                                    <td>
                                        <span class="badge <?= $transaction['status'] == 'pending' ? 'badge-danger' : 'badge-success' ?>">
                                             <?php echo $transaction["status"]; ?>
                                        </span>

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