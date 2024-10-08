@extends ('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-3">
    @include('shared.left-sidebar')
        <div class="col-6">
            @include('shared.success-message')
            @include('shared.submit-idea')
            <hr>
            @foreach($ideas as $idea)
                <div class="mt-3">
            @include('shared.idea-card')
            @endforeach

            <div class="mt-3">
                {{ $ideas->links() }}
            </div>
        </div>
        <div class="col-3">
        @include('shared.search-bar')
        @include('shared.follow-box')

    </div>

@endsection

