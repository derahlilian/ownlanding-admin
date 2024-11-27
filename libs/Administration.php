<?php

class Administration {
    private $db;
    public function __construct()
    {
        global $dbClass;
        $this->db = $dbClass;
    }

    /*
     * Functions to edit, user profile, activate and deactivate user account
     */

    /*
     * Fetch all the users (newest first)
     * func: getAllUsers
     * @params: none
     * return: All Users enrolled
     * */
    function getAllUsers(): false|array
    {
        $sql = "SELECT * FROM users ORDER BY created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }

    function getUserById(int $user_id): false|array
    {
        $sql = "SELECT * FROM `users` WHERE `id` = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->fetch($this->db::FETCH_ASSOC);
    }

    function updateUser(int $user_id, array $fields): bool
    {
        $updated_at = date("Y-m-d H:i:s");
        $statement = [];
        $values = [];

        foreach ($fields as $field => $value) {
            if ($value !== null) {
                $statement[] = "`$field` = ?";
                $values[] = $value;
            }
        }

        $statement[] = "`updated_at` = ?";
        $values[] = $updated_at;

        if (empty($statement)) {
            return false;
        }

        $sql = "UPDATE `users` SET " . implode(", ", $statement) . " WHERE `id` = ?";
        $values[] = $user_id;
        $stmt = $this->db->prepare($sql);
        $stmt->execute($values);
        return $stmt->rowCount() === 1;
    }

    function deactivateUser(int $user_id): bool
    {
        $sql = "UPDATE `users` SET `active` = 0 WHERE `id` = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->rowCount() === 1;
    }

    function activateUserById(int $user_id): bool
    {
        $sql = "UPDATE `users` SET `active` = 1 WHERE `id` = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->rowCount() === 1;
    }

    function deleteUserById(int $user_id): bool
    {
        $sql = "DELETE FROM `users` WHERE `id` = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->rowCount() === 1;
    }


    /*
     * Fetch All Packages
     */
    function getAllPackages(): false|array
    {
        $sql = "SELECT packages.id, package_code, packages_size, package_amount, estate_name, color_code, packages.created_at, location_name FROM packages JOIN locations on packages.location_id = locations.id ORDER BY created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }
    function getPackagesByLocationId($locationId): false|array
    {
        $sql = "SELECT packages.id, package_code, packages_size, package_amount, estate_name, color_code, packages.created_at, location_name, (select count(id) from subscriptions where package_id = packages.id) as subscr, (select count(id) from subscriptions where package_id = packages.id and status = 'active') as paid  FROM packages  left JOIN locations on packages.location_id = locations.id WHERE location_id = ? ORDER BY created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$locationId]);
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }

    function getPackageByCode(string $package_code): false|array
    {
        $sql = "SELECT package_code FROM `packages` WHERE `package_code` = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$package_code]);
        return $stmt->fetch($this->db::FETCH_ASSOC);
    }

    /*
     * Create New Package
     */
    public function createNewPackage(array $data): bool
    {
        $package_exists = $this->getPackageByCode($data['package_code']);
        if ($package_exists) {
            return false; // package exists
        }
        $created_at = $updated_at = date("Y-m-d H:i:s");
        $sql = "INSERT INTO packages (package_code, packages_size, package_amount, estate_name, color_code, location_id, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$data["package_code"], $data["packages_size"], $data["package_amount"], $data["estate_name"], $data["color_code"], $data["location_id"], $created_at, $updated_at]);
        return $stmt->rowCount() === 1;
    }

    /*
     * create New Country
     */
    function createNewCountry($country_name, $country_code): bool
    {
        $created_at = $updated_at = date("Y-m-d H:i:s");
        $sql = "INSERT INTO `countries` (`country_name`, `country_code`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$country_name, $country_code, $created_at, $updated_at]);
        return $stmt->rowCount() === 1;
    }

    /*
     * create New State
     */
    function createNewState($state_name, $country_id): bool
    {
        $created_at = $updated_at = date("Y-m-d H:i:s");
        $sql = "INSERT INTO `states` (`state_name`, `country_id`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$state_name, $country_id, $created_at, $updated_at]);
        return $stmt->rowCount() === 1;
    }

    /*
     * create New Location
     */
    function createNewLocation($location_name, $state_id): bool
    {
        $created_at = $updated_at = date("Y-m-d H:i:s");
        $sql = "INSERT INTO `locations` (`location_name`, `state_id`, `created_at`, `updated_at`) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$location_name, $state_id, $created_at, $updated_at]);
        return $stmt->rowCount() === 1;
    }

    /*
     * Functions to fetch user subscribed packages
     *
     */
    function getPackagesByUserId(int $user_id): false|array
    {
        $sql = "SELECT package_code, package_amount, color_code FROM subscriptions LEFT JOIN packages on subscriptions.package_id = packages.id WHERE subscriptions.user_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }

    /*
     * Fetch Countries
     */
    function getCountries(): false|array
    {
        $sql = "SELECT id, country_name, country_code FROM countries";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }

    /*
     * Fetch Country By Name
     */

    function getCountryByName(string $country_name): false|array
    {
        $sql = "SELECT id, country_name FROM countries WHERE country_name = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$country_name]);
        return $stmt->fetch($this->db::FETCH_ASSOC);
    }

    function getStateByNameAndCountryId(string $state_name, string $country_id): false|array
    {
        $sql = "SELECT id, state_name FROM states WHERE country_id = ? AND state_name = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$country_id, $state_name]);
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }

    function getLocationByNameAndStateId(string $location_name, string $state_id): false|array
    {
        $sql = "SELECT id, location_name FROM locations WHERE location_name = ? AND state_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$location_name, $state_id]);
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }

    /*
     * Fetch States By Country
     */
    function getStatesByCountryId(int $country_id): false|array
    {
        $sql = "SELECT id, state_name FROM states WHERE country_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$country_id]);
        $states = $stmt->fetchAll($this->db::FETCH_ASSOC);
        $states[0]["country_id"] = $country_id;
        return $states;
    }

    /*
     * Fetch All Locations
     */
    public function getAllLocations(): array|false
    {
        $sql = "SELECT id, location_name FROM locations";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }

    /*
     * Fetch All Locations by state id
     */
    public function getLocations($id): array|false
    {
        $sql = "SELECT id, location_name FROM locations where state_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        $locations = $stmt->fetchAll($this->db::FETCH_ASSOC);
        $locations[0]["state_id"] = $id;
        return $locations;
    }

    /*
     * Fetch Customer Down line
     */
    function getDownlineByUserId(int $user_id): false|array
    {
        $sql = "SELECT id, name, last_name FROM users WHERE referred_by = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }

    function getAllSubscriptions(): false|array
    {
        $sql = "SELECT package_code, payments.amount, payments.reference, payments.status, payments.created_at FROM subscriptions
        LEFT JOIN payments ON payment_reference = payments.id
        LEFT JOIN packages ON package_id = packages.id
        ORDER BY payments.created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }

    function getSubscriptionsByPackageId(int $package_id): array
    {
        $sql = "SELECT 
                    subscriptions.id, package_code, sga_code, color_code, payments.amount, payments.reference, payments.status payment_status, subscriptions.status sub_status, payments.created_at
                FROM subscriptions
                LEFT JOIN payments ON payment_reference = payments.id
                LEFT JOIN packages ON package_id = packages.id
                LEFT JOIN grant_allocations ON grant_allocations.package_id =  packages.id
                WHERE subscriptions.package_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$package_id]);
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }

    function getAllPayments(): false|array
    {
        $sql = "SELECT channel, payments.created_at, reference, amount, status, name, last_name FROM payments JOIN users ON payments.user_id = users.id ORDER BY payments.created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }



    function getSGA(): false|array
    {
        $sql = "SELECT name, last_name, sga_code, value, estate_name, status,phone_number phone FROM grant_allocations
                LEFT JOIN users ON grant_allocations.user_id = users.id
                LEFT JOIN packages ON grant_allocations.package_id = packages.id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }

    function getAllTransactions($payout = false): false|array
    {
        !$payout ? $line = "WHERE transactions.type = ? AND transactions.status != ?" : $line = "WHERE transactions.type != ? AND transactions.status = ?";
        $sql = "SELECT transactions.created_at, transactions.description, transactions.transaction_amount, payments.reference, transactions.type, transactions.status, users.name, users.last_name FROM transactions
                LEFT JOIN users ON transactions.user_id = users.id
                LEFT JOIN payments ON transactions.payment_id = payments.id
                $line
                ORDER BY transactions.created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['credit', 'pending']);
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }

    function getUserTransactions(int $user_id): false|array
    {
        $sql = "SELECT * FROM transactions LEFT JOIN payments ON transactions.payment_id = payments.id WHERE transactions.user_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->fetchAll($this->db::FETCH_ASSOC);
    }

    public function deleteCountryById(int $id): bool
    {
        $sql = "DELETE FROM countries WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->rowCount() === 1;
    }

    public function updateCountryById(int $id, string $name, string $code): bool
    {
        $updated_at = date("Y-m-d H:i:s");
        $sql = "UPDATE countries SET country_name = ?, country_code = ?, updated_at = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$name, $code, $updated_at, $id]);
        return $stmt->rowCount() === 1;
    }

    public function updateState(int $state_id, string $state_name): bool
    {
        $updated_at = date("Y-m-d H:i:s");
        $sql = "UPDATE states SET state_name = ?, updated_at = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$state_name, $updated_at, $state_id]);
        return $stmt->rowCount() === 1;
    }

    public function deleteStateById(int $state_id): bool
    {
        $sql = "DELETE FROM states WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$state_id]);
        return $stmt->rowCount() === 1;
    }

    public function updateLocation(int $location_id, string $location_name): bool
    {
        $updated_at = date("Y-m-d H:i:s");
        $sql = "UPDATE locations SET location_name = ?, updated_at = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$location_name, $updated_at, $location_id]);
        return $stmt->rowCount() === 1;
    }

    public function deleteLocation(int $location_id): bool
    {
        $sql = "DELETE FROM locations WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$location_id]);
        return $stmt->rowCount() === 1;
    }

    public function updatePackage(array $data): bool
    {
        $updated_at = date("Y-m-d H:i:s");
        $sqq = "UPDATE packages SET package_code = ?, packages_size = ?, package_amount = ?, estate_name = ?, color_code = ?, updated_at = ? WHERE id = ?";
        $stmt = $this->db->prepare($sqq);
        $stmt->execute([$data["package_code"], $data["packages_size"], $data["package_amount"], $data["estate_name"], $data["color_code"], $updated_at, $data["id"]]);
        return $stmt->rowCount() === 1;
    }
}

