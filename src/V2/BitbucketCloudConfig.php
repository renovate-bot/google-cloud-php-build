<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v2/repositories.proto

namespace Google\Cloud\Build\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for connections to Bitbucket Cloud.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v2.BitbucketCloudConfig</code>
 */
class BitbucketCloudConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Bitbucket Cloud Workspace ID to be connected to Google Cloud
     * Platform.
     *
     * Generated from protobuf field <code>string workspace = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $workspace = '';
    /**
     * Required. SecretManager resource containing the webhook secret used to
     * verify webhook events, formatted as `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string webhook_secret_secret_version = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $webhook_secret_secret_version = '';
    /**
     * Required. An access token with the `repository` access. It can be either a
     * workspace, project or repository access token. It's recommended to use a
     * system account to generate the credentials.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v2.UserCredential read_authorizer_credential = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $read_authorizer_credential = null;
    /**
     * Required. An access token with the `webhook`, `repository`,
     * `repository:admin` and `pullrequest` scope access. It can be either a
     * workspace, project or repository access token. It's recommended to use a
     * system account to generate these credentials.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v2.UserCredential authorizer_credential = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $authorizer_credential = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $workspace
     *           Required. The Bitbucket Cloud Workspace ID to be connected to Google Cloud
     *           Platform.
     *     @type string $webhook_secret_secret_version
     *           Required. SecretManager resource containing the webhook secret used to
     *           verify webhook events, formatted as `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *     @type \Google\Cloud\Build\V2\UserCredential $read_authorizer_credential
     *           Required. An access token with the `repository` access. It can be either a
     *           workspace, project or repository access token. It's recommended to use a
     *           system account to generate the credentials.
     *     @type \Google\Cloud\Build\V2\UserCredential $authorizer_credential
     *           Required. An access token with the `webhook`, `repository`,
     *           `repository:admin` and `pullrequest` scope access. It can be either a
     *           workspace, project or repository access token. It's recommended to use a
     *           system account to generate these credentials.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V2\Repositories::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Bitbucket Cloud Workspace ID to be connected to Google Cloud
     * Platform.
     *
     * Generated from protobuf field <code>string workspace = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getWorkspace()
    {
        return $this->workspace;
    }

    /**
     * Required. The Bitbucket Cloud Workspace ID to be connected to Google Cloud
     * Platform.
     *
     * Generated from protobuf field <code>string workspace = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setWorkspace($var)
    {
        GPBUtil::checkString($var, True);
        $this->workspace = $var;

        return $this;
    }

    /**
     * Required. SecretManager resource containing the webhook secret used to
     * verify webhook events, formatted as `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string webhook_secret_secret_version = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getWebhookSecretSecretVersion()
    {
        return $this->webhook_secret_secret_version;
    }

    /**
     * Required. SecretManager resource containing the webhook secret used to
     * verify webhook events, formatted as `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string webhook_secret_secret_version = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWebhookSecretSecretVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->webhook_secret_secret_version = $var;

        return $this;
    }

    /**
     * Required. An access token with the `repository` access. It can be either a
     * workspace, project or repository access token. It's recommended to use a
     * system account to generate the credentials.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v2.UserCredential read_authorizer_credential = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Build\V2\UserCredential|null
     */
    public function getReadAuthorizerCredential()
    {
        return $this->read_authorizer_credential;
    }

    public function hasReadAuthorizerCredential()
    {
        return isset($this->read_authorizer_credential);
    }

    public function clearReadAuthorizerCredential()
    {
        unset($this->read_authorizer_credential);
    }

    /**
     * Required. An access token with the `repository` access. It can be either a
     * workspace, project or repository access token. It's recommended to use a
     * system account to generate the credentials.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v2.UserCredential read_authorizer_credential = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Build\V2\UserCredential $var
     * @return $this
     */
    public function setReadAuthorizerCredential($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V2\UserCredential::class);
        $this->read_authorizer_credential = $var;

        return $this;
    }

    /**
     * Required. An access token with the `webhook`, `repository`,
     * `repository:admin` and `pullrequest` scope access. It can be either a
     * workspace, project or repository access token. It's recommended to use a
     * system account to generate these credentials.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v2.UserCredential authorizer_credential = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Build\V2\UserCredential|null
     */
    public function getAuthorizerCredential()
    {
        return $this->authorizer_credential;
    }

    public function hasAuthorizerCredential()
    {
        return isset($this->authorizer_credential);
    }

    public function clearAuthorizerCredential()
    {
        unset($this->authorizer_credential);
    }

    /**
     * Required. An access token with the `webhook`, `repository`,
     * `repository:admin` and `pullrequest` scope access. It can be either a
     * workspace, project or repository access token. It's recommended to use a
     * system account to generate these credentials.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v2.UserCredential authorizer_credential = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Build\V2\UserCredential $var
     * @return $this
     */
    public function setAuthorizerCredential($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V2\UserCredential::class);
        $this->authorizer_credential = $var;

        return $this;
    }

}
