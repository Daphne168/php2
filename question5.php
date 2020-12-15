
<?php

$a = mt_rand(1,9);
$b = mt_rand(1,9);

$pic_a ='images/' . $a . '.jpg';
$pic_b ='images/' . $b . '.jpg';


$html = <<< HEREDOC
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<img src="{$pic_a}"><img src="images/mul.jpg"><img src="{$pic_b}">

<p><a href="question5.php">看下一題</a></p>
<p><a href="answer5.php?a={$a}&b={$b}">看答案</a></p>

</body>
</html>
HEREDOC;

echo $html;

?>