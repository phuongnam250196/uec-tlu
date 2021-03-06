<?php

namespace App\Http\Controllers\TrangChu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\danhmuckhac\AreaModel;
use App\Models\EnterprisesModel;
use App\Models\UserModel;
use App\Models\SchoolModel;
use App\Models\StudentModel;
use App\Models\baiviet\NewsModel;
use App\Models\SpecializeModel;
use App\Models\ScienceModel;
use App\Models\CourseModel;

use App\Http\Requests\doimk\EnterRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

use DB;
use Response;
use Auth;
use Validator;
class SchoolController extends Controller
{
   	public function getSchoolPri() {
    	$tintuc = NewsModel::orderBy('id', 'desc')->paginate(5);
    	return view('frontend.nhatruong.pr_nhatruong', compact('tintuc'));
    }

    public function getSchooInfo() {
         $school_id = SchoolModel::join('uec_user', 'uec_user.school_id', '=', 'uec_school.id')
                                ->where('uec_user.id', Auth::id())->first();
        // $teach = TeacherModel::join('uec_area', 'uec_area.id', '=', 'uec_teacher.area_id')
        //                         ->join('uec_science', 'uec_science.id', '=', 'uec_teacher.science_id')
        //                         ->join('uec_user', 'uec_user.teacher_id', '=', 'uec_teacher.id')
        //                         ->where('uec_user.id', Auth::id())
        //                         ->first();
        $data = SchoolModel::join('uec_user', 'uec_school.id', '=', 'uec_user.school_id')
                ->join('uec_area', 'uec_school.area_id', '=', 'uec_area.id')
                // ->select('uec_user.id')
                ->where('uec_user.id', Auth::id()) 
                ->first();
                // dd($data, Auth::id());
        return view('frontend.nhatruong.pr_nhatruong_info', compact('school_id', 'data'));
    }
    public function getSchooChangepassword() {
        $school_id = SchoolModel::join('uec_user', 'uec_user.school_id', '=', 'uec_school.id')
                                ->where('uec_user.id', Auth::id())->first();
        return view('frontend.nhatruong.pr_nhatruong_doimatkhau', compact('school_id'));
    }
    public function postSchooChangepassword(EnterRequest $request) {
        $mk = UserModel::find(Auth::id());
        $currentPass = $request->password;
        $newPass = $request->new_pass;
        if(Hash::check($currentPass, $mk->password)) {
            $mk->password = Hash::make($request->new_pass);
            $mk->save();
            return back()->with('success', 'Đổi mật khẩu thành công');
        } else {
            return back()->with('err', 'Mật khẩu cũ không chính xác');
        }
    }

    public function getSchooInfoEdit() {
    	$area = AreaModel::all();
        $school = SchoolModel::join('uec_user', 'uec_user.school_id', '=', 'uec_school.id')
                                ->where('uec_user.id', Auth::id())
                                ->first();
    	return view('frontend.nhatruong.pr_nhatruong_info_edit', compact('area', 'school'));
    }
    public function postSchooInfoEdit(Request $request) {
        $school = SchoolModel::join('uec_user', 'uec_user.school_id', '=', 'uec_school.id')
                                ->where('uec_user.id', Auth::id())
                                ->first();
        if(!Input::get('save')) {
            $data = SchoolModel::findOrFail ($school->school_id);
            $data->update($request->all());
            return back();
        } else  {
            $data = SchoolModel::find($school->school_id);
            if(empty($request->img)) {

            } else {
                $filename = $request->img->getClientOriginalName();
                $data->school_logo = $filename;
                $data->save();
                $request->img->storeAs('school', $filename);
            }
            
            return back();
        }
    }
    public function getTaikhoanSV() {
        $science  = ScienceModel::all();
        $course = CourseModel::all();
    	$students = StudentModel::join('uec_science', 'uec_science.id', '=', 'uec_student.science_id')
                        ->join('uec_specialize', 'uec_specialize.id', '=', 'uec_student.specialize_id')
                        ->select('uec_student.id', 'student_code', 'student_name', 'science_name', 'specialize_name')
                        ->paginate(15);
                        // dd($students);
    	return view('frontend.nhatruong.pr_nhatruong_sinhvien', compact('students', 'science', 'course'));
    }

    public function getSchoolStudent() {
        $school = SchoolModel::join('uec_user', 'uec_user.school_id', '=', 'uec_school.id')
                                ->where('uec_user.id', Auth::id())
                                ->first();
       return view('frontend.nhatruong.pr_nhatruong_sinhvien_update', compact('students', 'school'));
    }
    public function postSchoolStudent() {

    }

    public function getSchoolStudentWork() {
         $school = SchoolModel::join('uec_user', 'uec_user.school_id', '=', 'uec_school.id')
                                ->where('uec_user.id', Auth::id())
                                ->first();
        return view('frontend.nhatruong.pr_nhatruong_sinhvien_update_vieclam', compact('students', 'school'));
    }
    public function postSchoolStudentWork(Request $request) {
        $rules = [
            'student_code' => 'required',
            'student_employment_name' => 'required',
            'student_company_position' => 'required',
            'student_company_name' => 'required',
        ];
        $messages = [
            'student_code.required' => 'Mã sinh viên không được để trống',
            'student_employment_name.required' => 'Tên công việc không được để trống',
            'student_company_name.required' => 'Tên công ty không được để trống',
            'student_company_position.required' => 'Tên chức vụ không được để trống',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $std = StudentModel::where('student_code', $request->student_code)->first();
            // dd($std);
            if(!empty($std)) {
                $std->student_employment_name = $request->student_employment_name;
                $std->student_company_position = $request->student_company_position;
                $std->student_company_name = $request->student_company_name;
                $std->student_timeserving = $request->student_timeserving;
                $std->student_company_address = $request->student_company_address;
                $std->save();
                return back()->with('message', 'Cập nhật công việc thành công');
            } else {
                return back()->with('message', 'Mã sinh viên không tồn tại');
            }
            // dd($std);
            
        }
    }

    public function getSchooResetpassword() {
        return view('frontend.nhatruong.pr_nhatruong_reset_pass', compact('students', 'school'));
    }
    public function postSchooResetpassword(Request $request) {
        $rules = [
            'student_code' => 'required',
            'password' => 'required',
            'password_2' => 'required | same:password',
        ];
        $messages = [
            'student_code.required' => 'Mã sinh viên không được để trống',
            'password.required' => 'Mật khẩu reset không được để trống',
            'password_2.required' => 'Mật khẩu nhập lại không được để trống',
            'password_2.same' => 'Mật khẩu nhập lại không khớp',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
        } else {
            $std = StudentModel::join('uec_user', 'uec_user.student_id', '=', 'uec_student.id')->where('student_code', $request->student_code)->select('uec_student.id')->first();
            // dd($std);
            if(!empty($std)) {
                $user = UserModel::where('student_id', $std->id)->first();
                $user->password = Hash::make($request->password);
                // dd($user);
                $user->save();
                return back()->with('message', 'Reset mật khẩu thành công');
            } else {
                return back()->with('message', 'Mã sinh viên không tồn tại');
            }
            // dd($std);
            
        }
    }

    public function getTaikhoanSVDelete() {
        
    }

    public function getReportSchool() {
    	
    	return view('frontend.nhatruong.pr_nhatruong_thongke');
    }
}
