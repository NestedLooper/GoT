

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
<div class="col-md-12 text-center">
<form action="index.php">
    <input type="hidden" name="sort" value="true" />
    <input type="submit" value="Sort By Name" />
</form>
</div>

