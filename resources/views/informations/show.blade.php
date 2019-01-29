@extends('layouts.master')

@section('page_title', 'Show')

@section('content')
    <div class="card card">
        <div class="card-heading">
            {{ $information->firstname }}
        </div>
        <div class="card-body">
            {{ $information->lastname }}
        </div>
    </div>
    
    
@stop