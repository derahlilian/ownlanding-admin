<?php
$sgalist = $adminCl->getSGA();
?>
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
                        <?php foreach ($sgalist as $sga): ?>
                            <tr>
                                <td>
                                    <span class="text-primary fs-14"><?php echo $sga["sga_code"]; ?></span>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="text-nowrap"><?php echo $sga["name"] . " " . $sga["last_name"]; ?></h5>
                                        <span>0902248072</span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="text-nowrap"><?php echo $sga["value"]; ?></h5>
                                        <span>Naira</span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="text-nowrap"><?php echo $sga["estate_name"]; ?></h5>
                                    </div>
                                </td>
                                <td class="request">
                                    <!-- Trigger Button for "Manage Documents" -->
                                    <button type="button" class="btn btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#documentModal">View</button>

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
                                                        <!-- Document Upload Section -->
                                                        <!-- <div class="mb-3">
                                                            <label for="fileUpload" class="form-label">Upload Documents</label>
                                                            <input class="form-control" type="file" id="fileUpload" multiple>
                                                            <div class="form-text">You can upload multiple documents at once.</div>
                                                        </div> -->

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
                                        <a href="javascript:void(0);" class="btn btn-md text-primary"><?php echo $sga["status"]; ?></a>
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



<script src="public/assets/vendor/global/global.min.js"></script>
<script src="public/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>


<script src="public/assets/vendor/moment/moment.min.js"></script>
<script src="public/assets/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="public/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="public/assets/js/plugins-init/datatables.init.js"></script>

<script src="public/assets/js/custom.min.js"></script>
<script src="public/assets/js/dlabnav-init.js"></script>
<script src="public/assets/js/demo.js"></script>
<script src="public/assets/js/styleSwitcher.js"></script>
<script>
    $(function() {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('D MMMM YYYY') + ' &nbsp - &nbsp ' + end.format('D MMMM YYYY'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);

    });

    <!-- JavaScript for Modal Functions -->

    function viewDocument(documentName) {
        alert('Opening document: ' + documentName);
        // Add logic to view the document, e.g., open in a new tab or iframe
    }

    function editDocument(documentName) {
        alert('Editing document: ' + documentName);
        // Add logic to edit the document
    }

    function saveDocuments() {
        // Add logic to handle saving the uploaded documents
        alert('Documents saved successfully');
    }

    // You can add more dynamic functionality like adding uploaded files to the list here

</script>
