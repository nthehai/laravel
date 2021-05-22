<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\DonVi;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = DB::table('donvi_daotao')->select('id','ten_dv','email','password','created_at','updated_at');
        $news = $news->get();

        $pageName = 'Tên Trang - Danh_sach';

        return view('admin.list_users', compact('news', 'pageName'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new DonVi;
        $news->id = $request->id;
        $news->ten_dv = $request->ten_dv;
        $news->email = $request->email;
        $news->password = $request->password;
        $news->phone_number = $request->phone_number;
        $news->dia_chi = $request->dia_chi;
        $news->thong_tin = $request->thong_tin;
        $news->created_at = $request->created_at;
        $news->save();
        Session::put('message','Thêm trường thành công !');
        return redirect()->action('Admin\AdminNewsController@show');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $news = DB::table('donvi_daotao')->select('*');
        $news = $news->get();

        $pageName = 'Tên Trang - Danh_sach';

        return view('admin.danh_sach', compact('news', 'pageName'));
        
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $news = DonVi::findOrFail($id);
        $pageName = 'News - Update';
        return view('/admin/edit_school', compact('news', 'pageName'));
    }
    public function data($id){
        $news = DonVi::findOrFail($id);
        $news = DB::table('donvi_daotao')->where('id',$id)->select('*');
        $news = $news->get();

        $pageName = 'Chi tiết form đánh giá';
        return view('user.data',compact('news', 'pageName'));
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();
        $data['ten_dv'] = $request->ten_dv;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['phone_number'] = $request->phone_number;
        $data['dia_chi'] = $request->dia_chi;
        $data['thong_tin'] = $request->thong_tin;
        
        $data['created_at'] = $request->created_at;
        DB::table('donvi_daotao')->where('id',$id)->update($data);
        Session::put('message','Cập nhật trường thành công');
        return redirect()->action('Admin\AdminNewsController@show');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('donvi_daotao')->where('id',$id)->delete();
       Session::put('message','Bạn đã xóa trường thành công !');
        return Redirect::to('danh-sach');
    }
}
