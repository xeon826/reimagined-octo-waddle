@extends('layout')
@section('content')
{{-- [ id, slug, status, title, creation date ].  --}}
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
                <td>
                    {{$post->id}}
                </td>
                <td>
                    {{$post->slug}}
                </td>
                <td>
                    {{$post->status}}
                </td>
                <td>
                    {{$post->title->rendered}}
                </td>
                <td>
                    {{$post->date}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
