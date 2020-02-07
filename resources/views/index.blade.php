@extends('layouts.master')

@section('title', 'ข้อมูล')

@section('banner-index')
@endsection

@section('content')
<div class="content-wrapper">
    <h1 class="text-primary pb-5 text-center wow fadeInUp">ข้อมูล</h1>
    <div class="container-fluid">
        <div class="row">
            {{-- API --}}
            <div class="col-md-12 col-lg-12 px-0 pr-md-4 px-lg-4 py-3 py-md-2 py-lg-4 wow fadeInUp">
                <div class="forecast-item">
                    <h3 class="text-white"> <i class="flaticon-cloud"></i> สภาพท้องทะเลประจำวันนี้</h3>
                    <hr style="border-top: 1px solid rgba(255,255,255,.25);" class="pb-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 px-0">
                                <p class="text-white py-3 pb-md-4"><i class="flaticon-wave"></i> <span
                                        class="strong">ความสูงคลื่น:</span> <span id="swellHeight">1.1</span> เมตร</p>
                                <p class="text-white py-3 pb-md-4"><i class="flaticon-compass-1"></i> <span
                                        class="strong">ทิศทางคลื่น:</span> <span id="swellDirection">85</span> องศา</p>
                                <p class="text-white py-3 pb-md-4"><i class="flaticon-wind"></i> <span
                                        class="strong">คาบ (คลื่น):</span> <span id="swellPeriod">4</span> ลูก/วินาที
                                </p>
                            </div>
                            <div class="col-md-6 px-0">
                                <p class="text-white py-3 pb-md-4"><i class="flaticon-air"></i> <span
                                        class="strong">ความเร็วลม:</span> <span id="windSpeed">18</span>
                                    กิโลเมตร/ชั่วโมง</p>
                                <p class="text-white py-3 pb-md-4"><i class="flaticon-compass-1"></i> <span
                                        class="strong">ทิศทางลม:</span> <span id="windDirection">91</span> องศา</p>
                                <p class="text-white py-3 pb-md-4"><i class="flaticon-clock"></i> <span
                                        class="strong">ข้อมูลเมื่อ:</span> <span id="time"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- island --}}
            <div class="col-md-6 col-lg-4 px-0 pr-md-4 px-lg-4 py-3 py-md-2 py-lg-4 wow fadeInUp">
                <div class="island-item">
                    <div class="image" style="background-image: url('{{ asset('images/island/1.jpg') }}')"></div>
                    <div class="map">
                        <h4 class="d-flex justify-content-between align-items-center">
                            <i class="flaticon-pointer"> เกาะไหง</i>
                            <a href="#" class="small-text text-primary underline" data-toggle="modal"
                                data-target="#modalIsland1"> แผนที่</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 px-0 pr-md-4 px-lg-4 py-3 py-md-2 py-lg-4 wow fadeInUp">
                <div class="island-item">
                    <div class="image" style="background-image: url('{{ asset('images/island/2.jpg') }}')"></div>
                    <div class="map">
                        <h4 class="d-flex justify-content-between align-items-center">
                            <i class="flaticon-pointer"> เกาะม้า</i>
                            <a href="#" class="small-text text-primary underline" data-toggle="modal"
                                data-target="#modalIsland2"> แผนที่</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 px-0 pr-md-4 px-lg-4 py-3 py-md-2 py-lg-4 wow fadeInUp">
                <div class="island-item">
                    <div class="image" style="background-image: url('{{ asset('images/island/3.jpg') }}')"></div>
                    <div class="map">
                        <h4 class="d-flex justify-content-between align-items-center">
                            <i class="flaticon-pointer"> เกาะเชือก</i>
                            <a href="#" class="small-text text-primary underline" data-toggle="modal"
                                data-target="#modalIsland3"> แผนที่</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 px-0 pr-md-4 px-lg-4 py-3 py-md-2 py-lg-4 wow fadeInUp">
                <div class="island-item">
                    <div class="image" style="background-image: url('{{ asset('images/island/4.jpg') }}')"></div>
                    <div class="map">
                        <h4 class="d-flex justify-content-between align-items-center">
                            <i class="flaticon-pointer"> เกาะแหวน</i>
                            <a href="#" class="small-text text-primary underline" data-toggle="modal"
                                data-target="#modalIsland4"> แผนที่</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 px-0 pr-md-4 px-lg-4 py-3 py-md-2 py-lg-4 wow fadeInUp">
                <div class="island-item">
                    <div class="image" style="background-image: url('{{ asset('images/island/5.jpg') }}')"></div>
                    <div class="map">
                        <h4 class="d-flex justify-content-between align-items-center">
                            <i class="flaticon-pointer"> เกาะรอก</i>
                            <a href="#" class="small-text text-primary underline" data-toggle="modal"
                                data-target="#modalIsland5"> แผนที่</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 px-0 pr-md-4 px-lg-4 py-3 py-md-2 py-lg-4 wow fadeInUp">
                <div class="island-item">
                    <div class="image" style="background-image: url('{{ asset('images/island/6.jpg') }}')"></div>
                    <div class="map">
                        <h4 class="d-flex justify-content-between align-items-center">
                            <i class="flaticon-pointer"> เกาะกระดาน</i>
                            <a href="#" class="small-text text-primary underline" data-toggle="modal"
                                data-target="#modalIsland6"> แผนที่</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 px-0 pr-md-4 px-lg-4 py-3 py-md-2 py-lg-4 wow fadeInUp">
                <div class="island-item">
                    <div class="image" style="background-image: url('{{ asset('images/island/7.jpg') }}')"></div>
                    <div class="map">
                        <h4 class="d-flex justify-content-between align-items-center">
                            <i class="flaticon-pointer"> เกาะมุกต์</i>
                            <a href="#" class="small-text text-primary underline" data-toggle="modal"
                                data-target="#modalIsland7"> แผนที่</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- modal 1 --}}
