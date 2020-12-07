<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
<div class="col-md-8">
        <div>
            <h1 class="mt-5">Lista de Clientes</h1>
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>   
                    </tr>
                </thead>
                <tbody> 
                            <tr>
                                <th scope='row'><?php echo e($id); ?></th>
                                <th scope='row'><?php echo e($nome); ?></th>
                                <th scope='row'><?php echo e($email); ?></th> 
                            </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\init\resources\views/client.blade.php ENDPATH**/ ?>