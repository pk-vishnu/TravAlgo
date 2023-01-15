<?php
$json=file_get_contents('../nftalgofinal/token.json');
$nftid=json_decode($json);
echo $nftid->nftid;
?>