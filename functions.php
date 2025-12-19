<?php

use App\Student;
use App\Group;

function printStudentInfo(Student $student): void
{
    $average = number_format($student->getAverage(), 2);
    echo "Студент: {$student->getFullName()}" . PHP_EOL;
    echo "Средний балл: {$average}" . PHP_EOL;
    echo "Оценки: " . implode(', ', $student->getGrades()) . PHP_EOL;
    echo "------------------------" . PHP_EOL;
}

function printGroupInfo(Group $group): void
{
    $average = number_format($group->getGroupAverage(), 2);
    echo "Группа: {$group->getGroupName()}" . PHP_EOL;
    echo "Количество студентов: {$group->getStudentCount()}" . PHP_EOL;
    echo "Общий средний балл: {$average}" . PHP_EOL;
    echo "================================" . PHP_EOL;
}