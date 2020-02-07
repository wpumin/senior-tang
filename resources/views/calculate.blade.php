@extends('layouts.master')

@section('title', 'คำนวณเส้นทางการเดินเรือ')

@section('banner-index')
@endsection

@section('content')
<div class="content-wrapper">
    <h1 class="text-primary pb-5 text-center">เงื่อนไขการเดินเรือ</h1>
    <div class="container-fluid">
        <div class="row">
            <form method="POST" action="" class="col-md-12 px-md-0" id="form-notallowed">
                @csrf

                <input type="hidden" id="swellHeight" name="swellHeight">
                <input type="hidden" id="swellDirection" name="swellDirection">
                <input type="hidden" id="swellPeriod" name="swellPeriod">
                <input type="hidden" id="windSpeed" name="windSpeed">
                <input type="hidden" id="windDirection" name="windDirection">

                <div class="form-group row pt-md-2">
                    <label for="title"
                        class="col-md-12 col-form-label strong text-danger">{{ __('ประเภทเรือ') }}</label>
                    <div class="col-md-12">
                        <select class="form-control" id="island1" name="island1">
                            <option value="" disabled hidden selected="selected">ประเภทเรือที่ใช้*</option>
                            <option value="0">เรือหางยาว</option>
                            <option value="1">เรือสปีดโบ๊ท</option>
                            <option value="2">เรือยอร์ช</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row pt-md-2">
                    <label for="title" class="col-md-12 col-form-label strong">{{ __('เกาะที่ 1') }}</label>
                    <div class="col-md-12">
                        <select class="form-control" id="island1" name="island1">
                            <option value="" disabled hidden selected="selected">เลือกเกาะที่จะเดินทางไป*</option>
                            <option value="0">เกาะไหง</option>
                            <option value="1">เกาะม้า</option>
                            <option value="2">เกาะเชือก</option>
                            <option value="3">เกาะแหวน</option>
                            <option value="4">เกาะรอก</option>
                            <option value="5">เกาะกระดาน</option>
                            <option value="6">เกาะมุกต์</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row pt-md-2">
                    <label for="title" class="col-md-12 col-form-label strong">{{ __('เกาะที่ 2') }}</label>
                    <div class="col-md-12">
                        <select class="form-control" id="island1" name="island1">
                            <option value="" disabled hidden selected="selected">เลือกเกาะที่จะเดินทางไป*</option>
                            <option value="0">เกาะไหง</option>
                            <option value="1">เกาะม้า</option>
                            <option value="2">เกาะเชือก</option>
                            <option value="3">เกาะแหวน</option>
                            <option value="4">เกาะรอก</option>
                            <option value="5">เกาะกระดาน</option>
                            <option value="6">เกาะมุกต์</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row pt-md-2">
                    <label for="title" class="col-md-12 col-form-label strong">{{ __('เกาะที่ 3') }}</label>
                    <div class="col-md-12">
                        <select class="form-control" id="island1" name="island1">
                            <option value="" disabled hidden selected="selected">เลือกเกาะที่จะเดินทางไป*</option>
                            <option value="0">เกาะไหง</option>
                            <option value="1">เกาะม้า</option>
                            <option value="2">เกาะเชือก</option>
                            <option value="3">เกาะแหวน</option>
                            <option value="4">เกาะรอก</option>
                            <option value="5">เกาะกระดาน</option>
                            <option value="6">เกาะมุกต์</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row pt-md-2">
                    <label for="title" class="col-md-12 col-form-label strong">{{ __('เกาะที่ 4') }}</label>
                    <div class="col-md-12">
                        <select class="form-control" id="island1" name="island1">
                            <option value="" disabled hidden selected="selected">เลือกเกาะที่จะเดินทางไป*</option>
                            <option value="0">เกาะไหง</option>
                            <option value="1">เกาะม้า</option>
                            <option value="2">เกาะเชือก</option>
                            <option value="3">เกาะแหวน</option>
                            <option value="4">เกาะรอก</option>
                            <option value="5">เกาะกระดาน</option>
                            <option value="6">เกาะมุกต์</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row pt-md-2">
                    <div class="col-12">
                        หากต้องการดูข้อมูลเกาะ <a href="{{ url('/show-detail') }}"><span
                                class="text-danger">คลิก</span></a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 px-0 py-3 pb-5">
                    <div class="forecast-item">
                        <h3 class="text-white"> <i class="flaticon-files-and-folders"></i> ผลลัพธ์</h3>
                        <hr style="border-top: 1px solid rgba(255,255,255,.25);" class="pb-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 px-0">
                                    <p class="text-white py-3 pb-md-4"><i class="flaticon-clock"></i> 
                                        <span class="strong">เวลาที่ใช้:</span> 
                                        2 ชั่วโมง 25 นาที
                                    </p>
                                    <p class="text-white py-3 pb-md-4"><i class="flaticon-pointer"></i> 
                                        <span class="strong">เส้นทาง: </span>
                                        <span class="d-block pt-4 pt-md-0 d-md-inline-block text-center text-md-left">
                                           เกาะไหง, เกาะม้า, เกาะเชือก, เกาะแหวน, เกาะไหง
                                        </span> 
                                    </p>
                                    {{-- <p class="text-white py-3 pb-md-4"><i class="flaticon-dashboard"></i> 
                                        <span class="strong">ระยะทาง:</span> 
                                        43.52 กม.
                                    </p> --}}
                                    <hr style="border-top: 1px solid rgba(255,255,255,.25);" class="d-block d-md-none">
                                    <p class="text-white py-3 pb-md-4 text-left text-md-right"> 
                                        <span class="strong">ข้อมูลเมื่อ:</span> <span id="time"></span> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row pt-3 pt-md-4">
                    <div class="col-12 col-md-3 offset-md-6 p-0">
                        <div class="col-12 pt-md-2">
                            {{-- <button type="submit" class="btn btn-primary w-100" id="btn-submit">
                                {{ __('ยืนยัน') }}
                            </button> --}}
                            <a href="{{ url('/calculate2') }}" class="btn btn-primary w-100"> เส้นทางของฉัน </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 p-0">
                        <div class="col-12 pt-3 pt-md-2">
                            {{-- <button type="submit" class="btn btn-primary w-100" id="btn-submit">
                                {{ __('ยืนยัน') }}
                            </button> --}}
                            <a href="{{ url('/calculate2') }}" class="btn btn-secondary w-100"> เส้นทางของระบบ </a>
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
    const lat = 8.073;
    const lng = 98.911;
    const numberOfDays = 3;
    const params = 'swellHeight,swellDirection,swellPeriod,windSpeed,windDirection';

    const swellHeight = document.querySelector("#swellHeight");
    const swellDirection = document.querySelector("#swellDirection");
    const swellPeriod = document.querySelector("#swellPeriod");
    const windSpeed = document.querySelector("#windSpeed");
    const windDirection = document.querySelector("#windDirection");
    const time = document.querySelector("#time");
    const today = new Date();
    const timeTemp = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

    fetch(`https://api.stormglass.io/v1/weather/point?lat=${lat}&lng=${lng}&numberOfDays=${numberOfDays}&params=${params}`, {
        headers: {
            'Authorization': 'fdaa49ea-2fda-11ea-b746-0242ac130002-fdaa4af8-2fda-11ea-b746-0242ac130002'
        }
    }).then((response) => response.json()).then((jsonData) => {
        var jsonObject = JSON.stringify(jsonData);
        // console.log(jsonObject);
        // console.log(jsonObject.hours[6]);

        console.log(jsonData.hours[6]);

        document.getElementById("swellHeight").value = (parseFloat(jsonData.hours[6].swellHeight[0].value))
            .toFixed(2);
        document.getElementById("swellDirection").value = jsonData.hours[6].swellDirection[0].value.toFixed(2);
        document.getElementById("swellPeriod").value = jsonData.hours[6].swellPeriod[0].value.toFixed(2);
        document.getElementById("windSpeed").value = (parseFloat(jsonData.hours[6].windSpeed[0].value * 3.6))
            .toFixed(2);
        document.getElementById("windDirection").value = jsonData.hours[6].windDirection[0].value.toFixed(2);
        var tempTime = jsonData.hours[6].time;
        time.innerHTML = timeTemp + " น. วันที่ " + tempTime.substring(8, 10) + "/" + tempTime.substring(5, 7) +
            "/" + (parseInt(tempTime.substring(0, 4)) + 543);
    });

</script>
@endsection
