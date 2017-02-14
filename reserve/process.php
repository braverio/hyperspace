<?php

start_session();

$_SESSION['flash'] = "Success! Please check your email to confirm your reservation";

header("Location: https://hyperspace.club/reserve/index.php");
?>