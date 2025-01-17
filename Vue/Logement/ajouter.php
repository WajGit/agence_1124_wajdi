<main>
    <form class="ajoutLogement" action="" method="post">
        <h1>Ajouter un logement</h1>
        <div>
            <label for="titre">Titre</label>
            <input type="text" name="titre" value="<?php echo (isset($logementN)? $logementN['titre'] : "") ?>">
            <span class="result" name="titre"></span>
        </div>
        <div>
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" value="<?php echo (isset($logementN)? $logementN['adresse'] : "") ?>">
            <span class="result" name="adresse"></span>
        </div>
        <div>
            <label for="ville">Ville</label>
            <input type="text" name="ville" value="<?php echo (isset($logementN)? $logementN['ville'] : "") ?>">
            <span class="result" name="ville"></span>
        </div>
        <div>
            <label for="cp">Code postal</label>
            <input type="text" name="cp" value="<?php echo (isset($logementN)? $logementN['cp'] : "") ?>">
            <span class="result" name="cp"></span>
        </div>
        <div>
            <label for="surface">Surface</label>
            <input type="text" name="surface" value="<?php echo (isset($logementN)? $logementN['surface'] : "") ?>">
            <span class="result" name="surface"></span>
        </div>
        <div>
            <label for="prix">Prix</label>
            <input type="text" name="prix" value="<?php echo (isset($logementN)? $logementN['prix'] : "") ?>">
            <span class="result" name="prix"></span>
        </div>
        <div>
            <label for="photo">Photo</label>
            <input type="text" name="photo" value="<?php echo (isset($logementN)? $logementN['photo'] : "") ?>">
            <span class="result" name="photo"></span>
        </div>
        <div>
            <label for="type">Type de logement</label>
            <select id="typeLogement" name="type">
                <option value="appartement"<?php echo (isset($logementN)? (($logementN['type'] == "appartement" )? "selected" : "") : "") ?>>Appartement</option>
                <option value="maison" <?php echo (isset($logementN)? (($logementN['type'] == "maison" )? "selected" : "") : "") ?>>Maison</option>
            </select>
            <span class="result" name="type"></span>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="" cols="30" rows="10"><?php echo (isset($logementN)? $logementN['description'] : "") ?></textarea>
        </div>
        <div>
            <button type="submit" name="ajouterLogement"><?php echo (isset($logementN)? "<i class='fa-solid fa-pen'></i> Modifier ce logement" : "Ajouter ce logement") ?></button>
            <span class="result" name="ajouterLogement"></span>
        </div>
        <div>
        <?php echo (isset($logementN)?
            "<a class='boutonDelete' href='?action=delete&id=". base64_encode($logementN['id_logement']) ."'><i class='fa-solid fa-trash'></i> Supprimer ce logement</a>"
            :
            "")
            ?>
        </div>
        <div>
            <button name="genereLogement">Générer automatiquement</button>
            <span class="result" name="genereLogement"></span>
        </div>
    </form>
</main>  