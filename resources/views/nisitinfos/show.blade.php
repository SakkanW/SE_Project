@extends('layouts.main')

@section('page_title', 'Show')

@section('content')
    <div class="card card">
        <div class="card-heading">
            {{ $nisitinfo->firstname }}
        </div>
        <div class="card-body">
            {{ $nisitinfo->lastname }}
        </div>
    </div>
    
    
@stop