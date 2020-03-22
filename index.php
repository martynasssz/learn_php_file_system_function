<?php
	$path = '/dir1/myfile.php';
	$file = 'file1.txt';
	//$file = 'file2.txt';

	/*

	#Return filename basename()

	echo basename($path); //basename() use to get filename (we will get myfile.php)

	*/

	/*

	#Return filename without extension

	echo basename($path, '.php') //we will get only file name myfile

	*/

	/*

	#Return the directory name from path dirname()

	echo dirname($path); //return /dir (nepriklausomai, kad bus ilgesnis direktorijos kelias, parodys visa kelia)
	
	*/

	/*

	# Check if files1.txt exit    file_exists()

	echo file_exists($file); // show 1 because file exist, is we check of file2.txtwe will get nothing 
	echo file_exists('test') // show 1 because is works with folder

	*/

	/*

	# Get the obsolute path       realpath()

	echo realpath($file); // we will get obsolute path C:\xampp\htdocs\Naujas_etapas\website7\file1.txt
	
	*/

	/*

	#Chech to see if file      is_file()

	echo is_file($file); // it shows, that file exits and difference between file_exists() we can use for a folder is_file() does't work with folder
	
	*/

	/*

	#Check is file writeable    is_writable()

	echo is_writable($file); //show 1  //if we check on file1.txt readonly, browser retur nothing

	*/

	/*

	#Check is file readable     is_readable()

	echo is_readable($file); //show 1 //if file have restrictions, browser retur nothind
	
	*/

	/*

	#Get the file size      filesize()

	echo filesize($file); //show 11 bites

	*/



	# --------------------File manipulation functions ---------------------------------------

	/*

	#Create a directory      mkdir()

	mkdir('testing'); //create testing directory

	*/

	/*

	#Delete a directory as long as no files in it        rmdir()

	rmdir('testing'); // Remove dir is not empty

	*/

	/*
	#copy file to another file         copy()

	echo copy('file1.txt', 'file2.txt'); //pirmas parametras is kur nukopijuojam, antra parametras kur nukopijuojam

	*/

	/*

	#rename a file              rename()

	rename('file2.txt', 'myfile.txt'); //pirmas parametras, kuri faila pervarsinsime antras paremetras i kuri pavadinima keisime

	*/

	/*

	#delete a file               unlink()    
	unlink('myfile.txt'); 

	*/

	/*

	#Write form file to string  //if we want to show file content on the screen    file_get_contents()

	echo file_get_contents($file); //we will see hello worlds on a screen
	
	*/

	/*

	#write a string to file and replacing exiting text with a new one        file_put_contents()

	echo file_put_contents($file, 'Goodbye World'); // stringa 'Goodbye Word' irasys i file1.txt ir kartu pakeis ten santi teksta pakeis Hello world (irasydama pakeiscia);

	*/

	/*

	#write a string to file without replacing exiting text with a new one
	
	$current = file_get_contents($file); //turini usaugo i stringa
	$current .=' Goodbye World'; //prijungiam (append) kita stringa

	file_put_contents($file, $current); //tada irasom i faila

	*/

	/*

	#fopen command it allows to put file in a variable call a handle
	//Open a file for reading 
	
	$handle = fopen($file, 'r'); //atidarmas nuskaitymui
	$data = fread($handle, filesize($file)); //nuskaito info is failo
	echo $data;

	*/

	#Open file for writing
	
	$handle = fopen('file2.txt', 'w');// sukurs faila file2.txt (jeigu jo nera) ir atidarys rasymui
	$txt = "John Doe\n"; //tekstas kuri irasysim //n raide kita irasoma teksta perkels i kita eilute
	fwrite($handle, $txt); //iraso teksta
	//kai norime testin rasyma toliau
	$txt = "Steve Smith\n"; //rasom koks tekstas /n raide kita irasoma teksta perkels i kita eilute
	fwrite($handle, $txt); //irasom i faila
	fclose($handle); //uzdaro faila

	





















































































?>