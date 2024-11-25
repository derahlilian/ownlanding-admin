<div class="container">
    <!-- row -->
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="card-action coin-tabs mb-2">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#">SGAs</a>
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
                                        <th>SGA CODE</th>
                                        <th>FULL NAME</th>
                                        <th>VALUE</th>
                                        <th>ESTATE NAME</th>
                                        <th>DOCUMENTS</th>
                                        <th class="text-center">STATUS</th>
                                        <th class="bg-none"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($adminCl->getSGA() as $sga): ?>
                                        <tr>
                                            <td>
                                                <span class="text-primary fs-14"><?php echo $sga["sga_code"]; ?></span>
                                            </td>
                                            <td>
                                                <div>
                                                    <h5 class="text-nowrap"><?php echo $sga["name"] . " " . $sga["last_name"]; ?></h5>
                                                    <span><?= $sga['phone'] ?></span>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h5 class="text-nowrap">N<?php echo $sga["value"]; ?></h5>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <h5 class="text-nowrap"><?php echo $sga["estate_name"]; ?></h5>
                                                </div>
                                            </td>
                                            <td class="request">
                                                <!-- Trigger Button for "Manage Documents" -->
                                                <button type="button" class="btn btn-sm mb-2" xdata-bs-toggle="modal" xdata-bs-target="#documentModal">Download</button>

                                                <!-- Manage Documents Modal -->
                                                <div class="modal fade" id="documentModal" tabindex="-1" role="dialog" aria-labelledby="documentModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="documentModalLabel">Manage Documents</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <!-- Modal Body -->
                                                            <div class="modal-body">
                                                                <form id="documentForm">


                                                                    <!-- Uploaded Documents Section -->
                                                                    <div class="uploaded-documents">
                                                                        <h6>Uploaded Documents</h6>
                                                                        <ul class="list-group" id="documentList">
                                                                            <!-- Example document -->
                                                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                                <span>Document1.pdf</span>
                                                                                <div>
                                                                                    <button type="button" class="btn btn-sm btn-secondary me-2" style="color: #000;" onclick="viewDocument('Document1.pdf')">View</button>
                                                                                    <button type="button" class="btn btn-sm btn-primary" style="color: #E23428;"onclick="editDocument('Document1.pdf')">Edit</button>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                                <span>Document2.pdf</span>
                                                                                <div>
                                                                                    <button type="button" class="btn btn-sm btn-secondary me-2" style="color: #000;" onclick="viewDocument('Document1.pdf')">View</button>
                                                                                    <button type="button" class="btn btn-sm btn-primary" style="color: #E23428;"onclick="editDocument('Document1.pdf')">Edit</button>
                                                                                </div>
                                                                            </li>
                                                                            <!-- Add more uploaded documents dynamically here -->
                                                                        </ul>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                            <!-- Modal Footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary" onclick="saveDocuments()">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="request">
                                                    <a href="javascript:void(0);" class="btn btn-md text-primary"> <span class="text-primary fs-14"><?= $sga["status"] == 'loc_confirmed' ? 'GRANTED' : $sga["status"] ?></span></a>
                                                </div>
                                            </td>
                                            <!-- <td>
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
                                           </td> -->
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
</div>
