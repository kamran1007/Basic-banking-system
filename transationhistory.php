<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
</head>

<body class="indexPage">
    <div class="main-div">
            <div class="center-div">


        <div class="container-fluid">
            <div class="navbar-header">
               
            </div>
            
               
                       
                    </ul>
                </li>
            
                
            </ul>
        </div>
    </nav>
        <div class="container divStyle">
        
       <br>
       <div class="table-responsive-sm">
    <table class="table text-center table-striped table-hover tableStyle ">
        <h1 class="text-center" style="color:#3498db">TRANSACTION HISTORY</h1>

            <thead>
            <tr>
            <th>Id</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Credits</th>
        
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connect.php';

            $sql ="SELECT * FROM `transaction`";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
                ?>
            <tr>
            <td><?php echo $rows['id']; ?></td>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['amount']; ?> </td>
                
            <?php
            }

            ?>
            


        </tbody>
    </table>
    </div>
        </div>
    <nav class="navbar navbar-inverse">

        <footer class="footer">
    <p style="color: #3498db" style="text-align: center"> Copyright © 2021 TECHNOKAM</p>
    <p style="color: #3498db" style="position: center">TECHNOKAM  Sky Bank  System  Created by Kamran Quamar</p>
   
     </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>