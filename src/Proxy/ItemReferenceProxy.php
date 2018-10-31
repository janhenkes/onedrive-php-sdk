<?php

namespace Krizalys\Onedrive\Proxy;

use Microsoft\Graph\Graph;
use Microsoft\Graph\Model\ItemReference;

class ItemReferenceProxy extends EntityProxy
{
    /**
     * @param Graph $graph
     *        The graph.
     * @param ItemReference $itemReference
     *        The item reference.
     */
    public function __construct(Graph $graph, ItemReference $itemReference)
    {
        parent::__construct($graph, $itemReference);
    }

    /**
     * @param string $name
     *        The name.
     *
     * @return mixed
     *         The value.
     */
    public function __get($name)
    {
        $itemReference = $this->entity;

        switch ($name) {
            case 'id':
                return $itemReference->getId();

            case 'driveId':
                return $itemReference->getDriveId();

            case 'driveType':
                return $itemReference->getDriveType();

            default:
                return parent::__get($name);
        }
    }
}