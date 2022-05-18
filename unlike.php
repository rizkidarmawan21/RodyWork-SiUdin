<?php
    require_once 'db.php';
    
    $id = $_POST['id'];

    $db = new Database();
    $db->unLike($id);