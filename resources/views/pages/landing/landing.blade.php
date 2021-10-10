@extends('layouts.landing.main')

@section('container')

<head>
    <style>
        /* penggunaan media query pada default tablet layout */
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .gambar {
                width: auto !important;
                height: 300px;
                max-height: 300px;
            }
        }

        /* penggunaan media query pada mobile layout */
        @media only screen and (min-width: 480px) and (max-width: 767px) {
            .gambar {
                width: auto !important;
                max-width: 160px;
                height: 210px;
            }
        }

        @media only screen and (min-width: 180px) and (max-width: 479px) {
            .gambar {
                width: auto !important;
                height: 160px;
            }
        }

        /* penggunaan media query pada default monitor layout */
        @media only screen and (min-width: 992px) {
            .gambar {
                width: auto !important;
                height: 320px;
                max-height: 320px;
            }
        }

        .waktu {
            animation: waktu 4s ease-out infinite;
        }

        .waktu2 {
            animation: waktu2 1s ease-out infinite;
        }

        @keyframes waktu {
            0% {
                transform: scale(0.9, 0.9);
            }

            50% {
                transform: scale(1, 1);
            }

            100% {
                transform: scale(0.9, 0.9);
            }
        }

        @keyframes waktu2 {
            0% {
                transform: scale(0.9, 0.9);
            }

            50% {
                transform: scale(1, 1);
            }

            100% {
                transform: scale(0.9, 0.9);
            }
        }
    </style>
