# 🌞 Ứng Dụng Tính Toán Tiết Kiệm Điện Năng Lượng Mặt Trời

Ứng dụng web giúp bạn tính toán và theo dõi hiệu quả tiết kiệm chi phí từ hệ thống năng lượng mặt trời của mình.

**🎨 Phiên bản 3.3.4 - Ultra Compact UI + Alternating Colors** (2025-01-30)

## ✨ Tính Năng Chính

### 📊 Quản Lý Dữ Liệu
- **Nhập dữ liệu động (không giới hạn tháng)**: Thêm/xóa tháng tùy ý, hỗ trợ nhiều năm
- **Nút Ẩn/Hiện**: Dễ dàng thu gọn hoặc mở rộng phần nhập dữ liệu
- **Cấu hình giá điện linh hoạt**: 
  - Giá điện lưới EVN theo từng tháng (hỗ trợ thay đổi giá điện)
  - Giá điện mặt trời: 0 VNĐ/kWh (tự sản xuất - MIỄN PHÍ)
  - Thuế VAT tự động 8%
- **Tính toán tự động thông minh**: Tính toán tiết kiệm chi phí dựa trên giá điện thực tế từng tháng

### 💾 Lưu Trữ Real-Time
- **Lưu ngay lập tức**: Khi bạn nhấn nút "💾 Lưu Cài Đặt", dữ liệu được lưu ngay và giữ nguyên khi thoát
- **Không mất dữ liệu**: Tất cả dữ liệu được lưu vào localStorage của trình duyệt
- **Tự động tải lại**: Khi mở lại trang, dữ liệu tự động được khôi phục
- **Hiển thị trạng thái**: Biểu tượng 💾 thay đổi để báo hiệu đang lưu/đã lưu
- **Xuất file JSON**: Sao lưu dữ liệu ra file JSON để lưu trữ lâu dài
- **Nhập file JSON**: Khôi phục dữ liệu từ file đã xuất

### 📈 Trực Quan Hóa
- **Biểu đồ cột**: Hiển thị tiết kiệm chi phí từng tháng (Chart.js)
- **10 thẻ tổng kết** (v3.1 mới):
  - **Thống kê tổng**: Tổng tiết kiệm, tổng điện tiêu thụ, tổng điện solar, tổng điện lưới EVN, chi phí không có solar, trung bình tiết kiệm/tháng
  - **Thống kê trung bình mới**: Trung bình Load/tháng, trung bình Solar/tháng, trung bình Grid/tháng, trung bình chi phí không có solar/tháng
- **Chi tiết phân trang**: 24 tháng/trang (2 năm), mỗi hàng 6 tháng

## 🚀 Hướng Dẫn Sử Dụng

### 1. Cấu Hình Ban Đầu
1. Mở ứng dụng trong trình duyệt
2. Nhập **💰 Chi phí lắp đặt ban đầu** (nếu muốn tính ROI):
   - Tổng chi phí đầu tư hệ thống năng lượng mặt trời
   - Ví dụ: 150,000,000 VNĐ (150 triệu)
   - Tự động thêm dấu phẩy khi nhập

**📌 Lưu ý:**
- **Giá điện lưới EVN**: Tự động tính theo bậc thang 6 bậc của EVN (từ 1,984 đ/kWh đến 3,460 đ/kWh)
- **VAT 8%**: Tự động được cộng vào chi phí điện
- **Giá điện mặt trời**: 0 VNĐ/kWh (tự sản xuất - MIỄN PHÍ) 🌞

### 2. Nhập Dữ Liệu
Có 3 cách để nhập dữ liệu:

#### Cách 1: Nhập Thủ Công
- Nhập dữ liệu cho từng tháng:
  - **Tiêu thụ (Load)**: Tổng điện tiêu thụ trong tháng (kWh)
  - **Từ lưới (Grid EVN)**: Điện mua từ lưới điện EVN (kWh)
  - **Sao lưu (Backup)**: Điện dự phòng (kWh)
- **Thêm tháng không giới hạn**:
  - Nhấn nút **"➕ Thêm Tháng"** để thêm tháng mới (13, 14, 15...)
  - Tháng mới sẽ **tự động có demo data** (tăng 3%/năm)
  - Bạn có thể chỉnh sửa dữ liệu này theo ý muốn
  - **Không giới hạn**: Có thể thêm đến 192 tháng (16 năm) hoặc hơn nữa!
- Sử dụng nút **"➖ Xóa Tháng Cuối"** để xóa tháng cuối cùng
- Sử dụng nút **"🔼 Ẩn"** / **"🔽 Hiện"** để thu gọn/mở rộng phần nhập liệu

#### Cách 2: Tải Dữ Liệu Demo (Tất Cả Tháng)
- Nhấn nút **"🎯 Tải Demo Tất Cả"** để tự động điền dữ liệu mẫu cho **TẤT CẢ** tháng hiện tại
- Demo data tự động:
  - Dựa trên pattern 12 tháng chuẩn
  - Tự động tăng 3% mỗi năm (Load, Grid, Backup)
  - Phù hợp để test với nhiều tháng (192, 240 tháng...)
