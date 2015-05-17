<?php

namespace GW2Treasures\GW2Api\V2;

use GuzzleHttp\Client;
use GuzzleHttp\Message\RequestInterface;
use GuzzleHttp\Message\ResponseInterface;

trait EndpointTrait {

    /**
     * @return Client
     */
    protected abstract function getClient();

    /**
     * Creates a new Request to this Endpoint.
     *
     * @param string[] $query
     * @param null     $url
     * @param string   $method
     * @param array    $options
     * @return \GuzzleHttp\Message\Request|\GuzzleHttp\Message\RequestInterface
     */
    protected abstract function createRequest( array $query = [], $url = null, $method = 'GET', $options = [] );

    /**
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    protected abstract function request( RequestInterface $request );

    /**
     * Returns the json object if the response contains valid json, otherwise null.
     *
     * @param ResponseInterface $response
     * @return mixed|null
     */
    protected abstract function getResponseAsJson( ResponseInterface $response );
}
