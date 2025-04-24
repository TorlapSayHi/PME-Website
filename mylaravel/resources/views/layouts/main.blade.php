<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'หน้าแรก - บริษัทของเรา')</title>
  @vite('resources/css/app.css') 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Header Section -->
  @include('layouts.header')

  <div class="container mx-auto px-4 sm:px-6 md:px-8">
    @yield('content')
  </div>

  <!-- Footer Section -->
  <footer class="bg-white text-center py-6 mt-12 border-t">
  <h5 class="text-lg font-bold">Contact</h5>
    <div class="container mx-auto">
      <div class="flex justify-center mb-4">
        <a href="https://www.facebook.com/p/%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%A9%E0%B8%B1%E0%B8%97-%E0%B8%9E%E0%B8%B2%E0%B8%A7%E0%B9%80%E0%B8%A7%E0%B8%AD%E0%B8%A3%E0%B9%8C-%E0%B9%81%E0%B8%A1%E0%B9%87%E0%B8%81%E0%B9%80%E0%B8%99%E0%B9%87%E0%B8%95-%E0%B9%81%E0%B8%AD%E0%B8%99%E0%B8%94%E0%B9%8C-%E0%B9%80%E0%B8%AD%E0%B9%87%E0%B8%99%E0%B8%88%E0%B8%B4%E0%B9%80%E0%B8%99%E0%B8%B5%E0%B8%A2%E0%B8%A3%E0%B8%B4%E0%B9%88%E0%B8%87-%E0%B8%88%E0%B8%B3%E0%B8%81%E0%B8%B1%E0%B8%94-100063592420205/" target="_blank" class="text-blue-500 hover:underline mx-2">
          <i class="fab fa-facebook mr-1"></i> Facebook
        </a>
        <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0" target="_blank" class="text-blue-500 hover:underline mx-2">
          <i class="fab fa-youtube mr-1"></i> YouTube
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
  </footer>
</body>
</html>
