<article class="gallery__item">
    {{--<a href="">--}}
    <a href="{{route("posts.show",$post)}}" class="gallery__item_content">
        <figure>
            <img src="{{ Vite::asset($post->image) }}" alt="algo">
        </figure>
        <h2>{{ $post->title}}</h2>
        <p>{{ Str::limit($post->content)}}</p>
    </a>
</article>
