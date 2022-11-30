<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HttpRouteRuleMatch specifies a set of criteria for matching requests to an HttpRouteRule. All specified criteria must be satisfied for a match to occur.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.HttpRouteRuleMatch</code>
 */
class HttpRouteRuleMatch extends \Google\Protobuf\Internal\Message
{
    /**
     * For satisfying the matchRule condition, the path of the request must exactly match the value specified in fullPathMatch after removing any query parameters and anchor that may be part of the original URL. fullPathMatch must be from 1 to 1024 characters. Only one of prefixMatch, fullPathMatch or regexMatch must be specified.
     *
     * Generated from protobuf field <code>optional string full_path_match = 214598875;</code>
     */
    private $full_path_match = null;
    /**
     * Specifies a list of header match criteria, all of which must match corresponding headers in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpHeaderMatch header_matches = 361903489;</code>
     */
    private $header_matches;
    /**
     * Specifies that prefixMatch and fullPathMatch matches are case sensitive. The default value is false. ignoreCase must not be used with regexMatch. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>optional bool ignore_case = 464324989;</code>
     */
    private $ignore_case = null;
    /**
     * Opaque filter criteria used by the load balancer to restrict routing configuration to a limited set of xDS compliant clients. In their xDS requests to the load balancer, xDS clients present node metadata. When there is a match, the relevant routing configuration is made available to those proxies. For each metadataFilter in this list, if its filterMatchCriteria is set to MATCH_ANY, at least one of the filterLabels must match the corresponding label provided in the metadata. If its filterMatchCriteria is set to MATCH_ALL, then all of its filterLabels must match with corresponding labels provided in the metadata. If multiple metadata filters are specified, all of them need to be satisfied in order to be considered a match. metadataFilters specified here is applied after those specified in ForwardingRule that refers to the UrlMap this HttpRouteRuleMatch belongs to. metadataFilters only applies to load balancers that have loadBalancingScheme set to INTERNAL_SELF_MANAGED. Not supported when the URL map is bound to a target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.MetadataFilter metadata_filters = 464725739;</code>
     */
    private $metadata_filters;
    /**
     * For satisfying the matchRule condition, the request's path must begin with the specified prefixMatch. prefixMatch must begin with a /. The value must be from 1 to 1024 characters. Only one of prefixMatch, fullPathMatch or regexMatch must be specified.
     *
     * Generated from protobuf field <code>optional string prefix_match = 257898968;</code>
     */
    private $prefix_match = null;
    /**
     * Specifies a list of query parameter match criteria, all of which must match corresponding query parameters in the request. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpQueryParameterMatch query_parameter_matches = 286231270;</code>
     */
    private $query_parameter_matches;
    /**
     * For satisfying the matchRule condition, the path of the request must satisfy the regular expression specified in regexMatch after removing any query parameters and anchor supplied with the original URL. For more information about regular expression syntax, see Syntax. Only one of prefixMatch, fullPathMatch or regexMatch must be specified. Regular expressions can only be used when the loadBalancingScheme is set to INTERNAL_SELF_MANAGED.
     *
     * Generated from protobuf field <code>optional string regex_match = 107387853;</code>
     */
    private $regex_match = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $full_path_match
     *           For satisfying the matchRule condition, the path of the request must exactly match the value specified in fullPathMatch after removing any query parameters and anchor that may be part of the original URL. fullPathMatch must be from 1 to 1024 characters. Only one of prefixMatch, fullPathMatch or regexMatch must be specified.
     *     @type array<\Google\Cloud\Compute\V1\HttpHeaderMatch>|\Google\Protobuf\Internal\RepeatedField $header_matches
     *           Specifies a list of header match criteria, all of which must match corresponding headers in the request.
     *     @type bool $ignore_case
     *           Specifies that prefixMatch and fullPathMatch matches are case sensitive. The default value is false. ignoreCase must not be used with regexMatch. Not supported when the URL map is bound to a target gRPC proxy.
     *     @type array<\Google\Cloud\Compute\V1\MetadataFilter>|\Google\Protobuf\Internal\RepeatedField $metadata_filters
     *           Opaque filter criteria used by the load balancer to restrict routing configuration to a limited set of xDS compliant clients. In their xDS requests to the load balancer, xDS clients present node metadata. When there is a match, the relevant routing configuration is made available to those proxies. For each metadataFilter in this list, if its filterMatchCriteria is set to MATCH_ANY, at least one of the filterLabels must match the corresponding label provided in the metadata. If its filterMatchCriteria is set to MATCH_ALL, then all of its filterLabels must match with corresponding labels provided in the metadata. If multiple metadata filters are specified, all of them need to be satisfied in order to be considered a match. metadataFilters specified here is applied after those specified in ForwardingRule that refers to the UrlMap this HttpRouteRuleMatch belongs to. metadataFilters only applies to load balancers that have loadBalancingScheme set to INTERNAL_SELF_MANAGED. Not supported when the URL map is bound to a target gRPC proxy that has validateForProxyless field set to true.
     *     @type string $prefix_match
     *           For satisfying the matchRule condition, the request's path must begin with the specified prefixMatch. prefixMatch must begin with a /. The value must be from 1 to 1024 characters. Only one of prefixMatch, fullPathMatch or regexMatch must be specified.
     *     @type array<\Google\Cloud\Compute\V1\HttpQueryParameterMatch>|\Google\Protobuf\Internal\RepeatedField $query_parameter_matches
     *           Specifies a list of query parameter match criteria, all of which must match corresponding query parameters in the request. Not supported when the URL map is bound to a target gRPC proxy.
     *     @type string $regex_match
     *           For satisfying the matchRule condition, the path of the request must satisfy the regular expression specified in regexMatch after removing any query parameters and anchor supplied with the original URL. For more information about regular expression syntax, see Syntax. Only one of prefixMatch, fullPathMatch or regexMatch must be specified. Regular expressions can only be used when the loadBalancingScheme is set to INTERNAL_SELF_MANAGED.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * For satisfying the matchRule condition, the path of the request must exactly match the value specified in fullPathMatch after removing any query parameters and anchor that may be part of the original URL. fullPathMatch must be from 1 to 1024 characters. Only one of prefixMatch, fullPathMatch or regexMatch must be specified.
     *
     * Generated from protobuf field <code>optional string full_path_match = 214598875;</code>
     * @return string
     */
    public function getFullPathMatch()
    {
        return isset($this->full_path_match) ? $this->full_path_match : '';
    }

