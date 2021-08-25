@extends('layouts.app')

@section('content')
    @forelse($posts as $post)
        <div class="post">
            <a href="{{ route('post.show', ['post' => $post]) }}"><h1 class="text-3xl hover:underline">{{ $post->title }}</h1></a>
            <p><a href="" class="font-bold text-green-500 hover:underline">{{ $post->user->name }}</a> - {{ date_format($post->created_at, 'Y. F d.') }} ({{ $post->getReadTime() }} percnyi olvasmány)</p>
            <div class="mt-4">
                <div class="w-full content">
                    {{--                    <p>{!! Str::limit($post->content, 350) !!} <a href="{{ route('post.show', ['post' => $post]) }}" class="text-green-500 hover:underline">(read more)</a></p>--}}
                    <p>{!! $post->getShortContent() !!} <a href="{{ route('post.show', ['post' => $post]) }}" class="text-green-500 hover:underline">(tovább)</a></p>
                </div>
            </div>
        </div>
    @empty
        <p class="text-center">Jelenleg még egy bejegyzés sem került publikálásra, de több anyag is folyamatban van. Biztos lehetsz benne, hogy már nem kell sokat várni és meg fog jelenni egy-két új iromány.</p>
    @endforelse
    @if($posts->count())
        <div class="text-center">
            <a class="text-green-500 border-2 border-green-500 px-6 py-3 rounded-full hover:text-gray-100 hover:bg-green-500 transition" href="{{ route('post.index') }}">Több</a>
        </div>
    @endif
@endsection