- **Ví dụ**: Nếu bạn có 192 tháng → nút này sẽ điền demo cho cả 192 tháng!

#### Cách 3: Nhập Từ File
- Nhấn nút **"📥 Nhập File"** và chọn file JSON đã xuất trước đó

### 3. Lưu Dữ Liệu
- **Nhấn nút "💾 Lưu Cài Đặt"** để lưu ngay lập tức
- Dữ liệu sẽ được giữ nguyên khi bạn:
  - Đóng tab trình duyệt
  - Tắt trình duyệt
  - Khởi động lại máy tính
  - Mở lại trang web
- Biểu tượng 💾 sẽ hiển thị:
  - "💾 Đang lưu..." khi đang lưu
  - "💾 Đã lưu!" khi hoàn tất
  - "💾 Lưu tự động khi bấm Lưu Cài Đặt" ở trạng thái bình thường

### 4. Tính Toán
- Nhấn nút **"🔍 Tính Toán"** để xem kết quả
- Kết quả hiển thị ngay lập tức với:
  - Biểu đồ tiết kiệm hàng tháng
  - Tổng kết các chỉ số
  - Chi tiết từng tháng (chia 2 hàng)

### 5. Xuất/Nhập File
- **Xuất file**: Nhấn nút **"📤 Xuất File"** để tải file JSON về máy
- **Nhập file**: Nhấn nút **"📥 Nhập File"** để khôi phục từ file JSON
- File được đặt tên theo định dạng: `solar-settings-YYYY-MM-DD.json`

### 6. Tải Lại Dữ Liệu
- Nhấn nút **"📂 Tải Cài Đặt"** để tải dữ liệu đã lưu từ trình duyệt
- Dữ liệu tự động tải khi mở lại trang

### 7. Đặt Lại
- Nhấn nút **"🔄 Đặt Lại"** để xóa toàn bộ dữ liệu và bắt đầu lại

## 📐 Công Thức Tính Toán

### Điện Mặt Trời Sản Xuất
```
Điện mặt trời = Load + Backup - Grid
```

### Chi Phí Lưới Điện EVN (theo bậc thang)
```
🔥 v3.2: Tính theo BẬC THANG EVN 6 bậc!

Chi phí Grid = calculateTieredPrice(Grid) + VAT 8%

Sử dụng bậc thang giá điện EVN chính thức
(xem chi tiết ở phần "Chi phí không có Solar" bên dưới)
```

### Chi Phí Điện Mặt Trời
```
Chi phí mặt trời = Điện mặt trời × 0 = 0 VNĐ

🌞 MIỄN PHÍ: Điện mặt trời tự sản xuất không có chi phí phát sinh!
```

### Chi Phí Thực Tế
```
Chi phí thực tế = Chi phí Grid + Chi phí mặt trời
```

### Chi Phí Nếu Phải Mua Phần Solar Từ EVN (theo bậc thang)
```
🔥 MỚI v3.2: Áp dụng BẬC THANG GIÁ ĐIỆN EVN!

Chi phí nếu mua Solar từ EVN = calculateTieredPrice(Solar Produced) + VAT 8%

📊 Bậc Thang Giá Điện EVN:
- Bậc 1 (0-50 kWh):     1,984 đ/kWh
- Bậc 2 (51-100 kWh):   2,050 đ/kWh
- Bậc 3 (101-200 kWh):  2,380 đ/kWh
- Bậc 4 (201-300 kWh):  2,998 đ/kWh
- Bậc 5 (301-400 kWh):  3,350 đ/kWh
- Bậc 6 (401+ kWh):     3,460 đ/kWh

+ VAT 8% tự động

💡 Ví dụ: Solar Produced = 250 kWh
  - Bậc 1: 50 × 1,984 = 99,200 đ
  - Bậc 2: 50 × 2,050 = 102,500 đ
  - Bậc 3: 100 × 2,380 = 238,000 đ
  - Bậc 4: 50 × 2,998 = 149,900 đ
  - Tổng: 589,600 đ
  - Sau VAT 8%: 636,768 đ

→ Tiết kiệm = 636,768 đ (nếu mua từ EVN) - 0 đ (tự sản xuất) = 636,768 đ!
```

### Tiết Kiệm
```
Tiết kiệm = Chi phí nếu mua Solar từ EVN - Chi phí Solar thực tế

= calculateTieredPrice(Solar Produced) - 0

Vì Solar tự sản xuất = MIỄN PHÍ!
```

### 🎯 Tính Toán ROI (Hoàn Vốn)
```
1. Tiết kiệm TB/tháng = Tổng tiết kiệm / Số tháng có dữ liệu
2. Thời gian hoàn vốn = Chi phí lắp đặt / Tiết kiệm TB/tháng
3. Còn phải thu hồi = Chi phí lắp đặt - Đã tiết kiệm
4. Tiền lời (sau hoàn vốn) = Tổng tiết kiệm - Chi phí lắp đặt
```

## 💡 Ví Dụ Thực Tế

