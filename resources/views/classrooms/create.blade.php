@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">Create a new classroom</h1>

    @if ($errors->all())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif


    <form action="{{ route ('classrooms.store')}}" method="POST">

        @csrf
        @method('POST')

        <div class="form-group">
        <input type="text" class="form-control" value="{{ old('name')}}" name="name" placeholder="Class name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" value="{{ old('description')}}" name="description" placeholder="Description">
        </div>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>
@endsection