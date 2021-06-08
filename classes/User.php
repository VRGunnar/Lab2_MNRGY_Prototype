<?php
include_once (__DIR__ . "/db.php");

class User {
    private $fullName;
    private $email;
    private $username;
    private $password;

    public function __construct($fullname, $email, $username, $password)
    {
        $this->setEmail($email);
        $this->setFullname($fullname);
        $this->setUsername($username);
        $this->setPassword($password);
    }

    public function saveUser(): bool
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("insert into users (fullname, email, username, password) values (:fullName, :email, :username, :password)");

        $fullName = $this->getFullname();
        $username = $this->getUsername();
        $email = $this->getEmail();
        $password = $this->getPassword();

        $statement->bindValue(":fullName", $fullName);
        $statement->bindValue(":username", $username);
        $statement->bindValue(":email", $email);
        $statement->bindValue(":password", $password);

        $result = $statement->execute();
        var_dump($result);
        return $result;
    }

    static function userLogin($username, $password)
    {
        $conn = db::getConnection();
        $statement = $conn->prepare("select * from users where username = :username");
        $statement->bindValue(":username", $username);
        $statement->execute();
        $user = $statement->fetch();
        if (!$user){
            return false;
        }
        $hash = $user["password"];
        if(password_verify($password, $hash)){
            return true;
        }else{
            return false;
        }
    }
    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $options = [
            'cost' => 12,
        ];
        $this->password =  password_hash($password, PASSWORD_DEFAULT, $options);
    }
}