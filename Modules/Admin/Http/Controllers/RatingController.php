<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RatingController extends Controller
{

    public function index()
    {
        $ratings=Rating::orderByDesc('id')->paginate(10);
        return view('admin::rating.index',compact('ratings'));
    }
    public function delete($id){
        $rating=Rating::find($id);
        $product=Product::find($rating->pro_id);
        $product->pro_total_rate_number-=$rating->ra_number;
        $product->pro_total_rating-=1;
        $product->save();
        $rating->delete();
        return redirect()->back()->with('success','Xóa đánh giá thành công');
    }


}
