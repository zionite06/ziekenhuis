<?php
namespace Hospital;

require_once 'Person.php';

class Patient extends Person {
    private float $paymentPerAppointment;

    public function __construct(string $name, int $age, float $paymentPerAppointment) {
        parent::__construct($name, $age);
        $this->paymentPerAppointment = $paymentPerAppointment;
    }

    public function getPayment(): float {
        return $this->paymentPerAppointment;
    }

    public function getRole(): string {
        return "Patient";
    }
}
