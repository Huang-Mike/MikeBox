<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function IdidIt(Request $request,$aaa, $ccc = null)
    {
        // return 'I did it!' . $aaa . '---' . $ccc;
        // return "I did it!$aaa---$ccc";
        // return $this->immike($aaa, $ccc);

        $zzz = array($aaa, $ccc);
        
        $this->changeValue($zzz);
        return $this->immike($zzz);
    }


    public function JudgeTime(){
        print_r('Mike good');
    }

    private function immike($zzz)
    {
        return "I did it!$zzz[0]---$zzz[1]";

    }


    private function changeValue(&$zzz)
    {
        $zzz[1] = "HIHIHIHI";

    }

}

