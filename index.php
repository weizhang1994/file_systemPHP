<?php
    $path = '/dir1/myfile.php';
/*
    //Return filename
    echo basename($path);

    //Return filename without ext
    echo basename($path, '.php');

    //Return the dir name from the path
    echo file_exists($file);

    //Check of file or folder exists
    echo file_exists($file);

    //Get abs path
    echo realpath($file);

    //Checks to see if file 
    echo is_file($file);

    //Check to see if file is writable
    echo is_writable($file);

    Check if readable
    echo is_readable($file);

    //Get the file size
    echo filesize($file);

    //Create a directoty
    mkdir('testing');

    //Delete a dir if empty
    rmdir('testing');

    //Copy file
    echo copy('file1.txt', 'file2.txt');

    //Rename a file
    rename('file2.txt', 'myfile.txt');

    //Delete File
    unlink('myfile.txt');

    //Write from file to string
    echo file_get_contents($file);

    //Write string to file
    echo file_put_contents($file, 'Goodbye World);

    $current = file_get_centents($file);

    $current .= ' Goodby World';

    file_put_contents($file, $current);

    //Open File For Reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data;
*/
    //Open file for writing
    $handle = fopen('file.txt', 'w');
    $txt = "Joe Doe\n";
    fwrite($handle, $txt);
    $txt = "efergfregrgrgrgrg\n";
    fwrite($handle, $txt);
    
    fclose($handle);
