<?php

namespace Bitpay\BPCheckout\Api;

interface IpnManagementInterface
{

    /**
     * POST for ipn api
     *
     * @return bool
     */
    public function postIpn(): bool;

     /**
     * POST for close api
      *
     * @return void
     */
    public function postClose();

}
