# VMP Mega Menu Plugin

A custom mega menu plugin for WordPress that adds multi-column dropdown panels to your navigation menu. Built specifically for the VMP&trade; Security theme with Bootstrap 5 integration.

## Features

- ✅ **Wide dropdown panels** aligned under menu items (Microsoft-style)
- ✅ **Multi-column layouts** (2-6 columns)
- ✅ **Column headers** for organizing navigation
- ✅ **WordPress menu screen integration** - manage via Appearance → Menus
- ✅ **Mobile responsive** - shows simplified menu on mobile devices
- ✅ **Bootstrap 5 compatible**
- ✅ **Accessibility ready** (ARIA attributes, keyboard navigation)
- ✅ **Smooth animations** and hover effects
- ✅ **Hybrid approach** - minimal theme modifications

## Installation

1. **Upload the plugin:**
   - Copy the `vmp-mega-menu` folder to `wp-content/plugins/`

2. **Activate the plugin:**
   - Go to WordPress Admin → Plugins
   - Find "VMP Mega Menu" and click "Activate"

3. **That's it!** The plugin is now integrated with your VMP theme.

## How to Use

### 1. Create/Edit Your Menu

1. Go to **Appearance → Menus**
2. Select your Primary menu or create a new one

### 2. Enable Mega Menu

1. Click on a **top-level menu item** (depth 0)
2. Find the "Mega Menu Settings" section (blue box)
3. Check ✅ **"Enable Mega Menu"**
4. Select the **number of columns** (2-6)
5. Click "Save Menu"

### 3. Add Column Headers (Optional)

1. Add sub-items under your mega menu item
2. For items at **depth 1** (first level under mega menu):
   - Check ✅ **"Use as Column Header"**
   - This makes it a non-clickable category header
   - Or leave unchecked to make it a clickable link

### 4. Add Column Links

1. Add sub-sub-items at **depth 2** (under column headers)
2. These will appear as clickable links in the mega menu
3. They will be grouped under their parent column

## Example Menu Structure

```
Products (Top level - Enable Mega Menu, 3 columns)
├── Security Solutions (Depth 1 - Column Header ✓)
│   ├── Web Application Firewall (Depth 2 - Link)
│   ├── DDoS Protection (Depth 2 - Link)
│   └── Malware Scanner (Depth 2 - Link)
├── Support Services (Depth 1 - Column Header ✓)
│   ├── 24/7 Monitoring (Depth 2 - Link)
│   ├── Incident Response (Depth 2 - Link)
│   └── Security Audits (Depth 2 - Link)
└── Resources (Depth 1 - Column Header ✓)
    ├── Documentation (Depth 2 - Link)
    ├── Video Tutorials (Depth 2 - Link)
    └── API Reference (Depth 2 - Link)
```

This creates a 3-column mega menu with headers and organized links.

## Mobile Behavior

- **Desktop (≥992px):** Full mega menu with columns
- **Mobile (<992px):** Simplified menu, mega menu features hidden
- Automatically adapts based on screen size

## Styling Customization

### CSS File Location
`wp-content/plugins/vmp-mega-menu/assets/css/mega-menu.css`

### Common Customizations

**Change mega menu width:**
```css
.mega-menu {
    min-width: 700px; /* Adjust as needed */
    max-width: 1000px;
}
```

**Change column header color:**
```css
.mega-menu-header-link {
    color: #your-color;
    border-bottom-color: #your-color;
}
```

**Change link hover color:**
```css
.mega-menu-link:hover {
    color: #your-color;
    background-color: #your-background;
}
```

## Troubleshooting

### Mega menu not showing

1. Make sure the plugin is **activated**
2. Check that you've **enabled mega menu** on a top-level menu item
3. Verify the menu item has **sub-items** (children)
4. Clear your browser cache

### Columns not aligned

- Ensure all column items are at **depth 1** (first level under mega menu)
- Check that you've selected the correct **number of columns**
- Verify Bootstrap 5 CSS is loaded

### Mobile menu broken

- The mega menu is hidden on mobile by default
- Regular dropdown menus should work instead
- Check browser console for JavaScript errors

## Browser Support

- ✅ Chrome (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Edge (latest)
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

## Technical Details

### Files Structure

```
vmp-mega-menu/
├── vmp-mega-menu.php              # Main plugin file
├── includes/
│   ├── class-mega-menu-walker.php # Custom Walker class
│   └── class-mega-menu-admin.php  # Admin interface
└── assets/
    ├── css/
    │   ├── mega-menu.css          # Frontend styles
    │   └── mega-menu-admin.css    # Admin styles
    └── js/
        ├── mega-menu.js           # Frontend JavaScript
        └── mega-menu-admin.js     # Admin JavaScript
```

### Theme Integration

The plugin integrates with `wp-content/themes/VMP/header.php` by:
- Checking if the plugin is active via `function_exists('vmp_get_mega_menu_walker')`
- Using the custom Walker if available
- Falling back to the default Bootstrap walker if plugin is inactive

## Changelog

### Version 1.0.0 (2026-01-11)
- Initial release
- Multi-column mega menu support (2-6 columns)
- Column headers and navigation links
- Mobile responsive design
- Bootstrap 5 integration
- Accessibility features (ARIA, keyboard navigation)
- WordPress menu screen integration

## Support

For issues or questions:
1. Check the documentation above
2. Review the troubleshooting section
3. Contact VMP&trade; Security support

## Credits

- **Developer:** VMP&trade; Security
- **Built for:** VMP Theme
- **Framework:** WordPress, Bootstrap 5

---

**Version:** 1.0.0  
**Last Updated:** January 11, 2026
