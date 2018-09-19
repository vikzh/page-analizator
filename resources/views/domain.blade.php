@extends('layouts.app')

@section('title', "Analiz - {$domain->name}")

@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Code</th>
            <th scope="col">Content Length</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{ $domain->id }}</th>
            <td><a href="{{ route('domains.show', ['id' => $domain->id]) }}"
                   class="badge badge-info">{{ $domain->name }}</a>
            </td>
            <td>{{ $domain->status }}</td>
            <td>{{ $domain->code }}</td>
            <td>{{ $domain->contLength }}</td>
        </tr>
        </tbody>
    </table>
@endsection
