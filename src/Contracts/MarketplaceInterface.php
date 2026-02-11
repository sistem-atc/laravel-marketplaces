<?php

namespace SistemAtc\Marketplaces\Contracts;

interface MarketplaceInterface
{
    public function products();
    public function orders();
    public function finance();
}