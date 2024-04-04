@extends('dashboard')

@section('content')

<div class="view border ms-auto">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <h3>Màn hình chi tiết</h3>
                <table>
                    <tr>
                        <td>Username</td>
                        <td>{{ $messi->id }}</td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>{{ $messi->email }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection