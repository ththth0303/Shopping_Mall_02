<?php

namespace App\Http\Controllers\Sites;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Wishlist;
use Auth;

class WishListController extends Controller
{
    public function __construct(User $user, Product $product, Wishlist $wishlist)
    {
        $this->user = $user;
        $this->product = $product;
        $this->wishlist = $wishlist;
    }
    public function index()
    {
        $wishlist = $this->wishlist
                        ->where('user_id', Auth::user()->id)
                        ->with(['products.productImages'
                                => function ($query) {
                                    $query->where('is_main', 1);
                                }])->get();

        return view('sites.user.wishlist')->with('wishlist', $wishlist);
    }

    public function addWishList(Request $request)
    {
        if (Auth::user()) {
            if (!$this->wishlist->where('product_id', $request->product)->where('user_id', Auth::user()->id)->first()) {
                $this->wishlist->create(['product_id' => $request->product, 'user_id' => Auth::user()->id]);
            }
            $count = $this->wishlist->where('user_id', Auth::user()->id)->count();

            return [$count, trans('sites.delete_wishlist')];
        } else {
            return [null, trans('sites.need_login')];
        }
    }

    public function deleteWishList(Request $request)
    {
        if (Auth::user()) {
            if ($this->wishlist->where('product_id', $request->product)->where('user_id', Auth::user()->id)->first()) {
                $this->wishlist->where('product_id', $request->product)->where('user_id', Auth::user()->id)->delete();
            }
            if ($request->page) {
                $wishlist = $this->wishlist
                        ->where('user_id', Auth::user()->id)
                        ->with(['products.productImages'
                                => function ($query) {
                                    $query->where('is_main', 1);
                                }])->get();

                return view('sites._components.wishlist')->with('wishlist', $wishlist);
            }
            $count = $this->wishlist->where('user_id', Auth::user()->id)->count();

            return [$count, trans('sites.add_to_wishlist')];
        } else {
            return [null, trans('sites.need_login')];
        }
    }
}
