<?php

namespace Joli\Jane\OpenApi\Naming;

use Doctrine\Common\Inflector\Inflector;
use Joli\Jane\OpenApi\Operation\Operation;

class OperationIdNaming implements OperationNamingInterface
{
    public function generateFunctionName(Operation $operation)
    {
        return Inflector::camelize(trim(preg_replace('/[^a-z0-9 ]+/iu', '_', (string) $operation->getOperation()->getOperationId())));
    }
}
