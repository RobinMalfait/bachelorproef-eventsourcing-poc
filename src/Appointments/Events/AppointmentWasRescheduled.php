<?php namespace Skedify\Appointments\Events;

use Skedify\Appointments\VO\AppointmentId;
use Skedify\Appointments\VO\DateRange;
use Skedify\EventSourcing\Events\DomainEvent;

final class AppointmentWasRescheduled implements DomainEvent
{

    /** @var \Skedify\Appointments\VO\AppointmentId */
    private $appointmentId;

    /** @var \Skedify\Appointments\VO\DateRange */
    private $range;

    public function __construct(AppointmentId $id, DateRange $range)
    {
        $this->appointmentId = $id;
        $this->range = $range;
    }

    public function getAggregateId()
    {
        return $this->appointmentId->toString();
    }

    public function getAppointmentId()
    {
        return $this->appointmentId;
    }

    public function getRange()
    {
        return $this->range;
    }

    /**
     * @return array
     */
    public function serialize()
    {
        return [
            'appointment_id' => $this->appointmentId->toString(),
            'start' => $this->range->getStart(),
            'end' => $this->range->getEnd(),
        ];
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    public static function deserialize(array $data)
    {
        return new self(
            AppointmentId::fromString($data['appointment_id']),
            DateRange::fromTimestamps($data['start'], $data['end'])
        );
    }
}
