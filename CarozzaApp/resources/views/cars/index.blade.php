@extends('layouts.main')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title">
                            <div class="d-flex align-items-center">
                                <h2 class="mb-0">All Cars Models</h2>
                                <div class="ml-auto">
                                    <a href="form.html" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('cars._filter')
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Salesperson Email</th>
                                    <th scope="col">Manufacturer</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Camry</td>
                                    <td>2010</td>
                                    <td>test1@test.com</td>
                                    <td>Manufacturer one</td>
                                    <td width="150">
                                        <a href="show.html" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i
                                                class="fa fa-eye"></i></a>
                                        <a href="form.html" class="btn btn-sm btn-circle btn-outline-secondary"
                                            title="Edit"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete"
                                            onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Hilux</td>
                                    <td>2020</td>
                                    <td>test2@test.com</td>
                                    <td>Manufacturer one</td>
                                    <td>
                                        <a href="show.html" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i
                                                class="fa fa-eye"></i></a>
                                        <a href="form.html" class="btn btn-sm btn-circle btn-outline-secondary"
                                            title="Edit"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete"
                                            onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>330i</td>
                                    <td>2021</td>
                                    <td>test3@test.com</td>
                                    <td>Manufacturer Two</td>
                                    <td>
                                        <a href="show.html" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i
                                                class="fa fa-eye"></i></a>
                                        <a href="form.html" class="btn btn-sm btn-circle btn-outline-secondary"
                                            title="Edit"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete"
                                            onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
