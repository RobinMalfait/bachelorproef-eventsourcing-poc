## Scenario:

> Reschedule appointment

### Given:

- Appointment was scheduled with an appointment id of __*appointment_1*__, a customer id of __*customer_1*__, an agent id of __*agent_1*__, a subject id of __*subject_1*__, a start of __*1496219278*__, an end of __*1496219278*__.

### When:

Reschedule appointment with an appointment id of __*appointment_1*__, a start of __*1496220278*__, an end of __*1496221278*__.

### Then:

- <font style='color: green !important;'>One event was produced.</font>
- <font style='color: green !important;'>An `AppointmentWasRescheduled` event was produced.</font>

---
*Rendered 31-05-2017.*
