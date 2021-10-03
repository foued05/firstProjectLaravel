<center>
    <button style="width: 10%; 
                height : 10%; 
                background-color: #73AD21;">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </button><br>
</center>
<h1>New</h1>
@foreach($users as $user)
    @foreach($user->unreadNotifications as $notification)
        <h3>{{ $notification->data['title'] }}  : {{ $notification->data['email'] }} 
            <span style="float : right;
                        width: 300px;
                        border: 3px solid #73AD21;
                        padding: 10px;">
                {{ $notification->created_at }}
                {{ $notification->markAsRead()}}
            </span>
        </h3><hr>
    @endforeach
@endforeach
<br><hr><br>
<h1>Late</h1>
@foreach($users as $user)
    @foreach($user->notifications as $notification)
        <h3>{{ $notification->data['title'] }}  : {{ $notification->data['email'] }} 
            <span style="float : right;
                        width: 300px;
                        border: 3px solid #73AD21;
                        padding: 10px;">
                {{ $notification->created_at }}
            </span>
        </h3><hr>
    @endforeach
@endforeach