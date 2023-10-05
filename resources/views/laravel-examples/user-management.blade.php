@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Add, Edit, Delete features are not functional!</strong> This is a
            <strong>PRO</strong> feature! Click <strong>
            <a href="https://www.creative-tim.com/live/soft-ui-dashboard-pro-laravel" target="_blank" class="text-white">here</a></strong>
            to see the PRO product!
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Users</h5>
                        </div>
                        <a href="{{ url('add-user') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New User</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Photo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        role
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Admin</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">admin@softui.com</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Admin</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">2</p>
                                    </td>
                                    <td>
                                        <div>
                                            <img src="/assets/img/team-1.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Creator</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">creator@softui.com</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Creator</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">05/05/20</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit user">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- SESSION FORM ADD NEW USER -->
            <div class="row">
                <div class="col-12">
                    <div clas="card mb-4 mx-4">
                        @if(session('addusersession'))
                            <div class="container-fluid py-4">
                                <div class="card">
                                    <div class="card-header pb-0 px-3">
                                        <h6 class="mb-0">{{ __('Form Penambahan User') }}</h6>
                                    </div>
                                    <div class="card-body pt-4 p-3">
                                        <form action="/add-user" method="POST" role="form text-left">
                                            @csrf
                                            @if($errors->any())
                                                <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                                                    <span class="alert-text text-white">
                                                    {{$errors->first()}}</span>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                                        <i class="fa fa-close" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            @endif
                                            @if(session('success'))
                                                <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                                                    <span class="alert-text text-white">
                                                    {{ session('success') }}</span>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                                        <i class="fa fa-close" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            @endif
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="user-name" class="form-control-label">{{ __('Full Name') }}</label>
                                                        <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                                            <input class="form-control" value="{{ auth()->user()->name }}" type="text" placeholder="Name" id="user-name" name="name">
                                                                @error('name')
                                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="user-email" class="form-control-label">{{ __('Email') }}</label>
                                                        <div class="@error('email')border border-danger rounded-3 @enderror">
                                                            <input class="form-control" value="{{ auth()->user()->email }}" type="email" placeholder="@example.com" id="user-email" name="email">
                                                                @error('email')
                                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="user.phone" class="form-control-label">{{ __('Phone') }}</label>
                                                        <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                                            <input class="form-control" type="tel" placeholder="0459867495" id="number" name="phone" value="{{ auth()->user()->phone }}">
                                                                @error('phone')
                                                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                                                @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="user.location" class="form-control-label">{{ __('Location') }}</label>
                                                        <div class="@error('user.location') border border-danger rounded-3 @enderror">
                                                            <input class="form-control" type="text" placeholder="Location" id="name" name="location" value="{{ auth()->user()->location }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="about">{{ 'About Me' }}</label>
                                                <div class="@error('user.about')border border-danger rounded-3 @enderror">
                                                    <textarea class="form-control" id="about" rows="3" placeholder="Say something about yourself" name="about_me">{{ auth()->user()->about_me }}</textarea>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end gap-2">
                                                <a href="{{ url('cancel-add-user') }}" class="btn bg-gradient-danger btn-md mt-4 mb-4" type="button">Batal</a>
                                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Tambah User' }}</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection