<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserManagement\Menu;

class MenuController extends Controller
{
    public function menuCreateForm(){

        return view('Menu.addMenu');
    }

    public function menuList(){
        $menu = Menu::all();
        return view('Menu.menuList')->with('menu',$menu);
    }

    public function menuCreateSubmission(Request $request){

        $menu = new Menu();
        $menu->menuName = $request->name;
        $menu->code = $request->code;
        $res = $menu->save();
        if($res){
            return redirect()->route('menuList')->with('message', 'Menu Added successfully');
        }
        else{
            return redirect()->route('menuList')->with('message', 'Failed to add menu');
        }
    }

    public function menuEdit(Request $request){
        $menu = Menu::where('id',$request->id)->first();

        return view('Menu.editMenu')->with('menu',$menu);
    }

    public function menuEditSubmit(Request $request){
        $menu = Menu::where('id',$request->id)->first();
        $menu->menuName = $request->name;
        $menu->code = $request->code;
        $menu->save();

        return  redirect()->route('menuList')->with('message', 'Menu Updated Successfully');

    }

    public function getMenuInformation(Request $request){
        $menu = Menu::where('id',$request->id)->first();
        return $menu;
    }

    public function deleteMenu(Request $request){
        $menu = Menu::where('id',$request->id)->delete();
        return redirect()->route('menuList')->with('message', 'Menu Delete successfully');
    }
}
