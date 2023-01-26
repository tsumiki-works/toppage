<?php
if (!isset($_GET['page'])) {
    // ![TODO]
    readfile('blockindex');
    return;
}
$path = './articles/' . $_GET['page'];
if (!file_exists($path)) {
    // ![TODO]
    echo 'invalid page';
    return;
}
readfile($path);
?>
