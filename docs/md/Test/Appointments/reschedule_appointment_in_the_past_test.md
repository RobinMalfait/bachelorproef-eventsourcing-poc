## Scenario:

> Reschedule appointment in the past

### Given:

- Appointment was scheduled with an appointment id of __*appointment_id_1*__, a customer id of __*d90cbbec-ecbd-48d4-87a5-a385aac737c8*__, an agent id of __*c05bd7f9-efa7-48ca-88bb-5dfcba730075*__, a subject id of __*40a8988f-2e4a-44cb-8c29-c1b6ec6a95f0*__, a start of __*1496170172*__, an end of __*1496170172*__.

### When:

Reschedule appointment with an appointment id of __*appointment_id_1*__, a start of __*1496169172*__, an end of __*1496168172*__.

### Then:

- <font style='color: green !important;'>None events have been produced.</font>
- <font style='color: green !important;'>An `AppointmentCanNotBeScheduledInThePast` exception was thrown.</font>

---
*Rendered 30-05-2017.*