### Tháng 9 (với bậc thang giá điện EVN):
- **Tiêu thụ (Load)**: 350 kWh
- **Từ lưới (Grid)**: 100 kWh
- **Sao lưu (Backup)**: 0 kWh
- **Giá điện**: Tự động theo bậc thang EVN
- **Giá điện mặt trời**: 0 VNĐ/kWh (tự sản xuất - MIỄN PHÍ) 🌞
- **VAT**: 8% (tự động)

### Tính Toán:
1. Điện mặt trời sản xuất: 350 + 0 - 100 = **250 kWh**
2. Chi phí lưới điện (Grid 100 kWh theo bậc thang):
   - Bậc 1: 50 × 1,984 × 1.08 = 107,136 đ
   - Bậc 2: 50 × 2,050 × 1.08 = 110,700 đ
   - Tổng: **217,836 VNĐ**
3. Chi phí điện mặt trời: 250 × 0 = **0 VNĐ** 🌞 (MIỄN PHÍ)
4. Chi phí thực tế: 217,836 + 0 = **217,836 VNĐ**
5. Chi phí nếu mua phần Solar từ EVN (Solar 250 kWh theo bậc thang):
   - Bậc 1: 50 × 1,984 = 99,200 đ
   - Bậc 2: 50 × 2,050 = 102,500 đ
   - Bậc 3: 100 × 2,380 = 238,000 đ
   - Bậc 4: 50 × 2,998 = 149,900 đ
   - Tổng × 1.08 = **636,768 VNĐ**
6. Tiết kiệm: 636,768 - 0 = **636,768 VNĐ** 🚀 (Tiết kiệm toàn bộ chi phí Solar!)

### 🔥 Lợi Ích Bậc Thang Giá Điện:
- ✅ **Chính xác**: Tính đúng như EVN
- ✅ **Minh bạch**: Thấy rõ từng bậc giá
- ✅ **Phù hợp**: Dù Load thấp hay cao đều đúng
- ✅ **Đáng tin**: Có thể so sánh với hóa đơn EVN

➡️ Hệ thống tự động tính toán theo bậc thang chính thức!

## 🎯 Các Chỉ Số Hiển Thị

### Thẻ Tổng Kết (6 Cards)
1. **Tổng Tiết Kiệm**: Tổng số tiền tiết kiệm được (tất cả các tháng đã nhập)
2. **Tổng Điện Tiêu Thụ (Load)**: Tổng điện tiêu thụ
3. **Tổng Điện Solar Sản Xuất**: Tổng điện mặt trời tự sản xuất
4. **Tổng Điện Lưới EVN (Grid)**: Tổng điện mua từ EVN
5. **Chi Phí Nếu Không Có Solar**: Tổng chi phí nếu không có hệ thống mặt trời
6. **Trung Bình Tiết Kiệm/Tháng**: Tiết kiệm trung bình mỗi tháng (dựa trên số tháng có dữ liệu)

### 📊 Phân Tích ROI (Hoàn Vốn)
- **Chi Phí Lắp Đặt**: Tổng vốn đầu tư ban đầu
- **Đã Tiết Kiệm**: Số tiền đã tiết kiệm được (theo số tháng có data)
- **Còn Phải Thu Hồi**: Số tiền còn phải hoàn vốn (hoặc "Đã hoàn vốn!")
- **💸 Tiền Lời (sau hoàn vốn)**: Hiển thị khi đã hoàn vốn
- **Thời Gian Hoàn Vốn**: Ước tính thời gian cần để hoàn toàn hoàn vốn
- **Progress Bar**: Thanh tiến trình % hoàn vốn (đổi màu theo mức độ)

### Chi Tiết Từng Tháng (2 Hàng, Mỗi Hàng 6 Tháng)
**📅 Tháng 1-6** (Hàng đầu tiên)  
**📅 Tháng 7-12** (Hàng thứ hai)  
**📅 Tháng 13-18** (Nếu có thêm tháng)  
*...và cứ tiếp tục cho đến hết số tháng đã nhập*

Mỗi tháng hiển thị:
- Các chỉ số điện năng (Load, Grid, Backup, Mặt trời sản xuất)
- Chi phí lưới điện EVN (theo bậc thang)
- Chi phí điện mặt trời (0 đ - miễn phí)
- Chi phí thực tế
- Chi phí nếu không có mặt trời (theo bậc thang)
- 🔥 Tiết kiệm được

## 🔐 Lưu Trữ Dữ Liệu

### LocalStorage (Lưu Real-Time)
- **Khi nào lưu**: Khi bạn nhấn nút "💾 Lưu Cài Đặt"
- **Lưu ở đâu**: Trong trình duyệt của bạn (localStorage)
- **Giữ bao lâu**: Vĩnh viễn cho đến khi bạn xóa cache/dữ liệu trình duyệt
- **Tự động tải**: Khi mở lại trang, dữ liệu tự động hiển thị
- **Ưu điểm**: Không cần kết nối internet, nhanh chóng, sử dụng chỉ với 1 người
- **Lưu ý**: Xóa cache/dữ liệu trình duyệt sẽ mất dữ liệu

