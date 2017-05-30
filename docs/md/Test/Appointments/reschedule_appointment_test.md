## Scenario:

> Reschedule appointment

### Given:

- Appointment was scheduled with an appointment id of __*appointment_id_1*__, a customer id of __*903731ba-12fc-4c2f-b515-14901c0dc442*__, an agent id of __*f84181b0-9045-41aa-801e-36b27e312681*__, a subject id of __*be08e439-0ea5-4545-a6c3-4d0bb56b08b2*__, a start of __*1496170172*__, an end of __*1496170172*__.

### When:

Reschedule appointment with an appointment id of __*appointment_id_1*__, a start of __*1496171172*__, an end of __*1496172172*__.

### Then:

- <font style='color: green !important;'>One event has been produced.</font>
- <font style='color: green !important;'>An `AppointmentWasRescheduled` event was produced.</font>

---
*Rendered 30-05-2017.*
