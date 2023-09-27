@php
    $arr=[
        "one"=>"ali",
        "two"=>"",
        "three"=>"ahmad", 
];
    
@endphp
@includeWhen(true,'comp.header',['names'=>$arr])
<h1>index</h1>
@includeUnless(true ,'comp.footer')
@includeif('comp.page')