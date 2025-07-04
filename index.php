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
</head>
<body>
<div class="wrapper">

  <?php include("includes/header.php"); ?>

  <div class="content">
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
  </div>

  <?php include("includes/footer.php"); ?>

</div>
</body>
</html>