    public function hasFullPathMatch()
    {
        return isset($this->full_path_match);
    }

    public function clearFullPathMatch()
    {
        unset($this->full_path_match);
    }

    /**
     * For satisfying the matchRule condition, the path of the request must exactly match the value specified in fullPathMatch after removing any query parameters and anchor that may be part of the original URL. fullPathMatch must be from 1 to 1024 characters. Only one of prefixMatch, fullPathMatch or regexMatch must be specified.
     *
     * Generated from protobuf field <code>optional string full_path_match = 214598875;</code>
     * @param string $var
     * @return $this
     */
    public function setFullPathMatch($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_path_match = $var;

        return $this;
    }

    /**
     * Specifies a list of header match criteria, all of which must match corresponding headers in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpHeaderMatch header_matches = 361903489;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeaderMatches()
    {
        return $this->header_matches;
    }

    /**
     * Specifies a list of header match criteria, all of which must match corresponding headers in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpHeaderMatch header_matches = 361903489;</code>
     * @param array<\Google\Cloud\Compute\V1\HttpHeaderMatch>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeaderMatches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\HttpHeaderMatch::class);
        $this->header_matches = $arr;

        return $this;
    }

    /**
     * Specifies that prefixMatch and fullPathMatch matches are case sensitive. The default value is false. ignoreCase must not be used with regexMatch. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>optional bool ignore_case = 464324989;</code>
     * @return bool
     */
    public function getIgnoreCase()
    {
        return isset($this->ignore_case) ? $this->ignore_case : false;
    }

    public function hasIgnoreCase()
    {
        return isset($this->ignore_case);
    }

    public function clearIgnoreCase()
    {
        unset($this->ignore_case);
    }

