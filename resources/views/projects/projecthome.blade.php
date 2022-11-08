@extends('layouts.master')
@section('content')

{{$projects->name}}
<div>
    {!!html_entity_decode($projects->description)!!}

</div>

@endsection