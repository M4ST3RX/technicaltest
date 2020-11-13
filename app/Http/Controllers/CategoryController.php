<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $cat = [];

    public function index()
    {
        $categories = Category::all();

        return view("welcome")->with(["categories" => $categories]);
    }

    public function category($id) {
        $category = Category::find($id);
        $breadcrumb = [$category->name];
        while ($category->parent) {
            $parent = $category->parent;
            $breadcrumb[] = "<a href='/category/".$parent->id."'>" . $parent->name . "</a>";
            $category = Category::find($parent->id);
        }

        $breadcrumb = array_reverse($breadcrumb);
        return view("category.index")->with(["breadcrumb" => $breadcrumb]);
    }
}
