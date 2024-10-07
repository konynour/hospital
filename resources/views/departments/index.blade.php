@extends('master')
@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
      <a href="{{ route('departments.create') }}" class="btn btn-primary">create new Department</a>

  </div>
</div>

<h2>ALL Department</h2>
<div class="table-responsive small">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">description</th>
        <th scope="col">creatd at</th>
        <th scope="col">update a </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($department as $department )
      <tr>
        <td>1</td>
        <td>{{$department->name}}</td>
        <td>{{$department->description}}</td>
        <td>{{$department->created_at}}</td>
        <td>{{$department->updated_at}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
