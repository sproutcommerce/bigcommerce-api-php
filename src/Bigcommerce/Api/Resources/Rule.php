<?php

namespace Bigcommerce\Api\Resources;

use Bigcommerce\Api\Resource;
use Bigcommerce\Api\Client;

/**
 * A product option rule.
 */
class Rule extends Resource
{
    protected $ignoreOnCreate = array(
        'id',
        'product_id',
    );

    protected $ignoreOnUpdate = array(
        'id',
        'product_id',
    );
    
    public function create()
    {
        return Client::createResource('/products/' . $this->fields->product_id . '/rules', $this->getCreateFields());
    }

    public function update()
    {
        Client::updateResource('/products/' . $this->fields->product_id . '/rules/' . $this->fields->id, $this->getUpdateFields());
    }
}
