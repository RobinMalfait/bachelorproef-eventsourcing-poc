<?php namespace Test\Appointments;

use Command;
use Skedify\Appointments\AppointmentRepository;
use Skedify\Appointments\Commands\ScheduleAppointment;
use Skedify\Appointments\Commands\ScheduleAppointmentHandler;
use Skedify\Appointments\Events\AppointmentWasScheduled;
use Skedify\Appointments\VO\AgentId;
use Skedify\Appointments\VO\AppointmentId;
use Skedify\Appointments\VO\CustomerId;
use Skedify\Appointments\VO\DateRange;
use Skedify\Appointments\VO\SubjectId;
use Specification;

class ScheduleAppointmentTest extends Specification
{
    /**
     * Given events to build the aggregate
     *
     * @return array
     */
    public function given()
    {
        return [];
    }

    /**
     * Command to fire
     *
     * @return Command
     */
    public function when()
    {
        return ScheduleAppointment::with(
            AppointmentId::fromString('appointment_1'),
            CustomerId::fromString('customer_1'),
            AgentId::fromString('agent_1'),
            SubjectId::fromString('subject_1'),
            DateRange::fromTimestamps(time() + 1000, time() + 2000) // Must be in the future
        );
    }

    /**
     * The command handler
     *
     * @param $repository
     * @return mixed
     */
    public function handler($repository)
    {
        return new ScheduleAppointmentHandler(new AppointmentRepository($repository));
    }

    /** @test */
    public function one_event_was_produced()
    {
        $this->assertCount(1, $this->producedEvents);
    }

    /** @test */
    public function an_AppointmentWasScheduled_event_was_produced()
    {
        $this->assertInstanceOf(AppointmentWasScheduled::class, $this->producedEvents[0]);
    }
}
