<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border ='1' cellpadding = '20'>

    <thead>
        <th>Name </th>
        <th>Class</th>
        <th>Address </th>
    </thead>
    <tbody>

    <?php 
    $data = array (
        array( 'Ajay'  , 'BCA'  , 'Rishikesh' ),
        array( 'Vikas' , 'B.com', '14 bigha' ),
        array( 'Balram', 'B.tech','Dhalanwala' )
    ) ;
    foreach( $data as $item ) {
    ?>

    <tr>
        <td> <?php echo  $item[0] ?> </td>
        <td> <?php echo  $item[1] ?> </td>
        <td> <?php echo  $item[2] ?> </td>
    </tr>

    <?php }?>


    </tbody>

</table>


</body>
</html>