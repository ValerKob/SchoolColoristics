@extends('layouts.main')

<!-- @section('title', 'Главная страница') -->
@section('title')

@section('content')
<!--================ Start Pages Main =================-->
<section class="oneBlog">
    <div class="container">
        <div class="rowOneBlog">
            <div class="colOneBlog">
                <div class="titleOneBlog">
                    школа <br> колористики <br>
                    <!-- <p class="titleOneBlogText">и окрашивания волос</p> -->
                    <img class="titleOneBlogImg" src="../assets/images/mainpage/text.svg" alt="Школа колористики">
                    <img class="titleOneBlogImg2" src="../assets/images/mainpage/text2.svg" alt="Школа колористики">
                </div>
                <div class=" textOneBlog">

                </div>
                <a class="btn" href="#about"><img class="textOneBlogBtnImg" src="../assets/images/mainpage/btn.svg" alt="Школа колористик"></a>
            </div>
            <div class="colOneBlog">
                <div class="colOneBlogImg">
                    <div class="wrapperOneBlogImages mobule">
                        <img class="oneBlogImages" src="../assets/images/mainpage/oneblog.svg" alt="Школа колористик">
                    </div>
                    <!-- <div class="colOneBlogEllipses"> -->
                    <div class="colOneBlogEllise">
                        <svg xmlns="http://www.w3.org/2000/svg" width="242" height="243" viewBox="0 0 242 243" fill="none">
                            <g filter="url(#filter0_d_54_85)">
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint0_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint1_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint2_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint3_linear_54_85)" />
                            </g>
                            <defs>
                                <filter id="filter0_d_54_85" x="0" y="0" width="242" height="243" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="10" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0 0 0 0 0 0.9 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_54_85" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_54_85" result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>

                    <div class="colTwoBlogEllise">
                        <svg xmlns="http://www.w3.org/2000/svg" width="242" height="243" viewBox="0 0 242 243" fill="none">
                            <g filter="url(#filter0_d_54_85)">
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint0_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint1_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint2_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint3_linear_54_85)" />
                            </g>
                            <defs>
                                <filter id="filter0_d_54_85" x="0" y="0" width="242" height="243" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="10" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0 0 0 0 0 0.9 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_54_85" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_54_85" result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>

                    <div class="colThreeBlogEllise">
                        <svg xmlns="http://www.w3.org/2000/svg" width="242" height="243" viewBox="0 0 242 243" fill="none">
                            <g filter="url(#filter0_d_54_85)">
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint0_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint1_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint2_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint3_linear_54_85)" />
                            </g>
                            <defs>
                                <filter id="filter0_d_54_85" x="0" y="0" width="242" height="243" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="10" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0 0 0 0 0 0.9 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_54_85" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_54_85" result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>

                    <div class="colFourBlogEllise">
                        <svg xmlns="http://www.w3.org/2000/svg" width="242" height="243" viewBox="0 0 242 243" fill="none">
                            <g filter="url(#filter0_d_54_85)">
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint0_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint1_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint2_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint3_linear_54_85)" />
                            </g>
                            <defs>
                                <filter id="filter0_d_54_85" x="0" y="0" width="242" height="243" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="10" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0 0 0 0 0 0.9 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_54_85" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_54_85" result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>

                    <div class="colFiveBlogEllise">
                        <svg xmlns="http://www.w3.org/2000/svg" width="242" height="243" viewBox="0 0 242 243" fill="none">
                            <g filter="url(#filter0_d_54_85)">
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint0_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint1_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint2_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint3_linear_54_85)" />
                            </g>
                            <defs>
                                <filter id="filter0_d_54_85" x="0" y="0" width="242" height="243" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="10" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0 0 0 0 0 0.9 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_54_85" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_54_85" result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>

                    <div class="colSixBlogEllise">
                        <svg xmlns="http://www.w3.org/2000/svg" width="242" height="243" viewBox="0 0 242 243" fill="none">
                            <g filter="url(#filter0_d_54_85)">
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint0_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint1_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint2_linear_54_85)" />
                                <path d="M222 121.5C222 177.557 176.781 223 121 223C65.2192 223 20 177.557 20 121.5C20 65.4431 65.2192 20 121 20C176.781 20 222 65.4431 222 121.5Z" fill="url(#paint3_linear_54_85)" />
                            </g>
                            <defs>
                                <filter id="filter0_d_54_85" x="0" y="0" width="242" height="243" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset />
                                    <feGaussianBlur stdDeviation="10" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0 0 0 0 0 0.9 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_54_85" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_54_85" result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_54_85" x1="49.2476" y1="121.5" x2="158.684" y2="126.139" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF4040" />
                                    <stop offset="1" stop-color="#A20BD8" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="twoBlog" id="forWhom">
    <div class="container">
        <div class="ellipseStat3Text mobule">
            <img src="./assets/images/mainpage/statetext.svg" alt="Школа колористик"> <br>
            ДЛЯ ТЕХ, КТО:
        </div>
        <div class="ellipseStat1">
            <img class="ellipseStatImg" src="./assets/images/mainpage/stateone.svg" alt="Школа колористик">
            <div class="ellipseStatText">
                Давно <b> хотел, но не решался освоить парикмахерское</b> искусство
            </div>
        </div>

        <div class="colEllipseStat2">
            <div class="ellipseStat2">
                <div>
                    <img class="ellipseStatImg" src="./assets/images/mainpage/statetwo.svg" alt="Школа колористик">
                    <div class="ellipseStatText">
                        Хочешь <b> красить близких не выходя</b> из дома
                    </div>
                </div>
            </div>

            <div class="ellipseStat2">
                <div>
                    <img class="ellipseStatImg" src="./assets/images/mainpage/statethree.svg" alt="Школа колористик">
                    <div class="ellipseStatText">
                        Устал <b> от рутины и хочет</b> творчества
                    </div>
                </div>
            </div>
        </div>

        <div class="ellipseStat3Text">
            <img src="./assets/images/mainpage/statetext.svg" alt="Школа колористик"> <br>
            ДЛЯ ТЕХ, КТО:
        </div>


        <div class="colEllipseStat4">
            <div class="ellipseStat4">
                <div>
                    <img class="ellipseStatImg" src="./assets/images/mainpage/statefour.svg" alt="Школа колористик">
                    <div class="ellipseStatText">
                        Ищет <b> дополнительный <br> источник</b> дохода
                    </div>
                </div>
            </div>

            <div class="ellipseStat4">
                <div>
                    <img class="ellipseStatImg" src="./assets/images/mainpage/statefive.svg" alt="Школа колористик">
                    <div class="ellipseStatText">
                        Хочет <b> заниматься любимым делом и зарабатывать на этом </b> деньги
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="threeBlog" id="about">
    <div class="ellipseWhite1">
        <svg xmlns="http://www.w3.org/2000/svg" width="886" height="900" viewBox="0 0 886 900" fill="none">
            <g filter="url(#filter0_d_71_13)">
                <path d="M635.542 450C635.542 560.457 549.236 650 442.771 650C336.307 650 250 560.457 250 450C250 339.543 336.307 250 442.771 250C549.236 250 635.542 339.543 635.542 450Z" fill="white" fill-opacity="0.26" shape-rendering="crispEdges" />
            </g>
            <defs>
                <filter id="filter0_d_71_13" x="0" y="0" width="885.542" height="900" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                    <feOffset />
                    <feGaussianBlur stdDeviation="125" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_71_13" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_71_13" result="shape" />
                </filter>
            </defs>
        </svg>
    </div>
    <div class="ellipseWhite2">
        <svg xmlns="http://www.w3.org/2000/svg" width="886" height="900" viewBox="0 0 886 900" fill="none">
            <g filter="url(#filter0_d_71_13)">
                <path d="M635.542 450C635.542 560.457 549.236 650 442.771 650C336.307 650 250 560.457 250 450C250 339.543 336.307 250 442.771 250C549.236 250 635.542 339.543 635.542 450Z" fill="white" fill-opacity="0.26" shape-rendering="crispEdges" />
            </g>
            <defs>
                <filter id="filter0_d_71_13" x="0" y="0" width="885.542" height="900" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                    <feOffset />
                    <feGaussianBlur stdDeviation="125" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_71_13" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_71_13" result="shape" />
                </filter>
            </defs>
        </svg>
    </div>
    <div class="container">
        <div class="wrapperThreeBlog">
            <div class="ellipseCenter"></div>
            <div class="aboutText"><img src="./assets/images/mainpage/abouttitle.svg" alt="Школа колористик"></div>
            <div class="aboutContent">
                <b> Наша </b> команда всегда стремится совершенствовать старые подходы в мире колористики волос. Наши преподаватели всегда развиваются и обучаются у самых топовых стилистов по всесму миру!
                <br>
                <br>
                <b>Мы не типичные курсы парикмахеров,</b> мы не учим по учебнику от 20 века.
                <br>
                <br>
                <b> Наши преподаватели – это практикующие, успешные мастера</b> своего дела. Которые прошли и огонь и воду и на собственном , бесценном опыте. Смогут вам помочь в вашей личной реализации и становлении профессионалом!
            </div>

            <div class="aboutContent2">
                Вы получите ту базу, которая необходима исходя из личной практики мастеров, не по стандартам колледжей, вы получите именно те знания, которые помогут положить <b> качественное основание в начале вашей карьеры.</b>
            </div>
        </div>
    </div>
