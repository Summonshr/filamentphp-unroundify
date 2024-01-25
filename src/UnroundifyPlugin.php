<?php

namespace Summonshr\Unroundify;

use Filament\Contracts\Plugin;
use Filament\Support\Facades\FilamentView;

class UnroundifyPlugin implements Plugin
{
    public function getId(): string
    {
        return 'unroundify';
    }

    public function register($panel): void
    {
        FilamentView::registerRenderHook(
            'panels::styles.after',
            function () {
                echo '
                <style>
.fi-ta-ctn,
.fi-btn,
.fi-sidebar-item-button,
.fi-avatar,
.fi-theme-switcher-btn,
.fi-dropdown-list-item,
.fi-dropdown-panel,
.fi-section,
.fi-input-wrp,
.fi-no-notification,
.fi-modal-window,
.fi-badge,
.fi-sticky-main,
.fi-fo-builder,
.fi-contained,
.fi-fo-repeater-item,
.fi-ta-ctn,
.fi-wi-stats-overview-stat,
.fi-simple-main,
.fi-tenant-menu-trigger,
.fi-sticky,
.fi-global-search-results-ctn,
.fi-sidebar-item-button,
.fi-simple-main,
.fi-theme-switcher-btn,
.fi-topbar-item-button,
.fi-fo-builder-item,
.fi-fo-.builder-block-printer-ctn,
.fi-fo-color-picker-panel,
.fi-fo-date-time-picker-panel,
.fi-fo-markdown-editor,
.fi-fo-rich-editor,
.fi-fo-toggle,
.fi-fo-wizard-header-step-icon-ctn,
.fi-fo-repeater-item,
.fi-fo-repeater-add-between-action-ctn,
.fi-fo-rich-editor-toolbar-btn,
.fi-in-color-item,
.fi-in-key-value,
.fi-circular,
.fi-badge,
.fi-fieldset,
.fi-icon-btn,
.fi-icon-btn-badge-ctn,
.fi-link-badge-ctn,
.fi-icon-btn-badge-ctn,
.fi-link-badge-ctn,
.fi-icon-btn-badge-ctn,
.fi-link-badge-ctn,
.fi-btn-badge-ctn,
.fi-dropdown-panel,
.fi-dropdown-list-item,
.fi-dropdown-list-item-image,
.fi-checkbox-input,
.fi-pagination-items,
.fi-tabs-item,
.fi-ta-color-item,
.fi-ta-panel,
.fi-ta-ctn,
.fi-ta-empty-state-icon-ctn,
.fi-wi-stats-overview-stat,
.fi-wi-stats-overview-stat-chart,
.fi-fieldset {
    border-radius: 0;
}
</style>
                    ';
            },
        );
    }

    public function boot($panel): void
    {
    }
}
