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
  // @var array Allowed attribute names.
  protected static $keysToPersist = ['order_id', 'role'];

  protected $httpClient;

  /**
   * Instantiate a new LineItemsService instance.
   *
   * @param HttpClient $httpClient Http client.
   */
  public function __construct(HttpClient $httpClient)
  {
    $this->httpClient = $httpClient;
  }

  /**
   * Retrieve order's line items
   *
   * get '/orders/{order_id}/line_items'
   *
   * Returns all order line items
   *
   * @param integer $order_id Unique identifier of a Deal
   * @param array $options Search options
   *
   * @return array The list of LineItems for the first page, unless otherwise specified.
   */
  public function all($order_id, $options = [])
  {
    list($code, $line_items) = $this->httpClient->get("/orders/{$order_id}/line_items", $options);
    return $line_items;
  }

  /**
   * Create an line item
   *
   * post '/orders/{order_id}/line_items'
   *
   * Creates a order's line item and its role
   * If the specified order or line_item does not exist, the request will return an error
   *
   * @param integer $order_id Unique identifier of a Deal
   * @param array $lineItem This array's attributes describe the object to be created.
   *
   * @return array The resulting object representing created resource.
   */
  public function create($order_id, array $lineItem)
  {
    $attributes = array_intersect_key($lineItem, array_flip(self::$keysToPersist));

    list($code, $createdLineItem) = $this->httpClient->post("/orders/{$order_id}/line_items", $attributes);
    return $createdLineItem;
  }

  /**
   * Remove an line item
   *
   * delete '/orders/{order_id}/line_items/{line_item_id}'
   *
   * Remove a order's line item
   * If a order with the supplied unique identifier does not exist, it returns an error
   * This operation cannot be undone
   *
   * @param integer $order_id Unique identifier of a Deal
   * @param integer $line_item_id Unique identifier of a Contact
   *
   * @return boolean Status of the operation.
   */
  public function destroy($order_id, $line_item_id)
  {
    list($code, $payload) = $this->httpClient->delete("/orders/{$order_id}/line_items/{$line_item_id}");
    return $code == 204;
  }
}
