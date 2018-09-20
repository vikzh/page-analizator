@extends('layouts.app')

@section('title', "Domains List")

@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Code</th>
            <th scope="col">Content Length</th>
            <th scope="col">h1</th>
            <th scope="col">Keywords</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($domains as $domain)
            <tr>
                <th scope="row">{{ $domain->id }}</th>
                <td><a href="{{ route('domains.show', ['id' => $domain->id]) }}"
                       class="badge badge-info">{{ $domain->name }}</a>
                </td>
                <td>{{ $domain->status }}</td>
                <td>{{ $domain->code }}</td>
                <td>{{ $domain->contLength }}</td>
                <td>{{ $domain->heading }}</td>
                <td>{{ $domain->keyContent }}</td>
                <td>{{ $domain->descContent }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $domains->links() }}
@endsection