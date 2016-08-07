<?php
//  WARNING: This code is auto-generated from the BaseCRM API Discovery JSON Schema
namespace BaseCRM;

/**
 * BaseCRM\OrdersService
 *
 * Class used to make actions related to Order resource.
 * 
 * @package BaseCRM
 */
class OrdersService
{
  protected $httpClient;

  /**
   * Instantiate a new OrdersService instance.
   *
   * @param HttpClient $httpClient Http client.
   */
  public function __construct(HttpClient $httpClient)
  {
    $this->httpClient = $httpClient;
  }

  /**
   * Retrieve all orders
   *
   * get '/orders'
   * 
   * Returns all orders, according to the parameters provided
   *
   * @param array $options Search options
   * 
   * @return array The list of Orders for the first page, unless otherwise specified.
   */
  public function all($options = [])
  {
    list($code, $orders) = $this->httpClient->get("/orders", $options);
    return $orders;  
  }

  /**
   * Retrieve a single order
   *
   * get '/orders/{id}'
   * 
   * Returns a single order according to the unique order ID provided
   * If the specified order does not exist, this query returns an error
   *
   * @param integer $id Unique identifier of a Order
   * 
   * @return array Searched Order.
   */
  public function get($id)
  {
    list($code, $order) = $this->httpClient->get("/orders/{$id}");
    return $order;
  }

  /**
   * Retrieve an authenticating order
   *
   * get '/orders/self'
   * 
   * Returns a single authenticating order, according to the authentication credentials provided
   *
   * 
   * @return array Resource object.
   */
  public function self()
  {
    list($code, $resource) = $this->httpClient->get("/orders/self");
    return $resource;
  }
}
