<?php
$db = new db();
$classtable = new table();
if(empty($_GET["table"])){$_GET["table"] = "bedrijf";}
if($_GET["table"] == "bedrijf"){
    $table = $classtable->bedrijfen();
    $bedrijven = $db->conn->query($db->select("bedrijf"));
    while($row = $bedrijven->fetch_assoc())
    {
        echo '
    <!-- Small modal -->


    <div class="modal fade bs-example-modal-sm upd'.$row["bedrijfId"].'" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            update bedrijf '.$row["bedrijfId"].'?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>';

        echo '
    <div class="modal fade bs-example-modal-sm del'.$row["bedrijfId"].'" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
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
    while ($row = $kamers->fetch_assoc()) {
        echo '

    <div class="modal fade bs-example-modal-sm upd' . $row["kamerId"] . '" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            update kamer ' . $row["kamerId"] . '?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>';

        echo '
    <div class="modal fade bs-example-modal-sm del' . $row["kamerId"] . '" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            dlete >?' . $row["kamerId"] . '
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
    while ($row = $object->fetch_assoc()) {
        echo '
    <div class="modal fade bs-example-modal-sm upd' . $row["objectId"] . '" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            update object ' . $row["objectId"] . '?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>';

        echo '
    <div class="modal fade bs-example-modal-sm del' . $row["objectId"] . '" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            dlete >?' . $row["objectId"] . '
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <a class="btn btn-primary" href="hulp/Delete.php?delete=object&id='.$row["bedrijfId"].'">Jazeker</a>
          </div>
        </div>
      </div>
    </div>';
    }
}


?>