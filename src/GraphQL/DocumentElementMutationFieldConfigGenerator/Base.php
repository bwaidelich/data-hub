<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\DataHubBundle\GraphQL\DocumentElementMutationFieldConfigGenerator;

use GraphQL\Type\Definition\Type;
use Pimcore\Bundle\DataHubBundle\GraphQL\DataObjectMutationFieldConfigGeneratorInterface;
use Pimcore\Bundle\DataHubBundle\GraphQL\Service;
use Pimcore\Bundle\DataHubBundle\GraphQL\Traits\ServiceTrait;
use Pimcore\Model\DataObject\ClassDefinition\Data;

class Base
{

    use ServiceTrait;

    /**
     * Base constructor.
     * @param Service $graphQlService
     */
    public function __construct(Service $graphQlService)
    {
        $this->setGraphQLService($graphQlService);
    }


    /**
     */
    public function getDocumentElementMutationFieldConfig()
    {
        throw new \Exception("needs to be implemented in the base class. let's see, maybe there are similarities");
    }

}
