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
            events:'/home',
            selectable:true,
            selectHelper: true,
            select:function(start, end, allDay)
            {
                var title = prompt('Event Title:');
    
                if(title)
                {
                    var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');
    
                    var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');
    
                    $.ajax({
                        url:"/home/action",
                        type:"POST",
                        data:{
                            title: title,
                            start: start,
                            end: end,
                            type: 'add'
                        },
                        success:function(data)
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Created Successfully");
                        }
                    })
                }
            },
            editable:true,
            eventResize: function(event, delta)
            {
                var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"/home/action",
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
                    url:"/home/action",
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
                        url:"/home/action",
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
