<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <link href='kelender/lib/main.css' rel='stylesheet' />
    <script src='kelender/lib/main.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
  initialView: 'listWeek',
  events: [

    {
      title: 'Meeting',
      start: '2023-09-24T14:30:00',
      extendedProps: {
        status: 'done'
      }
    },
    {
      title: 'Meeting',
      start: '2023-09-24T14:30:00',
      extendedProps: {
        status: 'done'
      }
    },
    {
      title: 'Meeting',
      start: '2023-09-25T14:30:00',
      extendedProps: {
        status: 'done'
      }
    },

    {
      title: 'Birthday Party',
      start: '2023-09-28T07:00:00',
      backgroundColor: 'green',
      borderColor: 'green'
    },
    {
      title: 'Birthday Party',
      start: '2023-09-29T07:00:00',
      backgroundColor: 'cyan',
      extendedProps: {
        status: 'late'
      }
    },




  ],
  eventDidMount: function(info) {
    if (info.event.extendedProps.status === 'done') {

      // Change background color of row
      info.el.style.backgroundColor = 'red';

      // Change color of dot marker
      var dotEl = info.el.getElementsByClassName('fc-event-dot')[0];
      if (dotEl) {
        dotEl.style.backgroundColor = 'white';
      }
    }
  }

});
        calendar.render();
      });

    </script>
  </head>
  <body>
    <div id='calendar'></div>
  </body>
</html>
