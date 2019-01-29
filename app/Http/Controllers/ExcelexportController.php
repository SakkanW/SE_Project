<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Excel;
use Input;
use App\Information;
use App\Treatment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use App\Export\UsersExport;


class ExcelexportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $report_datas = Treatment::get();

		return view('export.export_excel')->with('report_datas',$report_datas);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function exportExcel($type)
	{
		//$excel_reports = Treatment::select('type_service','type_nisit','consult_prob')->get()->toArray();
        

		

		
		// $data_sheet = [];
		// $data_sheet[0]=$count_alone =Treatment::where('type_service','=','การปรึกษาเดี่ยว')->count();
		// $data_sheet[1]=$count_group =Treatment::where('type_service','=','การปรึกษากลุ่ม')->count();
		// $data_sheet[2]=$count_relaxroom =Treatment::where('type_service','=','การใช้ห้องผ่อนคลาย')->count();


		// return \Excel::create(time(), function($excel) use($data_sheet)
		// {
		// 	$excel->sheet('Report', function($sheet) use($data_sheet)
		// 	{
		// 		$sheet->$data_sheet;
					
		// 	});
		// })->download($type);

		
		// $spreadsheet->getActiveSheet()
		// 	->fromArray(
		// 		$arrayData,  // The data to set
		// 		NULL,        // Array values with this value will not be set
		// 		'C3'         // Top left coordinate of the worksheet range where
		// 					 //    we want to set these values (default is A1)
		// 	);
		return \Excel::create('Excel_reports', function($excel) 
		{
			$excel->sheet('alltreatment', function($sheet) {
                //$results= Treatment::get();
                $results = Treatment::with('information')->get();
                $headings = array('informations_id','ชื่อ-สกุล','เพศ','สถานภาพ','คณะ','ชั้นปี','ประเภทบริการ', 'ประเภทนิสิต', 'ปัญหา', 'ระดับปัญหา','การช่วยเหลือ','ผลการรักษา','ประวัติการรักษา','เดือน','ปี','created_at','updated_at');
                foreach($results as $result) 
                {
                    //dd($result->information->firstname);
                    $data[] = array(
                        
                        $result->informations_id,
                        $result->information->firstname."  ".$result->information->lastname,
                        $result->information->sex,
                        $result->information->status,
                        $result->information->faculty,
                        $result->information->years,
                        $result->type_service,
                        $result->type_nisit,
                        $result->consult_prob,
                        $result->consult_level,
                        $result->helping,
                        $result->result,
                        $result->information->his_psychiatry,
                        Carbon::parse($result->created_at)->format('m'),
                        Carbon::parse($result->created_at)->format('Y'),
                        Carbon::parse($result->created_at)->format('d-m-Y'),
                        Carbon::parse($result->updated_at)->format('d-m-Y'),
                    );
                    
                }
                $sheet->fromArray($data, null, 'A1', false, false);  
                $sheet->prependRow(1, $headings);
                $sheet->setAutoFilter();  
            });
            

        //     $excel->sheet('allcount_prob', function($sheet) 
		// 	{
        //         $count_alone =Treatment::where('type_service','=','การปรึกษาเดี่ยว')->count();
		// $count_group =Treatment::where('type_service','=','การปรึกษากลุ่ม')->count();
		// $count_relaxroom =Treatment::where('type_service','=','การใช้ห้องผ่อนคลาย')->count();
        // $count_ebook =Treatment::where('type_service','=','บริการหนังสือสารสนเทศ')->count();

		// $count_New = Treatment::where('type_nisit','=','New')->count();
		// $count_Follow=Treatment::where('type_nisit','=','Follow')->count();

		// $count_Home =Treatment::where('consult_prob','=','Home')
		// ->where('type_nisit','=','New')->count();
		// $count_Education =Treatment::where('consult_prob','=','Education')
		// ->where('type_nisit','=','New')->count();
		// $count_Love =Treatment::where('consult_prob','=','Love')
		// ->where('type_nisit','=','New')->count();
		// $count_Stress =Treatment::where('consult_prob','=','Stress')
		// ->where('type_nisit','=','New')->count();
		// $count_Drug =Treatment::where('consult_prob','=','Drug')
		// ->where('type_nisit','=','New')->count();
		// $count_Health =Treatment::where('consult_prob','=','Health')
		// ->where('type_nisit','=','New')->count();
		// $count_Family =Treatment::where('consult_prob','=','Family')
		// ->where('type_nisit','=','New')->count();
		// $count_Friend =Treatment::where('consult_prob','=','Friend')
		// ->where('type_nisit','=','New')->count();
		// $count_Suicide =Treatment::where('consult_prob','=','Suicide')
		// ->where('type_nisit','=','New')->count();
		// $count_Depress =Treatment::where('consult_prob','=','Depress')
		// ->where('type_nisit','=','New')->count();
		// $count_Self =Treatment::where('consult_prob','=','Self')
		// ->where('type_nisit','=','New')->count();
		// $count_Sleep =Treatment::where('consult_prob','=','Sleep')
		// ->where('type_nisit','=','New')->count();
		
		// $count_gen =Treatment::where('consult_level','=','ปกติ')->count();
		// $count_pr =Treatment::where('consult_level','=','มีปัญหา')->count();
		// $count_hi =Treatment::where('consult_level','=','รุนแรง')->count();

		// $count_consult =Treatment::where('helping','=','ให้คำปรึกษา')->count();
		// $count_forword =Treatment::where('helping','=','ส่งต่อผู้เชี่ยวชาญ')->count();
		

		// $count_stop =Treatment::where('result','=','ยุติ')->count();
        // $count_con =Treatment::where('result','=','นัดต่อ')->count();
		

        //         $arrayData = [
        //             // [NULL, 'Home', 'Education', 'Love','Stress','Drug','Health','Family','Friend','Suicide','Depress','Self','Sleep'],
        //             ['จำนวนประเภท', $count_Home, $count_Education, $count_Love,$count_Stress,$count_Drug,$count_Health,$count_Family,$count_Friend,$count_Suicide,$count_Depress,$count_Self,$count_Sleep],
        //             // [NULL, 'Home', 'Education'],
        //             //['Q3',   52,   61,   69],
        //             // ['Q4',   30,   32,    0],
        //         ];
        //         $headings = array(NULL, 'Home', 'Education', 'Love','Stress','Drug','Health','Family','Friend','Suicide','Depress','Self','Sleep');
        //             $sheet->fromArray($arrayData, null, 'A1', false, false);
        //             $sheet->prependRow(1, $headings);
		// 	});
		})->download($type);


    }
    
    public function exportYear($type,Request $request)
    {

        $year = $request->input('year');

        return \Excel::create('Excel_reports', function($excel) 
		{
			
                    
            $excel->sheet($year, function($sheet) 
			{
                $count_alone =Treatment::where('type_service','=','การปรึกษาเดี่ยว')->count();
                $count_group =Treatment::where('type_service','=','การปรึกษากลุ่ม')->count();
                $count_relaxroom =Treatment::where('type_service','=','การใช้ห้องผ่อนคลาย')->count();
                $count_ebook =Treatment::where('type_service','=','บริการหนังสือสารสนเทศ')->count();

                $count_New = Treatment::where('type_nisit','=','New')->count();
                $count_Follow=Treatment::where('type_nisit','=','Follow')->count();

                $count_Home =Treatment::where('consult_prob','=','Home')
                ->where('type_nisit','=','New')->count();
                $count_Education =Treatment::where('consult_prob','=','Education')
                ->where('type_nisit','=','New')->count();
                $count_Love =Treatment::where('consult_prob','=','Love')
                ->where('type_nisit','=','New')->count();
                $count_Stress =Treatment::where('consult_prob','=','Stress')
                ->where('type_nisit','=','New')->count();
                $count_Drug =Treatment::where('consult_prob','=','Drug')
                ->where('type_nisit','=','New')->count();
                $count_Health =Treatment::where('consult_prob','=','Health')
                ->where('type_nisit','=','New')->count();
                $count_Family =Treatment::where('consult_prob','=','Family')
                ->where('type_nisit','=','New')->count();
                $count_Friend =Treatment::where('consult_prob','=','Friend')
                ->where('type_nisit','=','New')->count();
                $count_Suicide =Treatment::where('consult_prob','=','Suicide')
                ->where('type_nisit','=','New')->count();
                $count_Depress =Treatment::where('consult_prob','=','Depress')
                ->where('type_nisit','=','New')->count();
                $count_Self =Treatment::where('consult_prob','=','Self')
                ->where('type_nisit','=','New')->count();
                $count_Sleep =Treatment::where('consult_prob','=','Sleep')
                ->where('type_nisit','=','New')->count();
                
                $count_gen =Treatment::where('consult_level','=','ปกติ')->count();
                $count_pr =Treatment::where('consult_level','=','มีปัญหา')->count();
                $count_hi =Treatment::where('consult_level','=','รุนแรง')->count();

                $count_consult =Treatment::where('helping','=','ให้คำปรึกษา')->count();
                $count_forword =Treatment::where('helping','=','ส่งต่อผู้เชี่ยวชาญ')->count();
                

                $count_stop =Treatment::where('result','=','ยุติ')->count();
                $count_con =Treatment::where('result','=','นัดต่อ')->count();
		

                $arrayData = [
                    // [NULL, 'Home', 'Education', 'Love','Stress','Drug','Health','Family','Friend','Suicide','Depress','Self','Sleep'],
                    ['จำนวนประเภท', $count_Home, $count_Education, $count_Love,$count_Stress,$count_Drug,$count_Health,$count_Family,$count_Friend,$count_Suicide,$count_Depress,$count_Self,$count_Sleep],
                    // [NULL, 'Home', 'Education'],
                    //['Q3',   52,   61,   69],
                    // ['Q4',   30,   32,    0],
                ];
                $sheet->mergeCells('A1:C1');
                $headings = array(NULL, 'Home', 'Education', 'Love','Stress','Drug','Health','Family','Friend','Suicide','Depress','Self','Sleep',NULL,);
                    $sheet->fromArray($arrayData, null, 'A2', false, false);
                    $sheet->prependRow(2, $headings);
			});
            

		})->download($type);
    }




    public function testChart()
    {
        $count_alone =Treatment::where('type_service','=','การปรึกษาเดี่ยว')->count();
		$count_group =Treatment::where('type_service','=','การปรึกษากลุ่ม')->count();
		$count_relaxroom =Treatment::where('type_service','=','การใช้ห้องผ่อนคลาย')->count();
        $count_ebook =Treatment::where('type_service','=','บริการหนังสือสารสนเทศ')->count();

		$count_New = Treatment::where('type_nisit','=','New')->count();
		$count_Follow=Treatment::where('type_nisit','=','Follow')->count();

		$count_Home =Treatment::where('consult_prob','=','Home')
		->where('type_nisit','=','New')->count();
		$count_Education =Treatment::where('consult_prob','=','Education')
		->where('type_nisit','=','New')->count();
		$count_Love =Treatment::where('consult_prob','=','Love')
		->where('type_nisit','=','New')->count();
		$count_Stress =Treatment::where('consult_prob','=','Stress')
		->where('type_nisit','=','New')->count();
		$count_Drug =Treatment::where('consult_prob','=','Drug')
		->where('type_nisit','=','New')->count();
		$count_Health =Treatment::where('consult_prob','=','Health')
		->where('type_nisit','=','New')->count();
		$count_Family =Treatment::where('consult_prob','=','Family')
		->where('type_nisit','=','New')->count();
		$count_Friend =Treatment::where('consult_prob','=','Friend')
		->where('type_nisit','=','New')->count();
		$count_Suicide =Treatment::where('consult_prob','=','Suicide')
		->where('type_nisit','=','New')->count();
		$count_Depress =Treatment::where('consult_prob','=','Depress')
		->where('type_nisit','=','New')->count();
		$count_Self =Treatment::where('consult_prob','=','Self')
		->where('type_nisit','=','New')->count();
		$count_Sleep =Treatment::where('consult_prob','=','Sleep')
		->where('type_nisit','=','New')->count();
		
		$count_gen =Treatment::where('consult_level','=','ปกติ')->count();
		$count_pr =Treatment::where('consult_level','=','มีปัญหา')->count();
		$count_hi =Treatment::where('consult_level','=','รุนแรง')->count();

		$count_consult =Treatment::where('helping','=','ให้คำปรึกษา')->count();
		$count_forword =Treatment::where('helping','=','ส่งต่อผู้เชี่ยวชาญ')->count();
		

		$count_stop =Treatment::where('result','=','ยุติ')->count();
        $count_con =Treatment::where('result','=','นัดต่อ')->count();
        
        // $users = Treatment::select('id', 'created_at')
        // ->get()
        // ->groupBy(function($date) {
        //     //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
        //     return Carbon::parse($date->created_at)->format('m'); // grouping by months
        // });

        // $usermcount = [];
        // $userArr = [];

        // foreach ($users as $key => $value) {
        //     $usermcount[(int)$key] = count($value);
        // }

        // for($i = 1; $i <= 12; $i++){
        //     if(!empty($usermcount[$i])){
        //         $userArr[$i] = $usermcount[$i];    
        //     }else{
        //         $userArr[$i] = 0;    
        //     }
        // }


        $excel = new \PHPExcel();

        $excel->createSheet();
        $excel->setActiveSheetIndex(1);
       

        $excel->getActiveSheet()->setTitle('Worksheet');

        $objWorksheet = $excel->getActiveSheet();
        $objWorksheet->fromArray(
                array(
                    array('', 'Home', 'Education', 'Love','Stress','Drug','Health','Family','Friend','Suicide','Depress','Self','Sleep'),
                    array('จำนวนประเภท', $count_Home, $count_Education, $count_Love,$count_Stress,$count_Drug,$count_Health,$count_Family,$count_Friend,$count_Suicide,$count_Depress,$count_Self,$count_Sleep),
                    // array('Feb', 64, 54, 62),
                    // array('Mar', 62, 57, 63),
                    // array('Apr', 21, 62, 59),
                    // array('May', 11, 75, 60),
                    // array('Jun', 1, 75, 57),
                    // array('Jul', 1, 79, 56),
                    // array('Aug', 1, 79, 59),
                    // array('Sep', 10, 75, 60),
                    // array('Oct', 40, 68, 63),
                    // array('Nov', 69, 62, 64),
                    // array('Dec', 89, 57, 66),
                )
        );

        $dataseriesLabels1 = array(
            new \PHPExcel_Chart_DataSeriesValues('String', 'Grafico!$B$1', NULL, 1), //  Temperature
        );
        $dataseriesLabels2 = array(
            new \PHPExcel_Chart_DataSeriesValues('String', 'Grafico!$C$1', NULL, 1), //  Rainfall
        );
        $dataseriesLabels3 = array(
            new \PHPExcel_Chart_DataSeriesValues('String', 'Grafico!$D$1', NULL, 1), //  Humidity
        );

        $xAxisTickValues = array(
            new \PHPExcel_Chart_DataSeriesValues('String', 'Grafico!$A$2:$A$13', NULL, 12), //  Jan to Dec
        );

        $dataSeriesValues1 = array(
            new \PHPExcel_Chart_DataSeriesValues('Number', 'Grafico!$B$2:$B$13', NULL, 12),
        );

        //  Build the dataseries
        $series1 = new \PHPExcel_Chart_DataSeries(
                \PHPExcel_Chart_DataSeries::TYPE_BARCHART, // plotType
                \PHPExcel_Chart_DataSeries::GROUPING_CLUSTERED, // plotGrouping
                range(0, count($dataSeriesValues1) - 1), // plotOrder
                $dataseriesLabels1, // plotLabel
                $xAxisTickValues, // plotCategory
                $dataSeriesValues1                              // plotValues
        );
        //  Set additional dataseries parameters
        //      Make it a vertical column rather than a horizontal bar graph
        $series1->setPlotDirection(\PHPExcel_Chart_DataSeries::DIRECTION_COL);

        $dataSeriesValues2 = array(
            new \PHPExcel_Chart_DataSeriesValues('Number', 'Grafico!$C$2:$C$13', NULL, 12),
        );

        //  Build the dataseries
        $series2 = new \PHPExcel_Chart_DataSeries(
                \PHPExcel_Chart_DataSeries::TYPE_LINECHART, // plotType
                \PHPExcel_Chart_DataSeries::GROUPING_STANDARD, // plotGrouping
                range(0, count($dataSeriesValues2) - 1), // plotOrder
                $dataseriesLabels2, // plotLabel
                NULL, // plotCategory
                $dataSeriesValues2                              // plotValues
        );

        $dataSeriesValues3 = array(
            new \PHPExcel_Chart_DataSeriesValues('Number', 'Grafico!$D$2:$D$13', NULL, 12),
        );

        //  Build the dataseries
        $series3 = new \PHPExcel_Chart_DataSeries(
                \PHPExcel_Chart_DataSeries::TYPE_AREACHART, // plotType
                \PHPExcel_Chart_DataSeries::GROUPING_STANDARD, // plotGrouping
                range(0, count($dataSeriesValues2) - 1), // plotOrder
                $dataseriesLabels3, // plotLabel
                NULL, // plotCategory
                $dataSeriesValues3                              // plotValues
        );


        //  Set the series in the plot area
        $plotarea = new \PHPExcel_Chart_PlotArea(NULL, array($series1, $series2, $series3));
        $legend = new \PHPExcel_Chart_Legend(\PHPExcel_Chart_Legend::POSITION_RIGHT, NULL, false);
        $title = new \PHPExcel_Chart_Title('รายงานจำนวนประเภทผู้เข้ารับคำปรึกษา');

        //  Create the chart
        $chart = new \PHPExcel_Chart(
                'chart1', // name
                $title, // title
                $legend, // legend
                $plotarea, // plotArea
                true, // plotVisibleOnly
                0, // displayBlanksAs
                NULL, // xAxisLabel
                NULL            // yAxisLabel
        );
       

        //  Set the position where the chart should appear in the worksheet
        $chart->setTopLeftPosition('F2');
        $chart->setBottomRightPosition('O16');
        
        

        //  Add the chart to the worksheet
        $objWorksheet->addChart($chart);
        

        ob_end_clean();

        header('Content-type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$properties_arr['Listado'].'.xlsx"');
        header('Cache-Control: max-age=0');
      
        $writer = new \PHPExcel_Writer_Excel2007($excel);
        $writer->setIncludeCharts(TRUE);
        //$writer = \PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        //$writer->setIncludeCharts(TRUE);
        

        // // Save the file.
         $writer->save('php://output');
        //$url = Router::url('/outputfiles/', true).'Listado.xlsx';
        //$this->set(array('url' =>$url,'_serialize' => array('url')));
		

		//$writer->download($type);
		
    }

	

	

}
