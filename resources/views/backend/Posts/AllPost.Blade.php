@extends('layouts.backendLayout')
@section('backendContent')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h3>All Posts</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>Popular</th>
                </tr>
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>
                        <span data-id="{{$post->id}}" class="text-warning popular">
                            <i class="fa-{{$post->is_popular > 0 ? "solid":"regular"}} fa-star"></i>
                        </span>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
    @push('customJs')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function ToguleStatus(e){
            $.ajax({
                url: `{{route('post.status')}}`,
                method: "get",
                data: {
                    id: $(this).attr('data-id')
                },
                success:function(res){

                    const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                    });

                    if(res == 'success'){
                        e.currentTarget.innerHTML = `<i class="fa-solid fa-star"></i>`
                        Toast.fire({
                        icon: "success",
                        title: "Your post add in popular"
                        });
                    }else{
                        e.currentTarget.innerHTML = `<i class="fa-regular fa-star"></i>`
                        Toast.fire({
                        icon: "error",
                        title: "Your post remove form popular"
                        });
                    }
                }
            })
        }
        $('.popular').click(ToguleStatus)
    </script>
    @endpush
@endsection    