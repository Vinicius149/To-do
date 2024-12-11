<?php

require_once('../database/conn.php');

$id = filter_input(INPUT_POST,'id');
$completed = filter_input(INPUT_POST,'completed');

if ($id && $completed) {
    $sql = $dsn->prepare('UPDATE task SET completed = :completed WHERE id = :id');
    $sql->bindValue(':completed', $completed);
    $sql->bindValue(':id', $id);
    $sql->execute();

    echo json_encode(['success' => true]);

} else {
    echo json_encode(['success'=> false]);  

}
exit;
?>