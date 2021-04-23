@extends('layouts.app')

@section('content')

<div class="flex">
    <div>
        @include('_sidebar-links')
    </div>

    <div class="flex-1 mx-10">
       @include('_publish-sweets')
    </div>

<div class="border border-green-300 rounded-lg">

    <div class="flex">

        <div>
            @foreach ($sweets as $sweet)
            @include('_sweet')

            @endforeach

        </div>

    </div>

</div>

    <div>
        @include('_friends-list')
    </div>
</div>

@endsection
