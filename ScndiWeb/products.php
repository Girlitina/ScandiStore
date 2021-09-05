<?php

include_once 'things.php';

class Furniture extends Thing
{

  private $height;
  private $width;
  private $length;

  public function ExtraForFurniture()
  {
    $this->height = mysqli_real_escape_string($this->connect(), $_POST['height']);
    $this->width = mysqli_real_escape_string($this->connect(), $_POST['width']);
    $this->length = mysqli_real_escape_string($this->connect(), $_POST['length']);

    if (!empty($this->height) && !empty($this->width) && !empty($this->length)) {
      //Checking for wrong type
      if (!ctype_digit($this->height) || !ctype_digit($this->width) || !ctype_digit($this->length)) {
        header("Location: register.php?wrong-type");
        exit();
      }
      $this->extra = 'Dimension: ' . $this->height . "x" . $this->width . "x" . $this->length;
    } elseif (empty($this->height) && empty($this->width) && empty($this->length)) {
      return;
    }

    $this->Validation();
  }
}
$show = new Furniture;
$show->ExtraForFurniture();


class Disk extends Thing
{

  private $size;

  public function ExtraForDisk()
  {

    $this->size = mysqli_real_escape_string($this->connect(), $_POST['size']);
    if (!empty($this->size)) {
      //Checking for wrong type;
      if (!ctype_digit($this->size)) {
        header("Location: register.php?wrong-type");
        exit();
      }
      $this->extra = 'Size: ' . $this->size . ' MB';
    } else {
      return;
    }
    $this->Validation();
  }
}
$show = new Disk;
$show->ExtraForDisk();


class Book extends Thing
{

  private $weight;

  public function ExtraForBook()
  {

    $this->weight = mysqli_real_escape_string($this->connect(), $_POST['weight']);

    if (!empty($this->weight)) {
      //Checking for wrong type;
      if (!ctype_digit($this->weight)) {
        header("Location: register.php?wrong-type");
        exit();
      }
      $this->extra = 'Weight: ' . $this->weight . ' KG';
    }

    $this->Validation();
  }
}
$show = new Book;
$show->ExtraForBook();
