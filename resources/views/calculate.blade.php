@extends('layouts.master')

@section('title', 'คำนวณเส้นทางการเดินเรือ')

@section('banner-index')
@endsection

@section('content')
<div class="content-wrapper">
    <h1 class="text-primary pb-5 text-center">คำนวณเส้นทางการเดินเรือ</h1>
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
                    <label for="title" class="col-md-12 col-form-label strong">{{ __('1. เกาะไหง') }}</label>
                    <div class="col-md-12">
                        <select class="form-control" id="island1" name="island1">
                            <option value="" disabled hidden selected="selected">สถานะเกาะวันนี้*</option>
                            <option value="0">เปิด</option>
                            <option value="1">ปิด</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row pt-md-2">
                    <label for="title" class="col-md-12 col-form-label strong">{{ __('2. เกาะม้า') }}</label>
                    <div class="col-md-12">
                        <select class="form-control" id="island2" name="island2">
                            <option value="" disabled hidden selected="selected">สถานะเกาะวันนี้*</option>
                            <option value="0">เปิด</option>
                            <option value="1">ปิด</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row pt-md-2">
                    <label for="title" class="col-md-12 col-form-label strong">{{ __('3. เกาะเชือก') }}</label>
                    <div class="col-md-12">
                        <select class="form-control" id="island3" name="island3">
                            <option value="" disabled hidden selected="selected">สถานะเกาะวันนี้*</option>
                            <option value="0">เปิด</option>
                            <option value="1">ปิด</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row pt-md-2">
                    <label for="title" class="col-md-12 col-form-label strong">{{ __('4. เกาะแหวน') }}</label>
                    <div class="col-md-12">
                        <select class="form-control" id="island4" name="island4">
                            <option value="" disabled hidden selected="selected">สถานะเกาะวันนี้*</option>
                            <option value="0">เปิด</option>
                            <option value="1">ปิด</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row pt-md-2">
                    <label for="title" class="col-md-12 col-form-label strong">{{ __('5. เกาะรอก') }}</label>
                    <div class="col-md-12">
                        <select class="form-control" id="island5" name="island5">
                            <option value="" disabled hidden selected="selected">สถานะเกาะวันนี้*</option>
                            <option value="0">เปิด</option>
                            <option value="1">ปิด</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row pt-md-2">
                    <label for="title" class="col-md-12 col-form-label strong">{{ __('6. เกาะกระดาน') }}</label>
                    <div class="col-md-12">
                        <select class="form-control" id="island6" name="islan" d6>
                            <option value="" disabled hidden selected="selected">สถานะเกาะวันนี้*</option>
                            <option value="0">เปิด</option>
                            <option value="1">ปิด</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row pt-md-2">
                    <label for="title" class="col-md-12 col-form-label strong">{{ __('7. เกาะมุกต์') }}</label>
                    <div class="col-md-12">
                        <select class="form-control" id="island7" name="island7">
                            <option value="" disabled hidden selected="selected">สถานะเกาะวันนี้*</option>
                            <option value="0">เปิด</option>
                            <option value="1">ปิด</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row pt-md-2">
                    <div class="col-12">
                        หากต้องการดูข้อมูลเกาะ <a href="{{ url('/show-detail') }}"><span
                                class="text-danger">คลิก</span></a>
                    </div>
                </div>
                <div class="form-group row pt-3 pt-md-4">
                    <div class="col-md-3 offset-md-9 p-0">
                        <div class="col-12 pt-md-2">
                            {{-- <button type="submit" class="btn btn-primary w-100" id="btn-submit">
                                {{ __('ยืนยัน') }}
                            </button> --}}
                            <a href="{{ url('/result') }}" class="btn btn-primary w-100"> ยืนยัน </a>
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
