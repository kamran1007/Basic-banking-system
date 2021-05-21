<?php
include 'connect.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $toUser = $_POST['to'];
    $amnt = $_POST['amount'];

    $sql = "SELECT * FROM `users` WHERE id='$from'";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the credits are to be transferred.

    $sql = "SELECT * FROM `users` WHERE id='$toUser'";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

  //if amount that we are gonna deduct from any user is
  // greater than the current credits available then print insufficient balance.
 if($amnt > $sql1['credit']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    
 else if($amnt == 0){
     echo "<script type='text/javascript'>alert('Enter Amount Greater than Zero');
</script>";
 }
    else {
        
        //if not then deduct the credits from the user's account that we selected.
        $newCredit = $sql1['credit'] - $amnt;
        $sql = "UPDATE `users` SET credit=$newCredit WHERE id='$from'";
        mysqli_query($conn,$sql);
     


        $newCredit = $sql2['credit'] + $amnt;
        $sql = "UPDATE `users` SET credit=$newCredit WHERE id='$toUser'";
        mysqli_query($conn,$sql);
           
        $sender = $sql1['names'];
        $receiver = $sql2['names'];
        $sql = "INSERT INTO `transaction`(`sender`,`receiver`, `amount`) VALUES ('$sender','$receiver','$amnt')";



        $query=mysqli_query($conn,$sql);
        if($query){
    
       echo  "<script>alert('Transaction Successfull!');
window.location='transationhistory.php';
</script>";
        
        }
       
        $newCredit= 0;
        $amnt =0;
       
     
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credits Transfer</title>
        <link rel="stylesheet" href="user.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .bg-4 { 
    background-color: #3498db;
    color: #fff;
    padding-top: 40px;
    padding-bottom: 40px;
  }
    </style>
</head>


<body class="indexPage">


        
    <a class="navbar-brand" href="./index.php" style="font-size: 40px">
            </div>
        
                <li class =><a href="./index.php"></a></li>
                
                        <li><a href="user.php">  </a></li>
                        <li><a href="transationhistory.php"> </a></li>
                    </ul>
                </li>
                
                
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="main-div">
            <div class="center-div">
        <h1 style="color: #fff">CREDITS TRANSFER PROCESS</h1>
        <form method="post" name="tcredit"><br/>
            <?php
                include 'connect.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  `users` WHERE id='$sid'";
                $query=mysqli_query($conn,$sql);
                if(!$query)
                {
                    echo "Error : ".$sql."<br/>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($query);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>

            <label style="color: #fff"> Credits Transfer From: </label><br/>
        <div class="table-responsive">
        <table class="table text-center table-striped table-hover tableStyle">

            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Credits</th>
            </tr>

            <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['names'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['credit'];?></td>
            </tr>
            
        </table>
              </div>
            <label style="color: #fff">Credits Transfer To:</label>
        <select class=" form-control" name="to" style="margin-bottom:5%;" required>
            <option value="" disabled selected> To </option>
            <?php
                include 'connect.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM `users` WHERE id!='$sid'";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br/>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table text-center table-striped " value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['names'] ;?> (credit: 
                    <?php echo $rows['credit'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
        </select> <br>
        <br>
            <label style="color: #fff">Enter Number of CREDITS to be Transferred:</label>
            <input type="number"  class="form-control" name="amount" min="0" required> <br>
            <br>
                <div class="text-center btn3">
            <button class="userbtn" name="submit" id="myBtn" type="submit" style="color: #3498db"  style="background: #fff" 
>Transfer</button>
            </div>
        </form>
    </div>
   


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

            




                    







    







    
