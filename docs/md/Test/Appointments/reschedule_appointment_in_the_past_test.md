## Scenario:

> Reschedule appointment in the past

### Given:

- Appointment was scheduled with an appointment id of __*appointment_1*__, a customer id of __*customer_1*__, an agent id of __*agent_1*__, a subject id of __*subject_1*__, a start of __*1496175805*__, an end of __*1496175805*__.

### When:

Reschedule appointment with an appointment id of __*appointment_1*__, a start of __*1496174805*__, an end of __*1496173805*__.

### Then:

- <font style='color: green !important;'>None events have been produced.</font>
- <font style='color: green !important;'>An `AppointmentCanNotBeScheduledInThePast` exception was thrown.</font>

---
*Rendered 30-05-2017.*
