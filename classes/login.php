<?php
if(isset($_POST['logout'])){
    $_SESSION["log"] = 0;
    $_SESSION["wid"] = 0;
    $_SESSION["recht"] = 0;
}
if(isset($_POST['login'])){
    $db = new db();
    $result = $db->conn->query($db->select("werknemer"));
    while($acc = $result->fetch_assoc()) {
        if($_POST['username'] == $acc["werknemerGebruikersnaam"] and $_POST['password'] == $acc["werknemerWachtwoord"]){
            if($acc["Rechten"] == 1){
                $_SESSION["recht"] = 1;
            }
            else{
                $_SESSION["recht"] = 0;
            }
            $_SESSION["wid"] = $acc["werknemerId"];
            $_SESSION["log"] = 1;

        }
    }


}

if(empty($_SESSION["log"])){ $_SESSION["log"] = 0;}
if(empty($_SESSION["recht"])){ $_SESSION["recht"] = 0;}
if(empty($_SESSION["wid"])){ $_SESSION["wid"] = 0;}
if($_SESSION["log"] == 0){
    $login = ' <form method="post">
                    <input type="text" class="form-control inloginput" name="username" placeholder="Username">
                    <input type="password" class="form-control inloginput" name="password" placeholder="Password">
                    <input type="submit" class="btn btn-primary logbtn" name="login" value="log in">
                </form>';
}
else{
    $login = ' <form method="post">
                    <input type="submit" class="btn btn-primary logbtn" name="logout" value="log out">
                </form>';
}


?>