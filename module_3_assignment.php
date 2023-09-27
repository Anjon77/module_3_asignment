<?php
//Task -1
//=============================================================
$text = "The quick brown fox jumps over the lazy dog.";
/* function stringLowercase($text) {
    return strtolower($text);
}
echo stringLowercase($text); //Converted the string to all lowercase.
echo "\n";  */
// OR

$stringLower = strtolower($text); 
echo $stringLower; //Converted the string to all lowercase.
echo "\n";

$searchWord = "brown";
$replaceWord = "red";
$modifiedText = str_replace($searchWord, $replaceWord, $stringLower);//Replaced "brown" with "red" in the string.
echo $modifiedText; // Modified text printed


//Task-2
//===============================================
$numbers = [1,2,3,4,5,6,7,8,9,10,12];
// $numbers = range(1,10);
function resultingArray($numbers){
    if($numbers % 2 == 0){
        return false;
    }
    return true;
}
$oddNumbers = array_filter($numbers, "resultingArray");
print_r($oddNumbers);

//Task -3 
//================================================
$grades = array(85, 92, 78, 88, 95);

function sortGrades($grades) {
    rsort($grades);
    return $grades;
}
$sorted = sortGrades($grades);
print_r($sorted);

// Task-4: 
//================================================

$studentGrades = array(
    'Student_One' => ['Math' => 70, 'English' => 85, 'Science' => 72],
    'Student_Two' => ['Math' => 58, 'English' => 68, 'Science' => 46],
    'Student_Three' => ['Math' => 95, 'English' => 91, 'Science' => 89]
);
function averageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $numSubjects = count($grades);
        $average = $total / $numSubjects;
        if ($average >= 80) {
            echo "{$student}'s average grade is: A+ \n";
        }elseif ($average < 80 && $average >= 70) {
            echo "{$student}'s average grade is: A- \n";
        }elseif ($average >= 60 && $average <70) {
            echo "{$student}'s average grade is: A \n";
        }elseif ($average >= 50 && $average <60) {
            echo "{$student}'s average grade is: B \n";
        }elseif ($average >= 40 && $average <50) {
            echo "{$student}'s average grade is: C \n";
        }elseif ($average >= 33 && $average <40) {
            echo "{$student}'s average grade is: D \n";
        }else {
            echo "Student {$student}'s average grade is: F \n";
        }
    }
}
echo $grade = averageGrades($studentGrades);


 //Task-5 
//==============================================

function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}
$passwords = [];
$passwords[] = generatePassword(12);
print_r($passwords);



