@extends('layouts.main')

@section('content')

@php

    $users = DB::table('users')->get();

@endphp

@if ($user->permission_id === 1)
    @foreach ($users as $currentUser)
        @if ($currentUser->permission_id === 1)
            @continue
        @endif
        <div>
            <li>{{ $currentUser->name }}</li>
            <li>{{ $currentUser->email }}</li>
            <li>{{ !$currentUser->permission_id ? 'Null' : $currentUser->permission_id }}</li>
            <button onclick="window.location.href='{{route('show-admin', ['id' => $currentUser->id])}}'">Edit</button>
        </div>
    @endforeach
@endif

@if ($user->permission_id === 2)
    @foreach ($users as $currentUser)
        @if ($currentUser->permission_id === 1 || $currentUser->permission_id === 2)
            @continue
        @endif
        <div>
            <li>{{ $currentUser->name }}</li>
            <li>{{ $currentUser->email }}</li>
            <li>{{ !$currentUser->permission_id ? 'Null' : $currentUser->permission_id }}</li>
            <button onclick="window.location.href='{{route('show-admin', ['id' => $currentUser->id])}}'">Edit</button>
        </div>
    @endforeach
@endif

<form action="{{ route('logout') }}" method="post">
 
    @csrf
 
    <button>Logout</button>
 
</form>

<div class="container">

    <br />
    <h1 class="text-center text-primary">Calendar</h1>
    <br />

    <div id="calendar"></div>

</div>

<script>

    $(document).ready(function () {
    
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        var calendar = $('#calendar').fullCalendar({
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:'/events',
            selectable:true,
            selectHelper: true,
            select:function(start, end, allDay)
            {
                var dialog = document.createElement('div');
                dialog.innerHTML = '<form id="eventForm">' +
                    '<label for="title">Title:</label>' +
                    '<input type="text" id="title" name="title"><br><br>' +
                    '<label for="start">Start:</label>' +
                    '<input type="datetime-local" id="start" name="start" value="' + start.format() + '"><br><br>' +
                    '<label for="end">End:</label>' +
                    '<input type="datetime-local" id="end" name="end" value="' + end.format() + '"><br><br>' +
                    '<label for="price">Price:</label>' +
                    '<input type="number" id="price" name="price"><br><br>' +
                    '<label for="capacity">Capacity:</label>' +
                    '<input type="number" id="capacity" name="capacity"><br><br>' +
                    '<label for="tour_id">Tour ID:</label>' +
                    '<input type="number" id="tour_id" name="tour_id"><br><br>' +
                    '</form>';

                $(dialog).dialog({
                    title: 'Create Event',
                    modal: true,
                    buttons: [
                        {
                            text: "Save",
                            click: function() {
                                var form = $('#eventForm');
                                var title = form.find('input[name="title"]').val();
                                var start = form.find('input[name="start"]').val();
                                var end = form.find('input[name="end"]').val();
                                var price = form.find('input[name="price"]').val();
                                var capacity = form.find('input[name="capacity"]').val();
                                var tour_id = form.find('input[name="tour_id"]').val();

                                $.ajax({
                                    url:"/events/action",
                                    type:"POST",
                                    data:{
                                        title: title,
                                        start: start,
                                        end: end,
                                        price: price,
                                        capacity: capacity,
                                        tour_id: tour_id,
                                        type: 'add'
                                    },
                                    success:function(data)
                                    {
                                        calendar.fullCalendar('refetchEvents');
                                        alert("Event Created Successfully");
                                    }
                                });
                                $(this).dialog('close');
                            }
                        }
                    ]
                });
            },
            editable:true,
            eventResize: function(event, delta)
            {
                var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"/events/action",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        id: id,
                        type: 'update'
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Updated Successfully");
                    }
                })
            },
            eventDrop: function(event, delta)
            {
                var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"/events/action",
                    type:"POST",
                    data:{
                        title: title,
                        start: start,
                        end: end,
                        id: id,
                        type: 'update'
                    },
                    success:function(response)
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Updated Successfully");
                    }
                })
            },
    
            eventClick:function(event)
            {
                if(confirm("Are you sure you want to remove it?"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"/events/action",
                        type:"POST",
                        data:{
                            id:id,
                            type:"delete"
                        },
                        success:function(response)
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Deleted Successfully");
                        }
                    })
                }
            }
        });
    
    });
      
    </script>


@endsection
