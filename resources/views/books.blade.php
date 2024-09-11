@extends('layouts.main')

@section('content')

<div class="container my-5">
    <!-- Titol -->
    <h1>I miei libri</h1>
    
    <!-- Table -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Titol</th>
      <th scope="col">Vote</th>
      <th scope="col">isbn</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($books as $book)
    <tr>
      <th>{{ $book->id }}</th>
      <td>{{ $book->title }}</td>
      <td>{{ $book->vote }}</td>
      <td>{{ $book->isbn }}</td>
    </tr>
    @endforeach
    <tr>
      <th>1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
   
  </tbody>
</table>
</div>
@endsection