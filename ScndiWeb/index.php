<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/_reset.css" />
  <link rel="stylesheet" href="style/main.css" />
  <title>Product Store</title>
</head>

<body>
  <form action="delete.php" method="POST" class="block-header-container">
    <div class="header-wrapper">
      <div class="header-text">
        <h1>Product List</h1>
      </div>
      <div class="button-wrapper">
        <button type="button" onclick="window.location.href='register.php'" class="button button-add">ADD</button>
        <button name="delete" type="submit" class="button button-delete">MASS DELETE</button>
      </div>
    </div>
    <hr />

    <?php include_once 'show.php'; ?>
    <hr />
    <footer>
      <div>
        <p>Scandiweb Test assignment</p>
        <div class="footer-creator">
          <p>© Artjoms Dambergs</p>
        </div>
      </div>
    </footer>
  </form>
</body>

</html>