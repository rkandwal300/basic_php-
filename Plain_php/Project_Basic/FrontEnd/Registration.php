<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        *{
            margin  : 0px ;
            padding : 0px ;
        }
        .background{
            height  : 100vh;
            width   : 100% ;
            display : flex;
            align-items : center;
            justify-content : center ;
            overflow: hidden;
            background:  	rgb(208,208,208) ;

        }
        .form{
            height  : 500px;
            min-width   : 300px ;
            width   : 100% ;
            margin-right : 10% ;
            margin-left  : 10% ;
            display : flex;
            align-items : center ;
            justify-content : flex-start ;
            flex-direction: column ;
            border-radius : 7px;
            padding : 20px ;
            /* border : 0.5px solid  black ; */
            box-shadow: 5px 5px 5px 1px rgba(0, 0, 0, 0.2);
            background : white  ;
        }
        .group{
            width:100% ;
            display:flex;
            align-items : center ;
            justify-content : center  ;

        }
        .head{
            width:30% ;
            font-size: 20px ;
            font-weight : 300;
            cursor : pointer ;
        }
        .ip{
            width: 50% ;
            height:20px ;
            font-size : 17px ;
            padding : 4px ;
            
        }
        .error{
            width:50% ;
            margin-left: 30% ;
            height: 30px;
            color : red ;
            font-size : 20px ;
            font-weight : 400 ;
            margin-top: 10px ;
            margin-bottom : 20px ;
        }
    </style>
</head>
<body>
    <div class='background'  >
        <form class='form' method = 'post' action="../Backend/auth.php" enctype = 'multipart/form-data' > 
            <div style ='font-size:36px; font-wieght: 400; border-bottom:2px solid black ; padding-bottom : 10px; margin-bottom : 30px ; cursor:pointer ; ' > Registration  </div>
            
            <!--- fullname --->
            <div class='group'> 
                <div class='head'>   Full Name :- </div>
                <input class='ip' required name = 'name'  type ="text" placeholder="eg:- shawn michele " />
            </div>
            <div class='error'> 
                <?php
                    if( isset($_GET['error']) ){
                        $error = $_GET['error'] ;
                        echo $error ;
                    }
                    ?>
        </div>
        <!--- Username --->
            <div class='group'> 
                <div class='head'>   username :- </div>
                <input class='ip' name= 'username' required  type ="text" placeholder="eg:- shawn695 " />
            </div>
            <div class='error'> 
            <?php
                    if( isset($_GET['error']) ){
                        $error = $_GET['error'] ;
                        echo $error ;
                    }
                        ?>
        </div>

                    
        <!--- email --->
        <div class='group' > 
                <div class='head'>   Email :- </div>
                <input class='ip' name='email' type ="email"  required  placeholder="eg:- shawn695@gnmail.com " />
            </div>
            <div class='error'> 
            <?php
                    if( isset($_GET['error']) ){
                        $error = $_GET['error'] ;
                        echo $error ;
                    }
                        ?>
        </div>

        <!--- password --->
        <div class='group' > 
        <div class='head'>   password :- </div>
                <input class='ip' name='password' required  name='profile' type ="password" placeholder=" @Rs123xx" />
            </div>
            <div class='error'> 
            <?php
                    if( isset($_GET['error']) ){
                        $error = $_GET['error'] ;
                        echo $error ;
                    }
                        ?>
        </div>

        <div class='group' > 
        <div class='head'>   Profile Picture :- </div>
                <input  required name='profile'  type ="file"  />
            </div>
            <div class='error'> 
            <?php
                    if( isset($_GET['error']) ){
                        $error = $_GET['error'] ;
                        echo $error ;
                    }
                        ?>
        </div>

        <div> 

        <button type = 'submit'  style='padding:10px; border-radius : 20%; border:1px solid gray ; background: blue; color:white; cursor:pointer; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2) ; margin-right:10px ;  ' > Sign Up</button>

        <a href='#' style ='text-decoration:none; ' > already a user . login ?</a>
        </div>



        </form>
    </div>
</body>
</html>