@extends('layouts.app')

@section('content')
    <h1 class="text-3xl mb-2">{{ $post->title }}</h1>
    <p><a href="" class="font-bold text-green-500 hover:underline">{{ $post->user->name }}</a> - {{ date_format($post->created_at, 'Y. F d.') }} ({{ $post->getReadTime() }} percnyi olvasmány)</p>
    <div class="mt-8 flex gap-4">
        <div class="w-full md:w-3/4 content">
            <div class="post">
                <x-markdown>
                    {{ $post->content }}
                </x-markdown>
            </div>
        </div>
        @include('post.components.profile', ['user' => $post->user])
    </div>
@endsection