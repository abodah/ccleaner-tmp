<!-- header -->
<header class="header my-8" >
        <!-- container -->
        <div class="container px-4 sm:px-8 lg:px-16 xl:px-20 mx-auto">
            <!-- header wrapper -->
                <div class="header-wrapper flex items-center justify-between">

                    <!-- header logo -->
                    <div class="header-logo">
                        <h1 class="font-semibold text-black leading-relaxed"><a href="{{ route('home') }}">CCleaner</a></h1>
                    </div>

                    <!-- mobile toggle -->
                    <div class="toggle md:hidden">
                        <button @click=" isOpen = true" @keydown.escape=" isOpen = false">
                            <svg 
                                class="h-6 w-6 fill-current text-black"
                                fill="none" stroke-linecap="round" 
                                stroke-linejoin="round" stroke-width="2" 
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Navbar -->
                    <navbar class="navbar hidden md:block">
                        <ul class="flex space-x-4 text-sm font-semibold">
                            <li><a href="#" class="active border-b-2 border-orange-500 pb-2">Reviews</a></li>
                            <li><a href="#" class="hover:text-orange-500">People</a></li>
                            <li><a href="#" class="hover:text-orange-500">Partners</a></li>
                            <li><a href="#" class="hover:text-orange-500">Feedback</a></li>
                            <li><a href="#" class="hover:text-orange-500">Pricing</a></li>
                            <li><a href="#" class="cta bg-orange-500 hover:bg-orange-600 px-3 py-2 rounded text-white font-normal">Get the App</a></li>
                        </ul>
                    </navbar>

                </div>
        </div>

    </header><!-- end header -->

   