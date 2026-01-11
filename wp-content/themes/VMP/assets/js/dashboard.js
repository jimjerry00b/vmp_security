/**
 * VMP Dashboard JavaScript
 * 
 * Handles dashboard data loading and interactions
 * 
 * @package VMP_Security_Portal
 */

let vmpDashboardData = null;

/**
 * Load dashboard data from backend API
 */
function vmpLoadDashboardData() {
    const loading = document.getElementById('vmp-dashboard-loading');
    const error = document.getElementById('vmp-dashboard-error');
    const content = document.getElementById('vmp-dashboard-content');
    
    // Show loading, hide others
    if (loading) loading.style.display = 'block';
    if (error) error.style.display = 'none';
    if (content) content.style.display = 'none';
    
    VMP_API.request('vmp_get_dashboard_data', {},
        function(data) {
            vmpDashboardData = data;
            vmpRenderDashboard(data);
            
            // Hide loading, show content
            if (loading) loading.style.display = 'none';
            if (content) content.style.display = 'block';
        },
        function(errorMsg) {
            // Hide loading, show error
            if (loading) loading.style.display = 'none';
            if (error) {
                error.textContent = errorMsg;
                error.style.display = 'block';
            }
        }
    );
}

/**
 * Render dashboard with data
 */
function vmpRenderDashboard(data) {
    // DEBUG: Log what we receive from backend
    console.log('=== DASHBOARD DATA DEBUG ===');
    console.log('Full data object:', data);
    console.log('Websites array:', data.websites);
    console.log('Licenses array:', data.licenses);
    
    if (data.websites && data.websites.length > 0) {
        console.log('First website object:', data.websites[0]);
        console.log('Website object keys:', Object.keys(data.websites[0]));
    }
    
    if (data.licenses && data.licenses.length > 0) {
        console.log('First license object:', data.licenses[0]);
        console.log('License object keys:', Object.keys(data.licenses[0]));
    }
    console.log('=== END DEBUG ===');
    
    // Update stats
    const websites = data.websites || [];
    const licenses = data.licenses || [];
    
    const totalActivations = licenses.reduce((sum, lic) => {
        return sum + (lic.activation_count || 0);
    }, 0);
    
    const premiumLicenses = licenses.filter(lic => 
        (lic.product_name || '').toLowerCase().includes('premium')
    ).length;
    
    // Calculate total 2FA enabled users across all sites
    // Backend sends: two_fa_stats.enabled (not two_fa_enabled_count)
    const total2FAUsers = websites.reduce((sum, site) => 
        sum + (site.two_fa_stats?.enabled || 0), 0
    );
    
    document.getElementById('stat-websites').textContent = websites.length;
    document.getElementById('stat-licenses').textContent = licenses.length;
    document.getElementById('stat-activations').textContent = totalActivations;
    document.getElementById('stat-premium').textContent = premiumLicenses;
    
    // Update 2FA stat if element exists
    const stat2FA = document.getElementById('stat-2fa-users');
    if (stat2FA) {
        stat2FA.textContent = total2FAUsers;
    }
    
    // Render websites table
    vmpRenderWebsitesTable(websites);
    
    // Render licenses table
    vmpRenderLicensesTable(licenses);
}

/**
 * Render websites table
 */
