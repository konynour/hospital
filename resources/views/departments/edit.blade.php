@extends('master')
@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Create Deparmnet</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="/department/create" class="btn btn-primary">List All new Departments</button>

        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col">
            <form action="/department/store" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="Name" id="name" class="form-control"
                        placeholder="Enter department name" aria-label="Department Name" aria-describedby="nameHelp" />
                    <small id="nameHelp" class="text-muted">Enter the name of the department.</small>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="Description" id="description" class="form-control"
                        placeholder="Enter description" aria-label="Department Description" aria-describedby="descriptionHelp" />
                    <small id="descriptionHelp" class="text-muted">Provide a brief description of the department.</small>
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>

            </form>
        </div>
        <div class="col">
            <!-- Additional content can go here -->
        </div>
    </div>
</div>

@endsection
