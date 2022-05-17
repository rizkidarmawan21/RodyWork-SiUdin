    <?php
    require_once 'db.php';
    $pesan = $_POST['pesan'];

    $db = new Database();
    $hasil = $db->inp($pesan);
    ?>