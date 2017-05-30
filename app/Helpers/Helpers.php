<?php
namespace App\Helpers;

/**
*
*/
class Helpers
{
    private static $categories = array();

    public static function importFile($file, $path)
    {
        if (isset($file)) {
            $nameFile = $file->hashName();
            $file->move($path, $nameFile);
            return $nameFile;
        }
    }

    public static function deleteFile($name, $path)
    {
        if (is_file($path . $name)) {
            unlink($path . $name);
        }
    }

    public static function categoriesToArray($category, $parent_id = null, $char = '')
    {
        Helpers::categories($category, $parent_id, $char);
        return  Helpers::$categories;
    }
    public static function categories($category, $parent_id = null, $char = '')
    {
        foreach ($category as $key => $value) {
            if ($value['parent_id'] == $parent_id) {
                $value['name'] = $char . $value['name'];
                Helpers::$categories[] = $value;
                unset($category[$key]);
                Helpers::categories($category, $value['id'], $char . '|----');
            }
        }
    }

    public static function getProfileFull($product)
    {
        $profileProduct = json_decode($product['profile_full'], true);
        unset($profileProduct['technicals']);
        unset($profileProduct['_method']);
        unset($profileProduct['quantity']);
        unset($profileProduct['status']);

        return $profileProduct;
    }

    public static function totalCart($products, $cart)
    {
        $total = 0;
        foreach ($products as $product) {
            if ($product['sale_percent']) {
                $total += $product['price']*(100 - $product['sale_percent'])*$cart[$product['id']]/100;
            } else {
                $total += $product['price']*$cart[$product['id']];
            }
        }
        return $total;
    }
}
