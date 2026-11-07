<?php
declare(strict_types=1);

/*
 * (c) Sebastian Schreier <info@web-solutions-dresden.de>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sschreier\ImprovingOffCanvasMenu;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;

class SschreierImprovingOffCanvasMenu extends Plugin
{
    public const PLUGIN_CONFIG_VARS = [
        'closeButtonFontSize',
        'listItemsFontSize',
    ];

    public const CUSTOM_FIELD_SET_CATEGORY_TECHNICAL_NAME = 'sschreier_categoryoffcanvassettings';

    public function uninstall(UninstallContext $uninstallContext): void
    {
        if ($uninstallContext->keepUserData()) {
            parent::uninstall($uninstallContext);

            return;
        }

        $this->removeCustomField(self::CUSTOM_FIELD_SET_CATEGORY_TECHNICAL_NAME, $uninstallContext->getContext());

        parent::uninstall($uninstallContext);
    }

    private function removeCustomField(string $customFieldSetName, Context $context): void
    {
        $customFieldSetRepository = $this->container->get('custom_field_set.repository');

        $criteria = new Criteria();
        $criteria->addFilter(new EqualsFilter('name', $customFieldSetName));

        $customFieldSetIds = $customFieldSetRepository->searchIds($criteria, $context)->getIds();

        if ($customFieldSetIds === []) {
            return;
        }

        $customFieldSetPayload = array_map(
            static fn (string $id): array => ['id' => $id],
            $customFieldSetIds
        );

        $customFieldSetRepository->delete($customFieldSetPayload, $context);
    }
}
