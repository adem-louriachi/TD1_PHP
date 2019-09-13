<?php
    function start_page($title)
    {
        echo '<!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;
    };

    function end_page($title) {}


    start_page('title');
    ?>

<hr/><br/><strong>Test</strong><br/><hr/>
