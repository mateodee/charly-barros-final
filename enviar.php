<?php
    $destino = "barroscarlosm@gmail.com";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $selector = $_POST["selector"];
    
    $contenido = "Nombre: " . $nombre . "\nEmail:  " . $email . "\nComo te puedo ayudar: " . $mensaje . "\nComo me encontraste: " . $selector;

    mail($destino, "Contacto", $contenido);
    header("location:../gracias.html");
?>