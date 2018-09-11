
@if(isset($comment_data))
@forelse($comment_data as $comment_value)
    @if($comment_value->user->trashed())
        <img style="width:50px;height:50px;" src="/storage/profile/index.png"/>
        <p>Commented by {{ $comment_value->user->name }}</p>
    @else
        <img style="width:50px;height:50px;" src="/storage/profile/{{ $comment_value->user->profile }}"/>
        <p>Commented by <a href="{{ route('users.show', $comment_value->user->id) }}">{{ $comment_value->user->name }}</a></p>  
    @endif
        <h3>{{ $comment_value->content }}</h3>
        <p>Date Created:{{ $comment_value->created_at->diffForHumans() }} Date Editted:{{ $comment_value->updated_at->diffForHumans() }}</p>
    
@endforeach
@endif

