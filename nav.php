<?php
echo "<ul class='nav'>";
for($i=0;$i<$myNavCount; $i++){
    echo "<li class='nav'><a class='nav' href='".$myNav[$i]['page']."'>".$myNav[$i]['title']."</a></li>";
}
echo "</ul";
?>