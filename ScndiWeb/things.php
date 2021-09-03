<?php

include_once 'dbh.php';
class Thing extends Dbh
{

  private $sku;
  private $name;
  private $price;
  public $extra;

  public function Validation()
  {
    $this->sku = mysqli_real_escape_string($this->connect(), $_POST['sku']);
    $this->name = mysqli_real_escape_string($this->connect(), $_POST['name']);
    $this->price = mysqli_real_escape_string($this->connect(), $_POST['price']);

    //Check for empty fields
    if (empty($this->sku) || empty($this->name) || empty($this->price) || empty($this->extra)) {
      header("Location: register.php?empty-fields");
      exit();
    } else {
      //Check for wrong type
      if (!is_numeric($this->price)) {
        header("Location: register.php?wrong-type");
        exit();
      } else {
        //Add to DB
        $sql = "INSERT INTO products (product_sku, product_name, product_price, product_extra)
        VALUES ('$this->sku','$this->name','$this->price','$this->extra');";
        mysqli_query($this->connect(), $sql);
        header("Location: index.php?object-added");
        exit();
      }
    }
  }
}
