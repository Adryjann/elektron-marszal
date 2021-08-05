<?php
namespace App\Http\Controllers;

use App\Models\Realizacje;
use Illuminate\Http\Request;

class PortController extends Controller
{
   public function index ()
   {
       $realizacja = Realizacje::all();

       return view("index",['realizacje'=>$realizacja]);
   }

   public function admin()
   {
       return view('admin');
   }

   public function login(Request $request){
       $login = $request->login;
       $pass = $request->password;

       if ($login == "admin" && $pass == "admin") {
            $request->session()->put('admin', 'A132fDvbpoS');

            return redirect()->route('admin-index');
       }
       else {
        return redirect()->route('admin');
       }

   }

   public function admin_panel()
   {
       if(session('admin')=='A132fDvbpoS'){
       $realizacje = Realizacje::all();
       return view('admin_panel',['realizacje'=>$realizacje]);
       }
       else{
        return redirect()->route('index');
       }
   }

   public function dodaj_realizacje()
   {
    if(session('admin')=='A132fDvbpoS'){
        return view("create");
        }
        else{
            return redirect()->route('index');
        }
   }

   public function store(Request $request){
    if(session('admin')=='A132fDvbpoS'){

        $realizacja = new Realizacje();

        $realizacja ->nazwa = $request->nazwa;
        $realizacja ->opis = $request->opis;
        $d[] = $request->zdjecie;
        $p = count($request->zdjecie);
        $i=1;

            for($i=0; $i<$p; $i++){

                $filenameWithExt=$d[0][$i]->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $d[0][$i]->getClientOriginalExtension();
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                $d[0][$i]->storeAs('public/image', $fileNameToStore);

                if($i==0){
                $realizacja ->zdjecie1 = $fileNameToStore;
                }
                if($i==1){
                    $realizacja ->zdjecie2 = $fileNameToStore;
                    }
                if($i==2){
                $realizacja ->zdjecie3 = $fileNameToStore;
                }
                if($i==3){
                $realizacja ->zdjecie4 = $fileNameToStore;
                }
                if($i==4){
                $realizacja ->zdjecie5 = $fileNameToStore;
                }

            }

        $realizacja ->save();
        return redirect()->route('admin-index');
        }
        else{
            return redirect()->route('index');
    }
   }

   public function edit($id){
    if(session('admin')=='A132fDvbpoS'){
        $realizacja = Realizacje::find($id);

        return view('edit', ['realizacja' => $realizacja]);
        }
     else{
        return redirect()->route('index');
     }
   }

   public function update($id, Request $request){
    if(session('admin')=='A132fDvbpoS'){
        $realizacja = Realizacje::find($id);
        $realizacja -> nazwa = $request->nazwa;
        $realizacja -> opis = $request->opis;


        if($request->zdjecie1 == null){
            $request->zdjecie1=$realizacja->zdjecie1;
        }
        else if($realizacja -> zdjecie1 != $request->zdjecie1->getClientOriginalName()){
            $filenameWithExt=$request->zdjecie1->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->zdjecie1->getClientOriginalExtension();
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                $request->zdjecie1->storeAs('public/image', $fileNameToStore);
                $realizacja ->zdjecie1 = $fileNameToStore;


        }

        if($request->zdjecie2 == null){
            $request->zdjecie2=$realizacja->zdjecie2;
        }
        else if($realizacja -> zdjecie2 != $request->zdjecie2->getClientOriginalName()){
            $filenameWithExt=$request->zdjecie2->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->zdjecie2->getClientOriginalExtension();
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                $request->zdjecie2->storeAs('public/image', $fileNameToStore);
                $realizacja ->zdjecie2 = $fileNameToStore;


        }

        if($request->zdjecie3 == null){
            $request->zdjecie3=$realizacja->zdjecie3;
        }
        else if($realizacja -> zdjecie3 != $request->zdjecie3->getClientOriginalName()){
            $filenameWithExt=$request->zdjecie3->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->zdjecie3->getClientOriginalExtension();
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                $request->zdjecie3->storeAs('public/image', $fileNameToStore);
                $realizacja ->zdjecie3 = $fileNameToStore;


        }
        if($request->zdjecie4 == null){
            $request->zdjecie4=$realizacja->zdjecie4;
        }
         else if($realizacja -> zdjecie4 != $request->zdjecie4->getClientOriginalName()){
            $filenameWithExt=$request->zdjecie4->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->zdjecie4->getClientOriginalExtension();
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                $request->zdjecie4->storeAs('public/image', $fileNameToStore);
                $realizacja ->zdjecie4 = $fileNameToStore;


        }
        if($request->zdjecie5 == null){
            $request->zdjecie5=$realizacja->zdjecie5;
        }
        else if ($realizacja -> zdjecie5 != $request->zdjecie5->getClientOriginalName()) {
            $filenameWithExt=$request->zdjecie5->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->zdjecie5->getClientOriginalExtension();
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                $request->zdjecie5->storeAs('public/image', $fileNameToStore);
                $realizacja ->zdjecie5 = $fileNameToStore;
        }

        $realizacja ->save();

        return redirect()->route('admin-index');
    }
    else {
        return redirect()->route('index');
    }
   }

   public function delete($id)
   {
        if (session('admin')=='A132fDvbpoS') {
            Realizacje::destroy($id);

            return redirect()->route("admin-index");
        }
        else {
            return redirect()->route('admin-index');
        }
   }

   public function logout()
   {
        if (session('admin')=='A132fDvbpoS') {
            session()->forget('admin');

            return redirect()->route("index");
        }
        else {
            return redirect()->route('admin-index');
        }
   }

   public function realizacje()
   {
       $realizacja = Realizacje::all();

       return view("realizacje",['realizacje'=>$realizacja]);
   }
}
