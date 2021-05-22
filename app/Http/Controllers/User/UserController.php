<?php

namespace App\Http\Controllers\User;
use App\Evaluation;
use App\News;
use Session;
use DB;
use App\DonVi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
session_start();
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('/user/home_user');
    
    }
    public function form(){
        return view('/user/form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Session::get('id');
        $danhgia = DB::table('tieu_chi')->where('id',$id)->first();
        if(!$danhgia){
             //user is not found 
            $data = array();
        $data['id'] = $request->id;
        $data['tc_1_1'] = $request->tc_1_1;
        $data['tc_1_2'] = $request->tc_1_2;
        $data['tc_1_3'] = $request->tc_1_3;
        $data['tc_2_1'] = $request->tc_2_1;
        $data['tc_2_2'] = $request->tc_2_2;
        $data['tc_2_3'] = $request->tc_2_3;
        $data['tc_2_4'] = $request->tc_2_4;
        $data['tc_2_5'] = $request->tc_2_5;
        $data['tc_2_6'] = $request->tc_2_6;
        $data['tc_2_7'] = $request->tc_2_7;
        $data['tc_2_8'] = $request->tc_2_8;
        $data['tc_2_9'] = $request->tc_2_9;
        $data['tc_2_10'] = $request->tc_2_10;
        $data['tc_2_11'] = $request->tc_2_11;
        $data['tc_3_1'] = $request->tc_3_1;
        $data['tc_3_2'] = $request->tc_3_2;
        $data['tc_3_3'] = $request->tc_3_3;
        $data['tc_3_4'] = $request->tc_3_4;
        $data['tc_3_5'] = $request->tc_3_5;
        $data['tc_4_1'] = $request->tc_4_1;
        $data['tc_4_2'] = $request->tc_4_2;
        $data['tc_4_3'] = $request->tc_4_3;
        $data['tc_4_4'] = $request->tc_4_4;
        $data['tc_4_5'] = $request->tc_4_5;
        $data['tc_4_6'] = $request->tc_4_6;
        $data['tc_5_1'] = $request->tc_5_1;
        $data['tc_5_2'] = $request->tc_5_2;
        $data['tc_5_3'] = $request->tc_5_3;
        $data['tc_5_4'] = $request->tc_5_4;
        $data['tc_5_5'] = $request->tc_5_5;
        $data['tc_5_6'] = $request->tc_5_6;
        $data['tc_5_7'] = $request->tc_5_7;
        $data['tc_5_8'] = $request->tc_5_8;
        $data['tc_5_9'] = $request->tc_5_9;
        $data['tc_5_10'] = $request->tc_5_10;
        $data['tc_6_1'] = $request->tc_6_1;
        $data['tc_6_2'] = $request->tc_6_2;
        $data['tc_6_3'] = $request->tc_6_3;
        $data['tc_6_4'] = $request->tc_6_4;
        $data['tc_6_5'] = $request->tc_6_5;
        $data['tc_6_6'] = $request->tc_6_6;
        $data['tc_6_7'] = $request->tc_6_7;
        $data['tc_6_8'] = $request->tc_6_8;
        $data['tc_6_9'] = $request->tc_6_9;
        $data['tc_6_10'] = $request->tc_6_10;
        $data['tc_7_1'] = $request->tc_7_1;
        $data['tc_7_2'] = $request->tc_7_2;
        $data['tc_7_3'] = $request->tc_7_3;
        $data['tc_7_4'] = $request->tc_7_4;
        $data['tc_7_5'] = $request->tc_7_5;
        $data['Standard_1'] = $request->Standard_1;
        $data['Standard_2'] = $request->Standard_2;
        $data['Standard_3'] = $request->Standard_3;
        $data['Standard_4'] = $request->Standard_4;
        $data['Standard_5'] = $request->Standard_5;
        $data['Standard_6'] = $request->Standard_6;
        $data['Standard_7'] = $request->Standard_7;
        $data['Tong_Diem'] = $request->Tong_Diem;
        $data['gan_sao'] = $request->gan_sao;
        DB::table('tieu_chi')->insert($data);
        Session::put('message','Thêm dữ liệu thành công !');
        return Redirect::to('chi-tiet');
        }
        if($danhgia){
             // user found 
            Session::put('message','Bạn đã điền form này rồi !');
            return Redirect::to('thong-bao');

        }
    }
    public function thong_bao(){
        return view('user.thongbao');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $news = DB::table('tieu_chi')->select('*');
        $news = $news->get();

        $pageName = 'Tên Trang - Evaluation';

        return view('admin.list_form', compact('news', 'pageName'));
    }
    public function thong_ke()
    {
        $news = DB::table('tieu_chi')
            ->join('donvi_daotao', 'tieu_chi.id', '=', 'donvi_daotao.id')
            ->select('tieu_chi.id','donvi_daotao.ten_dv','tieu_chi.Standard_1','tieu_chi.Standard_2','tieu_chi.Standard_3','tieu_chi.Standard_4','tieu_chi.Standard_5','tieu_chi.Standard_6','tieu_chi.Standard_7','tieu_chi.Tong_Diem','tieu_chi.gan_sao');
        $news = $news->orderBy('Tong_Diem', 'desc');
        $news = $news->get();

        $pageName = 'Tên Trang - Evaluation';

        return view('admin.sap_xep', compact('news', 'pageName'));
    }
    public function tc_1()
    {
        $news = DB::table('tieu_chi')
            ->join('donvi_daotao', 'tieu_chi.id', '=', 'donvi_daotao.id')
        ->select('tieu_chi.id','donvi_daotao.ten_dv','tieu_chi.Standard_1');
        $news = $news->orderBy('Standard_1', 'desc');
        $news = $news->get();

        $pageName = 'Tên Trang - Evaluation';

        return view('admin.sap_xep_tc_1', compact('news', 'pageName'));
    }
    public function tc_2()
    {
        $news = DB::table('tieu_chi')
            ->join('donvi_daotao', 'tieu_chi.id', '=', 'donvi_daotao.id')
        ->select('tieu_chi.id','donvi_daotao.ten_dv','tieu_chi.Standard_2');
        $news = $news->orderBy('Standard_2', 'desc');
        $news = $news->get();

        $pageName = 'Tên Trang - Evaluation';

        return view('admin.sap_xep_tc_2', compact('news', 'pageName'));
    }
    public function tc_3()
    {
        $news = DB::table('tieu_chi')
            ->join('donvi_daotao', 'tieu_chi.id', '=', 'donvi_daotao.id')
        ->select('tieu_chi.id','donvi_daotao.ten_dv','tieu_chi.Standard_3');
        $news = $news->orderBy('Standard_3', 'desc');
        $news = $news->get();

        $pageName = 'Tên Trang - Evaluation';

        return view('admin.sap_xep_tc_3', compact('news', 'pageName'));
    }
    public function tc_4()
    {
        $news = DB::table('tieu_chi')
            ->join('donvi_daotao', 'tieu_chi.id', '=', 'donvi_daotao.id')
        ->select('tieu_chi.id','donvi_daotao.ten_dv','tieu_chi.Standard_4');
        $news = $news->orderBy('Standard_4', 'desc');
        $news = $news->get();

        $pageName = 'Tên Trang - Evaluation';

        return view('admin.sap_xep_tc_4', compact('news', 'pageName'));
    }
    public function tc_5()
    {
        $news = DB::table('tieu_chi')
            ->join('donvi_daotao', 'tieu_chi.id', '=', 'donvi_daotao.id')
        ->select('tieu_chi.id','donvi_daotao.ten_dv','tieu_chi.Standard_5');
        $news = $news->orderBy('Standard_5', 'desc');
        $news = $news->get();

        $pageName = 'Tên Trang - Evaluation';

        return view('admin.sap_xep_tc_5', compact('news', 'pageName'));
    }
    public function tc_6()
    {
        $news = DB::table('tieu_chi')
            ->join('donvi_daotao', 'tieu_chi.id', '=', 'donvi_daotao.id')
        ->select('tieu_chi.id','donvi_daotao.ten_dv','tieu_chi.Standard_6');
        $news = $news->orderBy('Standard_6', 'desc');
        $news = $news->get();

        $pageName = 'Tên Trang - Evaluation';

        return view('admin.sap_xep_tc_6', compact('news', 'pageName'));
    }
    public function tc_7()
    {
        $news = DB::table('tieu_chi')
            ->join('donvi_daotao', 'tieu_chi.id', '=', 'donvi_daotao.id')
        ->select('tieu_chi.id','donvi_daotao.ten_dv','tieu_chi.Standard_7');
        $news = $news->orderBy('Standard_7', 'desc');
        $news = $news->get();

        $pageName = 'Tên Trang - Evaluation';

        return view('admin.sap_xep_tc_7', compact('news', 'pageName'));
    }
    public function tong_diem()
    {
        $news = DB::table('tieu_chi')
            ->join('donvi_daotao', 'tieu_chi.id', '=', 'donvi_daotao.id')
            
            ->select('tieu_chi.id', 'donvi_daotao.ten_dv','tieu_chi.Tong_Diem','tieu_chi.gan_sao');
        $news = $news->orderBy('Tong_Diem', 'desc');
        $news = $news->get();

        $pageName = 'Tên Trang - Evaluation';

        return view('admin.sap_xep_tong_diem', compact('news', 'pageName'));
    }
    public function rankings()
    {
        $news = DB::table('tieu_chi')
            ->join('donvi_daotao', 'tieu_chi.id', '=', 'donvi_daotao.id')
            
            ->select('tieu_chi.id', 'donvi_daotao.ten_dv','tieu_chi.gan_sao');
        $news = $news->orderBy('Tong_Diem', 'desc');
        $news = $news->get();

        $pageName = 'Tên Trang - Evaluation';

        return view('rankings', compact('news', 'pageName'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getdangnhapUser(){
        return view('user.dangnhap');
    }
    public function postDangnhapUser(Request $request){
        
        $email = $request->email;
        $password = $request->password;

        $result = DB::table('donvi_daotao')->where('email',$email)->where('password',$password)->first();
        if($result){
            Session::put('ten_dv',$result->ten_dv);
            Session::put('id',$result->id);
            return redirect::to('/home-user');

        }else{
            Session::put('message','Tk hoac mat khau sai');
            return redirect::to('/dangnhap');
        }
    }
    public function log_out(){
        Session::put('ten_dv',null);
        Session::put('id',null);
        return redirect::to('/dangnhap');
    }
    public function thong_tin_truong(Request $request){
        $id = Session::get('id');
        $ten_dv = Session::get('ten_dv');
        $news = DB::table('donvi_daotao')->where('id',$id)->where('ten_dv',$ten_dv)->select('*');
        $news = $news->get();

        $pageName = 'Thông tin trường';
            return view('user.thongTinTruong',compact('news', 'pageName'));
        
        
    }
    public function chinhsua($id){
        $news = DonVi::findOrFail($id);
        $pageName = 'News - Update';
        return view('/user/chinhsua', compact('news', 'pageName'));
    }
    public function capnhat(Request $request, $id)
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
        return redirect()->action('User\UserController@thong_tin_truong');
    }
    public function chi_tiet(Request $request){
        $id = Session::get('id');
        $news = DB::table('tieu_chi')->where('id',$id)->select('*');
        $news = $news->get();

        $pageName = 'Chi tiết form đánh giá';
            return view('user.chi_tiet',compact('news', 'pageName'));
        
        
    }
    public function edit_form($id){
        $news = Evaluation::findOrFail($id);
        $pageName = 'News - Update';
        return view('/user/edit_form', compact('news', 'pageName'));
    }
    public function update_form(Request $request, $id)
    {
        $data = array();
        $data['tc_1_1'] = $request->tc_1_1;
        $data['tc_1_2'] = $request->tc_1_2;
        $data['tc_1_3'] = $request->tc_1_3;
        $data['tc_2_1'] = $request->tc_2_1;
        $data['tc_2_2'] = $request->tc_2_2;
        $data['tc_2_3'] = $request->tc_2_3;
        $data['tc_2_4'] = $request->tc_2_4;
        $data['tc_2_5'] = $request->tc_2_5;
        $data['tc_2_6'] = $request->tc_2_6;
        $data['tc_2_7'] = $request->tc_2_7;
        $data['tc_2_8'] = $request->tc_2_8;
        $data['tc_2_9'] = $request->tc_2_9;
        $data['tc_2_10'] = $request->tc_2_10;
        $data['tc_2_11'] = $request->tc_2_11;
        $data['tc_3_1'] = $request->tc_3_1;
        $data['tc_3_2'] = $request->tc_3_2;
        $data['tc_3_3'] = $request->tc_3_3;
        $data['tc_3_4'] = $request->tc_3_4;
        $data['tc_3_5'] = $request->tc_3_5;
        $data['tc_4_1'] = $request->tc_4_1;
        $data['tc_4_2'] = $request->tc_4_2;
        $data['tc_4_3'] = $request->tc_4_3;
        $data['tc_4_4'] = $request->tc_4_4;
        $data['tc_4_5'] = $request->tc_4_5;
        $data['tc_4_6'] = $request->tc_4_6;
        $data['tc_5_1'] = $request->tc_5_1;
        $data['tc_5_2'] = $request->tc_5_2;
        $data['tc_5_3'] = $request->tc_5_3;
        $data['tc_5_4'] = $request->tc_5_4;
        $data['tc_5_5'] = $request->tc_5_5;
        $data['tc_5_6'] = $request->tc_5_6;
        $data['tc_5_7'] = $request->tc_5_7;
        $data['tc_5_8'] = $request->tc_5_8;
        $data['tc_5_9'] = $request->tc_5_9;
        $data['tc_5_10'] = $request->tc_5_10;
        $data['tc_6_1'] = $request->tc_6_1;
        $data['tc_6_2'] = $request->tc_6_2;
        $data['tc_6_3'] = $request->tc_6_3;
        $data['tc_6_4'] = $request->tc_6_4;
        $data['tc_6_5'] = $request->tc_6_5;
        $data['tc_6_6'] = $request->tc_6_6;
        $data['tc_6_7'] = $request->tc_6_7;
        $data['tc_6_8'] = $request->tc_6_8;
        $data['tc_6_9'] = $request->tc_6_9;
        $data['tc_6_10'] = $request->tc_6_10;
        $data['tc_7_1'] = $request->tc_7_1;
        $data['tc_7_2'] = $request->tc_7_2;
        $data['tc_7_3'] = $request->tc_7_3;
        $data['tc_7_4'] = $request->tc_7_4;
        $data['tc_7_5'] = $request->tc_7_5;
        $data['Standard_1'] = $request->Standard_1;
        $data['Standard_2'] = $request->Standard_2;
        $data['Standard_3'] = $request->Standard_3;
        $data['Standard_4'] = $request->Standard_4;
        $data['Standard_5'] = $request->Standard_5;
        $data['Standard_6'] = $request->Standard_6;
        $data['Standard_7'] = $request->Standard_7;
        $data['Tong_Diem'] = $request->Tong_Diem;
        $data['gan_sao'] = $request->gan_sao;
        DB::table('tieu_chi')->where('id',$id)->update($data);
        Session::put('message','Cập nhật dữ liệu thành công !');
        return redirect()->action('User\UserController@chi_tiet');
    }
    
    public function getSearch(Request $request)
    {
        return view('searchajax');
    }
    function getSearchAjax(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('donvi_daotao')
            ->where('ten_dv', 'LIKE', "%{$query}%")
            ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
               $output .= '
               <li><a href="data/'. $row->id .'">'.$row->ten_dv.'</a></li>
               ';
           }
           $output .= '</ul>';
           echo $output;
       }
    }
}
