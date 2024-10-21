<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(Product $product, Category $category){
		$this->product = $product;
        $this->category = $category;
	}

    public function index(){
        $datas = Category::where('parentId',0)->get();
        $living_room = $this->category->where('parentId','=',72)->get();
        $kitchen_room = $this->category->where('parentId','=',73)->get();
        $living_room_hot = $this->product->where([
                            ['homeflag', '=', "checked"],
                            ['categoryId', '=', 72],
                            ['hotflag', '=', "checked"]])->get();
        $living_room_new = $this->product->where([
                            ['homeflag', '=', "checked"],                
                            ['categoryId', '=', 72]])->orderBy('created_at', 'desc')->get();
        $living_room_sale = $this->product->where([
                            ['homeflag', '=', "checked"],
                            ['categoryId', '=', 72],
                            ['isdiscount', '=', "checked"]])->get();
        $kitchen_room_hot = $this->product->where([
                            ['homeflag', '=', "checked"],   
                            ['categoryId', '=', 73],
                            ['hotflag', '=', "checked"]])->get();
        $kitchen_room_new = $this->product->where([
                            ['homeflag', '=', "checked"],
                            ['categoryId', '=', 73]])->orderBy('created_at', 'desc')->get();
        $kitchen_room_sale = $this->product->where([
                            ['homeflag', '=', "checked"],
                            ['categoryId', '=', 73],
                            ['isdiscount', '=', "checked"]])->get();
        $list_sale = $this->product->where([
                            ['homeflag','=',"checked"],
                            ['isdiscount','=',"checked"]
                            ])->get();
        return view('home',['datas'=>$datas,
                            'living_room_hot'=>$living_room_hot,
                            'living_room_new'=>$living_room_new,
                            'living_room_sale'=>$living_room_sale,
                            'kitchen_room_sale'=>$kitchen_room_sale,
                            'kitchen_room_new'=>$kitchen_room_new,
                            'kitchen_room_hot'=>$kitchen_room_hot,
                            'living_room'=>$living_room,
                            'kitchen_room'=>$kitchen_room,
                            'list_sale'=>$list_sale]);
    }
    public function detail($id){
        $item = $this->product->join('product_owners', 'products.ownerId', '=', 'product_owners.id')
                              ->join('categories', 'products.categoryId', '=', 'categories.id')
                              ->select('products.*', 'categories.category_name', 'product_owners.owner_name')
                              ->find($id);
        $datas = $this->product->where([
                ['categoryId', '=', $item->categoryId],
                ['id', '<>', $item->id]])->take(3)->get();
        $categories = Category::where('parentId',0)->get();
        return view('client.detail',['item'=>$item,'datas'=>$datas,'categories'=>$categories]);
    }
    public function list($id){
        if($id == 0){
            $datas = $this->product->paginate(12);
            $categories = Category::where('parentId',0)->get();
        }
        else{
            $datas = $this->product->where('categoryId','=',$id)->paginate(12);
            $categories = Category::where('parentId',0)->get();
        }
        return view('client.list',['categories'=>$categories,'datas'=>$datas]);
    }
    public function search(Request $request){
        $datas = Product::where('name','like','%'.$request->keyword.'%')->paginate(12);
        $categories = Category::where('parentId',0)->get();
        return view('client.list',['categories'=>$categories,'datas'=>$datas]);
    }
}
