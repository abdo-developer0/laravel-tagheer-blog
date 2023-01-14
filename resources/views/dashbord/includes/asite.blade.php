<!--Sidebar-->
<aside class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block" id="sidebar">
        <ul class="list-reset flex flex-col">
            <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                <a href="{{ route('dashbord') }}" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    Dashboard
                </a>
            </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                <a href="{{ route('dashbord.users') }}" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    Users
                </a>
            </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                <a href="{{ route('dashbord.articles') }}" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    Articles
                </a>
            </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                <a href="{{ route('settings.edit') }}" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    Settings
                </a>
            </li>
        </ul>
</aside>
<!--/Sidebar-->