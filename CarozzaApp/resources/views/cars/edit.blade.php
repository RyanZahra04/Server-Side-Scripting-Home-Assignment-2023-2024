@extends('layouts.main')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Edit Car: Id 1</strong>
                        </div>
                        <form action="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="model" class="col-md-3 col-form-label">Model</label>
                                            <div class="col-md-9">
                                                <input type="text" name="model" id="model"
                                                    class="form-control" value="Camri">
                                                <!--<div class="invalid-feedback">
                                                    Please specify model.
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="year" class="col-md-3 col-form-label">Year</label>
                                            <div class="col-md-9">
                                                <input type="text" name="year" id="year"
                                                    class="form-control" value="2010">
                                                <!--<div class="invalid-feedback">
                                                    Please specify year.
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-3 col-form-label">Salesperson Email</label>
                                            <div class="col-md-9">
                                                <input type="email" name="email" id="email"
                                                    class="form-control" value="joe@carozza.com">
                                                <!--<div class="invalid-feedback">
                                                    Please specify email.
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="manufacturer_id"
                                                class="col-md-3 col-form-label">Manufacturer</label>
                                            <div class="col-md-9">
                                                <select name="manufacturer_id" id="manufacturer_id"
                                                    class="form-control">
                                                    <option value="">Select Manufacturer</option>
                                                    <option selected value="1">Toyota Motor Corp</option>
                                                    <option value="2">Manufacturer Two</option>
                                                    <option value="3">Manufacturer Three</option>
                                                </select>
                                                <!--<div class="invalid-feedback">
                                                    Please specify Manufacturer.
                                                </div>-->
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-9 offset-md-3">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <a href="" class="btn btn-outline-secondary">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endSection('content')
