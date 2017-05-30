<?php namespace Skedify\Appointments;

use Skedify\Appointments\Events\AppointmentWasScheduled;
use Skedify\Appointments\Events\AppointmentWasRescheduled;
use Skedify\Appointments\VO\AppointmentId;
use Skedify\Appointments\VO\CustomerId;
use Skedify\Appointments\VO\AgentId;
use Skedify\Appointments\VO\DateRange;
use Skedify\Appointments\VO\SubjectId;
use Skedify\Core\AggregateRoot;

final class Appointment extends AggregateRoot
{
    private $appointmentId;

    public static function schedule(AppointmentId $appointmentId, CustomerId $customerId, AgentId $agentId, SubjectId $subjectId, DateRange $range)
    {
        // Check invariant: appointment can not happen in the past
        if (time() >= $range->getStart()) {
            throw new AppointmentCanNotBeScheduledInThePast("Appointment can not be scheduled in the past");
        }
        
        $me = new static();

        $me->apply(new AppointmentWasScheduled($appointmentId, $customerId, $agentId, $subjectId, $range));

        return $me;
    }

    public function reschedule(DateRange $range)
    {
        // Check invariant: appointment can not happen in the past
        if (time() >= $range->getStart()) {
            throw new AppointmentCanNotBeScheduledInThePast("Appointment can not be scheduled in the past");
        }

        $this->apply(new AppointmentWasRescheduled($this->appointmentId, $range));
    }

    /* Respond to events */
    public function applyAppointmentWasScheduled(AppointmentWasScheduled $event)
    {
        $this->appointmentId = $event->getAppointmentId();
    }

    public function applyAppointmentWasRescheduled(AppointmentWasRescheduled $event)
    {
        //
    }
}
