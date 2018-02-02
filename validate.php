<?php

$base_path = 'D:/Songs/saavn  - Songs/';

$file_list = [];

processFolder($base_path, $file_list);

var_dump($file_list);

function processFolder($base_path, &$file_list)
{
    $dir = opendir($base_path);
    while (($file = readdir($dir)) !== false)
    {
        if ($file == '.' || $file == '..')
        {
            continue;
        }
        if (is_dir($base_path . $file))
        {
            processFolder($base_path . $file . DIRECTORY_SEPARATOR, $file_list);
        } else
        {
            $hash = md5_file($base_path . $file);
            if (isset($file_list[$hash]))
            {
                echo "File dublication found " . $base_path . $file . PHP_EOL;
            } else
            {
                $file_list[$hash] = $base_path . $file;
            }
        }
    }
    closedir($dir);
}
