@extends('layouts.app')

@section('title', "Domains List")

@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($domains as $domain)
            <tr>
                <th scope="row">{{ $domain->id }}</th>
                <td><a href="{{ route('domains.show', $domain->id) }}" class="badge badge-info">{{ $domain->name }}</a>
                </td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection