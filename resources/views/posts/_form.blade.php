@csrf
<div class="row">
    <div class="mb-3 col-6">
        <label for="post_title" class="form-label">Title</label>
        <input type="text" class="form-control" id="post_title" placeholder="Titulazo" name="post_title"
            value="{{ old('post_title', $post->title) }}">
    </div>
</div>
<div class="row">
    <div class="mb-3 col-6">
        <label for="post_content" class="form-label">Content</label>
        <textarea class="form-control" id="post_content" name="post_content"
            rows="3">{{ old('post_content', $post->content) }}</textarea>
    </div>
</div>

<div class="col-12">
    <button class="btn btn-primary" type="submit">{{ $buttonText }}</button>
</div>
