<?php
include_once 'dbh.php';

class Show extends Dbh
{

  public function AddToWeb()
  {

    $sql = "SELECT * FROM products;";

    $result = mysqli_query($this->connect(), $sql);

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //Display data from database
    foreach ($rows as $row) {
      echo '<span class="boxed">'; ?>
      <input type="checkbox" id="box" name="check[]" value="<?php echo $row['product_id']; ?>"><br>
<?php echo $row['product_sku'] . '<br>';
      echo $row['product_name'] . '<br>';
      echo $row['product_price'] . ' $' . '<br>';
      echo $row['product_extra'] . '<br>';
      echo '</span>';
    }
  }
}
$thing = new Show;
$thing->AddToWeb();
?>