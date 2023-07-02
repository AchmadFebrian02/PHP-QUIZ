<?php
function getInitials($string) {
    $words = explode(" ", $string); 
    $initials = "";

    foreach ($words as $word) {
        $initials .= strtoupper(substr($word, 0, 1)); 
    }

    return $initials;
}


$string1 = "DADANG KURNIAWAN";
$initials1 = getInitials($string1);
echo "Output 1: " . $initials1 . "\n";

$string2 = "SMK PASUNDAN SUBANG";
$initials2 = getInitials($string2);
echo "Output 2: " . $initials2 . "\n";
?>