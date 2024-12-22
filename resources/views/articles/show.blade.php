@extends('layouts.app',['title' => $article->title])
@section('content')
<div class="container mb-2">
    <div class="container row">
        <div class="col-md-4">
            <img src="/storage/{{$article->path}}" alt="" style="height:100%;object-fit:cover;">
        </div>
        <div class="col-md-8 card p-4">
            <h1>{{ $article->title }}</h1>
            <div><?php echo html_entity_decode($article->content) ?></div>
            <small class="text-muted">
                Published on {{ $article->created_at->format('F d, Y') }}
            </small>
        </div>
    </div>
</div>
@endsection