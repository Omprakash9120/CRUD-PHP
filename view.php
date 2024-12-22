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
    <div class="col-6 mt-4 p-4 s-3 bg-info text-white">
    <h1>Table</h1>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>

  <!-- ################### Third Method ############### -->
   <?php
   $query = "SELECT * FROM students";
   $data = mysqli_query($conn,$query);
   $result = mysqli_num_rows($data);
   if ($result) {
    while ($row =mysqli_fetch_array($data)) {
      ?>
    <tbody>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['gmail']; ?></td>
      <td><?php echo $row['password']; ?></td>
      <td><a href="update.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-success">Update</button></a></td>
      <td><a onclick="return confirm('Are you sure, you want to delete')" href="delete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
    </tr>
    <?php
    }
   } else { 
    ?>
    <tr>
      <td>Data Not Found</td>
    </tr>
  <?php
   }
   
   ?>
  </tbody>
  
</table>
    </div>    
  </div>
</div>    
</body>
</html>