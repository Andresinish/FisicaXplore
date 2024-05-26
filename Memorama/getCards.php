<?php

define ('DBHOST','localhost');
define ('DBUSER','root');
define ('DBPASSWD','');
define ('DBNAME','fisicaxplore');

$miConexion = new mysqli(DBHOST, DBUSER, DBPASSWD, DBNAME);

if($miConexion->connect_error) {
    die("La conexión con la base de datos ha fallado: " . $miConexion->connect_error);
}

$IDTema = isset($_GET['IDTema']) ? intval($_GET['IDTema']) : 0;

if ($IDTema > 0) {
    $sql = "SELECT * FROM cards WHERE IDTema = $IDTema";
    $result = $miConexion->query($sql);

    $cards = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cards[] = $row;
        }
    }

    $miConexion->close();

    echo json_encode($cards);
} else {
    echo json_encode([]);
}
?>
