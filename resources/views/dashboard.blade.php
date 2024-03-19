@extends('layouts.app')

@section('title', 'MUTI | Dashboard')

@section('content')

    {{-- Sub Header --}}
    <section class="text-lato">
        <div>

            {{-- Company Logo --}}
            <div class="bg-dark">
                <div class="container d-md-none d-lg-block">
                    <div class="row justify-content-between">
                        <div class="col-2">
                            <img src="{{ asset('/storage/assets/hondas.png') }}" alt="Honda Logo">
                        </div>
                        <div class="col-2">
                            <img src="{{ asset('/storage/assets/suzukis.png') }}" alt="Suzuki Logo">
                        </div>
                        <div class="col-2">
                            <img src="{{ asset('/storage/assets/yamahas.png') }}" alt="Yamaha Logo">
                        </div>
                        <div class="col-2">
                            <img src="{{ asset('/storage/assets/bajs.png') }}" alt="Bajaj Logo">
                        </div>
                        <div class="col-2">
                            <img src="{{ asset('/storage/assets/kawas.png') }}" alt="Kawasaki Logo">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Search Bar and Other Buttons --}}
            <div class="bg-dark py-3">
                <div class="d-flex justify-content-center">
                    <div class="btn-group me-3 d-flex">
                        <input type="text" class="py-2 px-1 rounded-start" style="width: 300px" name="search"
                            placeholder="Search...">
                        <button class="btn btn-main text-white rounded-end btns"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-main rounded text-white me-3 btns">View All</button>
                        <button class="btn btn-main rounded text-white btns">Print Report</button>
                    </div>

                </div>
            </div>

        </div>

        {{-- Dashboard Page --}}
        <div class="container my-5">
            <div class="row g-3">
                {{-- Cards --}}
                <div class="col-lg-3">
                    <div class="card p-5 rounded shadow-sm">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="bg-main d-inline icon p-2 text-white rounded">
                                <i class="fa-regular fa-clock px-1"></i>
                            </div>
                            <div class="pointer btns">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                        <p class="mb-1">Profit</p>
                        <h2 class="mb-3">P12,628</h2>
                        <p class="text-success"><i class="fa-solid fa-arrow-up"></i> +72.80%</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card p-5 rounded shadow-sm">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="bg-main d-inline icon p-2 text-white rounded">
                                <i class="fa-solid fa-wallet px-1"></i>
                            </div>
                            <div class="pointer btns">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                        <p class="mb-1">Sales</p>
                        <h2 class="mb-3 fw-bold">P4,679</h2>
                        <p class="text-success"><i class="fa-solid fa-arrow-up"></i> +24.42%</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card p-5 rounded shadow-sm">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="bg-main d-inline icon p-2 text-white rounded">
                                <i class="fa-brands fa-paypal p-1"></i>
                            </div>
                            <div class="pointer btns">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                        <p class="mb-1">Payments</p>
                        <h2 class="mb-3">P2,456</h2>
                        <p class="text-danger"><i class="fa-solid fa-arrow-down"></i> -14.82%</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card p-5 rounded shadow-sm">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="bg-main d-inline icon p-2 text-white rounded">
                                <i class="fa-regular fa-credit-card px-1"></i>
                            </div>
                            <div class="pointer btns">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                        <p class="mb-1">Transactions</p>
                        <h2 class="mb-3">P14,857</h2>
                        <p class="text-success"><i class="fa-solid fa-arrow-up"></i> +28.14%</p>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="card p-5 rounded shadow-sm">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h2 class="mb-2">Order Statistics</h2>
                                <p>42.82k Total Sales</p>
                            </div>
                            <i class="fa-solid fa-ellipsis-vertical pointer btns"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <div>
                                <h1 class="mb-3">9,260</h1>
                                <p>Total Orders</p>
                            </div>
                            <div>
                                <img src="{{ asset('storage/assets/pie_chart.png') }}" alt="Pie Chart">
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center">
                                    <img class="me-3" src="{{ asset('storage/assets/honda_colored.png') }}" width="50"
                                        alt="">
                                    <p class="m-0"><strong>Honda</strong></p>
                                </div>
                                <p class="m-0">3k</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center">
                                    <img class="me-3" src="{{ asset('storage/assets/suzuki_colored.png') }}"
                                        width="50" alt="">
                                    <p class="m-0"><strong>Suzuki</strong></p>
                                </div>
                                <p class="m-0">2.4k</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center">
                                    <img class="me-3" src="{{ asset('storage/assets/yamaha_colored.png') }}"
                                        width="50" alt="">
                                    <p class="m-0"><strong>Yamaha</strong></p>
                                </div>
                                <p class="m-0">1.36k</p>
                            </div>
                            <div class="d-flex justify-content-between align-content-center mb-5">
                                <div class="d-flex align-content-center">
                                    <img class="me-3" src="{{ asset('storage/assets/baja_colored.png') }}"
                                        width="50" alt="">
                                    <p class="m-0"><strong>Bajaj</strong></p>
                                </div>
                                <p class="m-0">2.5k</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Profile Report and Leading Sales --}}
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-12 h-100">
                            <div class="card p-5 rounded shadow-sm">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="card-title mb-2">Profile Report</p>
                                        <p class="badge text-bg-warning py-1 px-2 rounded-100 mb-4">YEAR 2023</p>
                                        <p class="text-success"><i class="fa-solid fa-chevron-up"></i> 68.2%</p>
                                        <h2>P84,686k</h2>
                                    </div>
                                    <div class="col-8">
                                        <img src="{{ asset('storage/assets/chart.svg') }}" alt="Report Chart">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card p-5 rounded d-flex justify-content-between">
                                <div class="row">
                                    <div class="col-4">
                                        <p class="mb-2">Leading Sale</p>
                                        <p class="badge text-bg-warning py-1 px-2 rounded-100 mb-4">YEAR 2023</p>
                                        <p class="text-success"><i class="fa-solid fa-chevron-up"></i> 70.8%</p>
                                        <h2>3k Sales</h2>
                                    </div>
                                    <div class="col-8">
                                        <img src="{{ asset('storage/assets/honda_colored.png') }}" alt="Honda Logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script>
        data = {}
        $(document).ready(function() {
            $('.btns').on('click', function(e) {
                // Your event handling logic here
                data = {
                    btnName : $(this).text().toString(),
                    btnTag  : $(this)[0].outerHTML
                }
                sendData(data)
            });
        });

        function sendData(data) {

            fetch('userActivity', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                body: JSON.stringify(data)
            })
        }
    </script>
@endsection
