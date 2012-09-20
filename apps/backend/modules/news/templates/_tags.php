<?php
$tags = $news->getTags();
foreach ($tags as $tag) {
    echo $tag->getName() . " | ";
}
?>
