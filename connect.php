<?php

class DB {

    const HOST = "localhost"; //hostname
    const USERNAME = "root"; //username for database
    const PASSWORD = ""; //password for database
    const DBNAME = "phpdb"; // database name

    function connect() {
        error_reporting(E_ALL ^ E_DEPRECATED);

       #$link = mysql_connect(self::HOST, self::USERNAME, self::PASSWORD); //connect to database
        mysql_select_db(self::DBNAME); //connect to database

        //languages
        $cs1 = ('SET CHARACTER SET utf8');
        mysql_query($cs1);
        $cs2 = ("SET character_set_connection='utf8'");
        mysql_query($cs2);
        $cs3 = ("SET character_set_database=utf8");
        mysql_query($cs3);
        $cs4 = ("SET character_set_results=utf8");
        mysql_query($cs4);
        $cs5 = ("SET character_set_server='utf8'");
        mysql_query($cs5);
        $cs6 = ("SET character_set_client='utf8'");
        mysql_query($cs6);
        $cs7 = ("collation_connection = utf8");
        mysql_query($cs7);
        $cs8 = ("collation_database = utf8");
        mysql_query($cs8);
        $cs9 = ("collation_server = utf8");
        mysql_query($cs9);

        if (!$link = mysql_connect(self::HOST, self::USERNAME, self::PASSWORD)) {
            echo 'Could not connect to mysql'; //error message
            exit;
        }

        if (!mysql_select_db(self::DBNAME, $link)) {
            echo 'Could not select database'; //error message
            exit;
        }
        return $link;
    }

    public function insertCustomer() {
        if (isset($_POST['msg'])) {

            $name = trim($_POST['name']); // receive from index.php
            $email = trim($_POST['email']); // receive from index.php
            $password = trim($_POST['password1']); // receive from index.php

            //insert into table
            $sql = "INSERT INTO customer "
                      . " (customer_id, name, email, password "
                      . ") VALUES ('0', '$name', '$email', '$password'  )";

            mysql_query($sql, $this->connect());
        }
    }

    //close database
    function __destruct() {
        mysql_close($this->connect());
    }

}
