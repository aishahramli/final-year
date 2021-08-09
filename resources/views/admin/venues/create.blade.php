@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
       <!-- <h1> {{ trans('global.create') }} {{ trans('cruds.venue.title_singular') }}</h1> -->
       <h1> Create Facility</h1>
    </div>

    <div class="card-body">
        <form action="{{ route("admin.venues.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.venue.fields.name') }}</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter name" value="{{ old('name', isset($venue) ? $venue->name : '') }}">
                @if($errors->has('name'))
            
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.venue.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                <label for="address">{{ trans('cruds.venue.fields.address') }}</label>
                <input type="text" id="address" name="address" class="form-control" placeholder="Enter address" value="{{ old('address', isset($venue) ? $venue->address : '') }}">
                @if($errors->has('address'))
                    <em class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.venue.fields.address_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-success" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection