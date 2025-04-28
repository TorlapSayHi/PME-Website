<!-- resources/views/welcome.blade.php -->
@extends('layouts.main')

@section('title', 'หน้าหลัก')

@section('content')
  <section class="bg-orange-400 text-white text-center py-20 px-6 rounded-lg shadow-lg">
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
  <section id="about" class="py-12 bg-white text-center px-6 mt-5 rounded-lg shadow-lg">
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
            <img src="{{ asset('storage/images/' . $product->image) }}" style="width: auto; height: 150px; border-radius: 5px;">
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




@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
  
  @endsection