<?php
class UserModel {

    // private data members
    private Database $db;
    private mysqli $dbConnection;
    static private ?UserModel $_instance = null;
    private string $tblUsers;

    // Private constructor for Singleton pattern
    private function __construct() {
        $this->db = Database::getDatabase();
        $this->dbConnection = $this->db->getConnection();
        $this->tblUsers = $this->db->getUsersTable(); // make sure Database class has getUsersTable()

        // Prevent SQL injection via POST and GET
        foreach ($_POST as $key => $value) {
            $_POST[$key] = $this->dbConnection->real_escape_string($value);
        }

        foreach ($_GET as $key => $value) {
            $_GET[$key] = $this->dbConnection->real_escape_string($value);
        }
    }

    // Static method to ensure a single instance (Singleton)
    public static function getUserModel(): UserModel {
        if (self::$_instance == null) {
            self::$_instance = new UserModel();
        }
        return self::$_instance;
    }

    /**
     * Add a new user to the database.
     * @param array $data - associative array ['username', 'email', 'password']
     * @return bool - true if successful, false otherwise
     */
    public function add_user(array $data): bool {
        $username = $this->dbConnection->real_escape_string($data['username']);
        $email = $this->dbConnection->real_escape_string($data['email']);
        $hashed = password_hash($data['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO " . $this->tblUsers . " (username, email, password)
                VALUES ('$username', '$email', '$hashed')";

        return $this->dbConnection->query($sql) ? true : false;
    }

    /**
     * Verify a user’s login credentials.
     * @param string $username
     * @param string $password
     * @return bool - true if valid credentials, false otherwise
     */
    public function verify_user(string $username, string $password): bool {
        $username = $this->dbConnection->real_escape_string($username);

        $sql = "SELECT password FROM " . $this->tblUsers . " WHERE username = '$username'";
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows === 1) {
            $row = $query->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                setcookie("username", $username, time() + 3600, "/"); // 1 hour cookie
                return true;
            }
        }
        return false;
    }

    public function verify_user(string $username, string $password): bool
    {
        $username = $this->dbConnection->real_escape_string($username);

        $sql = "SELECT password FROM " . $this->tblUsers . " WHERE username='$username'";
        $query = $this->dbConnection->query($sql);

        // If query worked and exactly one user found
        if ($query && $query->num_rows === 1) {
            $row = $query->fetch_assoc();
            $hash = $row['password'];

            // Verify password
            if (password_verify($password, $hash)) {
                // Create a 1-hour cookie
                setcookie("username", $username, time() + 3600, "/");
                return true;
            }
        }

        // Username not found or password incorrect
        return false;
    }



    /**
     * Log out user by destroying the cookie.
     * @return bool
     */
    public function logout(): bool {
        if (isset($_COOKIE['username'])) {
            setcookie("username", "", time() - 3600, "/");
        }
        return true;
    }

    /**
     * Reset a user's password.
     * @param string $username
     * @param string $new_password
     * @return bool
     */
    public function reset_password(string $username, string $new_password): bool {
        $username = $this->dbConnection->real_escape_string($username);
        $hashed = password_hash($new_password, PASSWORD_DEFAULT);

        $sql = "UPDATE " . $this->tblUsers . " 
                SET password = '$hashed' 
                WHERE username = '$username'";

        return $this->dbConnection->query($sql) ? true : false;
    }

    /**
     * List all users in the database.
     * @return array|bool|int - array of users if found, 0 if none, false if query fails
     */
    public function list_users(): array|bool|int {
        $sql = "SELECT id, username, email FROM " . $this->tblUsers;
        $query = $this->dbConnection->query($sql);

        if (!$query)
            return false;

        if ($query->num_rows === 0)
            return 0;

        $users = [];
        while ($row = $query->fetch_object()) {
            $users[] = $row;
        }

        return $users;
    }
}