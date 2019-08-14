<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manager;
use App\Dashboard;
use App\Session;

class HomeController extends Controller
{
    function index(Request $request) {
        $dashboardList = Dashboard::all();
        $count = Session::where('token', '=', $request->cookie('token'))->count();
        return view("home.index", compact('dashboardList', 'count'));
    }

    function detail(Request $request, $id) {
        $detailData = Dashboard::find($id);
        $count = Session::where('token', '=', $request->cookie('token'))->count();
        return view("home.detail", compact('detailData', 'count'));
    }

    function editpage(Request $request, $id) {
        $detailData = Dashboard::find($id);
        $count = Session::where('token', '=', $request->cookie('token'))->count();
        return view("home.edit", compact('detailData', 'count'));
    }

    function loginpage() {
        return view("home.login");
    }

    function createpage() {
        return view("home.create");
    }

    function editdashboard(Request $request, $id) {
        Dashboard::where('id', '=', $id)->update(['title' => $request->title, 'content' => $request->content]);
        return redirect("/");
    }

    function createdashboard(Request $request, Dashboard $dashboard) {
        $dashboard->title = $request->title;
        $dashboard->content = $request->content;
        $dashboard->save();
        
        return redirect("/");
    }

    function login(Request $request, Session $session) {
        $accountList = Manager::all();
        $loginstatus = false;
        $sessionkey = substr(md5(rand()),0,12);
        foreach($accountList as $data) {
            if ($data->account == $request->account && $data->password == $request->password) {
                $loginstatus = true;
                $session->managerId = $data->id;
                $session->token = $sessionkey;
                $session->createTime = date('Y-m-d', time());
                $session->save();
                \Cookie::queue('token', $sessionkey, 60);
                $count = 1;
                $dashboardList = Dashboard::all();
                return view("home.index", compact('dashboardList', 'count'));
            } else if (!$loginstatus && ($data != end($accountList))) {
                return view("home.error");
            }
        }
    }
    
    function logout() {
        $dashboardList = Dashboard::all();
        $count = 0;
        \Cookie::forget('token');
        return view("home.index", compact('dashboardList', 'count'));
    }

    function deletedashboard($id) {
        Dashboard::where('id', '=', $id)->delete();
        return redirect("/");
    }
}
