<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
    </head>
    <body>
        <?php
            if(isset($_GET) && isset($_GET["errorMsg"])) {
                echo "<div>".$_GET["errorMsg"]."</div>";
            }
        ?>
        <form action="addPoints.php" method="post">
            Ændr point for
            <select name="patrulje">
                <option value="Ravnene">Ravnene</option>
                <option value="Nattergalene">Nattergalene</option>
                <option value="Lappedykkerne">Lappedykkerne</option>
                <option value="Lunderne">Lunderne</option>
            </select>
            med
            <input type="number" name="point">
            fordi
            <input type="text" name="reason">.<br>
            Kode: <input type="password" name="pw"><br>
            <input type="submit" value="Send!">
        </form>
    </body>
</html>