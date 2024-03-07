<!-- resources/views/child.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'Page Title10000')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
    <p style="color:red">Obba kangnan style.</p>
@endsection