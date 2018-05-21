<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
</head>
<body>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($rutas)){ 
                            foreach($rutas as $ruta){ ?>
                        <tr>
                            <td><?php echo $ruta['id']; ?></td>
                            <td><?php echo $ruta['nombre']; ?></td>
                        </tr>
                    </tbody>
                </table>
                            <?php }
                        }?>
</body>
</html>