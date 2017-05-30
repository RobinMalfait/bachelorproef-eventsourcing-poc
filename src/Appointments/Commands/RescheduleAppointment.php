<?php namespace Skedify\Appointments\Commands;

use Skedify\Appointments\VO\AppointmentId;
use Skedify\Appointments\VO\DateRange;

final class RescheduleAppointment
{
    /** @var \Skedify\Appointments\VO\AppointmentId */
    private $appointmentId;

    /** @var \Skedify\Appointments\VO\DateRange */
    private $period;

    private function __construct(AppointmentId $appointmentId, DateRange $period)
    {
        $this->appointmentId = $appointmentId;
        $this->period = $period;
    }

    public static function with(AppointmentId $appointmentId, DateRange $period)
    {
        return new self($appointmentId, $period);
    }

    public function getAppointmentId()
    {
        return $this->appointmentId;
    }

    public function getPeriod()
    {
        return $this->period;
    }
}
