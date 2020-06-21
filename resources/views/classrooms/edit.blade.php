@extends('layouts.main')

@section('main-content')
    <h1 class="mb-4">Edit</h1>

    @if ($errors->all())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif


    <form action="{{ route ('classrooms.update', $classroom->id)}}" method="POST">

        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name">Name *</label>
        <input type="text" class="form-control" value="{{ old('name', $classroom->name)  }}" name="name" id="name" placeholder="Class name">
        </div>
        <div class="form-group">
            <label for="description">Description *</label>
            <input type="text" class="form-control" value="{{ old('description',$classroom->description) }}" name="description" id="description" placeholder="Description">
        </div>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>
@endsection