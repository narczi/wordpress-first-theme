
<?php
// echo __FILE__;
// echo "<br>";
// echo __DIR__;

if (is_writable(__DIR__)) {
    echo 'The file is writable';
} else {
    echo 'The file is not writable';
}
?>