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

    function updateUser(int $user_id, string $name, string $last_name, string $email): bool
    {
        $sql = "UPDATE `users` SET `name` = ?, `last_name` = ?, `email` = ? WHERE `id` = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$name, $last_name, $email, $user_id]);
        return $stmt->rowCount() === 1;
    }

    function deactivateUser(int $user_id): bool
    {
        $sql = "UPDATE `users` SET `active` = 0 WHERE `id` = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->rowCount() === 1;
    }

    function activateUserById(int $user_id): bool
    {
        $sql = "UPDATE `users` SET `active` = 1 WHERE `id` = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->rowCount() === 1;
    }

    function deleteUserById(int $user_id): bool
    {
        $sql = "DELETE FROM `users` WHERE `id` = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->rowCount() === 1;
    }


    /*
     * Fetch All Packages
     */
    function getPackages(): false|array
    {
        $sql = "SELECT packages.id, package_code, packages_size, package_amount, estate_name, color_code, packages.created_at, location_name FROM packages JOIN locations on packages.location_id = locations.id ORDER BY created_at DESC";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    function getPackageByCode(string $package_code): false|array
    {
        $sql = "SELECT package_code FROM `packages` WHERE `package_code` = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$package_code]);
        return $stmt->fetch(self::FETCH_ASSOC);
    }

    /*
     * Create New Package
     */
    public function createNewPackage(array $data): bool
    {
        $sql = "INSERT INTO packages (package_code, packages_size, package_amount, estate_name, color_code, location_id) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->prepare($sql);
        $stmt->execute([$data["package_code"], $data["packages_size"], $data["package_amount"], $data["estate_name"], $data["color_code"], $data["location_id"]]);
        return $stmt->rowCount() === 1;
    }

    /*
     * create New Country
     */
    function createNewCountry($country_name, $country_code): bool
    {
        $sql = "INSERT INTO `countries` (`country_name`, `country_code`) VALUES (?, ?)";
        $stmt = $this->prepare($sql);
        $stmt->execute([$country_name, $country_code]);
        return $stmt->rowCount() === 1;
    }

    /*
     * create New State
     */
    function createNewState($state_name, $county_id): bool
    {
        $sql = "INSERT INTO `states` (`state_name`, `country_id`) VALUES (?, ?)";
        $stmt = $this->prepare($sql);
        $stmt->execute([$state_name, $county_id]);
        return $stmt->rowCount() === 1;
    }

    /*
     * create New Location
     */
    function createNewLocation($location_name, $state_id): bool
    {
        $sql = "INSERT INTO `locations` (`location_name`, `state_id`) VALUES (?, ?)";
        $stmt = $this->prepare($sql);
        $stmt->execute([$location_name, $state_id]);
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
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    /*
     * Fetch Country By Name
     */

    function getCountryByName(string $country_name): false|array
    {
        $sql = "SELECT id, country_name FROM countries WHERE country_name = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$country_name]);
        return $stmt->fetch(self::FETCH_ASSOC);
    }

    function getStateByNameAndCountryId(string $state_name, string $country_id): false|array
    {
        $sql = "SELECT id, state_name FROM states WHERE country_id = ? AND state_name = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$country_id, $state_name]);
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    function getLocationByNameAndStateId(string $location_name, string $state_id): false|array
    {
        $sql = "SELECT id, location_name FROM locations WHERE location_name = ? AND state_id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$location_name, $state_id]);
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    /*
     * Fetch States By Country
     */
    function getStatesByCountryId(int $country_id): false|array
    {
        $sql = "SELECT id, state_name FROM states WHERE country_id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$country_id]);
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    /*
     * Fetch Locations By State
     */
    function getLocationsByStateId(int $state_id): false|array
    {
        $sql = "SELECT id, location_name FROM locations WHERE state_id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$state_id]);
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    /*
     * Fetch All Locations
     */
    public function getLocations(): array|false
    {
        $sql = "SELECT id, location_name FROM locations";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(self::FETCH_ASSOC);
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
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    function getSubscriptionsByPackageId(int $package_id): array
    {
        $sql = "SELECT package_code, payments.amount, payments.reference, payments.status, payments.created_at FROM subscriptions
                LEFT JOIN payments ON payment_reference = payments.id
                LEFT JOIN packages ON package_id = packages.id
                WHERE package_id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$package_id]);
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    function getAllPayments(): false|array
    {
        $sql = "SELECT channel, payments.created_at, reference, amount, status, name, last_name FROM payments JOIN users ON payments.user_id = users.id ORDER BY payments.created_at DESC";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    function getSGA(): false|array
    {
        $sql = "SELECT name, last_name, sga_code, value, estate_name, status FROM grant_allocations
                LEFT JOIN users ON grant_allocations.user_id = users.id
                LEFT JOIN packages ON grant_allocations.package_id = packages.id";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    function getAllTransactions(): false|array
    {
        $sql = "SELECT transactions.created_at, transactions.description, transactions.transaction_amount, payments.reference, transactions.type, transactions.status, users.name, users.last_name FROM transactions
                LEFT JOIN users ON transactions.user_id = users.id
                LEFT JOIN payments ON transactions.payment_id = payments.id
                ORDER BY transactions.created_at DESC";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

    function getUserTransactions(int $user_id): false|array
    {
        $sql = "SELECT * FROM transactions LEFT JOIN payments ON transactions.payment_id = payments.id WHERE transactions.user_id = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(self::FETCH_ASSOC);
    }

}

