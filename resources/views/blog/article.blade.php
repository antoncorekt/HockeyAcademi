@extends('others.modal')
@section('title-modal')
{{$post->title}}
@endsection
@section('content-modal')
    <div class="text-modal">
        <?php
        $article = iconv('CP1251', 'UTF-8', file_get_contents($post->text));
        echo $article;
        ?>
    </div>
@endsection