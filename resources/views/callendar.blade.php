<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table-primary">
        <thead>
          <tr>
            <th class="table-primary">#</th>
            <th class="table-primary">First</th>
            <th class="table-primary">Last</th>
            <th class="table-primary">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="table-primary">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th class="table-primary">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th class="table-primary">3</th>
            <td class="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
</body>

<script type='text/javascript'>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      googleCalendarApiKey: '<YOUR API KEY>',
      eventSources: [
        {
          googleCalendarId: 'abcd1234@group.calendar.google.com'
        },
        {
          googleCalendarId: 'efgh5678@group.calendar.google.com',
          className: 'nice-event'
        }
      ]
    });

    calendar.render();
  });

</script>
</html>
