
    <?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['check_list'])) {
        //Compter le nombre de cases cochées.
        $checked_count = count($_POST['check_list']);
        $name = $_POST['username'];
        echo $name . " ,mes couleurs préférées sont " . $checked_count . " option(s): <br/>";
        //stocker et afficher les valeurs de chaque case cochée.
        foreach ($_POST['check_list'] as $selected) {
            echo "<p>" . $selected . "</p>";
        }
    } else {
        echo "<b>Veuillez sélectionner au moins une option.</b>";
    }
}
?>
