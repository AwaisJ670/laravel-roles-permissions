@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    @can('create articles')
                     You can Create ARTICLES.
                     @endcan
                     @can('publish articles')
                     You can PUBLISH ARTICLES.
                     @endcan
                     @can('only super-admins can see this section')
                     Congratulations, you are a super-admin!
                     @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
