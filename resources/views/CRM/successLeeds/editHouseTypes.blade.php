@extends('CRM.layouts_successLeeds.leedsProfile')
@section('leedContent')
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">Add House Area Type</div>
            <div class="card-body">
                <h4 class="text-success">{{ Session::get('message') }}</h4>
                <form action="{{route('update-house-area-type', ['id'=>$leed->id,'houseType'=>$houseType->id])}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label">House Area Type Name</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="{{$houseType->name}}" name="name"/>
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
@endsection('leedContent')

