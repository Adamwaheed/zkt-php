<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update Profile</h4>
            </div>
            <div class="modal-body">
                <div class="content">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="row">
                                {!! Form::model(auth()->user(), ['route' => ['users.update', auth()->user()->id], 'method' => 'patch']) !!}

                                <!-- Name Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::label('name', 'Name:') !!}
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>

                                    <!-- Email Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::label('email', 'Email:') !!}
                                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                                    </div>

                                    <!-- Password Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::label('password', 'Password:') !!}
                                        {!! Form::password('password', ['class' => 'form-control']) !!}
                                    </div>
                                    <!-- Password Field -->
                                    <div class="form-group col-sm-6">
                                        {!! Form::label('password', 'Password:') !!}
                                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                                    </div>
                                    <!-- Submit Field -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
