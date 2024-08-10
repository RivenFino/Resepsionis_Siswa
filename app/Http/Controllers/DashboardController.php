<?php
namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function index(Request $request){
        $username = Auth::user()->nama;
        $today = Carbon::now('Asia/Singapore')->format('Y-m-d');

        $sort = $request->get('sort');
        
        $now = Carbon::now();
        $monthformat = [
            0 => 'Januari',
            1 => 'Februari',
            2 => 'Maret',
            3 => 'April',
            4 => 'Mei',
            5 => 'Juni',
            6 => 'Juli',
            7 => 'Agustus',
            8 => 'September',
            9 => 'Oktober',
            10 => 'November',
            11 => 'Desember'
        ];
        
        $weekStartDate = Carbon::now()->startOfWeek();
        $monthStartDate = Carbon::now()->startOfMonth();
        
        $month = $monthformat[!date("m") ?? !date('m')];
        $dateday = $now->format('d');
        $dateyear = $now->format('Y');
        $date = $dateday.'-'.$month.'-'.$dateyear;



        $confirmed = DB::table('keperluan')
        ->where('status', 'confirmed')
        ->whereBetween('tanggal', [$weekStartDate, $weekStartDate->copy()->endOfWeek()])
        ->count();

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


        if($sort == "hari_ini"){
            $sort = "today";
            $confirmed = DB::table('keperluan')
            ->where('status', 'confirmed')
            ->whereDate('tanggal', $today)
            ->count();
            $unconfirm = DB::table('keperluan')
            ->whereStatus('unconfirm')
            ->whereDate('tanggal', $today)
            ->count();
            $cancel = DB::table('keperluan')
            ->whereStatus('cancel')
            ->whereDate('tanggal', $today)
            ->count();
            $keluarSekolah = DB::table('keperluan')
            ->whereKeperluan('keluar sekolah')
            ->whereDate('tanggal', $today)
            ->where('status', 'confirmed')
            ->count();
            $izin = DB::table('keperluan')
            ->whereKeperluan('izin')
            ->whereDate('tanggal', $today)
            ->where('status', 'confirmed')
            ->count();
            $terlambat = DB::table('keperluan')
            ->whereKeperluan('terlambat')
            ->whereDate('tanggal', $today)
            ->where('status', 'confirmed')
            ->count();
            $melanggarAturan = DB::table('keperluan')
            ->whereKeperluan('melanggar aturan')
            ->whereDate('tanggal', $today)
            ->where('status', 'confirmed')
            ->count();
        }else
        if($sort == "minggu_ini"){
            $sort = "week";
            $confirmed = DB::table('keperluan')
            ->where('status', 'confirmed')
            ->whereBetween('tanggal', [$weekStartDate, $weekStartDate->copy()->endOfWeek()])
            ->count();
            $unconfirm = DB::table('keperluan')
            ->whereStatus('unconfirm')
            ->whereBetween('tanggal', [$weekStartDate, $weekStartDate->copy()->endOfWeek()])
            ->count();
            $cancel = DB::table('keperluan')
            ->whereStatus('cancel')
            ->whereBetween('tanggal', [$weekStartDate, $weekStartDate->copy()->endOfWeek()])
            ->count();
            $keluarSekolah = DB::table('keperluan')
            ->whereKeperluan('keluar sekolah')
            ->whereBetween('tanggal', [$weekStartDate, $weekStartDate->copy()->endOfWeek()])
            ->where('status', 'confirmed')
            ->count();
            $izin = DB::table('keperluan')
            ->whereKeperluan('izin')
            ->whereBetween('tanggal', [$weekStartDate, $weekStartDate->copy()->endOfWeek()])
            ->where('status', 'confirmed')
            ->count();
            $terlambat = DB::table('keperluan')
            ->whereKeperluan('terlambat')
            ->whereBetween('tanggal', [$weekStartDate, $weekStartDate->copy()->endOfWeek()])
            ->where('status', 'confirmed')
            ->count();
            $melanggarAturan = DB::table('keperluan')
            ->whereKeperluan('melanggar aturan')
            ->whereBetween('tanggal', [$weekStartDate, $weekStartDate->copy()->endOfWeek()])
            ->where('status', 'confirmed')
            ->count();
        }else
        if($sort == "bulan_ini"){
            $sort = "month";
            $confirmed = DB::table('keperluan')
            ->where('status', 'confirmed')
            ->whereBetween('tanggal', [$monthStartDate, $monthStartDate->copy()->endOfMonth()])
            ->where('status', 'confirmed')
            ->count();
            $unconfirm = DB::table('keperluan')
            ->whereStatus('unconfirm')
            ->whereBetween('tanggal', [$monthStartDate, $monthStartDate->copy()->endOfMonth()])
            ->count();
            $cancel = DB::table('keperluan')
            ->whereStatus('cancel')
            ->whereBetween('tanggal', [$monthStartDate, $monthStartDate->copy()->endOfMonth()])
            ->count();
            $keluarSekolah = DB::table('keperluan')
            ->whereKeperluan('keluar sekolah')
            ->whereBetween('tanggal', [$monthStartDate, $monthStartDate->copy()->endOfMonth()])
            ->where('status', 'confirmed')
            ->count();
            $izin = DB::table('keperluan')
            ->whereKeperluan('izin')
            ->whereBetween('tanggal', [$monthStartDate, $monthStartDate->copy()->endOfMonth()])
            ->where('status', 'confirmed')
            ->count();
            $terlambat = DB::table('keperluan')
            ->whereKeperluan('terlambat')
            ->whereBetween('tanggal', [$monthStartDate, $monthStartDate->copy()->endOfMonth()])
            ->where('status', 'confirmed')
            ->count();
            $melanggarAturan = DB::table('keperluan')
            ->whereKeperluan('melanggar aturan')
            ->whereBetween('tanggal', [$monthStartDate, $monthStartDate->copy()->endOfMonth()])
            ->where('status', 'confirmed')
            ->count();
        }else
        {
            $sort = "all";
            $confirmed = DB::table('keperluan')
            ->where('status', 'confirmed')
            ->count();
            $unconfirm = DB::table('keperluan')
            ->where('status', 'unconfirm')
            ->count();
            $cancel = DB::table('keperluan')
            ->where('status', 'cancel')
            ->count();
            $keluarSekolah = DB::table('keperluan')
            ->whereKeperluan('keluar sekolah')
            ->where('status', 'confirmed')
            ->count();
            $izin = DB::table('keperluan')
            ->whereKeperluan('izin')
            ->where('status', 'confirmed')
            ->count();
            $terlambat = DB::table('keperluan')
            ->whereKeperluan('terlambat')
            ->where('status', 'confirmed')
            ->count();
            $melanggarAturan = DB::table('keperluan')
            ->whereKeperluan('melanggar aturan')
            ->where('status', 'confirmed')
            ->count();
        }
        return view('dashboard/index', ['sort' => $sort, 'date' => $date, 'day' => $day,'username' => $username, 
        'confirmed' => $confirmed,'unconfirm' => $unconfirm,'cancel' => $cancel,
        'keluarSekolah'=>$keluarSekolah,'izin'=>$izin,'terlambatSekolah'=>$terlambat,'melanggarAturan'=>$melanggarAturan]);
    }

    
}
