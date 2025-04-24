<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>หน้าแรก - บริษัทของเรา</title>
  @vite('resources/css/app.css') 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Header -->
  <header id="header" class="shadow bg-white p-6 sticky top-0 z-50 rounded-b-lg transition-all duration-300 ease-in-out">
    <div class="container mx-auto flex justify-between items-center">
      <div class="flex items-center">
        <img src="storage/app/public/images/LogoPME.png" alt="Logo" class="w-20 mr-4">
        <h1 class="text-xl md:text-2xl font-bold">
          <span class="hidden md:inline">POWER MAGNET & ENGINEERING CO., LTD.</span>
          <span class="md:hidden">PME</span>
        </h1>
      </div>
            <!-- Desktop login -->
            @if(Auth::check())
            <nav class="hidden md:flex items-center">
            <p class="mx-5 v">สวัสดี, {{ Auth::user()->name }}</p>
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
    </div>
    <nav id="mobile-menu" class="hidden md:hidden bg-white shadow-md p-4">
  @if(Auth::check())
    <div class="flex flex-col items-start">
      <p class="mb-2">สวัสดี, {{ Auth::user()->name }}</p>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="text-blue-500 font-bold hover:underline">Logout</button>
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
    </nav>
  </header>

  <script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
      const mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');
    });
    document.addEventListener('scroll', function () {
      const header = document.getElementById('header');
      if (window.scrollY > 0) {
        header.classList.add('rounded-none', 'shadow');
      } else {
        header.classList.remove('rounded-none', 'shadow-none');
      }
    });

  </script>

  <!-- Hero Section -->
  <section class="bg-blue-600 text-white text-center py-20 px-6">
    <h2 class="text-4xl font-bold mb-6">ยินดีต้อนรับสู่เว็บไซต์ของเรา</h2>
    <p class="text-left text-lg mb-6 max-w-4xl mx-auto">
      ออกแบบผลิตและติดตั้งแม่เหล็กคัดแยกโลหะ และบริการสอบเทียบแม่เหล็ก</p>
    <p class="text-left text-lg mb-6 max-w-4xl mx-auto">
      รับซ่อมบำรุงทั่วไป เช่น:
    </p>
    <ul class="text-left max-w-4xl mx-auto mb-6 list-disc list-inside">
      <li class="mb-2">การซ่อมบำรุงเครื่องจักร</li>
      <li class="mb-2">การซ่อมบำรุงระบบท่อ</li>
      <li class="mb-2">การซ่อมบำรุงระบบระบายอากาศ</li>
      <li class="mb-2">การซ่อมบำรุงพื้นที่บางส่วนในและนอกอาคารหรือตัวอาคาร</li>
      <li class="mb-2">งานปรับปรุงพื้นที่</li>
    </ul>
    <p class="text-left text-lg mb-6 max-w-4xl mx-auto">
      รับงานติดตั้งและต่อเติม เช่น:
    </p>
    <ul class="text-left max-w-4xl mx-auto list-disc list-inside">
      <li class="mb-2">งานติดตั้งม่านอากาศและม่านริ้วกันแมลง</li>
      <li class="mb-2">งานติดตั้งประตู</li>
      <li class="mb-2">งานติดตั้งปั๊ม</li>
      <li class="mb-2">งานบริการติดตั้งงานท่อดักท์ เช่น ท่อดักท์ส่งลม, ท่อดักท์ระบายอากาศ</li>
      <li class="mb-2">งานติดตั้งระบบท่อดักท์ Exhaust ในโรงงาน</li>
    </ul>
    @if(Auth::check())
      <a href="{{ route('products.index') }}" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded hover:bg-gray-100 transition mt-6 inline-block">
          แก้ไขสินค้า
      </a>
    @endif


  </section>

  <!-- เกี่ยวกับบริษัท -->
  <section id="about" class="py-12 bg-white text-center px-6">
    <div class="container mx-auto">
      <h3 class="text-2xl font-bold mb-6">เกี่ยวกับบริษัท</h3>
      <p class="max-w-3xl mx-auto leading-relaxed">
        บริษัท พาวเวอร์แม็กเน็ต แอนด์ เอ็นจิเนียริ่ง จำกัด ดำเนินธุรกิจ ออกแบบผลิตและติดตั้งแม่เหล็กคัดแยกโลหะและบริการสอบเทียบแม่เหล็ก พร้อมทั้งงานโครงสร้างเหล็ก สแตนเลส งานระบบไฟฟ้า พร้อมทั้งงานซ่อมบำรุงทั่วไป ซึ่งครอบคลุมถึง งานซ่อมบำรุงเครื่องจักร งานซ่อมบำรุงระบบท่อแรงดัน ระบบระบายอากาศ งานซ่อมบำรุงพื้นที่บางส่วนในและนอกอาคาร หรืองานตัวอาคาร งานปรับปรุงพื้นที่ 
        ด้วยความมั่นใจในการให้บริการ บริษัทฯ ให้ความสำคัญกับการบริการหลังการขาย โดยมีทีมช่างผู้เชี่ยวชาญพร้อมให้คำปรึกษาและคำแนะนำอย่างใกล้ชิด อีกทั้งมีการรับประกันผลงาน (ตามเงื่อนไขที่ได้ตกลงร่วมกัน)
        ทั้งนี้ ทางบริษัทฯ มีความยินดีและหวังเป็นอย่างยิ่งว่าจะได้รับโอกาสในการร่วมงานและให้บริการ กับทุกท่านในโอกาสอันใกล้นี้
      </p>
    </div>
  </section>

  <section id="about" class="py-12 bg-white text-center px-6">
    <div class="container mx-auto">
      <h3 class="text-2xl font-bold mb-6">งานออกแบบแม่เหล็ก</h3>
      <p class="max-w-3xl mx-auto leading-relaxed">
      ด้วยบริษัท พาวเวอร์แม็กเน็ต แอนด์ เอ็นจิเนียริ่ง จำกัด เป็นผู้ผลิต ออกแบบ และจำหน่ายสินค้าอุปกรณ์แม่เหล็กคัดแยกโลหะปลอมปนที่แอบแฝงมากับสินค้า เช่น เศษโลหะ ตะปู น็อต สนิมเหล็ก ผงเหล็ก ที่เกิดจากการขัดสีของเครื่องจักร  
