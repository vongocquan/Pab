<?php

namespace App\Http\Controllers;

use App\Models\Airdrop;
use App\Models\Category;
use App\Models\News;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListtingController extends Controller
{
    public function index(){


        return view('showListting')->with('categories', Category::all());
    }
    public function save(Request $request){
        $nameFile = 'logos';
        $regexWeb = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        $regexGit = '/^(https?:\/\/)?(github).(com)([\/\w-]+)*\/?$/';
        $request->validate([
            'project_name'=>'required|unique:projects',
            'id_category'=>'required',
            'introduction'=>'required',
            'logo'=>'required',
            'token'=>'required',
            'project_web'=>'required',
            'link_fb'=>'required',
            'link_tw'=>'required',
            'link_yt'=>'required',
            'link_gh'=>'required',
            'email'=>'required|email',
            'ytele'=>'required',
        ]);

        if ($request->hasFile('logo')) {
            $file = $request->logo;

            // //Lấy Tên files
            // echo 'Tên Files: ' . $file->getClientOriginalName();
            // echo '<br/>';

            // //Lấy Đuôi File
            // echo 'Đuôi file: ' . $file->getClientOriginalExtension();
            // echo '<br/>';

            // //Lấy đường dẫn tạm thời của file
            // echo 'Đường dẫn tạm: ' . $file->getRealPath();
            // echo '<br/>';

            // //Lấy kích cỡ của file đơn vị tính theo bytes
            // echo 'Kích cỡ file: ' . $file->getSize();
            // echo '<br/>';

            // //Lấy kiểu file
            // echo 'Kiểu files: ' . $file->getMimeType();
    
            $file = $request->logo;
            $file->move($nameFile, $request->title.'.'.$file->getClientOriginalExtension());
            $project = [
                'project_name' => $request->project_name,
                'id_category' => $request->id_category,
                'introduction' => $request->introduction,
                'token' => $request->token,
                'logo' => ('/'.$nameFile.'/'.($request->project_name).'.'.$file->getClientOriginalExtension()),
                'project_web' => $request->project_web,
                'link_fb' => $request->link_fb,
                'link_tw' => $request->link_tw,
                'link_yt' => $request->link_yt,
                'link_gh' => $request->link_gh,
                'email' => $request->email,
                'ytele' => $request->ytele,
        
            ];
            // if (!$request->session()->has('project')) {
            //     session()->get('project');
            // } else {
            //     $request->session()->forget('project');
            // }
            session()->put('project_name', $request->project_name);
            session()->put('id_category', $request->id_category);
            session()->put('introduction', $request->introduction);
            session()->put('token', $request->token);
            session()->put('logo', ($nameFile.'/'.($request->project_name).'.'.$file->getClientOriginalExtension()));
            session()->put('project_web', $request->project_web);
            session()->put('link_fb', $request->link_fb);
            session()->put('link_tw', $request->link_tw);
            session()->put('link_yt', $request->link_yt);
            session()->put('link_gh', $request->link_gh);
            session()->put('email', $request->email);
            session()->put('ytele', $request->ytele);
            // Project::create($project);
        }
        // return session()->pull('project', 'default');
        return view('formAirdrop');
       
        // return view('showFile', compact('files'));
    }

    public function indexTest(){
        return view('formAirdrop');
    }
    public function saveAirdrop(Request $request){
        $request->validate([
            'link_airdrop'=>'required|unique:airdrops',
            'end_day'=>'required',
            'max_rewards'=>'required',
            'steps'=>'required',
            'estimated_value'=>'required',
        ]);


        // if (!$request->session()->has('airdrop')) {
        //     session()->get('airdrop');
        // } else {
        //     $request->session()->forget('airdrop');
        // }
        session()->put('link_airdrop', $request->link_airdrop);
        session()->put('end_day', $request->end_day);
        session()->put('max_rewards', $request->max_rewards);
        session()->put('steps', $request->steps);
        session()->put('estimated_value', $request->estimated_value);
        return view('formNew');
    
    }
    public function indexNew(){
        return view('formNew');
    }
    public function saveNew(Request $request){
        $request->validate([
            'theme'=>'required|unique:news',
            'image'=>'required',
            'connect'=>'required',
        ]);
        $project_name =session()->pull('project_name', 'default');
        $project = [
            'project_name' => $project_name,
            'id_category' => session()->pull('id_category', 'default'),
            'introduction' => session()->pull('introduction', 'default'),
            'token' => session()->pull('token', 'default'),
            'logo' => session()->pull('logo', 'default'),
            'project_web' => session()->pull('project_web', 'default'),
            'link_fb' => session()->pull('link_fb', 'default'),
            'link_tw' => session()->pull('link_tw', 'default'),
            'link_yt' => session()->pull('link_yt', 'default'),
            'link_gh' => session()->pull('link_gh', 'default'),
            'email' => session()->pull('email', 'default'),
            'ytele' => session()->pull('ytele', 'default'),
        ];
        if(Project::where('project_name', '=', $project_name)->exists()){
            return view('showListting');
        }
        Project::create($project);
        $file = $request->image;
        $file->move(('imageNews'), $request->theme.'.'.$file->getClientOriginalExtension());
        $idProject = Project::where('project_name', '=', $project_name)->first()->id;
        $airdrop = [
            'id_project' => $idProject,
            'link_airdrop' => session()->pull('link_airdrop', 'default'),
            'end_day' => session()->pull('end_day', 'default'),
            'max_rewards' => session()->pull('max_rewards', 'default'),
            'steps' => session()->pull('steps', 'default'),
            'estimated_value' => session()->pull('estimated_value', 'default'),
        ];
      
        Airdrop::create($airdrop);
        News::create([
            'id_project' => $idProject,
            'theme' => $request->theme,
            'image' => '/'.'imageNews'.$request->theme.'.'.$file->getClientOriginalExtension(),
            'connect' => $request->connect
        ]);
    }
}
