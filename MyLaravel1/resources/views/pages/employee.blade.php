@extends('layouts.main-layout')
@section('title')
    Dettagli Employee
@endsection
@section('content')

    <main>
        <h1>
            dettagli employee
        </h1>
        <table>
            <tr>
                <th>
                    id
                </th>
                <th>
                    firstname
                </th>
                <th>
                    lastname
                </th>
            </tr>
            <tr>
                <td>
                    {{$employee -> id}}
                </td>
                <td>
                    {{$employee -> firstname}}
                </td>
                <td>
                    {{$employee -> lastname}}
                </td>
            </tr>
        </table>
        <h1>
            address employee
        </h1>
        <table>
            <tr>
                <th>
                    street
                </th>
                <th>
                    state
                </th>
            </tr>
            <tr>
                <td>
                    {{$employee -> location -> street}}
                </td>
                <td>
                    {{$employee -> location -> state}}
                </td>
            </tr>
        </table>
        <h1>
            Tasks
        </h1>
        <table>
            <tr>
                <th>
                    name
                </th>
            </tr>
            
            @if (count($employee -> tasks) > 0)
                @foreach ($employee -> tasks as $task)
                    <tr>
                        <td>
                            {{$task -> name}}
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>
                        Task non presente
                    </td>
                </tr>
            @endif
                
        </table>
        <a id="backHome" href="{{route('home')}}">
            back to home
        </a>
    </main>
    
@endsection