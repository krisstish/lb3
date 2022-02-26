<?php

if('POST' === $_SERVER['REQUEST_METHOD']) {
   create($_POST['category'],$_POST['heading']);
   echo "Successfully!";
}

function create($cat,$name) {
   $file = fopen("./category/$cat/$name", 'w+');
   $text = "Seller: " . $_POST['email'] . "  ";

   fwrite($file,$text);
   fwrite($file,$_POST['description']);

   fclose($file);
}