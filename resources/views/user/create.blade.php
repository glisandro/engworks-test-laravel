@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside>
                       @include('user.partial.navbar')
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="card card-default">
                        <div class="card-header">
                            {{__('Add New User')}}
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('users.store') }}" method="post">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{__('First Name')}}</label>
                                    <div class="col-md-6">
                                        <input type="text" name="firstName" value="{{old('firstName')}}" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" required>
                                        @if ($errors->has('firstName'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('firstName') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{__('Last Name')}}</label>
                                    <div class="col-md-6">
                                        <input type="text" name="lastName" value="{{old('lastName')}}" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" required>
                                        @if ($errors->has('lastName'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('lastName') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{__('E-mail')}}</label>
                                    <div class="col-md-6">
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{__('Phone Number')}}</label>
                                    <div class="col-md-6">
                                        <input type="text" name="phoneNumber" value="{{old('phoneNumber')}}" class="form-control{{ $errors->has('phoneNumber') ? ' is-invalid' : '' }}">
                                        @if ($errors->has('phoneNumber'))
                                            <span class="invalid-feedback">
                                                {{ $errors->first('phoneNumber') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="offset-md-4 col-md-6">
                                        <button type="submit" class="btn btn-success">{{__('Save')}}</button>
                                        {{ csrf_field() }}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
