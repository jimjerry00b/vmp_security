# VMP Security Portal Theme

Welcome to the **VMP Security Portal** WordPress theme!

## 🚀 Installation & Activation

### Step 1: Activate the Theme

1. Go to WordPress Admin: `http://localhost/VMP-Wordpress-Security.com/wp-admin`
2. Navigate to **Appearance → Themes**
3. Find **VMP Security Portal** and click **Activate**

### Step 2: Create Required Pages

After activation, create these pages:

1. **Login Page**
   - Title: `Login`
   - Slug: `login`
   - Template: `Login Page`

2. **Dashboard Page**
   - Title: `Dashboard`
   - Slug: `dashboard`
   - Template: `Dashboard`

### Step 3: Test the Flow

1. Visit: `http://localhost/VMP-Wordpress-Security.com/login`
2. Enter an email address
3. Follow the multi-step login process

---

## 📁 Theme Structure

```
VMP/
├── style.css                    # Theme stylesheet (required for WP)
├── functions.php                # Core theme functions & hooks
├── index.php                    # Default homepage template
├── header.php                   # Header template
├── footer.php                   # Footer template
├── page-login.php               # Login page template
├── page-dashboard.php           # Dashboard template
├── inc/                         # Helper classes
│   ├── class-vmp-database.php   # Database operations
│   ├── class-vmp-api-client.php # Backend API communication
│   └── class-vmp-auth.php       # Session management
└── assets/
    ├── css/
    │   └── main.css             # Main stylesheet
    └── js/
        ├── api-client.js        # AJAX foundation
        ├── login.js             # Login flow logic
        └── dashboard.js         # Dashboard interactions
```

---

## 🔧 Features

✅ **Email-First Login Flow**
- Step 1: Email input
- Step 2: API key verification (first login)
- Step 3: Password creation (first login)
- Step 4: Password login (returning users)

✅ **Dashboard**
- Overview statistics (websites, licenses, activations)
- Websites table (URL, versions, status)
- Licenses table (keys, type, activations, expiry)

✅ **Backend Integration**
- Zero backend changes required
- Uses existing API endpoints
- Real-time data fetching

---

## 🎨 Customization

### Colors

Edit CSS variables in `style.css`:

```css
:root {
    --vmp-primary: #2271b1;
    --vmp-success: #00a32a;
    --vmp-danger: #d63638;
}
```

### Backend API URL

Edit in `functions.php`:

```php
define('VMP_BACKEND_API', 'https://newton-wordpress-security.vpnmasterpro.com/api/v1');
```

---

## 📝 Database Table

The theme creates one table on activation:

**Table:** `wp_vmp_web_users`

| Column        | Type          | Description           |
|---------------|---------------|-----------------------|
| id            | BIGINT(20)    | Primary key           |
| email         | VARCHAR(255)  | User email (unique)   |
| password_hash | VARCHAR(255)  | Hashed password       |
| api_key       | VARCHAR(255)  | User's API key        |
| created_at    | DATETIME      | Account creation      |
| last_login    | DATETIME      | Last login timestamp  |

---

## 🔒 Security

- Passwords hashed with `wp_hash_password()`
- AJAX nonce verification on all requests
- Session-based authentication
- SQL injection protection via `$wpdb->prepare()`
- XSS prevention with `esc_html()`, `esc_url()`

---

## 🐛 Troubleshooting

### Theme not appearing?
- Check that all files are in `wp-content/themes/VMP/`
- Ensure `style.css` has the theme header comment

### Login not working?
- Check browser console for JavaScript errors
- Verify backend API is accessible
- Test API endpoint: `https://newton-wordpress-security.vpnmasterpro.com/api/v1/auth/check_api_key`

### Database table not created?
- Deactivate and reactivate theme
- Check WordPress database for `wp_vmp_web_users` table

---

## 📞 Support

- **Backend API:** https://newton-wordpress-security.vpnmasterpro.com
- **Documentation:** See ROADMAP.md in project root
- **Issues:** Contact VPN Master Pro support

---

## 📜 License

GNU General Public License v2 or later

---

**Version:** 1.0.0  
**Author:** VPN Master Pro  
**Last Updated:** December 9, 2025
