<div class="tab-content">
    <div class="tab-pane active show" id="AllGuest">
        <div class="table-responsive">
            <table class="table card-table display mb-4 shadow-hover table-responsive-lg" id="guestTable-all4">
                <thead>
                <tr>
                    <th class="text-left">User</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($adminCl->getAllUsers() as $user): ?>
                    <tr>
                        <td>
                            <div class="concierge-bx d-flex align-items-center">
                                <a href="./userdetails?id=<?= $user["id"] ?>">
                                    <img class="me-3 rounded" src="<?= $user['profile_image'] ?? "public/assets/images/avatar/0.png" ?>" alt="" />
                                </a>
                                <a href="./userdetails?id=<?= $user["id"] ?>">
                                    <h5 class="fs-16 mb-0 text-nowrap"><span class="text-black"><?php echo $user["name"] ." ". $user["last_name"]?></span></h5>
                                    <span class="text-primary fs-14"><?php echo $user["email"] ?></span>
                                    <br>
                                    <span class="text-primary fs-14"><?php echo $user["phone_number"] ?></span>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>