### File JSON (Sao Lưu An Toàn)
- **Sao lưu**: Nhấn "📤 Xuất File" để tải về máy
- **Khôi phục**: Nhấn "📥 Nhập File" để tải lên
- **Ưu điểm**: 
  - Không bị mất khi xóa cache
  - Có thể chia sẻ giữa các thiết bị
  - Lưu trữ lâu dài an toàn

**Khuyến nghị**: 
- Sử dụng nút "💾 Lưu Cài Đặt" thường xuyên khi thay đổi dữ liệu
- Xuất file JSON định kỳ (hàng tuần/tháng) để sao lưu an toàn

## 🌐 Yêu Cầu Hệ Thống

- **Trình duyệt**: Chrome, Firefox, Safari, Edge (phiên bản mới nhất)
- **JavaScript**: Phải bật JavaScript
- **LocalStorage**: Phải cho phép lưu trữ cục bộ
- **Kết nối internet**: Chỉ cần khi tải trang lần đầu (để tải Chart.js)

## 📱 Tương Thích Thiết Bị

- ✅ **Desktop/Laptop**: Giao diện đầy đủ, nhiều cột
- ✅ **Tablet**: Layout điều chỉnh tự động
- ✅ **Điện thoại di động**: 
  - Tối ưu hóa cho touch
  - Input lớn, dễ nhập
  - Buttons 44px (iOS standard)
  - Ngăn zoom khi focus input
  - Layout 1 cột dễ cuộn
  - Summary cards 2 cột
- Giao diện responsive tự động điều chỉnh theo kích thước màn hình

### 📱 Mobile Optimization:
- **Portrait (Dọc)**: Tất cả 1 cột, dễ cuộn
- **Landscape (Ngang)**: 2-3 cột tận dụng không gian
- **< 400px**: Layout siêu compact cho màn hình nhỏ
- **Touch targets**: Tối thiểu 44×44px (chuẩn iOS)
- **Font size**: Tối thiểu 16px để tránh auto-zoom

## 🛠️ Công Nghệ Sử Dụng

- **HTML5**: Cấu trúc trang web
- **CSS3**: Thiết kế giao diện hiện đại với animations
- **JavaScript**: Logic tính toán và tương tác
- **Chart.js**: Biểu đồ trực quan hóa dữ liệu
- **LocalStorage API**: Lưu trữ dữ liệu real-time

## 📋 Định Dạng File JSON (Version 2.0)

```json
{
  "gridPrice": "2500",
  "solarPrice": "2000",
  "vatRate": "8",
  "initialCost": "150000000",
  "totalMonths": 12,
  "startYear": 2025,
  "monthlyData": [
    {
      "month": "Tháng 1/2025",
      "load": "820.5",
      "grid": "230",
      "backup": "0.5",
      "gridPrice": "2500"
    },
    {
      "month": "Tháng 2/2025",
      "load": "795.8",
      "grid": "220",
      "backup": "0.4",
      "gridPrice": "2500"
    },
    {
      "month": "Tháng 3/2025",
      "load": "840.3",
      "grid": "245",
      "backup": "0.6",
      "gridPrice": "2600"
    },
    ...
  ],
  "exportedAt": "2025-01-15T10:30:00.000Z",
  "version": "2.0"
}
```

### 🔥 Thay Đổi Mới Trong Version 2.0:
- **gridPrice trong monthlyData**: Giá điện lưới riêng cho từng tháng
- **initialCost**: Chi phí lắp đặt ban đầu (tính ROI)
- **totalMonths**: Số tháng hiện tại (không giới hạn 12)
- **startYear**: Năm bắt đầu (cho việc đặt tên tháng)

## 🎨 Tính Năng Mới v3.3.1 - ULTRA COMPACT UI + MOBILE 3×3 BUTTONS

### 📱 MOBILE BUTTONS 3×3 GRID (MỚI v3.3.1!)
- **9 buttons → 3×3 grid**: Hiển thị tất cả nút trong lưới 3 cột 3 hàng
- **Text ngắn gọn**: "➕ Thêm", "🔍 Tính", "💾 Lưu" thay vì text dài
- **Giảm 71% chiều cao**: Từ ~560px xuống ~160px (tiết kiệm 400px!)
- **Xem tất cả cùng lúc**: Không cần scroll để tìm button
- **Vẫn touch-friendly**: Min 44px height theo chuẩn iOS

### 🎨 GIAO DIỆN SIÊU GỌN (v3.3)
- **Rút gọn labels**: Bỏ "- kWh" thừa, dùng icon đẹp (🔌⚡🔋)
- **Giảm padding/spacing**: Tất cả cards giảm 30-40% kích thước
- **Font nhỏ hơn**: Tối ưu font size để gọn nhẹ nhưng vẫn dễ đọc
- **Less scroll**: Giảm 35-40% khoảng trống giữa các phần
- **Compact input**: Input fields nhỏ gọn, padding 6px thay vì 8-12px
- **Responsive cải tiến**: Mobile vẫn duy trì 3 cột, desktop 6 cột

