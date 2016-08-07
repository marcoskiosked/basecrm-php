<?php
//  WARNING: This code is auto-generated from the BaseCRM API Discovery JSON Schema
namespace BaseCRM;

/**
 * BaseCRM\ProductsService
 *
 * Class used to make actions related to Product resource.
 * 
 * @package BaseCRM
 */
class ProductsService
{
  protected $httpClient;

  /**
   * Instantiate a new ProductsService instance.
   *
   * @param HttpClient $httpClient Http client.
   */
  public function __construct(HttpClient $httpClient)
  {
    $this->httpClient = $httpClient;
  }

  /**
   * Retrieve all products
   *
   * get '/products'
   * 
   * Returns all products, according to the parameters provided
   *
   * @param array $options Search options
   * 
   * @return array The list of Products for the first page, unless otherwise specified.
   */
  public function all($options = [])
  {
    list($code, $products) = $this->httpClient->get("/products", $options);
    return $products;  
  }

  /**
   * Retrieve a single product
   *
   * get '/products/{id}'
   * 
   * Returns a single product according to the unique product ID provided
   * If the specified product does not exist, this query returns an error
   *
   * @param integer $id Unique identifier of a Product
   * 
   * @return array Searched Product.
   */
  public function get($id)
  {
    list($code, $product) = $this->httpClient->get("/products/{$id}");
    return $product;
  }

  /**
   * Retrieve an authenticating product
   *
   * get '/products/self'
   * 
   * Returns a single authenticating product, according to the authentication credentials provided
   *
   * 
   * @return array Resource object.
   */
  public function self()
  {
    list($code, $resource) = $this->httpClient->get("/products/self");
    return $resource;
  }
}