function vmpRenderWebsitesTable(websites) {
    const tbody = document.getElementById('websites-tbody');
    
    if (!tbody) return;
    
    if (websites.length === 0) {
        tbody.innerHTML = '<tr><td colspan="8" class="vmp-table-empty">No websites found</td></tr>';
        return;
    }
    
    tbody.innerHTML = websites.map(site => {
        // Backend sends api_key which is actually the SHA-256 HASH (not the raw key)
        // The raw key is only stored in the plugin and cannot be retrieved
        const apiKeyHash = site.api_key || null;
        const apiKeyHint = apiKeyHash ? '••••' + apiKeyHash.slice(-4) : 'N/A';
        const hasApiKey = apiKeyHash && apiKeyHash.length > 0;
        
        // Backend sends: two_fa_stats.enabled and two_fa_stats.total_users
        const twoFAEnabled = site.two_fa_stats?.enabled || 0;
        const twoFATotal = site.two_fa_stats?.total_users || 0;
        
        return `
            <tr>
                <td>
                    <strong>${vmpEscapeHtml(site.site_url || 'N/A')}</strong>
                </td>
                <td>${vmpEscapeHtml(site.plugin_version || 'N/A')}</td>
                <td class="api-key-cell">
                    ${hasApiKey ? `
                        <code class="api-hash" title="Full hash: ${vmpEscapeAttr(apiKeyHash)}">
                            ${vmpEscapeHtml(apiKeyHint)}
                        </code>
                    ` : '<span class="vmp-text-muted">Not registered</span>'}
                </td>
                <td>
                    ${site.two_fa_stats && site.wp_users && site.wp_users.length > 0 ? `
                        <button class="vmp-btn-sm vmp-badge ${twoFAEnabled > 0 ? 'vmp-badge-success' : 'vmp-badge-warning'}" 
                                onclick="vmpShow2FAUsers('${vmpEscapeAttr(site.site_url)}', ${site.id})"
                                style="cursor: pointer; border: none;"
                                title="Click to view details">
                            ${twoFAEnabled}/${twoFATotal} users
                        </button>
                    ` : site.two_fa_stats ? `
                        <span class="vmp-badge vmp-badge-warning">${twoFAEnabled}/${twoFATotal}</span>
                    ` : '<span class="vmp-badge vmp-badge-secondary">N/A</span>'}
                </td>
                <td>${vmpEscapeHtml(site.wp_version || 'N/A')}</td>
                <td>${vmpEscapeHtml(site.php_version || 'N/A')}</td>
                <td>
                    <span class="vmp-badge vmp-badge-${site.status === 'active' ? 'success' : 'warning'}">
                        ${vmpEscapeHtml(site.status || 'unknown')}
                    </span>
                </td>
                <td>${vmpFormatDate(site.last_seen)}</td>
            </tr>
        `;
    }).join('');
}

/**
 * Render licenses table
 */
function vmpRenderLicensesTable(licenses) {
    const tbody = document.getElementById('licenses-tbody');
    
    if (!tbody) return;
    
    if (licenses.length === 0) {
        tbody.innerHTML = '<tr><td colspan="6" class="vmp-table-empty">No licenses found</td></tr>';
        return;
    }
    
    tbody.innerHTML = licenses.map(license => {
        const activations = `${license.activation_count || 0}/${license.max_activations || 0}`;
        // Extract license type from product_name ("Premium Security" or "Free Security")
        const licenseType = (license.product_name || 'free').toLowerCase().includes('premium') ? 'premium' : 'free';
        const status = license.status || 'unknown';
        const expiresAt = license.expires_at || null;
        
        return `
            <tr>
                <td>
                    <code class="vmp-license-key">${vmpEscapeHtml(license.license_key || 'N/A')}</code>
                    <button class="vmp-btn-icon" onclick="vmpCopyLicense('${license.license_key}')" title="Copy">
                        📋
                    </button>
                </td>
                <td>
                    <span class="vmp-badge vmp-badge-${licenseType === 'premium' ? 'primary' : 'secondary'}">
                        ${vmpEscapeHtml(licenseType.toUpperCase())}
                    </span>
                </td>
                <td>
                    <strong>${activations}</strong>
                </td>
                <td>
                    <span class="vmp-badge vmp-badge-${status === 'active' ? 'success' : 'danger'}">
                        ${vmpEscapeHtml(status)}
                    </span>
                </td>
                <td>${expiresAt ? vmpFormatDate(expiresAt) : 'Never'}</td>
                <td>
                    ${licenseType === 'premium' ? 
                        `<button class="vmp-btn vmp-btn-sm" onclick="vmpManagePremiumLicense('${vmpEscapeAttr(license.license_key)}', '${licenseType}', '${activations}')">Manage</button>` 
                        : '-'}
                </td>
            </tr>
        `;
    }).join('');
}

/**
 * Copy license key to clipboard
 */
function vmpCopyLicense(licenseKey) {
    navigator.clipboard.writeText(licenseKey).then(() => {
        VMP_API.showSuccess('License key copied!');
    }).catch(() => {
        VMP_API.showError('Failed to copy license key');
    });
}

/**
 * Refresh dashboard data
 */
function vmpRefreshDashboard() {
    vmpLoadDashboardData();
}

/**
 * Escape HTML to prevent XSS
 */
function vmpEscapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

/**
 * Escape attribute values for safe HTML insertion
 */