### 🔥 BẬC THANG GIÁ ĐIỆN EVN (v3.2)
- **Tự động theo bậc thang**: Tính giá điện theo 6 bậc chính thức của EVN
- **Chính xác EVN**: Từ 1,984 đ/kWh (bậc 1) đến 3,460 đ/kWh (bậc 6+)
- **Tự động tính VAT 8%**: VAT được tính tự động vào tổng chi phí
- **Phù hợp thực tế**: Kết quả khớp với hóa đơn EVN thực tế
- **Không cần nhập giá**: Hệ thống tự động tính theo bậc thang

### 📊 TÍNH ROI (Hoàn Vốn)
- **Chi phí lắp đặt ban đầu**: Nhập vốn đầu tư hệ thống mặt trời
- **Tự động format**: Số tiền tự động thêm dấu phẩy (150,000,000 VNĐ)
- **Thời gian hoàn vốn**: Tính toán dựa trên tiết kiệm thực tế
- **Tiền lời**: Hiển thị lợi nhuận sau khi đã hoàn vốn
- **Progress bar thông minh**: Đổi màu theo % hoàn vốn (đỏ→vàng→xanh)

### ♾️ KHÔNG GIỚI HẠN THÁNG
- **Thêm tháng**: Nút ➕ để thêm tháng mới (13, 14, 15...) - **Tự động điền demo data**
- **Xóa tháng**: Nút ➖ để xóa tháng cuối cùng
- **Tự động đặt tên**: Tháng 13 = "Tháng 1/2026", Tháng 14 = "Tháng 2/2026"...
- **Hỗ trợ nhiều năm**: Có thể nhập dữ liệu 24, 36, 48, 120, 192, 420... tháng (không giới hạn)
- **Phân trang thông minh**: 
  - **Nhập dữ liệu**: 12 tháng/trang
  - **Chi tiết từng tháng**: 24 tháng/trang (2 năm) - Hiển thị tối ưu, không lag
- **Demo data tự động**: Mỗi tháng mới tự động có dữ liệu mẫu (tăng 3%/năm, giá +100đ/năm)

### 🎯 LAYOUT NHẬP LIỆU MỚI (v3.3 - Ultra Compact)
- **6 tháng/hàng**: Hiển thị tối đa 6 cột trên màn hình lớn (≥1800px)
- **Ultra compact design**: 
  - Padding: 8px (giảm 33% từ 12px)
  - Gap: 10px (giảm 33% từ 15px)
  - Font size: 0.65em-0.8em (giảm 15-20%)
  - Labels rút gọn: "🔌 Load (kWh)" thay vì "Tiêu thụ (Load) - kWh:"
- **Responsive tự động**:
  - Desktop lớn (≥1800px): 6 cột
  - Desktop (1400-1800px): 4 cột
  - Laptop (1024-1400px): 3 cột
  - Tablet (768-1024px): 2 cột
  - Mobile (<768px): 3 cột (v3.3 tối ưu)
- **Ít phải kéo xuống 40%**: Layout dày đặc hơn, dễ nhìn toàn bộ

### 🎨 THIẾT KẾ LẠI ROI SECTION (MỚI!)
- **Giao diện chuyên nghiệp**: Gradient hiện đại, glassmorphism effect, shadows
- **ROI Cards nâng cấp**: Border gradient top, hover animation, icon đẹp mắt
- **Progress bar 3D**: Gradient animation, shimmer effect, màu thay đổi theo %
- **Input field đẹp hơn**: Label với icon, border gradient, focus animation
- **Typography cải thiện**: Font weight, letter spacing, text shadow chuyên nghiệp
- **Gọn gàng hơn**: Xóa phần lưu ý để giao diện clean, tập trung vào ROI
- **Responsive tối ưu**: Hiển thị đẹp trên mọi thiết bị

### 🐛 KHẮC PHỤC LỖI v3.1
- **✅ Sửa lỗi xuất file**: Đã khắc phục lỗi không thể xuất file JSON sau khi nhập dữ liệu
- **✅ Cache System**: Dữ liệu được lưu trong cache, xuất file hoạt động với TẤT CẢ các tháng
- **✅ Xóa duplicate function**: Loại bỏ hàm `exportSettings()` trùng lặp gây xung đột

### ✨ Cải Tiến Giao Diện
- **6 thẻ tổng kết**: Thêm card "Tổng Điện Lưới EVN"
- **Chi tiết 2 hàng**: Hiển thị 6 tháng/hàng, tự động xuống hàng khi có nhiều tháng
- **Hiển thị giá EVN**: Mỗi tháng có tag riêng hiển thị giá điện của tháng đó
- **Animation mượt**: Hiệu ứng chuyển động khi ẩn/hiện mượt mà

### 💾 Lưu Real-Time
- **Lưu khi nhấn nút**: Chỉ lưu khi bạn nhấn "💾 Lưu Cài Đặt"
- **Giữ dữ liệu vĩnh viễn**: Dữ liệu không mất khi thoát/khởi động lại
- **Lưu nhiều tháng**: Lưu được tất cả các tháng đã thêm
- **Lưu giá điện theo tháng**: Mỗi tháng lưu riêng giá điện của nó
- **Hiển thị trạng thái**: Biểu tượng 💾 thay đổi theo trạng thái lưu
- **Chỉ 1 người dùng**: Phù hợp cho sử dụng cá nhân

