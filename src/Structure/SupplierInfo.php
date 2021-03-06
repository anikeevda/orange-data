<?php

declare(strict_types=1);
/**
 * @author Anikeev Dmitry <dm.anikeev@gmail.com>
 */

namespace OrangeData\Structure;

use JsonSerializable;

class SupplierInfo implements JsonSerializable
{
    /**
     * @var null|string[]
     */
    private $phoneNumbers;

    /**
     * @var null|string
     */
    private $name;

    /**
     * @return string[]|null
     */
    public function getPhoneNumbers(): ?array
    {
        return $this->phoneNumbers;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    public function jsonSerialize()
    {
        return [
            'phoneNumbers' => $this->phoneNumbers,
            'name' => $this->name,
        ];
    }
}
