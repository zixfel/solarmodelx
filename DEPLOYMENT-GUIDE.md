# 🚀 Hướng Dẫn Deploy Ứng Dụng Tính Toán Tiết Kiệm Điện Mặt Trời

## 📁 Files Cần Thiết

### **Bắt buộc (2 files):**
1. **`index.html`** - Ứng dụng chính tính toán Solar
2. **`TEST-TIERED-PRICING.html`** - Tool tính tiền điện EVN

### **Tùy chọn (tài liệu):**
- `README.md` - Hướng dẫn sử dụng
- Các file `.md` khác - Tài liệu kỹ thuật

---

## 🌐 **Cách 1: Upload Lên Hosting (cPanel/FTP)**

### Bước 1: Chuẩn bị files
```
Tải 2 files về máy:
- index.html
- TEST-TIERED-PRICING.html
```

### Bước 2: Upload qua cPanel
```
1. Đăng nhập cPanel của hosting
2. Vào File Manager
3. Tạo folder mới: public_html/solar-calculator/
4. Upload 2 files vào folder đó
5. Set permissions: 644 (rw-r--r--)
```

### Bước 3: Truy cập
```
https://yourdomain.com/solar-calculator/
https://yourdomain.com/solar-calculator/TEST-TIERED-PRICING.html
```

### Bước 4: Tạo link trong menu
```html
<a href="/solar-calculator/">Tính Toán Solar</a>
<a href="/solar-calculator/TEST-TIERED-PRICING.html">Tính Tiền Điện EVN</a>
```

---

## 🌐 **Cách 2: Upload Qua FTP (FileZilla)**

### Bước 1: Kết nối FTP
```
Host: ftp.yourdomain.com
Username: your_ftp_username
Password: your_ftp_password
Port: 21
```

### Bước 2: Upload files
```
1. Tạo folder: /public_html/solar-calculator/
2. Kéo thả 2 files vào folder
3. Đợi upload hoàn tất
```

### Bước 3: Test
```
Mở trình duyệt:
https://yourdomain.com/solar-calculator/
```

---

## 🚀 **Cách 3: Deploy Lên GitHub Pages (Miễn Phí)**

### Bước 1: Tạo Repository
```bash
1. Vào github.com → New Repository
2. Tên: solar-calculator
3. Public
4. Create repository
```

### Bước 2: Upload files
```bash
# Cách 1: Dùng Git
git init
git add index.html TEST-TIERED-PRICING.html
git commit -m "Add solar calculator"
git branch -M main
git remote add origin https://github.com/username/solar-calculator.git
git push -u origin main

# Cách 2: Upload trực tiếp trên GitHub
- Click "Upload files"
- Kéo thả 2 files
- Commit changes
```

### Bước 3: Enable GitHub Pages
```
1. Settings → Pages
2. Source: Deploy from a branch
3. Branch: main / (root)
4. Save
```

### Bước 4: Truy cập
```
https://username.github.io/solar-calculator/
https://username.github.io/solar-calculator/TEST-TIERED-PRICING.html
```

---

## 🚀 **Cách 4: Deploy Lên Netlify (Miễn Phí, Dễ Nhất)**

### Bước 1: Chuẩn bị
```
Tạo folder trên máy:
solar-calculator/
  ├── index.html
  └── TEST-TIERED-PRICING.html
```

### Bước 2: Deploy
```
1. Vào netlify.com → Sign up (free)
2. Click "Add new site" → "Deploy manually"
3. Kéo thả folder vào
4. Đợi deploy (30 giây)
```

### Bước 3: Custom domain (tùy chọn)
```
1. Site settings → Domain management
2. Add custom domain: solar.yourdomain.com
3. Cập nhật DNS:
   Type: CNAME
   Name: solar
   Value: your-site.netlify.app
```

### Bước 4: Truy cập
```
https://your-site-name.netlify.app/
https://solar.yourdomain.com/ (nếu có custom domain)
```

---

## 🚀 **Cách 5: Deploy Lên Vercel (Nhanh Nhất)**

### Bước 1: Upload
```
1. Vào vercel.com → Sign up
2. New Project → Import Git Repository
   hoặc "Deploy from folder"
3. Upload folder chứa 2 files
```

### Bước 2: Deploy
```
- Tự động detect static site
- Click "Deploy"
- Đợi 20 giây
```

### Bước 3: Truy cập
```
https://your-project.vercel.app/
```

