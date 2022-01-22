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
            <tr>
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
                    {{date_format(date_create($post->date), 'Y/m/d h:i a')}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
