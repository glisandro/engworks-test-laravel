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
                            <div class="row">
                                <div class="col-md-3">{{__('User List')}}</div>
                                <div class="col-md-9 text-md-right">
                                    <a href="{{ url('users/create') }}" class="btn btn-primary">Add New User</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-valign-middle mb-0">
                                    <thead>
                                    <th>{{__('Full Name')}}</th>
                                    <th>{{__('E-mail')}}</th>
                                    <th>{{__('Phone Number')}}</th>
                                    </thead>
                                    <tbody>
                                    @forelse($users as $user)
                                        <tr>
                                            <td>{{ $user->fullName }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">{{__('No hay datos.')}}</td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <nav area-lavel="Pagination"> {!! $users->render() !!}</nav>
                        </div>
                    </div>

            </div>
        </div>
    </div>

@endsection