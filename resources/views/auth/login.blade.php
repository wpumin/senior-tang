@extends('layouts.master_login')

@section('title', 'เข้าสู่ระบบ')

@section('content')
<div class="context">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 text-center">
                <img src="{{ asset('images/logo/source.gif') }}" alt="" style="width: 280px">
                <div class="card mt-4">
                    <div class="card-header">{{ __('ระบบคำนวณเส้นทางการเดินเรือ จ.กระบี่') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ url('/show-detail') }}">
                            @csrf
    
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="ชื่อผู้ใช้งาน">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="รหัสผ่าน">
                                </div>
                            </div>
    
    
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    {{-- <button type="submit" class="btn btn-primary w-100">
                                        {{ __('เข้าสู่ระบบ') }}
                                    </button> --}}
                                    <a href="{{ url('/show-detail') }}" class="btn btn-primary w-100"> เข้าสู่ระบบ </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
