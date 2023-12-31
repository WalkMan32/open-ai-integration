<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service.proto

namespace OpenAiIntegration;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *сущность для получеия и добавления промпта
 *
 * Generated from protobuf message <code>openAiIntegration.Prompt</code>
 */
class Prompt extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 Id = 1;</code>
     */
    protected $Id = 0;
    /**
     * Generated from protobuf field <code>string Name = 2;</code>
     */
    protected $Name = '';
    /**
     * Generated from protobuf field <code>repeated string SystemMessages = 3;</code>
     */
    private $SystemMessages;
    /**
     * Generated from protobuf field <code>repeated .openAiIntegration.PromptSubPromptsMessages SubPrompts = 4;</code>
     */
    private $SubPrompts;
    /**
     * Generated from protobuf field <code>uint32 CreatorUserId = 5;</code>
     */
    protected $CreatorUserId = 0;
    /**
     * Generated from protobuf field <code>uint32 TokenCost = 6;</code>
     */
    protected $TokenCost = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Id
     *     @type string $Name
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $SystemMessages
     *     @type array<\OpenAiIntegration\PromptSubPromptsMessages>|\Google\Protobuf\Internal\RepeatedField $SubPrompts
     *     @type int $CreatorUserId
     *     @type int $TokenCost
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 Id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Generated from protobuf field <code>uint32 Id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->Id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Generated from protobuf field <code>string Name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->Name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string SystemMessages = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSystemMessages()
    {
        return $this->SystemMessages;
    }

    /**
     * Generated from protobuf field <code>repeated string SystemMessages = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSystemMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->SystemMessages = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .openAiIntegration.PromptSubPromptsMessages SubPrompts = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubPrompts()
    {
        return $this->SubPrompts;
    }

    /**
     * Generated from protobuf field <code>repeated .openAiIntegration.PromptSubPromptsMessages SubPrompts = 4;</code>
     * @param array<\OpenAiIntegration\PromptSubPromptsMessages>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubPrompts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \OpenAiIntegration\PromptSubPromptsMessages::class);
        $this->SubPrompts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 CreatorUserId = 5;</code>
     * @return int
     */
    public function getCreatorUserId()
    {
        return $this->CreatorUserId;
    }

    /**
     * Generated from protobuf field <code>uint32 CreatorUserId = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCreatorUserId($var)
    {
        GPBUtil::checkUint32($var);
        $this->CreatorUserId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 TokenCost = 6;</code>
     * @return int
     */
    public function getTokenCost()
    {
        return $this->TokenCost;
    }

    /**
     * Generated from protobuf field <code>uint32 TokenCost = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setTokenCost($var)
    {
        GPBUtil::checkUint32($var);
        $this->TokenCost = $var;

        return $this;
    }

}

