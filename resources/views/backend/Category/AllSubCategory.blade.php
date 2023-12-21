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
                            <th>Parent Category</th>
                            <th>SubCategory</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($subCategories as $key=>$subCategory)
                            <tr>
                                <td>{{$key}}</td>
                                <td>{{$subCategory->Category->title}}</td>
                                <td>{{$subCategory->title}}</td>
                                <td><a href="#" class="btn btn-primary btn-sm">----</a></td>
                            </tr>
                        @empty
                            
                        @endforelse
                    </table>
                    {{-- <span>{{$categories->links()}}</span> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card ">
                <div class="card-header">
                    <h3>Sub Category</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('SubCategory.store')}}" method="POST">
                        @csrf
                        @method('put')
                        <input value="" name="title" type="text" class="form-control">
                        <select name="catecoty_id" class="form-select" aria-label="Default select example">
                            <option disabled selected>None</option>
                            @forelse ($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                            @empty
                            <option selected disabled>No Categoty Found</option>
                            @endforelse
                          </select>
                        <button class="btn btn-primary btn-sm">Uplode</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection   