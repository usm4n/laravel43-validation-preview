@section('main')
    <div class="col-md-8 col-md-offset-2 form-content">
        <h3 class="heading">Laravel 4.3 Validation</h3>
        @if(Session::has('success'))
            <div class="alert alert-success">
                <p>{!!Session::get('success')!!}</p>
            </div>
        @endif
            @foreach($errors->all() as $error)
            <p class="alert alert-danger">{!!$error!!}</p>
            @endforeach
        {!!Form::open(['route'=>['user.save'],'class'=>'form form-horizontal','style'=>'margin-top:50px'])!!}
        <div class="form-group">
            {!! Form::label('username','User Name:',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('username',Input::old('username'),['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('age','Age:',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('age',Input::old('age'),['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('email','User Email:',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::text('email',Input::old('email'),['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('password','Password:',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('password_confirmation','Confirm Password:',['class'=>'col-sm-3 control-label']) !!}
            <div class="col-sm-8">
                {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="text-center">
            {!!Form::submit('Register',['class'=>'btn btn-default'])!!}
        </div>
        {!!Form::close()!!}
    </div>
@stop
