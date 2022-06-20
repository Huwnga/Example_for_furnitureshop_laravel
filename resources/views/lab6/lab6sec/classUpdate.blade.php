@extends('lab6.lab6mas.l6master')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Class</h1>


    @include('partials.error')

    <form action="{{route('class.update', ['id' => old('id')?? $class->id])}}" method="post">
      @csrf
      @include('lab6\partisals\classFields')
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>
@endsection
