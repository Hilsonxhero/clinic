@extends('layouts.app')

@section('content')
    <!-- Hero -->

    <x-landing.hero :landing="$landing"></x-landing.hero>


    <!-- Services -->
    <x-landing.service :services="$services"></x-landing.service>


    <!-- Latest portfolios -->
    <x-landing.portfolios :portfolios="$portfolios"></x-landing.portfolios>


    <!-- treatments carousel -->
    <x-landing.treatments :treatments="$treatments"></x-landing.treatments>



    <!-- Latest news -->
    <x-landing.articles :articles="$articles"></x-landing.articles>


    <!-- Contacts -->

    {{-- <x-landing.contacts :setting="$setting"></x-landing.contacts> --}}
@endsection
