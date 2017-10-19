<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use APP\Http\Requests;
use Session;
use Storage;
use DB;
class PersonalController extends Controller
{
	//账户纵览  波文
	public function Index(Request $request)
	{
		if($request->isMethod('get'))
        { 
            // $data = DB::table('loantype')->where('is_del','=',1)->get();
            return view('home/personal/index');
        }
	}
	//jitongliang
	public function zijin(Request $request)
	{
		if($request->isMethod('get'))
        { 
            // $data = DB::table('loantype')->where('is_del','=',1)->get();
            return view('home/personal/zijin');
        }
	}
	//回款
	public function huikuan(Request $request)
	{
		if($request->isMethod('get'))
        { 
            // $data = DB::table('loantype')->where('is_del','=',1)->get();
            return view('home/personal/huikuan');
        }
	}
	//jitongliang
	public function licai(Request $request)
	{
		if($request->isMethod('get'))
        { 
            // $data = DB::table('loantype')->where('is_del','=',1)->get();
            return view('home/personal/licai');
        }
	}
	// 波文
	public function chongzhi(Request $request)
	{
		if($request->isMethod('get'))
        { 
            // $data = DB::table('loantype')->where('is_del','=',1)->get();
            return view('home/personal/chongzhi');
        }
	}
	// 波文
	public function tixian(Request $request)
	{
		if($request->isMethod('get'))
        { 
            // $data = DB::table('loantype')->where('is_del','=',1)->get();
            return view('home/personal/tixian');
        }
	}
	// 波文
	public function access(Request $request)
	{
		if($request->isMethod('get'))
        { 
            // $data = DB::table('loantype')->where('is_del','=',1)->get();
            return view('home/personal/access');
        }
	}
	//文昌
	public function huankuan(Request $request)
	{
		if($request->isMethod('get'))
        { 
            // $data = DB::table('loantype')->where('is_del','=',1)->get();
            return view('home/personal/jiekuan');
        }
	}
}