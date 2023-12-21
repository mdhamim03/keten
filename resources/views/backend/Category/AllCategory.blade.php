@extends('layouts.backendLayout')
@section('backendContent')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">All Category</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>id</th>
                            <th>Category</th>
                            <th>
                                Action
                            </th>
                        </tr>
                        @foreach ($categories as $key=>$category)
                            <tr>
                                <th>{{$categories->firstItem() + $key}}</th>
                                <th>{{$category->title}}</th>
                                <th>
                                    <a href="{{route('category.edit',$category->slug)}}" class="Btn btn-primary btn-sm">Edit</a>
                                    <a href="{{route('category.delete',$category->id)}}" class="Btn btn-danger btn-sm">Delete</a>
                                </th>
                            </tr>
                        @endforeach
                    </table>
                    <span>{{$categories->links()}}</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card ">
                <div class="card-header">
                    <h3>{{$editeCategory ? 'Edit' : 'Add'}}Category</h3>
                </div>
                <div class="card-body">
                    <form action="{{$editeCategory ? route('category.update',$editeCategory->slug) :route('category.store')}}" method="POST">
                        @csrf
                        @method('put')
                        <input value="{{$editeCategory ? $editeCategory->title : ''}}" name="title" type="text" class="form-control">
                        <button class="btn btn-primary btn-sm">{{$editeCategory ? 'Update' : 'All'}} Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection   