<<<<<<< HEAD
<?php
include("includes/db.php");

// Xử lý dữ liệu lọc và tìm kiếm
$where = [];

if (!empty($_GET['keyword'])) {
  $keyword = mysqli_real_escape_string($conn, $_GET['keyword']);
  $where[] = "(title LIKE '%$keyword%' OR address LIKE '%$keyword%')";
}

if (!empty($_GET['price'])) {
  switch ($_GET['price']) {
    case '1': $where[] = "price < 3000000"; break;
    case '2': $where[] = "price BETWEEN 3000000 AND 4000000"; break;
    case '3': $where[] = "price > 4000000"; break;
  }
}

if (!empty($_GET['location'])) {
  $location = mysqli_real_escape_string($conn, $_GET['location']);
  $where[] = "address LIKE '%$location%'";
}

$where_sql = count($where) ? 'WHERE ' . implode(' AND ', $where) : '';
$sql = "SELECT * FROM rooms $where_sql";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Danh sách phòng trọ</title>
  <link rel="stylesheet" href="/Nhom2_Web/assets/css/style.css" />
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/style.css">
>>>>>>> 968c61b4217587cb9328d49989017109ebcfac23
</head>
<body>
<div class="wrapper">

  <?php include("includes/header.php"); ?>

  <div class="content">
<<<<<<< HEAD
    <div class="main-banner">
      <img src="/Nhom2_Web/assets/imgs/b2.jpg" alt="Banner">
      <h1>Danh sách phòng trọ / căn hộ</h1>
    </div>

    <!-- Thanh tìm kiếm và lọc -->
    <form method="get" class="filter_container">
      <div class="search-bar">
        <input type="text" name="keyword" placeholder="Tìm kiếm theo tiêu đề, vị trí..." value="<?php echo htmlspecialchars($_GET['keyword'] ?? ''); ?>" />
        <button class="search-button" type="submit">Tìm kiếm</button>
      </div>

      <div class="filter_group">
        <label for="price_filter">Giá:</label>
        <select name="price" id="price_filter" class="filter_select">
          <option value="">Tất cả</option>
          <option value="1" <?php if(isset($_GET['price']) && $_GET['price']=='1') echo 'selected'; ?>>Dưới 3 triệu</option>
          <option value="2" <?php if(isset($_GET['price']) && $_GET['price']=='2') echo 'selected'; ?>>3 - 4 triệu</option>
          <option value="3" <?php if(isset($_GET['price']) && $_GET['price']=='3') echo 'selected'; ?>>Trên 4 triệu</option>
        </select>
      </div>

      <div class="filter_group">
        <label for="location_filter">Vị trí:</label>
        <select name="location" id="location_filter" class="filter_select">
          <option value="">Tất cả</option>
          <option value="P.25" <?php if(isset($_GET['location']) && $_GET['location']=='P.25') echo 'selected'; ?>>Phường 25</option>
          <option value="Q. Bình Thạnh" <?php if(isset($_GET['location']) && $_GET['location']=='Q. Bình Thạnh') echo 'selected'; ?>>Quận Bình Thạnh</option>
        </select>
      </div>

      <button class="filter_btn" type="submit">Lọc</button>
    </form>

    <div class="cards" id="roomCards">
      <?php
        if ($result && mysqli_num_rows($result) > 0):
          while ($row = mysqli_fetch_assoc($result)):
      ?>
        <div class="card">
          <img src="/Nhom2_Web/assets/imgs/<?php echo $row['main_image']; ?>" alt="Ảnh phòng">
          <div class="title_card"><?php echo htmlspecialchars($row['title']); ?></div>
          <div class="price_card"><?php echo number_format($row['price']); ?> VNĐ / tháng</div>
          <div class="price_card"><?php echo htmlspecialchars($row['address']); ?></div>
          <a href="/Nhom2_Web/details_room.php?id=<?php echo $row['id']; ?>" class="btn_card">Xem chi tiết</a>
        </div>
      <?php
          endwhile;
        else:
          echo "<p>Không có dữ liệu phòng nào.</p>";
        endif;
      ?>
    </div>
=======
    <span class="main-banner">
      <img src="/Nhom2_Web/assets/imgs/b2.jpg" alt="Banner Image">
      <h1>CHO THUÊ PHÒNG GẦN UTH</h1>
    </span>
    <span class="main-content">
        <div class="filter_container">
        <div class="filter_group">
            <label for="price_filter">Lọc Giá:</label>
            <select id="price_filter" class="filter_select">
                <option value="">-- Chọn khoảng giá --</option>
                <option value="1">Dưới 1 triệu</option>
                <option value="2">1 - 3 triệu</option>
                <option value="3">3 - 5 triệu</option>
                <option value="4">Trên 5 triệu</option>
            </select>
            </div>
            <div class="filter_group">
            <label for="area_filter">Lọc Diện Tích:</label>
            <select id="area_filter" class="filter_select">
                <option value="">-- Chọn diện tích --</option>
                <option value="1">Dưới 20 m²</option>
                <option value="2">20 - 40 m²</option>
                <option value="3">40 - 60 m²</option>
                <option value="4">Trên 60 m²</option>
            </select>
            </div>
            <div class="filter_group">
            <label for="area_filter">Vị trí cách trường:</label>
            <select id="area_filter" class="filter_select">
                <option value="">-- Chọn vị trí --</option>
                <option value="1">Dưới 500m</option>
                <option value="2">500m - 2km</option>
                <option value="3">2km - 5km</option>
                <option value="4">5km - 10km</option>
            </select>
            </div>
            <div class="search-bar">
                <input type="text" id="searchInput" placeholder="Tìm kiếm phòng trọ, căn hộ..." onkeyup="searchRooms()">
            </div>
            <button class="search-button"  onclick="searchRooms()">Tìm kiếm</button>
        </div>
        <div class="cards" id="roomCards">
            <div class="card">
                <img src="/Nhom2_Web/assets/imgs/images.jpg" alt="Room 1">
                <h2 class="title_card">Phòng Trọ 1</h2>
                <p class="price_card">Giá: 2.000.000 VNĐ</p>
                <p class="description_card">Phòng rộng rãi, thoáng mát, đầy đủ tiện nghi.</p>
                <a href="details_room.php">
                    <button class="btn_card">Chi tiết</button>
                </a>
            </div>
            <div class="card">
                <img src="/Nhom2_Web/assets/imgs/b2.jpg" alt="Room 1">
                <h2 class="title_card">Phòng Trọ 1</h2>
                <p class="price_card">Giá: 2.000.000 VNĐ</p>
                <p class="description_card">Phòng rộng rãi, thoáng mát, đầy đủ tiện nghi.</p>
                <a href="details_room.php">
                    <button class="btn_card">Chi tiết</button>
                </a>
            </div>
            <div class="card">
                <img src="/Nhom2_Web/assets/imgs/b4.jpg" alt="Room 1">
                <h2 class="title_card">Phòng Trọ 1</h2>
                <p class="price_card">Giá: 2.000.000 VNĐ</p>
                <p class="description_card">Phòng rộng rãi, thoáng mát, đầy đủ tiện nghi.</p>
                <a href="details_room.php">
                    <button class="btn_card">Chi tiết</button>
                </a>
            </div>
            <div class="card">
                <img src="/Nhom2_Web/assets/imgs/b9.jpg" alt="Room 2">
                <h2 class="title_card">Phòng Trọ 2</h2>
                <p class="price_card">Giá: 2.500.000 VNĐ</p>
                <p class="description_card">Phòng rộng rãi, thoáng mát, đầy đủ tiện nghi.</p>
                <a href="details_room.php">
                    <button class="btn_card">Chi tiết</button>
                </a>
            </div>
            <div class="card">
                <img src="/Nhom2_Web/assets/imgs/b3.jpg" alt="Room 3">
                <h2 class="title_card">Phòng Trọ 3</h2>
                <p class="price_card">Giá: 3.000.000 VNĐ</p>
                <p class="description_card">Phòng rộng rãi, thoáng mát, đầy đủ tiện nghi.</p>
                <a href="details_room.php">
                    <button class="btn_card">Chi tiết</button>
                </a>
            </div>
            
        </div>

    </span>

    




>>>>>>> 968c61b4217587cb9328d49989017109ebcfac23
  </div>

  <?php include("includes/footer.php"); ?>

<<<<<<< HEAD
</div>
</body>
</html>
=======
</div> 
</body>
</html>

>>>>>>> 968c61b4217587cb9328d49989017109ebcfac23
