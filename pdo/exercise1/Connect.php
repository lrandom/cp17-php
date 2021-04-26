<?php

class Connect
{
    private $username = 'root';
    private $password = 'koodinh';
    private $dbname = 'cp17';

    /**
     * @param  string  $username
     */
    public function setUsername ($username)
    {
        $this->username = $username;
    }

    /**
     * @param  string  $password
     */
    public function setPassword ($password)
    {
        $this->password = $password;
    }

    /**
     * @param  string  $dbname
     */
    public function setDbname ($dbname)
    {
        $this->dbname = $dbname;
    }

    public function getConnect ()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname='.$this->dbname, $this->username, $this->password);
            $pdo->exec('SET NAMES utf8');
            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return null;
        }
    }
}

?>