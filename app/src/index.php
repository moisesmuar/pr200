<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pr200</title>
    <meta name="description" content="Control Zonas">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="body">
    <?php
    
        require '../vendor/autoload.php';
        use Moi\Zonas\Zona;
        // $new = new Zona("cd",4,5,6);
        // echo $new;

        // $server = "mysql-pr200"; 
        // $user = "root"; 
        // $password = "rpass"; 
        // $database = "zonas"; 
        // $db = new mysqli($server,$user, $password,$database); 
        // if($db->connect_error){ 
        //     die("La conexión con la bd ha fallado, error: " . $db->connect_errno . ": ". $db->connect_error); 
        // } 

        // $sentencia = $db->prepare(" SELECT * FROM `Z400` ");     
        // $sentencia -> execute();
        // $sentencia -> bind_result($idregistro, $fh, $cantluz);
        // while( $sentencia->fetch() ){
        //     echo "<br>";
        //     echo "$idregistro, $fh, $cantluz<br>";
        // }
        // $db -> close();

    ?>
    <template id="templatezona">
        <section class="sectionDatos">
            <h1 id="h1"> </h1> 
        </section>
    </template>
    <template id="templatezonaSensor">
        <div id="divz">
            <fecha id="fechaz"> </fecha>
            <magnitud id="magnitudz"> </magnitud>
            <valor id="valorz"> </valor>
        </div>
    </template>
    <template id="templateareaSensor">
        <h3 id="areaa">  </h3> 
        <div id="diva">
            <fecha id="fechaa"> </fecha>
            <magnitud id="magnituda"> </magnitud>
            <valor id="valora"> </valor>
        </div>
    </template>

    <header class="header">
        <h1> Zonas de Almacenamiento </h1>
        <nav class="headernav">
            <ul>
                <li> <a href="index.php">Datos equipo ></a> </li>
                <li> <a href="left-sidebar.html">Datos prueba ></a> </li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <section class ="section" id="section1">
            <!-- <img src="images/almendras290x85.png" alt="" class="img"/> -->
        </section>
        <section class ="section" id="section2">
            <!-- <img src="images/cacahuetes290x85.png" alt="" class="img"/> -->
        </section>
        <section class ="section" id="section3">
            <!-- <img src="images/habas290x85.png" alt="" class="img"/> -->
        </section>
        <section class ="section" id="section4">
            <!-- <img src="images/nueces290x85.png" alt="" class="img"/> -->
        </section>
        <section class ="section" id="section5">
            <!-- <img src="images/pistachos290x85.png" alt="" class="img"/> -->
        </section>
    </main>
    <footer class="footer">
        <section class="mercadosMateriasPrimas">
            <a href="#" class="imgfoot"> <img src="" alt="" /> </a>
            <a href="#" class="imgfoot"> <img src="" alt="" /> </a>
        </section>
        <h4>API</h4>
        <a href="#">Documentación</a>
        <h4>Redes</h4>
        <a href="#">Instagram</a>
    </footer>

    <!-- <script src="./js/script1.js" language="javascript" type="text/javascript"></script> -->
    <script src="./js/script2.js" language="javascript" type="text/javascript"></script>

</body>
</html>