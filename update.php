<?php
include "db.php";
$id = $_GET['id'];
$select = "SELECT * FROM students WHERE id='$id' ";
$data = mysqli_query($conn,$select);
$row = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Opertion PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-6 mt-4 p-4 bg-secondary text-white">
        <h1>Form Update</h1>
    <form action="" method="POST">
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="name" name="name" required value="<?php echo $row['name']; ?>" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
  </div>      
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" required value="<?php echo $row['gmail']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" required value="<?php echo $row['password']; ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="update" name="update" class="btn btn-primary">Update</button>
  <button type="back" name="back" class="btn btn-primary"><a class="text-white" href="view.php">Back</a></button>
</form>   
    </div>   
  </div>
</div>
<!-- ####################4Update Method ########################## -->
<?php
if(isset($_POST['update'])){
    $nameStudent = $_POST['name'];
    $emailStudent = $_POST['email'];
    $passwordStudent = $_POST['password'];

$update = "UPDATE students SET name='$nameStudent', gmail='$emailStudent' ,password='$passwordStudent' WHERE id='$id'";
$data = mysqli_query($conn,$update);
if ($data) {
    echo "Update Successfully";
} else {
    echo "Plz Try Again";
}
}
?>  
</body>
</html>