</head>
<div role="main" class="main">

    <section id="home" class="section section-with-shape-divider custom-bg-color-1 border-0 pt-0 m-0">
        <div class="shape-divider shape-divider-bottom" style="height: 243px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 2000 245"
                preserveAspectRatio="xMinYMin">
                <path fill="#FFF" opacity="0.5" d="M2028.47,246.15v-39.09C1945.6,199.68,1869.96,195.8,1803,194c-71.99-1.93-137.53-4.37-225,1
                    c-88.04,5.4-120.19,13.36-233,19c-55.14,2.76-102.19,5-165,3c-37.5-1.2-102.55-4.6-200-19c-89.42-13.21-145.61-26.73-276-57
                    C520.19,98.33,428.29,76.99,402,72C243.75,41.93,118.41,28.67,37,22c-26.77-2.19-49.49-3.73-66.33-4.77v229.03h2057.82
                    C2028.48,246.22,2028.47,246.19,2028.47,246.15z" />
                <path fill="#FFF" d="M1816,212c-58.78-4.11-116.63-8.07-195-9c-43.43-0.51-105.81-1.13-187,4c-33.73,2.13-29.27,2.64-127,10
                    c-86.52,6.52-110.13,7.64-137,8c-11.31,0.15-53.81,0.58-110-3c-54.49-3.47-108.08-9.83-185-23c-69.21-11.85-114.89-21.96-202-41
                    c-262.93-57.46-291.75-62.62-318-67C229.24,70,155.97,65.58,121,64C60.05,61.24,8.67,62.27-28.77,63.95v187.41H2028V232
                C1943.49,221.98,1871.42,215.88,1816,212z" />
            </svg>
        </div>
        <div class="custom-section-svg pt-5 pb-5 pb-md-0 mb-5 mb-md-0">
            <div class="custom-section-svg-background appear-animation" data-appear-animation="fadeIn"
                data-appear-animation-delay="2300"
                style="background-image: url(frontend/img/undangan.jpg); background-size: cover; background-position: center;">
            </div>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 2000 935" xml:space="preserve" data-appear-animation-svg="true"
                data-plugin-float-element-svg="true">
                <linearGradient id="gradient_SVG_1_" class="custom-svg-linear-gradient" gradientUnits="userSpaceOnUse"
                    x1="1608.6167" y1="668.754" x2="1197.4358" y2="257.5732">
                    <stop offset="3.745963e-03" style="stop-color:#5349FF" />
                    <stop offset="1" style="stop-color:#0088CC" />
                </linearGradient>

                <linearGradient id="gradient_SVG_2_" class="custom-svg-linear-gradient" gradientUnits="userSpaceOnUse"
                    x1="1621.6152" y1="666.8627" x2="1207.4606" y2="252.708">
                    <stop offset="3.745963e-03" style="stop-color:#5349FF" />
                    <stop offset="1" style="stop-color:#0088CC" />
                </linearGradient>

                <linearGradient id="gradient_SVG_3_" class="custom-svg-linear-gradient" gradientUnits="userSpaceOnUse"
                    x1="1557.4893" y1="663.6315" x2="1192.9751" y2="299.1174">
                    <stop offset="3.745963e-03" style="stop-color:#5349FF" />
                    <stop offset="1" style="stop-color:#0088CC" />
                </linearGradient>
                <g>
                    <g>
                        <!-- Start -->
                        <path id="st0_start" fill="#EFF1F3"
                            d="M1642,423.5c9.3,66.75-24.25,126.31-33,128c5.86,0.61-66.08,138.04-289,165
                            c-218.43,26.42-240.8-178.27-236-187.26c0,0-1.72-21.98,7-57.74c0,0,16.97-79.91,153-161s257.67-66.4,257.67-66.4
                            s77.61-10.46,123.82,108.12c12.53,32.16,17.04,61.49,16.97,87.18H2018V-0.5H-25v935h2043v-511H1642z" />

                        <!-- End -->
                        <path id="st0_end" fill="#EFF1F3"
                            d="M1642,423.5c9.3,66.75-12.25,127.31-21,129c9.59,29.36-56.22,260.83-305,200
                            c-324.35-79.31-237.27-195.4-232-223.26c0,0-1.72-21.98,7-57.74c0,0,16.97-79.91,153-161s257.67-66.4,257.67-66.4
                            c23.05-7.68,166.63-57.11,138.33,109.4c-6.22,36.59,6.91,63.11,2.46,85.9H2018V-0.5H-25v935h2043v-511H1642z"
                            style="visibility: hidden;" />
                    </g>
                </g>
                <g>
                    <!-- Start -->
                    <g class="appear-animation" fill="url(#gradient_SVG_3_)" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1500">
                        <g opacity="0.2">
                            <path id="st1_start"
                                d="M1679,417.5c0,0,0-190-210-282c-177.63-77.82-272.97,156.29-298.15,230.32c19.25-16.7,43.09-34.25,72.59-51.83
                                c136.03-81.09,257.23-68.89,257.23-68.89s77.61-10.46,123.82,108.12s-16.57,198.81-16.57,198.81S1535.12,694.08,1318,718.5
                                c-41.7,4.69-77.69-0.59-106-10c53.85,55.08,154.68,120.29,280,56C1685,665.5,1679,417.5,1679,417.5z" />
                        </g>
                    </g>
                    <g class="appear-animation" fill="url(#gradient_SVG_2_)" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1700">
                        <g opacity="0.5">
                            <path id="st2_start" d="M1594,207.5c-213.29-96.1-368.83,26.65-427.9,86.58c-17.02,17.27-31.29,37.04-42.43,58.57
                                C1044.11,506.47,1100,600.5,1100,600.5s0.47,1.17,1.58,3.29c0.67,1.27,2.57,0.32,1.98-0.98c-17.26-38.06-20.44-71.25-20.56-72.54
                                c0-0.03,0-0.05,0-0.08c0.01-1.01,0.24-20.11,8.72-54.89c0,0,15.7-80.22,151.72-161.31c134.11-79.95,253.81-69.21,257.16-68.89
                                c0.05,0.01,0.09,0,0.14,0c2.63-0.32,78.34-8.38,123.75,108.13c45.6,117.02-14.92,196.68-16.53,198.77
                                c-0.02,0.03-0.04,0.05-0.06,0.09c-1.54,2.91-74.68,138.86-289.47,163.01c-3.1,0.35-6.16,0.65-9.17,0.9
                                c-1.28,0.11-1.37,1.94-0.11,2.18c10.44,1.97,21.38,3.76,32.85,5.33c87.49,12.01,153.65,2.68,200.67-11.89
                                c53.53-16.59,98.13-54,124.26-103.57C1719.67,508.01,1797.72,299.29,1594,207.5z" />
                        </g>
                    </g>
                    <g class="appear-animation" fill="url(#gradient_SVG_1_)" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1900">
                        <path id="st3_start" d="M1665,334.5c-45.71-117.3-115-122-137.28-124.26c-3.67-0.37-7.37,0.02-11.05-0.16
                            c-28.83-1.41-152.25-1.91-288.67,79.42c-156,93-174,185-174,185c-0.89,3.67-1.71,7.18-2.45,10.54c-7.21,32.69-6.42,66.6,2.4,98.74
                            h41.91c-2.45-6.83-4.46-13.32-6.08-19.26c-6-21.92-6.92-44.93-2.79-67.27c1.19-6.42,2.73-13.75,4.73-21.94
                            c0,0,15.7-80.22,151.72-161.31c118.77-70.81,226.25-70.48,251.6-69.26c3.28,0.16,6.55,0.18,9.83,0.14
                            c16.75-0.19,79.82,6.24,119.62,108.36c40.49,103.89-2.68,178.34-14,195.19c-1.63,2.43-3.05,4.99-4.73,7.39
                            c-12.42,17.79-102.26,129.97-287.33,159.29c-124.69,19.75-187.89-58.02-214.88-112.28l-4.21-9.86l3.01,7.16
                            c-1.06-2.41-2.06-4.8-3.01-7.16c-1.11-2.77-11.34-31.46-11.34-35.46l-38,6c-1,4,6.76,29.79,8.24,33.99
                            c1.89,5.36,4.02,10.91,6.42,16.58c28.54,67.53,95.33,152.74,249.34,135.43c223.71-25.16,313.43-156.05,329.34-182.38
                            c1.74-2.88,3.54-5.72,5.42-8.5C1661.47,539.8,1711.64,454.19,1665,334.5z" />
                    </g>

                    <!-- End -->
                    <path id="st1_end" fill="url(#gradient_SVG_3_)" opacity="0.2" d="M1679,417.5c62.71-42.92-218.73-499.06-325-255c-16.11,37-157.97,129.29-183.15,203.32
                        c19.25-16.7,43.09-34.25,72.59-51.83c136.03-81.09,257.23-68.89,257.23-68.89c22.57-3.36,175.75-42.15,148.33,107.4
                        c-21.09,114.99,14.61,207.14-26,208c-7.12,36.19-72.31,261.51-279,182c-39.16-15.07-101.62-26.65-129.93-36.07
                        c143.83,97.85,222.48,64.02,274.93,79.07C1723.19,852.69,1679,417.5,1679,417.5z"
                        style="visibility: hidden;" />
                    <path id="st2_end" fill="url(#gradient_SVG_2_)" opacity="0.5"
                        d="M1594,207.5c-222.99,2.57-368.83,26.65-427.9,86.58c-17.02,17.27-31.29,37.04-42.43,58.57
                        C1044.11,506.47,1100,600.5,1100,600.5s0.47,1.17,1.58,3.29c0.67,1.27,2.57,0.32,1.98-0.98c-17.26-38.06-20.44-71.25-20.56-72.54
                        c0-0.03,0-0.05,0-0.08c0.01-1.01,0.24-20.11,8.72-54.89c0,0,15.7-80.22,151.72-161.31c134.11-79.95,253.81-69.21,257.16-68.89
                        c0.05,0.01,0.09,0,0.14,0c29.13-2.05,189.7-51.48,142.26,106.41c-31.91,106.21,23.18,203.99-21,204c-0.04,0-3,4.96-3,5
                        c-3.73,41.6-125,260-322,184c-2.91-1.12-3.98-16.25-7-16c-1.28,0.11,15.74,4.76,17,5c10.44,1.97,24.53-1.57,36,0
                        c87.49,12.01,152.65-7.32,199.67-21.89c53.53-16.59,127.59-47.63,124.26-103.57C1658.03,458.37,1823.15,204.86,1594,207.5z" style="visibility: hidden;" />
                    <path id="st3_end" fill="url(#gradient_SVG_1_)" d="M1676,334.5c32.04-120.61-126-122-148.28-124.26c-3.67-0.37-7.37,0.02-11.05-0.16
                        c-28.83-1.41-152.25-1.91-288.67,79.42c-101.44,60.48-129.31,109.96-136.39,137.17c-4.86,18.69-0.02,42.19-14.61,54.83
                        c-5.76,4.99-23,15-27,23c-14.97,29.94-4.87,47.14,3.95,79.28h41.91c-2.45-6.83-4.46-13.32-6.08-19.26
                        c-6-21.92-12.11-37.85,8.22-48.02c28-14,31.5-30.39,31-55c-0.73-35.47,5.73-50.85,30.94-78.33c17.88-19.5,43.67-38.78,82.06-61.67
                        c118.77-70.81,227.69-77.99,253.04-76.77c3.28,0.16,6.55,0.18,9.83,0.14c16.75-0.19,150.7,3.26,119.62,108.36
                        C1591,466.5,1631.05,507.4,1613,543.5c-7,14-13.49,25.49-15,28c-13.45,22.36-99,190-279.57,143.59
                        c-126.62-32.54-188.65-54.45-214.88-112.28l-4.21-9.86l3.01,7.16c-1.06-2.41-2.06-4.8-3.01-7.16
                        c-1.11-2.77-11.34-31.46-11.34-35.46l-38,6c-1,4,6.76,29.79,8.24,33.99c1.89,5.36,4.02,10.91,6.42,16.58
                        c28.54,67.53,85.29,90.05,222.34,162.43c178,94,303.08-120.67,319-147c1.74-2.88,31-46,45-72C1663.82,533.69,1642,462.5,1676,334.5
                        z" style="visibility: hidden;" />
                </g>
                <g class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1500"
                    data-appear-animation-duration="2s">
                    <circle fill="#DFDFDB" cx="128.5" cy="446" r="11.5" />

                    <g data-plugin-float-element
                        data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                        <circle class="custom-svg-fill-color-secondary" fill="#4F4BFC" cx="1051" cy="367.5" r="33" />
                        <circle fill="#EFF1F3" cx="1051.61" cy="368.11" r="29.94" />
                    </g>

                    <g data-plugin-float-element
                        data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                        <circle class="custom-svg-fill-color-secondary" fill="#4F4BFC" cx="1615" cy="734.5" r="17" />
                        <circle fill="#EFF1F3" cx="1615.31" cy="734.81" r="15.43" />
                    </g>
                    <circle fill="#DFDFDB" cx="635.5" cy="519" r="6.5" data-plugin-float-element
                        data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}" />

                    <circle fill="#DFDFDB" cx="647.5" cy="183" r="10.5" data-plugin-float-element
                        data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}" />

                    <g data-plugin-float-element
                        data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                        <circle class="custom-svg-fill-color-primary" fill="#0088CC" cx="1638" cy="163.5" r="23" />
                        <circle fill="#EFF1F3" cx="1638.43" cy="163.93" r="20.87" />
                    </g>
                </g>
                <g class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1800"
                    data-appear-animation-duration="2s">
                    <g data-plugin-float-element
                        data-plugin-options="{'startPos': 'bottom', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                        <circle class="custom-svg-fill-color-secondary" fill="#4F4BFC" cx="264" cy="303.5" r="27" />
                        <circle fill="#EFF1F3" cx="264.5" cy="304" r="24.5" />
                    </g>
                    <g data-plugin-float-element
                        data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                        <circle class="custom-svg-fill-color-primary" fill="#0088CC" cx="857" cy="644.5" r="17" />
                        <circle fill="#EFF1F3" cx="857.31" cy="644.81" r="15.43" />
                    </g>
                    <circle fill="#DFDFDB" cx="958.5" cy="427" r="10.5" data-plugin-float-element
                        data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}" />
                    <circle class="custom-svg-fill-color-secondary" fill="#908DFA" cx="1576" cy="762.5" r="14"
                        data-plugin-float-element
                        data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}" />
                    <circle class="custom-svg-fill-color-secondary" fill="#908DFA" cx="1139" cy="216.5" r="8"
                        data-plugin-float-element
                        data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}" />
                </g>
            </svg>
            <div class="container mt-5 pt-5">
                <div class="row align-items-center pt-5 mt-5 mt-lg-0 pt-lg-0">
                    <div class="col-lg-6">
                        <!-- <h1 class="font-weight-bold text-12 mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Wujudkan
                            undangan impianmu bersama Buntal</h1> -->
                        <h1 class="font-weight-medium text-9 mb-3 pb-1 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Wujudkan
                            undangan impianmu bersama <b>Buntal</b></h1>
                        <p class="custom-font-secondary custom-font-size-1 mb-4 pb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">Buat
                            undangan sesuai gayamu dengan hemat, cepat, dan mudah!</p>
                        <a href="#" class="btn btn-gradient text-3 font-weight-bold px-5 py-3 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer mb-5 pb-5 pb-xl-0 mb-xl-0"></div>
    </section>

    <div class="container pb-xl-5">
        <div id="tentang" class="row align-items-center pt-4 pb-lg-5 my-5" data-spy-offset="15">
            <div class="col-lg-6 pb-sm-5 pb-lg-0 mb-5 mb-lg-0">
                <div class="custom-svg-wrapper-1 px-5">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 687 673" data-plugin-float-element-svg="true">
                        <g class="d-none d-md-block" data-plugin-float-element
                            data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                            <circle class="custom-svg-fill-color-secondary" fill="#4F4BFC" cx="589" cy="216" r="27" />
                            <circle fill="#FFF" fill="#FFFFFF" cx="588.5" cy="216.5" r="24.5" />
                        </g>
                        <g class="d-none d-lg-block" data-plugin-float-element
                            data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                            <circle class="custom-svg-fill-color-secondary" fill="#4F4BFC" cx="128" cy="609" r="17" />
                            <circle fill="#FFF" cx="127.69" cy="609.31" r="15.43" />
                        </g>
                        <g opacity="0.7" data-plugin-float-element
                            data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                            <circle class="custom-svg-fill-color-primary" fill="#0088CC" cx="148" cy="64.5" r="14.5" />
                            <circle fill="#FFF" cx="148.27" cy="64.77" r="13.16" />
                        </g>
                        <linearGradient id="SVGID_1_" class="custom-svg-linear-gradient" gradientUnits="userSpaceOnUse"
                            x1="507.8588" y1="461.6467" x2="171.5928" y2="125.3807">
                            <stop offset="0" style="stop-color:#5349FF" />
                            <stop offset="1" style="stop-color:#0088CC" />
                        </linearGradient>
                        <g class="appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="700">
                            <g data-plugin-float-element
                                data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                <path fill="url(#SVGID_1_)" opacity="0.2" d="M252,64c26.24-11.75,48.83-15.22,67-18c14.48-2.22,21.72-3.33,32-3c9.04,0.29,37.99,1.59,66,21
                                        c9.9,6.86,16.05,13.46,24,22c4.57,4.91,15.33,16.93,30,41c5.64,9.25,18.4,31.03,31,62c12.24,30.1,18.27,53.97,22,69
                                        c7.74,31.18,12.66,51,13,79c0.36,29.73-4.65,52.49-7,62c-4.51,18.26-9.8,39.64-25,62c-21.92,32.23-51.17,46.98-77,60
                                        c-16.86,8.5-34.6,17.24-60,20c-22.47,2.44-40.04-0.98-50-3c-10.59-2.15-35.39-8.17-62-25c-30.2-19.1-46.48-41.85-62-64
                                        c-33.11-47.26-45.37-92.3-50-113c-8.73-39.06-8.09-71.09-7-88c1.52-23.61,4.05-57.78,23-96c5.29-10.68,14.58-29.02,33-48
                                        C215.85,80.47,239.52,69.59,252,64z" />
                            </g>
                        </g>
                        <linearGradient id="SVGID_2_" class="custom-svg-linear-gradient" gradientUnits="userSpaceOnUse"
                            x1="492.229" y1="463.2329" x2="145.1594" y2="116.1633">
                            <stop offset="0" style="stop-color:#5349FF" />
                            <stop offset="1" style="stop-color:#0088CC" />
                        </linearGradient>
                        <g class="appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="900">
                            <g data-plugin-float-element
                                data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                <path fill="url(#SVGID_2_)" opacity="0.5" d="M111,154c25.18-37.35,61.01-52.15,80-60c33.83-13.98,62.35-15.1,85-16c49.05-1.94,87.48,8.19,106,14
                                        c26.65,8.35,77.28,24.9,122,72c13.61,14.34,44.32,47.47,58,100c6.27,24.07,5.51,48.05,4,96c-0.2,6.4-0.68,16.99-6,29
                                        c-5.8,13.09-14.47,21.33-21,27c-37.42,32.48-75,48-75,48c-50.83,20.99-94.45,24.86-121,27c-40.5,3.27-78.77,5.96-122-10
                                        c-30.74-11.35-47.68-26.12-53-31c-4.3-3.94-13.34-12.73-31-40c-20.04-30.95-30.38-46.93-39-71c-14.81-41.38-14.11-77.61-13-94
                                        C86.73,219.43,88.95,186.71,111,154z" />
                            </g>
                        </g>
                        <g data-plugin-float-element
                            data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                            <circle class="custom-svg-fill-color-secondary" fill="#5349FF" cx="523" cy="103" r="6" />
                        </g>
                        <g data-plugin-float-element
                            data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                            <circle fill="#DFDFDB" cx="195.5" cy="519.5" r="11.5" />
                        </g>
                    </svg>
                    <div data-plugin-float-element
                        data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                        <img src="frontend/img/ring.png" class="img-fluid position-relative z-index-1 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <span class="text-color-grey positive-ls-2 font-weight-medium custom-font-size-2 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">ABOUT US</span>
                <h2 class="font-weight-bold text-10 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="400">We Create Digital Solutions, Products and Services.</h2>
                <p class="custom-font-size-2 font-weight-light pb-2 mb-4 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"><b>BUNTAL</b>
                    (Bisnis Undangan Digital) merupakan suatu jasa pembuatan kartu undangan berbentuk
                    digital/link berbasis laman website yang memiliki fitur berbagai pilihan desain, animasi,
                    nada instrument, serta memiliki banyak contoh pilihan tema undangan yang tersedia dikemas
                    dalam bentuk modern dan mewah.</p>
                <a href="#footer" data-hash data-hash-offset="70"
                    class="btn btn-gradient text-3 font-weight-bold px-5 py-3 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Contact Us</a>
            </div>
        </div>
    </div>

    <section id="digital" class="section section-with-shape-divider custom-bg-color-1 border-0 m-0">
        <div class="shape-divider" style="height: 385px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 2000 385" preserveAspectRatio="xMinYMin">
                <circle class="custom-svg-fill-color-secondary" fill="#9DA3F6" opacity="0.2" cx="57" cy="181" r="161" />
                <circle class="custom-svg-fill-color-secondary" fill="#5349FF" opacity="0.3" cx="75.5" cy="158.5"
                    r="169.5" />
                <path fill="#FFFFFF" opacity="0.5"
                    d="M-35,226c17.66,1.2,43.63,2.44,75,2c83.48-1.18,144.86-13.49,188-22c224.54-44.3,165.12-27.27,310-59
                        c133.16-29.16,128.14-31.45,223-52c206.26-44.68,317.22-68.72,460-68c97.61,0.49,73.58,11.86,293,25c164.22,9.83,250.54,7.83,279,7
                        c102.76-2.99,187.96-12.01,248-20c0-24.69,0-49.37,0-74.06c-694.67,0-1389.33,0-2084,0C-40.33,51.96-37.67,138.98-35,226z" />
                <path fill="#FFFFFF" d="M-37,185c17.21,1.44,42.06,3.17,72,4c81.96,2.26,170.2-3.07,325-30c54.07-9.4,98.99-18.41,221-45
                        c255.1-55.59,223.26-53.86,287-64c57.13-9.09,228.37-36.32,423-18c36.66,3.45,96.62,10.63,187,14c16.19,0.6,75.77,2.66,156,1
                        c90.18-1.87,157.94-7.44,248-15c46.95-3.94,99.2-8.84,156-15c0-12.82,0-25.65,0-38.47c-692.67,0-1385.33,0-2078,0
                        C-39,47.35-38,116.18-37,185z" />
            </svg>
        </div>
        <div class="container position-relative z-index-3 pt-md-5 pb-1 pb-sm-5 my-5">
            <div class="row justify-content-center pt-5">
                <div class="col-lg-10 text-center">
                    <span
                        class="text-color-grey positive-ls-2 font-weight-medium custom-font-size-2 d-block mb-1 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">OUR
                        SERVICE</span>
                    <h2 class="font-weight-bold text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="400">Kenapa Digital?</h2>
                    {{-- <p class="custom-font-size-2 font-weight-light appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Vestibulum
                        auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan
                        libero luctus, molestie nunc. In nibh ipsum, blandit id faucibus ac, finibus vitae dui.
                    </p> --}}
                </div>
            </div>
            <div class="row mb-5 mb-lg-0">
                <div class="col">
                    <div class="custom-svg-wrapper-2">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 1736 315" data-plugin-float-element-svg="true">
                            <g data-plugin-float-element
                                data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                <circle fill="#DFDFDB" cx="145.5" cy="31.5" r="9.5" />
                            </g>
                            <g data-plugin-float-element
                                data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                <circle class="custom-svg-fill-color-secondary" fill="#4F4BFC" cx="75" cy="128"
                                    r="17" />
                                <circle fill="#eff1f3" cx="74.69" cy="128.31" r="15.43" />
                            </g>
                            <g data-plugin-float-element
                                data-plugin-options="{'startPos': 'bottom', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                <circle class="custom-svg-fill-color-secondary" fill="#4F4BFC" cx="1693" cy="201.5"
                                    r="17" />
                                <circle fill="#eff1f3" cx="1693.31" cy="201.81" r="15.43" />
                            </g>
                            <g data-plugin-float-element
                                data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                <circle fill="#DFDFDB" cx="1620.5" cy="295.5" r="9.5" />
                            </g>
                        </svg>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="800">
                            <div class="owl-carousel custom-dots-style-1"
                                data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 2}, '768': {'items': 3}, '992': {'items': 3}, '1200': {'items': 4}}, 'autoplay': false, 'autoplayTimeout': 5000, 'autoplayHoverPause': true, 'dots': true, 'nav': false, 'loop': true, 'margin': 30, 'stagePadding': 15}">
                                <div>
                                    <a href="#" class="text-decoration-none">
                                        <div class="card custom-card-style-1 box-shadow-4 my-3">
                                            <div class="card-body p-3">
                                                <div class="thumb-info thumb-info-hide-wrapper-bg mb-3 pb-2">
                                                    <div class="thumb-info-wrapper">
                                                        <img src="frontend/img/responsive.png" class="img-fluid"
                                                            alt="John Doe" />
                                                    </div>
                                                </div>
                                                <h3
                                                    class="text-center font-weight-bold text-capitalize line-height-1 text-5 text-color-hover-primary mb-0">
                                                    Responsive</h3>
                                                {{-- <p class="text-center text-color-grey text-3 mb-2">CEO & Founder
                                                </p> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="text-decoration-none">
                                        <div class="card custom-card-style-1 box-shadow-4 my-3">
                                            <div class="card-body p-3">
                                                <div class="thumb-info thumb-info-hide-wrapper-bg mb-3 pb-2">
                                                    <div class="thumb-info-wrapper">
                                                        <img src="frontend/img/kostumisasi.png" class="img-fluid"
                                                            alt="John Doe" />
                                                    </div>
                                                </div>
                                                <h3
                                                    class="text-center font-weight-bold text-capitalize line-height-1 text-5 text-color-hover-primary mb-0">
                                                    Kostumisasi</h3>
                                                {{-- <p class="text-center text-color-grey text-3 mb-2">CEO & Founder
                                                </p> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="text-decoration-none">
                                        <div class="card custom-card-style-1 box-shadow-4 my-3">
                                            <div class="card-body p-3">
                                                <div class="thumb-info thumb-info-hide-wrapper-bg mb-3 pb-2">
                                                    <div class="thumb-info-wrapper">
                                                        <img src="frontend/img/design.png" class="img-fluid"
                                                            alt="John Doe" />
                                                    </div>
                                                </div>
                                                <h3
                                                    class="text-center font-weight-bold text-capitalize line-height-1 text-5 text-color-hover-primary mb-0">
                                                    Design Kekinian</h3>
                                                {{-- <p class="text-center text-color-grey text-3 mb-2">CEO & Founder
                                                </p> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="text-decoration-none">
                                        <div class="card custom-card-style-1 box-shadow-4 my-3">
                                            <div class="card-body p-3">
                                                <div class="thumb-info thumb-info-hide-wrapper-bg mb-3 pb-2">
                                                    <div class="thumb-info-wrapper">
                                                        <img src="frontend/img/hemat.jpg" class="img-fluid"
                                                            alt="John Doe" />
                                                    </div>
                                                </div>
                                                <h3
                                                    class="text-center font-weight-bold text-capitalize line-height-1 text-5 text-color-hover-primary mb-0">
                                                    Hemat Biaya</h3>
                                                {{-- <p class="text-center text-color-grey text-3 mb-2">CEO & Founder
                                                </p> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-divider shape-divider-bottom z-index-0" style="height: 260px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 2000 260" preserveAspectRatio="xMinYMin">
                <circle class="custom-svg-fill-color-secondary" fill="#504BFD" opacity="0.2" cx="2007.7" cy="208.3"
                    r="140.7" />
                <circle class="custom-svg-fill-color-secondary" fill="#5349FF" opacity="0.2" cx="1975.78" cy="247.18"
                    r="148.13" />
                <path fill="#FFFFFF" d="M-42,42c21.03-0.71,49.03-1.3,82-1c10.06,0.09,73,0.78,147,7c95.4,8.01,191.25,23.7,278,40
                        c188.62,35.43,247.14,57.2,353,79c102.08,21.02,252.74,44.36,445,46c0,22.68,0,45.35,0,68.03c-433.33,0-866.67,0-1300,0
                        C-38.67,201.35-40.33,121.68-42,42z" />
                <path class="custom-svg-fill-color-secondary" fill="#504BFD"
                    d="M-39,233c18.45-5.57,45.76-13.68,79-23c65.89-18.48,100.28-28.12,140-36c64.67-12.83,115.09-15.35,151-17
                        c72.37-3.33,126.81,0.97,200,7c21.78,1.79,35.05,3.15,147,16c185.79,21.33,205.66,24.08,252,27c85.5,5.38,150.46,4.35,168,4
                        c48.7-0.96,73.47-3.33,246-19c174.43-15.84,185.89-16.75,211-18c76.46-3.81,133.48-3.48,217-3c83.26,0.48,125.58,2.59,166,6
                        c37.33,3.15,68.3,7,90,10c0,28.67,0,57.35,0,86.02c-688.33,0-1376.67,0-2065,0C-37.67,259.68-38.33,246.34-39,233z" />
            </svg>
        </div>
    </section>

    <section id="template" class="section section-with-shape-divider bg-secondary border-0 m-0">
        <div class="container py-2">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-bold line-height-2 text-7 mb-1" style="color: white">Rekomendasi Template
                    </h2>
                </div>
            </div>

            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio"
                data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active"
                        href="#" style="color: white">Show All</a></li>
                <li class="nav-item" data-option-value=".websites"><a class="nav-link text-1 text-uppercase" href="#"
                        style="color: white">Websites</a></li>
                <li class="nav-item" data-option-value=".logos"><a class="nav-link text-1 text-uppercase" href="#"
                        style="color: white">Video</a></li>
                <li class="nav-item" data-option-value=".brands"><a class="nav-link text-1 text-uppercase" href="#"
                        style="color: white">Gambar</a></li>
            </ul>

            <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

                    <div class="col-sm-4 col-lg-3 isotope-item websites">
                        <div class="portfolio-item">
                            <a href="/templateWeb" target="_blank">
                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                    <span class="thumb-info-wrapper gambar border-radius-0">
                                        <img src="frontend/img/web/Asset 14.png"
                                            class="img-fluid border-radius-0 plugin-random-images"
                                            data-plugin-random-images
                                            data-plugin-options="{'imagesListURL': ['frontend/img/web/Asset 14.png', 'frontend/img/web/Asset 14.png'], 'delay': 3000}"
                                            alt="">

                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Template W1</span>
                                            <span class="thumb-info-type">Website</span>
                                        </span>
                                        {{-- <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i
                                                    class="fas fa-plus"></i></span>
                                        </span> --}}
                                    </span>
                                </span>
                            </a>
                            <div class="d-sm-flex align-items-center justify-content-between mt-2 mx-4">
                                <a href=""><button type="button"
                                        class="btn btn-info btn-sm mb-2">Pesan</button></a>
                                <a href=""><button type="button"
                                        class="btn btn-warning btn-sm mb-2">Preview</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-3 isotope-item websites">
                        <div class="portfolio-item">
                            <a href="portfolio-single-wide-slider.html">
                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                    <span class="thumb-info-wrapper gambar border-radius-0">
                                        <img src="frontend/img/web/Asset 13.png"
                                            class="img-fluid border-radius-0 plugin-random-images"
                                            data-plugin-random-images
                                            data-plugin-options="{'imagesListURL': ['frontend/img/web/Asset 13.png', 'frontend/img/web/Asset 13.png'], 'delay': 5000, 'animateIn': 'blurIn', 'animateOut': 'fadeOut'}"
                                            alt="">

                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Template W2</span>
                                            <span class="thumb-info-type">Website</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                            <div class="d-sm-flex align-items-center justify-content-between mt-2 mx-4">
                                <a href=""><button type="button"
                                        class="btn btn-info btn-sm mb-2">Pesan</button></a>
                                <a href=""><button type="button"
                                        class="btn btn-warning btn-sm mb-2">Preview</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-3 isotope-item brands">
                        <div class="portfolio-item">
                            <a href="/templateGambar" target="_blank">
                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                    <span class="thumb-info-wrapper gambar border-radius-0">
                                        <img src="frontend/img/gambar/1a.jpg"
                                            class="img-fluid border-radius-0 plugin-random-images"
                                            data-plugin-random-images
                                            data-plugin-options="{'imagesListURL': ['frontend/img/gambar/1b.jpg'], 'delay': 3000, 'animateIn': 'blurIn', 'animateOut': 'fadeOut'}"
                                            alt="">

                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Template G1</span>
                                            <span class="thumb-info-type">Gambar</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                            <div class="d-sm-flex align-items-center justify-content-between mt-2 mx-4">
                                <a href=""><button type="button"
                                        class="btn btn-info btn-sm mb-2">Pesan</button></a>
                                <a href=""><button type="button"
                                        class="btn btn-warning btn-sm mb-2">Preview</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-3 isotope-item brands">
                        <div class="portfolio-item">
                            <a href="portfolio-single-wide-slider.html">
                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                    <span class="thumb-info-wrapper gambar border-radius-0">
                                        <img src="frontend/img/gambar/3a.jpg"
                                            class="img-fluid border-radius-0 plugin-random-images"
                                            data-plugin-random-images
                                            data-plugin-options="{'imagesListURL': ['frontend/img/gambar/3b.jpg'], 'delay': 3000, 'animateIn': 'blurIn', 'animateOut': 'fadeOut'}"
                                            alt="">

                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Template V1</span>
                                            <span class="thumb-info-type">Gambar</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                            <div class="d-sm-flex align-items-center justify-content-between mt-2 mx-4">
                                <a href=""><button type="button"
                                        class="btn btn-info btn-sm mb-2">Pesan</button></a>
                                <a href=""><button type="button"
                                        class="btn btn-warning btn-sm mb-2">Preview</button></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a data-hash data-hash-offset="95" href="{{ route('template') }}"
                        class="btn btn-light btn-outline btn-rounded font-weight-semibold text-3 btn-px-5 btn-py-2 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"
                        style="color: white">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-4 mb-5">
        <div id="produk" class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <span
                    class="text-color-grey positive-ls-2 font-weight-medium custom-font-size-2 d-block appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">OUR PRODUCT</span>
                <h2 class="font-weight-bold text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="400">Best Price
                    Guarantee</h2>
                {{-- <p class="custom-font-size-2 font-weight-light mb-4 pb-3 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">Vestibulum auctor
                    felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero
                    luctus, molestie nunc. In nibh ipsum, blandit id faucibus ac, finibus vitae dui.</p> --}}
            </div>
        </div>
        <div class="custom-svg-wrapper-3">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 1677 357" data-plugin-float-element-svg="true">
                <g data-plugin-float-element
                    data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                    <circle class="custom-svg-fill-color-secondary" fill="#4F4BFC" cx="36" cy="317" r="17" />
                    <circle fill="#FFFFFF" cx="35.69" cy="317.31" r="15.43" />
                </g>
                <g data-plugin-float-element
                    data-plugin-options="{'startPos': 'bottom', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                    <circle fill="#DFDFDB" cx="103.5" cy="224.5" r="9.5" />
                </g>
                <g data-plugin-float-element
                    data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                    <circle class="custom-svg-fill-color-secondary" fill="#5349FF" cx="1561" cy="31" r="6" />
                </g>
                <g data-plugin-float-element
                    data-plugin-options="{'startPos': 'bottom', 'speed': 0.2, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                    <circle class="custom-svg-fill-color-secondary" fill="#4F4BFC" cx="1628" cy="145.5" r="25" />
                    <circle fill="#FFFFFF" cx="1628.46" cy="145.96" r="22.69" />
                </g>
            </svg>
            <div class="d-flex justify-content-center pricing-table pricing-table-no-gap custom-pricing-table-style-1 mb-4 appear-animation"
                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                <div class="col-lg-4 mx-auto">
                    <div class="plan">
                        <div class="plan-header">
                            <h3>PAKET STANDAR</h3>
                        </div>
                        <div class="plan-price">
                            <span class="price text-md-6"><span class="price-unit text-color-danger">Rp.</span> <del
                                    class="text-color-danger"> 120.000</del></span>
                            <span class="price text-md-8"><span class="price-unit">Rp.</span> 75.000</span>
                            <label class="price-label">1 month</label>
                        </div>
                        <div class="plan-features" style="height: 600px!important">
                            <ul>
                                <li>Exclusive Design</li>
                                <li>File Directory</li>
                                <li>Halaman Kedua Mempelai</li>
                                <li>Halaman Kegiatan/Acara</li>
                                <li>Buku Tamu</li>
                                <li>Halaman Ucapan Tamu</li>
                                <li>Lokasi (GMaps)</li>
                                <li>Bebas Pilih Template</li>
                            </ul>
                        </div>
                        <div class="plan-footer">
                            <a data-bs-toggle="modal" data-bs-target="#defaultModal1"
                                class="btn btn-dark text-3 font-weight-bold border-0 btn-px-5 py-3">PESAN</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mx-auto">
                    <div class="plan plan-featured">
                        <div class="waktu">
                            <div class="plan-header bg-gradient">
                                <h3>PAKET PREMIUM</h3>
                            </div>
                            <div class="plan-price">
                                <span class="price text-md-8"><span class="price-unit text-color-danger">Rp.</span> <del
                                        class="text-color-danger"> 195.000</del></span>
                                <span class="price text-color-primary text-md-10"><span class="price-unit">Rp.</span>
                                    100.000</span>
                                <label class="price-label">1 month</label>
                            </div>
                            <div class="plan-features" style="height: 600px!important">
                                <ul>
                                    <li>Exclusive Design</li>
                                    <li class=" text-color-primary">Subdomain</li>
                                    <li>Halaman Kedua Mempelai</li>
                                    <li>Halaman Kegiatan/Acara</li>
                                    <li class=" text-color-primary">Halaman Cerita Cinta</li>
                                    <li>Buku Tamu</li>
                                    <li>Halaman Ucapan Tamu</li>
                                    <li>Lokasi (GMaps)</li>
                                    <li>Bebas Pilih Template</li>
                                    <li class=" text-color-primary">Foto<strong class=" text-sm-1 text-color-default">
                                            (Syarat dan Ketentuan Berlaku)</strong></li>
                                    <li class=" text-color-primary">Undangan Gambar</li>
                                </ul>
                            </div>
                        </div>
                        <div class="plan-footer">
                            <a data-bs-toggle="modal" data-bs-target="#defaultModal2"
                                class="btn btn-gradient text-3 font-weight-bold btn-px-5 py-3">PESAN</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mx-auto">
                    <div class="plan">
                        <div class="plan-header">
                            <h3 class=" text-color-danger waktu2">PAKET EKSKLUSIF</h3>
                        </div>
                        <div class="plan-price">
                            <span class="price text-md-6"><span class="price-unit text-color-danger">Rp.</span> <del
                                    class="text-color-danger"> 350.000</del></span>
                            <span class="price text-md-8"><span class="price-unit">Rp.</span> 200.000</span>
                            <label class="price-label">2 month</label>
                        </div>
                        <div class="plan-features" style="height: 600px!important">
                            <ul>
                                <li>Exclusive Design</li>
                                <li class=" text-color-primary">Subdomain</li>
                                <li>Halaman Kedua Mempelai</li>
                                <li>Halaman Kegiatan/Acara</li>
                                <li class=" text-color-primary">Halaman Cerita Cinta</li>
                                <li>Buku Tamu</li>
                                <li class=" text-color-primary">QR Qode (Tamu)</li>
                                <li>Halaman Ucapan Tamu</li>
                                <li>Lokasi (GMaps)</li>
                                <li>Bebas Pilih Template</li>
                                <li class=" text-color-primary">Foto <strong class=" text-sm-1 text-color-default">
                                        (Syarat dan Ketentuan Berlaku)</strong></li>
                                <li class=" text-color-primary">Video <strong class=" text-sm-1 text-color-default">
                                        (Syarat dan Ketentuan Berlaku)</strong></li>
                                <li class=" text-color-primary">Undangan Video</li>
                                <li class=" text-color-primary">Undangan Gambar</li>
                            </ul>
                        </div>
                        <div class="plan-footer">
                            <a data-bs-toggle="modal" data-bs-target="#defaultModal3"
                                class="btn btn-dark text-3 font-weight-bold border-0 btn-px-5 py-3">PESAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="testimoni" class="section section-with-shape-divider custom-bg-color-1 border-0 m-0">
        <div class="shape-divider shape-divider-reverse-y" style="height: 385px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 2000 385" preserveAspectRatio="xMinYMin">
                <circle fill="#9DA3F6" cx="57" cy="181" r="161" />
                <circle class="custom-svg-fill-color-secondary" fill="#5349FF" opacity="0.3" cx="75.5" cy="158.5"
                    r="169.5" />
                <path fill="#FFFFFF" opacity="0.5"
                    d="M-35,226c17.66,1.2,43.63,2.44,75,2c83.48-1.18,144.86-13.49,188-22c224.54-44.3,165.12-27.27,310-59
                        c133.16-29.16,128.14-31.45,223-52c206.26-44.68,317.22-68.72,460-68c97.61,0.49,73.58,11.86,293,25c164.22,9.83,250.54,7.83,279,7
                        c102.76-2.99,187.96-12.01,248-20c0-24.69,0-49.37,0-74.06c-694.67,0-1389.33,0-2084,0C-40.33,51.96-37.67,138.98-35,226z" />
                <path fill="#FFFFFF" d="M-37,185c17.21,1.44,42.06,3.17,72,4c81.96,2.26,170.2-3.07,325-30c54.07-9.4,98.99-18.41,221-45
                        c255.1-55.59,223.26-53.86,287-64c57.13-9.09,228.37-36.32,423-18c36.66,3.45,96.62,10.63,187,14c16.19,0.6,75.77,2.66,156,1
                        c90.18-1.87,157.94-7.44,248-15c46.95-3.94,99.2-8.84,156-15c0-12.82,0-25.65,0-38.47c-692.67,0-1385.33,0-2078,0
                        C-39,47.35-38,116.18-37,185z" />
            </svg>
        </div>
        <div class="container position-relative z-index-3 pt-2 pt-md-5 pb-1 pb-md-5 mt-5 mb-5 mb-lg-0 mb-xl-5">
            <div class="row pb-2 mt-5 mb-5">
                <div class="col text-center">
                    <span
                        class="text-color-grey positive-ls-2 font-weight-medium custom-font-size-2 d-block appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">TESTIMONI</span>
                    <h2 class="font-weight-bold text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="400">Apa kata
                        mereka?</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-11 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="600">
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0"
                        data-plugin-options="{'items': 1, 'loop': false}">
                        <div>
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                <div class="testimonial-author mb-0">
                                    <img src="{{ asset('frontend/img/clients/client-1.jpg') }}"
                                        class="img-fluid rounded-circle mb-1" alt="">
                                </div>
                                <blockquote>
                                    <p class="text-color-dark opacity-7 mb-0">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at,
                                        interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Sociis natoque penatibus et magnis dis
                                        parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis
                                        non consectetur sed, pharetra nec ex.</p>
                                </blockquote>
                                <div class="testimonial-author mb-3">
                                    <p><strong class="font-weight-bold">John Smith</strong><span
                                            class="font-weight-normal">CEO & Founder - Okler</span></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                <div class="testimonial-author mb-0">
                                    <img src="{{ asset('frontend/img/clients/client-2.jpg') }}"
                                        class="img-fluid rounded-circle mb-1" alt="">
                                </div>
                                <blockquote>
                                    <p class="text-color-dark opacity-7 mb-0">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at,
                                        interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="font-weight-bold">Jessica Smith</strong><span
                                            class="font-weight-normal">Marketing - Okler</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-divider shape-divider-bottom shape-divider-reverse-y z-index-0" style="height: 260px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 2000 260" preserveAspectRatio="xMinYMin">
                <path fill="#FFFFFF" d="M-42,42c21.03-0.71,49.03-1.3,82-1c10.06,0.09,73,0.78,147,7c95.4,8.01,191.25,23.7,278,40
                        c188.62,35.43,247.14,57.2,353,79c102.08,21.02,252.74,44.36,445,46c0,22.68,0,45.35,0,68.03c-433.33,0-866.67,0-1300,0
                        C-38.67,201.35-40.33,121.68-42,42z" />
                <path fill="#222529"
                    d="M-39,233c18.45-5.57,45.76-13.68,79-23c65.89-18.48,100.28-28.12,140-36c64.67-12.83,115.09-15.35,151-17
                        c72.37-3.33,126.81,0.97,200,7c21.78,1.79,35.05,3.15,147,16c185.79,21.33,205.66,24.08,252,27c85.5,5.38,150.46,4.35,168,4
                        c48.7-0.96,73.47-3.33,246-19c174.43-15.84,185.89-16.75,211-18c76.46-3.81,133.48-3.48,217-3c83.26,0.48,125.58,2.59,166,6
                        c37.33,3.15,68.3,7,90,10c0,28.67,0,57.35,0,86.02c-688.33,0-1376.67,0-2065,0C-37.67,259.68-38.33,246.34-39,233z" />
            </svg>
        </div>
    </section>

</div>


<div class="modal fade" id="defaultModal1" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <h4 class="modal-title w-100 text-center" id="defaultModalLabel1">Default Modal Title</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam
                    posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta
                    tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus.
                    Vestibulum ante ipsum primis in faucibus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam
                    posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta
                    tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus.
                    Vestibulum ante ipsum primis in faucibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="defaultModal2" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel2"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-gradient">
                <h4 class="modal-title w-100 text-center" id="defaultModalLabel2">Default Modal Title</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam
                    posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta
                    tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus.
                    Vestibulum ante ipsum primis in faucibus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam
                    posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta
                    tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus.
                    Vestibulum ante ipsum primis in faucibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="defaultModal3" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel3"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <h4 class="modal-title w-100 text-center" id="defaultModalLabel3">Default Modal Title</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam
                    posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta
                    tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus.
                    Vestibulum ante ipsum primis in faucibus.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam
                    posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta
                    tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus.
                    Vestibulum ante ipsum primis in faucibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<footer id="footer" class="mt-0">
    <div class="container my-4">
        <div class="row py-5">
            <div class="col-lg-2 align-self-center mb-5 mb-lg-0">
                <a href="demo-seo.html">
                    <img src="{{ asset('frontend/img/1.png')}}" class="img-fluid" alt="Demo SEO" width="130" />
                </a>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Contact Details</h4>
                <ul class="list list-unstyled">
                    <li class="d-flex align-items-baseline"><i class="fab fa-whatsapp text-color-primary me-3"></i>
                        <div><a href="https://api.whatsapp.com/send?phone=62895380000239&text=Bismillah, Mohon Maaf, Izin bertanya apakah Apakah benar ini kontak WA dari ITSAFQU?"
                                target="_blank">(+62) 895-3800-00239 (Akh Lutfi)</a></div>
                    </li>
                    <li class="d-flex align-items-baseline"><i class="far fa-envelope text-color-primary me-3"></i>
                        <div><a href="mailto:itsafqubuntal27@gmail.com">itsafqubuntal27@gmail.com</a></div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Navigations</h4>
                <ul class="list list-unstyled">
                    <li class="mb-1">
                        <a class="link-hover-style-1 active" data-hash data-hash-offset="95" href="#home">Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="link-hover-style-1" data-hash data-hash-offset="95" href="#about">Tentang
                            Kami</a>
                    </li>
                    <li class="mb-1">
                        <a class="link-hover-style-1" data-hash data-hash-offset="95" href="#solutions">Kenapa
                            Digital?</a>
                    </li>
                    <li class="mb-1">
                        <a class="link-hover-style-1" data-hash data-hash-offset="95" href="#pricing">Produk</a>
                    </li>
                    <li class="mb-1">
                        <a class="link-hover-style-1" data-hash data-hash-offset="95" href="#reviews">Testimoni</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h4 class="font-weight-normal text-color-light text-5 ls-0 mb-4">Channel</h4>
                <ul class="footer-social-icons social-icons social-icons-clean social-icons-icon-light">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank"
                            title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank"
                            title="Twitter"><i class="fab fa-instagram text-2"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank"
                            title="Linkedin"><i class="fab fa-youtube text-2"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col-auto w-100 text-align">
                    <p>ITSAFQU © Copyright 2021. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection