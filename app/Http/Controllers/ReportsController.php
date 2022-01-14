<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Entity\Reports;
	use App\Http\Controllers\Controller;
	use App\Models\Report;
	use App\Models\User;
	use App\Models\ReportCates;

	//部門情報管理に関するコントローラクラス
	class ReportsController extends Controller {
		//レポートリスト画面表示処理
		public function showList(Request $request) {
			$templatePath = "reports.list";
			$assign = [];
			$reportList = Report::all();
			$userList = User::all();
			foreach($userList as  $user){
				$users[$user->id] = $user;
			}
			$assign['users'] = $users;
			$assign["reportList"] = $reportList;
			return view($templatePath, $assign);
		}

		//レポート情報登録画面表示処理
		public function goAdd(Request $request) {
			$templatePath = "reports.add";
			$assign = [];
			$assign['categoryes'] = ReportCates::all();
			$assign["reports"] = new Reports();
			return view($templatePath, $assign);
		}

		//レポート情報登録処理
		public function add(Request $request) {
			$rpDate = $request->input("rpDate");
			$rpTimeFrom = $request->input("rpTimeFrom");
			$rpTimeTo = $request->input("rpTimeTo");
			$reportcateId = $request->input("reportcateId");
			$rpContent = $request->input("rpContent");
			$userId = $request->session()->get('id');
			//insert
			$report = new Report();
			$report->rp_date = $rpDate;
			$report->rp_time_from = $rpTimeFrom;
			$report->rp_time_to = $rpTimeTo;
			$report->rp_content = $rpContent;
			$report->rp_created_at = date('Y-m-d H:i:s',time());
			$report->reportcate_id = $reportcateId;
			$report->user_id = "$userId";

			if ($report->save()) {
			$response = redirect("/reports/showList")->with("flashMsg", "レポートID".$reportcateId."でレポート情報を登録しました。");
			}
			return $response;
		}

		public function showDetail(Request $request, int $id){
			$templatePath = "reports.detail";
			$assign = [];
			$reportList = Report::find($id);

			$assign['user'] = User::find($reportList->user_id);
			$assign["reportList"] = $reportList;
			return view($templatePath, $assign);
		}

		//レポート情報編集画面表示処理
		public function prepareEdit(Request $request, int $rpId) {
			$templatePath = "reports.edit";
			$assign = [];

			$assign['categoryes'] = ReportCates::all();
			$report = Report::find($rpId);
			$assign['report'] = $report;
			return view($templatePath, $assign);
		}

		//レポート情報編集処理
		public function edit(Request $request) {
			$isRedirect = false;
			$assign = [];
			$id = $request->input("id");
			$rpDate = $request->input("rpDate");
			$rpTimeFrom = $request->input("rpTimeFrom");
			$rpTimeTo = $request->input("rpTimeTo");
			$reportcateId = $request->input("reportcateId");
			$rpContent = $request->input("rpContent");
			$userId = $request->session()->get('id');
			$report = Report::find($id);
			$assign['categoryes'] = ReportCates::all();
	
			$report->rp_date = $rpDate;
			$report->rp_time_from = $rpTimeFrom;
			$report->rp_time_to = $rpTimeTo;
			$report->rp_content = $rpContent;
			$report->rp_created_at = date('Y-m-d H:i:s',time());
			$report->reportcate_id = $reportcateId;
			$report->user_id = "$userId";
			if($report->save()) {
				$response = redirect("/reports/showDetail/{$id}")->with("flashMsg", "部門ID".$id."の部門情報を更新しました。");
			}
			return $response;
		}
		
		//レポート情報削除確認画面表示処理
		public function confirmDelete(Request $request, int $rpId) {
			$templatePath = "reports.confirmDelete";
			$assign = [];
			$report = Report::find($rpId);
			$assign['category'] = User::find($report->user_id);
			$assign['report'] = $report;
			return view($templatePath, $assign);
		}
		
		/*レポート情報削除処理。    */
		public function delete(Request $request) {
			$deleteId = $request->input("deleteId");
			Report::where('id', $deleteId)->delete();
			$response = redirect("/reports/showList")->with("flashMsg", "部門ID".$deleteId."の部門情報を削除しました。");
			return $response;
		}
	}