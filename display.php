<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">

<head>
  <title>Display</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <a name="" id="" class="btn btn-primary my-5" href="user.php" role="button">add user</a>

    <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>Display</caption>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>password</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    $sql="select * from `crud`";
                    $result = mysqli_query($con,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $name=$row['name'];
                            $email=$row['email'];
                            $mobile=$row['mobile'];
                            $password=$row['password'];

                            echo '
                            <tr class="table-primary" >
                            <td scope="row">'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>
                            <td>'.$password.'</td>
                            <td>
                            <a name="" id="" class="btn btn-success" href="update.php?updateid='.$id.'" role="button">Update</a>
                            <a name="" id="" class="btn btn-danger" href="delete.php?deleteid='.$id.'" role="button">Delete</a></td>
                            </tr>';
                        
                        }
                        
                    }
                    
                    ?>
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
    </div>
    
  </div>
</body>

</html>



