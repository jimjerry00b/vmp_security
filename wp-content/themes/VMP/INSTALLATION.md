# 🚀 VMP Security Portal - Installation Guide

## Quick Setup (5 Minutes)

### Step 1: Activate the VMP Theme

1. **Go to WordPress Admin**
   - URL: `http://localhost/VMP-Wordpress-Security.com/wp-admin`
   - Login with your WordPress credentials

2. **Navigate to Appearance → Themes**
   - You should see "VMP Security Portal" theme
   - Click **Activate**

### Step 2: Create Required Pages

You need to create **2 pages** with specific templates:

#### Page 1: Login Page
1. Go to **Pages → Add New**
2. Title: `Login`
3. Leave content empty
4. On the right sidebar, find **Template**
5. Select: `Login Page`
6. Click **Publish**
7. Note the URL slug should be: `login`

#### Page 2: Dashboard Page
1. Go to **Pages → Add New**
2. Title: `Dashboard`
3. Leave content empty
4. On the right sidebar, find **Template**
5. Select: `Dashboard`
6. Click **Publish**
7. Note the URL slug should be: `dashboard`

### Step 3: Set Homepage (Optional)

1. Go to **Settings → Reading**
2. Under "Your homepage displays":
   - Select **A static page**
   - Homepage: Choose a custom page or leave as "Latest Posts"
3. Click **Save Changes**

### Step 4: Test the Website

1. **Visit Homepage**: `http://localhost/VMP-Wordpress-Security.com/`
   - Should show beautiful landing page with features

2. **Visit Login Page**: `http://localhost/VMP-Wordpress-Security.com/login/`
   - Should show email input form

3. **Test Login Flow**:
   - Enter email: `vwilly1507@gmail.com` (or any email from your backend)
   - Follow the multi-step process

---

## ✅ What You Should See

### Homepage (`/`)
- Hero section with VMP logo
- "Newton WordPress Security Portal" heading
- 3 feature cards (Security Management, License Tracking, Status Monitoring)
- Call-to-action section with gradient background
- Professional header and footer

### Login Page (`/login/`)
- Clean white box with VMP logo
- Multi-step form:
  1. Email input
  2. API key verification (first-time users)
  3. Password creation (first-time)
  4. Password login (returning users)

### Dashboard (`/dashboard/`)
- 4 stat cards (Websites, Licenses, Activations, Premium)
- Websites table
- Licenses table
- Refresh button
- User email in header with logout option

---

## 🎨 Customization

### Change Colors

Edit `wp-content/themes/VMP/style.css`:

```css
:root {
    --vmp-primary: #2271b1;      /* Main blue color */
    --vmp-success: #00a32a;      /* Success green */
    --vmp-danger: #d63638;       /* Error red */
}
```

### Change Backend API URL

Edit `wp-content/themes/VMP/functions.php` (line 21):

```php
define('VMP_BACKEND_API', 'https://newton-wordpress-security.vpnmasterpro.com/api/v1');
```

### Change Logo

Edit `wp-content/themes/VMP/header.php` to replace the SVG logo with your image:

```html
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="VMP Security">
```

---

## 🐛 Troubleshooting

### Theme Not Showing Up?

**Check:**
1. Files are in correct location: `wp-content/themes/VMP/`
2. `style.css` exists with theme header
3. Refresh the Themes page

**Fix:**
```powershell
# Check if theme directory exists
Test-Path "C:\xampp\htdocs\VMP-Wordpress-Security.com\wp-content\themes\VMP\style.css"
```

### Pages Not Using Custom Templates?

**Solution:**
1. Edit the page in WordPress
2. Look for **Template** dropdown in right sidebar (Page Attributes)
3. If not visible, click the 3-dot menu (⋮) → Preferences → Enable "Page Attributes"
4. Select the template and update

### Login Not Working?

**Debug Steps:**
1. Open browser console (F12)
2. Check for JavaScript errors
3. Verify AJAX URL in Network tab
4. Test backend API manually:
   ```
   https://newton-wordpress-security.vpnmasterpro.com/api/v1/auth/check_api_key
   ```

### Database Table Not Created?

**Manual Fix:**
1. Go to phpMyAdmin: `http://localhost/phpmyadmin`
2. Select your WordPress database
3. Run this SQL:

```sql
CREATE TABLE IF NOT EXISTS wp_vmp_web_users (
    id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    api_key VARCHAR(255) DEFAULT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    last_login DATETIME DEFAULT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

### Styling Issues?

**Clear Cache:**
1. Hard refresh: `Ctrl + Shift + R` (Windows) or `Cmd + Shift + R` (Mac)
2. Clear browser cache
3. Check if CSS file loaded: View Source → Look for `main.css`

---

## 📂 File Structure Reference

```
VMP/
├── style.css                    ← Theme identifier (required)
├── functions.php                ← Core functionality
├── index.php                    ← Homepage template
├── header.php                   ← Header with navigation
├── footer.php                   ← Footer links
├── page-login.php               ← Login template
├── page-dashboard.php           ← Dashboard template
├── README.md                    ← Documentation
├── screenshot.txt               ← Theme preview (placeholder)
├── inc/
│   ├── class-vmp-database.php   ← Password storage
│   ├── class-vmp-api-client.php ← Backend API calls
│   └── class-vmp-auth.php       ← Session management
└── assets/
    ├── css/
    │   └── main.css             ← All styles
    └── js/
        ├── api-client.js        ← AJAX foundation
        ├── login.js             ← Login flow
        └── dashboard.js         ← Dashboard logic
```

---

## 🔒 Security Checklist

✅ Passwords hashed with `wp_hash_password()`  
✅ AJAX nonce verification on all requests  
✅ SQL injection protection via `$wpdb->prepare()`  
✅ XSS prevention with `esc_html()`, `esc_url()`, `esc_attr()`  
✅ Session-based authentication  
✅ Input sanitization on all forms  
✅ HTTPS recommended for production  

---

## 🚀 Going Live (Production)

### Before Deployment:

1. **Update Backend API URL** (if different for production)
2. **Add SSL Certificate** (HTTPS required)
3. **Update WordPress Site URL**:
   - Settings → General
   - Change from localhost to your domain
4. **Test all features** on staging first
5. **Backup database** before going live

### Recommended Settings:

```php
// In wp-config.php
define('WP_DEBUG', false);
define('FORCE_SSL_ADMIN', true);
```

---

## 📞 Support

- **Theme Documentation**: See this file
- **Backend API**: https://newton-wordpress-security.vpnmasterpro.com
- **Implementation Roadmap**: See `ROADMAP.md` in project root

---

**Version:** 1.0.0  
**Last Updated:** December 9, 2025  
**Author:** VPN Master Pro