    /**
     * Specifies that prefixMatch and fullPathMatch matches are case sensitive. The default value is false. ignoreCase must not be used with regexMatch. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>optional bool ignore_case = 464324989;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreCase($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_case = $var;

        return $this;
    }

    /**
     * Opaque filter criteria used by the load balancer to restrict routing configuration to a limited set of xDS compliant clients. In their xDS requests to the load balancer, xDS clients present node metadata. When there is a match, the relevant routing configuration is made available to those proxies. For each metadataFilter in this list, if its filterMatchCriteria is set to MATCH_ANY, at least one of the filterLabels must match the corresponding label provided in the metadata. If its filterMatchCriteria is set to MATCH_ALL, then all of its filterLabels must match with corresponding labels provided in the metadata. If multiple metadata filters are specified, all of them need to be satisfied in order to be considered a match. metadataFilters specified here is applied after those specified in ForwardingRule that refers to the UrlMap this HttpRouteRuleMatch belongs to. metadataFilters only applies to load balancers that have loadBalancingScheme set to INTERNAL_SELF_MANAGED. Not supported when the URL map is bound to a target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.MetadataFilter metadata_filters = 464725739;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetadataFilters()
    {
        return $this->metadata_filters;
    }

    /**
     * Opaque filter criteria used by the load balancer to restrict routing configuration to a limited set of xDS compliant clients. In their xDS requests to the load balancer, xDS clients present node metadata. When there is a match, the relevant routing configuration is made available to those proxies. For each metadataFilter in this list, if its filterMatchCriteria is set to MATCH_ANY, at least one of the filterLabels must match the corresponding label provided in the metadata. If its filterMatchCriteria is set to MATCH_ALL, then all of its filterLabels must match with corresponding labels provided in the metadata. If multiple metadata filters are specified, all of them need to be satisfied in order to be considered a match. metadataFilters specified here is applied after those specified in ForwardingRule that refers to the UrlMap this HttpRouteRuleMatch belongs to. metadataFilters only applies to load balancers that have loadBalancingScheme set to INTERNAL_SELF_MANAGED. Not supported when the URL map is bound to a target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.MetadataFilter metadata_filters = 464725739;</code>
     * @param array<\Google\Cloud\Compute\V1\MetadataFilter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetadataFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\MetadataFilter::class);
        $this->metadata_filters = $arr;

        return $this;
    }

    /**
     * For satisfying the matchRule condition, the request's path must begin with the specified prefixMatch. prefixMatch must begin with a /. The value must be from 1 to 1024 characters. Only one of prefixMatch, fullPathMatch or regexMatch must be specified.
     *
     * Generated from protobuf field <code>optional string prefix_match = 257898968;</code>
     * @return string
     */
    public function getPrefixMatch()
    {
        return isset($this->prefix_match) ? $this->prefix_match : '';
    }

    public function hasPrefixMatch()
    {
        return isset($this->prefix_match);
    }

    public function clearPrefixMatch()
    {
        unset($this->prefix_match);
    }

    /**
     * For satisfying the matchRule condition, the request's path must begin with the specified prefixMatch. prefixMatch must begin with a /. The value must be from 1 to 1024 characters. Only one of prefixMatch, fullPathMatch or regexMatch must be specified.
     *
     * Generated from protobuf field <code>optional string prefix_match = 257898968;</code>
     * @param string $var
     * @return $this
     */
    public function setPrefixMatch($var)
    {
        GPBUtil::checkString($var, True);
        $this->prefix_match = $var;

        return $this;
    }

    /**
     * Specifies a list of query parameter match criteria, all of which must match corresponding query parameters in the request. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpQueryParameterMatch query_parameter_matches = 286231270;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueryParameterMatches()
    {
        return $this->query_parameter_matches;
    }

    /**
     * Specifies a list of query parameter match criteria, all of which must match corresponding query parameters in the request. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.HttpQueryParameterMatch query_parameter_matches = 286231270;</code>
     * @param array<\Google\Cloud\Compute\V1\HttpQueryParameterMatch>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueryParameterMatches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\HttpQueryParameterMatch::class);
        $this->query_parameter_matches = $arr;

        return $this;
    }

    /**
     * For satisfying the matchRule condition, the path of the request must satisfy the regular expression specified in regexMatch after removing any query parameters and anchor supplied with the original URL. For more information about regular expression syntax, see Syntax. Only one of prefixMatch, fullPathMatch or regexMatch must be specified. Regular expressions can only be used when the loadBalancingScheme is set to INTERNAL_SELF_MANAGED.
     *
     * Generated from protobuf field <code>optional string regex_match = 107387853;</code>
     * @return string
     */
    public function getRegexMatch()
    {
        return isset($this->regex_match) ? $this->regex_match : '';
    }

    public function hasRegexMatch()
    {
        return isset($this->regex_match);
    }

    public function clearRegexMatch()
    {
        unset($this->regex_match);
    }

    /**
     * For satisfying the matchRule condition, the path of the request must satisfy the regular expression specified in regexMatch after removing any query parameters and anchor supplied with the original URL. For more information about regular expression syntax, see Syntax. Only one of prefixMatch, fullPathMatch or regexMatch must be specified. Regular expressions can only be used when the loadBalancingScheme is set to INTERNAL_SELF_MANAGED.
     *
     * Generated from protobuf field <code>optional string regex_match = 107387853;</code>
     * @param string $var
     * @return $this
     */
    public function setRegexMatch($var)
    {
        GPBUtil::checkString($var, True);
        $this->regex_match = $var;

        return $this;
    }

}

