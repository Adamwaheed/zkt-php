<!-- Pin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pin', 'Pin:') !!}
    {!! Form::text('pin', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_time', 'Date Time:') !!}
    {!! Form::text('date_time', null, ['class' => 'form-control','id'=>'date_time']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#date_time').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Verified Field -->
<div class="form-group col-sm-6">
    {!! Form::label('verified', 'Verified:') !!}
    {!! Form::text('verified', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Work Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('work_code', 'Work Code:') !!}
    {!! Form::text('work_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Sync Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sync', 'Sync:') !!}
    {!! Form::text('sync', null, ['class' => 'form-control']) !!}
</div>

<!-- Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::text('message', null, ['class' => 'form-control']) !!}
</div>

<!-- Employee Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employee_name', 'Employee Name:') !!}
    {!! Form::text('employee_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Employee Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employee_number', 'Employee Number:') !!}
    {!! Form::text('employee_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('attendances.index') }}" class="btn btn-default">Cancel</a>
</div>
