<?php
require_once("html.php");
html::header("Conference 2026 - Travel and Logistics");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Travel and Logistics, Blagoevgrad</title>
  <style>
    body { font-family: -apple-system, Segoe UI, Roboto, Arial, sans-serif; line-height: 1.55; margin: 0; color: #111; }
    header { background: #0f172a; color: #fff; padding: 12px 16px; }
    main { max-width: 980px; margin: 0 auto; padding: 16px; }
    h1, h2, h3 { margin: 1.2em 0 0.5em; }
    p { margin: 0.6em 0; }
    a { color: #0b63ce; }
    .note { background: #f8fafc; border: 1px solid #e2e8f0; padding: 12px; border-radius: 6px; }
    .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
    @media (max-width: 800px){ .grid { grid-template-columns: 1fr; } }
    .muted { color: #475569; }
    .section { padding: 12px 0; border-top: 1px solid #e5e7eb; }
    ul { padding-left: 1.2em; }
  </style>
</head>
<body>

<header>
  <h1>Travel and Logistics, Blagoevgrad</h1>
</header>

<main>

<section class="section" id="venue">
  <h2>Venue</h2>
  <p>
    The conference will be held at the American University in Bulgaria, AUBG.
    Sessions will take place at the Main Building, 1 Georgi Izmirliev Square, 2700 Blagoevgrad, Bulgaria.
    Campus activities may also take place at the Skaptopara Campus, 4–12 Svoboda Bachvarova Street.
  </p>
  <p>
    Main Building map: <a href="https://maps.google.com/?q=1+Georgi+Izmirliev+Square,+Blagoevgrad+2700" target="_blank" rel="noopener">link</a>
    , Skaptopara Campus map:
    <a href="https://maps.google.com/?q=AUBG+Skaptopara+Campus,+Blagoevgrad" target="_blank" rel="noopener">link</a>
  </p>
  <p class="note muted">
    Example dates: June 2–6, 2025. Replace with final dates if different.
  </p>
</section>

<section class="section" id="city">
  <h2>The city of Blagoevgrad</h2>
  <p>
    Blagoevgrad is a university city in Southwestern Bulgaria, located about 100 km south of Sofia.
    The city offers walkable streets, parks along the Bistritsa river, and a compact center with many restaurants and cafes.
  </p>
</section>

<section class="section" id="arrival">
  <h2>How to get to Blagoevgrad</h2>

  <h3>By air</h3>
  <p>
    The nearest major international airport is Sofia Airport, SOF.
    From the airport, you can reach Blagoevgrad by direct intercity bus from Sofia bus stations or by train from Sofia Central Station.
  </p>
  <ul>
    <li>Metro line M4 connects SOF Terminal 2 to central Sofia. Change to local transport for the bus or train station.</li>
    <li>Typical travel time Sofia to Blagoevgrad by road is about 1 hour 45 minutes, traffic dependent.</li>
  </ul>

  <h3>By train</h3>
  <p>
    Trains run between Sofia Central Station and Blagoevgrad Station several times per day.
    Travel time is typically about 2 hours 15 minutes depending on service.
    Validate current schedules before you travel.
  </p>

  <h3>By bus</h3>
  <p>
    Frequent buses operate between Sofia and Blagoevgrad from Sofia’s bus terminals.
    The journey is about 1 hour 45 minutes, depending on traffic.
    Purchase tickets at the station or through local operators and aggregators.
  </p>
</section>

<section class="section" id="local">
  <h2>Local transportation</h2>
  <p>
    The Main Building and the central pedestrian area are within short walking distance.
    Taxis are widely available and inexpensive by European standards.
  </p>
</section>

<section class="section" id="shuttle">
  <h2>Conference shuttle</h2>
  <p>
    If a morning shuttle is provided, the pickup point will be near the Main Building, 1 Georgi Izmirliev Square.
    Example pickup time: 08:30. The shuttle will return to the same point in the evening.
  </p>
</section>

<section class="section" id="dinner">
  <h2>Conference dinner</h2>
  <p>
    The conference dinner will take place on Thursday at 19:00. The restaurant and address will be announced here.
  </p>
</section>

<section class="section" id="contacts">
  <h2>Contact</h2>
  <p>
    For travel questions, contact the Local Organizing Committee by email.
  </p>
</section>

</main>

</body>
</html>
