<div class="right-0 bottom-0 fixed -translate-x-4 -translate-y-7">
    <div
        id="back-to-top"
        class="group relative bg-[#120e1e] hover:bg-transparent opacity-60 hover:opacity-100 border-1 border-input rounded-full w-[50px] h-[50px] active:scale-95 transition-all duration-200 ease-in-out cursor-pointer box">
        <button
            class="group top-1/2 left-1/2 absolute bg-transparent border-0 rounded-full -translate-x-1/2 -translate-y-1/2 cursor-pointer transform button">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="35"
                height="35"
                fill=""
                class="fill-white bi-arrow-up-short transition-all duration-300 ease-in-out bi"
                viewBox="0 0 16 16">
                <path
                    fill-rule="evenodd"
                    d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5" />
            </svg>
        </button>
        <div
            class="bottom-0 -z-2 absolute flex gap-1 opacity-0 group-hover:opacity-100 rounded-full w-full h-full overflow-hidden transition-all duration-300 ease-in-out space">
            <span style="--i: 31" class="star"></span>
            <span style="--i: 12" class="star"></span>
            <span style="--i: 57" class="star"></span>
            <span style="--i: 93" class="star"></span>
            <span style="--i: 23" class="star"></span>
            <span style="--i: 70" class="star"></span>
            <span style="--i: 6" class="star"></span>
        </div>
    </div>
    <script>
        document.getElementById("back-to-top").addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
</div>