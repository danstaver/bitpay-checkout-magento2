<?php

namespace Bitpay\BPCheckout\Api;

interface IpnManagementInterface
{

    /**
     * POST for ipn api
     *
     * @return bool|void
     */
    public function postIpn();

     /**
     * POST for close api
      *
     * @return void
     */
    public function postClose();

}
