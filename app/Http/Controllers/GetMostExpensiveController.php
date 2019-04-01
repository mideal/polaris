<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Category;
use App\Product;
use App\Convert\Validate;
use App\Convert\ArrayToCsv;
use App\Convert\ArrayToJson;
use App\Convert\ArrayToXml;

class GetMostExpensiveController extends Controller
{
    /**
     * Display most expensive products.
     *
     */
    public function index()
    {
        $limit=5;
        $formatAvalible = ['json','xml','csv'];
        $format = 'json';
        $category_id = '';



        // Validate limit
        if (isset($_GET['limit'])) {
            if (!is_array($_GET['limit'])&&filter_input(INPUT_GET, "limit", FILTER_VALIDATE_INT)&&$_GET['limit']>0) {
                $limit=$_GET['limit'];
            }
        }
        
        // Validate format
        if (isset($_GET['format'])) {
            if (!is_array($_GET['format'])&&in_array($_GET['format'], $formatAvalible)) {
                $format = $_GET['format'];
            }
        }

        

        // Validate category_id
        if (!isset($_GET['category_id'])) {
            die("category_id обязательный параметр");
        }
        
        if (is_array($_GET['category_id'])) {
            $category_id_arr = $_GET['category_id'];
            foreach ($category_id_arr as $key => $category_id_val) {
                if (!filter_var($category_id_val, FILTER_VALIDATE_INT)||filter_var($category_id_val, FILTER_VALIDATE_INT)&&$category_id_val< 1) {
                    unset($category_id_arr[$key]);
                }
                if (count($category_id_arr)< 1) {
                    die('category_id имеет не верный формат');
                }
                $category_id = $category_id_arr;
            }
        } else {
            if (!filter_input(INPUT_GET, "category_id", FILTER_VALIDATE_INT)||filter_input(INPUT_GET, "category_id", FILTER_VALIDATE_INT)&&$_GET['category_id']< 1) {
                die('category_id имеет не верный формат');
            }
            $category_id = $_GET['category_id'];
        }

        if (is_array($category_id)) {
            $category_id = join("','", $category_id);
        }
 

        // Get value from DataBase
        
        $products = DB::select("
        SELECT categoryid, categorytitle, id, title, price  FROM (
            SELECT
              ROW_NUMBER() OVER (PARTITION BY category.id ORDER BY product.price DESC) AS row_num, 
              category.id AS categoryid, category.title AS categorytitle,product.id,product.title,product.price
            FROM product JOIN category ON product.category_id=category.id
            WHERE category.id IN ('$category_id')
        ) AS foo WHERE row_num <= ?;
        ", [$limit]);
     
        if (isset($products)&&is_array($products)&&count($products)<1||!is_array($products)) {
            die('нет ни одной категории с такими id');
        }

        // Array preparation
        $result = [];
        $keyCategory = '-1';
        $categoryid = "";

        foreach ($products as $key => $product) {
            if ($categoryid != $product->categoryid) {
                $categoryid = $product->categoryid;
                $keyCategory++;
                $result[$keyCategory] = ['category'=>['id'=>$product->categoryid, 'title' => $product->categorytitle]];
            }
            $result[$keyCategory]['products'][] = ['id'=>$product->id, 'title' => $product->title, 'price' => $product->price];
        }

        // Convert array to CSV, XML, CSV
        $convert_class='App\Convert\ArrayTo'.ucfirst($format);
        $most_expesive = $convert_class::convert($result);


        return response()->view('mostexpesive', ['most_expesive' => $most_expesive])->header('Content-Type', 'text/'.$format);
    }
}
