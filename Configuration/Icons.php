<?php
declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

function overrideIcon(string $name): array {
    return [
        $name => [
            'provider' => SvgIconProvider::class,
            'source' => 'EXT:legacy_icons/Resources/Public/Icons/' . $name . '.svg',
        ]
    ];
}

return array_merge(
    overrideIcon('module-about'),
    overrideIcon('module-aboutmodules'),
    overrideIcon('module-adminpanel'),
    overrideIcon('module-belog'),
    overrideIcon('module-user'),
    overrideIcon('module-config'),
    overrideIcon('module-contentelements'),
    overrideIcon('module-cshmanual'),
    overrideIcon('module-dashboard'),
    overrideIcon('module-dbal'),
    overrideIcon('module-dbint'),
    overrideIcon('module-documentation'),
    overrideIcon('module-extensionmanager'),
    overrideIcon('module-filelist'),
    overrideIcon('module-form'),
    overrideIcon('module-func'),
    overrideIcon('module-generic'),
    overrideIcon('module-help'),
    overrideIcon('module-indexed_search'),
    overrideIcon('module-info'),
    overrideIcon('module-install'),
    overrideIcon('module-install-environment'),
    overrideIcon('module-install-maintenance'),
    overrideIcon('module-install-settings'),
    overrideIcon('module-install-upgrade'),
    overrideIcon('module-lang'),
    overrideIcon('module-linkvalidator'),
    overrideIcon('module-list'),
    overrideIcon('module-page'),
    overrideIcon('module-permission'),
    overrideIcon('module-reactions'),
    overrideIcon('module-recycler'),
    overrideIcon('module-redirects'),
    overrideIcon('module-reports'),
    overrideIcon('module-rte-ckeditor'),
    overrideIcon('module-scheduler'),
    overrideIcon('module-security'),
    overrideIcon('module-seo'),
    overrideIcon('module-setup'),
    overrideIcon('module-site-settings'),
    overrideIcon('module-sites'),
    overrideIcon('module-taskcenter'),
    overrideIcon('module-template'),
    overrideIcon('module-tsconfig'),
    overrideIcon('module-urls'),
    overrideIcon('module-version'),
    overrideIcon('module-viewpage'),
    overrideIcon('module-workspaces'),
);
