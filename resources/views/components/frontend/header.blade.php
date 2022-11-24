 <div class="header-3-1" style="font-family: 'Poppins', sans-serif">
     <header x-data="{ open: false }"
         class="w-full grid grid-cols-1 lg:grid-cols-3 py-8 lg:px-24 md:px-16 sm:px-8 px-8">
         <div class="flex items-center justify-between">
             <a href="#">
                 <img src="{{asset('./admin/assets/images/dewatalogo.PNG')}}" alt="" width="52" height="50" />
             </a>
             <div class="flex justify-end items-center lg:hidden cursor-pointer">
                 <svg class="w-6 h-6" @click="open = !open" fill="none" stroke="#FFFFFF" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                     </path>
                 </svg>

             </div>
         </div>
         <!-- Backdrop -->
         <!-- Backdop  -->
         <div :class="{'hidden': !open}" class="bg-white fixed hidden w-full h-full top-0 left-0 z-30 bg-opacity-60"
             @click="open = !open"></div>
         <nav :class="{'flex': open, 'hidden': !open}"
             class="hidden z-50 fixed left-3 right-3 rounded-md shadow-md flex-col p-8 justify-center navigation items-start lg:shadow-none lg:bg-transparent lg:p-0 lg:items-center lg:flex lg:flex-row lg:relative lg:space-x-7 backdrop-background">
             <a href="#">
                 <img class="m-0 lg:hidden mb-3" src="{{asset('./admin/assets/images/dewatalogo.PNG')}}" alt=""
                     width="52" height="50" alt="" />
             </a>
             <a href="{{route('index')}}" class="{{ request()->is('/') ? 'active font-medium' : ''}} nav-text text-sm font-light mx-0 lg:mx-5
                 my-4 lg:my-0 relative ">
                 Home
             </a>
             <a href="{{route('products')}}" class="{{ request()->is('products') ? 'active font-medium' : ''}} nav-text text-sm font-light mx-0
                 lg:mx-5 my-4 lg:my-0 relative">
                 Product
             </a>
             <a href="{{route('profile')}}" class="{{ request()->is('profile') ? 'active font-medium' : ''}} nav-text text-sm font-light mx-0
                 lg:mx-5 my-4 lg:my-0 relative">
                 Profile
             </a>
             @auth
             @if(Auth::user()->roles == 'ADMIN')
             <a href="{{route('dashboard.index')}}"
                 class="nav-text text-sm font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Dashboard</a>
             @endif
             <a href="{{route('dashboard-user')}}"
                 class="nav-text text-sm font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Transaksi Saya</a>
             @endauth
             <svg @click="open = !open" class="w-6 h-6 absolute top-4 right-4 cursor-pointer lg:hidden" fill="none"
                 stroke="#FFFFFF" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
             </svg>
         </nav>
         <div class="hidden items-center justify-end lg:flex gap-2">
             @auth
             <a href="{{route('carts')}}"
                 class="{{ request()->is('carts') ? 'active' : ''}} nav-text text-sm text-white font-medium mx-0 lg:mx-5 my-4 lg:my-0 relative ">
                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="24" height="24" x="0" y="0"
                     viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve">
                     <g>
                         <path
                             d="M22.713,4.077A2.993,2.993,0,0,0,20.41,3H4.242L4.2,2.649A3,3,0,0,0,1.222,0H1A1,1,0,0,0,1,2h.222a1,1,0,0,1,.993.883l1.376,11.7A5,5,0,0,0,8.557,19H19a1,1,0,0,0,0-2H8.557a3,3,0,0,1-2.82-2h11.92a5,5,0,0,0,4.921-4.113l.785-4.354A2.994,2.994,0,0,0,22.713,4.077ZM21.4,6.178l-.786,4.354A3,3,0,0,1,17.657,13H5.419L4.478,5H20.41A1,1,0,0,1,21.4,6.178Z"
                             fill="#ffffff" data-original="#000000" />
                         <circle cx="7" cy="22" r="2" fill="#ffffff" data-original="#000000" />
                         <circle cx="17" cy="22" r="2" fill="#ffffff" data-original="#000000" />
                     </g>
                 </svg>
             </a>

             <form action="{{route('logout')}}" method="POST">
                 @csrf
                 <button type="submit"
                     class="btn-fill text-white font-medium text-sm py-3 px-6 rounded-full focus:outline-none">
                     logout
                 </button>
             </form>
             @endauth

             @guest
             <form action="{{route('login')}}" method="get">
                 @csrf
                 <button type="submit" class="btn-sign text-sm font-medium py-3 px-8 focus:outline-none">
                     Sign In
                 </button>
             </form>
             <form action="{{route('register')}}" method="get">
                 @csrf
                 <button class="btn-fill text-white font-medium text-sm py-3 px-6 rounded-full focus:outline-none">
                     Register
                 </button>
             </form>
             @endguest


         </div>

     </header>
     <!-- Hero -->

 </div>
 <div class="lg:px-24 md:px-16 sm:px-8 px-8">
     <hr style="border-color: #2e425c" />
 </div>
