<?php
namespace App\Http\Controllers;
use Carbon\Carbon;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function index(){
        $username = Auth::user()->nama;

        $now = Carbon::now();
        $monthformat = [
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];
        $month = $monthformat[date("m")];
        $dateday = $now->format('d');
        $dateyear = $now->format('Y');
        $date = $dateday.'-'.$month.'-'.$dateyear;
        $dayformat = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        ];
        $day = $dayformat[date("l")];

        $confirm = DB::table('keperluan')
        ->whereStatus('confirmed')
        ->count();

        return view('dashboard/index', ['date' => $date, 'day' => $day,'username' => $username, 'confirm' => $confirm]);
    }

    
}
