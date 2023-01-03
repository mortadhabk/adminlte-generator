<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Place Field -->
<div class="form-group col-sm-6">
    {!! Form::label('place', 'Place:') !!}
    {!! Form::text('place', null, ['class' => 'form-control']) !!}
</div>

<!-- Profile Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_id', 'Profile Id:') !!}
    {!! Form::select('profile_id', $profileItems, null, ['class' => 'form-control custom-select']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('image_url', 'Image:') !!}
    {!! Form::file('image_url',null,['class' => 'form-control']) !!}
</div>