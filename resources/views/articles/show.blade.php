@extends ('layout')


@section ('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>{{ $article->title }}</h2>
                <span class="byline">Mauris vulputate dolor sit amet nibh</span>
            </div>
            <p>
                <img src="/images/banner.jpg" alt="" class="image image-full" />
            </p>
            {{ $article->body }}

            <p style="margin-top: 1rem;">
                @foreach ($article->tags as $tag)
                <a href="/articles?tag={{ $tag->name }}"
                    style="margin-right: 0.4rem; text-decoration: none; background: rgba(0, 0, 0, 0.2); padding: 0.2rem 0.4rem; font-weight:700;">{{  $tag->name }}</a>
                @endforeach
            </p>
        </div>
    </div>
</div>
@endsection