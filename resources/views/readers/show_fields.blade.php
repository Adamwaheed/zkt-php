<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $reader->id }}</p>
</div>

<!-- Ip Field -->
<div class="form-group">
    {!! Form::label('ip', 'Ip:') !!}
    <p>{{ $reader->ip }}</p>
</div>

<!-- Internal Id Field -->
<div class="form-group">
    {!! Form::label('internal_id', 'Internal Id:') !!}
    <p>{{ $reader->internal_id }}</p>
</div>

<!-- Com Key Field -->
<div class="form-group">
    {!! Form::label('com_key', 'Com Key:') !!}
    <p>{{ $reader->com_key }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $reader->description }}</p>
</div>

<!-- Soap Port Field -->
<div class="form-group">
    {!! Form::label('soap_port', 'Soap Port:') !!}
    <p>{{ $reader->soap_port }}</p>
</div>

<!-- Udp Port Field -->
<div class="form-group">
    {!! Form::label('udp_port', 'Udp Port:') !!}
    <p>{{ $reader->udp_port }}</p>
</div>

<!-- Encoding Field -->
<div class="form-group">
    {!! Form::label('encoding', 'Encoding:') !!}
    <p>{{ $reader->encoding }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $reader->status }}</p>
</div>