---

## 💎 **Cách 6: Tích Hợp WordPress**

### Option A: Upload Trực Tiếp
```
1. Vào wp-content/
2. Tạo folder: solar-calculator/
3. Upload 2 files
4. Truy cập: 
   https://yourdomain.com/wp-content/solar-calculator/
```

### Option B: Dùng Plugin (Khuyên dùng)

#### Bước 1: Tạo Plugin
```
1. Tạo folder: wp-content/plugins/solar-calculator/
2. Upload 3 files:
   - wordpress-integration.php
   - index.html
   - TEST-TIERED-PRICING.html
```

#### Bước 2: Activate Plugin
```
1. WordPress Admin → Plugins
2. Tìm "Solar Calculator Integration"
3. Click "Activate"
```

#### Bước 3: Dùng Shortcode
```
Trong bài viết hoặc trang:

[solar_calculator]
→ Hiển thị ứng dụng tính Solar

[evn_calculator]
→ Hiển thị tool tính tiền điện EVN
```

#### Bước 4: Hoặc dùng trong Theme
```php
<?php echo do_shortcode('[solar_calculator]'); ?>
```

---

## 🎨 **Cách 7: Nhúng Vào Trang Hiện Có (iFrame)**

### Trong HTML/PHP:
```html
<!-- Calculator Solar -->
<iframe 
    src="https://yourdomain.com/solar-calculator/index.html" 
    width="100%" 
    height="1200px" 
    frameborder="0"
    style="border: none; border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
</iframe>

<!-- Tool Tính Tiền EVN -->
<iframe 
    src="https://yourdomain.com/solar-calculator/TEST-TIERED-PRICING.html" 
    width="100%" 
    height="800px" 
    frameborder="0"
    style="border: none; border-radius: 10px;">
</iframe>
```

### Trong WordPress (Gutenberg):
```
1. Add Block → Custom HTML
2. Paste code iframe trên
3. Preview
4. Publish
```

---

## 🔗 **Tạo Menu Link**

### HTML:
```html
<nav>
    <a href="/solar-calculator/">🌞 Tính Toán Solar</a>
    <a href="/solar-calculator/TEST-TIERED-PRICING.html">⚡ Tính Tiền Điện EVN</a>
</nav>
```

### WordPress Menu:
```
1. Appearance → Menus
2. Custom Links:
   - URL: /solar-calculator/
   - Link Text: 🌞 Tính Toán Solar
   
   - URL: /solar-calculator/TEST-TIERED-PRICING.html
   - Link Text: ⚡ Tính Tiền Điện EVN
3. Add to Menu
4. Save
```

---

## 🛠️ **Troubleshooting**

### Lỗi 404 Not Found
```
✓ Kiểm tra path: /solar-calculator/index.html
✓ Kiểm tra permissions: 644
✓ Clear browser cache (Ctrl + F5)
```

### Link TEST-TIERED-PRICING.html bị lỗi
```
Sửa trong index.html:
<a href="TEST-TIERED-PRICING.html">
→ <a href="/solar-calculator/TEST-TIERED-PRICING.html">
```

### iFrame không hiển thị
```
✓ Kiểm tra CORS
✓ Kiểm tra https (nếu site chính dùng https)
✓ Thử height="1500px"
```

---

## 📊 **Khuyến Nghị**

### Cho Website Cá Nhân:
✅ **GitHub Pages** - Miễn phí, ổn định, có SSL

### Cho Doanh Nghiệp:
✅ **Upload lên Hosting riêng** - Kiểm soát đầy đủ

### Cho WordPress:
✅ **Plugin với Shortcode** - Dễ quản lý, tái sử dụng

### Deploy Nhanh:
✅ **Netlify** - 1 phút là xong!

---

## 🎯 **Best Practices**

1. **Backup files** trước khi deploy
2. **Test trên localhost** trước
3. **Dùng custom domain** cho chuyên nghiệp
4. **Enable SSL/HTTPS** để bảo mật
5. **Optimize images** (nếu thêm logo)
6. **Monitor traffic** bằng Google Analytics

---

## 📞 **Support**

Nếu gặp vấn đề:
1. Check console log (F12)
2. Verify file paths
3. Clear cache
4. Test trên incognito mode

---

**Version**: 3.2  
**Updated**: 2025-01-30  
**Deploy Time**: < 5 phút với mọi phương pháp!
