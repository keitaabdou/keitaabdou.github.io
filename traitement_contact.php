<?php
include_once('config/db.php');

if(isset($_POST['submit'])){

        $Name=$_POST['name'];
        $Email=$_POST['email'];
        $Entreprise=$_POST['entreprise'];
        $Mobile=$_POST['mobile'];
        $Sujet=$_POST['sujet'];
        $Message=$_POST['message'];

    $ret=mysqli_query($con, "select email from contact where email='$Email'");
    $result=mysqli_fetch_array($ret);

    if($result>0){
        echo "<script>window.location.href ='index.php'</script>";

    }else{
        $query=mysqli_query($con, "insert into contact(name,email,entreprise,mobile,sujet,message) value('$Name','$Email','$Entreprise','$Mobile',' $Sujet','$Message')");
        if($query){
            echo "<script>alert('Message envoyé avec succes vous serez contacté en cas de besoin');</script>";
            echo "<script>window.location.href ='../index.php'</script>";
        }
        else{
            echo "<script>alert('Echec d'envoie du message');</script>";
            echo "<script>window.location.href ='../index.php'</script>";
        }
    }
}

?>
