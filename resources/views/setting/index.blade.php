@extends('layouts.app')

@section('content')
    <div class="container setting">
        <div class="row">
            <div class="col-md-4">
                @include('setting.particals.sidebar')
            </div>

            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">{{ ('Зміна паролю') }}</div>

                    <div class="card-body">
                        <form class="form" action="{{ url('password/change') }}" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-right">{{ ('Старий пароль') }}</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" name="old_password" required>

                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ trans($errors->first('old_password')) }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-right">{{ ('Новий пароль') }}</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ trans($errors->first('password')) }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-right">{{ ('Підтвердження нового паролю') }}</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback">
                                            <strong>{{ trans($errors->first('password_confirmation')) }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">{{ ('Обновити пароль') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection