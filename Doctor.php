<?php
namespace Hospital;

require_once 'Staff.php';

class Doctor extends Staff {
    public function getRole(): string {
        return "Doctor";
    }

    public function calculateSalary(): float {
        return $this->getHourlyRate() * $this->getTotalAppointmentHours();
    }
}
?>