@extends('master')
@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Create Deparmnet</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('departments.index') }}" class="btn btn-primary">List All new Departments</a>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('departments.store') }}" method ="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="Name" id="" class="form-control"
                            placeholder="Enter /departement Name" aria-describedby="helpId" />
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" name="Description" id="" class="form-control"
                            placeholder="Fnter Description" aria-describedby="helpId" />
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>

                </form>
            </div>
            <div class="col">


            </div>
        </div>
    </div>
@endsection
