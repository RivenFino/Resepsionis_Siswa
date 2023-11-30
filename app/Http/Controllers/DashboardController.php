<?php
namespace App\Http\Controllers;
use Carbon\Carbon;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function index(){
        $username = Auth::user()->nama;

        $now = Carbon::now();
        $date = $now->format('d-M-Y');
        $time = $now->format('H:i:s');
        $day = $now->format('D');
        if ($day == "Sun") {
            $day = "Minggu";
        } elseif ($day == "Mon") {
            $day = "Senin";
        } elseif ($day == "Tue") {
            $day = "Selasa";
        } elseif ($day == "Wed") {
            $day = "Rabu";
        } elseif ($day == "Thu") {
            $day = "Kamis";
        } elseif ($day == "Fri") {
            $day = "Jumat";
        } elseif ($day == "Sat") {
            $day = "Sabtu";
        }
        return view('dashboard/index', ['date' => $date, 'time' => $time, 'day' => $day,'username' => $username]);
    }
}
