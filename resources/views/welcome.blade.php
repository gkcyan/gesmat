<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
   

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">




</head>

<body class='bg-gray-700'>
        <!-- component -->
        <div class="h-screen bg-gray-700 p-relative">
            <div class="flex justify-center">

                <header class="h-12 py-4 text-white">
                    <!-- Navbar (left side) -->
                    <div style="width: 275px;">
                        <div class="fixed h-screen pr-3 overflow-y-auto" style="width: 275px;">
                            <!--Logo-->
                          
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280.000000 640.000000"
 preserveAspectRatio="xMidYMid meet" class="w-24 h-24 ml-14">

<g transform="translate(0.000000,640.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M7450 5661 c-716 -415 -1073 -621 -1076 -619 -1 2 13 27 32 56 21 32
41 52 53 52 29 0 44 25 36 62 -26 135 -49 234 -56 242 -10 11 -139 -32 -165
-55 -29 -27 -50 -23 -62 10 -6 17 -28 41 -51 56 -36 22 -41 30 -41 64 l0 38
-82 6 c-154 12 -174 10 -198 -20 -21 -26 -22 -35 -15 -122 7 -106 13 -104 -68
-34 -30 27 -41 31 -56 24 -14 -8 -22 -6 -35 7 -14 17 -14 22 4 70 11 29 20 76
20 105 0 46 -4 57 -31 83 l-30 29 -36 -43 c-59 -72 -65 -72 -139 -2 -75 70
-56 74 -182 -40 -64 -58 -72 -69 -72 -101 0 -33 8 -44 89 -118 65 -59 96 -81
116 -81 15 0 44 -14 67 -31 31 -25 38 -37 34 -54 -5 -19 5 -33 50 -74 31 -28
60 -51 66 -51 6 0 36 23 68 50 l58 51 13 -35 c8 -22 24 -39 46 -50 18 -9 33
-20 33 -24 0 -5 -28 -35 -61 -68 -59 -56 -62 -57 -70 -36 -5 13 -21 33 -36 46
l-27 24 -44 -50 c-25 -27 -48 -48 -52 -46 -4 2 -38 31 -75 65 l-67 63 31 35
c38 44 46 74 31 120 -9 28 -16 35 -29 29 -119 -51 -122 -50 -155 51 -20 63
-32 85 -44 85 -9 0 -64 -11 -122 -23 -97 -21 -106 -25 -123 -56 l-20 -32 38
-117 37 -116 -30 -25 c-25 -22 -34 -41 -52 -122 -11 -53 -22 -108 -24 -121 -3
-29 -14 -48 -28 -48 -7 0 -8 30 -4 93 6 88 5 93 -18 119 l-25 28 -125 -7 -126
-6 0 -38 c0 -34 -5 -42 -41 -64 -23 -15 -45 -39 -51 -56 -11 -32 -50 -41 -65
-14 -10 17 -147 65 -161 56 -10 -6 -62 -236 -62 -272 0 -11 12 -22 33 -30 25
-9 48 -36 106 -126 41 -63 79 -117 86 -119 7 -3 28 4 46 15 19 12 39 21 45 21
5 0 18 -23 27 -52 19 -60 9 -83 -30 -73 -19 4 -36 -4 -75 -37 -49 -40 -51 -41
-65 -22 -28 37 -51 90 -78 177 -14 48 -28 87 -30 87 -6 0 -138 -30 -157 -36
-10 -3 -18 -1 -18 5 0 6 9 11 19 11 11 0 29 14 42 31 l21 30 -33 110 c-18 60
-36 114 -40 121 -6 10 -27 9 -95 -5 -100 -21 -97 -23 -116 66 l-12 59 -36 -6
c-20 -3 -44 -16 -57 -31 -23 -26 -53 -112 -53 -150 0 -41 -42 -60 -65 -29 -11
15 -18 15 -90 1 -42 -9 -80 -19 -83 -22 -3 -3 15 -67 40 -143 51 -155 41 -148
156 -121 40 9 56 18 62 35 19 50 150 39 150 -13 0 -32 -38 -47 -63 -25 -15 13
-26 14 -86 2 -38 -7 -75 -16 -82 -20 -8 -6 0 -42 31 -136 23 -71 47 -134 54
-141 8 -9 28 -8 86 6 63 14 75 20 78 39 2 14 10 22 22 22 10 0 25 3 33 6 11 4
16 -4 19 -31 5 -44 -19 -64 -52 -43 -17 11 -29 8 -85 -20 -36 -18 -68 -38 -71
-46 -6 -16 140 -246 156 -246 6 0 42 16 81 35 58 30 69 39 64 55 -8 26 65 65
107 56 22 -4 54 7 137 48 88 44 110 60 121 85 15 37 20 38 49 7 l22 -23 -43
-25 c-24 -14 -232 -135 -463 -268 -231 -133 -421 -244 -423 -245 -2 -2 44 -86
102 -187 99 -171 123 -203 359 -488 l252 -304 5 -101 5 -100 82 -5 83 -5 49
-60 50 -60 -65 -65 c-104 -105 -157 -200 -188 -337 -82 -365 143 -721 514
-814 158 -40 350 -12 499 73 64 37 171 135 212 195 60 87 119 232 119 293 0
18 5 21 32 18 30 -3 32 -6 44 -67 27 -132 114 -275 226 -369 280 -237 697
-209 946 63 75 82 143 211 162 308 l14 67 261 0 c144 0 296 3 338 6 l77 7 0
-47 c0 -53 -5 -52 117 -35 l82 12 17 51 c9 28 20 55 24 59 4 5 269 5 589 1
l581 -7 0 -159 0 -158 630 0 630 0 0 150 0 150 113 0 c63 0 162 -3 220 -7
l107 -6 6 -36 c46 -278 246 -493 524 -562 156 -39 342 -13 488 68 82 45 188
146 242 228 44 68 99 209 101 260 l1 30 9 -30 c4 -16 11 -55 14 -86 l6 -56 87
-18 c118 -24 259 -31 306 -15 46 15 59 41 77 165 20 132 18 501 -5 630 -24
141 -34 150 -166 150 l-100 0 0 355 1 355 79 55 80 55 0 182 0 183 -100 50
c-104 52 -115 56 -105 40 3 -5 0 -10 -7 -10 -21 0 -948 187 -953 192 -3 3 4
58 16 124 26 153 36 371 20 456 -17 88 -55 162 -96 188 -146 90 -979 116
-1836 55 -201 -14 -272 -28 -345 -70 -65 -38 -79 -66 -78 -160 1 -44 9 -108
18 -141 14 -56 16 -166 16 -1068 l0 -1006 -180 0 -180 0 -2 213 -3 212 -1550
5 -1551 5 611 352 c1714 989 1980 1144 1983 1152 2 5 -11 101 -27 213 -17 111
-60 404 -96 650 l-66 446 -156 271 c-86 149 -162 271 -167 270 -6 0 -180 -98
-386 -218z m-1991 -47 l61 -56 33 20 c18 12 43 32 56 46 14 14 28 26 33 26 17
0 7 -82 -17 -147 l-25 -66 27 -29 28 -29 -55 -48 -55 -49 -42 39 c-24 22 -53
39 -65 39 -29 0 -58 20 -137 92 -38 34 -61 63 -59 73 2 12 17 4 59 -34 47 -42
59 -48 68 -37 10 11 2 24 -39 62 -63 59 -58 71 7 15 42 -35 50 -39 62 -26 8 8
13 16 10 18 -73 56 -98 82 -90 90 6 6 27 -5 61 -33 40 -33 54 -40 63 -31 9 9
2 22 -34 56 -33 31 -43 47 -36 54 17 17 22 14 86 -45z m431 -133 c0 -31 -5
-53 -15 -61 -13 -11 -15 -5 -15 42 0 30 3 58 7 61 16 17 23 4 23 -42z m53 -8
c5 -52 3 -73 -7 -62 -8 9 -14 119 -7 119 5 0 11 -26 14 -57z m65 30 c2 -11 -4
-23 -12 -26 -12 -5 -16 1 -16 24 0 35 23 36 28 2z m80 4 c3 -14 -1 -18 -20
-15 -12 2 -24 11 -26 21 -3 14 1 18 20 15 12 -2 24 -11 26 -21z m-72 -134 c-2
-3 -15 2 -28 11 -12 9 -17 16 -9 16 9 0 11 10 7 33 -5 30 -4 29 15 -11 11 -24
18 -46 15 -49z m71 61 c3 -8 0 -27 -7 -42 -12 -25 -13 -26 -21 -7 -13 34 -10
65 6 65 9 0 18 -7 22 -16z m-826 -131 l25 -78 50 0 c27 1 61 5 77 9 38 11 36
-13 -4 -59 -22 -24 -35 -33 -42 -26 -7 7 -32 -9 -77 -49 -37 -33 -72 -60 -78
-60 -6 0 -31 23 -56 51 -37 41 -49 49 -60 40 -12 -10 -20 5 -46 83 -23 71 -29
100 -21 113 9 16 11 15 20 -10 6 -16 16 -48 22 -73 8 -32 16 -44 30 -44 24 0
24 4 -1 75 -22 63 -24 79 -12 71 5 -3 17 -30 27 -60 14 -40 24 -56 37 -56 23
0 23 8 -2 70 -19 49 -19 77 0 65 5 -3 16 -29 25 -58 21 -62 26 -69 44 -58 11
7 11 16 -3 57 -21 61 -20 74 2 74 14 0 24 -19 43 -77z m702 51 c49 -25 51 -28
30 -37 -41 -18 -122 30 -96 56 9 10 8 10 66 -19z m205 -20 c8 -2 12 -16 10
-36 -3 -29 -10 -37 -58 -61 -52 -26 -55 -30 -55 -65 0 -32 -3 -37 -25 -40 -22
-2 -23 -1 -7 8 21 13 23 40 2 40 -9 0 -32 -7 -52 -15 -20 -8 -38 -13 -41 -10
-10 10 19 32 58 44 36 11 50 28 34 44 -3 3 -19 1 -34 -5 -22 -7 -34 -6 -50 5
-18 13 -19 15 -5 21 9 3 21 4 26 0 5 -3 16 2 25 10 8 9 23 16 33 16 9 0 30 13
46 30 28 29 40 31 93 14z m-273 -34 c3 -5 2 -10 -4 -10 -5 0 -13 5 -16 10 -3
6 -2 10 4 10 5 0 13 -4 16 -10z m408 -40 c5 -21 1 -28 -22 -38 -25 -11 -61 -8
-61 5 0 3 15 22 33 42 33 38 39 36 50 -9z m-453 -15 c7 -8 8 -15 2 -15 -5 0
-15 7 -22 15 -7 8 -8 15 -2 15 5 0 15 -7 22 -15z m-10 -50 c25 -13 42 -45 24
-45 -21 0 -63 35 -64 53 0 10 7 9 40 -8z m395 -35 c-4 -6 -12 -10 -19 -10 -7
0 -19 -11 -26 -24 -17 -33 -37 -39 -50 -16 -6 11 -17 20 -25 20 -9 0 -15 10
-15 25 0 19 8 28 33 39 28 12 36 11 70 -6 21 -10 35 -23 32 -28z m-870 -100
c-3 -5 -11 -10 -16 -10 -6 0 -7 5 -4 10 3 6 11 10 16 10 6 0 7 -4 4 -10z m-60
-36 c0 -13 -6 -18 -20 -16 -28 5 -30 9 -15 27 16 20 35 14 35 -11z m115 7 c0
-13 -26 -32 -33 -24 -8 7 11 33 24 33 5 0 9 -4 9 -9z m-370 -26 c0 -7 -5 -37
-11 -66 -9 -42 -9 -53 2 -60 9 -6 18 -3 25 6 10 14 12 14 17 1 8 -21 -20 -40
-59 -42 -19 0 -34 0 -34 2 0 7 31 151 35 162 6 17 25 15 25 -3z m60 6 c0 -6
-4 -13 -10 -16 -5 -3 -10 1 -10 9 0 9 5 16 10 16 6 0 10 -4 10 -9z m560 -36
c0 -19 -9 -59 -21 -90 -18 -47 -24 -54 -42 -50 -62 14 -113 25 -119 25 -3 0
-16 -29 -28 -65 -12 -36 -27 -65 -35 -65 -20 0 -32 23 -26 47 6 21 153 163
169 163 5 0 26 18 47 39 22 22 43 37 47 35 5 -3 8 -20 8 -39z m177 15 c12 -25
69 -54 85 -44 14 9 181 5 190 -4 19 -19 -35 -70 -131 -125 l-102 -58 -80 72
c-48 43 -79 79 -79 91 0 16 11 10 57 -31 46 -41 59 -48 71 -39 12 11 5 21 -44
65 -69 62 -64 70 8 13 42 -33 53 -38 65 -28 13 10 12 14 -6 29 -66 54 -82 70
-76 79 10 16 28 7 42 -20z m-392 -9 c-3 -6 -14 -11 -23 -11 -13 0 -13 2 4 14
21 15 30 14 19 -3z m-762 -46 c-7 -19 -43 -20 -43 -1 0 8 8 16 18 19 24 5 32
-1 25 -18z m67 -5 c0 -31 -16 -41 -26 -15 -8 19 2 45 16 45 5 0 10 -13 10 -30z
m52 -27 c-2 -32 -8 -62 -14 -68 -7 -7 -9 5 -4 39 3 27 6 57 6 67 0 11 3 19 8
19 4 0 5 -26 4 -57z m68 -14 c0 -48 -12 -64 -24 -33 -3 9 -6 36 -6 61 0 39 2
44 15 33 10 -8 15 -30 15 -61z m620 58 c0 -17 -54 -69 -63 -60 -12 12 -7 23 8
17 9 -4 17 1 20 10 3 9 7 23 10 31 5 18 25 20 25 2z m685 -6 c3 -5 1 -12 -5
-16 -5 -3 -10 1 -10 9 0 18 6 21 15 7z m-1495 -70 c0 -5 -3 -23 -6 -40 -5 -25
-9 -29 -20 -20 -17 14 -18 56 -1 62 19 8 27 8 27 -2z m63 -12 c-3 -12 0 -25 7
-29 9 -6 7 -11 -10 -20 -30 -16 -34 -8 -16 34 16 39 27 48 19 15z m1023 -46
c40 -38 74 -71 74 -74 0 -4 -7 -9 -14 -12 -9 -4 -35 12 -64 38 -27 24 -60 47
-74 50 -24 6 -25 9 -15 36 6 16 13 29 15 29 2 0 37 -30 78 -67z m-581 -25 c22
1 47 -2 55 -7 12 -9 9 -15 -20 -40 -34 -28 -35 -29 -60 -11 -14 10 -38 32 -54
49 -29 30 -29 31 -11 51 l19 21 16 -33 c14 -30 19 -33 55 -30z m165 22 c0 -5
-7 -10 -15 -10 -8 0 -15 5 -15 10 0 6 7 10 15 10 8 0 15 -4 15 -10z m-516 -16
c4 -9 5 -18 4 -19 -15 -12 -71 -35 -87 -35 -38 0 -31 19 16 44 58 30 59 30 67
10z m693 -11 c-3 -16 -11 -41 -17 -57 -10 -27 -12 -28 -26 -14 -22 22 0 98 29
98 16 0 19 -5 14 -27z m-1623 -91 c19 -36 27 -37 111 -17 79 19 85 19 85 -4 0
-16 -11 -22 -60 -32 -37 -7 -60 -17 -60 -25 0 -21 12 -23 69 -12 57 10 99 4
71 -12 -8 -4 -39 -11 -67 -15 -42 -5 -53 -11 -53 -25 0 -11 -5 -22 -11 -26 -6
-3 -20 -27 -31 -51 -17 -39 -23 -44 -41 -38 -30 10 -74 11 -118 1 l-37 -8 -22
66 c-23 71 -21 86 14 86 29 0 46 18 46 50 0 42 28 131 47 152 18 20 18 20 29
-19 7 -22 19 -54 28 -71z m1693 86 c-3 -7 -14 -38 -23 -68 -21 -66 -22 -66
-34 -54 -14 14 27 134 47 134 8 0 12 -6 10 -12z m-941 -32 c8 -14 29 -28 45
-31 16 -4 31 -11 34 -16 4 -5 21 -9 38 -9 31 -1 31 -1 12 -16 -14 -10 -31 -13
-58 -8 -34 5 -38 4 -35 -11 1 -10 19 -24 40 -31 35 -12 88 -54 69 -54 -5 0
-30 9 -56 20 -56 24 -61 24 -69 5 -4 -10 2 -19 17 -25 21 -8 20 -9 -7 -9 -28
-1 -28 0 -23 37 l7 37 -60 27 c-57 25 -60 28 -60 61 0 37 8 44 62 46 19 1 33
-7 44 -23z m989 2 c-4 -13 -14 -30 -22 -38 -14 -13 -15 -13 -8 5 4 11 10 28
12 38 3 9 10 17 15 17 5 0 6 -10 3 -22z m-311 -7 c11 -17 -21 -33 -43 -22 -16
9 -21 7 -26 -9 -3 -11 -15 -20 -26 -20 -16 0 -14 5 13 30 32 29 71 39 82 21z
m-844 -61 c26 -14 25 -26 -2 -41 -16 -9 -23 -9 -26 0 -2 6 -12 11 -23 11 -22
0 -22 2 -8 55 l11 39 14 -27 c8 -14 23 -31 34 -37z m362 38 c-6 -6 -15 -8 -19
-4 -4 4 -1 11 7 16 19 12 27 3 12 -12z m533 -18 c3 -5 -1 -10 -10 -10 -9 0
-13 5 -10 10 3 6 8 10 10 10 2 0 7 -4 10 -10z m-485 -30 c-20 -13 -33 -13 -25
0 3 6 14 10 23 10 15 0 15 -2 2 -10z m593 -18 c18 -19 25 -35 21 -45 -3 -10
-1 -24 6 -32 7 -9 11 -17 9 -18 -2 -2 -25 -15 -51 -30 l-46 -27 -57 47 c-48
39 -85 86 -85 107 0 3 34 3 75 -1 64 -5 75 -3 81 11 9 22 16 20 47 -12z m-228
-48 c11 -20 41 -55 67 -77 27 -22 46 -43 43 -45 -3 -3 -15 4 -28 16 l-23 22
-51 -45 c-37 -33 -60 -45 -83 -45 -25 0 -30 3 -26 18 21 70 24 107 10 123 -13
15 -12 19 16 43 41 34 52 33 75 -10z m-648 3 c15 -15 6 -57 -13 -57 -7 0 -17
-8 -23 -17 -8 -15 -14 -12 -49 23 l-39 41 26 17 c28 18 77 14 98 -7z m273 -1
c0 -16 -18 -31 -27 -22 -8 8 5 36 17 36 5 0 10 -6 10 -14z m-755 -66 c-3 -5
-18 -10 -33 -10 -21 0 -24 2 -12 10 20 13 53 13 45 0z m15 -50 c0 -12 -41 -30
-52 -23 -14 8 -9 21 10 26 30 8 42 7 42 -3z m-100 -24 c0 -13 -47 -32 -57 -23
-7 7 27 37 43 37 8 0 14 -6 14 -14z m1280 -16 c0 -12 -40 -34 -48 -26 -3 4 3
13 14 21 22 17 34 19 34 5z m-310 -21 c0 -14 -16 -11 -29 5 -10 12 -8 13 8 9
12 -3 21 -9 21 -14z m-96 3 c3 -5 -17 -26 -44 -47 -43 -34 -48 -41 -36 -54 13
-12 21 -8 64 28 72 59 78 50 8 -13 -34 -31 -56 -58 -52 -65 12 -18 24 -13 71
30 38 36 45 39 45 21 0 -30 -127 -142 -163 -142 -18 0 -42 -14 -72 -41 -50
-46 -56 -45 -120 21 l-40 41 28 25 28 24 -20 54 -20 54 31 6 c51 10 153 7 166
-6 9 -9 16 -8 30 5 10 9 23 17 29 17 6 0 18 11 27 25 17 25 31 31 40 17z
m-841 -43 c15 -20 15 -20 97 -3 69 15 83 16 90 4 13 -21 6 -26 -60 -39 -54
-11 -72 -25 -55 -43 3 -3 34 0 68 8 38 8 66 9 71 4 15 -14 4 -20 -59 -30 -65
-11 -70 -13 -62 -33 4 -11 17 -12 63 -5 79 12 92 4 19 -12 -33 -7 -68 -17 -78
-22 -15 -8 -21 -1 -39 41 l-20 50 -38 -19 c-39 -20 -60 -58 -60 -107 0 -25 -5
-28 -56 -37 -30 -5 -31 -4 -52 63 -12 37 -22 70 -22 73 0 3 17 8 39 12 37 6
39 7 45 55 7 52 13 57 68 60 17 1 32 -7 41 -20z m1017 -45 c0 -19 -4 -34 -10
-34 -5 0 -10 18 -10 41 0 24 4 38 10 34 6 -3 10 -22 10 -41z m57 20 c3 -8 1
-20 -4 -25 -7 -7 -12 -2 -15 15 -6 28 9 36 19 10z m-117 -79 c0 -8 -4 -15 -10
-15 -5 0 -10 7 -10 15 0 8 5 15 10 15 6 0 10 -7 10 -15z m-60 -34 c0 -5 -12
-17 -27 -26 l-28 -18 24 27 c26 28 31 31 31 17z m-875 -21 c4 -11 17 -33 31
-49 l24 -29 -29 -7 c-17 -3 -39 -1 -51 5 -19 10 -21 17 -15 48 11 57 28 71 40
32z m705 -85 c0 -2 -10 -10 -22 -16 -21 -11 -22 -11 -9 4 13 16 31 23 31 12z
m-420 -24 c0 -5 -25 -19 -55 -31 -51 -21 -68 -41 -46 -54 5 -3 34 6 66 20 80
37 81 22 1 -18 -36 -18 -66 -36 -66 -40 0 -21 33 -17 90 12 53 27 61 29 58 13
-2 -11 -38 -36 -93 -65 -71 -38 -97 -47 -122 -43 -23 4 -47 -2 -82 -20 -28
-14 -52 -25 -54 -25 -7 0 -77 109 -77 120 0 5 14 17 31 26 28 14 31 19 27 55
-3 37 -2 40 19 34 13 -3 53 1 89 10 75 17 96 19 74 5 -12 -7 -12 -12 -3 -21
10 -10 25 -7 70 13 56 24 73 26 73 9z m7853 -2256 l6 -60 -20 48 c-15 39 -18
60 -12 100 l7 52 7 -40 c3 -22 9 -67 12 -100z m-1335 -41 c21 -33 23 -43 15
-93 -7 -47 -11 -56 -28 -56 -18 0 -20 8 -23 93 -1 50 1 92 5 92 4 0 19 -17 31
-36z m-5108 21 c0 -3 -7 -31 -15 -63 -8 -31 -17 -70 -20 -85 -5 -23 -10 -28
-31 -25 -24 3 -28 11 -48 91 l-22 87 68 0 c37 0 68 -2 68 -5z m3410 -75 l0
-80 -607 0 -608 0 -28 40 -28 40 -80 0 -79 0 0 -35 0 -35 -54 0 c-29 0 -70 -7
-89 -15 -29 -12 -86 -15 -277 -15 l-240 0 0 23 c0 22 -21 106 -35 140 -7 16
48 17 1059 17 l1066 0 0 -80z"/>

