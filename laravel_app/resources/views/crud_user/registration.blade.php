@extends('dashboard')

@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Màn hình đăng ký</h3>
                    <div class="card-body">
                        <form action="{{ route('user.postUser') }}" method="POST">
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection