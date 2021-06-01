@extends('layouts.main-layout')
@section('title')
    Home
@endsection
@section('content')

    <main>
        <h1>
            lista employee
        </h1>
        <table>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    FIRSTNAME
                </th>
                <th>
                    LASTNAME
                </th>
            </tr>
            @foreach ($employees as $employee)
                <tr>
                    <td>
                        <a href="{{route('employee', $employee -> id)}}">
                            {{$employee -> id}}
                        </a>
                    </td>
                    <td>
                        <a href="{{route('employee', $employee -> id)}}">
                            {{$employee -> firstname}}
                        </a>
                    </td>
                    <td>
                        <a href="{{route('employee', $employee -> id)}}">
                            {{$employee -> lastname}}
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </main>
    
@endsection