<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;
use PDF;
use Excel;
use App\Exports\EmployeesExport;
use Image;

class ExpenseController extends Controller
{
    public function selectexpensemonth(){
		if(session()->get("email")){
			return view('expense.selectmonth');
		}else{
			return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}
	}
	public function submitselectexpense($year, $month){
		if(session()->get("email")){
			$yearandmonth = $year.'-'.$month;
			$task = DB::connection('mysql')->table('expense')
			->join('expensetype','expensetype.expensetype_id','=','expense.expensetype_id')
			->where('expense.expense_yearandmonth','=',$yearandmonth)
			->where('expense.status_id','=',2)
			->select('expense.*','expensetype_name')
			->get();
			return view('expense.report',['data' => $task, 'yearandmonth' => $yearandmonth]);
		}else{
			return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}
	}
	public function addexpense($id){
		if(session()->get("email")){
			$task = DB::connection('mysql')->table('expensetype')
			->where('status_id','=',2)
			->select('expensetype_id','expensetype_name')
			->get();
			$depart = DB::connection('mysql')->table('hrm_department')
			->select('*')
			->get();
			return view('expense.modals.add',['data' => $task, 'yearandmonth' => $id, 'depart' => $depart]);
		}else{
			return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}
	}
	public function submitexpense(Request $request){
		if(session()->get("email")){
			$mergedepart = implode(',', $request->expense_for);
			$add[] = array(
				'expense_title' 		=> $request->expense_title,
				'expense_amount' 		=> $request->expense_amount,
				'expense_for'	 		=> $mergedepart,
				'expense_comment' 		=> $request->expense_comment,
				'expense_yearandmonth' 	=> $request->expense_yearandmonth,
				'expense_day' 			=> $request->expense_day,
				'expensetype_id' 		=> $request->expensetype_id,
				'status_id' 			=> 2,
				'created_by' 			=> session()->get('id'),
				'created_at' 			=> date('Y-m-d h:i:s')
				);
			$save = DB::connection('mysql')->table('expense')->insert($add);
			$forredirection = explode('-', $request->expense_yearandmonth);
			if($save){
				return redirect('/submitselectexpense/'.$forredirection[0].'/'.$forredirection[1])->with('message','Expense Added Successfully');;
			}else{
				return redirect('/restaurantlist')->with('message','Oops! Something went wrong');;
			}
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');;
		} 
	}
	public function editexpense($id){
		if(session()->get("email")){
			$type = DB::connection('mysql')->table('expensetype')
			->where('status_id','=',2)
			->select('expensetype_id','expensetype_name')
			->get();
			$depart = DB::connection('mysql')->table('hrm_department')
			->select('*')
			->get();
			$task = DB::connection('mysql')->table('expense')
			->where('expense_id','=',$id)
			->select('*')
			->first();
			return view('expense.modals.edit',['data' => $task, 'type' => $type, 'depart' => $depart]);
		}else{
			return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}
	}
	public function submiteditexpense(Request $request){
		if(session()->get("email")){
			$data = array(
				'expense_title' 		=> $request->expense_title,
				'expense_amount' 		=> $request->expense_amount,
				'expense_comment' 		=> $request->expense_comment,
				'expense_yearandmonth' 	=> $request->expense_yearandmonth,
				'expensetype_id' 		=> $request->expensetype_id,
				'updated_by' 			=> session()->get('id'),
				'updated_at' 			=> date('Y-m-d h:i:s')
				);
			$save = DB::connection('mysql')->table('expense')
			->where('expense_id', $request->expense_id)
			->update($data);
			$forredirection = explode('-', $request->expense_yearandmonth);
			if($save){
				return redirect('/submitselectexpense/'.$forredirection[0].'/'.$forredirection[1])->with('message','Expense Updated Successfully');;
			}else{
				return redirect('/restaurantlist')->with('message','Oops! Something went wrong');;
			}
		}else{
				return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');;
		} 
	}
}