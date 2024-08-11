@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <user-group :roles="{{ $roles }}" :all_modules="{{ $all_modules }}"></user-group>
</div>
@endsection
