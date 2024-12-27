<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="card-action coin-tabs mb-2">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#AllGuest">All Payouts</a>
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
                                <th>Type</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody id="customers">
                            <?php foreach ($adminCl->getAllTransactions(true) as $transaction): ?>
                                <tr class="btn-reveal-trigger">
                                    <td class="py-2">
                                        <?php
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
                                        <span class="badge <?= $transaction['pstatus'] == 'pending' ? 'badge-danger' : 'badge-success' ?>">
                                             <?php echo $transaction["pstatus"]; ?>
                                        </span>

                                    </td>
                                    <td class="request">
                                        <div class="request">
                                            <button class="btn btn-xs btn-danger" onClick=makePayout('<?= $transaction['meta_info'] ?>','<?= $transaction['id'] ?>')>
                                                Pay
                                            </button>
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


<!-- Edit country Modal Start -->
<div class="modal fade" id="payoutmodal">
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
                            <h5 class="text-danger">Bank Name: <span id="banknametext"></span></h5>
                            <h5 class="text-danger">Account Name: <span id="accountnametext"></span></h5>
                            <h5 class="text-danger">Account Number: <span id="accountnumbertext"></span></h5>
                            <div class="alert alert-danger">
                                Please Make the payment of <span id="paymentvalue"></span> to the above account and provide payment reference then click &quot;Confirm Payout &quot;
                            </div>
                            <input type="text" id="payoutref" placeholder="Payout Reference" class="input-sm form-control">
                            <input type="hidden" id="payoutid" value="">
                            <br>
                            <button class="btn btn-danger btn-sm" onclick="confirmPayout()">Confirm Payout</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Edit country Modal End -->
<script>
    const makePayout = (X,Y)=>{
        $("#payoutid").val(Y);
        $("#payoutmodal").modal('show');
        let xData = JSON.parse(X);
        $("#banknametext").text(xData?.bankname);
        $("#accountnametext").text(xData?.accountname);
        $("#accountnumbertext").text(xData?.accountnumber);
       $("#payoutmodal").modal("show");
    }
    const confirmPayout = ()=>{
        $.ajax({
            url: './api/completetransaction.php',
            method: 'POST',
            data: {
                transactionid:$("#payoutid").val(),
                payoutreference:$("#payoutref").val()
            },
            success: function(response) {
                alert(response ? 'Payment Verified' : 'Payment Verification failed');
                window.location.reload();
            },
            error: function(xhr) {
                console.log('Error:', xhr.responseText);
            }
        });
    }
</script>