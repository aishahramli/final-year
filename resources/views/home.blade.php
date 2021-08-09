@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h1>Facility Booking System<h1>
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! You can now book your facility easily ;)
                </div>
                <img src="/images/smkbb16.jpg" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection