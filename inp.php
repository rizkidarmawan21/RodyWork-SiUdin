    <?php
    require_once 'db.php';
    $pesan = htmlspecialchars($_POST['pesan']);

    $db = new Database();
    $hasil = $db->inp($pesan);
    ?>