<?php
    include 'connection.php';
/*
        $UserName = $_POST['UserName'];
        $Email = $_POST['Email'];
        $Contact = $_POST['Contact'];
        $Credits = $_POST['Credits'];
*/
        $q="select * from users";

        $query = mysqli_query($con,$q);
?>

<html>
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

<style>
    body{
    background-image: url("users.jpg");
     background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>


    <body>
        <div class="container">
        <div class="col-log-12">
            <br><br>
            <h1 class="text-warning text-center ">All Users</h1>

            <table   class="table table-striped table-hover table-bordered"><br>
                <tr class="bg-dark text-white text-center">
                    <th>UserName</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Credits</th>
                    <th>Delete</th>
                    <th>Transaction</th>
                </tr>

                    <?php
    include 'connection.php';

        $q="select * from users";

        $query = mysqli_query($con,$q);

        while($res = mysqli_fetch_array($query))
        {

?>
                <tr style="color:white;background-color: rgba(0,0,0,.6);"      class="text-center">
                    <td> <?php echo $res['UserName'] ;?></td>
                    <td><?php echo $res['Email'] ;?></td>
                    <td><?php echo $res['Contact'] ;?></td>
                    <td><?php echo $res['Credits'] ;?></td>
                    <td> <button class="btn-danger btn"> <a href="delete.php?id= <?php echo $res['id'] ;?>"class="text-white">Delete</a></button></td>
                    <td> <button class="btn-primary btn"> <a href="credit.php?id= <?php echo $res['id'] ;?>"class="text-white">Start</a></button></td>
                </tr>
                <?php 
                    }
                ?>
            </table>

        </div>
        </div>
        <div class="center" style="text-align: center" >
            <button><a href="insert.php" style="color:chocolate; "  style="text-decoration: none">New User</a></button>
            <button><a href="allusers.php" style="color:chocolate; " style="text-decoration: none">All Users</a></button>
            <button> <a href="transaction.php" style="color:chocolate; " style="text-decoration: none">All transaction</a> </button>
        </div>
    </body>
</html>