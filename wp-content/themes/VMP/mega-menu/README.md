# Mega Menu System Documentation

## Overview
The mega menu system supports both **dynamic** (from WordPress menus) and **custom template** approaches.

## Two Ways to Build Mega Menus

### Option 1: Dynamic from WordPress Menu (Recommended)

Build your mega menu structure directly in WordPress Admin:

**Structure:**
```
Services (CSS Class: has-mega-menu)
  ├── Overview (Column Header)
  │     ├── Dashboard (Link)
  │     └── About (Link)
  ├── Vulnerability Database (Column Header)
  │     ├── All Vulnerabilities (Link)
  │     ├── Plugins (Link)
  │     └── Themes (Link)
  └── Bug Bounty (Column Header)
        ├── Overview (Link)
        └── Submit (Link)
```

**Steps:**
1. Go to **Appearance → Menus**
2. Add main menu item (e.g., "Services")
3. Add CSS class: `has-mega-menu`
4. Add child items (these become column headers)
5. Add sub-child items (these become links in columns)
6. Save menu

**Menu Hierarchy:**
- **Level 1** (Parent): Menu item with `has-mega-menu` class
- **Level 2** (Children): Column headers (h6 titles)
- **Level 3** (Grandchildren): Links within columns

### Option 2: Custom Template Files

Create custom PHP templates for complete control:

**Template Priority (checked in order):**
1. `mega-menu/mega-menu-{ID}.php` - By menu item ID (e.g., mega-menu-123.php)
2. `mega-menu/mega-menu-{slug}.php` - By menu slug (e.g., mega-menu-services.php)
3. `mega-menu/default.php` - Fallback template

**To Create Custom Template:**

1. Find your menu item slug or ID:
   - **Slug**: Menu item title in lowercase with hyphens (e.g., "Services" → "services")
   - **ID**: In WordPress Admin → Menus → Hover over menu item → see ID in URL

2. Create file in `/wp-content/themes/VMP/mega-menu/`:
   - `mega-menu-services.php` (for "Services" menu item)
   - `mega-menu-123.php` (for menu item with ID 123)

3. Add your custom HTML (see example templates)

## Example: Services Menu

### Dynamic Approach (WordPress Menu):
```
Primary Menu
└── Services (has-mega-menu)
    ├── Overview
    │   ├── Dashboard
    │   └── About
    ├── Vulnerability Database
    │   ├── All Vulnerabilities
    │   ├── Plugins
    │   └── Themes
    └── Documentation
        ├── API Access
        └── Webhooks
```

### Custom Template Approach:
Create `/wp-content/themes/VMP/mega-menu/mega-menu-services.php` with your HTML.

## Styling

All mega menus use these CSS classes:
- `.mega-menu-wrapper` - Main container
- `.mega-menu-container` - Content wrapper
- `.mega-menu-column` - Individual column
- `.mega-menu-links` - Link list
- `h6` - Column headers

Customize in `style.css`

## Best Practices

1. **Use Dynamic Approach** for content-driven menus that may change
2. **Use Custom Templates** for complex layouts with custom HTML/widgets
3. **Limit columns** to 4 for best appearance
4. **Column width** auto-calculated based on number of columns (Bootstrap grid)
5. **Mobile responsive** - automatically converts to accordion

## Troubleshooting

**Mega menu not showing?**
- Verify `has-mega-menu` CSS class is added (case-sensitive)
- Check that depth is set to 3 in header.php
- Clear browser cache

**Dynamic menu not working?**
- Ensure menu items are nested correctly (3 levels)
- Level 1: Parent with has-mega-menu
- Level 2: Column headers
- Level 3: Links

**Want to force custom template?**
- Create template file matching menu slug or ID
- Custom template overrides dynamic generation

## File Locations

- **Walker Class**: `/functions.php` (VMP_Mega_Menu_Walker)
- **Templates**: `/mega-menu/` directory
- **Styles**: `/style.css`
- **JavaScript**: `/assets/js/mega-menu.js`
