<footer class="relative w-full">
    <!-- * star -->
    <div class="bg-stars stars--small"></div>
    <div class="bg-stars stars--medium"></div>
    <div class="bg-stars stars--large"></div>

    <div class="gap-4 md:gap-2 grid grid-cols-1 md:grid-cols-3 grid-rows-3 md:grid-rows-1 px-4 py-25 w-full h-full">
        <div class="flex flex-col justify-center items-center">
            <div class="group relative flex flex-col justify-between items-start gap-2 bg-neutral-900 hover:shadow-xl p-4 rounded-lg w-full max-w-[370px] h-56 hover:-translate-y-2 duration-500">
                <div
                    class="right-0 bottom-0 absolute bg-transparent shadow-md rounded-lg w-1/3 group-hover:-translate-y-2 group-hover:-translate-x-2 duration-700">
                    <img src="../assets/images/img/deku.png" alt="deku">
                </div>

                <div class="">
                    <h2 class="mb-2 font-bold text-normal text-lg">Bao Minh</h2>
                    <p class="text-note text-sm line-clamp-3">
                        hi i am a student and i am learning web development and i am a beginner Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium libero eos debitis soluta rerum at explicabo repellat magni vitae! Odio, cumque sequi? Perferendis consequatur porro provident itaque beatae! Facilis, ducimus.
                        Iusto assumenda explicabo eaque reprehenderit. Facilis nostrum molestias cupiditate illum magnam aspernatur nemo, animi quos nesciunt similique rerum quaerat fugiat amet corrupti consectetur velit alias error possimus accusantium! Voluptatem, dolorum.
                    </p>
                </div>
                <button
                    class="bg-gray-800 hover:bg-gray-700 mt-6 p-2 px-6 rounded text-gray-100">
                    Explore
                </button>
            </div>

        </div>

        <div class="flex flex-col justify-center items-center">
            <div class="flex justify-center items-center bg-neutral-900 rounded-lg w-full max-w-[370px] h-full max-h-56 transition-all duration-300 ease-in-out">
                <!-- From Uiverse.io by Ashon-G -->
                <!-- <svg
                    viewBox="0 0 128 128"
                    height="128"
                    width="128"
                    class="right-0 bottom-0 z-10 absolute m-auto w-[100px] h-[100px]">
                    <defs>
                        <filter id="star-glow">
                            <feGaussianBlur
                                stdDeviation="1.5"
                                result="coloredBlur"></feGaussianBlur>
                            <feMerge>
                                <feMergeNode in="coloredBlur"></feMergeNode>
                                <feMergeNode in="SourceGraphic"></feMergeNode>
                            </feMerge>
                        </filter>
                        <linearGradient y2="1" x2="0" y1="0" x1="0" id="star-grad">
                            <stop stop-color="#000" offset="0%"></stop>
                            <stop stop-color="#fff" offset="100%"></stop>
                        </linearGradient>
                        <mask id="star-mask">
                            <rect
                                fill="url(#star-grad)"
                                height="128"
                                width="128"
                                y="0"
                                x="0"></rect>
                        </mask>
                    </defs>
                    <g
                        stroke-width="2"
                        stroke-linejoin="round"
                        stroke-linecap="round"
                        fill="none">
                        <g stroke="hsla(223,90%,50%,0.2)">
                            <polygon
                                points="64 49 66.322 58.992 71.071 56.929 69.008 61.678 79 64 69.008 66.322 71.071 71.071 66.322 69.008 64 79 61.678 69.008 56.929 71.071 58.992 66.322 49 64 58.992 61.678 56.929 56.929 61.678 58.992 64 49"></polygon>
                            <polygon
                                points="64 34 68.644 53.983 78.142 49.858 74.017 59.356 94 64 74.017 68.644 78.142 78.142 68.644 74.017 64 94 59.356 74.017 49.858 78.142 53.983 68.644 34 64 53.983 59.356 49.858 49.858 59.356 53.983 64 34"></polygon>
                            <polygon
                                points="64 19 70.966 48.975 85.213 42.787 79.025 57.034 109 64 79.025 70.966 85.213 85.213 70.966 79.025 64 109 57.034 79.025 42.787 85.213 48.975 70.966 19 64 48.975 57.034 42.787 42.787 57.034 48.975 64 19"></polygon>
                            <polygon
                                points="64 4 73.287 43.966 92.284 35.716 84.034 54.713 124 64 84.034 73.287 92.284 92.284 73.287 84.034 64 124 54.713 84.034 35.716 92.284 43.966 73.287 4 64 43.966 54.713 35.716 35.716 54.713 43.966 64 4"></polygon>
                        </g>
                        <g filter="url(#star-glow)">
                            <g stroke="hsl(223,90%,50%)">
                                <polygon
                                    points="64 49 66.322 58.992 71.071 56.929 69.008 61.678 79 64 69.008 66.322 71.071 71.071 66.322 69.008 64 79 61.678 69.008 56.929 71.071 58.992 66.322 49 64 58.992 61.678 56.929 56.929 61.678 58.992 64 49"
                                    stroke-dasharray="31 93"
                                    class="star__stroke"></polygon>
                                <polygon
                                    points="64 34 68.644 53.983 78.142 49.858 74.017 59.356 94 64 74.017 68.644 78.142 78.142 68.644 74.017 64 94 59.356 74.017 49.858 78.142 53.983 68.644 34 64 53.983 59.356 49.858 49.858 59.356 53.983 64 34"
                                    stroke-dasharray="62 186"
                                    class="star__stroke--2 star__stroke"></polygon>
                                <polygon
                                    points="64 19 70.966 48.975 85.213 42.787 79.025 57.034 109 64 79.025 70.966 85.213 85.213 70.966 79.025 64 109 57.034 79.025 42.787 85.213 48.975 70.966 19 64 48.975 57.034 42.787 42.787 57.034 48.975 64 19"
                                    stroke-dasharray="93 279"
                                    class="star__stroke--3 star__stroke"></polygon>
                                <polygon
                                    points="64 4 73.287 43.966 92.284 35.716 84.034 54.713 124 64 84.034 73.287 92.284 92.284 73.287 84.034 64 124 54.713 84.034 35.716 92.284 43.966 73.287 4 64 43.966 54.713 35.716 35.716 54.713 43.966 64 4"
                                    stroke-dasharray="124 372"
                                    class="star__stroke--4 star__stroke"></polygon>
                            </g>
                            <g mask="url(#star-mask)" stroke="hsl(283,90%,50%)">
                                <polygon
                                    points="64 49 66.322 58.992 71.071 56.929 69.008 61.678 79 64 69.008 66.322 71.071 71.071 66.322 69.008 64 79 61.678 69.008 56.929 71.071 58.992 66.322 49 64 58.992 61.678 56.929 56.929 61.678 58.992 64 49"
                                    stroke-dasharray="31 93"
                                    class="star__stroke"></polygon>
                                <polygon
                                    points="64 34 68.644 53.983 78.142 49.858 74.017 59.356 94 64 74.017 68.644 78.142 78.142 68.644 74.017 64 94 59.356 74.017 49.858 78.142 53.983 68.644 34 64 53.983 59.356 49.858 49.858 59.356 53.983 64 34"
                                    stroke-dasharray="62 186"
                                    class="star__stroke--2 star__stroke"></polygon>
                                <polygon
                                    points="64 19 70.966 48.975 85.213 42.787 79.025 57.034 109 64 79.025 70.966 85.213 85.213 70.966 79.025 64 109 57.034 79.025 42.787 85.213 48.975 70.966 19 64 48.975 57.034 42.787 42.787 57.034 48.975 64 19"
                                    stroke-dasharray="93 279"
                                    class="star__stroke--3 star__stroke"></polygon>
                                <polygon
                                    points="64 4 73.287 43.966 92.284 35.716 84.034 54.713 124 64 84.034 73.287 92.284 92.284 73.287 84.034 64 124 54.713 84.034 35.716 92.284 43.966 73.287 4 64 43.966 54.713 35.716 35.716 54.713 43.966 64 4"
                                    stroke-dasharray="124 372"
                                    class="star__stroke--4 star__stroke"></polygon>
                            </g>
                        </g>
                    </g>
                </svg> -->

                <div class="flex flex-col gap-3">
                    <div class="flex flex-row gap-3">
                        <button
                            class="group flex justify-center items-center bg-[#201236] hover:bg-[#cc39a4] shadow-lg border-[1px] border-input rounded-[0px_0px_0px_0px] outline-none w-[60px] h-[60px] hover:scale-105 active:scale-95 skew-5 transition-all hover:-translate-x-1 hover:-translate-y-1 duration-400 ease-in-out cursor-pointer">
                            <svg
                                class="fill-white -skew-5"
                                height="30"
                                width="30"
                                viewBox="0,0,256,256"
                                xmlns="http://www.w3.org/2000/svg">
                                <g stroke="none">
                                    <g transform="scale(8,8)">
                                        <path
                                            d="M11.46875,5c-3.55078,0 -6.46875,2.91406 -6.46875,6.46875v9.0625c0,3.55078 2.91406,6.46875 6.46875,6.46875h9.0625c3.55078,0 6.46875,-2.91406 6.46875,-6.46875v-9.0625c0,-3.55078 -2.91406,-6.46875 -6.46875,-6.46875zM11.46875,7h9.0625c2.47266,0 4.46875,1.99609 4.46875,4.46875v9.0625c0,2.47266 -1.99609,4.46875 -4.46875,4.46875h-9.0625c-2.47266,0 -4.46875,-1.99609 -4.46875,-4.46875v-9.0625c0,-2.47266 1.99609,-4.46875 4.46875,-4.46875zM21.90625,9.1875c-0.50391,0 -0.90625,0.40234 -0.90625,0.90625c0,0.50391 0.40234,0.90625 0.90625,0.90625c0.50391,0 0.90625,-0.40234 0.90625,-0.90625c0,-0.50391 -0.40234,-0.90625 -0.90625,-0.90625zM16,10c-3.30078,0 -6,2.69922 -6,6c0,3.30078 2.69922,6 6,6c3.30078,0 6,-2.69922 6,-6c0,-3.30078 -2.69922,-6 -6,-6zM16,12c2.22266,0 4,1.77734 4,4c0,2.22266 -1.77734,4 -4,4c-2.22266,0 -4,-1.77734 -4,-4c0,-2.22266 1.77734,-4 4,-4z"></path>
                                    </g>
                                </g>
                            </svg>
                        </button>

                        <button
                            class="group flex justify-center items-center bg-[#201236] hover:bg-[#03A9F4] shadow-lg border-[1px] border-input rounded-[0px_0px_0px_0px] outline-none w-[60px] h-[60px] hover:scale-105 active:scale-95 -skew-5 transition-all hover:translate-x-1 hover:-translate-y-1 duration-400 ease-in-out cursor-pointer">
                            <svg
                                class="fill-white skew-5"
                                height="30"
                                width="30"
                                viewBox="0 0 48 48"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="flex flex-row gap-3">
                        <button
                            class="group flex justify-center items-center bg-[#201236] hover:bg-black shadow-lg border-[1px] border-input rounded-[0px_0px_0px_0px] outline-none w-[60px] h-[60px] hover:scale-105 active:scale-95 -skew-5 transition-all hover:-translate-x-1 hover:translate-y-1 duration-400 ease-in-out cursor-pointer">
                            <svg
                                class="fill-white skew-5"
                                height="30"
                                width="30"
                                viewBox="0 0 30 30"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z"></path>
                            </svg>
                        </button>

                        <button
                            class="group flex justify-center items-center bg-[#201236] hover:bg-[#8c9eff] shadow-lg border-[1px] border-input rounded-[0px_0px_0px_0px] outline-none w-[60px] h-[60px] hover:scale-105 active:scale-95 skew-5 transition-all hover:translate-x-1 hover:translate-y-1 duration-400 ease-in-out cursor-pointer">
                            <svg
                                class="fill-white -skew-5"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 48 48"
                                width="30"
                                height="30">
                                <path
                                    d="M40,12c0,0-4.585-3.588-10-4l-0.488,0.976C34.408,10.174,36.654,11.891,39,14c-4.045-2.065-8.039-4-15-4s-10.955,1.935-15,4c2.346-2.109,5.018-4.015,9.488-5.024L18,8c-5.681,0.537-10,4-10,4s-5.121,7.425-6,22c5.162,5.953,13,6,13,6l1.639-2.185C13.857,36.848,10.715,35.121,8,32c3.238,2.45,8.125,5,16,5s12.762-2.55,16-5c-2.715,3.121-5.857,4.848-8.639,5.815L33,40c0,0,7.838-0.047,13-6C45.121,19.425,40,12,40,12z M17.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C21,28.209,19.433,30,17.5,30z M30.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C34,28.209,32.433,30,30.5,30z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center">
            <div
                class="group relative flex justify-center items-center bg-main w-full max-w-[370px] h-full max-h-56 aspect-video transition-all duration-700">
                <div
                    class="absolute flex flex-col justify-start items-center bg-white py-5 w-full h-full transition-all group-hover:-translate-y-16 duration-300 group-hover:duration-1000">
                    <p class="font-serif font-semibold text-gray-500 text-xl sm:text-2xl">
                        Thank You
                    </p>
                    <p class="px-10 text-[10px] text-gray-700 sm:text-[12px]">
                        It’s so nice that you had the time to view this idea
                    </p>
                    <p class="font-serif text-[10px] text-gray-700 sm:text-[12px">
                        Wishing you a fantastic day ahead!
                    </p>
                    <p class="pt-5 font-sans text-[10px] text-gray-700">BAO MINH</p>
                </div>
                <button
                    class="z-40 flex justify-center items-center bg-rose-500 group-hover:opacity-0 [clip-path:polygon(50%_0%,_80%_10%,_100%_35%,_100%_70%,_80%_90%,_50%_100%,_20%_90%,_0%_70%,_0%_35%,_20%_10%)] border-4 border-rose-900 rounded-full w-10 aspect-square font-semibold text-[10px] text-red-800 group-hover:rotate-180 group-hover:scale-0 transition-all duration-1000 seal">
                    SMKY
                </button>
                <div
                    class="group-hover:[clip-path:polygon(50%_0%,_100%_0,_0_0)] absolute bg-neutral-800 [clip-path:polygon(50%_50%,_100%_0,_0_0)] w-full h-full transition-all duration-1000 group-hover:duration-100 tp"></div>
                <div
                    class="absolute bg-neutral-900 [clip-path:polygon(50%_50%,_0_0,_0_100%)] w-full h-full transition-all duration-700 lft"></div>
                <div
                    class="absolute bg-neutral-800 [clip-path:polygon(50%_50%,_100%_0,_100%_100%)] w-full h-full transition-all duration-700 rgt"></div>
                <div
                    class="absolute bg-neutral-900 [clip-path:polygon(50%_50%,_100%_100%,_0_100%)] w-full h-full transition-all duration-700 btm"></div>
            </div>
        </div>
    </div>
</footer>