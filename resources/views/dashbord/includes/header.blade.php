<!--Header Section Starts Here-->
<header class="bg-nav">
    <div class="flex justify-between">
        <!-- brgar icon start -->
        <div class="p-1 mx-3 inline-flex items-center">
            <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
            <a class="text-white p-2" href="{{ route('home') }}">{{$settings->site_name}}</a>
        </div>
        <!-- brgar icon end -->
        <div class="p-1 flex flex-row items-center">
        <button class="btn d-flex" type="button">
            <img class="inline-block h-8 w-8 rounded-full" src="{{ asset($settings->logo_path) }}" alt="" />
            <span class="btn text-white p-2 no-underline hidden d-md-block">{{ Auth::user()->name }}</span>
        </button>
    </div>
</header>
<!--/Header-->