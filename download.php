<?php

header('Content-type: text/plain');
header('Content-Disposition: attachment; filename=' . $_GET['name'] . '.txt');

echo  'Версия файла: ' . $_GET['version'];