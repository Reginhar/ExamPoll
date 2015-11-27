<?php
$posted = isset($_POST["vote"]);

/**
 * Geeft de CSS-waarde van display die de form met de poll moet hebben
 * 
 * @param string $posted "hidden" als de gebruiker al gestemd heeft; anders
 * "visible"
 */
function getFormDisplay($posted) {
    if ($posted) {
        echo "none";
    } else {
        echo "initial";
    }
}

/**
 * Geeft de CSS-waarde van display die de sectie met resultaten moet hebben
 * 
 * @param string $posted "visible" als de gebruiker al gestemd heeft; anders
 * "hidden"
 */
function getResultsDisplay($posted) {
    if ($posted) {
        echo "initial";
    } else {
        echo "none";
    }
}
?>

<html>
    <head>
        <title>Thema laatste schooldag</title>
    </head>
    <body>
        <div style="display: <?php getFormDisplay($posted); ?>;">
            <h1>Stem op een thema:</h1>
            <form method="post"
                  action="poll.php">
                <input type="radio" name="vote" value="1" />The Fellowship of the Examen<br />
                <input type="radio" name="vote" value="2" />The Examen Awakens<br />
                <input type="radio" name="vote" value="3" />Fifty Shades of Examens<br />
                <input type="radio" name="vote" value="4" />The Dark Examen Rises<br />
                <input type="radio" name="vote" value="5" />Exception<br />
                <input type="submit" value="Stem" />
            </form>
        </div>
        <div style="display: <?php getResultsDisplay($posted); ?>;">
            Je hebt gekozen voor: <?php echo $_POST["vote"]; ?>
        </div>
    </body>
</html>