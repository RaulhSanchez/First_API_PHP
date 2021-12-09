
@for ($i = 0;$i <10; $i++ )
    The current value is {{$i}}
@endfor

@foreach ($suers as $user)
    <p>This is user {{$user->id}}</p>
@endforeach

@@forelse ($users as $user)
    <li>{{$usre->name}}</li>
@empty
    <p>No users </p>
@endforelse
