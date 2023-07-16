<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "spims";

$conn = mysqli_connect($server,$username,$password,$db);

$allPencil = "SELECT * FROM inventory WHERE Category = 'Pencil' ";
$allBallpen = "SELECT * FROM inventory WHERE Category = 'Ballpen' ";
$allBondPaper = "SELECT * FROM inventory WHERE Category = 'BondPaper' ";
$allEraser = "SELECT * FROM inventory WHERE Category = 'Eraser' ";
$allNotebook = "SELECT * FROM inventory WHERE Category = 'Notebook' ";
$allPaper = "SELECT * FROM inventory WHERE Category = 'Paper' ";
$allColor = "SELECT * FROM inventory WHERE Category = 'ColoringMaterials' ";
$allFolder = "SELECT * FROM inventory WHERE Category = 'Folder' ";
$allEnvelope = "SELECT * FROM inventory WHERE Category = 'Envelope' ";
$allMaterials = "SELECT * FROM inventory WHERE Category = 'Materials' ";
$allBooks = "SELECT * FROM inventory WHERE Category = 'Books' ";
$allTapes = "SELECT * FROM inventory WHERE Category = 'Tapes' ";
$allBoard = "SELECT * FROM inventory WHERE Category = 'Board' ";
$inventory = "SELECT * FROM inventory";

$pencil = $conn-> query($allPencil) ;
$ballpen = $conn-> query($allBallpen) ;
$bondpaper = $conn-> query($allBondPaper) ;
$eraser = $conn-> query($allEraser) ;
$notebook = $conn-> query($allNotebook) ;
$paper = $conn-> query($allPaper) ;
$color = $conn-> query($allColor) ;
$folder = $conn-> query($allFolder) ;
$envelope = $conn-> query($allEnvelope) ;
$materials = $conn-> query($allMaterials) ;
$books = $conn-> query($allBooks) ;
$tapes = $conn-> query($allTapes) ;
$board = $conn-> query($allBoard) ;



