<?php

//Database connect function

class Dbh
{
  private $servername;
  private $username;
  private $password;
  private $dbname;

  protected function connect()
  {
    $this->servername = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->dbname = "listofproducts";

    // $this->servername = "sql204.epizy.com";
    // $this->username = "epiz_29616078";
    // $this->password = "HOqj3jbson";
    // $this->dbname = "epiz_29616078_listofproducts";

    $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    return $conn;
  }
}
