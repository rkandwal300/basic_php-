<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                .txt{
            width: 200px ;
            outline : 0 ;
            padding : 5px 5px ;
        }
        select.txt {
            width : 225px ;
        }
        .btn {
            color : white ;
            width : 225px ; 
            cursor: pointer ;
            padding : 10px 0 ;
            background : navy ; 
        }
        .b1{
            color : white ;
            padding : 8px ;
            margin : 2px  ;
            border-radius : 3px ;
        }
        .danger {
            background : red ;
        }
        .info {
            background : blue ;
        }
    </style>
</head>
<body>
<form method='post' action='Update.php' >
        <table>
        <tr>
                <td> Student's id </td>
                <td> <input type = 'text' name = 'id' readonly  value = '<?php
                    if(isset($_GET['msg'])){ echo $_GET['msg'] ; } 
                    // $_GET['msg'] && echo 'msg' ;
                    ?>' class= 'txt' /> </td>
            </tr>
            <tr>
                <td> Student's Name </td>
                <td> <input type = 'text' name = 'name' required class= 'txt' /> </td>
            </tr>

            <tr>
                <td> Gender </td>
                <td> 
                    <select name = 'gender' class = 'txt' >
                        <option value='M' > Male</option>
                        <option value='F' > Female </option>
                        <option value='O' > Other </option>
                    </select> </td>
            </tr>

            <tr> 
                <td> Date Of Birth </td>
                <td> 
                    <input type='date' name = 'dob' required class='txt' /> 
            </td>
            </tr>

            <tr> 
                <td> Address </td>
                <td> 
                    <input type='text' name = 'address' required class='txt' /> 
            </td>
            </tr>
            
            <tr> 
                <td> </td>
                <td> 
                    <input type='submit' value= 'Save'  class='btn' /> 
            </td>
            </tr>


        </table>

    </form>

</body>
</html>