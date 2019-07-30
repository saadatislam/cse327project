<?php

    require_once "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paitent List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="addPaitent.css" >
</head>
<body>
<!-- <div class="container">
    <table class="table">
    <thead class="thead-dark">
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Address</th>
    <th scope="col">E-mail</th>
    </tr>
    </thead>
    </table> -->
    <!-- </div> -->
    <table border="1">
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>E-mail</th>
        </tr>
</table>    
    <?php 
        $sql = "SELECT id, name,address, email FROM paitentInfo";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {        
        while($row = mysqli_fetch_assoc($result)) {
     ?>

     <table border="1" style="table-layout: fixed width: 100% ;">
        
         <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
         </tr> 
     </table>
    <!-- <div class="container"> -->
    <!-- <table class="table">
    
    <tbody>
    <tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    </tr>
    </tbody>
    </table>
    </div> -->
     <?php

        }
    } else {
    echo "0 results";
    }
     ?>
    
    <!-- </div> -->


    <!--Bootstrap JS CDN-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>