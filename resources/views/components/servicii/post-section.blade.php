<div>
    @foreach ($posts as $post)
        @if($page['nav_title'] == $post->category->name)
            {{ $post->title }}
        @endif
    @endforeach
</div>
