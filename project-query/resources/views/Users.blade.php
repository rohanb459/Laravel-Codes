<h1>All users List</h1>

@foreach ($data as $id=>$user )
<h3>
    {{$user->id}}
    {{$user->name}}|
    {{$user->email}}|
    {{$user->age}}|
    {{$user->city}}
    <a href="{{route('view.user', $user->id)}}">Show</a>
</h3>

@endforeach
