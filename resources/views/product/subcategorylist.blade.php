@extends('CRM.layouts.app')
@section('content')
    <div class="content-wrapper bg-white">
        <div class="row">
            <div class="col-lg-12 bg-white mx-auto mt-5">
                <h4 class="text-success">{{ Session::get('message') }}</h4>
                <div class="card bg-white">
                    <h4 class="card-header">All Sub Categories</h4>

                    <div class="card-body bg-white">
                        <div class="bg-white">
                            <form action="/sub-category-search" method="GET">
                                <div class="form-group row">
                                    <label class="col-md-6">
                                        <input type="text" class="form-control bg-white" name="query" value="Search"/>
                                    </label>
                                    <div class="col-md-6 ml-0">
                                        <span class="float-right col-md-6"><a href="/add-scategory" class="btn btn-success float-right">+Add</a></span>
                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead class="bg-orange">
                                <tr class="text-light">
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th>Sub Category Code</th>
                                    <th>Description</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($scategory as $scatg)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$scatg->categoryId}}</td>
                                        <td>{{$scatg->subCategoryName}}</td>
                                        <td>{{$scatg->subCategoryCode}}</td>
                                        <td>{{$scatg->note}}</td>

                                        <td>
                                            <a href="/s-edit/{{$scatg->id}}" class="btn btn-success btn-sm" title="Update">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a  class="btn btn-danger btn-sm" id="delete" title="Delete" href="javascript:void(0)" data-url="{{ route('subCategoryInfo', $scatg->id) }}" >
                                                <i class="fa fa-trash"></i>
                                            </a>


                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger">Category Delete</h5>

                </div>
                <div class="modal-body">
                    <form action="{{ route('deleteSubCategory') }}" class="form-group" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" id="user-id" name="id">
                        <span class="text-dark">Are you sure to delete this Sub Category?</span>

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-danger" id="yes" value="Yes">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" >No</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        //-----------cancel ride---------------
        $(document).ready(function () {

            $('body').on('click', '#delete', function () {
                var userURL = $(this).data('url');
                $.get(userURL, function (data) {
                    $('#deleteModal').modal('show');
                    $('#user-id').val(data.id);

                })
            });
        });
    </script>


@endsection
