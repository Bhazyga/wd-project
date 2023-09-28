@extends('layout.main')

@section('container')

  <style>
table, th, td{

}
  img {
    display: block;
    border-radius: 50%;
    margin-left: auto;
  margin-right: auto;
  }</style>
<table style="width:100%">
    <tr >
        <td style="text-align: center"><h3>{{ $nama }}</h3></td>
        <td style="text-align: center"><h3>{{ $nama1 }}</h3></td>
        <td style="text-align: center" ><h3>{{ $nama2}}</h3></td>
        <td style="text-align: center"><h3>{{ $nama3 }}</h3></td>
    </tr>
    <tr>
        <td style="text-align: center"><h4>{{$email}} </h4></td>
        <td style="text-align: center"><h4>{{$email1}}</h4></td>
        <td style="text-align: center"><h4>{{$email2}}</h4></td>
        <td style="text-align: center"><h4>{{$email3}}</h4></td>
    </tr>
    <tr>
        <td><img src="img/{{$image}}"  alt="{{$nama}}"   width="150px" height="150px" ></td>
        <td><img src="img/{{$image1}}" alt="{{$nama1}}" width="150px" height="150px" ></td>
        <td><img src="img/{{$image2}}" alt="{{$nama2}}" width="150px" height="150px"> </td>
        <td><img src="img/{{$image3}}" alt="{{$nama3}}" width="150px" height="150px"></td>
    </tr>
</table>

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
        title: 'Party',
        start: '2023-09-24T14:30:00',
        extendedProps: {
            status: 'done'
        }
        },
        {
        title: 'Meeting Party',
        start: '2023-09-24T14:30:00',
        extendedProps: {
            status: 'done'
        }
        },
        {
        title: 'Meeting Party Party',
        start: '2023-09-25T14:30:00',
        extendedProps: {
            status: 'done'
        }
        },

        {
        title: 'Party Party',
        start: '2023-09-28T07:00:00',
        backgroundColor: 'green',
        borderColor: 'green'
        },
        {
        title: 'Birthday Party',
        start: '2023-09-29T07:00:00',
        backgroundColor: 'white',
        extendedProps: {
            status: '?'
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
            dotEl.style.backgroundColor = 'cyan';
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



    @endsection
