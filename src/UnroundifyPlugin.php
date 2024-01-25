<?php

namespace Summonshr\Unroundify;

use Filament\Contracts\Plugin;
use Filament\Support\Facades\FilamentView;

class UnroundifyPlugin implements Plugin
{

    public $includes = [
        'fi-avatar',
        'fi-badge',
        'fi-btn-badge-ctn',
        'fi-btn',
        'fi-checkbox-input',
        'fi-contained',
        'fi-dropdown-list-item-image',
        'fi-dropdown-list-item',
        'fi-dropdown-panel',
        'fi-fieldset',
        'fi-fieldset',
        'fi-fo-builder-block-printer-ctn',
        'fi-fo-builder-item',
        'fi-fo-builder',
        'fi-fo-color-picker-panel',
        'fi-fo-date-time-picker-panel',
        'fi-fo-markdown-editor',
        'fi-fo-repeater-add-between-action-ctn',
        'fi-fo-repeater-item',
        'fi-fo-rich-editor-toolbar-btn',
        'fi-fo-rich-editor',
        'fi-fo-toggle',
        'fi-fo-wizard-header-step-icon-ctn',
        'fi-global-search-results-ctn',
        'fi-icon-btn-badge-ctn',
        'fi-icon-btn',
        'fi-in-color-item',
        'fi-in-key-value',
        'fi-input-wrp',
        'fi-link-badge-ctn',
        'fi-modal-window',
        'fi-no-notification',
        'fi-pagination-items',
        'fi-section',
        'fi-sidebar-item-button',
        'fi-simple-main',
        'fi-sticky-main',
        'fi-sticky',
        'fi-ta-color-item',
        'fi-ta-ctn',
        'fi-ta-empty-state-icon-ctn',
        'fi-ta-panel',
        'fi-tabs-item',
        'fi-tenant-menu-trigger',
        'fi-theme-switcher-btn',
        'fi-topbar-item-button',
        'fi-wi-stats-overview-stat-chart',
        'fi-wi-stats-overview-stat',
    ];

    public function __construct($includes = [], $excludes = [])
    {
        $this->includes = [...$this->includes, ...$includes];
        // filter excludes from includes
        $this->includes = array_diff($this->includes, $excludes);
    }

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
                <style> .' . (implode(', .', $this->includes)) . ' {
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
