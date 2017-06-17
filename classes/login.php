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
                    <input type="submit" class="btn btn-primary logbtn" name="logout" value="log out">';
       if($_SESSION["recht"]==1){
           $login .= '<span class="btn btn-primary" data-toggle="modal" style="margin-top: 10px; margin-left: -150px;" data-target=".createacc">Account aanmaken</span>';
       }
    $login .= '</form>';
    if($_SESSION["recht"]==1){
        $login .= ' <div class="modal fade bs-example-modal-sm createacc" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Account aanmaken</h4>
                </div>
                <form method="get" action="hulp/Create.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Gebruikersnaam:</label>
                            <input type="text" name="genaam" >
                        </div>
                        <div class="form-group">
                            <label>Gebruikers wachtwoord</label>
                            <input type="text" name="geww">
                        </div>
                        <div class="form-group">
                            <label>Werknemers Naam</label>
                            <input type="text" name="naam">
                        </div>
                        <div class="form-group">
                            <label>Werknemers Plaats</label>
                            <input type="text" name="plaats">
                        </div>
                        <div class="form-group">
                            <label>Werknemers E-mail</label>
                            <input type="text" name="email">
                        </div>
                        <div class="form-group">
                            <label>Werknemers Telefoon</label>
                            <input type="text" name="tele">
                        </div>
                        <div class="form-group">
                            <label>Werknemers Geslacht</label>
                            <input type="text" name="slacht">
                        </div>
                        <div class="form-group">
                            <label>Rechten (1 voor ja \ 0 voor nee</label>
                            <input type="text" name="recht">
                        </div>

                        <input type="text" class="invisible" name="create" value="account">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Aanmaken</button>
                    </div>
                </form>
            </div>
        </div>
    </div>';
    }
}


?>