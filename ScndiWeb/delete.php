<?php
include_once 'dbh.php';
// Delete from Database
class Delete extends Dbh
{

    public function DeleteObject()
    {
        if (isset($_POST['delete'])) {
            $arr = $_POST['check'];
            foreach ($arr as $id) {
                mysqli_query($this->connect(), "Delete from products where product_id=" . $id);
            }
            header("Location: index.php?deleted");
            exit();
        }
    }
}
$del = new Delete;
$del->DeleteObject();