function vmpEscapeAttr(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML.replace(/"/g, '&quot;');
}

/**
 * Show 2FA users modal
 */
function vmpShow2FAUsers(siteUrl, siteId) {
    // Find the site data
    const site = vmpDashboardData.websites.find(s => s.id === siteId);
    
    if (!site || !site.wp_users || site.wp_users.length === 0) {
        alert('No 2FA user data available for this site.');
        return;
    }
    
    // Build users table
    const usersTable = `
        <table class="vmp-table" style="margin: 0;">
            <thead>
                <tr>
                    <th>WP User ID</th>
                    <th>2FA Method</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Last Used</th>
                </tr>
            </thead>
            <tbody>
                ${site.wp_users.map(user => `
                    <tr>
                        <td><strong>#${user.wp_user_id}</strong></td>
                        <td>
                            <span class="vmp-badge vmp-badge-secondary">
                                ${user.method.toUpperCase()}
                            </span>
                        </td>
                        <td>
                            <span class="vmp-badge ${user.is_enabled ? 'vmp-badge-success' : 'vmp-badge-warning'}">
                                ${user.is_enabled ? '✓ Enabled' : '✗ Disabled'}
                            </span>
                        </td>
                        <td>${vmpFormatDate(user.created_at)}</td>
                        <td>${user.last_used ? vmpFormatDate(user.last_used) : 'Never'}</td>
                    </tr>
                `).join('')}
            </tbody>
        </table>
    `;
    
    // Create modal
    const modal = document.createElement('div');
    modal.className = 'vmp-modal vmp-2fa-users-modal';
    modal.innerHTML = `
        <div class="vmp-modal-content" style="max-width: 800px;">
            <span class="vmp-modal-close" onclick="this.closest('.vmp-modal').remove()">&times;</span>
            <h3 style="margin-top: 0;">2FA Users - ${vmpEscapeHtml(siteUrl)}</h3>
            <p style="color: #6b7280; margin-bottom: 15px;">
                WordPress users with Two-Factor Authentication configured
            </p>
            ${usersTable}
            <div style="margin-top: 15px; padding-top: 15px; border-top: 1px solid #e5e7eb;">
                <p style="font-size: 13px; color: #6b7280; margin: 0;">
                    <strong>Total:</strong> ${site.wp_users.length} users with 2FA configured | 
                    <strong>Enabled:</strong> ${site.wp_users.filter(u => u.is_enabled).length} | 
                    <strong>Disabled:</strong> ${site.wp_users.filter(u => !u.is_enabled).length}
                </p>
            </div>
            <button class="vmp-btn vmp-btn-primary" onclick="this.closest('.vmp-modal').remove()">Close</button>
        </div>
    `;
    document.body.appendChild(modal);
    modal.style.display = 'block';
}

/**
 * Format date string
 */
function vmpFormatDate(dateString) {
    if (!dateString) return 'N/A';
    
    const date = new Date(dateString);
    if (isNaN(date)) return 'Invalid date';
    
    return date.toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'short',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    });
}

/**
 * Initialize dashboard on page load
 */
jQuery(document).ready(function($) {
    vmpLoadDashboardData();
    
    // Logout button handler
    $('#vmp-logout-btn').on('click', function(e) {
        e.preventDefault();
        
        if (!confirm('Are you sure you want to logout?')) {
            return;
        }
        
        VMP_API.request('vmp_logout', {},
            function(data) {
                // Redirect to login page
                window.location.href = vmpData.loginUrl;
            },
            function(error) {
                alert('Logout failed: ' + error);
            }
        );
    });
});

/* ==========================================================================
   License Management Modal Functions
   ========================================================================== */

// Global state for selected license
let vmpSelectedLicense = null;

/**
 * Open license management modal for a premium license
 */
function vmpManagePremiumLicense(licenseKey, licenseType, activations) {
    // Find the full license object from dashboard data
    const license = vmpDashboardData.licenses.find(lic => lic.license_key === licenseKey);
    
    if (!license) {
        VMP_API.showError('License not found');
        return;
    }
    
    vmpSelectedLicense = license;
    
    // Populate license details
    document.getElementById('vmp-modal-license-key').textContent = license.license_key;
    document.getElementById('vmp-modal-activations').textContent = 
        `${license.activation_count || 0}/${license.max_activations || 0}`;
    document.getElementById('vmp-modal-expires').textContent = 
        license.expires_at ? vmpFormatDate(license.expires_at) : 'Never';
    
    // Populate active sites (websites using this license)
    vmpPopulateActiveSites(licenseKey);
    
    // Populate available websites dropdown (sites NOT using this license)
    vmpPopulateAvailableWebsites(licenseKey);
    
    // Show modal
    document.getElementById('vmp-license-modal').style.display = 'block';
}

/**
 * Populate the list of active sites using this license
 * Backend provides license_key field in website objects - simple filtering!
 */
