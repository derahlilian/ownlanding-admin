<?php
class AuthClass
{
    private $db;

    public function __construct()
    {
        global $dbClass;
        $this->db = $dbClass;
    }

    /**
     * Admin login function
     * @param string $username
     * @param string $password
     * @return bool|string Returns true if login is successful, otherwise returns an error message.
     */
    public function login($username, $password)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM admin WHERE username = :username LIMIT 1");
            $stmt->execute(['username' => $username]);
            $admin = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($admin && password_verify($password, $admin['password'])) {
                $_SESSION['admin_id'] = $admin['id'];
                $_SESSION['admin_role'] = $admin['role'];
                return ['flag'=>true,"message" => "login success"];
            } else {
                return ['flag'=>false,"message"=>"Invalid username or password."];
            }
        } catch (PDOException $e) {
            return ['flag'=>false,"message"=>"Database Error:".$e->getMessage()];
        }
    }

    /**
     * Checks if an admin is logged in
     * @return bool
     */
    public function isLoggedIn()
    {
        return isset($_SESSION['admin_id']);
    }

    /**
     * Logs out the current admin
     */
    public function logout()
    {
        session_unset();
        session_destroy();
    }
}
