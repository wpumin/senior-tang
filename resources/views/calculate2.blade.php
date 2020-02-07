@extends('layouts.master')

@section('title', 'คำนวณเส้นทางการเดินเรือ')

@section('banner-index')
@endsection

@section('content')
<div class="content-wrapper">
    <h1 class="text-primary pb-5 text-center">คำนวณค่าใช้จ่ายในการเดินเรือ</h1>
    <div class="container-fluid">
        <div class="row">
            <form method="POST" action="" class="col-md-12 px-md-0" id="form-notallowed">
                @csrf

                <div class="form-group row pt-md-2">
                    <label for="title" class="d-flex align-items-center col-12 offset-md-2 col-md-3 col-form-label strong justify-content-md-center">{{ __('ราคาทัวร์') }}</label>
                    <div class="col-8 col-md-3">
                        <input type="number" placeholder="0.00" class="form-control">
                    </div>
                    <div class="col-4 col-md-3 d-flex align-items-center">
                        บาท/คน
                    </div>
                </div>
                
                <div class="form-group row pt-md-2">
                    <label for="title" class="d-flex align-items-center col-12 offset-md-2 col-md-3 col-form-label strong justify-content-md-center">{{ __('จำนวนนักท่องเที่ยว') }}</label>
                    <div class="col-8 col-md-3">
                        <input type="text" placeholder="0.00" class="form-control">
                    </div>
                    <div class="col-4 col-md-3 d-flex align-items-center">
                        คน
                    </div>
                </div>
                               
                <div class="form-group row pt-md-2">
                    <label for="title" class="d-flex align-items-center col-12 offset-md-2 col-md-3 col-form-label strong justify-content-md-center">{{ __('ค่าอาหาร') }}</label>
                    <div class="col-8 col-md-3">
                        <input type="text" placeholder="0.00" class="form-control">
                    </div>
                    <div class="col-4 col-md-3 d-flex align-items-center">
                        บาท/คน
                    </div>
                </div>

                <div class="form-group row pt-md-2">
                    <label for="title" class="d-flex align-items-center col-12 offset-md-2 col-md-3 col-form-label strong justify-content-md-center">{{ __('ค่าประกัน') }}</label>
                    <div class="col-8 col-md-3">
                        <input type="text" placeholder="0.00" class="form-control">
                    </div>
                    <div class="col-4 col-md-3 d-flex align-items-center">
                        บาท/คน
                    </div>
                </div>

                <div class="form-group row pt-md-2">
                    <label for="title" class="d-flex align-items-center col-12 offset-md-2 col-md-3 col-form-label strong justify-content-md-center">{{ __('ค่าเข้าอุทยาน') }}</label>
                    <div class="col-8 col-md-3">
                        <input type="text" placeholder="0.00" class="form-control">
                    </div>
                    <div class="col-4 col-md-3 d-flex align-items-center">
                        บาท/คน
                    </div>
                </div>

                <div class="form-group row pt-md-2">
                    <label for="title" class="d-flex align-items-center col-12 offset-md-2 col-md-3 col-form-label strong justify-content-md-center">{{ __('ค่าจ้างลูกเรือ') }}</label>
                    <div class="col-8 col-md-3">
                        <input type="text" placeholder="0.00" class="form-control">
                    </div>
                    <div class="col-4 col-md-3 d-flex align-items-center">
                        บาท/คน
                    </div>
                </div>

                <div class="form-group row pt-md-2">
                    <label for="title" class="d-flex align-items-center col-12 offset-md-2 col-md-3 col-form-label strong justify-content-md-center">{{ __('ค่าจ้างคนขับเรือ') }}</label>
                    <div class="col-8 col-md-3">
                        <input type="text" placeholder="0.00" class="form-control">
                    </div>
                    <div class="col-4 col-md-3 d-flex align-items-center">
                        บาท/คน
                    </div>
                </div>

                <div class="form-group row pt-md-2">
                    <label for="title" class="d-flex align-items-center col-12 offset-md-2 col-md-3 col-form-label strong justify-content-md-center">{{ __('ราคาน้ำมัน') }}</label>
                    <div class="col-8 col-md-3">
                        <input type="text" placeholder="0.00" class="form-control">
                    </div>
                    <div class="col-4 col-md-3 d-flex align-items-center">
                        บาท/ลิตร
                    </div>
                </div>

                <div class="form-group row pt-3 pt-md-4">
                    <div class="col-md-3 offset-md-5 p-0">
                        <div class="col-12 pt-md-2">
                            {{-- <button type="submit" class="btn btn-primary w-100" id="btn-submit">
                                {{ __('ยืนยัน') }}
                            </button> --}}
                            <a href="{{ url('/result') }}" class="btn btn-primary w-100"> คำนวณ </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>


</script>
@endsection
