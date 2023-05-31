@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <div class="container mt-5">
                            <h2 class="mb-4" style="text-align: center;">Create new Student</h2>
                            <form method="POST" action="{{ url('add-student') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="" required autocomplete="email" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Class') }}</label>
                                    <div class="col-md-6">
                                        <input id="class" type="text" class="form-control" name="class" value="" required autocomplete="class" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>
                                    <div class="col-md-6">
                                        <input id="file" type="file" class="form-control" name="file" value="" required autocomplete="file" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('State') }}</label>
                                    <div class="col-md-6">
                                        <input id="state" type="text" class="form-control" name="state" value="" required autocomplete="state" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>
                                    <div class="col-md-6">
                                        <input id="country" type="text" class="form-control" name="country" value="" required autocomplete="country" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Add Student') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
