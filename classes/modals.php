<?php
$db = new db();
$classtable = new table();
if(empty($_GET["table"])){$_GET["table"] = "bedrijf";}
if($_GET["table"] == "bedrijf"){
    $table = $classtable->bedrijfen();
    $bedrijven = $db->conn->query($db->select("bedrijf"));
    echo '
    <div class="modal fade bs-example-modal-sm createbedrijf" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Bedrijf aanmaken</h4>
          </div>
          <form method="get" action="hulp/Create.php">
          <div class="modal-body">
            
                <div class="form-group">
                    <label for="myModalLabel">Bedrijfs Naam:</label>
                    <input type="text" name="bedrijfnaam" class="form-control">
                </div>
                <div class="form-group">
                    <label>Bedrijfs Plaats:</label>
                    <input type="text" name="bedrijfplaats" class="form-control">
                </div>
 
                <div class="form-group">
                    <label>Bedrijfs Telefoon:</label>
                    <input type="text" name="bedrijftelefoon" class="form-control">
                </div>
            <input type="text" class="invisible" name="create" value="bedrijf">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
           </form>
        </div>
      </div>
    </div>';
    while($row = $bedrijven->fetch_assoc())
    {
        echo '
    <!-- Small modal -->


    <div class="modal fade bs-example-modal-sm upd'.$row["bedrijfId"].'" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Bedrijfs gegevens veranderen</h4>
          </div>
          <form method="get" action="hulp/Update.php">
          <div class="modal-body">

           <div class="form-group">
                    <label>Bedrijfs Naam:</label>
                    <input type="text" name="bedrijfnaam" class="form-control" value="'.$row["bedrijfNaam"].'">
           </div>
           <div class="form-group">   
                    <label>Bedrijfs Plaats:</label>
                    <input type="text" name="bedrijfplaats" class="form-control" value="'.$row["bedrijfPlaats"].'">
           </div>
           <div class="form-group">  
                    <label>Bedrijfs Telefoon:</label>
                    <input type="text" name="bedrijftelefoon" class="form-control" value="'.$row["bedrijfTelefoon"].'">
           </div>
           
            <input type="text" class="invisible" name="update" value="bedrijf">
            <input type="text" class="invisible" name="id" value="'.$row["bedrijfId"].'">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
           </form>
        </div>
      </div>
    </div>';

        echo '
    <div class="modal fade bs-example-modal-sm del'.$row["bedrijfId"].'" tabindex="-1" role="dialog" aria-labelledby="mymdallModalLabel">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Berdijf deleten</h4>
          </div>
          <div class="modal-body">
            Weet je zeker dat je het bedrijf '.$row["bedrijfNaam"].' wilt verwijderen?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <a class="btn btn-primary" href="hulp/Delete.php?delete=bedrijf&id='.$row["bedrijfId"].'">Jazeker</a>
          </div>
        </div>
      </div>
    </div>';
    }

}
if($_GET["table"] == "kamer") {
    $table = $classtable->kamers();
    $kamers = $db->conn->query($db->select("kamer"));
    echo '
    <div class="modal fade bs-example-modal-sm createkamer" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Kamer aanmaken</h4>
          </div>
          <form method="get" action="hulp/Create.php">
          <div class="modal-body">

            <div class="form-group">
                    <label>Kamer Naam:</label>
                    <input type="text" name="kamernaam" class="form-control">
            </div> 
            <div class="form-group">
                    <label>Schoonmaak tijd:</label>
                    <input type="text" name="schoonmaaktijd" class="form-control">
            </div> 
            <div class="form-group">
                    <label>Kamer minimum Punten:</label>
                    <input type="text" name="kamerminpunten" class="form-control">
            </div>
            <div class="form-group">
                    <label>Kamer prioriteit:</label>
                    <input type="text" name="kamerprioriteit" class="form-control">
            </div>
            <div class="form-group">
                    <label>Werknemer id:</label>
                    <input type="text" name="werknemerid" class="form-control">
            </div>
            <input type="text" class="invisible" name="create" value="kamer">
            <input type="text" class="invisible" name="bedrijfid" value="'.$_GET['bedrijfid'].'">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
           </form>
        </div>
      </div>
    </div>';
    while ($row = $kamers->fetch_assoc()) {
        echo '

    <div class="modal fade bs-example-modal-sm upd' . $row["kamerId"] . '" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Kamer updaten</h4>
          </div>
           <form method="get" action="hulp/Update.php">
          <div class="modal-body">

           <div class="form-group">
                    <label>Kamer Naam:</label>
                    <input type="text" name="kamernaam" class="form-control" value="'.$row["kamerNaam"].'">
           </div>
           <div class="form-group">
                    <label>Minimale punten:</label>
                    <input type="text" name="kamerminpunten" class="form-control" value="'.$row["kamerminpunten"].'">
            </div>
            <div class="form-group">
                    <label>Kamer prioriteit:</label>
                    <input type="text" name="kamerprioriteit" class="form-control" value="'.$row["kamerPrioriteit"].'">
            </div>
            <input type="text" class="invisible" name="update" value="kamer">
            <input type="text" class="invisible" name="id" value="'.$row["kamerId"].'">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
           </form>
        </div>
      </div>
    </div>';

        echo '
    <div class="modal fade bs-example-modal-sm del' . $row["kamerId"] . '" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Kamer verwijderen</h4>
          </div>
          <div class="modal-body">
             Weet je zeker dat je het bedrijf '.$row["kamerNaam"].' wilt verwijderen?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <a class="btn btn-primary" href="hulp/Delete.php?delete=kamer&id='.$row["kamerId"].'">Jazeker</a>
          </div>
        </div>
      </div>
    </div>';
    }
}
if($_GET["table"] == "object") {
    $table = $classtable->objecten();
    $object = $db->conn->query($db->select("object"));
    echo '
    <div class="modal fade bs-example-modal-sm createobject" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Object aanmaken</h4>
          </div>
          <form method="get" action="hulp/Create.php">
          <div class="modal-body">

           <div class="form-group">
                    <label>Object Naam:</label>
                    <input type="text" name="objectnaam" class="form-control">
           </div>
           <div class="form-group">   
                    <label>Object Punten:</label>
                    <input type="text" name="objectpunten" class="form-control">
           </div>
           <div class="form-group">    
                    <label>Object aantal:</label>
                    <input type="text" name="objectaantal" class="form-control">
           </div>
            <input type="text" class="invisible" name="create" value="object">
            <input type="text" class="invisible" name="kamerid" value="'.$_GET["kamerid"].'">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
           </form>
        </div>
      </div>
    </div>';
    while ($row = $object->fetch_assoc()) {
        echo '
    <div class="modal fade bs-example-modal-sm upd' . $row["objectId"] . '" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
           <form method="get" action="hulp/Update.php">
          <div class="modal-body">

            <div class="form-group">
                    <label>Object naam:</label>
                    <input type="text" name="objectnaam" class="form-control" value="'.$row["objectNaam"].'">
            </div>
             <div class="form-group">  
                    <label>Object punten:</label>
                    <input type="text" name="objectpunten" class="form-control" value="'.$row["objectPunten"].'">
              </div>
              <div class="form-group">
                    <label>Object aantal:</label>
                    <input type="text" name="objectaantal" class="form-control" value="'.$row["objectAantal"].'">
               </div>
            <input type="text" class="invisible" name="update" value="object">
            <input type="text" class="invisible" name="id" value="'.$row["objectId"].'">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
           </form>
        </div>
      </div>
    </div>';

        echo '
    <div class="modal fade bs-example-modal-sm del' . $row["objectId"] . '" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Object verwijderen</h4>
          </div>
          <div class="modal-body">
             Weet je zeker dat je het bedrijf '.$row["objectNaam"].' wilt verwijderen?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <a class="btn btn-primary" href="hulp/Delete.php?delete=object&id='.$row["objectId"].'">Jazeker</a>
          </div>
        </div>
      </div>
    </div>';
    }
}


?>