ในระหว่างขั้นตอนกระบวนการผลิตสินค้าที่มีความแตกต่างกันออกไป โดยทางบริษัท มีทีมงานที่มีประสบการณ์ ที่จะคอยให้คำปรึกษาและแนะนำปัญหาหน้างานต่างๆ เพื่อให้ท่านลูกค้ามีความมั่นใจว่าสินค้าที่ออกมาจากกระบวนการผลิตนั้น  ปราศจากสิ่งปลอมปนต่างๆ และเป็นไปตามมาตรฐานISO9001:2008,GMP,HACCP เป็นต้น
    ด้วยกลุ่มของโลหะนั้นมีหลากหลายชนิด แต่ได้จำแนกกลุ่มโลหะเป็น 2 กลุ่ม คือ โลหะ(เหล็ก)และอโลหะ เช่น ทองเหลือง อะลูมิเนียม สแตนเลส นิกเกิล ทำให้อุปกรณ์แม่เหล็กมีความสำคัญในการคัดกรองทั้งเบื้องต้นและปลายทางในขบวนการผลิตและมีการคัดแยกโลหะที่แตกต่างกันไป ซึ่งแม่เหล็กถาวรนั้นดูจับได้ดีที่สุดเพียงโลหะเหล็กเท่านั้น ส่วนกลุ่มของอโลหะ จะต้องใช้เครื่องจับโลหะ(Metal Detector)                                
    อุปกรณ์คัดแยกโลหะที่ได้กล่าวมาข้างต้นนั้น เรียกได้ว่ามีส่วนช่วยขับเคลื่อนให้การผลิตในภาคอุตสาหกรรมต่างๆ เช่น อุตสาหกรรมผลิตอาหาร เครื่องปรุง ซอส โรงงานน้ำตาล โรงงานแป้ง สาคู โรงสีข้าว อาหารสัตว์ บรรจุภัณฑ์ ซีเมนต์ เหมืองแร่ โรงโม่หิน เยื่อไม้ โรงกระดาษ โรงขัดแยกขยะ ทั้งนี้ทางบริษัทยินดีให้ความรู้ หากท่านมีข้อสงสัยเพิ่มเติม หรืออยากได้คำปรึกษาแนะนำ ทางบริษัทยินดีเป็นย่างยิ่งกับการได้ร่วมแชร์ประสบการณ์นี้ และหวังว่าทางบริษัทจะได้ร่วมงานกับท่านในเร็ววันนี้
      </p>
    </div>
  </section>

  <!-- สินค้า -->
  <section id="products" class="py-12 bg-gray-100 px-6">
  <div class="container mx-auto">
    <h3 class="text-2xl font-bold mb-8 text-center">สินค้าของเรา</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8" id="product-list">
      @foreach ($products as $index => $product)
        <div class="flex flex-col bg-white p-6 rounded shadow {{ $index > 2 ? 'hidden extra-product' : '' }}">
          
            <p class="text-center flex justify-center mb-5">
            <img src="{{ asset('public/storage/images/' . $product->image) }}" style="width: auto; height: 150px; border-radius: 5px;">
            </p>
          <h4 class="text-lg font-bold mb-2">{{ $product->name }}</h4>
          <p class="text-sm text-gray-600 mb-5">{{ $product->description }}</p>
          @if ($product->price == 0)
            <p class="text-sm text-blue-600 mt-auto">ราคา : โปรดติดต่อสอบถามผู้ขาย</p>
          @elseif ($product->price < 0)
          <p class="text-sm text-red-600 mt-auto">สินค้าหมด</p>
          @else
            <p class="text-sm text-blue-600 mt-auto">ราคา : ${{ number_format($product->price, 2) }}</p>
          @endif
        </div>
      @endforeach
    </div>

    @if (count($products) > 3)
    <div class="text-center mt-6">
      <button id="toggle-btn" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded hover:bg-gray-100 transition inline-block">
        อ่านเพิ่มเติม ▼
      </button>
    </div>
    @endif
  </div>
