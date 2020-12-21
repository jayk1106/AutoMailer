<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
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
        .form textarea{
            width: 100%;
            border: none;
            border-bottom: 1px solid #00cba9;
            color: #00cba9;
            height: 100px;
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
            <h1>SEND MAIL</h1>
            <form action="parts/sendMail.php" method="POST">
                <div class="input"><label for="subject">Subject</label></div>
                <div class="input"><input type="text" name="subject" id="subject"/></div>
                <div class="input"><label for="mess">Messege</label></div>
                <div class="input"><textarea  id="mess" name="mess"></textarea></div>
                <div class="input"><input type="submit" value="SEND" /></div>
            </form>    
        </div>
    </div>
</body>
</html>