function vmpPopulateActiveSites(licenseKey) {
    const activeSitesList = document.getElementById('vmp-active-sites-list');
    
    // Find websites using this license (backend provides license_key field)
    const activeSites = vmpDashboardData.websites.filter(site => 
        site.license_key === licenseKey
    );
    
    if (activeSites.length === 0) {
        activeSitesList.innerHTML = '<p class="vmp-empty-message">No sites are currently using this license.</p>';
        return;
    }
    
    activeSitesList.innerHTML = activeSites.map(site => `
        <div class="vmp-site-item">
            <div class="vmp-site-info">
                <strong>${vmpEscapeHtml(site.site_url)}</strong>
                <span class="vmp-site-version">Plugin: ${vmpEscapeHtml(site.plugin_version || 'N/A')}</span>
            </div>
            <button class="vmp-btn vmp-btn-sm vmp-btn-danger" 
                    onclick="vmpDeactivateLicenseFromSite('${vmpEscapeAttr(site.site_url)}')">
                Deactivate
            </button>
        </div>
    `).join('');
}

/**
 * Populate dropdown of available websites (not using this license)
 */
function vmpPopulateAvailableWebsites(licenseKey) {
    const siteSelector = document.getElementById('vmp-site-selector');
    
    // Find websites NOT using this premium license (backend provides license_key field)
    const availableSites = vmpDashboardData.websites.filter(site => 
        site.license_key !== licenseKey
    );
    
    siteSelector.innerHTML = '<option value="">-- Select a Website --</option>' +
        availableSites.map(site => 
            `<option value="${vmpEscapeAttr(site.site_url)}">${vmpEscapeHtml(site.site_url)}</option>`
        ).join('');
}

/**
 * Activate premium license on selected site from dropdown
 */
function vmpActivateLicenseOnSite() {
    const siteUrl = document.getElementById('vmp-site-selector').value;
    
    if (!siteUrl) {
        vmpShowModalMessage('Please select a website', 'error');
        return;
    }
    
    if (!vmpSelectedLicense) {
        vmpShowModalMessage('No license selected', 'error');
        return;
    }
    
    vmpShowModalMessage('Activating license on site...', 'info');
    
    // AJAX call to activate using VMP_API helper
    VMP_API.request('vmp_activate_license', {
        license_key: vmpSelectedLicense.license_key,
        site_url: siteUrl
    },
    function(data) {
        vmpShowModalMessage('License activated successfully!', 'success');
        
        // Refresh dashboard to get updated data from backend
        setTimeout(() => {
            vmpRefreshDashboard();
            // Re-open modal with updated data after refresh
            setTimeout(() => {
                vmpManagePremiumLicense(vmpSelectedLicense.license_key, 'premium', 
                    `${vmpSelectedLicense.activation_count + 1}/${vmpSelectedLicense.max_activations}`);
            }, 500);
        }, 1000);
    },
    function(error) {
        vmpShowModalMessage(error || 'Activation failed', 'error');
    });
}

/**
 * Deactivate license from a specific site
 */
function vmpDeactivateLicenseFromSite(siteUrl) {
    if (!confirm(`Are you sure you want to deactivate this license from:\n\n${siteUrl}\n\nThis site will revert to FREE tier with limited features.`)) {
        return;
    }
    
    if (!vmpSelectedLicense) {
        vmpShowModalMessage('No license selected', 'error');
        return;
    }
    
    vmpShowModalMessage('Deactivating license...', 'info');
    
    // AJAX call to deactivate using VMP_API helper
    VMP_API.request('vmp_deactivate_license', {
        site_url: siteUrl
    },
    function(data) {
        const slots = data.available_slots || 0;
        vmpShowModalMessage(`License deactivated. ${slots} slots available.`, 'success');
        
        // Refresh dashboard to get updated data from backend
        setTimeout(() => {
            vmpRefreshDashboard();
            // Re-open modal with updated data after refresh
            setTimeout(() => {
                vmpManagePremiumLicense(vmpSelectedLicense.license_key, 'premium', 
                    `${vmpSelectedLicense.activation_count - 1}/${vmpSelectedLicense.max_activations}`);
            }, 500);
        }, 1000);
    },
    function(error) {
        console.error('Deactivation error:', error);
        vmpShowModalMessage(error || 'Deactivation failed', 'error');
    });
}

/**
 * Close license management modal
 */
function vmpCloseLicenseModal() {
    document.getElementById('vmp-license-modal').style.display = 'none';
    document.getElementById('vmp-site-selector').value = '';
    document.getElementById('vmp-modal-message').style.display = 'none';
    vmpSelectedLicense = null;
}

/**
 * Show message in modal
 */
function vmpShowModalMessage(message, type) {
    const msgEl = document.getElementById('vmp-modal-message');
    msgEl.textContent = message;
    msgEl.className = 'vmp-message vmp-message-' + type;
    msgEl.style.display = 'block';
}
