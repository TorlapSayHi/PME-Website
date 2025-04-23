<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>หน้าแรก - บริษัทของเรา</title>
  @vite('resources/css/app.css') <!-- ใช้กับ Laravel Vite -->
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Header -->
  <header class="bg-white shadow p-4 sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center">
    <div class="flex items-center">
      <img src="resources\img\LogoPME.png" alt="Logo" class="w-15 mr-2">
      <h1 class="text-xl font-bold">POWER MAGNET & ENGINEERING CO., LTD.</h1>
    </div>
      <nav>
        <a href="#about" class="text-blue-500 hover:underline">เกี่ยวกับเรา</a>
        <a href="#products" class="ml-4 text-blue-500 hover:underline">สินค้า</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-blue-600 text-white text-center py-20 px-4">
    <h2 class="text-4xl font-bold mb-4">ยินดีต้อนรับสู่เว็บไซต์ของเรา</h2>
    <p class="text-lg mb-6">เราจำหน่ายสินค้าไอทีและอุตสาหกรรม ด้วยคุณภาพและความจริงใจ</p>
    <a href="{{ route('products.index') }}" class="bg-white text-blue-600 font-semibold px-6 py-2 rounded hover:bg-gray-100 transition">
      ดูสินค้า
    </a>
  </section>

  <!-- เกี่ยวกับบริษัท -->
  <section id="about" class="py-12 bg-white text-center">
    <div class="container mx-auto">
      <h3 class="text-2xl font-bold mb-4">เกี่ยวกับบริษัท</h3>
      <p class="max-w-xl mx-auto">บริษัทของเรามีประสบการณ์กว่า 10 ปี ในด้านการจัดจำหน่ายสินค้าและอุปกรณ์สำหรับโรงงานและสำนักงาน...</p>
    </div>
  </section>

  <!-- สินค้า -->
  <section id="products" class="py-12 bg-gray-100">
    <div class="container mx-auto px-4">
      <h3 class="text-2xl font-bold mb-8 text-center">สินค้าของเรา</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- สินค้า 1 -->
        <div class="bg-white p-4 rounded shadow">
          <img src="https://via.placeholder.com/300x200" alt="สินค้า 1" class="rounded mb-3">
          <h4 class="text-lg font-bold">สินค้า 1</h4>
          <p class="text-sm text-gray-600">รายละเอียดสินค้าสั้น ๆ</p>
        </div>
        <!-- เพิ่มสินค้าอื่นได้ตามต้องการ -->
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-white text-center py-6 mt-12 border-t">
    <p>© 2025 บริษัทของเรา. สงวนลิขสิทธิ์.</p>
  </footer>

</body>
</html>
