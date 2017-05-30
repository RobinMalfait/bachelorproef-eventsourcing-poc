<?php namespace Skedify\Appointments\Events;

use Skedify\Appointments\VO\AppointmentId;
use Skedify\Appointments\VO\CustomerId;
use Skedify\Appointments\VO\AgentId;
use Skedify\Appointments\VO\DateRange;
use Skedify\Appointments\VO\SubjectId;
use Skedify\EventSourcing\Events\DomainEvent;

final class AppointmentWasScheduled implements DomainEvent
{

    /** @var \Skedify\Appointments\VO\AppointmentId */
    private $appointmentId;

    /** @var \Skedify\Appointments\VO\CustomerId */
    private $customerId;

    /** @var \Skedify\Appointments\VO\AgentId */
    private $agentId;

    /** @var \Skedify\Appointments\VO\SubjectId */
    private $subjectId;

    /** @var \Skedify\Appointments\VO\DateRange */
    private $range;

    public function __construct(AppointmentId $appointmentId, CustomerId $customerId, AgentId $agentId, SubjectId $subjectId, DateRange $range)
    {
        $this->appointmentId = $appointmentId;
        $this->customerId = $customerId;
        $this->agentId = $agentId;
        $this->subjectId = $subjectId;
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

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function getAgentId()
    {
        return $this->agentId;
    }

    public function getSubjectId()
    {
        return $this->subjectId;
    }

    /**
     * @return DateRange
     */
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
            'customer_id' => $this->customerId->toString(),
            'agent_id' => $this->agentId->toString(),
            'subject_id' => $this->subjectId->toString(),
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
            CustomerId::fromString($data['customer_id']),
            AgentId::fromString($data['agent_id']),
            SubjectId::fromString($data['subject_id']),
            DateRange::fromTimestamps($data['start'], $data['end'])
        );
    }
}
