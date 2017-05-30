<?php namespace Skedify\Appointments\VO;

class AppointmentId
{
    private $appointmentId;

    public function __construct($appointmentId)
    {
        $this->appointmentId = $appointmentId;
    }

    public static function generate()
    {
        return new self(ID::generate()->getId());
    }

    public static function fromString($input)
    {
        return new self($input);
    }

    public function toString()
    {
        return $this->appointmentId;
    }

    public function __toString()
    {
        return $this->toString();
    }
}
