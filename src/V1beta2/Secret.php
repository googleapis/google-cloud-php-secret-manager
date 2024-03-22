<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1beta2/resources.proto

namespace Google\Cloud\SecretManager\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [Secret][google.cloud.secretmanager.v1beta2.Secret] is a logical secret
 * whose value and versions can be accessed.
 * A [Secret][google.cloud.secretmanager.v1beta2.Secret] is made up of zero or
 * more [SecretVersions][google.cloud.secretmanager.v1beta2.SecretVersion] that
 * represent the secret data.
 *
 * Generated from protobuf message <code>google.cloud.secretmanager.v1beta2.Secret</code>
 */
class Secret extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret] in the format
     * `projects/&#42;&#47;secrets/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Optional. Immutable. The replication policy of the secret data attached to
     * the [Secret][google.cloud.secretmanager.v1beta2.Secret].
     * The replication policy cannot be changed after the Secret has been created.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1beta2.Replication replication = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $replication = null;
    /**
     * Output only. The time at which the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * The labels assigned to this Secret.
     * Label keys must be between 1 and 63 characters long, have a UTF-8 encoding
     * of maximum 128 bytes, and must conform to the following PCRE regular
     * expression: `[\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}`
     * Label values must be between 0 and 63 characters long, have a UTF-8
     * encoding of maximum 128 bytes, and must conform to the following PCRE
     * regular expression: `[\p{Ll}\p{Lo}\p{N}_-]{0,63}`
     * No more than 64 labels can be assigned to a given resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * Optional. A list of up to 10 Pub/Sub topics to which messages are published
     * when control plane operations are called on the secret or its versions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.secretmanager.v1beta2.Topic topics = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $topics;
    /**
     * Optional. Etag of the currently stored
     * [Secret][google.cloud.secretmanager.v1beta2.Secret].
     *
     * Generated from protobuf field <code>string etag = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $etag = '';
    /**
     * Optional. Rotation policy attached to the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret]. May be excluded if
     * there is no rotation policy.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1beta2.Rotation rotation = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $rotation = null;
    /**
     * Optional. Mapping from version alias to version name.
     * A version alias is a string with a maximum length of 63 characters and can
     * contain uppercase and lowercase letters, numerals, and the hyphen (`-`)
     * and underscore ('_') characters. An alias string must start with a
     * letter and cannot be the string 'latest' or 'NEW'.
     * No more than 50 aliases can be assigned to a given secret.
     * Version-Alias pairs will be viewable via GetSecret and modifiable via
     * UpdateSecret. Access by alias is only supported for
     * GetSecretVersion and AccessSecretVersion.
     *
     * Generated from protobuf field <code>map<string, int64> version_aliases = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $version_aliases;
    /**
     * Optional. Custom metadata about the secret.
     * Annotations are distinct from various forms of labels.
     * Annotations exist to allow client tools to store their own state
     * information without requiring a database.
     * Annotation keys must be between 1 and 63 characters long, have a UTF-8
     * encoding of maximum 128 bytes, begin and end with an alphanumeric character
     * ([a-z0-9A-Z]), and may have dashes (-), underscores (_), dots (.), and
     * alphanumerics in between these symbols.
     * The total size of annotation keys and values must be less than 16KiB.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $annotations;
    /**
     * Optional. Secret Version TTL after destruction request
     * This is a part of the Delayed secret version destroy feature.
     * For secret with TTL>0, version destruction doesn't happen immediately
     * on calling destroy instead the version goes to a disabled state and
     * destruction happens after the TTL expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration version_destroy_ttl = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $version_destroy_ttl = null;
    /**
     * Optional. The customer-managed encryption configuration of the Regionalised
     * Secrets. If no configuration is provided, Google-managed default encryption
     * is used.
     * Updates to the [Secret][google.cloud.secretmanager.v1beta2.Secret]
     * encryption configuration only apply to
     * [SecretVersions][google.cloud.secretmanager.v1beta2.SecretVersion] added
     * afterwards. They do not apply retroactively to existing
     * [SecretVersions][google.cloud.secretmanager.v1beta2.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1beta2.CustomerManagedEncryption customer_managed_encryption = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $customer_managed_encryption = null;
    protected $expiration;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the
     *           [Secret][google.cloud.secretmanager.v1beta2.Secret] in the format
     *           `projects/&#42;&#47;secrets/&#42;`.
     *     @type \Google\Cloud\SecretManager\V1beta2\Replication $replication
     *           Optional. Immutable. The replication policy of the secret data attached to
     *           the [Secret][google.cloud.secretmanager.v1beta2.Secret].
     *           The replication policy cannot be changed after the Secret has been created.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which the
     *           [Secret][google.cloud.secretmanager.v1beta2.Secret] was created.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels assigned to this Secret.
     *           Label keys must be between 1 and 63 characters long, have a UTF-8 encoding
     *           of maximum 128 bytes, and must conform to the following PCRE regular
     *           expression: `[\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}`
     *           Label values must be between 0 and 63 characters long, have a UTF-8
     *           encoding of maximum 128 bytes, and must conform to the following PCRE
     *           regular expression: `[\p{Ll}\p{Lo}\p{N}_-]{0,63}`
     *           No more than 64 labels can be assigned to a given resource.
     *     @type array<\Google\Cloud\SecretManager\V1beta2\Topic>|\Google\Protobuf\Internal\RepeatedField $topics
     *           Optional. A list of up to 10 Pub/Sub topics to which messages are published
     *           when control plane operations are called on the secret or its versions.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Optional. Timestamp in UTC when the
     *           [Secret][google.cloud.secretmanager.v1beta2.Secret] is scheduled to
     *           expire. This is always provided on output, regardless of what was sent on
     *           input.
     *     @type \Google\Protobuf\Duration $ttl
     *           Input only. The TTL for the
     *           [Secret][google.cloud.secretmanager.v1beta2.Secret].
     *     @type string $etag
     *           Optional. Etag of the currently stored
     *           [Secret][google.cloud.secretmanager.v1beta2.Secret].
     *     @type \Google\Cloud\SecretManager\V1beta2\Rotation $rotation
     *           Optional. Rotation policy attached to the
     *           [Secret][google.cloud.secretmanager.v1beta2.Secret]. May be excluded if
     *           there is no rotation policy.
     *     @type array|\Google\Protobuf\Internal\MapField $version_aliases
     *           Optional. Mapping from version alias to version name.
     *           A version alias is a string with a maximum length of 63 characters and can
     *           contain uppercase and lowercase letters, numerals, and the hyphen (`-`)
     *           and underscore ('_') characters. An alias string must start with a
     *           letter and cannot be the string 'latest' or 'NEW'.
     *           No more than 50 aliases can be assigned to a given secret.
     *           Version-Alias pairs will be viewable via GetSecret and modifiable via
     *           UpdateSecret. Access by alias is only supported for
     *           GetSecretVersion and AccessSecretVersion.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Optional. Custom metadata about the secret.
     *           Annotations are distinct from various forms of labels.
     *           Annotations exist to allow client tools to store their own state
     *           information without requiring a database.
     *           Annotation keys must be between 1 and 63 characters long, have a UTF-8
     *           encoding of maximum 128 bytes, begin and end with an alphanumeric character
     *           ([a-z0-9A-Z]), and may have dashes (-), underscores (_), dots (.), and
     *           alphanumerics in between these symbols.
     *           The total size of annotation keys and values must be less than 16KiB.
     *     @type \Google\Protobuf\Duration $version_destroy_ttl
     *           Optional. Secret Version TTL after destruction request
     *           This is a part of the Delayed secret version destroy feature.
     *           For secret with TTL>0, version destruction doesn't happen immediately
     *           on calling destroy instead the version goes to a disabled state and
     *           destruction happens after the TTL expires.
     *     @type \Google\Cloud\SecretManager\V1beta2\CustomerManagedEncryption $customer_managed_encryption
     *           Optional. The customer-managed encryption configuration of the Regionalised
     *           Secrets. If no configuration is provided, Google-managed default encryption
     *           is used.
     *           Updates to the [Secret][google.cloud.secretmanager.v1beta2.Secret]
     *           encryption configuration only apply to
     *           [SecretVersions][google.cloud.secretmanager.v1beta2.SecretVersion] added
     *           afterwards. They do not apply retroactively to existing
     *           [SecretVersions][google.cloud.secretmanager.v1beta2.SecretVersion].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secretmanager\V1Beta2\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret] in the format
     * `projects/&#42;&#47;secrets/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret] in the format
     * `projects/&#42;&#47;secrets/&#42;`.
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
     * Optional. Immutable. The replication policy of the secret data attached to
     * the [Secret][google.cloud.secretmanager.v1beta2.Secret].
     * The replication policy cannot be changed after the Secret has been created.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1beta2.Replication replication = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\SecretManager\V1beta2\Replication|null
     */
    public function getReplication()
    {
        return $this->replication;
    }

    public function hasReplication()
    {
        return isset($this->replication);
    }

    public function clearReplication()
    {
        unset($this->replication);
    }

    /**
     * Optional. Immutable. The replication policy of the secret data attached to
     * the [Secret][google.cloud.secretmanager.v1beta2.Secret].
     * The replication policy cannot be changed after the Secret has been created.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1beta2.Replication replication = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\SecretManager\V1beta2\Replication $var
     * @return $this
     */
    public function setReplication($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecretManager\V1beta2\Replication::class);
        $this->replication = $var;

        return $this;
    }

    /**
     * Output only. The time at which the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
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
     * Output only. The time at which the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The labels assigned to this Secret.
     * Label keys must be between 1 and 63 characters long, have a UTF-8 encoding
     * of maximum 128 bytes, and must conform to the following PCRE regular
     * expression: `[\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}`
     * Label values must be between 0 and 63 characters long, have a UTF-8
     * encoding of maximum 128 bytes, and must conform to the following PCRE
     * regular expression: `[\p{Ll}\p{Lo}\p{N}_-]{0,63}`
     * No more than 64 labels can be assigned to a given resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels assigned to this Secret.
     * Label keys must be between 1 and 63 characters long, have a UTF-8 encoding
     * of maximum 128 bytes, and must conform to the following PCRE regular
     * expression: `[\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}`
     * Label values must be between 0 and 63 characters long, have a UTF-8
     * encoding of maximum 128 bytes, and must conform to the following PCRE
     * regular expression: `[\p{Ll}\p{Lo}\p{N}_-]{0,63}`
     * No more than 64 labels can be assigned to a given resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. A list of up to 10 Pub/Sub topics to which messages are published
     * when control plane operations are called on the secret or its versions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.secretmanager.v1beta2.Topic topics = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * Optional. A list of up to 10 Pub/Sub topics to which messages are published
     * when control plane operations are called on the secret or its versions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.secretmanager.v1beta2.Topic topics = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\SecretManager\V1beta2\Topic>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecretManager\V1beta2\Topic::class);
        $this->topics = $arr;

        return $this;
    }

    /**
     * Optional. Timestamp in UTC when the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret] is scheduled to
     * expire. This is always provided on output, regardless of what was sent on
     * input.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->readOneof(6);
    }

    public function hasExpireTime()
    {
        return $this->hasOneof(6);
    }

    /**
     * Optional. Timestamp in UTC when the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret] is scheduled to
     * expire. This is always provided on output, regardless of what was sent on
     * input.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Input only. The TTL for the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret].
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 7 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTtl()
    {
        return $this->readOneof(7);
    }

    public function hasTtl()
    {
        return $this->hasOneof(7);
    }

    /**
     * Input only. The TTL for the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret].
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 7 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Optional. Etag of the currently stored
     * [Secret][google.cloud.secretmanager.v1beta2.Secret].
     *
     * Generated from protobuf field <code>string etag = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. Etag of the currently stored
     * [Secret][google.cloud.secretmanager.v1beta2.Secret].
     *
     * Generated from protobuf field <code>string etag = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. Rotation policy attached to the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret]. May be excluded if
     * there is no rotation policy.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1beta2.Rotation rotation = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\SecretManager\V1beta2\Rotation|null
     */
    public function getRotation()
    {
        return $this->rotation;
    }

    public function hasRotation()
    {
        return isset($this->rotation);
    }

    public function clearRotation()
    {
        unset($this->rotation);
    }

    /**
     * Optional. Rotation policy attached to the
     * [Secret][google.cloud.secretmanager.v1beta2.Secret]. May be excluded if
     * there is no rotation policy.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1beta2.Rotation rotation = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\SecretManager\V1beta2\Rotation $var
     * @return $this
     */
    public function setRotation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecretManager\V1beta2\Rotation::class);
        $this->rotation = $var;

        return $this;
    }

    /**
     * Optional. Mapping from version alias to version name.
     * A version alias is a string with a maximum length of 63 characters and can
     * contain uppercase and lowercase letters, numerals, and the hyphen (`-`)
     * and underscore ('_') characters. An alias string must start with a
     * letter and cannot be the string 'latest' or 'NEW'.
     * No more than 50 aliases can be assigned to a given secret.
     * Version-Alias pairs will be viewable via GetSecret and modifiable via
     * UpdateSecret. Access by alias is only supported for
     * GetSecretVersion and AccessSecretVersion.
     *
     * Generated from protobuf field <code>map<string, int64> version_aliases = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getVersionAliases()
    {
        return $this->version_aliases;
    }

    /**
     * Optional. Mapping from version alias to version name.
     * A version alias is a string with a maximum length of 63 characters and can
     * contain uppercase and lowercase letters, numerals, and the hyphen (`-`)
     * and underscore ('_') characters. An alias string must start with a
     * letter and cannot be the string 'latest' or 'NEW'.
     * No more than 50 aliases can be assigned to a given secret.
     * Version-Alias pairs will be viewable via GetSecret and modifiable via
     * UpdateSecret. Access by alias is only supported for
     * GetSecretVersion and AccessSecretVersion.
     *
     * Generated from protobuf field <code>map<string, int64> version_aliases = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setVersionAliases($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT64);
        $this->version_aliases = $arr;

        return $this;
    }

    /**
     * Optional. Custom metadata about the secret.
     * Annotations are distinct from various forms of labels.
     * Annotations exist to allow client tools to store their own state
     * information without requiring a database.
     * Annotation keys must be between 1 and 63 characters long, have a UTF-8
     * encoding of maximum 128 bytes, begin and end with an alphanumeric character
     * ([a-z0-9A-Z]), and may have dashes (-), underscores (_), dots (.), and
     * alphanumerics in between these symbols.
     * The total size of annotation keys and values must be less than 16KiB.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Optional. Custom metadata about the secret.
     * Annotations are distinct from various forms of labels.
     * Annotations exist to allow client tools to store their own state
     * information without requiring a database.
     * Annotation keys must be between 1 and 63 characters long, have a UTF-8
     * encoding of maximum 128 bytes, begin and end with an alphanumeric character
     * ([a-z0-9A-Z]), and may have dashes (-), underscores (_), dots (.), and
     * alphanumerics in between these symbols.
     * The total size of annotation keys and values must be less than 16KiB.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Optional. Secret Version TTL after destruction request
     * This is a part of the Delayed secret version destroy feature.
     * For secret with TTL>0, version destruction doesn't happen immediately
     * on calling destroy instead the version goes to a disabled state and
     * destruction happens after the TTL expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration version_destroy_ttl = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getVersionDestroyTtl()
    {
        return $this->version_destroy_ttl;
    }

    public function hasVersionDestroyTtl()
    {
        return isset($this->version_destroy_ttl);
    }

    public function clearVersionDestroyTtl()
    {
        unset($this->version_destroy_ttl);
    }

    /**
     * Optional. Secret Version TTL after destruction request
     * This is a part of the Delayed secret version destroy feature.
     * For secret with TTL>0, version destruction doesn't happen immediately
     * on calling destroy instead the version goes to a disabled state and
     * destruction happens after the TTL expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration version_destroy_ttl = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setVersionDestroyTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->version_destroy_ttl = $var;

        return $this;
    }

    /**
     * Optional. The customer-managed encryption configuration of the Regionalised
     * Secrets. If no configuration is provided, Google-managed default encryption
     * is used.
     * Updates to the [Secret][google.cloud.secretmanager.v1beta2.Secret]
     * encryption configuration only apply to
     * [SecretVersions][google.cloud.secretmanager.v1beta2.SecretVersion] added
     * afterwards. They do not apply retroactively to existing
     * [SecretVersions][google.cloud.secretmanager.v1beta2.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1beta2.CustomerManagedEncryption customer_managed_encryption = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\SecretManager\V1beta2\CustomerManagedEncryption|null
     */
    public function getCustomerManagedEncryption()
    {
        return $this->customer_managed_encryption;
    }

    public function hasCustomerManagedEncryption()
    {
        return isset($this->customer_managed_encryption);
    }

    public function clearCustomerManagedEncryption()
    {
        unset($this->customer_managed_encryption);
    }

    /**
     * Optional. The customer-managed encryption configuration of the Regionalised
     * Secrets. If no configuration is provided, Google-managed default encryption
     * is used.
     * Updates to the [Secret][google.cloud.secretmanager.v1beta2.Secret]
     * encryption configuration only apply to
     * [SecretVersions][google.cloud.secretmanager.v1beta2.SecretVersion] added
     * afterwards. They do not apply retroactively to existing
     * [SecretVersions][google.cloud.secretmanager.v1beta2.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1beta2.CustomerManagedEncryption customer_managed_encryption = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\SecretManager\V1beta2\CustomerManagedEncryption $var
     * @return $this
     */
    public function setCustomerManagedEncryption($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecretManager\V1beta2\CustomerManagedEncryption::class);
        $this->customer_managed_encryption = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpiration()
    {
        return $this->whichOneof("expiration");
    }

}

