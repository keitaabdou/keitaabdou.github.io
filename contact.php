<?php
require_once("config/db.php");

    if(!empty($_POST["emailid"])) {
        $result = mysqli_query($con,"SELECT count(*) FROM contact WHERE email='" . $_POST["emailid"] . "'");
        $row = mysqli_fetch_row($result);
        $email_count = $row[0];
        if($email_count>0) echo "<span style='color:red'> Email Existe déjà!!.</span>";
        else echo "<span style='color:green'> Email Disponible.</span>";
    }
?>