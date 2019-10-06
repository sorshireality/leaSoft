<?php
require "#pdo#database_functions.php";
function getNotationList(): array {
foreach (getAllData() as $row) {
    $local_notation[$row['id'] ] = array('author' => $row['author'],'notate' => $row['notate']);
}
return $local_notation;
}
?>