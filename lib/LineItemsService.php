<?php
//  WARNING: This code is auto-generated from the BaseCRM API Discovery JSON Schema
namespace BaseCRM;

/**
 * BaseCRM\LineItemsService
 *
 * Class used to make actions related to LineItem resource.
 * 
 * @package BaseCRM
 */
class LineItemsService
{
  protected $httpClient;

  /**
   * Instantiate a new LineItemsService instance.
   *
   * @param BaseCRM\HttpClient $httpClient Http client.
   */
  public function __construct(HttpClient $httpClient)
  {
    $this->httpClient = $httpClient;
  }

  /**
   * Retrieve all lineItems
   *
   * get '/lineItems'
   * 
   * Returns all lineItems, according to the parameters provided
   *
   * @param array $options Search options
   * 
   * @return array The list of LineItems for the first page, unless otherwise specified.
   */
  public function all($options = [])
  {
    list($code, $lineItems) = $this->httpClient->get("/line_items", $options);
    return $lineItems;  
  }

  /**
   * Retrieve a single lineItem
   *
   * get '/lineItems/{id}'
   * 
   * Returns a single lineItem according to the unique lineItem ID provided
   * If the specified lineItem does not exist, this query returns an error
   *
   * @param integer $id Unique identifier of a LineItem
   * 
   * @return array Searched LineItem.
   */
  public function get($id)
  {
    list($code, $lineItem) = $this->httpClient->get("/line_items/{$id}");
    return $lineItem;
  }

  /**
   * Retrieve an authenticating lineItem
   *
   * get '/lineItems/self'
   * 
   * Returns a single authenticating lineItem, according to the authentication credentials provided
   *
   * 
   * @return array Resource object.
   */
  public function self()
  {
    list($code, $resource) = $this->httpClient->get("/line_items/self");
    return $resource;
  }
}
