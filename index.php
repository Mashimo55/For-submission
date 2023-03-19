<?php



$clam_digging = ["潮干狩り",[
                              ["本ハマグリ","焼き蛤","https://www.kurashiru.com/recipes/ad74a570-fe7c-4361-852e-7eaad8aca40e"],
                              ["アカニシ貝","和え物","https://recipe.rakuten.co.jp/recipe/1490005261/"],
                              ["ヤマトしじみ","お味噌汁","https://www.marukome.co.jp/recipe/detail/miso_441/"],
                              ["ホンビノス","酒蒸し","https://www.kurashiru.com/recipes/1ebf76f5-177b-4755-be0a-9d2923055362"],
                              ["アサリ","酒蒸し","https://www.kikkoman.co.jp/homecook/search/recipe/00002043/index.html"],
                              ["マテガイ","ガーリックソテー","https://macaro-ni.jp/31423#heading-2190690"]
                            ]
                ];

?>

<!DOCTYPE html>
<html>
<head>
  <title>潮干狩り</title>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
 
<h1>
<?php echo $clam_digging[0]; ?>
</h1>
<h2>種類</h2>
<?php for($i=0;$i<=5;$i++):

   echo "<h3>".$clam_digging[1][$i][0]."</h3>"; ?>
   
 <?php   echo "<p>おすすめ料理 <a href=".$clam_digging[1][$i][2].">".$clam_digging[1][$i][1]."</a> ";
   switch ($clam_digging[1][$i][0]){
    case "本ハマグリ":
    case "アサリ":
     echo "超うまい！！";
      break;
    case "アカニシ貝":
    case "ヤマトしじみ":
      echo "結構うまい";
      break;
    case "ホンビノス":
    case "マテガイ":
      echo "うまい";
      break;
    default:
    }
    echo "</P>";

endfor;?>
</body>
</html>