@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- Ambil sesi user & role yang sudah disimpan saat login -->
                <div class="card-header">Dashboard - {{ session('username') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! {{ session('userrolename') }}
                    <div class="mt-4">
                        <div class="row">
                            @if(session('userroleid') == 1)
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('admin.jenis-hewan.index') }}" class="btn btn-primary btn-block">
                                    <i class="fas fa-paw"></i> Jenis Hewan
                                </a>
                            </div>
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('admin.pemilik.index') }}" class="btn btn-success btn-block">
                                    <i class="fas fa-users"></i> Pemilik
                                </a>
                            </div>
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
