<main>
    <?php
    if ($logements != []) {
        echo "<ul class='listLogement'>";
        foreach ($logements as $logement){
            echo "<li>";
            echo ($logement['photo'] == "")? "<img src='https://placehold.co/600x600/png' alt='photoVide'/>"
            : "<img src='" . $logement['photo']  . "' alt='" . $logement['titre'] ."'/>";
            echo "<div><p>" . $logement['ville'] . " (" . $logement['cp'] .")</p>";
            echo "<ul><li>" . $logement['type'] . "</li></ul>";
            echo "<span class='prix'>" . $logement['prix'] . " €</span>";
            echo "<p class='description'>";
            echo ($logement['description'] == "")? substr(file_get_contents('http://loripsum.net/api'), 3, 100) : $logement['description'];
            echo "</p>";
            echo "<a href='?action=logement&id=" . base64_encode($logement['id_logement']) ."'> <i class='fa-solid fa-eye'></i>Voir la suite</a></div>";
            echo "</li>";
        }
        echo "</ul>";
    }
    else{
        echo "<h1>Rien à afficher<h1>";
    }
    ?>
</main>