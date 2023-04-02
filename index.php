<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Git</title>

    <!-- Librerías -->
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <?php include('navbar.php'); ?>
    <div class="container">

        <div class="row-fluid text-white">
            <div class="col-md-12">
                <h3>Prueba de Git/GitHub</h3>
                <p class="text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga ex dicta
                    aspernatur expedita delectus laborum at, quaerat odit voluptas alias eum id sapiente velit natus
                    impedit repudiandae nobis nihil quisquam.</p>
            </div>
        </div>


        <div class="row">

            <!-- Espacio para David -->
            <div class="col-md-4">
                <div class="card text-center bg-dark">
                    <div class="card-header bg-warning">
                        David Hernandez
                    </div>
                    <!-- Input -->
                    <input type="text" id="txtEntrada" class="form-control text-center" placeholder="________-_">
                    <input type="text" id="txtEntrada2" class="form-control text-center">

                    <!-- Cuerpo de tarjeta -->
                    <div class="card-body bg-secondary">
                        <h5 class="card-title">Sobre mi ...</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, neque saepe.
                            Commodi, vero dolores assumenda expedita doloremque illum debitis saepe iusto, sit unde
                            reprehenderit. Numquam architecto soluta illo temporibus repellat!</p>
                        <a href="#" class="btn btn-primary">Like</a>
                    </div>
                    <div class="card-footer text-muted">
                        01/Abr/23 17:12
                    </div>
                </div>
            </div>
            <!-- Fin espacio para David -->


            <!-- Espacio para Carlos -->
            <div class="col-md-4">
                <div class="card text-center bg-dark">
                    <div class="card-header bg-warning">
                        Carlos Tamayo
                    </div>
                    <!-- Input -->
                    <input type="text" id="txtEntrada" class="form-control text-center" placeholder="________-_">
                    <input type="text" id="txtEntrada2" class="form-control text-center">

                    <!-- Cuerpo de tarjeta -->
                    <div class="card-body bg-secondary">
                        <h5 class="card-title">Sobre mi ...</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, neque
                            saepe.
                            Commodi, vero dolores assumenda expedita doloremque illum debitis saepe iusto, sit unde
                            reprehenderit. Numquam architecto soluta illo temporibus repellat!</p>
                        <a href="#" class="btn btn-primary">Like</a>
                    </div>
                    <div class="card-footer text-muted">
                        07/04/74
                    </div>
                </div>
            </div>
            <!-- Fin espacio para Carlos Tamayo -->

            <!-- Espacio para Lupe -->
            <div class="col-md-4">
                <div class="card text-center bg-dark">
                    <div class="card-header bg-warning">
                        Edith Rodriguez
                    </div>
                    <!-- Input -->

                    <!-- Cuerpo de tarjeta -->
                    <div class="card-body bg-secondary">
                        <h5 class="card-title">Sobre mi ...</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, neque
                            saepe.
                            Commodi, vero dolores assumenda expedita doloremque illum debitis saepe iusto, sit unde
                            reprehenderit. Numquam architecto soluta illo temporibus repellat!</p>
                        <a href="#" class="btn btn-primary">Like</a>
                    </div>
                    <div class="card-footer text-muted">
                        07/04/74
                    </div>
                </div>
            </div>
            <!-- Fin espacio para Lupe -->

        </div>
    </div>


    <script src="libs/jquery.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/maskinput.js"></script>
    <script>
        $('#txtEntrada').mask('99999999-9');
        $('#txtEntrada2').mask('9999-999999-999-9');
    </script>
</body>

</html>