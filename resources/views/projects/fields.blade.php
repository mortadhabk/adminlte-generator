<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Profile Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profile_id', 'Profile Id:') !!}
    {!! Form::select('profile_id', $profileItems, null, ['class' => 'form-control custom-select']) !!}
</div>
