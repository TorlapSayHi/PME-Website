<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>หน้าแรก - บริษัทของเรา</title>
  @vite('resources/css/app.css') <!-- ใช้กับ Laravel Vite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Header -->
  <header id="header" class="shadow bg-white p-6 sticky top-0 z-50 rounded-b-lg transition-all duration-300 ease-in-out">
    <div class="container mx-auto flex justify-between items-center">
      <div class="flex items-center">
        <img src="resources/img/LogoPME.png" alt="Logo" class="w-20 mr-4">
        <h1 class="text-xl md:text-2xl font-bold">
          <span class="hidden md:inline">POWER MAGNET & ENGINEERING CO., LTD.</span>
          <span class="md:hidden">PME</span>
        </h1>
      </div>
      <nav class="hidden md:flex">
        <a href="#about" class="text-blue-500 hover:underline mx-2">เกี่ยวกับบริษัท</a>
        <a href="#products" class="text-blue-500 hover:underline mx-2">สินค้า</a>
      </nav>
      <button id="menu-toggle" class="md:hidden text-blue-500 focus:outline-none">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <nav id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
      <a href="#about" class="block text-blue-500 hover:underline px-6 py-2">เกี่ยวกับบริษัท</a>
      <a href="#products" class="block text-blue-500 hover:underline px-6 py-2">สินค้า</a>
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
    <a href="{{ route('products.index') }}" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded hover:bg-gray-100 transition mt-6 inline-block">
      แก้ไขสินค้า
    </a>
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

  <!-- สินค้า -->
  <section id="products" class="py-12 bg-gray-100 px-6">
  <div class="container mx-auto">
    <h3 class="text-2xl font-bold mb-8 text-center">สินค้าของเรา</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8" id="product-list">
      @foreach ($products as $index => $product)
        <div class="bg-white p-6 rounded shadow {{ $index > 2 ? 'hidden extra-product' : '' }}">
          <img src="{{ asset('public/storage/images/' . $product->image) }}" style="width: 100px; height: auto; border-radius: 5px;">
          <h4 class="text-lg font-bold mb-2">{{ $product->name }}</h4>
          <p class="text-sm text-gray-600">{{ $product->description }}</p>
          <p class="text-sm text-gray-600">${{ number_format($product->price, 2) }}</p>
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
</body>
</html>
