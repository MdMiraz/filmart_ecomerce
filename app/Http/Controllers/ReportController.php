<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function dailyReport (){
    	return view ('admin.daily_report');
    }
    public function monthlyReport (){
    	return view ('admin.monthly_report');
    }
    public function yearlyReport (){
    	return view ('admin.yearly_report');
    }
    public function viewDailyReport (){
        return view ('admin.view.view_daily_report');
    }
    public function viewMonthlyReport (){
        return view ('admin.view.view_monthly_report');
    }
    public function viewYearlyReport (){
        return view ('admin.view.view_yearly_report');
    }
    public function searchReport (){
    	return view ('admin.search_report');
    }
    public function viewSearchDate (){
        return view ('admin.view.view_search_date');
    }
    public function viewSearchMonth (){
        return view ('admin.view.view_search_month');
    }
    public function viewSearchYear (){
        return view ('admin.view.view_search_year');
    }
}