"/>
</g>
</svg>



                            <!-- Nav-->
                            <nav class="px-2 mt-5">
                                <a href="#"
                                    class="flex items-center px-2 py-2 text-base font-semibold leading-6 text-blue-300 bg-gray-800 rounded-full group">
                                    <svg class="w-6 h-6 mr-4 " stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6">
                                        </path>
                                    </svg>
                                    Acceuil
                                </a>
                                <a href="#"
                                    class="flex items-center px-2 py-2 mt-1 text-base font-semibold leading-6 rounded-full group hover:bg-gray-800 hover:text-blue-300">
                                    <svg class="w-6 h-6 mr-4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                    </svg>

                                    J'ai besoin de Materiels
                                </a>
                                <a href="#"
                                    class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 rounded-full group hover:bg-gray-800 hover:text-blue-300">
                                    <svg class="w-6 h-6 mr-4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                        </path>
                                    </svg>
                                    J'ai du Materiel
                                </a>
                                <a href="#"
                                    class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 rounded-full group hover:bg-gray-800 hover:text-blue-300">
                                    <svg class="w-6 h-6 mr-4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    J'ai besoin de Chauffeur
                                </a>
                                <a href="#"
                                    class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 rounded-full group hover:bg-gray-800 hover:text-blue-300">
                                    <svg class="w-6 h-6 mr-4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                    </svg>
                                    Je suis un Chauffeur
                                </a>
                                <a href="#"
                                    class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 rounded-full group hover:bg-gray-800 hover:text-blue-300">
                                    <svg class="w-6 h-6 mr-4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                        </path>
                                    </svg>
                                    J'ai besoin de Maintenance
                                </a>
                                <a href="#"
                                    class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 rounded-full group hover:bg-gray-800 hover:text-blue-300">
                                    <svg class="w-6 h-6 mr-4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                   Je suis Maintenancier
                                </a>
                                <a href="#"
                                    class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 rounded-full group hover:bg-gray-800 hover:text-blue-300">
                                    <svg class="w-6 h-6 mr-4" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                    Autres 
                                </a>

                                <button
                                    class="w-full px-4 py-2 mt-5 font-bold text-white bg-green-400 rounded-full hover:bg-green-500">
                                    Connexion
                                </button>
                                <button
                                    class="w-full px-4 py-2 mt-5 font-bold text-white bg-blue-400 rounded-full hover:bg-blue-500">
                                    Inscription
                                </button>
                            </nav>


                            <!-- User Menu -->
                            <div class="absolute" style="bottom: 2rem;">
                                <div class="flex flex-shrink-0 px-4 py-3 mt-12 mr-2 rounded-full hover:bg-gray-800">
                                    <a href="#" class="flex-shrink-0 block group">
                                        <div class="flex items-center">
                                            <div>
                                                <img class="inline-block w-10 h-10 rounded-full"
                                                    src="{{ asset('images/tof.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-base font-medium leading-6 text-white">
                                                    Yannick G.
                                                </p>
                                                <p
                                                    class="text-sm font-medium leading-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300">
                                                    @Corneille
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <main role="main">
                    <div class="flex" style="width: 990px;">
                        <section class="w-3/5 border border-gray-700 border-y-0" style="max-width:600px;">
                            <!--Content (Center)-->
                            <aside>
                                <div class="flex">
                                    <div class="flex-1 mx-2">
                                        <h2 class="px-4 py-2 text-xl font-semibold text-white">MateBara</h2>
                                    </div>
                                    <div class="flex-1 px-4 py-2 mx-2">
                                        <a href=""
                                            class="float-right text-2xl font-medium text-white rounded-full hover:bg-gray-800 hover:text-blue-300">
                                            <svg class="w-6 h-6 m-2" fill="currentColor" viewBox="0 0 24 24">
                                                <g>
                                                    <path
                                                        d="M22.772 10.506l-5.618-2.192-2.16-6.5c-.102-.307-.39-.514-.712-.514s-.61.207-.712.513l-2.16 6.5-5.62 2.192c-.287.112-.477.39-.477.7s.19.585.478.698l5.62 2.192 2.16 6.5c.102.306.39.513.712.513s.61-.207.712-.513l2.16-6.5 5.62-2.192c.287-.112.477-.39.477-.7s-.19-.585-.478-.697zm-6.49 2.32c-.208.08-.37.25-.44.46l-1.56 4.695-1.56-4.693c-.07-.21-.23-.38-.438-.462l-4.155-1.62 4.154-1.622c.208-.08.37-.25.44-.462l1.56-4.693 1.56 4.694c.07.212.23.382.438.463l4.155 1.62-4.155 1.622zM6.663 3.812h-1.88V2.05c0-.414-.337-.75-.75-.75s-.75.336-.75.75v1.762H1.5c-.414 0-.75.336-.75.75s.336.75.75.75h1.782v1.762c0 .414.336.75.75.75s.75-.336.75-.75V5.312h1.88c.415 0 .75-.336.75-.75s-.335-.75-.75-.75zm2.535 15.622h-1.1v-1.016c0-.414-.335-.75-.75-.75s-.75.336-.75.75v1.016H5.57c-.414 0-.75.336-.75.75s.336.75.75.75H6.6v1.016c0 .414.335.75.75.75s.75-.336.75-.75v-1.016h1.098c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </a>
                                        <a href=""
                                            class="float-right text-2xl font-medium text-white rounded-full hover:bg-gray-800 hover:text-blue-300">
                                            <svg class="w-6 h-6 m-2" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                                <g>
                                                    <path
                                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                                    </path>
                                                </g>
                                            </svg>
                                        </a>
                                        <a href=""
                                            class="float-right text-2xl font-medium text-white rounded-full hover:bg-gray-800 hover:text-blue-300">
                                            <svg class="w-6 h-6 m-2" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                                <g>
                                                    <path fill="#fff" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                                                </g>
                                            </svg>
                                        </a>
                                        <a href=""
                                            class="float-right text-2xl font-medium text-white rounded-full hover:bg-gray-800 hover:text-blue-300">
                                            <svg class="w-6 h-6 m-2" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                                <g>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                </g>
                                            </svg>
                                        </a>

                                        
                                    </div>
                                    
                                </div>

                                <hr class="border-gray-800">
                                <!--middle creat tweet-->
                                <div class="flex">
                                    <div class="w-10 py-1 m-2">
                                        <img class="inline-block w-10 h-10 rounded-full"
                                            src="{{ asset('images/conex.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="flex-1 px-2 pt-2 mt-2">
                                        <textarea class="w-full text-lg font-medium text-gray-400 bg-transparent "
                                            rows="2" cols="50" placeholder="Publiez vos besoins ou vos prestations"></textarea>
                                    <div class="flex-1 px-2 pt-2 mt-2">
                                       <label class="text-lg font-medium text-gray-400 bg-transparent">debut : </label>
                                       <input type="date" class="w-1/3 text-lg font-medium text-gray-400 bg-transparent "rows="2" cols="2" placeholder="debut">
                                       <label class="text-lg font-medium text-gray-400 bg-transparent">Fin : </label><input type="date" class="w-1/3 text-lg font-medium text-gray-400 bg-transparent "rows="2" cols="5" placeholder="Fin">
                                       
                                    </div>
                                        </div>
                                </div>
                                <!--middle creat tweet below icons-->
                                <div class="flex">
                                    <div class="w-10"></div>

                                    <div class="w-64 px-2">

                                        <div class="flex items-center">
                                            <div class="flex-1 px-1 py-1 m-2 text-center">
                                                <a href="#"
                                                    class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 text-blue-400 rounded-full group hover:bg-gray-800 hover:text-blue-300">
                                                    <svg class="w-6 text-center h-7" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                                     
                                                    </svg>

                                                  
                                                </a>
                                            </div>

                                            <div class="flex-1 py-2 m-2 text-center">
                                                <a href="#"
                                                    class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 text-blue-400 rounded-full group hover:bg-gray-800 hover:text-blue-300">
                                                    <svg class="w-6 text-center h-7" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                        </path>
                                                        <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="flex-1 py-2 m-2 text-center">
                                                <a href="#"
                                                    class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 text-blue-400 rounded-full group hover:bg-gray-800 hover:text-blue-300">
                                                    <svg class="w-6 text-center h-7" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="flex-1 py-2 m-2 text-center">
                                                <a href="#"
                                                    class="flex items-center px-2 py-2 mt-1 text-base font-medium leading-6 text-blue-400 rounded-full group hover:bg-gray-800 hover:text-blue-300">
                                                    <svg class="w-6 text-center h-7" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-1">
                                        
                                        <button
                                            class="float-right px-6 py-2 mt-5 mr-8 font-bold text-white bg-blue-400 rounded-full hover:bg-blue-500">
                                            Prestation
                                        </button>
                                        <button
                                            class="float-right px-6 py-2 mt-5 mr-8 font-bold text-white bg-green-400 rounded-full hover:bg-green-500">
                                            Besoin
                                        </button>
                                    </div>
                                </div>

                                <hr class="border-4 border-gray-800">
                            </aside>

                            <ul class="list-none">
                                <li>
                                    <!--second tweet-->
                                    <article class="transition ease-in-out hover:bg-gray-800 duration-350">
                                        <div class="flex flex-shrink-0 p-4 pb-0">
                                            <a href="#" class="flex-shrink-0 block group">
                                                <div class="flex items-center">
                                                    <div>
                                                        <img class="inline-block w-10 h-10 rounded-full"
                                                            src="{{ asset('logo.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-base font-medium leading-6 text-white">
                                                            Compagnie de logistique
                                                            <span
                                                                class="text-sm font-medium leading-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300">
                                                                @Prestation . 16 Février 2021
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>


                                        <div class="pl-16">
                                            <p class="flex-shrink text-base font-medium text-white width-auto">
                                                Nous mettons à votre disposition <a href="#"
                                                    class="text-blue-400">#7 Camions à benne basculante</a>
                                                Pour transport de produits agricoles
                                                <a href="#" class="text-blue-400"> # de 8T à 25T</a>
                                            </p>

                                            <div class="pt-3 pr-6 md:flex-shrink">
                                                <div class="w-full h-64 bg-center bg-no-repeat bg-cover rounded-lg"
                                                    style="height: 200px; background-image: url({{ asset('images/camion_transp.jpg') }});">
                                                    <img class="w-full h-full opacity-0"
                                                        src="{{ asset('images/camion_transp.jpg') }}"
                                                        alt="">
                                                </div>
                                            </div>


                                            <div class="flex items-center py-4">
                                                <div
                                                    class="flex items-center flex-1 text-xs text-white transition ease-in-out hover:text-blue-400 duration-350">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    12.3 k
                                                </div>
                                                <div
                                                    class="flex items-center flex-1 text-xs text-white transition ease-in-out hover:text-green-400 duration-350">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M23.77 15.67c-.292-.293-.767-.293-1.06 0l-2.22 2.22V7.65c0-2.068-1.683-3.75-3.75-3.75h-5.85c-.414 0-.75.336-.75.75s.336.75.75.75h5.85c1.24 0 2.25 1.01 2.25 2.25v10.24l-2.22-2.22c-.293-.293-.768-.293-1.06 0s-.294.768 0 1.06l3.5 3.5c.145.147.337.22.53.22s.383-.072.53-.22l3.5-3.5c.294-.292.294-.767 0-1.06zm-10.66 3.28H7.26c-1.24 0-2.25-1.01-2.25-2.25V6.46l2.22 2.22c.148.147.34.22.532.22s.384-.073.53-.22c.293-.293.293-.768 0-1.06l-3.5-3.5c-.293-.294-.768-.294-1.06 0l-3.5 3.5c-.294.292-.294.767 0 1.06s.767.293 1.06 0l2.22-2.22V16.7c0 2.068 1.683 3.75 3.75 3.75h5.85c.414 0 .75-.336.75-.75s-.337-.75-.75-.75z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    14 k
                                                </div>
                                                <div
                                                    class="flex items-center flex-1 text-xs text-white transition ease-in-out hover:text-red-600 duration-350">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M12 21.638h-.014C9.403 21.59 1.95 14.856 1.95 8.478c0-3.064 2.525-5.754 5.403-5.754 2.29 0 3.83 1.58 4.646 2.73.814-1.148 2.354-2.73 4.645-2.73 2.88 0 5.404 2.69 5.404 5.755 0 6.376-7.454 13.11-10.037 13.157H12zM7.354 4.225c-2.08 0-3.903 1.988-3.903 4.255 0 5.74 7.034 11.596 8.55 11.658 1.518-.062 8.55-5.917 8.55-11.658 0-2.267-1.823-4.255-3.903-4.255-2.528 0-3.94 2.936-3.952 2.965-.23.562-1.156.562-1.387 0-.014-.03-1.425-2.965-3.954-2.965z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    14 k
                                                </div>
                                                <div
                                                    class="flex items-center flex-1 text-xs text-white transition ease-in-out hover:text-blue-400 duration-350">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M17.53 7.47l-5-5c-.293-.293-.768-.293-1.06 0l-5 5c-.294.293-.294.768 0 1.06s.767.294 1.06 0l3.72-3.72V15c0 .414.336.75.75.75s.75-.336.75-.75V4.81l3.72 3.72c.146.147.338.22.53.22s.384-.072.53-.22c.293-.293.293-.767 0-1.06z">
                                                            </path>
                                                            <path
                                                                d="M19.708 21.944H4.292C3.028 21.944 2 20.916 2 19.652V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 .437.355.792.792.792h15.416c.437 0 .792-.355.792-.792V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 1.264-1.028 2.292-2.292 2.292z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>

                                        </div>
                                        <hr class="border-gray-800">
                                    </article>
                                </li>
                               
                               <li>
                                    <!--second tweet-->
                                    <article class="transition ease-in-out hover:bg-gray-800 duration-350">
                                        <div class="flex flex-shrink-0 p-4 pb-0">
                                            <a href="#" class="flex-shrink-0 block group">
                                                <div class="flex items-center">
                                                    <div>
                                                        <img class="inline-block w-10 h-10 rounded-full"
                                                            src="{{ asset('images/avatars/profile-pic.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-base font-medium leading-6 text-white">
                                                            Konaté Abdoul
                                                            <span
                                                                class="text-sm font-medium leading-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300">
                                                                @Besoin . 21 Fevrier 2021
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>


                                        <div class="pl-16">
                                            <p class="flex-shrink text-base font-medium text-white width-auto">
                                                Nous recherchons pour notre client un véhicule Fiat 500 pour location <a href="#"
                                                    class="text-blue-400">#durée prévisionnelle : 10 jours</a>
                                               
                                            </p>

                                            <div class="pt-3 pr-6 md:flex-shrink">
                                                <div class="w-full h-64 bg-center bg-no-repeat bg-cover rounded-lg"
                                                    style="height: 200px; background-image: url({{ asset('images/berline.png') }});">
                                                    <img class="w-full h-full opacity-0"
                                                        src="{{ asset('images/berline.png') }}"
                                                        alt="">
                                                </div>
                                            </div>


                                            <div class="flex items-center py-4">
                                                <div
                                                    class="flex items-center flex-1 text-xs text-white transition ease-in-out hover:text-blue-400 duration-350">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    12.3 k
                                                </div>
                                                <div
                                                    class="flex items-center flex-1 text-xs text-white transition ease-in-out hover:text-green-400 duration-350">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M23.77 15.67c-.292-.293-.767-.293-1.06 0l-2.22 2.22V7.65c0-2.068-1.683-3.75-3.75-3.75h-5.85c-.414 0-.75.336-.75.75s.336.75.75.75h5.85c1.24 0 2.25 1.01 2.25 2.25v10.24l-2.22-2.22c-.293-.293-.768-.293-1.06 0s-.294.768 0 1.06l3.5 3.5c.145.147.337.22.53.22s.383-.072.53-.22l3.5-3.5c.294-.292.294-.767 0-1.06zm-10.66 3.28H7.26c-1.24 0-2.25-1.01-2.25-2.25V6.46l2.22 2.22c.148.147.34.22.532.22s.384-.073.53-.22c.293-.293.293-.768 0-1.06l-3.5-3.5c-.293-.294-.768-.294-1.06 0l-3.5 3.5c-.294.292-.294.767 0 1.06s.767.293 1.06 0l2.22-2.22V16.7c0 2.068 1.683 3.75 3.75 3.75h5.85c.414 0 .75-.336.75-.75s-.337-.75-.75-.75z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    14 k
                                                </div>
                                                <div
                                                    class="flex items-center flex-1 text-xs text-white transition ease-in-out hover:text-red-600 duration-350">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M12 21.638h-.014C9.403 21.59 1.95 14.856 1.95 8.478c0-3.064 2.525-5.754 5.403-5.754 2.29 0 3.83 1.58 4.646 2.73.814-1.148 2.354-2.73 4.645-2.73 2.88 0 5.404 2.69 5.404 5.755 0 6.376-7.454 13.11-10.037 13.157H12zM7.354 4.225c-2.08 0-3.903 1.988-3.903 4.255 0 5.74 7.034 11.596 8.55 11.658 1.518-.062 8.55-5.917 8.55-11.658 0-2.267-1.823-4.255-3.903-4.255-2.528 0-3.94 2.936-3.952 2.965-.23.562-1.156.562-1.387 0-.014-.03-1.425-2.965-3.954-2.965z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    14 k
                                                </div>
                                                <div
                                                    class="flex items-center flex-1 text-xs text-white transition ease-in-out hover:text-blue-400 duration-350">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M17.53 7.47l-5-5c-.293-.293-.768-.293-1.06 0l-5 5c-.294.293-.294.768 0 1.06s.767.294 1.06 0l3.72-3.72V15c0 .414.336.75.75.75s.75-.336.75-.75V4.81l3.72 3.72c.146.147.338.22.53.22s.384-.072.53-.22c.293-.293.293-.767 0-1.06z">
                                                            </path>
                                                            <path
                                                                d="M19.708 21.944H4.292C3.028 21.944 2 20.916 2 19.652V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 .437.355.792.792.792h15.416c.437 0 .792-.355.792-.792V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 1.264-1.028 2.292-2.292 2.292z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>

                                        </div>
                                        <hr class="border-gray-800">
                                    </article>
                                </li>

                                <li>
                                    <!--second tweet-->
                                    <article class="transition ease-in-out hover:bg-gray-800 duration-350">
                                        <div class="flex flex-shrink-0 p-4 pb-0">
                                            <a href="#" class="flex-shrink-0 block group">
                                                <div class="flex items-center">
                                                    <div>
                                                        <img class="inline-block w-10 h-10 rounded-full"
                                                            src="{{ asset('images/logo.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-base font-medium leading-6 text-white">
                                                            PALMAFRIQUE
                                                            <span
                                                                class="text-sm font-medium leading-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300">
                                                                @Besoin . 22 Février 2021
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>


                                        <div class="pl-16">
                                            <p class="flex-shrink text-base font-medium text-white width-auto">
                                                Nous recherchons  <a href="#"
                                                    class="text-blue-400">2 tracteurs et remorques de 10T </a>
                                                    et <a href="#"class="text-blue-400">1 tracteur de 100CV pour ateler un gyrobroyeur </a>
                                                 Pour location longue durée
                                            </p>

                                            <div class="pt-3 pr-6 md:flex-shrink">
                                                <div class="w-full h-64 bg-center bg-no-repeat bg-cover rounded-lg"
                                                style="height: 200px; background-image: url({{ asset('images/trac_trans.jpg') }});">
                                                <img class="w-full h-full opacity-0"
                                                    src="{{ asset('images/trac_trans.jpg') }}"
                                                    alt="">
                                                </div>
                                            </div>


                                            <div class="flex items-center py-4">
                                                <div
                                                    class="flex items-center flex-1 text-xs text-white transition ease-in-out hover:text-blue-400 duration-350">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    12.3 k
                                                </div>
                                                <div
                                                    class="flex items-center flex-1 text-xs text-white transition ease-in-out hover:text-green-400 duration-350">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M23.77 15.67c-.292-.293-.767-.293-1.06 0l-2.22 2.22V7.65c0-2.068-1.683-3.75-3.75-3.75h-5.85c-.414 0-.75.336-.75.75s.336.75.75.75h5.85c1.24 0 2.25 1.01 2.25 2.25v10.24l-2.22-2.22c-.293-.293-.768-.293-1.06 0s-.294.768 0 1.06l3.5 3.5c.145.147.337.22.53.22s.383-.072.53-.22l3.5-3.5c.294-.292.294-.767 0-1.06zm-10.66 3.28H7.26c-1.24 0-2.25-1.01-2.25-2.25V6.46l2.22 2.22c.148.147.34.22.532.22s.384-.073.53-.22c.293-.293.293-.768 0-1.06l-3.5-3.5c-.293-.294-.768-.294-1.06 0l-3.5 3.5c-.294.292-.294.767 0 1.06s.767.293 1.06 0l2.22-2.22V16.7c0 2.068 1.683 3.75 3.75 3.75h5.85c.414 0 .75-.336.75-.75s-.337-.75-.75-.75z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    14 k
                                                </div>
                                                <div
                                                    class="flex items-center flex-1 text-xs text-gray-400 transition ease-in-out hover:text-red-600 duration-350">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M12 21.638h-.014C9.403 21.59 1.95 14.856 1.95 8.478c0-3.064 2.525-5.754 5.403-5.754 2.29 0 3.83 1.58 4.646 2.73.814-1.148 2.354-2.73 4.645-2.73 2.88 0 5.404 2.69 5.404 5.755 0 6.376-7.454 13.11-10.037 13.157H12zM7.354 4.225c-2.08 0-3.903 1.988-3.903 4.255 0 5.74 7.034 11.596 8.55 11.658 1.518-.062 8.55-5.917 8.55-11.658 0-2.267-1.823-4.255-3.903-4.255-2.528 0-3.94 2.936-3.952 2.965-.23.562-1.156.562-1.387 0-.014-.03-1.425-2.965-3.954-2.965z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    14 k
                                                </div>
                                                <div
                                                    class="flex items-center flex-1 text-xs text-gray-400 transition ease-in-out hover:text-blue-400 duration-350">
                                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2">
                                                        <g>
                                                            <path
                                                                d="M17.53 7.47l-5-5c-.293-.293-.768-.293-1.06 0l-5 5c-.294.293-.294.768 0 1.06s.767.294 1.06 0l3.72-3.72V15c0 .414.336.75.75.75s.75-.336.75-.75V4.81l3.72 3.72c.146.147.338.22.53.22s.384-.072.53-.22c.293-.293.293-.767 0-1.06z">
                                                            </path>
                                                            <path
                                                                d="M19.708 21.944H4.292C3.028 21.944 2 20.916 2 19.652V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 .437.355.792.792.792h15.416c.437 0 .792-.355.792-.792V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 1.264-1.028 2.292-2.292 2.292z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>

                                        </div>
                                        <hr class="border-gray-800">
                                    </article>
                                </li>
                            </ul>
                        </section>


                        <aside class="w-2/5 h-12 position-relative">
                            <!--Aside menu (right side)-->
                            <div style="max-width:350px;">
                                <div class="fixed h-screen overflow-y-auto">




                                    <div class="relative p-5 text-gray-300 w-80">
                                        <button type="submit" class="absolute mt-3 ml-4 mr-4">
                                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                x="0px" y="0px" viewBox="0 0 56.966 56.966"
                                                style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                                width="512px" height="512px">
                                                <path
                                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                                                </path>
                                            </svg>
                                        </button>

                                        <input type="search" name="search" placeholder="Recherche"
                                            class="w-full h-10 px-10 pr-5 text-sm border-0 rounded shadow bg-dim-700 focus:outline-none bg-purple-white">
                                    </div>
                                    <!--trending tweet section-->
                                    <div class="max-w-sm m-4 overflow-hidden rounded-lg shadow-lg bg-dim-700">
                                        <div class="flex">
                                            <div class="flex-1 m-2">
                                                <h2 class="w-48 px-4 py-2 font-semibold text-white text-xm">Entreprises présentes</h2>
                                            </div>
                                            <div class="flex-1 px-4 py-2 m-2">
                                                <a href=""
                                                    class="float-right text-2xl text-white rounded-full hover:bg-gray-800 hover:text-blue-300">
                                                    <svg class="w-6 h-6 m-2" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path
                                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                                        </path>
                                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>


                                        <hr class="border-gray-800">

                                        <!--first trending tweet-->
                                        <div class="flex">
                                            <div class="flex-1">
                                                <p class="w-48 px-4 mt-3 ml-2 text-xs text-gray-400">1 . Transport Agricole</p>
                                                <h2 class="w-48 px-4 ml-2 font-bold text-white">#PALMAFRIQUE</h2>
                                                <p class="w-48 px-4 mb-3 ml-2 text-xs text-gray-400">125 Besoins | 10 Prestations</p>

                                            </div>
                                            <div class="flex-1 px-4 py-2 m-2">
                                                <a href=""
                                                    class="float-right text-2xl text-gray-400 rounded-full hover:bg-gray-800 hover:text-blue-300">
                                                    <svg class="w-5 h-5 m-2" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path d="M19 9l-7 7-7-7"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <hr class="border-gray-800">

                                        <!--second trending tweet-->

                                        <div class="flex">
                                            <div class="flex-1">
                                                <p class="w-48 px-4 mt-3 ml-2 text-xs text-gray-400">2 . Transport de Conteneurs</p>
                                                <h2 class="w-48 px-4 ml-2 font-bold text-white">#BOLORE</h2>
                                                <p class="w-48 px-4 mb-3 ml-2 text-xs text-gray-400">30 Besoins | 150 Prestations</p>

                                            </div>
                                            <div class="flex-1 px-4 py-2 m-2">
                                                <a href=""
                                                    class="float-right text-2xl text-gray-400 rounded-full hover:bg-gray-800 hover:text-blue-300">
                                                    <svg class="w-5 h-5 m-2" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path d="M19 9l-7 7-7-7"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <hr class="border-gray-700">

                                        <!--third trending tweet-->

                                        <div class="flex">
                                            <div class="flex-1">
                                                <p class="w-48 px-4 mt-3 ml-2 text-xs text-gray-400">3 . Transport de vracs </p>
                                                <h2 class="w-48 px-4 ml-2 font-bold text-white">#YARA</h2>
                                                <p class="w-48 px-4 mb-3 ml-2 text-xs text-gray-400">300 Besoins | 0 Prestations</p>

                                            </div>
                                            <div class="flex-1 px-4 py-2 m-2">
                                                <a href=""
                                                    class="float-right text-2xl text-gray-400 rounded-full hover:bg-gray-800 hover:text-blue-300">
                                                    <svg class="w-5 h-5 m-2" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path d="M19 9l-7 7-7-7"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <hr class="border-gray-700">

                                        <!--forth trending tweet-->

                                        <div class="flex">
                                            <div class="flex-1">
                                                <p class="w-48 px-4 mt-3 ml-2 text-xs text-gray-400">4 .Maintenance </p>
                                                <h2 class="w-48 px-4 ml-2 font-bold text-white">#SOCIDA</h2>
                                                <p class="w-48 px-4 mb-3 ml-2 text-xs text-gray-400">6 Besoins | 25 Prestations</p>

                                            </div>
                                            <div class="flex-1 px-4 py-2 m-2">
                                                <a href=""
                                                    class="float-right text-2xl text-gray-400 rounded-full hover:bg-gray-800 hover:text-blue-300">
                                                    <svg class="w-5 h-5 m-2" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path d="M19 9l-7 7-7-7"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <hr class="border-gray-700">

                                        <!--show more-->

                                        <div class="flex">
                                            <div class="flex-1 p-4">
                                                <h2 class="w-48 px-4 ml-2 font-bold text-blue-400">Voir Plus ...</h2>
                                            </div>
                                        </div>

                                    </div>
                                    <!--people suggetion to follow section-->
                                    <div class="max-w-sm m-4 overflow-hidden rounded-lg shadow-lg bg-dim-700">
                                        <div class="flex">
                                            <div class="flex-1 m-2">
                                                <h2 class="w-48 px-4 py-2 font-semibold text-white text-xm">Materiels disponibles</h2>
                                            </div>
                                        </div>


                                        <hr class="border-gray-700">

                                        <!--first person who to follow-->

                                        <div class="flex flex-shrink-0">
                                            <div class="flex-1 ">
                                                <div class="flex items-center w-48">
                                                    <div>
                                                        <img class="inline-block w-auto h-10 mt-2 ml-4 rounded-full"
                                                            src="{{ asset('images/tracteur.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="mt-3 ml-3">
                                                        <p class="text-base font-medium leading-6 text-white">
                                                           Tracteur Agricole
                                                        </p>
                                                        <p
                                                            class="text-sm font-medium leading-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300">
                                                            Quantité : 500
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="flex-1 px-4 py-2 m-2">
                                                <a href="" class="float-right ">
                                                    <button
                                                        class="px-4 py-2 font-semibold text-white bg-transparent border border-white rounded-full hover:bg-gray-800 hover:text-white hover:border-transparent">
                                                        Details
                                                    </button>
                                                </a>

                                            </div>
                                        </div>
                                        <hr class="border-gray-700">

                                        <!--second person who to follow-->

                                        <div class="flex flex-shrink-0">
                                            <div class="flex-1 ">
                                                <div class="flex items-center w-48">
                                                    <div>
                                                        <img class="inline-block w-auto h-10 mt-2 ml-4 rounded-full"
                                                            src="{{ asset('images/camion_2.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="mt-3 ml-3">
                                                        <p class="text-base font-medium leading-6 text-white">
                                                            Camion Benne
                                                        </p>
                                                        <p
                                                            class="text-sm font-medium leading-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300">
                                                            Quantité : 60
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="flex-1 px-4 py-2 m-2">
                                                <a href="" class="float-right ">
                                                    <button
                                                        class="px-4 py-2 font-semibold text-white bg-transparent border border-white rounded-full hover:bg-gray-800 hover:text-white hover:border-transparent">
                                                        Details
                                                    </button>
                                                </a>

                                            </div>
                                        </div>

                                        <hr class="border-gray-700">

                                        <div class="flex flex-shrink-0">
                                            <div class="flex-1 ">
                                                <div class="flex items-center w-48">
                                                    <div>
                                                        <img class="inline-block w-auto h-10 mt-2 ml-4 rounded-full"
                                                            src="{{ asset('images/car_pickup_07.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="mt-3 ml-3">
                                                        <p class="text-base font-medium leading-6 text-white">
                                                            Pick Up
                                                        </p>
                                                        <p
                                                            class="text-sm font-medium leading-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-300">
                                                            Quantité : 25
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="flex-1 px-4 py-2 m-2">
                                                <a href="" class="float-right ">
                                                    <button
                                                        class="px-4 py-2 font-semibold text-white bg-transparent border border-white rounded-full hover:bg-gray-800 hover:text-white hover:border-transparent">
                                                        Details
                                                    </button>
                                                </a>

                                            </div>
                                        </div>

                                        <hr class="border-gray-700">



                                        <!--show more-->

                                        <div class="flex">
                                            <div class="flex-1 p-4">
                                                <h2 class="w-48 px-4 ml-2 font-bold text-blue-400">Voir Plus ...</h2>
                                            </div>
                                        </div>

                                    </div>




                                    <div class="flow-root m-6">
                                        <div class="flex-1">
                                            <a href="#">
                                                <p class="text-sm font-medium leading-6 text-gray-500">
                                                    Confidentialité  · Conditions générales  · Publicités 
                                                </p>
                                                <p class="text-sm font-medium leading-6 text-gray-500">
                                                    Choix publicitaires   · Cookies  · 
                                                </p>
                                            </a>
                                        </div>
                                        <div class="flex-2">
                                            <p class="text-sm font-medium leading-6 text-gray-500"> © 2021 MateBara, Inc.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </main>

            </div>

        </div>




        <style>
            .overflow-y-auto::-webkit-scrollbar,
            .overflow-y-scroll::-webkit-scrollbar,
            .overflow-x-auto::-webkit-scrollbar,
            .overflow-x::-webkit-scrollbar,
            .overflow-x-scroll::-webkit-scrollbar,
            .overflow-y::-webkit-scrollbar,
            body::-webkit-scrollbar {
                display: none;
            }

            /* Hide scrollbar for IE, Edge and Firefox */
            .overflow-y-auto,
            .overflow-y-scroll,
            .overflow-x-auto,
            .overflow-x,
            .overflow-x-scroll,
            .overflow-y,
            body {
                -ms-overflow-style: none;
                /* IE and Edge */
                scrollbar-width: none;
                /* Firefox */
            }

            .bg-dim-700 {
                --bg-opacity: 1;
                background-color: #192734;
            }

            html,
            body {
                margin: 0;
                *background-color: #3f4347;
            }

            svg.paint-icon {
                fill: currentcolor;
            }

        </style>




    
</body>

</html>
