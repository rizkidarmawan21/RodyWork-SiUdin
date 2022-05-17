<?php
    require_once 'db.php';
    
    $id = $_POST['id'];

    $db = new Database();
    $hasil = $db->addLike($id);

