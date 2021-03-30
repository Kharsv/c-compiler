<?php
 
 $showbyid = $_REQUEST['showbyid'];

 $file = "../task/".$showbyid.".txt";

 if(!is_file($file)){
    echo ("<pre><code><div><p class='line4'>The End for now</p></div></code></pre>");
 }
 $data = file_get_contents($file);
 echo ("<pre><code><div><p class='line4'>$data</p></div></code></pre>");
