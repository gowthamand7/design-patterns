<?php

$fileName = 'test.php';

$fp = fopen($fileName, 'a+');
$cont = file_get_contents($fileName);
fwrite($fp, $cont);


<?php

$fileName = 'test.php';

$fp = fopen($fileName, 'a+');
$cont = file_get_contents($fileName);
fwrite($fp, $cont);


