# 🔧 Sửa Logic Tính "Chi Phí Nếu Không Có Solar"

## ❌ Vấn Đề Logic Cũ

### Logic SAI (trước khi sửa):
```javascript
// Tính chi phí nếu không có Solar dựa trên LOAD
const costWithoutSolar = calculateTieredPrice(load, vatRate);

// Tính tiết kiệm
const savings = costWithoutSolar - actualCost;
```

### Tại sao SAI?

#### Ví dụ:
```
Load = 350 kWh (tổng điện tiêu thụ)
Grid = 100 kWh (đã mua từ EVN)
Solar Produced = 350 - 100 = 250 kWh

costWithoutSolar = bậc thang(350) = 979,560 đ
actualCost = bậc thang(100) + 0 = 217,836 đ
savings = 979,560 - 217,836 = 761,724 đ
```

**Vấn đề:**
1. **Không logic**: So sánh 2 kịch bản khác nhau
   - `costWithoutSolar`: Chi phí toàn bộ 350 kWh từ EVN
   - `actualCost`: Chỉ chi phí 100 kWh từ EVN

2. **Tiết kiệm sai**: Không phản ánh đúng giá trị Solar
   - Solar sản xuất 250 kWh → tiết kiệm 250 kWh
   - Nhưng tính theo Load 350 kWh → nhầm lẫn!

3. **Không so sánh đúng**: 
   - Nên so sánh: "Chi phí mua Solar từ EVN" vs "Chi phí Solar tự sản xuất"
   - Thay vì: "Chi phí toàn bộ Load" vs "Chi phí thực tế"

---

## ✅ Logic Đúng (sau khi sửa)

### Code Mới:
```javascript
// Tính chi phí nếu phải MUA phần Solar từ EVN
const costWithoutSolar = calculateTieredPrice(solarProduced, vatRate);

// Chi phí Solar thực tế (= 0 vì tự sản xuất)
const solarCost = solarProduced * solarPrice; // = 250 × 0 = 0

// Tiết kiệm = Chi phí mua Solar từ EVN - Chi phí Solar thực tế
const savings = costWithoutSolar - solarCost;
```

### Tại sao ĐÚNG?

#### Ví dụ tương tự:
```
Solar Produced = 250 kWh
solarPrice = 0 đ/kWh (miễn phí)

costWithoutSolar = bậc thang(250) = 636,768 đ
solarCost = 250 × 0 = 0 đ
savings = 636,768 - 0 = 636,768 đ
```

**Lợi ích:**
1. **Logic rõ ràng**: So sánh đúng 2 kịch bản
   - Nếu mua 250 kWh Solar từ EVN → 636,768 đ
   - Tự sản xuất 250 kWh Solar → 0 đ
   - Tiết kiệm = 636,768 đ ✅

2. **Phản ánh đúng giá trị Solar**:
   - Solar sản xuất 250 kWh → tiết kiệm đúng 250 kWh
   - Giá trị tiết kiệm = bậc thang(250 kWh)

3. **Dễ hiểu cho user**:
   - "Bạn tiết kiệm X đồng nhờ Solar sản xuất Y kWh"
   - Thay vì: "Chi phí toàn bộ vs chi phí thực tế" (khó hiểu)

---

## 📊 So Sánh Kết Quả

### Ví dụ: Load=350, Grid=100, Backup=0

| Metric | Logic Cũ (SAI) | Logic Mới (ĐÚNG) |
|--------|----------------|------------------|
| **Solar Produced** | 250 kWh | 250 kWh |
| **costWithoutSolar** | bậc thang(350) = 979,560 đ | bậc thang(250) = 636,768 đ |
| **solarCost** | 0 đ | 0 đ |
| **actualCost** | 217,836 đ | 217,836 đ |
| **savings** | 761,724 đ ❌ | 636,768 đ ✅ |

### Giải thích chênh lệch:

**Logic Cũ (SAI):**
```
Tiết kiệm 761,724 đ = Chi phí 350 kWh - Chi phí Grid 100 kWh
→ Không đúng vì so sánh 2 kịch bản khác nhau!
```

**Logic Mới (ĐÚNG):**
```
Tiết kiệm 636,768 đ = Chi phí mua 250 kWh Solar - Chi phí tự sản xuất 250 kWh
→ Đúng vì so sánh cùng 1 kịch bản (250 kWh Solar)!
```

