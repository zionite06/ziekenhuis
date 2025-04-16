<?php
namespace Hospital;

require_once 'Staff.php';

class Nurse extends Staff {
    private float $baseSalary;

    public function __construct(string $name, int $age, float $hourlyRate, float $baseSalary) {
        parent::__construct($name, $age, $hourlyRate);
        $this->baseSalary = $baseSalary;
    }

    public function getRole(): string {
        return "Nurse";
    }

    public function calculateSalary(): float {
        return $this->baseSalary + ($this->getHourlyRate() * $this->getTotalAppointmentHours());
    }
}
