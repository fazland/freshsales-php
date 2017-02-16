<?php

namespace Fazland\Freshsales;

use Fazland\Freshsales\Data\ObjectInterface;
use GuzzleHttp\Client;

/**
 * @author Daniele Rapisarda <daniele.rapisarda@fazland.com>
 */
class Freshsales
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var Client
     */
    private $client;

    /**
     * Freshsales constructor.
     *
     * @param $domain
     * @param $apiKey
     */
    public function __construct($domain, $apiKey)
    {
        $this->domain = $domain;
        $this->apiKey = $apiKey;
        $this->client = new Client([
            'base_uri' => $domain,
        ]);
    }

    public function add(ObjectInterface $object)
    {
        $options = [
            'headers' => [
                'Authorization' => 'Token token='. $this->apiKey
            ],
            'json' => $object->toArray()
        ];

        $url = $this->domain.'/api/'.$object->getAddAction();

        return $this->client->request('POST', $url , $options);
    }

    public function update(ObjectInterface $object)
    {
        $options = [
            'headers' => [
                'Authorization' => 'Token token='. $this->apiKey
            ],
            'json' => $object->toArray()
        ];

        $url = $this->domain.'/api/'.$object->getUpdateAction();

        return $this->client->request('PUT', $url, $options)->getStatusCode();
    }

    public function get(ObjectInterface $object)
    {
        //@todo
    }

    public function filteredSearch(ObjectInterface $object, $filterRule)
    {
        $options = [
            'headers' => [
                'Authorization' => 'Token token='. $this->apiKey
            ],
            'json' => $filterRule
        ];

        $url = $this->domain.'/api/'.$object->getFilteredSearchAction();

        return $this->client->request('POST', $url , $options)->getBody()->getContents();
    }

}
