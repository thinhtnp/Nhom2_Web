<<<<<<< HEAD
<?php
include("includes/db.php");

// Lấy id phòng từ URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$sql = "SELECT * FROM rooms WHERE id = $id";
$result = mysqli_query($conn, $sql);
$room = mysqli_fetch_assoc($result);

// Nếu không tìm thấy phòng
if (!$room) {
    echo "<p>Không tìm thấy thông tin phòng.</p>";
    exit;
}

// Chuyển JSON gallery_images sang mảng PHP
$gallery = json_decode($room['gallery_images'], true);
?>
=======
>>>>>>> 968c61b4217587cb9328d49989017109ebcfac23
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
  <title><?php echo htmlspecialchars($room['title']); ?></title>
=======
  <title>Document</title>
>>>>>>> 968c61b4217587cb9328d49989017109ebcfac23
  <link rel="stylesheet" href="Nhom2_Web/assets/css/style.css">
</head>
<body>
<div class="wrapper">

  <?php include("includes/header.php"); ?>

  <div class="content">
<<<<<<< HEAD
    <div class="room-detail">
      <div class="room-gallery">
        <img
          src="/Nhom2_Web/assets/imgs/<?php echo $room['main_image']; ?>"
          id="mainImage"
          class="main-image"
          alt="Ảnh phòng"
        />
        <button id="prevBtn" class="slide-btn prev-btn">‹</button>
        <button id="nextBtn" class="slide-btn next-btn">›</button>

        <div class="thumbnail-list" id="thumbnails">
          <?php foreach ($gallery as $img): ?>
            <img src="/Nhom2_Web/assets/imgs/<?php echo $img; ?>" alt="">
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="room-summary">
      <h2 class="room-title"><?php echo htmlspecialchars($room['title']); ?></h2>
      <p class="room-sub"><?php echo htmlspecialchars($room['utilities']); ?></p>
      <p class="room-price"><span><?php echo number_format($room['price']); ?> đ/tháng</span> · <?php echo $room['area']; ?> m²</p>
      <p class="room-address">📍 <?php echo htmlspecialchars($room['address']); ?></p>
    </div>

    <div class="room-description">
      <h3>Thông tin chi tiết</h3>
      <p><?php echo htmlspecialchars($room['description']); ?></p>
      <ul>
        <li>Diện tích: <?php echo $room['area']; ?> m²</li>
        <li>Giá thuê: <?php echo number_format($room['price']); ?> đ/tháng</li>
        <li>Địa chỉ: <?php echo htmlspecialchars($room['address']); ?></li>
        <li>Tiện nghi: <?php echo htmlspecialchars($room['utilities']); ?></li>
      </ul>
    </div>

    <div class="room-contact">
      <h3>Liên hệ</h3>
      <p><strong>Người liên hệ:</strong> Nguyễn Văn A</p>
      <p><strong>Số điện thoại:</strong> 0123456789</p>
      <p><strong>Email:</strong> example@gmail.com</p>
    </div>

    <div class="room-actions">
      <button class="btn btn-primary">Đặt phòng</button>
      <button class="btn btn-secondary">Liên hệ chủ nhà</button>
      <button class="btn btn-tertiary">Xem bản đồ</button>
    </div>
