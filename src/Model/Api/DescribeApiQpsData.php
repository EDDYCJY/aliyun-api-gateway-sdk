<?php
namespace ApiGateway\Model\Api;

use ApiGateway\ApiModel;

class DescribeApiQpsData extends ApiModel
{
    public $GroupId;

    public $ApiId;

    public $StartTime;

    public $EndTime;

    public function setGroupId($id)
    {
        $this->GroupId = $id;

        return $this;
    }

    public function setApiId($id)
    {
        $this->ApiId = $id;

        return $this;
    }

    public function setStartTime($time)
    {
        $this->StartTime = $time;

        return $this;
    }

    public function setEndTime($time)
    {
        $this->EndTime = $time;

        return $this;
    }

}