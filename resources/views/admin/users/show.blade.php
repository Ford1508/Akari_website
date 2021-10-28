@extends('admin.layouts.template')

@section('title')
    {{ $user['name'] }}
@endsection

@section('content')
    <div class="templatemo-content-container">
        <p>Name: {{ $user['name'] }}</p>
        <p>Email: {{ $user['email'] }}</p>
        <p>Role: {{ $user['role'] == 0 ? 'User' : 'Cộng tác viên' }}</p>
    </div>
@endsection