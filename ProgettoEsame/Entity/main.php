<?php
include("ESettore.php");
$Film=new ESettore("Film");
$Cucina=new ESettore("Cucina");
$Serie=new ESettore("SerieTV");
$Giochi=new ESettore("Giochi");
$Libri=new ESettore("Libri");
$Musica=new ESettore("Musica");
print "SETTORI:\n";
print "$Film\n";
print "$Cucina\n";
print "$Serie\n";
print "$Giochi\n";
print "$Libri\n";
print "$Musica";
