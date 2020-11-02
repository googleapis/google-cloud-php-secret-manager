<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secrets/v1beta1/resources.proto

namespace Google\Cloud\SecretManager\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A secret version resource in the Secret Manager API.
 *
 * Generated from protobuf message <code>google.cloud.secrets.v1beta1.SecretVersion</code>
 */
class SecretVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] in the
     * format `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     * [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] IDs in a [Secret][google.cloud.secrets.v1beta1.Secret] start at 1 and
     * are incremented for each subsequent version of the secret.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. The time at which the [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time this [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] was destroyed.
     * Only present if [state][google.cloud.secrets.v1beta1.SecretVersion.state] is
     * [DESTROYED][google.cloud.secrets.v1beta1.SecretVersion.State.DESTROYED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $destroy_time = null;
    /**
     * Output only. The current state of the [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secrets.v1beta1.SecretVersion.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] in the
     *           format `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *           [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] IDs in a [Secret][google.cloud.secrets.v1beta1.Secret] start at 1 and
     *           are incremented for each subsequent version of the secret.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which the [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] was created.
     *     @type \Google\Protobuf\Timestamp $destroy_time
     *           Output only. The time this [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] was destroyed.
     *           Only present if [state][google.cloud.secrets.v1beta1.SecretVersion.state] is
     *           [DESTROYED][google.cloud.secrets.v1beta1.SecretVersion.State.DESTROYED].
     *     @type int $state
     *           Output only. The current state of the [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secrets\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] in the
     * format `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     * [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] IDs in a [Secret][google.cloud.secrets.v1beta1.Secret] start at 1 and
     * are incremented for each subsequent version of the secret.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] in the
     * format `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     * [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] IDs in a [Secret][google.cloud.secrets.v1beta1.Secret] start at 1 and
     * are incremented for each subsequent version of the secret.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The time at which the [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which the [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time this [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] was destroyed.
     * Only present if [state][google.cloud.secrets.v1beta1.SecretVersion.state] is
     * [DESTROYED][google.cloud.secrets.v1beta1.SecretVersion.State.DESTROYED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getDestroyTime()
    {
        return isset($this->destroy_time) ? $this->destroy_time : null;
    }

    public function hasDestroyTime()
    {
        return isset($this->destroy_time);
    }

    public function clearDestroyTime()
    {
        unset($this->destroy_time);
    }

    /**
     * Output only. The time this [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion] was destroyed.
     * Only present if [state][google.cloud.secrets.v1beta1.SecretVersion.state] is
     * [DESTROYED][google.cloud.secrets.v1beta1.SecretVersion.State.DESTROYED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDestroyTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->destroy_time = $var;

        return $this;
    }

    /**
     * Output only. The current state of the [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secrets.v1beta1.SecretVersion.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the [SecretVersion][google.cloud.secrets.v1beta1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secrets.v1beta1.SecretVersion.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecretManager\V1beta1\SecretVersion\State::class);
        $this->state = $var;

        return $this;
    }

}

