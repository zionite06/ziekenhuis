<?php

require_once 'Ziekenhuis/Person.php';
require_once 'Ziekenhuis/Patient.php';
require_once 'Ziekenhuis/Staff.php';
require_once 'Ziekenhuis/Doctor.php';
require_once 'Ziekenhuis/Nurse.php';
require_once 'Ziekenhuis/Appointment.php';

use Hospital\Patient;
use Hospital\Doctor;
use Hospital\Nurse;
use Hospital\Appointment;

$doctor = new Doctor("Dr. House", 50, 100);
$nurse = new Nurse("Jane", 35, 25, 1600);
$patient = new Patient("John Doe", 30, 75);

$start = new DateTime("2042-03-16 10:00:00");
$end = new DateTime("2042-03-16 11:35:00");

$appointment = new Appointment($patient, $doctor, $start, $end, $nurse);

echo "Doctor salary: €" . number_format($doctor->calculateSalary(), 2) . PHP_EOL;
echo "Nurse salary: €" . number_format($nurse->calculateSalary(), 2) . PHP_EOL;
    