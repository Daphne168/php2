
<?php

$a=isset($_GET['a']) ? $_GET['a']:1;
$b=isset($_GET['b']) ? $_GET['b']:1;

$ans= $a * $b;

$n1 = $ans % 10;         //pick the right answer 取得答案的個位數字
$n2 = floor($ans/10);    //pick the left answer 取得答案的十位數字

$pic_n1 = '<img src="images/' . $n1 . '.jpg">';
$pic_n2 = '<img src="images/' . $n2 . '.jpg">';


//if the left answer is zero, don't show it. 十位數字產生0時，不出現圖片
if($n2==0)
{
    $pic_n2 = '';
}
else
{
    $pic_n2 = '<img src="images/' . $n2 . '.jpg">';
}



$html = <<< HEREDOC
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<p> {$a} * {$b} = {$ans} </p>
<p> {$pic_n2}{$pic_n1}</p>

<p><a href="question4.php">下一題</a></p>
</body>
</html>
HEREDOC;

echo $html;

?>
