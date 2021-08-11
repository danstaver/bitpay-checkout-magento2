<?php

namespace Bitpay\BPCheckout\Model;

use Bitpay\BPCheckout\Api\ModalManagementInterface;
use Magento\Framework\App\ResourceConnection;

class ModalManagement implements ModalManagementInterface
{
    /** @var ResourceConnection  */
    private $resourceConnection;

    public function __construct(ResourceConnection $resourceConnection)
    {
        $this->resourceConnection = $resourceConnection;
    }

    /**
     * {@inheritdoc}
     */
    public function postModal()
    {
       #database
        $resource = $this->resourceConnection;
        $connection    = $resource->getConnection();
        $table_name    = $resource->getTableName('bitpay_transactions');
        #json ipn
        $data = json_decode(file_get_contents("php://input"), true);
    }
}
