<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoMailer</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
        .container{
            width: 100%;
        }
        .heading{
            color: #00cba9;
            font-weight: 600;
        }
        .card{
            width: 100%;
            display: grid;
            grid-template-rows: 60px;
            grid-template-columns: repeat(5,1fr);
            box-shadow: 1px 1px 3px rgb(224, 224, 224);
        }
        .card div{
            display: flex;
            justify-content: center;
            align-items: center ;
        }
        .card span{
            background-color: #00cba9;
            color: #fff;
            padding: 5px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">AutoMailer</div>
        <div class="nav">
            <div class="add"><a href="addnew.php"><span>Add New</span></a></div>
            <div class="update"><a href="update.php"><span>Update</span></a></div>
            <div class="send"><a href="mailForm.php"><span>Send Mail</span></a></div>
        </div>
    </header>
    <div class="container">
        
        <div class="card heading">
            <div>Index</div>
            <div>Name</div>
            <div>Email</div>
            <div>Update</div>
            <div>Delete</div>
        </div>
        <?php
            require 'parts/config.php';
            $sql = "SELECT * FROM userdetails";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0){
                $i = 1;
                while($row = mysqli_fetch_assoc($result)){  
                
        ?>
        <div class="card">
            <div class="index"><span><?php echo $i;?></span></div>
            <div class="name"><?php echo $row['userName'];?></div>
            <div class="email"><?php echo $row['userEmail'];?></div>
            <div class="btn"><a href="update.php?id=<?php echo $row['userId'];?>"><span>Update</span></a></div>
            <div class="btn"><a href="parts/deleteData.php?id=<?php echo $row['userId'];?>"><span>Delete</span></a></div>
        </div>
        
        <?php
                    $i++;
                }
            }     
        ?>

    </div>
</body>
</html>