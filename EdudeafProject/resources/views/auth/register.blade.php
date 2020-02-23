@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('studentNumber') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">studentNumber</label>

                            <div class="col-md-6">
                                <input id="studentNumber" type="text" class="form-control" name="studentNumber" value="{{ old('studentNumber') }}" required autofocus>

{{--                                @if ($errors->has('name'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('name') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

{{--                                @if ($errors->has('email'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
                            </div>
                        </div>

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">nickname</label>

                        <div class="col-md-6">
                          <input id="nickname" type="text" class="form-control" name="nickname" value="{{ old('nickname') }}" required>

                          {{--                                @if ($errors->has('email'))--}}
                          {{--                                    <span class="help-block">--}}
                          {{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
                          {{--                                    </span>--}}
                          {{--                                @endif--}}
                        </div>
                      </div>



                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="hidden" class="form-control" name="password" value="0"  required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
