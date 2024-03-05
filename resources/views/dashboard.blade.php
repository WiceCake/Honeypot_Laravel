@extends('layouts.app')

@section('title', 'MUTI | Dashboard')

@section('content')
    
<!-- Sub Header -->
<div class="sub-header container grid justifiy-content-center py-5">

    <!-- Company Logo -->
    <div class="company-logo-container flex justify-content-between w-100">
        <div class="company-logo">
            <img src="{{asset('storage/assets/hondas.png')}}" alt="Honda Logo">
        </div>
        <div class="company-logo">
            <img src="{{asset('storage/assets/suzukis.png')}}" alt="Suzuki Logo">
        </div>
        <div class="company-logo">
            <img src="{{asset('storage/assets/yamahas.png')}}" alt="Yamaha Logo">
        </div>
        <div class="company-logo">
            <img src="{{asset('storage/assets/bajs.png')}}" alt="Bajaj Logo">
        </div>
        <div class="company-logo">
            <img src="{{asset('storage/assets/kawas.png')}}" alt="Kawasaki Logo">
        </div>
    </div>

    <!-- Search Bar and Other Buttons -->
    <div class="flex justify-content-center">
        <div class="search-bar flex mr-5">
            <input type="text" placeholder="Search...">
            <button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="btn-group inline">
            <button class="btn rounded mr-1 f-capital font-3">View All</button>
            <button class="btn rounded f-capital font-3">Print Report</button>
        </div>
    </div>

</div>

<!-- Dashboard Page -->
<div class="container mb-5">

    <!-- Cards -->
    <div class="card-group grid grid-4 my-5">
        <div class="card p-5 rounded">
            <div class="upper flex justify-content-between mb-3">
                <div class="icon p-2 rounded">
                    <i class="fa-regular fa-clock"></i>
                </div>
                <div>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </div>
            <p class="mb-1">Profit</p>
            <h2 class="mb-3">P12,628</h2>
            <p class="text-success"><i class="fa-solid fa-arrow-up"></i> +72.80%</p>
        </div>
        <div class="card p-5 rounded">
            <div class="upper flex justify-content-between mb-3">
                <div class="icon p-2 rounded">
                    <i class="fa-solid fa-wallet"></i>
                </div>
                <div>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </div>
            <p class="mb-1">Sales</p>
            <h2 class="mb-3">P4,679</h2>
            <p class="text-success"><i class="fa-solid fa-arrow-up"></i> +24.42%</p>
        </div>
        <div class="card p-5 rounded">
            <div class="upper flex justify-content-between mb-3">
                <div class="icon p-2 rounded">
                    <i class="fa-brands fa-paypal"></i>
                </div>
                <div>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </div>
            <p class="mb-1">Payments</p>
            <h2 class="mb-3">P2,456</h2>
            <p class="text-fail"><i class="fa-solid fa-arrow-down"></i> -14.82%</p>
        </div>
        <div class="card p-5 rounded">
            <div class="upper flex justify-content-between mb-3">
                <div class="icon p-2 rounded">
                    <i class="fa-regular fa-credit-card"></i>
                </div>
                <div>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </div>
            <p class="mb-1">Transactions</p>
            <h2 class="mb-3">P14,857</h2>
            <p class="text-success"><i class="fa-solid fa-arrow-up"></i> +28.14%</p>
        </div>
    </div>

    <!-- Profile Report and Leading Sales-->
    <div class="grid grid-2 g-2">
        <div>
            <div class="card p-5 rounded flex mb-5">
                <div class="mr-5">
                    <p class="card-title mb-2">Profile Report</p>
                    <p class="card-tag inline py-1 px-2 rounded-100 mb-4">YEAR 2023</p>
                    <p class="text-success"><i class="fa-solid fa-chevron-up"></i> 68.2%</p>
                    <h2>P84,686k</h2>
                </div>
                <div class="w-100">
                    <img src="{{asset('storage/assets/chart.svg')}}" alt="Report Chart">
                </div>
            </div>

            <div class="card p-5 rounded flex justify-content-between">
                <div>
                    <p class="mb-2">Leading Sale</p>
                    <p class="card-tag inline py-1 px-2 rounded-100 mb-4">YEAR 2023</p>
                    <p class="text-success"><i class="fa-solid fa-chevron-up"></i> 70.8%</p>
                    <h2>3k Sales</h2>
                </div>
                <div>
                    <img src="{{'storage/assets/honda_colored.png'}}" alt="Honda Logo">
                </div>
            </div>
        </div>

        <div class="card p-5 rounded">
            
            <div class="flex justify-content-between">
                <div>
                    <h2 class="mb-2">Order Statistics</h2>
                    <p>42.82k Total Sales</p>
                </div>
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </div>
            <div class="flex justify-content-between align-content-center mb-5">
                <div>
                    <h1 class="mb-3">9,260</h1>
                    <p>Total Orders</p>
                </div>
                <div>
                    <img src="{{'storage/assets/pie_chart.png'}}" alt="Pie Chart">
                </div>
            </div>
            <div>
                <div class="flex justify-content-between align-content-center mb-5">
                    <div class="flex align-content-center">
                        <img class="mr-3" src="{{'storage/assets/honda_colored.png'}}" width="50" alt="">
                        <p><strong>Honda</strong></p>
                    </div>
                    <p>3k</p>
                </div>
                <div class="flex justify-content-between align-content-center mb-5">
                    <div class="flex align-content-center">
                        <img class="mr-3" src="{{'storage/assets/suzuki_colored.png'}}" width="50" alt="">
                        <p><strong>Suzuki</strong></p>
                    </div>
                    <p>2.4k</p>
                </div>
                <div class="flex justify-content-between align-content-center mb-5">
                    <div class="flex align-content-center">
                        <img class="mr-3" src="{{'storage/assets/yamaha_colored.png'}}" width="50" alt="">
                        <p><strong>Yamaha</strong></p>
                    </div>
                    <p>1.36k</p>
                </div>
                <div class="flex justify-content-between align-content-center mb-5">
                    <div class="flex align-content-center">
                        <img class="mr-3" src="{{'storage/assets/baja_colored.png'}}" width="50" alt="">
                        <p><strong>Bajaj</strong></p>
                    </div>
                    <p>2.5k</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
