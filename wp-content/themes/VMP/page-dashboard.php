<?php
/**
 * Template Name: Dashboard
 * 
 * @package VMP_Security_Portal
 */

get_header();
?>

<div class="vmp-dashboard-page">
    <div class="vmp-container">
        <div class="vmp-dashboard-header">
            <h1>Dashboard</h1>
            <p>Manage your websites and licenses</p>
        </div>

        <!-- Loading State -->
        <div id="vmp-dashboard-loading" class="vmp-loading-state">
            <div class="vmp-spinner"></div>
            <p>Loading your data...</p>
        </div>

        <!-- Error State -->
        <div id="vmp-dashboard-error" class="vmp-alert vmp-alert-error" style="display: none;"></div>

        <!-- Dashboard Content -->
        <div id="vmp-dashboard-content" style="display: none;">
            
            <!-- Overview Stats -->
            <div class="vmp-stats-grid">
                <div class="vmp-stat-card">
                    <div class="vmp-stat-icon vmp-stat-icon-blue">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </div>
                    <div class="vmp-stat-content">
                        <div class="vmp-stat-value" id="stat-websites">-</div>
                        <div class="vmp-stat-label">Active Websites</div>
                    </div>
                </div>

                <div class="vmp-stat-card">
                    <div class="vmp-stat-icon vmp-stat-icon-green">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                    </div>
                    <div class="vmp-stat-content">
                        <div class="vmp-stat-value" id="stat-licenses">-</div>
                        <div class="vmp-stat-label">Total Licenses</div>
                    </div>
                </div>

                <div class="vmp-stat-card">
                    <div class="vmp-stat-icon vmp-stat-icon-purple">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                    </div>
                    <div class="vmp-stat-content">
                        <div class="vmp-stat-value" id="stat-activations">-</div>
                        <div class="vmp-stat-label">Total Activations</div>
                    </div>
                </div>

                <div class="vmp-stat-card">
                    <div class="vmp-stat-icon vmp-stat-icon-orange">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <div class="vmp-stat-content">
                        <div class="vmp-stat-value" id="stat-premium">-</div>
                        <div class="vmp-stat-label">Premium Licenses</div>
                    </div>
                </div>

                <div class="vmp-stat-card">
                    <div class="vmp-stat-icon vmp-stat-icon-red">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                    </div>
                    <div class="vmp-stat-content">
                        <div class="vmp-stat-value" id="stat-2fa-users">-</div>
                        <div class="vmp-stat-label">2FA Enabled Users</div>
                    </div>
                </div>
            </div>

            <!-- Websites Section -->
            <div class="vmp-section">
                <div class="vmp-section-header">
                    <h2>Your Websites</h2>
                    <button class="vmp-btn vmp-btn-secondary" onclick="vmpRefreshDashboard()">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="23 4 23 10 17 10"></polyline>
                            <polyline points="1 20 1 14 7 14"></polyline>
                            <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                        </svg>
                        Refresh
                    </button>
                </div>
                
                <div class="vmp-card">
                    <div class="vmp-table-responsive">
                        <table class="vmp-table" id="websites-table">
                            <thead>
                                <tr>
                                    <th>Website URL</th>
                                    <th>Plugin Version</th>
                                    <th>API Key Status</th>
                                    <th>2FA Status</th>
                                    <th>WordPress</th>
                                    <th>PHP</th>
                                    <th>Status</th>
                                    <th>Last Seen</th>
                                </tr>
                            </thead>
                            <tbody id="websites-tbody">
                                <tr>
                                    <td colspan="8" class="vmp-table-empty">No websites found</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Licenses Section -->
            <div class="vmp-section">
                <div class="vmp-section-header">
                    <h2>License Keys</h2>
                </div>
                
                <div class="vmp-card">
                    <div class="vmp-table-responsive">
                        <table class="vmp-table" id="licenses-table">
                            <thead>
                                <tr>
                                    <th>License Key</th>
                                    <th>Type</th>
                                    <th>Activations</th>
                                    <th>Status</th>
                                    <th>Expires</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="licenses-tbody">
                                <tr>
                                    <td colspan="6" class="vmp-table-empty">No licenses found</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Premium License Management Modal -->
<div id="vmp-license-modal" class="vmp-modal" style="display: none;">
    <div class="vmp-modal-content">
        <span class="vmp-modal-close" onclick="vmpCloseLicenseModal()">&times;</span>
        <h2 id="vmp-modal-title">Manage Premium License</h2>
        
        <!-- License Details -->
        <div id="vmp-license-details" class="vmp-details-box">
            <h3>License Details</h3>
            <p><strong>License Key:</strong> <code id="vmp-modal-license-key"></code></p>
            <p><strong>Type:</strong> <span id="vmp-modal-license-type" class="vmp-badge vmp-badge-primary">PREMIUM</span></p>
            <p><strong>Activations:</strong> <strong id="vmp-modal-activations">0/5</strong></p>
            <p><strong>Expires:</strong> <span id="vmp-modal-expires">Dec 9, 2026</span></p>
        </div>
        
        <!-- Active Sites Section -->
        <div id="vmp-active-sites-section">
            <h3>Active Sites Using This License</h3>
            <div id="vmp-active-sites-list" class="vmp-sites-list">
                <!-- Will be populated dynamically -->
                <p class="vmp-empty-message">No sites are currently using this license.</p>
            </div>
        </div>
        
        <!-- Activate on New Site Section -->
        <div id="vmp-activate-new-section">
            <h3>Activate on Another Site</h3>
            <p class="info-text">Select a website to activate this premium license on.</p>
            <select id="vmp-site-selector" class="vmp-select">
                <option value="">-- Select a Website --</option>
                <!-- Will be populated with available websites -->
            </select>
            <button class="vmp-btn vmp-btn-primary" onclick="vmpActivateLicenseOnSite()">
                Activate on Site
            </button>
        </div>
        
        <!-- Messages -->
        <div id="vmp-modal-message" class="vmp-message" style="display: none;"></div>
        
        <button class="vmp-btn vmp-btn-secondary" onclick="vmpCloseLicenseModal()">Close</button>
    </div>
</div>

<?php get_footer(); ?>
