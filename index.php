<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="wrapper">

  <?php include("includes/header.php"); ?>

  <div class="content">
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

    




  </div>

  <?php include("includes/footer.php"); ?>

</div> 
</body>
</html>