</section>

<button id="scrollToTopBtn" class="fixed bottom-5 right-5 p-3 bg-blue-500 text-white rounded-full shadow-lg text-xl hidden hover:bg-blue-700">
    ↑
</button>

  <!-- Footer -->
  <footer class="bg-white text-center py-6 mt-12 border-t">
  <h5 class="text-lg font-bold">Contact</h5>
    <div class="container mx-auto">
      <div class="flex justify-center mb-4">
        <a href="https://www.facebook.com/p/%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%A9%E0%B8%B1%E0%B8%97-%E0%B8%9E%E0%B8%B2%E0%B8%A7%E0%B9%80%E0%B8%A7%E0%B8%AD%E0%B8%A3%E0%B9%8C-%E0%B9%81%E0%B8%A1%E0%B9%87%E0%B8%81%E0%B9%80%E0%B8%99%E0%B9%87%E0%B8%95-%E0%B9%81%E0%B8%AD%E0%B8%99%E0%B8%94%E0%B9%8C-%E0%B9%80%E0%B8%AD%E0%B9%87%E0%B8%99%E0%B8%88%E0%B8%B4%E0%B9%80%E0%B8%99%E0%B8%B5%E0%B8%A2%E0%B8%A3%E0%B8%B4%E0%B9%88%E0%B8%87-%E0%B8%88%E0%B8%B3%E0%B8%81%E0%B8%B1%E0%B8%94-100063592420205/" target="_blank" class="text-blue-500 hover:underline mx-2">
          <i class="fab fa-facebook mr-1"></i> Facebook
        </a>
        <a href="https://www.instagram.com/yourcompany" target="_blank" class="text-blue-500 hover:underline mx-2">
          <i class="fab fa-instagram mr-1"></i> Instagram
        </a>
        <a href="https://manager.line.biz/account/@666nfzrm" target="_blank" class="text-blue-500 hover:underline mx-2">
          <i class="fab fa-line mr-1"></i> Line
        </a>
      </div>
      <div>
        <h5 class="text-lg font-bold">ที่อยู่</h5>
        <p>96 ซอยรังสิต-นครนายก 13 ต.ประชาธิปัตย์ อ.ธัญบุรี จ.ปทุมธานี 12130</p>
      <p>เลขประจำตัวผู้เสียภาษี 0135563001201 (สำนักงานใหญ่)</p>
      </div>
      <div class="container mx-auto mt-4">
      <h5 class="text-lg font-bold">ช่องทางติดต่อ</h5>
      <p>โทรศัพท์: 094-913-2992</p>
      <p>อีเมล: narunyamit@gmail.com</p>
    </div>
    </div>
    
  </footer>


  <script>
const toggleBtn = document.getElementById('toggle-btn');
let expanded = false;

toggleBtn.addEventListener('click', () => {
  const extraProducts = document.querySelectorAll('.extra-product');

  // สลับการแสดงของสินค้า
  extraProducts.forEach(product => {
    product.classList.toggle('hidden');
  });

  // สลับข้อความของปุ่ม
  expanded = !expanded;
  toggleBtn.textContent = expanded ? 'แสดงน้อยลง ▲' : 'อ่านเพิ่มเติม ▼';

  // เลื่อนหน้าจอไปที่หัวข้อสินค้า (เมื่อกด "แสดงน้อยลง")
  if (!expanded) {
    scrollToProducts();
  }
});

function scrollToProducts() {
  const productsSection = document.getElementById('products'); // หาหมวดสินค้า
  window.scrollTo({
    top: productsSection.offsetTop, // ใช้ offsetTop เพื่อเลื่อนไปยังตำแหน่งของหัวข้อ "สินค้า"
    behavior: 'smooth' // ให้เลื่อนอย่างนุ่มนวล
  });
}

</script>

<script>
        // Get the button
        const mybutton = document.getElementById("scrollToTopBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        };

        // When the user clicks on the button, scroll to the top of the document
        mybutton.onclick = function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        };
    </script>
</body>
</html>
