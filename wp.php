<?php


echo "\nAuthor     : MarsHall\n";
echo "Tools name : Wordpress Cek Version\n\n";


$list = file_get_contents("tar.txt");
$open = explode("\n", $list);

foreach($open as $link){

$content = file_get_contents($link);
preg_match_all('/ content="(.*?)"/i', $content, $hasil);


if (preg_match('/WordPress *?\\.*?\\.*?/i', $hasil['1'][1])){
  
  echo "[+] site : $link\n";
  echo "[~] version : ".$hasil['1'][1];
  echo "\n";
  
  } else {
  
  echo "\n\n[×] site : $link\n";
  echo "[×] version : Tidak ditemukan / Cek manual";
  echo "\n\n";
  } 
}

?>
