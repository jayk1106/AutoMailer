<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style>
        .container{
            width: 100%;
            font-size: 18px;
        }
        .form{
            width: 500px;
            margin: 100px auto;
            border: 2px solid #00cba9;
            padding: 20px;
        }
        .form input{
            width: 100%;
            border: none;
            border-bottom: 1px solid #00cba9;
            color: #00cba9;
            height: 40px;
            font-size: 18px;
            
        }
        h1{
            background: #00cba9;
            color: #fff;
            width: 100%;
            height: 100px;
            line-height:100px;
            text-align: center;
        }
        input[type='submit']{
            margin-top: 20px;
            background: #00cba9;
            color: #fff;
        }
        .form .input{
            margin: 10px 0;
        }

    </style>
</head>
<body>
    <header>
        <div class="logo">AutoMailer</div>
        <div class="nav">
            <div class="add"><a href="addnew.php"><span>Add New</span></a></div>
            <div class="update"><a href="update.php"><span>Update</span></a></div>
        </div>
    </header>
    <div class="container">
        <div class="form">
            <h1>ADD NEW</h1>
            <form action="parts/savedata.php" method="POST">
                <div class="input"><label for="name">Name</label></div>
                <div class="input"><input type="text" name="name" id="name"/></div>
                <div class="input"><label for="email">Email</label></div>
                <div class="input"><input type="email" id="email" name="email" /></div>
                <div class="input"><input type="submit" value="Submit" /></div>
            </form>    
        </div>
    </div>
</body>
</html>