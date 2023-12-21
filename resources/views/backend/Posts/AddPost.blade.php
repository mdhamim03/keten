@extends('layouts.backendLayout')
@section('backendContent')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h3>Add Posts</h3>
        </div>
        <div class="card-body">
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class=" mt-4">
                    <input type="text" name="title" class="form-control" placeholder="Post Title">
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <select id="category"  class="form-control" aria-label="Default select example" name="category" >
                            <option disabled selected>Select Category</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <select id="SubCategory"  class="form-control" aria-label="Default select example" name="subcategory">
                            <option disabled selected>First Select a category</option>
                           
                        </select>
                    </div>
                </div>
                <div class="row mt-4 align-items-center">
                    <div class="col-lg-4">
                        <input type="file" class="form-control" name="featured_img">
                    </div>
                </div>
                <div class=" mt-4">
                    <textarea name="content" id="details" ></textarea>
                </div>
                <button class="btn btn-primary mt-4" style="width:100%">Publish Postes</button>

            </form>
        </div>
    </div>
</div>
    @push('customJs')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

        <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#details' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>

        {{-- Ajax Start --}}

        <script>
            function getSubCategoryVayAjax(){
                $.ajax({
                    url:"{{route('post.test')}}",
                    method: "get",
                    data:{
                        categoryId: $(this).val(),
                    },
                    success:function(res){
                        let optionLists = [];
                        res.forEach(data => {
                          let option = `<option value="${data.id}">${data.title}</option>`
                          optionLists.push(option)
                        });
                        $('#SubCategory').html(optionLists)
                        return false;
                    }
                })
            
            
            }
            $('#category').change(getSubCategoryVayAjax)
            </script>

    @endpush
@endsection    