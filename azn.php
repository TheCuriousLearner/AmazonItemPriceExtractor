<html>
<head>
<title>Amazon Item Price Extractor</title>
</head>
<body>
<?php
$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" 
  )
);

$context = stream_context_create($options);
$itemURL = 'https://www.amazon.com/AmazonBasics-Velvet-Suit-Hangers-Black/dp/B00FXNAAW2/ref=sr_1_2?s=home-garden&srs=10112675011&ie=UTF8&qid=1500983517&sr=1-2';
$pageContents = file_get_contents($itemURL, false, $context);
$break1 = explode('<span id="priceblock_ourprice" class="a-size-medium a-color-price">', $pageContents);
$break2 = explode("</span>", $break1[1]);
echo "<h1>".$break2[0]."</h1>";
?>
</body>
</html>
