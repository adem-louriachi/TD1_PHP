<?php
function start_page($title)
{
    echo '<!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;
};

function end_page($title) {}


start_page('title');
$operateurs = '*+-/';
?>

<h1>Testons les calculs !</h1>
<form action="calcul.php" method="post">
    <p>
        <label for="Op1">Op1</label><input id="op1" type="text" name="op1" value=" "/>
        <label for="Op2">Op2</label><input id="op2" type="text" name="op2" value=" "/><br/>
        <?php
        for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
        {
            echo '<input ';
            if($cpt == 0)
            {
                echo 'checked="checked" ';
            }
            echo 'type="radio" name="op" value="' . $operateurs[$cpt] . '"/>' . $operateurs[$cpt] . ' <br/>' . "\n";
        }
        ?>
        <input type="submit" value="Calculez"/>
    </p>
</form>

<?php
end_page('title');
?>
