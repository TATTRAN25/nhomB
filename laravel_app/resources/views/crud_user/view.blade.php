@extends('dashboard')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<div class="view border">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Màn hình chi tiết</h3>
                <table>
                    <tr>
                        <td>Username</td>
                        <td>{{ $carlos->name }}</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>{{ $carlos->email }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection