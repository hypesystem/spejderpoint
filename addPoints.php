<?php

if(isset($_POST) && isset($_POST["pw"]) && $_POST["pw"] == "spejderkode") {
    file_put_contents("datastream.csv", buildAddPointsEvent($_POST), FILE_APPEND);
    header("Location: index.php");
    exit;
}
else {
    header("Location: admin.php?errorMsg=".urlencode("Ups! Der gik noget galt..."));
}

function buildAddPointsEvent($data) {
    $eventData = array(
        "AddPoints",
        date("Ymd-His"),
        $data["patrulje"],
        $data["point"],
        urlencode($data["reason"])
    );
    return implode(",",$eventData)."\n";
}

?>