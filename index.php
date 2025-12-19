<?php

require_once 'vendor/autoload.php';

use App\Student;
use App\Group;

$student1 = new Student("Денис", "Марамзин");
$student2 = new Student("Антон", "Бондаренко");
$student3 = new Student("Алексей", "Васильев");

$student1->addGrade(5);
$student1->addGrade(5);
$student1->addGrade(3);
$student1->addGrade(4);

$student2->addGrade(4);
$student2->addGrade(5);
$student2->addGrade(3);
$student2->addGrade(4);

$student3->addGrade(3);
$student3->addGrade(4);
$student3->addGrade(3);
$student3->addGrade(4);

$group = new Group("Группа П-33");
$group->addStudent($student1);
$group->addStudent($student2);
$group->addStudent($student3);

echo "=== ИНФОРМАЦИЯ О СТУДЕНТАХ ===" . PHP_EOL;
printStudentInfo($student1);
printStudentInfo($student2);
printStudentInfo($student3);

echo "=== ИНФОРМАЦИЯ О ГРУППЕ ===" . PHP_EOL;
printGroupInfo($group);

echo "=== ЛУЧШИЙ СТУДЕНТ ===" . PHP_EOL;
$bestStudent = $group->getBestStudent();
if ($bestStudent) {
    echo "Лучший студент: {$bestStudent->getFullName()}" . PHP_EOL;
    echo "Средний балл: " . number_format($bestStudent->getAverage(), 2) . PHP_EOL;
} else {
    echo "В группе нет студентов" . PHP_EOL;
}