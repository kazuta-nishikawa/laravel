@extends('layout.index')

@section('content')

    <table>
        <thead>
            <th>ID</th>
            <th>name_sei</th>
            <th>name_mei</th>
            <th>nickname</th>
            <th>gender</th>
            <th>email</th>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->name_sei }}</td>
                    <td>{{ $member->name_mei }}</td>
                    <td>{{ $member->gender }}</td>
                    <td>{{ $member->email }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection