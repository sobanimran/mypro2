<h1>welcome

</h1>
{{5+7}}
{!!"<h1>hello</h1>"!!} 
{!!"<script>alert('hello')</script>"!!} {{--df--}}
{{"<h1>Secure from xss</h1>"}} 
<a href="post">post</a>
<a href="{{route("about")}}">about</a>
@php
    $arr=['a','b','c'];
    $usrName = "php code"
@endphp
{{$usrName}}
@{{$usrName}}
<ul>
{{-- LOOP VARIABLE --}}
@foreach ($arr as $val )
{{-- LOOP VARIABLE 
    --}}
    @if ($loop->first)
    <li style="color:red;">{{$loop->index.$loop->iteration.$loop->remaining.$loop->count.$val}}</li>
    @elseif ($loop->last)
    <li style="color:blue;">{{$loop->index.$loop->iteration.$loop->remaining.$loop->count.$val}}</li>
    @else
    <li>{{$loop->index.$loop->iteration.$loop->remaining.$loop->count.$val}}</li>
    
    @endif
    @if ($loop->even)
    <li style="color: brown">{{$loop->index.$loop->iteration.$loop->remaining.$loop->count.$val}}</li>
    
    @elseif ($loop->odd)
    <li style="color: green;">{{$loop->index.$loop->iteration.$loop->remaining.$loop->count.$val}}</li>
        
    @endif
    @endforeach
</ul>