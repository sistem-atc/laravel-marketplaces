<?php

namespace SistemAtc\Marketplaces\Drivers\MercadoLivre;

use SistemAtc\Marketplaces\Contracts\MarketplaceInterface;

class MercadoLivreDriver implements MarketplaceInterface
{
    protected $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function create(array $data)
    {
        $endpoint = $this->config['api_base_url'] . $this->config['tags']['items'];
    }

    public function finance() {}
    public function orders() {}
    public function products() {}
}