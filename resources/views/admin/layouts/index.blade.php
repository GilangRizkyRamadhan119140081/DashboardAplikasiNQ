<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/NQ2.png') }}">
    <link href="{{ asset('assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/nouislider/nouislider.min.css') }}">

    <!-- Style css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="64px" height="60px"
                    viewBox="0 0 128 120"
                    style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g>
                        <path style="opacity:0.908" fill="#dde5e7"
                            d="M 76.5,15.5 C 70.0908,15.1827 63.7575,15.6827 57.5,17C 55.8839,17.6152 54.5505,18.6152 53.5,20C 56.0972,20.7792 56.0972,21.2792 53.5,21.5C 39.7845,23.5023 39.1178,21.669 51.5,16C 59.9527,13.0541 68.2861,12.8874 76.5,15.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#f1bfc4"
                            d="M 76.5,15.5 C 77.1667,15.5 77.8333,15.5 78.5,15.5C 78.1788,17.0481 77.1788,17.7148 75.5,17.5C 72.0242,16.3567 68.3575,16.1901 64.5,17C 61.9974,18.5494 61.9974,20.2161 64.5,22C 63.7236,23.7698 63.8903,25.6031 65,27.5C 66.4186,29.9929 67.9186,32.3263 69.5,34.5C 69.3335,46.1714 69.5001,57.8381 70,69.5C 71.0319,71.0267 72.1986,72.36 73.5,73.5C 72.5084,73.3284 71.8417,73.6618 71.5,74.5C 69.1782,73.1979 67.8449,71.1979 67.5,68.5C 68.1661,63.1771 68.4994,57.6771 68.5,52C 68.4952,46.1238 67.8286,40.6238 66.5,35.5C 64.2299,28.8973 59.8966,24.2306 53.5,21.5C 56.0972,21.2792 56.0972,20.7792 53.5,20C 54.5505,18.6152 55.8839,17.6152 57.5,17C 63.7575,15.6827 70.0908,15.1827 76.5,15.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#fb9696"
                            d="M 75.5,17.5 C 72.7118,17.0769 70.7118,18.0769 69.5,20.5C 69.7775,25.138 69.7775,29.8046 69.5,34.5C 67.9186,32.3263 66.4186,29.9929 65,27.5C 63.8903,25.6031 63.7236,23.7698 64.5,22C 61.9974,20.2161 61.9974,18.5494 64.5,17C 68.3575,16.1901 72.0242,16.3567 75.5,17.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#e76e73"
                            d="M 78.5,15.5 C 86.7041,18.3691 91.7041,24.0357 93.5,32.5C 93.6665,43.505 93.4998,54.505 93,65.5C 92.7216,66.4158 92.2216,67.0825 91.5,67.5C 92.7779,56.0262 92.7779,44.6928 91.5,33.5C 91.9465,30.9899 91.2798,28.9899 89.5,27.5C 88.5223,24.5222 86.5223,22.5222 83.5,21.5C 82.4863,20.3263 81.153,19.6596 79.5,19.5C 78.0813,18.5489 76.4147,18.2155 74.5,18.5C 72.5058,31.0262 71.1724,43.6929 70.5,56.5C 70.7245,58.4547 71.3911,60.1213 72.5,61.5C 71.7253,65.1816 73.0586,67.6816 76.5,69C 74.0266,70.4019 74.0266,71.9019 76.5,73.5C 77.9385,74.0634 79.4385,74.3968 81,74.5C 83.4897,73.6643 85.9897,72.9976 88.5,72.5C 86.4924,74.9272 83.8257,75.9272 80.5,75.5C 77.7954,75.6839 75.4621,75.0173 73.5,73.5C 72.1986,72.36 71.0319,71.0267 70,69.5C 69.5001,57.8381 69.3335,46.1714 69.5,34.5C 69.7775,29.8046 69.7775,25.138 69.5,20.5C 70.7118,18.0769 72.7118,17.0769 75.5,17.5C 77.1788,17.7148 78.1788,17.0481 78.5,15.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:0.975" fill="#bdd3df"
                            d="M 51.5,26.5 C 51.5,27.1667 51.5,27.8333 51.5,28.5C 48.3623,27.3187 45.3623,27.3187 42.5,28.5C 40.5956,28.7376 39.2623,29.7376 38.5,31.5C 36.2729,32.4006 35.2729,34.0672 35.5,36.5C 34.6618,36.8417 34.3284,37.5084 34.5,38.5C 34.1555,47.3813 33.1555,56.048 31.5,64.5C 31.3336,56.4931 31.5003,48.4931 32,40.5C 33.5395,28.8203 40.0395,24.1537 51.5,26.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#fc6668"
                            d="M 79.5,19.5 C 77.4508,19.7058 77.1175,20.5391 78.5,22C 77.7828,33.0332 76.1162,43.8666 73.5,54.5C 75.0049,55.8415 75.6715,57.5082 75.5,59.5C 74.5,60.1667 73.5,60.8333 72.5,61.5C 71.3911,60.1213 70.7245,58.4547 70.5,56.5C 71.1724,43.6929 72.5058,31.0262 74.5,18.5C 76.4147,18.2155 78.0813,18.5489 79.5,19.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#5a5959"
                            d="M 42.5,28.5 C 44.5273,28.3379 46.5273,28.5045 48.5,29C 47.6634,30.0113 47.33,31.1779 47.5,32.5C 47.5729,37.6774 47.2395,43.0108 46.5,48.5C 47.7678,60.1787 49.1011,71.8454 50.5,83.5C 46.291,67.2096 43.791,50.543 43,33.5C 42.6174,34.056 42.1174,34.3893 41.5,34.5C 41.5,32.5 40.5,31.5 38.5,31.5C 39.2623,29.7376 40.5956,28.7376 42.5,28.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#707277"
                            d="M 42.5,28.5 C 45.3623,27.3187 48.3623,27.3187 51.5,28.5C 55.0926,30.5568 57.5926,33.5568 59,37.5C 59.3976,49.2193 59.731,60.886 60,72.5C 59.6012,72.2716 59.4346,71.9382 59.5,71.5C 58.9101,70.234 58.4101,68.9007 58,67.5C 57.6667,56.8333 57.3333,46.1667 57,35.5C 55.4499,36.5908 54.2832,37.9242 53.5,39.5C 53.1788,37.9519 52.1788,37.2852 50.5,37.5C 50.9038,36.2436 51.5705,35.0769 52.5,34C 52.1377,32.7753 51.6377,31.6086 51,30.5C 49.8873,31.305 48.7206,31.9717 47.5,32.5C 47.33,31.1779 47.6634,30.0113 48.5,29C 46.5273,28.5045 44.5273,28.3379 42.5,28.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#4e4d4f"
                            d="M 38.5,31.5 C 40.5,31.5 41.5,32.5 41.5,34.5C 38.6618,36.3059 38.9952,37.3059 42.5,37.5C 42.4368,52.7855 44.4368,67.7855 48.5,82.5C 48.0431,83.2975 47.3764,83.6309 46.5,83.5C 43.2721,69.7585 40.6054,55.9252 38.5,42C 39.2375,39.4967 38.2375,37.6633 35.5,36.5C 35.2729,34.0672 36.2729,32.4006 38.5,31.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#535454"
                            d="M 50.5,83.5 C 50.5,84.8333 51.1667,85.5 52.5,85.5C 52.9175,86.2216 53.5842,86.7216 54.5,87C 52.5273,87.4955 50.5273,87.6621 48.5,87.5C 46.5659,86.8897 44.8993,85.8897 43.5,84.5C 44.791,84.7373 45.791,84.404 46.5,83.5C 47.3764,83.6309 48.0431,83.2975 48.5,82.5C 44.4368,67.7855 42.4368,52.7855 42.5,37.5C 38.9952,37.3059 38.6618,36.3059 41.5,34.5C 42.1174,34.3893 42.6174,34.056 43,33.5C 43.791,50.543 46.291,67.2096 50.5,83.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#616061"
                            d="M 50.5,37.5 C 48.9745,41.7279 48.3078,46.2279 48.5,51C 48.8799,62.6369 50.2133,74.1369 52.5,85.5C 51.1667,85.5 50.5,84.8333 50.5,83.5C 49.1011,71.8454 47.7678,60.1787 46.5,48.5C 47.2395,43.0108 47.5729,37.6774 47.5,32.5C 48.7206,31.9717 49.8873,31.305 51,30.5C 51.6377,31.6086 52.1377,32.7753 52.5,34C 51.5705,35.0769 50.9038,36.2436 50.5,37.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#68686a"
                            d="M 50.5,37.5 C 52.1788,37.2852 53.1788,37.9519 53.5,39.5C 51.2306,53.7359 51.8973,67.9026 55.5,82C 54.4846,84.7981 55.4846,86.6315 58.5,87.5C 58.246,88.3321 57.246,88.9987 55.5,89.5C 53.2362,88.7814 50.9029,88.448 48.5,88.5C 48.5,88.1667 48.5,87.8333 48.5,87.5C 50.5273,87.6621 52.5273,87.4955 54.5,87C 53.5842,86.7216 52.9175,86.2216 52.5,85.5C 50.2133,74.1369 48.8799,62.6369 48.5,51C 48.3078,46.2279 48.9745,41.7279 50.5,37.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#fc5659"
                            d="M 79.5,19.5 C 81.153,19.6596 82.4863,20.3263 83.5,21.5C 82.8333,21.5 82.1667,21.5 81.5,21.5C 79.299,31.7764 77.6323,42.2764 76.5,53C 77.0767,55.137 77.41,57.3037 77.5,59.5C 76.8333,59.5 76.1667,59.5 75.5,59.5C 75.6715,57.5082 75.0049,55.8415 73.5,54.5C 76.1162,43.8666 77.7828,33.0332 78.5,22C 77.1175,20.5391 77.4508,19.7058 79.5,19.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#fc383a"
                            d="M 81.5,21.5 C 82.1667,21.5 82.8333,21.5 83.5,21.5C 86.5223,22.5222 88.5223,24.5222 89.5,27.5C 88.8826,27.3893 88.3826,27.056 88,26.5C 86.3202,35.5163 85.8202,44.5163 86.5,53.5C 85.8333,55.5 84.5,56.8333 82.5,57.5C 81.0768,55.2439 80.4101,52.7439 80.5,50C 81.7039,40.4702 82.0372,30.9702 81.5,21.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#787778"
                            d="M 59.5,71.5 C 57.5891,71.4257 56.4224,70.4257 56,68.5C 55.8333,69.1667 55.6667,69.8333 55.5,70.5C 57.1462,76.063 58.1462,81.7297 58.5,87.5C 55.4846,86.6315 54.4846,84.7981 55.5,82C 51.8973,67.9026 51.2306,53.7359 53.5,39.5C 54.2832,37.9242 55.4499,36.5908 57,35.5C 57.3333,46.1667 57.6667,56.8333 58,67.5C 58.4101,68.9007 58.9101,70.234 59.5,71.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#fa2324"
                            d="M 89.5,27.5 C 91.2798,28.9899 91.9465,30.9899 91.5,33.5C 91.6665,43.5056 91.4998,53.5056 91,63.5C 88.9937,60.2823 87.4937,56.9489 86.5,53.5C 85.8202,44.5163 86.3202,35.5163 88,26.5C 88.3826,27.056 88.8826,27.3893 89.5,27.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#fc4a4d"
                            d="M 81.5,21.5 C 82.0372,30.9702 81.7039,40.4702 80.5,50C 80.4101,52.7439 81.0768,55.2439 82.5,57.5C 82.1436,59.1898 81.1436,60.1898 79.5,60.5C 78.5084,60.6716 77.8417,60.3382 77.5,59.5C 77.41,57.3037 77.0767,55.137 76.5,53C 77.6323,42.2764 79.299,31.7764 81.5,21.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#46464a"
                            d="M 35.5,36.5 C 38.2375,37.6633 39.2375,39.4967 38.5,42C 40.6054,55.9252 43.2721,69.7585 46.5,83.5C 45.791,84.404 44.791,84.7373 43.5,84.5C 39.7542,82.423 37.0875,79.423 35.5,75.5C 35.5,74.5 35.5,73.5 35.5,72.5C 37.2825,73.1135 38.6159,74.2802 39.5,76C 38.306,78.9401 39.306,80.2735 42.5,80C 39.7253,67.9448 37.892,55.4448 37,42.5C 35.5545,51.7264 35.0545,61.0598 35.5,70.5C 34.5056,60.0131 34.1722,49.3464 34.5,38.5C 34.3284,37.5084 34.6618,36.8417 35.5,36.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:0.994" fill="#8c9daa"
                            d="M 34.5,38.5 C 34.1722,49.3464 34.5056,60.0131 35.5,70.5C 35.5,71.1667 35.5,71.8333 35.5,72.5C 35.5,73.5 35.5,74.5 35.5,75.5C 33.2236,72.248 31.8903,68.5813 31.5,64.5C 33.1555,56.048 34.1555,47.3813 34.5,38.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:0.983" fill="#d9e4e9"
                            d="M 66.5,35.5 C 67.8286,40.6238 68.4952,46.1238 68.5,52C 68.4994,57.6771 68.1661,63.1771 67.5,68.5C 66.5054,57.6794 66.1721,46.6794 66.5,35.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#dd2225"
                            d="M 91.5,33.5 C 92.7779,44.6928 92.7779,56.0262 91.5,67.5C 91.5,68.1667 91.1667,68.5 90.5,68.5C 86.8307,69.3029 84.164,68.1362 82.5,65C 81.552,64.5172 80.552,64.3505 79.5,64.5C 79.5,63.1667 79.5,61.8333 79.5,60.5C 81.1436,60.1898 82.1436,59.1898 82.5,57.5C 84.5,56.8333 85.8333,55.5 86.5,53.5C 87.4937,56.9489 88.9937,60.2823 91,63.5C 91.4998,53.5056 91.6665,43.5056 91.5,33.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#3e3c3f"
                            d="M 35.5,72.5 C 35.5,71.8333 35.5,71.1667 35.5,70.5C 35.0545,61.0598 35.5545,51.7264 37,42.5C 37.892,55.4448 39.7253,67.9448 42.5,80C 39.306,80.2735 38.306,78.9401 39.5,76C 38.6159,74.2802 37.2825,73.1135 35.5,72.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#c93435"
                            d="M 75.5,59.5 C 76.1667,59.5 76.8333,59.5 77.5,59.5C 77.8417,60.3382 78.5084,60.6716 79.5,60.5C 79.5,61.8333 79.5,63.1667 79.5,64.5C 80.552,64.3505 81.552,64.5172 82.5,65C 84.164,68.1362 86.8307,69.3029 90.5,68.5C 90.2671,70.0618 89.6005,71.3951 88.5,72.5C 85.9897,72.9976 83.4897,73.6643 81,74.5C 79.4385,74.3968 77.9385,74.0634 76.5,73.5C 74.0266,71.9019 74.0266,70.4019 76.5,69C 73.0586,67.6816 71.7253,65.1816 72.5,61.5C 73.5,60.8333 74.5,60.1667 75.5,59.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:0.914" fill="#bca1ab"
                            d="M 93.5,32.5 C 95.3585,44.4632 95.5251,56.4632 94,68.5C 88.712,79.1771 81.212,81.1771 71.5,74.5C 71.8417,73.6618 72.5084,73.3284 73.5,73.5C 75.4621,75.0173 77.7954,75.6839 80.5,75.5C 83.8257,75.9272 86.4924,74.9272 88.5,72.5C 89.6005,71.3951 90.2671,70.0618 90.5,68.5C 91.1667,68.5 91.5,68.1667 91.5,67.5C 92.2216,67.0825 92.7216,66.4158 93,65.5C 93.4998,54.505 93.6665,43.505 93.5,32.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#8b9297"
                            d="M 51.5,26.5 C 55.5338,28.3671 58.3672,31.3671 60,35.5C 60.3333,46.5 60.6667,57.5 61,68.5C 61.6529,71.1392 62.8196,73.4726 64.5,75.5C 63.4265,76.2506 63.2599,77.2506 64,78.5C 68.3368,82.8815 73.5035,85.2148 79.5,85.5C 77.9812,86.4098 76.3146,87.2432 74.5,88C 68.2131,89.1072 61.8798,89.6072 55.5,89.5C 57.246,88.9987 58.246,88.3321 58.5,87.5C 58.1462,81.7297 57.1462,76.063 55.5,70.5C 55.6667,69.8333 55.8333,69.1667 56,68.5C 56.4224,70.4257 57.5891,71.4257 59.5,71.5C 59.4346,71.9382 59.6012,72.2716 60,72.5C 59.731,60.886 59.3976,49.2193 59,37.5C 57.5926,33.5568 55.0926,30.5568 51.5,28.5C 51.5,27.8333 51.5,27.1667 51.5,26.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:0.796" fill="#c8dfe3"
                            d="M 64.5,75.5 C 69.9471,81.1958 76.6138,82.8625 84.5,80.5C 84.4633,83.7016 82.7967,85.3683 79.5,85.5C 73.5035,85.2148 68.3368,82.8815 64,78.5C 63.2599,77.2506 63.4265,76.2506 64.5,75.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:0.294" fill="#9cadbc"
                            d="M 48.5,88.5 C 57.5325,94.6853 67.1992,99.852 77.5,104C 79.5,104.667 81.5,104.667 83.5,104C 86.9544,102.698 90.2877,101.198 93.5,99.5C 94.1667,99.8333 94.8333,100.167 95.5,100.5C 90.3513,109.807 82.518,115.474 72,117.5C 69.8886,117.299 68.0552,116.633 66.5,115.5C 67.1667,115.5 67.8333,115.5 68.5,115.5C 71.5533,115.889 74.22,115.223 76.5,113.5C 82.6835,111.517 88.0168,108.017 92.5,103C 90.1928,103.642 87.8595,104.642 85.5,106C 82.5184,106.498 79.5184,106.665 76.5,106.5C 74.1879,105.659 71.8546,104.659 69.5,103.5C 66.5159,101.341 63.1826,99.6745 59.5,98.5C 55.0703,95.1997 50.2369,92.533 45,90.5C 42.0751,91.9061 39.2417,93.5728 36.5,95.5C 35.8933,95.3764 35.56,95.0431 35.5,94.5C 38.5506,89.7955 42.8839,87.7955 48.5,88.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#44494d"
                            d="M 59.5,98.5 C 58.1825,98.179 56.8492,97.8457 55.5,97.5C 51.6854,97.689 48.3521,98.689 45.5,100.5C 43.4449,99.0523 41.2782,97.719 39,96.5C 37.1295,98.2189 34.9628,99.2189 32.5,99.5C 32.2729,97.0672 33.2729,95.4006 35.5,94.5C 35.56,95.0431 35.8933,95.3764 36.5,95.5C 39.2417,93.5728 42.0751,91.9061 45,90.5C 50.2369,92.533 55.0703,95.1997 59.5,98.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#272d33"
                            d="M 59.5,98.5 C 63.1826,99.6745 66.5159,101.341 69.5,103.5C 65.9668,103.495 62.8002,102.495 60,100.5C 58.5806,101.46 57.0806,102.293 55.5,103C 56.9437,104.763 57.9437,106.763 58.5,109C 61.4905,111.848 64.8239,114.015 68.5,115.5C 67.8333,115.5 67.1667,115.5 66.5,115.5C 58.9633,111.233 51.9633,106.233 45.5,100.5C 48.3521,98.689 51.6854,97.689 55.5,97.5C 56.8492,97.8457 58.1825,98.179 59.5,98.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#161517"
                            d="M 69.5,103.5 C 71.8546,104.659 74.1879,105.659 76.5,106.5C 74.0997,107.343 71.5997,107.343 69,106.5C 66.3619,106.808 64.1953,107.974 62.5,110C 63.7839,110.684 64.9505,110.517 66,109.5C 67.7583,110.469 68.2583,111.636 67.5,113C 70.4816,113.498 73.4816,113.665 76.5,113.5C 74.22,115.223 71.5533,115.889 68.5,115.5C 64.8239,114.015 61.4905,111.848 58.5,109C 57.9437,106.763 56.9437,104.763 55.5,103C 57.0806,102.293 58.5806,101.46 60,100.5C 62.8002,102.495 65.9668,103.495 69.5,103.5 Z" />
                    </g>
                    <g>
                        <path style="opacity:1" fill="#131012"
                            d="M 76.5,113.5 C 73.4816,113.665 70.4816,113.498 67.5,113C 68.2583,111.636 67.7583,110.469 66,109.5C 64.9505,110.517 63.7839,110.684 62.5,110C 64.1953,107.974 66.3619,106.808 69,106.5C 71.5997,107.343 74.0997,107.343 76.5,106.5C 79.5184,106.665 82.5184,106.498 85.5,106C 87.8595,104.642 90.1928,103.642 92.5,103C 88.0168,108.017 82.6835,111.517 76.5,113.5 Z" />
                    </g>
                </svg> --}}
                <img src="{{ asset('assets/images/NQ2.png') }}" width="56" alt="">
                <div class="brand-title">
                    <h2 class="">NQ</h2>
                    <span class="brand-sub-title">Name Quotient</span>
                </div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
        <!--**********************************
            Chat box start
        ***********************************-->
        <!--**********************************
            Chat box End
        ***********************************-->
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    @yield('header-content')
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item d-flex align-items-center">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i
                                                class="flaticon-381-search-2"></i></a></span>
                                </div>
                            </li>
                            <li class="nav-item dropdown  header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="{{ asset('assets/images/user1.jpg') }}" width="56" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ route('profile.index') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewbox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="{{ route('inbox.index') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                                            width="18" height="18" viewbox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ms-2">Inbox </span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                    <a href="#" class="dropdown-item ai-icon"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewbox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12">
                                            </line>
                                        </svg>
                                        <span class="ms-2">Logout</span>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    @yield('sidebar-links')
                    <li><a href="{{ url('dashboard') }}" class="" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-user"></i>
                            <span class="nav-text">User</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('user') }}">List</a></li>
                            <li><a href="{{ url('/user/create') }}">Create User</a></li>
                        </ul>

                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-users"></i>
                            <span class="nav-text">Role</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('role') }}">Role</a></li>
                            <li><a href="{{ url('/role/create') }}">Create Role</a></li>
                        </ul>

                    </li>

                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-box"></i>
                            <span class="nav-text">Paket</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('paket') }}">List</a></li>
                            <li><a href="{{ url('/paket/create') }}">Create Paket</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-chart-line"></i>
                            <span class="nav-text">Produk</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('produk') }}">List</a></li>
                            <li><a href="{{ url('produk/create') }}">Create Produk</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-pen"></i>
                            <span class="nav-text">Artikel</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('artikel') }}">List</a></li>
                            <li><a href="{{ url('artikel/create') }}">Create</a></li>
                            <li><a href="{{ url('artikel/draft') }}">Draft</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-info-circle"></i>
                            <span class="nav-text">Quote</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('quote') }}">List</a></li>
                            <li><a href="{{ url('quote/create') }}">Create</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-heart"></i>
                            <span class="nav-text">Voucher</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('voucher') }}">List</a></li>
                            <li><a href="{{ url('voucher/create') }}">Create Voucher</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-user-check"></i>
                            <span class="nav-text">Konsultasi</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('konsultasi') }}">List</a></li>
                        </ul>
                    </li>
                    {{-- <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-file-alt"></i>
                            <span class="nav-text">NQ Certificate</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('sertifikat') }}">TOT</a></li>
                            <li><a href="{{ url('sertifikatTraining') }}">Training</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-table"></i>
                            <span class="nav-text">Training</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('training') }}">Trainer</a></li>
                            <li><a href="{{ url('trainingReader') }}">Reader</a></li>
                        </ul>
                    </li> --}}
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-clone"></i>
                            <span class="nav-text">Konfigurasi</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="side-bar-profile">
                    <div class="d-flex align-items-center justify-content-between mb-3">

                    </div>
                </div>

                <div class="copyright">
                    <p><strong>Name Quotient</strong> © 2024 All Rights Reserved</p>
                    <p class="fs-12">Made by Nirmana Mosuqu Quants Team</p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                @yield('content')
                <div class="row">

                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->




        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">PT. Nirmana Mosuqu
                        Quants Team</a> 2024
                </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('assets/vendor/apexchart/apexchart.js') }}"></script>

    <script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>
    <!-- Dashboard 1 -->
    <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.js') }}"></script>

    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('assets/js/demo.js') }}"></script>
    <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>
    <script>
        function cardsCenter() {

            /*  testimonial one function by = owl.carousel.js */



            jQuery('.card-slider').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                //center:true,
                slideSpeed: 3000,
                paginationSpeed: 3000,
                dots: true,
                navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    800: {
                        items: 1
                    },
                    991: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1600: {
                        items: 1
                    }
                }
            })
        }

        jQuery(window).on('load', function() {
            setTimeout(function() {
                cardsCenter();
            }, 1000);
        });
        jQuery(document).ready(function() {
            setTimeout(function() {
                dlabSettingsOptions.version = 'dark';
                new dlabSettings(dlabSettingsOptions);
            }, 1500)
        });
    </script>
    <script>
        function toggleSVGVisibility() {
            const svgElement = document.querySelector('.nav-header svg');
            if (window.innerWidth >= 768) {
                svgElement.style.display = 'block';
            } else {
                svgElement.style.display = 'none';
            }
        }

        // Jalankan fungsi ketika halaman dimuat dan ketika jendela diubah ukurannya
        window.addEventListener('load', toggleSVGVisibility);
        window.addEventListener('resize', toggleSVGVisibility);
    </script>
</body>

</html>
