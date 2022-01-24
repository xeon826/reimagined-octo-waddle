@extends('layout')
@section('title', 'Recent Wordpress Posts')
@section('header', 'Recent Wordpress Posts')
@section('content')
<div id='posts-container'>
    <table>
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Slug
                </th>
                <th>
                    Status
                </th>
                <th>
                    Title
                </th>
                <th>
                    Creation Date
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr data-toggle-modal='{{$post->id}}' class='modal-toggle cursor-pointer bg-slate-900/70'>
                <td class='text-white'>
                    {{$post->id}}
                </td>
                <td class='text-white'>
                    {{$post->slug}}
                </td>
                <td class='text-white'>
                    {{$post->status}}
                </td>
                <td class='text-white'>
                    {{html_entity_decode($post->title->rendered)}}
                </td>
                <td class='text-white'>
                    {{date_format(date_create($post->date), 'Y/m/d h:i A')}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@foreach($posts as $post)
<div data-modal='{{$post->id}}' class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 mx-auto rounded shadow-lg z-50 overflow-y-auto">

        <div data-toggle-modal='{{$post->id}}' class="modal-toggle absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
            <span class="text-sm">(Esc)</span>
        </div>

        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">{!! $post->title->rendered !!}</p>
                <div data-toggle-modal='{{$post->id}}' class="modal-toggle cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>

            <!--Body-->
            <div class='post-content max-h-96 overflow-y-scroll'>
                {!! $post->content->rendered !!}
            </div>

            <!--Footer-->
            <div data-toggle-modal='{{$post->id}}' class="modal-toggle flex justify-end pt-2">
                <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
            </div>

        </div>
    </div>
</div>
@endforeach
@endsection
