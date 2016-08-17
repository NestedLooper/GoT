

<div class="container">

<?php
$os = 1;
foreach ($characters as $name => $character) {
    if ($os % 3 == 0) {
        echo '<div class="row">';
    }
    echo "<div class=\"col-xs-4 col-md-4\"><a href=\"index.php?name=$character->name\" class=\"thumbnail\">
    <img src=\"img/$character->img\"></a></div>";
    if ($os % 3 == 0) {
        echo '</div>';
    }
    //move it back if 3 are done
    $os++;
}

?>

</div>

