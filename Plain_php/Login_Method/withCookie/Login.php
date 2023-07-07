<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form{
            width  : 300px;
            border : 2px solid black ;
            text-align: center ;
        }
    </style>
</head>
<body>
    
    <form class = 'form' action = 'request.php' method= 'post' >

    <input style='width: 290px' type='text' required name = 'txt1' placeholder = 'enter your text'    />
    <br>
    <input style='width: 290px' type='password' required name = 'txt2'  placeholder = 'enter your password'    />
    <br>
    <button type='submit' > login </button>

    </form>
    <h5>
        <?php 
        if( isset($_GET['userToken'])){ // used to check value of variable in params . 
            $msg = $_GET['userToken'] ;
            $status = $_GET['status'] ;
            echo $msg.'<br>' ;
            echo $status.'<br>' ;
        }
        if( isset($_GET['passwordToken'])){
            $msg = $_GET['passwordToken'] ;
            $status = $_GET['status'] ;
            echo $msg.'<br>' ;
            echo $status.'<br>' ;
        }
        ?>
    </h5>

</body>
</html>