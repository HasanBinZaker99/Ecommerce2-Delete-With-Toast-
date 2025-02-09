@extends('CRM.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Add Project Category Form</div>
                        <div class="card-body">
                            <h4 class="text-success">{{ Session::get('message') }}</h4>
                            <form action="{{route('new-project-category')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Project Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="projectCategoryName"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Project Category Code</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="projectCategoryCode"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Save"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  @endsection
