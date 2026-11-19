<header>
    <div class="py-2 flex justify-between items-center container">
        <a href="{{ route('home') }}"><img class="h-10 md:h-20" src="{{ asset('frontend/images/logo.png') }}"
                alt="Jawaaf Logo"></a>
        <div>
            <span class="text-sm md:text-xl text-[#6e6a6a]">बुधबार, ०२ मंसिर २०८३</span>
            <img class="w-20 md:w-40" src="{{ asset('frontend/images/line.png') }}" alt="line">
        </div>
    </div>

    <nav class="bg-(--primary) text-[white] text-xl py-2 md:py-4">
        <div class=" hidden container md:flex justify-between items-center">
            <div class="space-x-6">
                <a href="">गृहपृष्ठ</a>
                <a href="">समाचार</a>
                <a href="">मनोरञ्जन</a>
                <a href="">खेलकुद</a>
                <a href="">विचार</a>
                <a href="">शिक्षा</a>
                <a href="">स्वास्थ्य</a>
                <a href="">अर्थतन्त्र</a>
            </div>

            <form action="" method="get" class="text-base relative">
                <input class="bg-[white] text-(--text) p-2 rounded-md" type="search" name="q" id="q"
                    placeholder="search by editor">
                <button type="submit" class="text-(--primary) absolute right-2 top-1/2 -translate-y-1/2"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>

        <div class="container text-right text-2xl md:hidden">
            <button type="button" data-drawer-target="nav-drawer" data-drawer-show="nav-drawer"
                aria-controls="nav-drawer">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </nav>
</header>

<div id="nav-drawer"
    class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-(--primary) w-96 border-e border-default"
    tabindex="-1" aria-labelledby="drawer-label">
    <div class="border-b border-default pb-4 mb-5 flex items-center">
        <form action="" method="get" class="text-base relative">
            <input class="bg-[white] text-(--text) p-2 rounded-md" type="search" name="q" id="q"
                placeholder="search by editor">
            <button type="submit" class="text-(--primary) absolute right-2 top-1/2 -translate-y-1/2"><i
                    class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        <button type="button" data-drawer-hide="nav-drawer" aria-controls="nav-drawer"
            class="text-body bg-transparent hover:text-heading hover:bg-neutral-tertiary rounded-base w-9 h-9 absolute top-2.5 inset-e-2.5 flex items-center justify-center">
            <svg class="w-5 h-5 text-[white]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18 17.94 6M18 18 6.06 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
    </div>
    <div class="flex flex-col gap-4 text-[white] text-xl">
        <a href="">गृहपृष्ठ</a>
        <a href="">समाचार</a>
        <a href="">मनोरञ्जन</a>
        <a href="">खेलकुद</a>
        <a href="">विचार</a>
        <a href="">शिक्षा</a>
        <a href="">स्वास्थ्य</a>
        <a href="">अर्थतन्त्र</a>
    </div>

</div>
