<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Joli\Jane\OpenApi\Tests\Expected\Model;

class Thing
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }
}
