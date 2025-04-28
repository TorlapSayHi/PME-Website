<!-- resources/views/layouts/header.blade.php -->
<header id="header" class="shadow bg-white p-6 sticky top-0 z-50 rounded-lg transition-all duration-300 ease-in-out">
  <div class="container mx-auto flex justify-between items-center">
    <div class="flex items-center">
    <img src="{{ asset('storage/images/LogoPME.png') }}" alt="Logo" class="w-20 mr-4">
      <h1 class="text-xl md:text-2xl font-bold">
        <span class="hidden md:inline">POWER MAGNET & ENGINEERING CO., LTD.</span>
        <span class="md:hidden">PME</span>
      </h1>
    </div>
    
    @if(Auth::check())
    <nav class="hidden md:flex items-center">
      <p class="mx-5">สวัสดี, {{ Auth::user()->name }}</p>
      <form action="{{ route('logout') }}" class="font-bold text-blue-500 hover:underline mx-2" method="POST">
        @csrf
        <button type="submit">Logout</button>
      </form>
    </nav>
    @else
    <nav class="hidden md:flex items-center">
      <p class="mx-5">สวัสดี, ผู้เยี่ยมชม</p>
      <a href="{{ route('login') }}" class="font-bold text-blue-500 hover:underline mx-2">Login</a>
    </nav>
    @endif

    <button id="menu-toggle" class="md:hidden text-blue-500 focus:outline-none">
      <i class="fas fa-bars"></i>
    </button>
    
    <!-- เมนูมือถือ -->
    <nav id="mobile-menu" class="hidden absolute top-full left-0 right-0 bg-white shadow-md p-4 w-full z-40 transition-all duration-300 ease-in-out">
      @if(Auth::check())
      <div class="flex flex-col items-start bg-blue-500 p-4 rounded-lg">
        <p class="mb-2 text-white">สวัสดี, {{ Auth::user()->name }}</p>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="text-white font-bold hover:underline">Logout</button>
        </form>
      </div>
      @else
      <div class="flex flex-col items-start">
        <p class="mb-2">สวัสดี, ผู้เยี่ยมชม</p>
        <a href="{{ route('login') }}" class="text-blue-500 font-bold hover:underline">Login</a>
      </div>
      @endif
    </nav>
  </div>
</header>

<script>
  document.getElementById('menu-toggle').addEventListener('click', function () {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
  });
  
  document.addEventListener('scroll', function () {
    const header = document.getElementById('header');
    // เพิ่มหรือเอาความโค้งมนตามการเลื่อนออก
    if (window.scrollY > 0) {
      // หลีกเลี่ยงการเปลี่ยนแปลงถ้าไม่จำเป็น
      header.classList.remove('rounded-lg');
    } else {
      header.classList.add('rounded-lg');
    }
  });
</script>
