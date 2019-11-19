@extends('layouts.public.main')

@section('header')
    @include('public.sections.header.menu.top_menu')
    @include('public.sections.header.title')
@endsection

@section('content')
    @include('public.sections.login.main')
@endsection

@section('footer')
    @include('public.sections.footer.footer')
@endsection

