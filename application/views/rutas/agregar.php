<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <?php 
        if(!empty($success_msg)){
            echo '<div class="alert alert-success">'.$success_msg.'</div>';
        }elseif(!empty($error_msg)){
            echo '<div class="alert alert-danger">'.$error_msg.'</div>';
        }
    ?>
    <form method="post" action="" class="form">
            <label for="nombre">Title</label>
            <input type="text" name="nombre" placeholder="Nombre de la ruta" >                    
            <input type="submit" name="postSubmit" value="Aceptar"/>
    </form>
</body>
</html>    
