<?php
namespace DG\Deploy\Plugin;

use Magento\Deploy\Service\DeployStaticContent;
use Magento\Framework\App\ResourceConnection;

class DeployStaticContentPlugin
{
    /**
     * ResourceConnection $resource
     */
    protected  $_resource;

    /**
     * @param ResourceConnection $resource
     */
    public function __construct(
        ResourceConnection $resource
    ) {
        $this->_resource = $resource;
    }

    public function beforeDeploy(DeployStaticContent $subject)
    {
        $tableName = $this->_resource->getTableName('theme');
        $connection = $this->_resource->getConnection(ResourceConnection::DEFAULT_CONNECTION);

        $connection->rawQuery("UPDATE `" . $tableName . "` SET `type`=0;");
    }
}
