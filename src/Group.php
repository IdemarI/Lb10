<?php

namespace App;

class Group
{
    private string $groupName;
    private array $students;

    public function __construct(string $groupName)
    {
        $this->groupName = $groupName;
        $this->students = [];
    }

    public function addStudent(Student $student): void
    {
        $this->students[] = $student;
    }

    public function getGroupAverage(): float
    {
        if (empty($this->students)) {
            return 0.0;
        }

        $totalAverage = 0;
        foreach ($this->students as $student) {
            $totalAverage += $student->getAverage();
        }

        return $totalAverage / count($this->students);
    }

    public function getBestStudent(): ?Student
    {
        if (empty($this->students)) {
            return null;
        }

        $bestStudent = $this->students[0];
        $bestAverage = $bestStudent->getAverage();

        foreach ($this->students as $student) {
            $currentAverage = $student->getAverage();
            if ($currentAverage > $bestAverage) {
                $bestAverage = $currentAverage;
                $bestStudent = $student;
            }
        }

        return $bestStudent;
    }

    public function getGroupName(): string
    {
        return $this->groupName;
    }

    public function getStudents(): array
    {
        return $this->students;
    }

    public function getStudentCount(): int
    {
        return count($this->students);
    }
}