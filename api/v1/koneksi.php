<?php
class dbObj
{
    /* Database connection start */
    // read credentials from environment (DO NOT store credentials here)
    var $servername = getenv('DB_HOST') ?: 'db';
    var $username = getenv('KKMRAT_DB_USER');
    var $password = getenv('KKMRAT_DB_PASS');
    var $dbname = getenv('KKMRAT_DB_NAME') ?: 'db_undangan_rat';
    var $conn;
    function getConnstring()
    {
        $con = mysqli_connect(
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname
        ) or
            die("Connection failed: " . mysqli_connect_error());
        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        } else {
            $this->conn = $con;
        }
        return $this->conn;
    }
}
