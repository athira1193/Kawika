@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <div class="container mt-5">
                            <h2 class="mb-4" style="text-align: center;">Edit Student</h2>
                            <form method="POST" action="{{ url('edit-student') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{$student->name}}" required autocomplete="name" autofocus>
                                        <input type="hidden" name="stud_id" value="{{$student->id}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" readonly name="email" value="{{$student->email}}" required autocomplete="email" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Number') }}</label>
                                    <div class="col-md-6">
                                        <input id="number" type="number" class="form-control" readonly name="number" value="{{$student->number}}" required autocomplete="number" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Class') }}</label>
                                    <div class="col-md-6">
                                        <input id="class" type="text" class="form-control" name="class" value="{{$student->class}}" required autocomplete="class" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>
                                    <div class="col-md-6">
                                        <input id="file" type="file" class="form-control" name="file" value=""  autocomplete="file" autofocus>
                                        <img src="{{ asset('uploads/').'/'.$student->profile_pic }}" width="100"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('State') }}</label>
                                    <div class="col-md-6">
                                        <input id="state" type="text" class="form-control" name="state" value="{{$student->state}}" required autocomplete="state" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Country') }}</label>
                                    <div class="col-md-6">
                                        <input id="country" type="text" class="form-control" name="country" value="{{$student->country}}" required autocomplete="country" autofocus>
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Edit Student') }}
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
