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
    private $appToken;

    /**
     * @var Client
     */
    private $client;

    /**
     * Freshsales constructor.
     *
     * @param $domain
     * @param $appToken
     */
    public function __construct($domain, $appToken)
    {
        $this->domain = $domain;
        $this->client = new Client([
            'base_uri' => $domain,
        ]);
    }

    public function add(ObjectInterface $object)
    {
        $this->client->request('POST', $this->domain.'/api/'.$object->getAddAction(), $this->initMessage($object->toArray()));
    }

    private function initMessage(array $customMessage = []): array
    {
        return array_merge($customMessage, [
            'application_token' => $this->appToken,
            'sdk' => 'php',
        ]);
    }
}
