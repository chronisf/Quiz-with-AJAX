<?php


$r=239;
$q = $_REQUEST["q"];


echo "Μέχρι στιγμής έχετε συμπληρώσει $q <br>";
if (intval($q)>$r)
echo "Ο αριθμός που βρήκατε είναι μεγαλύτερος";
if (intval($q)==$r)
echo "Συγχαρητήρια! Βρήκατε τον αριθμό!!!!!!!!";
if (intval($q)<$r)
echo "Ο αριθμός που βρήκατε είναι μικρότερος";

?>