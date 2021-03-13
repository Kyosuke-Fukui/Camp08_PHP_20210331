<link rel="stylesheet" href="style.css">

<?php  //「;」忘れと全角スペースに注意

echo "<h1>おみくじ</h1>";
echo '<div class=a>';

$omikuji=mt_rand(1,4);
if($omikuji===1){
    echo '<div><img src="img/01.jpg" ></div>';
}
else if($omikuji===2){
    echo '<p>中吉</p>';
}
else if($omikuji===3){
    echo '<p>吉</p>';
    }
else {
    echo '<p>凶</p>';

}

echo "</div>";

?>


