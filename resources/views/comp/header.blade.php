<h1>header</h1>
@forelse ($names as $ke => $val )
<p>{{$ke." - ".$val }}</p>
    
@empty
<p>NO VALUE EXISTS</p>
    
@endforelse