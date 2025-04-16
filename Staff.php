<?php
namespace Hospital;

require_once 'Person.php';

abstract class Staff extends Person {
    private float $hourlyRate;
    private float $totalAppointmentHours = 0;

    public function __construct(string $name, int $age, float $hourlyRate) {
        parent::__construct($name, $age);
        $this->hourlyRate = $hourlyRate;
    }

    public function getHourlyRate(): float {
        return $this->hourlyRate;
    }

    public function addAppointmentHours(float $hours): void {
        $this->totalAppointmentHours += $hours;
    }

    public function getTotalAppointmentHours(): float {
        return $this->totalAppointmentHours;
    }

    abstract public function calculateSalary(): float;
}
?>