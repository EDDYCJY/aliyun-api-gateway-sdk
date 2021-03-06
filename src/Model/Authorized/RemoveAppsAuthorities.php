<?php
namespace ApiGateway\Model\Authorized;

use ApiGateway\ApiModel;

class RemoveAppsAuthorities extends ApiModel
{
    public $GroupId;

    public $StageName;

    public $ApiId;

    public $AppIds;

    public function setGroupId($id)
    {
        $this->GroupId = $id;

        return $this;
    }

    public function setStageName($name)
    {
        $this->StageName = $name;

        return $this;
    }

    public function setApiId($id)
    {
        $this->ApiId = $id;

        return $this;
    }

    public function setAppIds($ids)
    {
        $this->AppIds = $ids;

        return $this;
    }

}