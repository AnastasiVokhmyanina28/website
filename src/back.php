<?php

include_once 'db.php';
if (isset($_POST['done'])) {
    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $query = "INSERT INTO datastorage (fio, email, telephone, service, date, time)
values ('$fio', '$email', '$telephone', '$service', '$date', '$time')";
    if ($result = pg_query($query)) {
        echo 'Ваша заявка принята!';
        } else {
        echo "error";
    }
}

?>