---

## 🎯 Ý Nghĩa Thực Tế

### Kịch Bản:
Gia đình dùng **350 kWh/tháng**:
- Solar sản xuất: **250 kWh**
- Mua từ EVN: **100 kWh**

### Câu Hỏi: "Hệ thống Solar tiết kiệm được bao nhiêu?"

#### ❌ Logic Cũ (SAI):
```
"Nếu không có Solar, bạn phải trả 979,560 đ cho 350 kWh.
Giờ bạn chỉ trả 217,836 đ cho 100 kWh.
→ Tiết kiệm: 761,724 đ"
```

**Vấn đề:** So sánh 350 kWh vs 100 kWh → Không công bằng!

#### ✅ Logic Mới (ĐÚNG):
```
"Solar sản xuất 250 kWh miễn phí.
Nếu mua 250 kWh này từ EVN → phải trả 636,768 đ.
→ Tiết kiệm: 636,768 đ"
```

**Lợi ích:** So sánh đúng 250 kWh vs 250 kWh → Công bằng!

---

## 💡 Ví Dụ Chi Tiết

### Setup:
```
Load = 350 kWh/tháng
Grid = 100 kWh (mua từ EVN)
Backup = 0 kWh
Solar Produced = 350 + 0 - 100 = 250 kWh
```

### Tính Chi Phí Grid (đã mua):
```
Grid = 100 kWh
Bậc 1: 50 × 1,984 = 99,200 đ
Bậc 2: 50 × 2,050 = 102,500 đ
Tổng × 1.08 = 217,836 đ
```

### Tính Chi Phí Nếu Mua Solar Từ EVN:
```
Solar Produced = 250 kWh
Bậc 1: 50 × 1,984 = 99,200 đ
Bậc 2: 50 × 2,050 = 102,500 đ
Bậc 3: 100 × 2,380 = 238,000 đ
Bậc 4: 50 × 2,998 = 149,900 đ
Tổng × 1.08 = 636,768 đ
```

### Tính Tiết Kiệm:
```
Chi phí Solar thực tế = 250 × 0 = 0 đ (miễn phí!)
Tiết kiệm = 636,768 - 0 = 636,768 đ
```

### Tổng Chi Phí Thực Tế:
```
Tổng = Grid + Solar = 217,836 + 0 = 217,836 đ
```

---

## 📋 Thay Đổi Code

### File: `index.html`

#### TRƯỚC:
```javascript
// Chi phí nếu không có mặt trời (mua toàn bộ từ lưới) - DÙNG BẬC THANG
const costWithoutSolar = calculateTieredPrice(load, vatRate);

// Tiết kiệm
const savings = costWithoutSolar - actualCost;
```

#### SAU:
```javascript
// Chi phí nếu phải mua phần Solar từ EVN (thay vì tự sản xuất) - DÙNG BẬC THANG
const costWithoutSolar = calculateTieredPrice(solarProduced, vatRate);

// Tiết kiệm = Chi phí nếu mua Solar từ EVN - Chi phí Solar thực tế
const savings = costWithoutSolar - solarCost;
```

---

## 🎉 Kết Quả

### Trước (SAI):
```
✗ So sánh không đúng (350 kWh vs 100 kWh)
✗ Tiết kiệm bị thổi phồng (761,724 đ)
✗ Khó hiểu ý nghĩa
```

### Sau (ĐÚNG):
```
✓ So sánh đúng (250 kWh vs 250 kWh)
✓ Tiết kiệm chính xác (636,768 đ)
✓ Dễ hiểu: "Solar tiết kiệm X đồng"
```

---

## 🔍 Test Case

### Input:
```
Load = 350 kWh
Grid = 100 kWh
Backup = 0 kWh
solarPrice = 0 đ/kWh
vatRate = 8%
```

### Expected Output:
```
solarProduced = 250 kWh
gridCost = 217,836 đ
costWithoutSolar = 636,768 đ
solarCost = 0 đ
actualCost = 217,836 đ
savings = 636,768 đ ✅
```

---

**Version**: 3.2  
**Date**: 2025-01-30  
**Status**: ✅ Fixed  
**Impact**: Critical - Corrected savings calculation logic
