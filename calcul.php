<?php
function start_page($title)
{
    echo '<!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;
};

function end_page($title) {}


start_page('title');


$op1 = $_GET['op1'];
$op2 = $_GET['op2'];
$op = $_GET['op'];
$action = $_GET['action'];
print_r($action). PHP_EOL;
$operateurs = '*+-/';

if('*' == $op)
{
    echo $op1 * $op2;
}
elseif('+' == $op)
{
    echo $op1 + $op2;
}
else
{
    echo '<br/><strong>opérateur ' . $op . ' non géré </strong>';
}

?>