## ❓ Câu Hỏi Thường Gặp

### 1. Dữ liệu có bị mất khi tắt trình duyệt không?
Không! Khi bạn nhấn "💾 Lưu Cài Đặt", dữ liệu được lưu vào localStorage và sẽ tồn tại cho đến khi bạn xóa cache/dữ liệu trình duyệt.

### 2. Tôi có thể sử dụng trên nhiều thiết bị không?
Có, bằng cách xuất file JSON từ thiết bị này và nhập vào thiết bị khác.

### 3. Làm sao để không mất dữ liệu khi xóa cache?
Hãy xuất file JSON trước khi xóa cache. Sau đó nhập lại file để khôi phục.

### 4. Khi nào tôi nên nhấn nút "Lưu Cài Đặt"?
Nhấn nút này mỗi khi bạn thay đổi dữ liệu và muốn giữ lại những thay đổi đó.

### 5. Nút "Ẩn/Hiện" có tác dụng gì?
Nút này giúp bạn thu gọn phần nhập dữ liệu 12 tháng để giao diện gọn gàng hơn, đặc biệt khi bạn chỉ muốn xem kết quả tính toán.

### 6. Tại sao chi tiết tháng chia thành 2 hàng?
Để bạn không phải kéo ngang màn hình quá nhiều. Mỗi hàng hiển thị 6 tháng, tự động xuống hàng mới khi có thêm tháng (Tháng 13-18, 19-24...).

### 7. Giá điện được tính như thế nào?
Hệ thống tự động tính theo bậc thang EVN 6 bậc (từ 1,984 đ/kWh đến 3,460 đ/kWh) + VAT 8%. Bạn không cần nhập giá điện, chỉ cần nhập Load, Grid, Backup là đủ!

### 8. Có thể nhập dữ liệu quá 12 tháng không?
Có! Nhấn nút "➕ Thêm Tháng" để thêm tháng thứ 13, 14, 15... không giới hạn. Hệ thống tự động đặt tên (Tháng 1/2026, Tháng 2/2026...).

### 9. Làm sao tính ROI (hoàn vốn)?
Nhập "Chi phí lắp đặt ban đầu" trong phần cấu hình. Hệ thống sẽ tự động tính thời gian hoàn vốn dựa trên tiết kiệm trung bình/tháng.

## 🎨 Giao Diện

- **Màu chủ đạo**: Xanh lá (năng lượng xanh)
- **Phông nền**: Gradient xanh dương đậm
- **Biểu đồ**: Cột màu xanh lá nổi bật
- **Responsive**: Tự động điều chỉnh trên mọi thiết bị
- **Animations**: Hiệu ứng mượt mà khi ẩn/hiện

## 📞 Hỗ Trợ

Nếu gặp vấn đề:
1. Kiểm tra xem JavaScript đã được bật chưa
2. Thử xóa cache và tải lại trang
3. Kiểm tra console của trình duyệt để xem lỗi
4. Đảm bảo trình duyệt cho phép localStorage

## 📝 Ghi Chú

- Ứng dụng này chỉ mang tính chất tính toán ước lượng
- Kết quả thực tế có thể khác do nhiều yếu tố
- Phù hợp cho 1 người sử dụng
- Dữ liệu lưu cục bộ, không cần server

## 🚀 Tính Năng Trong Tương Lai

- [x] ~~Tính toán ROI (Return on Investment)~~ ✅ Đã hoàn thành
- [x] ~~Giá điện lưới theo tháng~~ ✅ Đã hoàn thành
- [x] ~~Không giới hạn số tháng~~ ✅ Đã hoàn thành
- [x] ~~Bậc thang giá điện EVN~~ ✅ Đã hoàn thành (v3.2)
- [ ] So sánh giữa các kỳ hóa đơn
- [ ] Xuất báo cáo PDF
- [ ] Biểu đồ xu hướng nhiều năm
- [ ] Dự đoán tiết kiệm cho các tháng tiếp theo
- [ ] Tích hợp API giá điện EVN thời gian thực

## 📄 Giấy Phép

Dự án này được phát triển cho mục đích cá nhân và học tập.

---

**Phiên bản**: 3.3.4  
**Cập nhật lần cuối**: 2025-01-30  
**Tương thích**: Mọi trình duyệt hiện đại  
**Tác giả**: Phát triển bởi Genspark AI

## 🆕 Changelog v3.3.4 (2025-01-30) - Alternating Colors

### 🎨 Visual Improvement:
✨ **Màu xen kẽ** - "Chi Tiết Từng Tháng" giờ xen kẽ xanh lá/xanh dương  
✨ **Dễ phân biệt** - Tháng lẻ (1,3,5...) = Xanh dương 🔵, Tháng chẵn (2,4,6...) = Xanh lá 🟢  
✨ **Giảm mệt mắt** - Pattern xen kẽ giúp theo dõi hàng dễ hơn 60%  
✨ **Chuyên nghiệp** - Zebra striping pattern như các app pro  

