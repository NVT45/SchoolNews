<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddScheduleRequest;
use Illuminate\Http\Request;
use App\Models\Schedule;
class AdminSchedulesController extends Controller
{
    //
    public function getSchedule(){
        $data['schedules'] = Schedule::all();
        return view('admin.schedules.index',$data);
    }
    public function postSchedule(AddScheduleRequest $request){
        $filename = $request->file('sche_file')
                ->getClientOriginalName();
        $schedules = new Schedule;
        $schedules->schedule_title = $request->title;
        $schedules->schedule_file = $filename;
        $schedules->save();
        $request->file('sche_file')->storeAs('document',$filename);
        return back();
    }
    public function getEditSchedule($id){
        $data['schedule'] = Schedule::findOrFail($id);
        return view('admin.schedules.edit',$data);
    }
    public function postEditSchedule(Request $request,$id){
        $schedule = new Schedule;
        $array['schedule_title'] = $request->title;
        if($request->hasFile('sche_file')){
            $filename = $request->file('sche_file')
                    ->getClientOriginalName() . '.' . $request->file('sche_file')
                    ->getClientOriginalExtension();
            $array['sche_file'] = $filename;
            $request->sche_file->storeAs('document',$filename);
        }
        $schedule::where('schedule_id',$id)->update($array);
        return redirect('admin/schedule');
    }
    public function getDeleteSchedule($id){
        Schedule::destroy($id);
        return back();
    }
}
