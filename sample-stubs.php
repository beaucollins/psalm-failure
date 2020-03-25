<?php
/**
 * Core class used to implement a REST response object.
 *
 * @since 4.4.0
 *
 * @see WP_HTTP_Response
 */
class WP_REST_Response extends \WP_HTTP_Response
{
    /**
     * Links related to the response.
     *
     * @since 4.4.0
     * @var array
     */
    protected $links = array();
    /**
     * The route that was to create the response.
     *
     * @since 4.4.0
     * @var string
     */
    protected $matched_route = '';
    /**
     * The handler that was used to create the response.
     *
     * @since 4.4.0
     * @var null|array
     */
    protected $matched_handler = \null;
    /**
     * Adds a link to the response.
     *
     * @internal The $rel parameter is first, as this looks nicer when sending multiple.
     *
     * @since 4.4.0
     *
     * @link https://tools.ietf.org/html/rfc5988
     * @link https://www.iana.org/assignments/link-relations/link-relations.xml
     *
     * @param string $rel        Link relation. Either an IANA registered type,
     *                           or an absolute URL.
     * @param string $href       Target URI for the link.
     * @param array  $attributes Optional. Link parameters to send along with the URL. Default empty array.
     */
    public function add_link($rel, $href, $attributes = array())
    {
    }
    /**
     * Removes a link from the response.
     *
     * @since 4.4.0
     *
     * @param  string $rel  Link relation. Either an IANA registered type, or an absolute URL.
     * @param  string $href Optional. Only remove links for the relation matching the given href.
     *                      Default null.
     */
    public function remove_link($rel, $href = \null)
    {
    }
    /**
     * Adds multiple links to the response.
     *
     * Link data should be an associative array with link relation as the key.
     * The value can either be an associative array of link attributes
     * (including `href` with the URL for the response), or a list of these
     * associative arrays.
     *
     * @since 4.4.0
     *
     * @param array $links Map of link relation to list of links.
     */
    public function add_links($links)
    {
    }
    /**
     * Retrieves links for the response.
     *
     * @since 4.4.0
     *
     * @return array List of links.
     */
    public function get_links()
    {
    }
    /**
     * Sets a single link header.
     *
     * @internal The $rel parameter is first, as this looks nicer when sending multiple.
     *
     * @since 4.4.0
     *
     * @link https://tools.ietf.org/html/rfc5988
     * @link https://www.iana.org/assignments/link-relations/link-relations.xml
     *
     * @param string $rel   Link relation. Either an IANA registered type, or an absolute URL.
     * @param string $link  Target IRI for the link.
     * @param array  $other Optional. Other parameters to send, as an assocative array.
     *                      Default empty array.
     */
    public function link_header($rel, $link, $other = array())
    {
    }
    /**
     * Retrieves the route that was used.
     *
     * @since 4.4.0
     *
     * @return string The matched route.
     */
    public function get_matched_route()
    {
    }
    /**
     * Sets the route (regex for path) that caused the response.
     *
     * @since 4.4.0
     *
     * @param string $route Route name.
     */
    public function set_matched_route($route)
    {
    }
    /**
     * Retrieves the handler that was used to generate the response.
     *
     * @since 4.4.0
     *
     * @return null|array The handler that was used to create the response.
     */
    public function get_matched_handler()
    {
    }
    /**
     * Sets the handler that was responsible for generating the response.
     *
     * @since 4.4.0
     *
     * @param array $handler The matched handler.
     */
    public function set_matched_handler($handler)
    {
    }
    /**
     * Checks if the response is an error, i.e. >= 400 response code.
     *
     * @since 4.4.0
     *
     * @return bool Whether the response is an error.
     */
    public function is_error()
    {
    }
    /**
     * Retrieves a WP_Error object from the response.
     *
     * @since 4.4.0
     *
     * @return WP_Error|null WP_Error or null on not an errored response.
     */
    public function as_error()
    {
    }
    /**
     * Retrieves the CURIEs (compact URIs) used for relations.
     *
     * @since 4.5.0
     *
     * @return array Compact URIs.
     */
    public function get_curies()
    {
    }
}


/**
 * Core class used to prepare HTTP responses.
 *
 * @since 4.4.0
 */
class WP_HTTP_Response
{
    /**
     * Response data.
     *
     * @since 4.4.0
     * @var mixed
     */
    public $data;
    /**
     * Response headers.
     *
     * @since 4.4.0
     * @var array
     */
    public $headers;
    /**
     * Response status.
     *
     * @since 4.4.0
     * @var int
     */
    public $status;
    /**
     * Constructor.
     *
     * @since 4.4.0
     *
     * @param mixed $data    Response data. Default null.
     * @param int   $status  Optional. HTTP status code. Default 200.
     * @param array $headers Optional. HTTP header map. Default empty array.
     */
    public function __construct($data = \null, $status = 200, $headers = array())
    {
    }
    /**
     * Retrieves headers associated with the response.
     *
     * @since 4.4.0
     *
     * @return array Map of header name to header value.
     */
    public function get_headers()
    {
    }
    /**
     * Sets all header values.
     *
     * @since 4.4.0
     *
     * @param array $headers Map of header name to header value.
     */
    public function set_headers($headers)
    {
    }
    /**
     * Sets a single HTTP header.
     *
     * @since 4.4.0
     *
     * @param string $key     Header name.
     * @param string $value   Header value.
     * @param bool   $replace Optional. Whether to replace an existing header of the same name.
     *                        Default true.
     */
    public function header($key, $value, $replace = \true)
    {
    }
    /**
     * Retrieves the HTTP return code for the response.
     *
     * @since 4.4.0
     *
     * @return int The 3-digit HTTP status code.
     */
    public function get_status()
    {
    }
    /**
     * Sets the 3-digit HTTP status code.
     *
     * @since 4.4.0
     *
     * @param int $code HTTP status.
     */
    public function set_status($code)
    {
    }
    /**
     * Retrieves the response data.
     *
     * @since 4.4.0
     *
     * @return mixed Response data.
     */
    public function get_data()
    {
    }
    /**
     * Sets the response data.
     *
     * @since 4.4.0
     *
     * @param mixed $data Response data.
     */
    public function set_data($data)
    {
    }
    /**
     * Retrieves the response data for JSON serialization.
     *
     * It is expected that in most implementations, this will return the same as get_data(),
     * however this may be different if you want to do custom JSON data handling.
     *
     * @since 4.4.0
     *
     * @return mixed Any JSON-serializable value.
     */
    public function jsonSerialize()
    {
    }
}