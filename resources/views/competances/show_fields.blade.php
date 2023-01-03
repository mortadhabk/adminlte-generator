<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $competance->name }}</p>
</div>
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $competance->description }}</p>
</div>
<!-- Rating Field -->
<div class="col-sm-12">
    {!! Form::label('rating', 'Rating:') !!}
    <p>{{ $competance->rating }}</p>
</div>

<!-- Profile Id Field -->
<div class="col-sm-12">
    {!! Form::label('profile_id', 'Profile Id:') !!}
    <p>{{ $competance->profile_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $competance->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $competance->updated_at }}</p>
</div>

