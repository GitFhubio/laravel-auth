Questa è una pagina pubblica

@if(!$logged)
non sei loggato
@else
Tu sei {{$name}}.
@endif

{{-- oppure due if separati,il secondo if  !empty name --}}
