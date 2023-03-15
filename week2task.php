<?php

//A Validation System For A Simple Voting Process

$age = 18;
$pvc = true;
$voters_ward_no = 020;

// if ($age >= 18){
//     echo "Voter is up to age". '<br>';
// }else {
//     echo "Voter is not up to age". '<br>';
// }

// if ($pvc == true){
//     echo "Voter has a PVC". '<br>';
// }else {
//     echo "Voter has no PVC". '<br>';
// }

// if ($voters_ward_no == 020){
//     echo "Voter has a valid ward number". '<br>';
// }else {
//     echo "Voter has an invalid ward number". '<br>';
// }


echo "The Independent National Electoral Commission has decided based on the given details that: ". '<br>';

if($age >= 18 and $pvc == true and $voters_ward_no == 020){
    echo "The Voter eligible to vote". '<br>';
}
if($age < 18 ){
    echo "<li>The Voter is ineligible to vote because voter is not up to age</li>". '<br>';
}
if($pvc == false){
    echo "<li>The Voter is ineligible to vote because the voter does not have a PVC</li>";
}
if($voters_ward_no != 020){
    echo "<li>The Voter is ineligible to vote because voter has an invalid ward number</li>". '<br>';
}
?>