</section>
<section class="foutBlog" id="curse">
    <div class="container">
        <div class="foutBlogTitle"><img class="foutBlogTitleImg" src="./assets/images/mainpage/title_course.svg" alt="Школа колористик"></div>
        <div class="rowFoutBlog">


            <div class="colFoutBlog" id="colFoutBlogThree">
                <div class="colFoutBlogHeader" id="colFoutBlogThreeWrap">
                    <div class="colFoutBlogTitle">
                        Колорист с 0 (длительность курса 1 месяц)
                    </div>
                    <div class="colFoutBlogPlus" id="colFoutBlogPlusThree">
                        <img src="./assets/images/mainpage/plus.svg" alt="Школа колористик">
                    </div>
                </div>
                <div class="wrapperColFoutBlogContent">
                    <div class="colFoutBlogContent">
                        <div class="foutBlogContentCol">
                            <div class="foutBlogContentColTitle">Включает в себя:</div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Изучение основ цветоведения</div>
                            </div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Работа с палитрой</div>
                            </div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Принципы взаимодействия
                                    красителя и волоса</div>
                            </div>

                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Решения колористических
                                    задач</div>
                            </div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Знакомства с техниками
                                    окрашивания</div>
                            </div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Виды красителей и их
                                    особенности</div>
                            </div>
                        </div>

                        <div class="foutBlogContentCol">
                            <div class="foutBlogContentColTitle">Уровень включает в себя:</div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Базовые знания по
                                    колористике волос </div>
                            </div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Длительность 3 дня</div>
                            </div>
                        </div>


                        <div class="foutBlogContentCol">
                            <div class="foutBlogContentColTitle">Результат:</div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Возможность работать
                                    колористом в салоне или на себя</div>
                            </div>

                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Возможность зарабатывать
                                    от 100.000 рублей в месяц </div>
                            </div>
                        </div>
                    </div>

                    <div class="priceFoutBlogContent">
                        <div class="wrapperPriceFoutBlogContent">
                            <div class="priceFoutBlogContentActive one"><img class="priceFoutBlogContentActiveImg" src="./assets/images/mainpage/price/onePrice.svg" alt="Школа колористик"></div>
                            <!-- <div class="priceFoutBlogContentActiveText">Тариф с обратной связью</div> -->
                        </div>
                        <div class="wrapperPriceFoutBlogContent">
                            <div class="priceFoutBlogContentActive"><img class="priceFoutBlogContentActiveImg" src="./assets/images/mainpage/price/btn.svg" alt="Школа колористик"></div>
                            <!-- <div class="priceFoutBlogContentActiveText"> <b>Тариф без обратной связи </b> 5 600 руб.</div> -->
                        </div>
                    </div>
                </div>
            </div>


            <div class="colFoutBlog" id="colFoutBlogTwo">
                <div class="colFoutBlogHeader" id="colFoutBlogTwoWrap">
                    <div class="colFoutBlogTitle">
                        НЕ ТУПОЙ Колорист
                    </div>
                    <div class="colFoutBlogPlus" id="colFoutBlogPlusTwo">
                        <img src="./assets/images/mainpage/plus.svg" alt="Школа колористик">
                    </div>
                </div>
                <div class="wrapperColFoutBlogContent">
                    <div class="colFoutBlogContent">
                        <div class="foutBlogContentCol">
                            <div class="foutBlogContentColTitle">Колористика:</div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Типы красителей</div>
                            </div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Структура волос</div>
                            </div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Фон осветления /
                                    Нейтрализация </div>
                            </div>
                        </div>

                        <div class="foutBlogContentCol">
                            <div class="foutBlogContentColTitle">Уровень включает в себя:</div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Базовые знания по
                                    колористике волос </div>
                            </div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Длительность 3 дня</div>
                            </div>
                        </div>


                        <div class="foutBlogContentCol">
                            <div class="foutBlogContentColTitle">Результат:</div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Поймёте как работает краситель и узнаете правила работы с волосами. </div>
                            </div>
                        </div>
                    </div>

                    <div class="priceFoutBlogContent">
                        <div class="wrapperPriceFoutBlogContent">
                            <!-- <div class="priceFoutBlogContentActive one"><img class="priceFoutBlogContentActiveImg" src="./assets/images/mainpage/price/one.svg" alt="Школа колористик"></div> -->
                            <!-- <div class="priceFoutBlogContentActiveText">Тариф с обратной связью</div> -->
                        </div>
                        <div class="wrapperPriceFoutBlogContent">
                            <div class="priceFoutBlogContentActive"><img class="priceFoutBlogContentActiveImg" src="./assets/images/mainpage/price/btnDisapled.svg" alt="Школа колористик"></div>
                            <!-- <div class="priceFoutBlogContentActiveText"> <b>Тариф без обратной связи </b> 5 600 руб.</div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="colFoutBlog" id="colFoutBlogOne">
                <div class="colFoutBlogHeader" id="colFoutBlogOneWrap">
                    <div class="colFoutBlogTitle">
                        Из грязи в князи
                    </div>
                    <div class="colFoutBlogPlus" id="colFoutBlogPlusOne">
                        <img src="./assets/images/mainpage/plus.svg" alt="Школа колористик">
                    </div>
                </div>
                <div class="wrapperColFoutBlogContent">
                    <div class="colFoutBlogContent">
                        <div class="foutBlogContentCol">
                            <div class="foutBlogContentColTitle">Колористика:</div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Типы красителей</div>
                            </div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Структура волос</div>
                            </div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Фон осветления /
                                    Нейтрализация </div>
                            </div>
                        </div>

                        <div class="foutBlogContentCol">
                            <div class="foutBlogContentColTitle">Уровень включает в себя:</div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Базовые знания по
                                    колористике волос </div>
                            </div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Длительность 3 дня</div>
                            </div>
                        </div>


                        <div class="foutBlogContentCol">
                            <div class="foutBlogContentColTitle">Результат:</div>
                            <div class="foutBlogContentColType">
                                <img class="foutBlogContentColTypeImg" src="./assets/images/mainpage/good.svg" alt="Школа колористик">
                                <div class="foutBlogContentColTypeText">Поймёте как работает краситель и узнаете правила работы с волосами. </div>
                            </div>
                        </div>
                    </div>

                    <div class="priceFoutBlogContent">
                        <div class="wrapperPriceFoutBlogContent">
                            <!-- <div class="priceFoutBlogContentActive one"><img class="priceFoutBlogContentActiveImg" src="./assets/images/mainpage/price/onePrice.svg" alt="Школа колористик"></div> -->
                            <!-- <div class="priceFoutBlogContentActiveText">Тариф с обратной связью</div> -->
                        </div>
                        <div class="wrapperPriceFoutBlogContent">
                            <div class="priceFoutBlogContentActive"><img class="priceFoutBlogContentActiveImg" src="./assets/images/mainpage/price/btnDisapled.svg" alt="Школа колористик"></div>
                            <!-- <div class="priceFoutBlogContentActiveText"> <b>Тариф без обратной связи </b> 40 000 руб.</div> -->
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="fiveBlog" id="result">
    <div class="container">
        <div class="fiveBlogTitle">
            <img class="fiveBlogTitleImg" src="./assets/images/mainpage/fiveTitle.svg" alt="Школа колористик">
        </div>
        <div class="wrapperFiveBlog">

            <!-- <div class="leftActBlogTitle">
                        <img class="leftActBlogImg" src="./assets/images/mainpage/carousel/carousel1.svg" alt="Школа колористик">
                        <div class="leftActBlogTitleType">Курс “Стилис”</div>
                        <div class="leftActBlogText">Радужная покраска</div>
                    </div>
                    <div class="rightActBlogTitle">

                    </div> -->

            <div class="carousel">
                <div class="carousel--wrap">
                    <div class="carousel--item">
                        <div class="wrapperCarousel--item">
                            <div class="leftActBlog">
                                <img class="leftActBlogImg" src="./assets/images/mainpage/carousel/carousel1.svg" alt="Школа колористик">
                                <div class="leftActBlogTitleType">Курс “Стилис”</div>
                                <div class="leftActBlogText">Радужная покраска</div>
                            </div>
                            <div class="rightActBlog">
                                <div class="rightActBlogTitle">Анна Евгеньевна</div>
                                <div class="rightActBlogStare">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                </div>
                                <div class="rightActBlogText">
                                    <h1>
                                        <p>Моё лучшее решение в 2021 году было </p>
                                        <p> пойти учиться парикмахерскому искусству.</p>
                                        <p>Пришла я туда совершенно ничего не зная о </p>
                                        <p>профессии, даже не умела ножницы</p>
                                        <p>держать, а после обучения смогла стричь</p>
                                        <p>самые коммерческие стрижки, как женские,</p>
                                        <p>так и мужские. Четкие инструкции,</p>
                                        <p>поддержка преподавателей дали</p>
                                        <p>уверенность в том что я делаю. И теперь я</p>
                                        <p>понимаю, что зная базу, ты можешь стричь</p>
                                        <p>любые формы, осуществляя любое желание</p>
                                        <p>клиента, а 100% базу я получила, Спасибо</p>
                                        <p>Вам!</p>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel--item">
                        <div class="wrapperCarousel--item">
                            <div class="leftActBlog">
                                <img class="leftActBlogImg" src="./assets/images/mainpage/carousel/carousel1.svg" alt="Школа колористик">
                                <div class="leftActBlogTitleType">Курс “Стилис”</div>
                                <div class="leftActBlogText">Радужная покраска</div>
                            </div>
                            <div class="rightActBlog">
                                <div class="rightActBlogTitle">Анна Евгеньевна</div>
                                <div class="rightActBlogStare">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                </div>
                                <div class="rightActBlogText">
                                    <h1>
                                        <p>Моё лучшее решение в 2021 году было </p>
                                        <p> пойти учиться парикмахерскому искусству.</p>
                                        <p>Пришла я туда совершенно ничего не зная о </p>
                                        <p>профессии, даже не умела ножницы</p>
                                        <p>держать, а после обучения смогла стричь</p>
                                        <p>самые коммерческие стрижки, как женские,</p>
                                        <p>так и мужские. Четкие инструкции,</p>
                                        <p>поддержка преподавателей дали</p>
                                        <p>уверенность в том что я делаю. И теперь я</p>
                                        <p>понимаю, что зная базу, ты можешь стричь</p>
                                        <p>любые формы, осуществляя любое желание</p>
                                        <p>клиента, а 100% базу я получила, Спасибо</p>
                                        <p>Вам!</p>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel--item">
                        <div class="wrapperCarousel--item">
                            <div class="leftActBlog">
                                <img class="leftActBlogImg" src="./assets/images/mainpage/carousel/carousel1.svg" alt="Школа колористик">
                                <div class="leftActBlogTitleType">Курс “Стилис”</div>
                                <div class="leftActBlogText">Радужная покраска</div>
                            </div>
                            <div class="rightActBlog">
                                <div class="rightActBlogTitle">Анна Евгеньевна</div>
                                <div class="rightActBlogStare">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                </div>
                                <div class="rightActBlogText">
                                    <h1>
                                        <p>Моё лучшее решение в 2021 году было </p>
                                        <p> пойти учиться парикмахерскому искусству.</p>
                                        <p>Пришла я туда совершенно ничего не зная о </p>
                                        <p>профессии, даже не умела ножницы</p>
                                        <p>держать, а после обучения смогла стричь</p>
                                        <p>самые коммерческие стрижки, как женские,</p>
                                        <p>так и мужские. Четкие инструкции,</p>
                                        <p>поддержка преподавателей дали</p>
                                        <p>уверенность в том что я делаю. И теперь я</p>
                                        <p>понимаю, что зная базу, ты можешь стричь</p>
                                        <p>любые формы, осуществляя любое желание</p>
                                        <p>клиента, а 100% базу я получила, Спасибо</p>
                                        <p>Вам!</p>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel--item">
                        <div class="wrapperCarousel--item">
                            <div class="leftActBlog">
                                <img class="leftActBlogImg" src="./assets/images/mainpage/carousel/carousel1.svg" alt="Школа колористик">
                                <div class="leftActBlogTitleType">Курс “Стилис”</div>
                                <div class="leftActBlogText">Радужная покраска</div>
                            </div>
                            <div class="rightActBlog">
                                <div class="rightActBlogTitle">Анна Евгеньевна</div>
                                <div class="rightActBlogStare">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                </div>
                                <div class="rightActBlogText">
                                    <h1>
                                        <p>Моё лучшее решение в 2021 году было </p>
                                        <p> пойти учиться парикмахерскому искусству.</p>
                                        <p>Пришла я туда совершенно ничего не зная о </p>
                                        <p>профессии, даже не умела ножницы</p>
                                        <p>держать, а после обучения смогла стричь</p>
                                        <p>самые коммерческие стрижки, как женские,</p>
                                        <p>так и мужские. Четкие инструкции,</p>
                                        <p>поддержка преподавателей дали</p>
                                        <p>уверенность в том что я делаю. И теперь я</p>
                                        <p>понимаю, что зная базу, ты можешь стричь</p>
                                        <p>любые формы, осуществляя любое желание</p>
                                        <p>клиента, а 100% базу я получила, Спасибо</p>
                                        <p>Вам!</p>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel--item">
                        <div class="wrapperCarousel--item">
                            <div class="leftActBlog">
                                <img class="leftActBlogImg" src="./assets/images/mainpage/carousel/carousel1.svg" alt="Школа колористик">
                                <div class="leftActBlogTitleType">Курс “Стилис”</div>
                                <div class="leftActBlogText">Радужная покраска</div>
                            </div>
                            <div class="rightActBlog">
                                <div class="rightActBlogTitle">Анна Евгеньевна</div>
                                <div class="rightActBlogStare">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                </div>
                                <div class="rightActBlogText">
                                    <h1>
                                        <p>Моё лучшее решение в 2021 году было </p>
                                        <p> пойти учиться парикмахерскому искусству.</p>
                                        <p>Пришла я туда совершенно ничего не зная о </p>
                                        <p>профессии, даже не умела ножницы</p>
                                        <p>держать, а после обучения смогла стричь</p>
                                        <p>самые коммерческие стрижки, как женские,</p>
                                        <p>так и мужские. Четкие инструкции,</p>
                                        <p>поддержка преподавателей дали</p>
                                        <p>уверенность в том что я делаю. И теперь я</p>
                                        <p>понимаю, что зная базу, ты можешь стричь</p>
                                        <p>любые формы, осуществляя любое желание</p>
                                        <p>клиента, а 100% базу я получила, Спасибо</p>
                                        <p>Вам!</p>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel--item">
                        <div class="wrapperCarousel--item">
                            <div class="leftActBlog">
                                <img class="leftActBlogImg" src="./assets/images/mainpage/carousel/carousel1.svg" alt="Школа колористик">
                                <div class="leftActBlogTitleType">Курс “Стилис”</div>
                                <div class="leftActBlogText">Радужная покраска</div>
                            </div>
                            <div class="rightActBlog">
                                <div class="rightActBlogTitle">Анна Евгеньевна</div>
                                <div class="rightActBlogStare">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                </div>
                                <div class="rightActBlogText">
                                    <h1>
                                        <p>Моё лучшее решение в 2021 году было </p>
                                        <p> пойти учиться парикмахерскому искусству.</p>
                                        <p>Пришла я туда совершенно ничего не зная о </p>
                                        <p>профессии, даже не умела ножницы</p>
                                        <p>держать, а после обучения смогла стричь</p>
                                        <p>самые коммерческие стрижки, как женские,</p>
                                        <p>так и мужские. Четкие инструкции,</p>
                                        <p>поддержка преподавателей дали</p>
                                        <p>уверенность в том что я делаю. И теперь я</p>
                                        <p>понимаю, что зная базу, ты можешь стричь</p>
                                        <p>любые формы, осуществляя любое желание</p>
                                        <p>клиента, а 100% базу я получила, Спасибо</p>
                                        <p>Вам!</p>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel--item">
                        <div class="wrapperCarousel--item">
                            <div class="leftActBlog">
                                <img class="leftActBlogImg" src="./assets/images/mainpage/carousel/carousel1.svg" alt="Школа колористик">
                                <div class="leftActBlogTitleType">Курс “Стилис”</div>
                                <div class="leftActBlogText">Радужная покраска</div>
                            </div>
                            <div class="rightActBlog">
                                <div class="rightActBlogTitle">Анна Евгеньевна</div>
                                <div class="rightActBlogStare">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                </div>
                                <div class="rightActBlogText">
                                    <h1>
                                        <p>Моё лучшее решение в 2021 году было </p>
                                        <p> пойти учиться парикмахерскому искусству.</p>
                                        <p>Пришла я туда совершенно ничего не зная о </p>
                                        <p>профессии, даже не умела ножницы</p>
                                        <p>держать, а после обучения смогла стричь</p>
                                        <p>самые коммерческие стрижки, как женские,</p>
                                        <p>так и мужские. Четкие инструкции,</p>
                                        <p>поддержка преподавателей дали</p>
                                        <p>уверенность в том что я делаю. И теперь я</p>
                                        <p>понимаю, что зная базу, ты можешь стричь</p>
                                        <p>любые формы, осуществляя любое желание</p>
                                        <p>клиента, а 100% базу я получила, Спасибо</p>
                                        <p>Вам!</p>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel--item" style="opacity: 0;">
                        <div class="wrapperCarousel--item">
                            <div class="leftActBlog">
                                <img class="leftActBlogImg" src="./assets/images/mainpage/carousel/carousel1.svg" alt="Школа колористик">
                                <div class="leftActBlogTitleType">Курс “Стилис”</div>
                                <div class="leftActBlogText">Радужная покраска</div>
                            </div>
                            <div class="rightActBlog">
                                <div class="rightActBlogTitle">Анна Евгеньевна</div>
                                <div class="rightActBlogStare">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                    <img class="rightActBlogStareImg" src="./assets/images/mainpage/carousel/star.svg" alt="Школа колористик">
                                </div>
                                <div class="rightActBlogText">
                                    <h1>
                                        <p>Моё лучшее решение в 2021 году было </p>
                                        <p> пойти учиться парикмахерскому искусству.</p>
                                        <p>Пришла я туда совершенно ничего не зная о </p>
                                        <p>профессии, даже не умела ножницы</p>
                                        <p>держать, а после обучения смогла стричь</p>
                                        <p>самые коммерческие стрижки, как женские,</p>
                                        <p>так и мужские. Четкие инструкции,</p>
                                        <p>поддержка преподавателей дали</p>
                                        <p>уверенность в том что я делаю. И теперь я</p>
                                        <p>понимаю, что зная базу, ты можешь стричь</p>
                                        <p>любые формы, осуществляя любое желание</p>
                                        <p>клиента, а 100% базу я получила, Спасибо</p>
                                        <p>Вам!</p>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel--progress" style="opacity: 0;">
                    <div class="carousel--progress-bar"></div>
                </div>
            </div>
        </div>
        <div class="fiveBlogInfo" style="display: none;">
            <div class="fiveBlogInfoTitle">ИНФОРМАЦИЯ</div>
            <div class="fiveBlogInfoTags">
                <div class="fiveBlogInfoTag" id="fiveBlogTagsText1">
                    <div class="fiveBlogInfoTagContent">
                        <div class="fiveBlogInfoTagTitle">Можно заниматься с телефона или только с компьютера?</div>
                        <div class="fiveBlogInfoTagClose" id="fiveBlogTags1"><img class="fiveBlogInfoTagImg" src="./assets/images/mainpage/tagsplus.svg" alt="Школа колористик"></div>
                    </div>
                    <div class="fiveBlogInfoTagText">
                        Всем, кто хочет освоить новую профессию и зарабатывать, занимаясь любимым делом. <br>
                        Тем, кто хочет поднять квалификацию.<br>
                        Тем, кто хочет работать мастером в салоне красоты или открыть собственную студию.<br>
                        Тем, кто любит свободный график, и кто любит творчество.<br>
                        Тем, кто хочет выполнять изученные процедуры на себе и своих друзьях и подругах.<br>
                    </div>
                </div>

                <div class="fiveBlogInfoTag" id="fiveBlogTagsText2">
                    <div class="fiveBlogInfoTagContent">
                        <div class="fiveBlogInfoTagTitle">Как проходит обучение?</div>
                        <div class="fiveBlogInfoTagClose" id="fiveBlogTags2"><img class="fiveBlogInfoTagImg" src="./assets/images/mainpage/tagsplus.svg" alt="Школа колористик"></div>
                    </div>
                    <div class="fiveBlogInfoTagText">
                        Всем, кто хочет освоить новую профессию и зарабатывать, занимаясь любимым делом. <br>
                        Тем, кто хочет поднять квалификацию.<br>
                        Тем, кто хочет работать мастером в салоне красоты или открыть собственную студию.<br>
                        Тем, кто любит свободный график, и кто любит творчество.<br>
                        Тем, кто хочет выполнять изученные процедуры на себе и своих друзьях и подругах.<br>
                    </div>
                </div>

                <div class="fiveBlogInfoTag" id="fiveBlogTagsText3">
                    <div class="fiveBlogInfoTagContent">
                        <div class="fiveBlogInfoTagTitle">Кому подойдёт обучение?</div>
                        <div class="fiveBlogInfoTagClose" id="fiveBlogTags3"><img class="fiveBlogInfoTagImg" src="./assets/images/mainpage/tagsplus.svg" alt="Школа колористик"></div>
                    </div>
                    <div class="fiveBlogInfoTagText">
                        Всем, кто хочет освоить новую профессию и зарабатывать, занимаясь любимым делом. <br>
                        Тем, кто хочет поднять квалификацию.<br>
                        Тем, кто хочет работать мастером в салоне красоты или открыть собственную студию.<br>
                        Тем, кто любит свободный график, и кто любит творчество.<br>
                        Тем, кто хочет выполнять изученные процедуры на себе и своих друзьях и подругах.<br>
                    </div>
                </div>

                <div class="fiveBlogInfoTag" id="fiveBlogTagsText4">
                    <div class="fiveBlogInfoTagContent">
                        <div class="fiveBlogInfoTagTitle">Чем интересен наш курс!</div>
                        <div class="fiveBlogInfoTagClose" id="fiveBlogTags4"><img class="fiveBlogInfoTagImg" src="./assets/images/mainpage/tagsplus.svg" alt="Школа колористик"></div>
                    </div>
                    <div class="fiveBlogInfoTagText">
                        Всем, кто хочет освоить новую профессию и зарабатывать, занимаясь любимым делом. <br>
                        Тем, кто хочет поднять квалификацию.<br>
                        Тем, кто хочет работать мастером в салоне красоты или открыть собственную студию.<br>
                        Тем, кто любит свободный график, и кто любит творчество.<br>
                        Тем, кто хочет выполнять изученные процедуры на себе и своих друзьях и подругах.<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Pages Main =================-->
@endsection('content')