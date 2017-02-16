<?php

namespace Fazland\Freshsales\Data;

interface ObjectInterface
{
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
     * @param array|null $include
     *
     * @return string
     */
    public function getGetAction(array $include = null): string;

    /**
     * @return string
     */
    public function getFilteredSearchAction(): string;

    /**
     * This method is used to create a proper data structure to be served to Freshsales API.
     *
     * @return array
     */
    public function toArray(): array;
}
