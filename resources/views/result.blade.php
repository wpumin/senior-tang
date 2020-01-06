@extends('layouts.master')

@section('title', 'ผลลัพธ์เส้นทางที่ดีที่สุดสำหรับวันนี้')

@section('banner-index')
@endsection

@section('content')
<div class="content-wrapper">
    <h1 class="text-primary pb-5 text-center">เส้นทางที่ดีที่สุดสำหรับวันนี้</h1>
    <div class="container-fluid">
        <div class="row">
            {{-- API --}}
            <div class="col-md-12 col-lg-12 px-0 py-3 pb-5">
                <div class="forecast-item">
                    <h3 class="text-white"> <i class="flaticon-files-and-folders"></i> ผลลัพธ์</h3>
                    <hr style="border-top: 1px solid rgba(255,255,255,.25);" class="pb-2">
                    <div class="container">
                      <div class="row">
                          <div class="col-md-12 px-0">
                              <p class="text-white py-3 pb-md-4"><i class="flaticon-pointer"></i> <span class="strong">เส้นทาง:  </span><span class="d-block pt-4 pt-md-0 d-md-inline-block text-center text-md-left"> เกาะเชือก, เกาะมุกต์, เกาะไหง, เกาะแหวน</span> </p>
                              <p class="text-white py-3 pb-md-4"><i class="flaticon-dashboard"></i> <span class="strong">ระยะทาง:</span> 43.52 กม.</p>
                              <p class="text-white py-3 pb-md-4"><i class="flaticon-clock"></i> <span class="strong">เวลาที่ใช้:</span> 2 ชั่วโมง 25 นาที</p>
                              <hr style="border-top: 1px solid rgba(255,255,255,.25);" class="d-block d-md-none">
                              <p class="text-white py-3 pb-md-4 text-left text-md-right">  <span class="strong">ข้อมูลเมื่อ: 06/01/2020 - 00:32 น.</span></p>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 offset-md-9 px-0">
                <div class="col-12 pt-md-2 px-0">
                    {{-- <button type="submit" class="btn btn-primary w-100" id="btn-submit">
                        {{ __('ยืนยัน') }}
                    </button> --}}
                    <a href="{{ url('/calculate') }}" class="btn btn-primary w-100"> ย้อนกลับ </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>

</script>
@endsection
