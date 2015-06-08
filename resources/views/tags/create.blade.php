@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'tags.store']) !!}

        @include('tags.fields')

    {!! Form::close() !!}
</div>
@endsection
