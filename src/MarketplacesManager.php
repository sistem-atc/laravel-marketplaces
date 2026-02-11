<?php

namespace SistemAtc\Marketplaces;

use Illuminate\Support\Manager;
use SistemAtc\Marketplaces\Drivers\MercadoLivre\MercadoLivreDriver;

class MarketplacesManager extends Manager
{
    public function getDefaultDriver()
    {
        return $this->config->get('marketplaces.default', 'mercadolivre');
    }

    public function createMercadolivreDriver()
    {
        $config = $this->config->get('marketplaces.mercadolivre');
        return new MercadoLivreDriver($config);
    }

    // Quando for criar a Shopee, basta adicionar:
    // public function createShopeeDriver() { ... }
}