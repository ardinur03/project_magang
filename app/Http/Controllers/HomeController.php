<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    // $average = collect([1, 1, 2, 4])->avg();
    // $chunks = $collection->chunk(4);
    
        /* $nomor  = collect([8, 7, 6, 5, 4, -3, -2]);
        $satu   = $nomor->avg();//isi 5
        $dua    = $nomor->get(-3);
        $tiga   = $nomor->last(); //isi -2
        $jumlah = ($satu+$dua+$tiga);
        $hasil  = $jumlah->sum();
        return view ('coba', ['hasil' =>$hasil]); */
        
        // $array = ([1,5,3,7,-3,-2,-4]);
        // if (in_array(5, $array, TRUE)) {
        //     echo "ini benar";
        // }else{
        //     echo "ini salah";
        // }
    // public function three_Sum($arr, $target)
    // {
    //     $count = count($arr) - 2;
    //     $result=[];
    //     for ($x = 0; $x < $count; $x++) {
    //         if ($arr[$x] + $arr[$x+1] + $arr[$x+2] == $target) {
    //             array_push($result, "{$arr[$x]} + {$arr[$x+1]} + {$arr[$x+2]} = $target");
    //         }
    //     }
    //     return $result;
    //     $my_array = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
    //     print_r(three_Sum($my_array, 16));
    //     print_r(three_Sum($my_array, 16));
    //     print_r(three_Sum($my_array, 11));
    //     print_r(three_Sum($my_array, 12));
        
    // }
    

        

       
    
}
