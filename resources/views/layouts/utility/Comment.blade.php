{{-- frontend Comment --}}
@if (count($reply->replyes)>0)
@foreach ($reply->replyes as $reply)
    <!-- reply comment item -->
    <li class="comment rounded child">
        <div class="thumb">
            <img style="width: 40px;height:40px;border-radius:50%;" src="{{$reply->user->profile_img_url ? $reply->user->profile_img_url : env('AVATER_API').$reply->user->name}}" alt="John Doe" />
        </div>
        <div class="details">
            <h4 class="name"><a href="blog-single.html#">{{$reply->user->name}}</a></h4>
            <span class="date">{{Carbon\Carbon::parse($reply->created_at)->format('d M Y')}}</span>
            <p>{{$reply->content}}</p>
            <a href="#comment-form" data-parent-id="{{$reply->id}}" data-name="{{$reply->user->name}}" class="replyBtns btn btn-default btn-sm">Reply</a>
        </div>
    </li>
    <!-- reply comment item -->
    @include('layouts.utility.Comment')
@endforeach
@endif