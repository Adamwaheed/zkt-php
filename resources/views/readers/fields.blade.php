<!-- Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip', 'Ip:') !!}
    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Internal Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('internal_id', 'Internal Id:') !!}
    {!! Form::text('internal_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Com Key Field -->
<div class="form-group col-sm-6">
    {!! Form::label('com_key', 'Com Key:') !!}
    {!! Form::text('com_key', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Soap Port Field -->
<div class="form-group col-sm-6">
    {!! Form::label('soap_port', 'Soap Port:') !!}
    {!! Form::text('soap_port', null, ['class' => 'form-control']) !!}
</div>

<!-- Udp Port Field -->
<div class="form-group col-sm-6">
    {!! Form::label('udp_port', 'Udp Port:') !!}
    {!! Form::text('udp_port', null, ['class' => 'form-control']) !!}
</div>

<!-- Encoding Field -->
<div class="form-group col-sm-6">
    {!! Form::label('encoding', 'Encoding:') !!}
    {!! Form::text('encoding', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Status Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('readers.index') }}" class="btn btn-default">Cancel</a>
</div>
