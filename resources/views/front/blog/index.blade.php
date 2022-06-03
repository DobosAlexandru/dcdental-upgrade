@extends('front._layouts.app')

@section('content')

    <div class="space-y-4">

        {{-- Header --}}
        @include('front._components.top-bar')

        <div class="pt-8 md:px-12 lg:px-container 2xl:px-60">
            {{-- Livewire ShowPost --}}
            <livewire:blog.show-posts>
        </div>
    </div>

@endsection



