<?php
declare(strict_types = 1);
namespace TYPO3\CMS\Dashboard\Widgets;

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

/**
 * This widget will show the latest security advisories from the TYPO3 news RSS feed
 * right on the dashboard.
 */
class T3SecurityAdvisoriesWidget extends AbstractRssWidget
{
    /**
     * @var string
     */
    protected $rssFile = 'https://typo3.org/?type=101';

    /**
     * @var int
     */
    protected $lifeTime = 43200; // 12 hours cache

    /**
     * @var string
     */
    protected $title = 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.t3securityAdvisories.title';

    /**
     * @var string
     */
    protected $description = 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.t3securityAdvisories.description';

    /**
     * @var string
     */
    protected $moreItemsLink = 'https://typo3.org/help/security-advisories';

    /**
     * @var string
     */
    protected $moreItemsText = 'LLL:EXT:dashboard/Resources/Private/Language/locallang.xlf:widgets.t3securityAdvisories.moreItems';
}
