<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style > 

    .main{
        width  : 300px;
        /* height : 200px ; */
        border : 2px solid blue ;
        padding: 20px ; 
        margin : 20px ;
        text-align: justify;
        display : inline-block ;
    }

    </style>

    <?php
        $color = array( 'red' , 'blue' , 'green' , 'pink' );
        for ( $i=0 ; $i < 4  ; $i++ ) {
            ?> 
        
            <h1  >  <?php echo $color[$i]  ?></h1>



            <?php }

        foreach( $color as $key ) {

    ?>
    
    <div class = 'main' style = "background : <?php echo $key ;?> " >
            <h1  >  <?php echo $key ?></h1>
            <div >Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse delectus minima numquam, neque corporis autem. Earum rerum veniam, laudantium perferendis sequi aliquam commodi, dolorum, harum corrupti officiis eveniet culpa a.</div>
        </div>

            <?php }?>
</body>
</html>