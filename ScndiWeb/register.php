<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product Add</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="jquery-3.3.1.min.js"></script>
  <script src="main.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
  <h3>Product Add</h3>
  <div class="add">
    <form id="product_form" action="products.php" method="POST">
      <div class="button-wrapper">
        <button class="button submition" type="submit" name="submit">Save</button>
        <button id="button-cancel" class="button submition" name="cancel">Cancel</button>
      </div>
      <hr>
      <h4>SKU</h4>
      <input id="sku" type="text" name="sku">
      <br>
      <h4>Name</h4>
      <input id="name" type="text" name="name">
      <br>
      <h4>Price</h4>
      <input id="price" type="text" name="price">
      <br>
      <h4>Type Switcher</h4>
      <select id="productType" name="choose">
        <option value="" disabled selected>Type Switcher</option>
        <option value="furniture">Furniture</option>
        <option value="Book">Book</option>
        <option value="DVD">DVD</option>
      </select><br>

      <form action="products.php" method="POST">
        <div class="disc">
          <h4>Size</h4>
          <input id="size" type="text" name="size"><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus semper lectus vitae lectus tempor dapibus.
            Donec suscipit vitae diam sed aliquam. Nunc mollis lorem at tellus rhoncus interdum vel
            vitae elit. Sed bibendum ut sem at vulputate. </p>
        </div>
        <div class="furnit">
          <h4>Height</h4>
          <input id="height" type="text" name="height"><br>
          <h4>Width</h4>
          <input id="width" type="text" name="width"><br>
          <h4>Length</h4>
          <input id="length" type="text" name="length"><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus semper lectus vitae lectus tempor dapibus.
            Donec suscipit vitae diam sed aliquam. Nunc mollis lorem at tellus rhoncus interdum vel
            vitae elit. Sed bibendum ut sem at vulputate. </p>
        </div>
        <div class="book">
          <h4>Weight</h4>
          <input id="weight" type="text" name="weight"><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus semper lectus vitae lectus tempor dapibus.
            Donec suscipit vitae diam sed aliquam. Nunc mollis lorem at tellus rhoncus interdum vel
            vitae elit. Sed bibendum ut sem at vulputate. </p>
      </form>
  </div>
  </div>


  <?php
  //Display errors

  $Url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if (strpos($Url, "empty-fields") == true) {
    echo "<p class='error'>* Fill all fields</p>";
  }

  if (strpos($Url, "wrong-type") == true) {
    echo "<p class='error'>* Wrong type</p>";
  }

  if (strpos($Url, "object-added") == true) {
    echo "<p class='success'>* Object added</p>";
  }
  ?>

</body>

</html>