<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
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


    <form method='post' action='insert.php' >
        <table>
            <tr>
                <td> Student's Name </td>
                <td> <input type = 'text' name = 't1' required class= 'txt' /> </td>
            </tr>

            <tr>
                <td> Gender </td>
                <td> 
                    <select name = 't2' class = 'txt' >
                        <option value='M' > Male</option>
                        <option value='F' > Female </option>
                        <option value='O' > Other </option>
                    </select> </td>
            </tr>

            <tr> 
                <td> Date Of Birth </td>
                <td> 
                    <input type='date' name = 't3' required class='txt' /> 
            </td>
            </tr>

            <tr> 
                <td> Address </td>
                <td> 
                    <input type='text' name = 't4' required class='txt' /> 
            </td>
            </tr>
            
            <tr> 
                <td> </td>
                <td> 
                    <input type='submit' value= 'Save'  class='btn' /> 
            </td>
            </tr>

            <tr>
                <td colspan = '2' >
                    <?php
                    if(isset($_GET['msg']) ){
                        echo $_GET['msg'] ;
                    }
                    ?>
                </td>
            </tr>
            

        </table>

    </form>

    <br>

    <table border='1' width = '100%'  cellpadding='10' cellspacing='0'>
        <thead>
            <th> Serial No. </th>
            <th> Students Name</th>
            <th> Gender </th>
            <th> Date Of Birth </th>
            <th> Address </th>
            <th> Opration </th>
        </thead>
        
        <tbody>
            <?php 
            $cn = new mysqli('localhost','root','','stuInfo')  ;
            $cmd = 'select * from stu_data' ;

            $data = $cn->query($cmd) ;
            while( $value = $data->fetch_row()) // 3 functions 
            {
                // print_r ($value[0]) ;
            ?>
            
            <tr>
                <td> <?php echo $value[0] ; ?> </td>
                <td> <?php echo $value[1] ; ?> </td>
                <td> <?php echo $value[2] ; ?> </td>
                <td> <?php echo $value[3] ; ?> </td>
                <td> <?php echo $value[4] ; ?> </td>
                <td>  
                    <div> 
                        <a href = 'Delete.php?msg=<?php echo  $value[0] ; ?>' > <i class= 'fa fa-trash' ></i></a>

                        <a href = 'Update_table.php?msg=<?php echo  $value[0] ; ?>' > <i class= 'fa fa-wrench' ></i></a>
                    </div> 
                </td>
            </tr>

            <?php } ?>
        </tbody>
    </table>

    
</body>
</html>