=======
        <div class="room-detail">
            <div class="room-gallery">
                

                <!-- Ảnh chính -->
                <img
                    src="/Nhom2_Web/assets/imgs/dichvudammay.jpg"
                    id="mainImage"
                    class="main-image"
                    alt="Main room image"
                />
                <!-- Nút Previous -->
                <button id="prevBtn" class="slide-btn prev-btn">‹</button>
                <!-- Nút Next -->
                <button id="nextBtn" class="slide-btn next-btn">›</button>

                <!-- Danh sách thumbnail -->
                <div class="thumbnail-list" id="thumbnails">
                    <img src="/Nhom2_Web/assets/imgs/images.jpg" alt="" />
                    <img src="/Nhom2_Web/assets/imgs/b2.jpg"      alt="" />
                    <img src="/Nhom2_Web/assets/imgs/b3.jpg"      alt="" />
                    <img src="/Nhom2_Web/assets/imgs/b4.jpg"      alt="" />
                    <img src="/Nhom2_Web/assets/imgs/b9.jpg"      alt="" />
                </div>
                </div>
        </div>
        <div class="room-summary">
            <h2 class="room-title">PHÒNG GẦN HUTECH, D1, D2 GIÁ 3.5 ĐẾN 4.3 TR</h2>
            <p class="room-sub">Nội thất đầy đủ</p>
            <p class="room-price"><span>3,8 triệu/tháng</span> · 20 m²</p>
            <p class="room-address">
            📍 281/3, Đường Ung Văn Khiêm, Phường 25, Quận Bình Thạnh, Tp Hồ Chí Minh
            </p>
        </div>
        <div class="room-description">
            <h3>Thông tin chi tiết</h3>
            <p>Phòng rộng rãi, thoáng mát, đầy đủ tiện nghi. Gần các trường đại học như HUTECH, UTH, giao thông thuận tiện.</p>
            <ul>
                <li>Diện tích: 20 m²</li>
                <li>Giá thuê: 3,8 triệu/tháng</li>
                <li>Địa chỉ: 281/3, Đường Ung Văn Khiêm, Phường 25, Quận Bình Thạnh, Tp Hồ Chí Minh</li>
                <li>Tiện nghi: Máy lạnh, máy giặt, wifi miễn phí</li>
            </ul></div>
        <div class="room-contact">
            <h3>Liên hệ</h3>
            <p>Để biết thêm thông tin chi tiết hoặc đặt phòng, vui lòng liên hệ:</p>
            <p><strong>Người liên hệ:</strong> Nguyễn Văn A</p> 
            <p><strong>Số điện thoại:</strong> 0123456789</p>
            <p><strong>Email:</strong>
            
    
        </div>
        <div class="room-actions">
            <button class="btn btn-primary">Đặt phòng</button>
            <button class="btn btn-secondary">Liên hệ chủ nhà</button>
            <button class="btn btn-tertiary">Xem bản đồ</button>
        </div>  
            
    </div>

   

    




>>>>>>> 968c61b4217587cb9328d49989017109ebcfac23
  </div>

  <?php include("includes/footer.php"); ?>

<<<<<<< HEAD
</div>
</body>
</html>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const mainImg = document.getElementById("mainImage");
    const thumbs = document.querySelectorAll("#thumbnails img");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    let index = 0;
    const total = thumbs.length;
    const slideInterval = 3000;
=======
</div> 
</body>
</html>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const mainImg = document.getElementById("mainImage");
    const thumbs  = document.querySelectorAll("#thumbnails img");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    let index     = 0;
    const total       = thumbs.length;
    const slideInterval = 3000; // 3 giây
>>>>>>> 968c61b4217587cb9328d49989017109ebcfac23

    function showSlide(i) {
      mainImg.classList.add("fade-out");
      setTimeout(() => {
        index = (i + total) % total;
        mainImg.src = thumbs[index].src;
        mainImg.classList.remove("fade-out");
      }, 800);
    }

    function nextSlide() { showSlide(index + 1); }
    function prevSlide() { showSlide(index - 1); }

<<<<<<< HEAD
    let autoSlide = setInterval(nextSlide, slideInterval);

=======
    // Bật auto-slide
    let autoSlide = setInterval(nextSlide, slideInterval);

    // Chọn thumbnail
>>>>>>> 968c61b4217587cb9328d49989017109ebcfac23
    thumbs.forEach((thumb, i) => {
      thumb.addEventListener("click", () => {
        clearInterval(autoSlide);
        showSlide(i);
        autoSlide = setInterval(nextSlide, slideInterval);
      });
    });

<<<<<<< HEAD
=======
    // Prev/Next
>>>>>>> 968c61b4217587cb9328d49989017109ebcfac23
    nextBtn.addEventListener("click", () => {
      clearInterval(autoSlide);
      nextSlide();
      autoSlide = setInterval(nextSlide, slideInterval);
    });
<<<<<<< HEAD

=======
>>>>>>> 968c61b4217587cb9328d49989017109ebcfac23
    prevBtn.addEventListener("click", () => {
      clearInterval(autoSlide);
      prevSlide();
      autoSlide = setInterval(nextSlide, slideInterval);
    });
  });
</script>
<<<<<<< HEAD
=======



>>>>>>> 968c61b4217587cb9328d49989017109ebcfac23
