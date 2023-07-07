<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method ='post' action="Insert_Img.php" enctype = 'multipart/form-data' >
        <table cellpadding = '10'>
            <tr>
                <td> Student's Name </td>
                <td> <input type = 'text' name = 'name' required class= 'txt' /> </td>
            </tr>

            <tr>
                <td> upload a image :- </td>
                <td>
                    <input type="file"  name="img_data"  required  >
                </td>
            </tr>

            <tr>
                <td></td>
                <td> 
\
                    <input type="submit">
                </td>
            </tr>



        </table>
    </form >
    <hr>

    <div  class= 'container' >
        
        <?php
                $conn  =  new mysqli ('localhost','root','','stuInfo'  );
                $query = "select * from img_detail " ;
                $data =  $conn -> query($query) ;
                while ($value = $data-> fetch_row()){
                    // print_r ($value ) ;
                    ?>
                    <div style='display : flex ;  justify-content:start ; align-items: center ; ' >
                        <div style="height:100px; width: 100px; margin-top : 20px;">
                            <img     src="<?php echo $value[1] ; ?>"S alt = "<?php $value[2]; ?>"   width='100%'  />
                        </div>
                        <a href ='Delete.php?msg=<?php echo $value[1]?>' style ='text-decoration:none ; color:black; margin-left: 10px; border: 1px solid gray ; border-radius : 50% ; font-size:15px; ' > X</a>
                    </div>
                    <div> 
                        <?php

    if(isset($_GET['del_msg'])){
        $msg =$_GET['del_msg'] ;
        echo $msg ;
    }
                        ?>
                    </div>

                <?php } ?>

    </div>
</body>
</html>