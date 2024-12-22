<?php
include "db.php";
$id = $_GET['id'];
$query = "DELETE FROM students WHERE id='$id'";
$data = mysqli_query($conn,$query);
if ($data) {
    ?>
    <script>
        alert('Delete successfully');
        window.open("http://localhost/crud_Php/view.php","_self")
    </script>
    <?php
} else {
    ?>
    <script>
        alert('Something is worong successfully');
    </script>
    <?php
}


?>