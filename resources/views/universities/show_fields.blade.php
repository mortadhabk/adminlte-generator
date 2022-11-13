<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $university->name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $university->description }}</p>
</div>

<!-- Place Field -->
<div class="col-sm-12">
    {!! Form::label('place', 'Place:') !!}
    <p>{{ $university->place }}</p>
</div>

<!-- Profile Id Field -->
<div class="col-sm-12">
    {!! Form::label('profile_id', 'Profile Id:') !!}
    <p>{{ $university->profile_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $university->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $university->updated_at }}</p>
</div>

