@extends ('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')
        <div class="col-6">
            @include('shared.success-message')
            <div class="">
                @include('shared.idea-card')
            </div>
        <div class="col-3">
                @include('shared.search-bar')
                @include('shared.follow-box')
    </div>
@endsection

