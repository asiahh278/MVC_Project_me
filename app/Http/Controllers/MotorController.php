 <?php
namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\support\Facades\File;

class MotorController extends Controller
{
//     public function admin()
//     {
//         $motor = Motor::all();
//         return view('admin' ,compact('motor'));
//     }

//     # buat nampilin form add data
//     public function create(){
//         return view('create');
//     }

//     # buat read data = klo data udah dimasukin
//     public function insertdata(Request $request)
//     {
//         Motor::create($request->all());
//         return redirect('/adminpage')->with('succes', 'Data berhasil ditambahkan');
//     }
// 


    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        if($request->has('search')){
            $data = Motor::where('books', 'LIKE', "%$request->search%")->paginate(5);
        }else{
            $data = Motor::paginate(5);
        }
         return view('admin', compact('data'));
    }

    

    public function create(){
        return view('create');
    }

    public function insertdata(Request $request){

       $data = Motor::create($request->validate([
            'foto' => 'required|mimes:jpeg,jpg,png',
            'title' => 'required',
       ]));

       if($request->hasFile('foto')){
        $request->file('foto')->move('/fotomotor', $request->file('foto')->getClientOriginalName());
        $data->foto = $request->file('foto')->getClientOriginalName();
        $data->save();
       }

       return redirect('/adminpage')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function viewdata($id){
        $data = Motor::find($id);
       return view('edit', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Motor::find($id);
        $data->update($request->validate([

            'foto' => 'mimes:jpeg,jpg,png',
            'title' => 'required'
       ]));

        if($request->hasFile('foto')){
            $destination = 'fotomotor/'.$data->foto;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $request->file('foto')->move('fotomotor/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
           }

           $data->save();
        return redirect('/adminpage')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id){
        $data = Motor::find($id);
        $data->delete();
        return redirect('/adminpage')->with('success', 'Data Berhasil Dihapus');
    }
// ---profile page----
   

}
