<html>
    <title>Home</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

<style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  width:400px;
  height: 100px;
  margin-top: 220px;
  margin-left: 500px;
  border: 3px solid white; 
  background-image: none;
  padding: 50px;
  
}
.img{
    width: 700px;
    height: 700px;
}
body{
    background-image: url("bg.jpg");
     background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
h3 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}

p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}
.border {

  border: 3px solid grey;
  padding: 8px;
  margin-left: 10px;
  margin-right: 10px;
}

</style>
    <body> 
        <br>
    <div class="border">
        <br><br>
        <h3 style="color: #dc3545;"><b>Credit Management System</b></h3><br>
        <p style="color: black;"> <b> Hi I am Onkar Kulkarni from Smt.Kashibai Navale College Of Engineering Pune.This project is done to complete my task given by "The Spark Foundation".<br> &nbsp; &nbsp; &nbsp; I would like to thanks Mr.Aaditya Sapate and Mr.Prakash Sir and ofcourse all the mentors for their help. <br>
            Tools used:<br>
               &nbsp; 1.VS Code <br>
               &nbsp; 2.MySQLi Database <br>
               &nbsp; 3.InfinityFree<br>
            Operations: <br>
               &nbsp; 1.CRUD <br></b>
        </p>
    </div>
        <div class="center" style="text-align: center" >
            <button><a href="insert.php" style="color:chocolate; "  style="text-decoration: none">New User</a></button>
            <button><a href="allusers.php" style="color:chocolate; " style="text-decoration: none">All Users</a></button>
            <button> <a href="transaction.php" style="color:chocolate; " style="text-decoration: none">All transaction</a> </button>
        </div>
    </body>
</html>