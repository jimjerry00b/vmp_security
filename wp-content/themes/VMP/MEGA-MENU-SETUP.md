# Mega Menu Setup Instructions

## How to Configure the WordPress Menu with Mega Menu

### Step 1: Create/Edit Your Primary Menu

1. Go to **WordPress Admin Dashboard**
2. Navigate to **Appearance → Menus**
3. Select your Primary Menu (or create a new one)
4. Set it as the **Primary Menu** location

### Step 2: Add Menu Items

Add your menu items as usual. For example:
- Services
- About
- Contact
- Pricing

### Step 3: Enable Mega Menu for Specific Items

To make a menu item (like "Services") display the mega menu:

1. Click on the menu item to expand its settings
2. If you don't see the **CSS Classes** field, click on **Screen Options** (top right) and enable **CSS Classes**
3. In the **CSS Classes (optional)** field, add: `has-mega-menu`
4. Click **Save Menu**

### Step 4: Style Button Menu Items (Optional)

To make a menu item look like a button (like "View Pricing"):

1. Click on the menu item to expand its settings
2. In the **CSS Classes (optional)** field, add: `menu-item-button`
3. Click **Save Menu**

## CSS Classes Reference

| CSS Class | Effect |
|-----------|--------|
| `has-mega-menu` | Displays the mega menu dropdown with all sections |
| `menu-item-button` | Styles the menu item as a yellow button |

## Example Menu Structure

```
Primary Menu
├── Services (CSS Class: has-mega-menu)
├── About
├── Contact
└── View Pricing (CSS Class: menu-item-button)
```

## Notes

- The mega menu content (Overview, Vulnerability Database, Bug Bounty, etc.) is hardcoded in the theme
- You can have multiple menu items with `has-mega-menu` class if needed
- Regular menu items without special classes display as normal links
- The mega menu is responsive with accordion on mobile

## Troubleshooting

**Menu not showing?**
- Make sure the menu is assigned to "Primary Menu" location
- Clear your browser cache

**Mega menu not appearing?**
- Check that you've added `has-mega-menu` CSS class (case-sensitive)
- Make sure JavaScript is loading (check browser console for errors)

**Button styling not working?**
- Verify the CSS class is `menu-item-button` (case-sensitive)
- Clear browser cache and refresh
