<?php
namespace Dompdf;
use Dompdf\Options;

require_once './vendor/autoload.php';


$data = json_decode('
    {
       "id":636,
       "status":"processing",
       "creation_date":"2024-01-30 10:01:26",
       "payment_date":"2024-01-30 10:01:30",
       "total":"80.00",
       "total_shipping":"10",
       "payment_method":"Tarjeta Visa cr\u00e9dito",
       "billing":{
          "full_name":"Prueba adri",
          "name":"Prueba",
          "lastname":"adri",
          "company":"adri",
          "address_1":"cadsfc",
          "address_2":"23433",
          "city":"esfsf",
          "state":"M",
          "postal_code":"45878",
          "country":"ES",
          "email":"adrianramos08@hotmail.com",
          "phone":"654026079",
          "formated_address":"Prueba adri<br\/>adri<br\/>cadsfc<br\/>23433<br\/>45878 esfsf<br\/>Madrid"
       },
       "shipping":{
          "full_name":"Prueba adri",
          "name":"Prueba",
          "last_name":"adri",
          "country":"ES",
          "address_1":"cadsfc",
          "address_2":"23433",
          "state":"M",
          "postal_code":"45878",
          "address_map_url":"https:\/\/maps.google.com\/maps?&q=cadsfc%2C%2023433%2C%20esfsf%2C%20M%2C%2045878%2C%20ES&z=16"
       },
       "products":[
          {
             "product_id":609,
             "variation_id":0,
             "name":"Prueba 1",
             "quantity":1,
             "subtotal":"20",
             "total":"20",
             "subtotal_tax":"0",
             "tax_class":"",
             "tax_status":"none",
             "metadata":[
                {
                   "key":"lumise_data",
                   "value":{
                      "id":"16",
                      "cart_id":"LRZDZB9H",
                      "qty":1,
                      "product_id":"16",
                      "product_cms":"609",
                      "product_name":"Prueba 1",
                      "price":{
                         "total":20,
                         "fixed":0,
                         "resource":0,
                         "template":0,
                         "base":10
                      },
                      "options":{
                         "quantity":"1"
                      },
                      "variation":null,
                      "attributes":{
                         "quantity":{
                            "id":"quantity",
                            "name":"Cantidad",
                            "value":"1",
                            "type":"quantity"
                         }
                      },
                      "printing":1,
                      "resource":[
                         {
                            "type":"cliparts",
                            "id":3
                         }
                      ],
                      "template":false,
                      "file":"2024\/01\/LRZDZB9H_0GteAgprc3"
                   },
                   "print_files":"[\"2024\\\/01\\\/1rAtjQJiW3-stage1.png\"]",
                   "screenshots":"[\"2024\\\/01\\\/L0wmTkDxEi.png\"]"
                }
             ]
          },
          {
             "product_id":609,
             "variation_id":0,
             "name":"Prueba 1",
             "quantity":2,
             "subtotal":"50",
             "total":"50",
             "subtotal_tax":"0",
             "tax_class":"",
             "tax_status":"none",
             "metadata":[
                {
                   "key":"lumise_data",
                   "value":{
                      "id":"16",
                      "cart_id":"LRZFC03T",
                      "qty":2,
                      "product_id":"16",
                      "product_cms":"609",
                      "product_name":"Prueba 1",
                      "price":{
                         "total":50,
                         "fixed":0,
                         "resource":5,
                         "template":0,
                         "base":10
                      },
                      "options":{
                         "quantity":"2"
                      },
                      "variation":null,
                      "attributes":{
                         "quantity":{
                            "id":"quantity",
                            "name":"Cantidad",
                            "value":"2",
                            "type":"quantity"
                         }
                      },
                      "printing":1,
                      "resource":[
                         {
                            "type":"cliparts",
                            "id":5
                         }
                      ],
                      "template":false,
                      "file":"2024\/01\/LRZFC03T_qS8HKKrFD6"
                   },
                   "print_files":"[\"2024\\\/01\\\/4vnTmVxj5u-stage1.png\"]",
                   "screenshots":"[\"2024\\\/01\\\/lw13YsUKA0.png\"]"
                }
             ]
          },
          {
             "product_id":609,
             "variation_id":0,
             "name":"Prueba 3",
             "quantity":2,
             "subtotal":"50",
             "total":"50",
             "subtotal_tax":"0",
             "tax_class":"",
             "tax_status":"none",
             "metadata":[
                {
                   "key":"lumise_data",
                   "value":{
                      "id":"16",
                      "cart_id":"LRZFC03T",
                      "qty":2,
                      "product_id":"16",
                      "product_cms":"609",
                      "product_name":"Prueba 1",
                      "price":{
                         "total":50,
                         "fixed":0,
                         "resource":5,
                         "template":0,
                         "base":10
                      },
                      "options":{
                         "quantity":"2"
                      },
                      "variation":null,
                      "attributes":{
                         "quantity":{
                            "id":"quantity",
                            "name":"Cantidad",
                            "value":"2",
                            "type":"quantity"
                         }
                      },
                      "printing":1,
                      "resource":[
                         {
                            "type":"cliparts",
                            "id":5
                         }
                      ],
                      "template":false,
                      "file":"2024\/01\/LRZFC03T_qS8HKKrFD6"
                   },
                   "print_files":"[\"2024\\\/01\\\/4vnTmVxj5u-stage1.png\"]",
                   "screenshots":"[\"2024\\\/01\\\/lw13YsUKA0.png\"]"
                }
             ]
          },
          {
             "product_id":609,
             "variation_id":0,
             "name":"Prueba 4",
             "quantity":2,
             "subtotal":"50",
             "total":"50",
             "subtotal_tax":"0",
             "tax_class":"",
             "tax_status":"none",
             "metadata":[
                {
                   "key":"lumise_data",
                   "value":{
                      "id":"16",
                      "cart_id":"LRZFC03T",
                      "qty":2,
                      "product_id":"16",
                      "product_cms":"609",
                      "product_name":"Prueba 1",
                      "price":{
                         "total":50,
                         "fixed":0,
                         "resource":5,
                         "template":0,
                         "base":10
                      },
                      "options":{
                         "quantity":"2"
                      },
                      "variation":null,
                      "attributes":{
                         "quantity":{
                            "id":"quantity",
                            "name":"Cantidad",
                            "value":"2",
                            "type":"quantity"
                         }
                      },
                      "printing":1,
                      "resource":[
                         {
                            "type":"cliparts",
                            "id":5
                         }
                      ],
                      "template":false,
                      "file":"2024\/01\/LRZFC03T_qS8HKKrFD6"
                   },
                   "print_files":"[\"2024\\\/01\\\/4vnTmVxj5u-stage1.png\"]",
                   "screenshots":"[\"2024\\\/01\\\/lw13YsUKA0.png\"]"
                }
             ]
          },
          {
             "product_id":609,
             "variation_id":0,
             "name":"Prueba 5",
             "quantity":2,
             "subtotal":"50",
             "total":"50",
             "subtotal_tax":"0",
             "tax_class":"",
             "tax_status":"none",
             "metadata":[
                {
                   "key":"lumise_data",
                   "value":{
                      "id":"16",
                      "cart_id":"LRZFC03T",
                      "qty":2,
                      "product_id":"16",
                      "product_cms":"609",
                      "product_name":"Prueba 1",
                      "price":{
                         "total":50,
                         "fixed":0,
                         "resource":5,
                         "template":0,
                         "base":10
                      },
                      "options":{
                         "quantity":"2"
                      },
                      "variation":null,
                      "attributes":{
                         "quantity":{
                            "id":"quantity",
                            "name":"Cantidad",
                            "value":"2",
                            "type":"quantity"
                         }
                      },
                      "printing":1,
                      "resource":[
                         {
                            "type":"cliparts",
                            "id":5
                         }
                      ],
                      "template":false,
                      "file":"2024\/01\/LRZFC03T_qS8HKKrFD6"
                   },
                   "print_files":"[\"2024\\\/01\\\/4vnTmVxj5u-stage1.png\"]",
                   "screenshots":"[\"2024\\\/01\\\/lw13YsUKA0.png\"]"
                }
             ]
          },
          {
             "product_id":609,
             "variation_id":0,
             "name":"Prueba 6",
             "quantity":2,
             "subtotal":"50",
             "total":"50",
             "subtotal_tax":"0",
             "tax_class":"",
             "tax_status":"none",
             "metadata":[
                {
                   "key":"lumise_data",
                   "value":{
                      "id":"16",
                      "cart_id":"LRZFC03T",
                      "qty":2,
                      "product_id":"16",
                      "product_cms":"609",
                      "product_name":"Prueba 1",
                      "price":{
                         "total":50,
                         "fixed":0,
                         "resource":5,
                         "template":0,
                         "base":10
                      },
                      "options":{
                         "quantity":"2"
                      },
                      "variation":null,
                      "attributes":{
                         "quantity":{
                            "id":"quantity",
                            "name":"Cantidad",
                            "value":"2",
                            "type":"quantity"
                         }
                      },
                      "printing":1,
                      "resource":[
                         {
                            "type":"cliparts",
                            "id":5
                         }
                      ],
                      "template":false,
                      "file":"2024\/01\/LRZFC03T_qS8HKKrFD6"
                   },
                   "print_files":"[\"2024\\\/01\\\/4vnTmVxj5u-stage1.png\"]",
                   "screenshots":"[\"2024\\\/01\\\/lw13YsUKA0.png\"]"
                }
             ]
          }
       ]
    }
');

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
  <body>
<table style="width:100%;">
  <tr>
    <th align="start"><h5>Información de la Orden</h5></th>
    <th align="start"><h5>Dirección de facturación</h5></th>
    <th align="start"><h5>Dirección de envío</h5></th>
  </tr>
  <tr style="vertical-align: top;">
    <td align="start">
        Número de la orden: '.$data->id.'
      <br>
        Valor Total: € '.$data->total.'
      <br>
        Fecha del Pedido: '.$data->creation_date.'
      <br>
        Fecha del pago: '.$data->payment_date.'
      <br>
        Forma de envío: € '.$data->total_shipping.'
    </td>
    <td align="start">
      <p>'.$data->billing->formated_address.'</p>
      '.$data->billing->phone.'<br>
      '.$data->billing->email.'
    </td>
    <td align="start">
      '.$data->shipping->full_name.'<br>
      '.$data->shipping->address_1.', '.$data->shipping->address_2.'<br>
      <a href="'.$data->shipping->address_map_url.'" target="_blank">Ver en el mapa</a>
    </td>
  </tr>
</table>

<div class="products">
';

$products = array_chunk($data->products, 3);

foreach ($products as $prod) {
  $html .= '
  <table style="width:100%"><tr>';

  foreach ($prod as $p) {
    $imgs = json_decode($p->metadata[0]->screenshots);
    $imgs2 = json_decode($p->metadata[0]->print_files);

    $html .= '
      <td>
        <div class="product">
            <h2>'.$p->name.'</h2>
            <div class="product-details">
                Cantidad: '.$p->quantity.'<br>
                Subtotal: '.$p->subtotal.'<br>
                Total: '.$p->total.'
            </div>
            <div class="product-images">
    ';
    for ($i=0; $i < count($imgs); $i++) { 
      $html .= '
              <div class="mt-3">
                <img src="https://globalprinted.com/wp-content/uploads/lumise_data/orders/'.$imgs[$i].'" alt="Imagen del producto">
                <p style="text-align: center;"><a href="https://globalprinted.com/wp-content/uploads/lumise_data/orders/'.$imgs2[$i].'" target="_blank">Ver diseño</a></p>
              </div>
      ';
    }
    $html .= '
          </div>
        </div>
      <td>';
  }

  $html .= '</tr>
  </table>';
}

$html .='
</div>

<style>
.header {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    border: 1px solid;
    padding: 0 10px;
  }

  .products {
    margin-top: 10px;
  }

  .product {
  }

  .product-images {
    display:flex;
    gap: 16px;
  }

  .product-images img {
    width: 150px;
  }
</style>
  </body>
</html>
';

echo $html;


/*$options = new Options();
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);

$dompdf->render();
$dompdf->stream();*/
?>
