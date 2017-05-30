## Scenario:

> Schedule appointment in the past

### Given:

/

### When:

Schedule appointment with an appointment id of __*66cd3e06-3115-4421-bbe4-c908e9f00021*__, a customer id of __*56fda061-7db7-4acf-b694-9eb20a8a566c*__, an agent id of __*eb779052-81ca-4548-83b2-aeb91c45e4be*__, a subject id of __*0c485bea-ba1e-4c06-b821-6293b84b72d2*__, a start of __*1496169172*__, an end of __*1496168172*__.

### Then:

- <font style='color: green !important;'>None events have been produced.</font>
- <font style='color: green !important;'>An `AppointmentCanNotBeScheduledInThePast` exception was thrown.</font>

---
*Rendered 30-05-2017.*