<div class="modal fade" id="modalIsland1" tabindex="-1" role="dialog" aria-labelledby="island1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="island1">เกาะไหง</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31651.49237312527!2d99.18936246521906!3d7.416842257519796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304de1ede755606b%3A0xca94e9812e328af3!2z4LmA4LiB4Liy4Liw4LmE4Lir4LiH!5e0!3m2!1sth!2sth!4v1578238268255!5m2!1sth!2sth"
                    width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

{{-- modal 2 --}}
<div class="modal fade" id="modalIsland2" tabindex="-1" role="dialog" aria-labelledby="island1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="island1">เกาะม้า</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15726.341277221642!2d99.97041192649986!3d9.801110837802204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305501779a601645%3A0x3a27ee685edf98bf!2sKo%20Ma!5e0!3m2!1sth!2sth!4v1578238653481!5m2!1sth!2sth"
                    width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

{{-- modal 3 --}}
<div class="modal fade" id="modalIsland3" tabindex="-1" role="dialog" aria-labelledby="island1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="island1">เกาะเชือก</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20973.664618372048!2d99.20958097342404!3d7.399847191265751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304de1a04e874647%3A0x491e05446b1d01e8!2z4LmA4LiB4Liy4Liw4LmA4LiK4Li34Lit4LiB!5e0!3m2!1sth!2sth!4v1578238691943!5m2!1sth!2sth"
                    width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

{{-- modal 4 --}}
<div class="modal fade" id="modalIsland4" tabindex="-1" role="dialog" aria-labelledby="island1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="island1">เกาะแหวน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.775999985217!2d99.24579171472327!3d7.378983144675491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304de0e4837c3edd%3A0x87cca62cdfb65f69!2z4LmA4LiB4Liy4Liw4LmB4Lir4Lin4LiZIFdhZW4gb3IgUmluZyBJc2xhbmQ!5e0!3m2!1sth!2sth!4v1578238727405!5m2!1sth!2sth"
                    width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

{{-- modal 5 --}}
<div class="modal fade" id="modalIsland5" tabindex="-1" role="dialog" aria-labelledby="island1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="island1">เกาะรอก</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15833.294586286034!2d99.05332567620438!3d7.203867666786529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304e70f6c8d2be8b%3A0x4a601b7437cded99!2z4LmA4LiB4Liy4Liw4Lij4Lit4LiB4LiZ4LmJ4Lit4Lii!5e0!3m2!1sth!2sth!4v1578238750196!5m2!1sth!2sth"
                    width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

{{-- modal 6 --}}
<div class="modal fade" id="modalIsland6" tabindex="-1" role="dialog" aria-labelledby="island1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="island1">เกาะกระดาน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31658.6686171694!2d99.23556486517921!3d7.316373962057004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304dde417a81863f%3A0xbaf10613aecd3f6d!2z4LmA4LiB4Liy4Liw4LiB4Lij4Liw4LiU4Liy4LiZ!5e0!3m2!1sth!2sth!4v1578238810101!5m2!1sth!2sth"
                    width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>

{{-- modal 7 --}}
<div class="modal fade" id="modalIsland7" tabindex="-1" role="dialog" aria-labelledby="island1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="island1">เกาะมุุกต์</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31654.714615694917!2d99.28055836520116!3d7.371898909548958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304de73d1eae5c0f%3A0xbe08b40801336e15!2z4LmA4LiB4Liy4Liw4Lih4Li44LiB!5e0!3m2!1sth!2sth!4v1578238834007!5m2!1sth!2sth"
                    width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
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
    const dd = String(today.getDate()).padStart(2, '0');
    const mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    const yyyy = today.getFullYear();
    const timeTemp = ("0" + (today.getHours())).slice(-2) + ":" + ("0" + (today.getMinutes())).slice(-2) + ":" + ("0" + (today.getSeconds())).slice(-2);

    fetch(`https://api.stormglass.io/v1/weather/point?lat=${lat}&lng=${lng}&numberOfDays=${numberOfDays}&params=${params}`, {
        headers: {
            'Authorization': 'fdaa49ea-2fda-11ea-b746-0242ac130002-fdaa4af8-2fda-11ea-b746-0242ac130002'
        }
    }).then((response) => response.json()).then((jsonData) => {
        var jsonObject = JSON.stringify(jsonData);
        // console.log(jsonObject);
        // console.log(jsonObject.hours[6]);

        time.innerHTML = timeTemp + " น. วันที่ " + dd + "/" + mm + "/" + (parseInt(yyyy) + 543);

        console.log(jsonData.hours[6]);
        swellHeight.innerHTML = (parseFloat(jsonData.hours[6].swellHeight[0].value)).toFixed(2);
        swellDirection.innerHTML = jsonData.hours[6].swellDirection[0].value.toFixed(2);
        swellPeriod.innerHTML = jsonData.hours[6].swellPeriod[0].value.toFixed(2);
        windSpeed.innerHTML = (parseFloat(jsonData.hours[6].windSpeed[0].value * 3.6)).toFixed(2);
        windDirection.innerHTML = jsonData.hours[6].windDirection[0].value.toFixed(2);
    });

</script>
@endsection
