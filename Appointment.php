<?php
namespace Hospital;

require_once 'Doctor.php';
require_once 'Patient.php';
require_once 'Nurse.php';

class Appointment {
    private static array $appointments = [];

    public function __construct(
        private Patient $patient,
        private Doctor $doctor,
        private \DateTime $startTime,
        private \DateTime $endTime,
        private ?Nurse $nurse = null
    ) {
        $duration = $this->calculateDuration();
        $doctor->addAppointmentHours($duration);
        if ($nurse !== null) {
            $nurse->addAppointmentHours($duration);
        }

        self::$appointments[] = $this;
    }

    private function calculateDuration(): float {
        $interval = $this->startTime->diff($this->endTime);
        $hours = $interval->h + ($interval->i / 60);
        return round($hours, 2);
    }

    public static function getAllAppointments(): array {
        return self::$appointments;
    }
}
