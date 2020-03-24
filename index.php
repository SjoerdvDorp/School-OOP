<?php

include 'vendor/autoload.php';

//toevoegen wat voor bestenaden er worden gebruikt

use Opdracht5\Teacher;
use Opdracht5\Student;
use Opdracht5\Group;
use Opdracht5\Schooltrip;
use Opdracht5\SchooltripList;

//nieuwe groep toevoegen

$group1 = new Group('1TH1');

//studenten toevoegen

$student1 = new Student('Katy','Perry', $group1->getGroupName(), 5);
$student2 = new Student('Ariana','Grande', $group1->getGroupName());
$student3 = new Student('John','Coronel', $group1->getGroupName(), 5);
$student4 = new Student('Post','Malone', $group1->getGroupName());
$student5 = new Student('Big','Micheal', $group1->getGroupName(), 5);
$student6 = new Student('Marshall','Matters', $group1->getGroupName(), 5);
$student7 = new Student('Alan','Walker', $group1->getGroupName(), 10);
$student8 = new Student('Roddy','Ricch', $group1->getGroupName(), 5);
$student9 = new Student('Trevor','Daniel', $group1->getGroupName(), 10);
$student10 = new Student('Ellie','Goulding', $group1->getGroupName(), 10);
$student11 = new Student('Paul','McCreary', $group1->getGroupName(), 5);
$student12 = new Student('Lil','NasX', $group1->getGroupName(), 2);
$student13 = new Student('Billie','Eilish', $group1->getGroupName(), 7);
$student14 = new Student('Pink','Guy', $group1->getGroupName(), 4);
$student15 = new Student('Rae','Sremmurd', $group1->getGroupName(), 2);
$student16 = new Student('Martin','Garrix', $group1->getGroupName(), 11);
$student17 = new Student('David','Guetta', $group1->getGroupName(), 15);
$student18 = new Student('Nicki','Minaj', $group1->getGroupName(), 0);
$student19 = new Student('Ed','Sheeran', $group1->getGroupName(), 5);
$student20 = new Student('G','Eazy', $group1->getGroupName(), 15);
$student21 = new Student('Ava','Max', $group1->getGroupName(), 13);
$student22 = new Student('Dan','Bull', $group1->getGroupName(), 8);
$student22 = new Student('Lil','Kleine', $group1->getGroupName(), 5);
$student23 = new Student('Sevn','Alias', $group1->getGroupName(), 10);
$student24 = new Student('Kav','Verhouzer', $group1->getGroupName(), 17);
$student25 = new Student('Dimitri','Vegas', $group1->getGroupName(), 9);
$student26 = new Student('Bruno','Fernandes', $group1->getGroupName(), 4);

//studenten toevoegen aan een groep

$group1->addStudent([$student1, $student2, $student3, $student4, $student5, $student6, $student7, $student8, $student9, $student10, $student11,
    $student12, $student13, $student14, $student15, $student16, $student17, $student18, $student19, $student20, $student21, $student22, $student23,
    $student24, $student25]);

//een student toevoegen

$teacher1 = new Teacher('Champagne','Pappie');

//studenten toevoegen aan een trip

$schooltripList1 = new SchooltripList();
$schooltripList1->addStudent($student1);
$schooltripList1->addStudent($student2);
$schooltripList1->addStudent($student3);
$schooltripList1->addStudent($student4);
$schooltripList1->addStudent($student5);
$schooltripList1->addStudent($student6);
$schooltripList1->addStudent($student7);
$schooltripList1->addStudent($student8);
$schooltripList1->addStudent($student9);
$schooltripList1->addStudent($student10);
$schooltripList1->addStudent($student11);
$schooltripList1->addStudent($student12);
$schooltripList1->addStudent($student13);
$schooltripList1->addStudent($student14);
$schooltripList1->addStudent($student15);
$schooltripList1->addStudent($student16);
$schooltripList1->addStudent($student17);
$schooltripList1->addStudent($student18);
$schooltripList1->addStudent($student19);
$schooltripList1->addStudent($student20);
$schooltripList1->addStudent($student21);
$schooltripList1->addStudent($student22);
$schooltripList1->addStudent($student23);
$schooltripList1->addStudent($student24);
$schooltripList1->addStudent($student25);
$schooltripList1->addTeacher($teacher1->getName());

//een schooltrip toevoegen

$schooltrip1 = new Schooltrip('Walibi');
$schooltrip1->addSchoolTripList($schooltripList1);

print "<pre>";
var_dump($schooltrip1);