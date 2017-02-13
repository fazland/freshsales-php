<?php

namespace Fazland\Freshsales;

use GuzzleHttp\Client;

/**
 * @author Daniele Rapisarda <daniele.rapisarda@fazland.com>
 */
class Freshsales
{
    private $domain;

    private $appToken;

    /**
     * @var Client
     */
    private $client;

    /**
     * Freshsales constructor.
     * @param $domain
     * @param $appToken
     */
    public function __construct($domain, $appToken)
    {
        $this->domain = $domain;
        $this->client = new Client([
            'base_uri' => $domain
        ]);
    }

    public function initMessage(array $customMessage = [])
    {
        return array_merge($customMessage, [
            'application_token' => $this->appToken,
            'sdk' => 'php'
        ]);
    }

    public function add(FreshsalesObjectInterface $entity)
    {
        $this->client->request('POST', $this->domain . '/api/' . $entity->getAddAction(), $this->initMessage($entity->toArray()));
    }
}
