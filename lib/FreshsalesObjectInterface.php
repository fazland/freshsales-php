<?php

namespace Fazland\Freshsales;

/**
 * @author Daniele Rapisarda <daniele.rapisarda@fazland.com>
 */
interface FreshsalesObjectInterface
{
    /**
     * The following methods are used to get the proper API URIs to execute the CRUD operations.
     */

    /**
     * @return string
     */
    public function getAddAction(): string;

    /**
     * @return string
     */
    public function getDeleteAction(): string;

    /**
     * @return string
     */
    public function getUpdateAction(): string;

    /**
     * @return string
     */
    public function getGetAction(): string;

    /**
     * This method is used to create a proper data structure to be served to Freshsales API.
     * @return array
     */
    public function toArray(): array;
}