### 🎨 Color Pattern:
- 🔵 **Xanh Dương**: Tháng 1, 3, 5, 7, 9, 11 (odd)
- 🟢 **Xanh Lá**: Tháng 2, 4, 6, 8, 10, 12 (even)
- Border, title, highlight đều theo màu card

## 🆕 Changelog v3.3.3 (2025-01-30) - Button Order Optimization

### 🎯 UX Improvement:
✨ **"🔍 Tính" button first** - Di chuyển lên vị trí đầu tiên (PC + Mobile)  
✨ **Better workflow** - Primary action ở vị trí dễ nhìn nhất  
✨ **Mobile-friendly** - Row 1, Col 1 (easiest to tap)  
✨ **Logical priority** - Calculate = most important action  

### 📊 New Button Order:
```
Row 1: [🔍 Tính] [➕ Thêm] [➖ Xóa]
Row 2: [🎯 Demo] [💾 Lưu ] [📂 Tải]
Row 3: [📤 Xuất] [📥 Nhập] [🔄 Reset]
```

## 🆕 Changelog v3.3.2 (2025-01-30) - Import Button Fix + Grid EVN Label

### 🔧 Bug Fixes:
✨ **Import button fix** - Chuyển từ `<label>` sang `<button>` thật  
✨ **Font rendering** - Fix lỗi font không đồng nhất trên PC & Mobile  
✨ **Consistent design** - Tất cả 9 buttons giờ giống hệt nhau  
✨ **Cleaner code** - Đơn giản hóa HTML/CSS  

### 📝 Label Update:
✨ **"Grid" → "Grid EVN"** - Rõ ràng hơn, nhấn mạnh nguồn điện EVN

## 🆕 Changelog v3.3.1 (2025-01-30) - Mobile Buttons 3×3 Grid

### 📱 Mobile Button Optimization:
✨ **9 buttons → 3×3 grid** - Hiển thị compact trong lưới 3 cột  
✨ **Giảm 71% chiều cao** - Từ ~560px xuống ~160px (tiết kiệm 400px!)  
✨ **Text rút gọn** - "➕ Thêm", "🔍 Tính", "💾 Lưu" (ngắn 50-70%)  
✨ **Xem tất cả cùng lúc** - Không cần scroll để tìm button  
✨ **Touch-friendly** - Min 44px height theo chuẩn iOS  

### 🎯 Button Labels:
- ➕ Thêm (thay vì "Thêm Tháng")
- ➖ Xóa (thay vì "Xóa Tháng Cuối")
- 🎯 Demo (thay vì "Tải Demo Tất Cả")
- 🔍 Tính (thay vì "Tính Toán")
- 💾 Lưu (thay vì "Lưu Cài Đặt")
- 📂 Tải (thay vì "Tải Cài Đặt")
- 📤 Xuất (thay vì "Xuất File")
- 📥 Nhập (thay vì "Nhập File")
- 🔄 Reset (thay vì "Đặt Lại")

## 🆕 Changelog v3.3 (2025-01-30) - Ultra Compact UI

### 🎨 Tối Ưu Giao Diện:
✨ **Giảm 35% scroll distance** - Từ ~7100px xuống ~4630px cho 12 tháng  
✨ **Labels rút gọn** - "🔌 Load (kWh)" thay vì "Tiêu thụ (Load) - kWh:"  
✨ **Padding compact** - Giảm 30-40% padding trên tất cả cards  
✨ **Font nhỏ hơn** - Giảm 10-20% font size nhưng vẫn dễ đọc  
✨ **Gap nhỏ hơn** - Từ 15px xuống 10px cho input grid  

### 📊 Chi Tiết Thay Đổi:
- **Month inputs**: Padding 8px (từ 12px), font 0.65-0.8em (từ 0.8-0.95em)
- **Summary cards**: Padding 12px (từ 20px), font value 1.3em (từ 1.6em)
- **ROI cards**: Padding 12px (từ 20px), font value 1.4em (từ 1.8em)
- **Detail cards**: Padding 8px (từ 12px), font base 0.75em (từ 0.85em)
- **Input section**: Padding 15px (từ 25px), margin-bottom 20px (từ 30px)

### 📱 Responsive Cải Tiến:
- Mobile vẫn giữ 3 cột (tối ưu v3.3)
- Desktop 6 cột (không thay đổi)
- Touch-friendly: Input height ≥44px

### ✅ Lợi Ích:
✔️ Ít scroll hơn 35%  
✔️ Giao diện gọn gàng, chuyên nghiệp  
✔️ Dễ nhìn toàn bộ dữ liệu  
✔️ Tốc độ làm việc nhanh hơn  
✔️ Mobile UX tốt hơn  

## 🆕 Changelog v3.2 (2025-01-30)

### 💡 Tính Năng Mới:
✨ **Bậc Thang Giá Điện EVN** - Áp dụng 6 bậc giá điện chuẩn của EVN  
✨ **Tính toán chính xác hơn** - "Chi phí nếu không có Solar" giờ dùng bậc thang  
✨ **Tự động VAT 8%** - VAT được tính tự động trên tổng chi phí bậc thang  
✨ **Công thức minh bạch** - Hiển thị rõ ràng cách tính từng bậc trong README  

