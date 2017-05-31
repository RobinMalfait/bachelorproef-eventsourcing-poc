## Scenario:

> Schedule appointment in the past

### Given:

/

### When:

Schedule appointment with an appointment id of __*appointment_1*__, a customer id of __*customer_1*__, an agent id of __*agent_1*__, a subject id of __*subject_1*__, a start of __*1496218278*__, an end of __*1496217278*__.

### Then:

- <font style='color: green !important;'>No events were produced.</font>
- <font style='color: green !important;'>An `AppointmentCanNotBeScheduledInThePast` exception was thrown.</font>

---
*Rendered 31-05-2017.*
