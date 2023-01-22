<?php
if (!isset($_GET['page'])) {
    // ![TODO]
    echo 'ピラミッドの演算やブロックの仕様について記載していきます。現現在備中。';
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
