<?php include 'db.php'; ?>
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
        <h1>Form Login</h1>
    <form action="" method="POST">
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="name" name="name" required class="form-control" id="exampleInputName" aria-describedby="emailHelp">
  </div>      
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" required class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <button type="submit" name="submit" class="btn btn-primary"><a class="text-white" href="view.php">View Table</a></button>
</form>   
    </div>   
  </div>
</div>   
<!-- ####################SECOND Method ########################## -->
<?php
if(isset($_POST['submit'])){
    $nameStudent = $_POST['name'];
    $emailStudent = $_POST['email'];
    $passwordStudent = $_POST['password'];

$query = "INSERT INTO students(name,gmail,password) VALUE('$nameStudent','$emailStudent','$passwordStudent')";
$data = mysqli_query($conn,$query);
}
?>
</body>
</html>