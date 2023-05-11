<?php
include'connect.php';
$id=$_GET['updateid'];
$sql = "select * from `crud` where id='$id'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name= $row['name'];
    $email= $row['email'];
    $mobile= $row['mobile'];
    $password= $row['password'];

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $password= $_POST['password'];

    $sql = "update `crud` set id='$id', name='$name', email='$email', mobile='$mobile', password='$password' where id='$id'";
    $result = mysqli_query($con,$sql);

    if($con){
        header('location:display.php');
    }
}


?>



<!doctype html>
<html lang="en">

<head>
  <title>CRUD OPERATION</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container mt-5">
    <form method="post" class="mt-5">
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId" value="<?php echo $name; ?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" value="<?php echo $email; ?>">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Mobile</label>
          <input type="text" class="form-control" name="mobile" id="" aria-describedby="emailHelpId" value="<?php echo $mobile; ?>">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="" value="<?php echo $password; ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</body>

</html>