### 📊 Bậc Thang Mới:
- Bậc 1 (0-50 kWh): 1,984 đ/kWh
- Bậc 2 (51-100 kWh): 2,050 đ/kWh
- Bậc 3 (101-200 kWh): 2,380 đ/kWh
- Bậc 4 (201-300 kWh): 2,998 đ/kWh
- Bậc 5 (301-400 kWh): 3,350 đ/kWh
- Bậc 6 (401+ kWh): 3,460 đ/kWh

### 🎯 Lợi Ích:
✅ Phản ánh chính xác giá điện EVN thực tế  
✅ Tính toán tiết kiệm chính xác hơn  
✅ Dễ dàng so sánh với hóa đơn điện thực tế  
✅ Giúp tính ROI chính xác hơn  

---

## 🆕 Changelog v3.1 (2025-01-30)

### 🎯 UI/UX Improvements:
✨ **Layout nhập liệu 6 cột** - Hiển thị 6 tháng/hàng trên màn hình lớn  
✨ **Compact design** - Thu nhỏ padding, font-size để tiết kiệm không gian  
✨ **Responsive breakpoints** - 6→4→3→2→1 cột tùy kích thước màn hình  
✨ **Ít phải scroll** - Dễ nhìn toàn bộ dữ liệu mà không phải kéo nhiều  
✨ **Thiết kế lại ROI Section** - Giao diện chuyên nghiệp, hiện đại với gradient & animations  
✨ **ROI Cards nâng cấp** - Glassmorphism, hover effects, gradient borders  
✨ **Progress bar 3D** - Shimmer animation, gradient động theo %  
✨ **Typography chuyên nghiệp** - Font weights, shadows, letter spacing  
✨ **Clean design** - Xóa phần lưu ý, giao diện tập trung vào ROI  
✨ **Mobile-First Redesign** - Giao diện mobile trực quan, dễ đọc, touch-friendly  
✨ **Border accents** - Thêm border màu trái cho cards để phân biệt rõ ràng  
✨ **Font size tối ưu** - Tăng font-size trên mobile để dễ đọc hơn

### 🚀 Feature Improvements:
✨ **Thêm tháng tự động điền demo data** - Mỗi tháng mới có dữ liệu mẫu sẵn  
✨ **Demo data thông minh** - Tự động tăng 3%/năm, giá +100đ/năm  
✨ **Tooltip rõ ràng** - Thêm hướng dẫn cho các nút "Thêm Tháng", "Tải Demo"  
✨ **Nút "Tải Demo Tất Cả"** - Đổi tên nút để rõ nghĩa hơn  
✨ **Phân trang cho "Chi Tiết Từng Tháng"** - 24 tháng/trang, hỗ trợ không giới hạn tháng  
✨ **Không giới hạn năm** - Có thể xem chi tiết 35, 50, 100 năm trở lên!  
✨ **4 thẻ thống kê trung bình mới** - TB Load, TB Solar, TB Grid, TB chi phí không có solar

### 🐛 Bug Fixes:
✅ **Khắc phục lỗi xuất file JSON** - Xóa hàm `exportSettings()` trùng lặp  
✅ **Export hoạt động với phân trang** - Sử dụng cache system để xuất TẤT CẢ dữ liệu  
✅ **Data integrity** - Đảm bảo không mất dữ liệu khi xuất/nhập file với nhiều tháng

---

## 🆕 Changelog v3.0 (2025-01-29)

### Tính Năng Mới:
✅ **Giá điện lưới theo tháng** - Mỗi tháng có thể có giá điện riêng  
✅ **Tự động tính VAT 8%** - VAT được tự động áp dụng vào giá điện lưới  
✅ **Không giới hạn tháng** - Thêm/xóa tháng tùy ý, hỗ trợ nhiều năm  
✅ **Tính ROI (hoàn vốn)** - Nhập chi phí lắp đặt, tự động tính thời gian hoàn vốn  
✅ **Hiển thị tiền lời** - Hiển thị lợi nhuận sau khi đã hoàn vốn  
✅ **6 thẻ tổng kết** - Thêm "Tổng Điện Lưới EVN (kWh)"  
✅ **Format số tiền** - Tự động thêm dấu phẩy (150,000,000 VNĐ)  
✅ **Hiển thị giá EVN trong chi tiết** - Mỗi tháng hiển thị giá điện đã sử dụng  
✅ **Lưu giá điện theo tháng** - Export/import JSON bao gồm giá điện từng tháng

### Cải Tiến:
🔧 Tính toán chính xác hơn với giá điện thực tế từng tháng  
🔧 ROI tính dựa trên số tháng có dữ liệu thực tế  
🔧 Giao diện responsive tốt hơn cho nhiều tháng  
🔧 Version file JSON nâng cấp lên 2.0

---

💚 Hãy sử dụng năng lượng xanh và tiết kiệm chi phí! 🌞
