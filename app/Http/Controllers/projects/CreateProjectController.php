<?php

namespace App\Http\Controllers\projects;

use App\Models\tblmne;
use App\Models\geosummary;
use Illuminate\Http\Request;
use App\Models\crops_related;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Validator;


class CreateProjectController extends Controller

{

    public function all(Request $request)
    {
        
        if ($request->ajax()) {
            $data = tblmne::latest()->get();
                    return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                         $btn =  '<button type="button" name="edit"   id="'.$data->id.'" class="edit btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</button>';
                         $btn .= '  <button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-eraser"></i> Delete</button>';
                         return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
    }
        return view('projects.all');
    }

    public function getprovince( $region = null)
    {
        
        if($region) {
                $province = geosummary::where('region', $region)->get();


        }
        
        return view('projects.create',['$region'=>$region, 'province'=>$province]);
    }


    public function index() {
        $mne = tblmne::all();
        return view('projects.index')->with('mnes' , $mne);
        
    }

    // public function all() {
    //     $mne = tblmne::all();
    //     return view('projects.all')->with('mne' , $mne);
        
    // }



    function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $prov =  $request->get('prov');
  
        $data = DB::table('geosummary') 
                    ->whereNotIn('region', ["","I","II","III","IVA"])
                    ->whereNotIn('prv', ["","00"])
                    ->whereNotIn('bgy', ["","000"])
                    ->where($select, $value)
                    ->groupBy($dependent)
                    ->orderByRaw('FIELD(REGION,"CAR","IVB","V","VI","VII","VIII","IX","X","XI","XII","XIII","ARMM"),province,municipality,barangay')
                    ->get();
        

        $output = '<option value="">Select '.ucfirst($dependent).' *</option>';
        foreach($data as $row)
        {
            $output .= '<option value="'. $row->$dependent .'">'.$row->$dependent.'</option>';
        }
            
        echo $output;
        }

    function fetchmunicipality(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $prov =  $request->get('prov');
  
        $data = DB::table('geosummary') 
                    ->whereNotIn('region', ["","I","II","III","IVA"])
                    ->whereNotIn('prv', ["","00"])
                    ->whereNotIn('bgy', ["","000"])
                    ->where($select, $value)
                    ->groupBy($dependent)
                    ->orderByRaw('FIELD(REGION,"CAR","IVB","V","VI","VII","VIII","IX","X","XI","XII","XIII","ARMM"),province,municipality,barangay')
                    ->get();
        

        $output = '<option value="">Select '.ucfirst($dependent).' *</option>';
        foreach($data as $row)
        {
            $output .= '<option value="'. $row->$dependent .'">'.$row->$dependent.'</option>';
        }
            
        echo $output;
        }

    function create()
    {
       $region_list = DB::table('geosummary') 
                        ->whereNotIn('region', ["","I","II","III","IVA"])
                        ->groupby('region')
                        ->orderByRaw('FIELD(REGION,"CAR","IVB","V","VI","VII","VIII","IX","X","XI","XII","XIII","ARMM"),province,municipality,barangay')
                        ->get();

        return view('projects.create')->with('region_list', $region_list);
    }
      
    function create_save(Request $request) {

        $validator = Validator::make($request->all(),[
            'region' => 'required',
            'province' => 'required',
            'municipality' => 'required',
            'barangay' => 'required',
            'year_covered' => 'required|max:4|min:4',
            'projectid' => 'required|max:30|unique:tblmnes',
            'projecttitle' => 'required|max:255',
            'individual' => 'max:6',
            'association' => 'max:3',
            'members' => 'max:6'
        ]);


        if($validator->fails()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        } else {
            $values = [
                    'region' => $request->region,
                    'province' => $request->province,
                    'municipality' => $request->municipality,
                    'barangay' => $request->barangay,
                    'year_covered' => $request->year_covered,
                    'projectid' => $request->projectid,
                    'projecttitle' => $request->projecttitle,
                    'individual' => $request->individual,
                    'association' => $request->association,
                    'members' => $request->members,
                    'remarks' => $request->remarks
            ];

            $query = DB::table('tblmnes')->insertGetId($values);

            if( $query ) {
                return response()->json(['status'=>1, 'msg'=>'New Project Successfully Added', 'id'=>$query]); 
            }
        }

}

public function addrelatedcrops(Request $request) {

    $validator = Validator::make($request->all(),[
        'nocycles' => 'required',
        'cropsprovided' => 'required',
        'noofcropspercycle' => 'required'
    ]);

    if($validator->fails()){
        return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
    } else {
        $values = [
                'parent_id' => $request->id,
                'cycle' => $request->nocycles,
                'crops' => $request->cropsprovided,
                'crops_per_cycle' => $request->noofcropspercycle,
                'planted_target' => $request->targetdateplanted,
                'total_area_planted_target' => $request->targettotalareaplanted,
                'date_harvested_target' => $request->targetdateharvested,
                'total_area_harvested_target' => $request->targettotalareaharvested,
                'planted_actual' => $request->actualdateplanted,
                'total_area_planted_actual' => $request->actualtotalareaplanted,
                'date_harvested_actual' => $request->actualdateharvested,
                'total_area_harvested_actual' => $request->actualtotalareaharvested,
                'total_produce' => $request->totalproduced,
                'total_sold' => $request->totalsold,
                'priceperkg' => $request->priceperkg,
                'totalsales' => $request->totalsales,
                'remarks' => $request->crremarks
    ];

            $query = DB::table('crops_related')->insertGetId($values);

            if( $query ) {
                return response()->json(['status'=>1, 'msg'=>'New Crops Related Successfully Added', 'id'=>$query]); 
            }

    } 
}

    public function store() {
        return view('projects.update');
    }

    public function store_save() {
        return view('projects.index');
    }

    public function show($id) {
        $mne = tblmne::find($id);

        $regions = DB::table('geosummary')
        ->select('region')
        ->distinct()
        ->whereNotNull('region')
        ->whereNotIn('region', ['','I','II','III','IVA'])
        ->orderByRaw('FIELD(REGION,"CAR","IVB","V","VI","VII","VIII","IX","X","XI","XII","XIII","ARMM")')
        ->get();


        return view('projects.update')
        ->with('mne' , $mne)
        ->with('regions' , $regions);
    }

    public function edit($id) {
        $mnes = tblmne::find($id);
        $cropsrelatedtotal = crops_related::selectRaw('sum(coalesce(total_produce)) as total_produce, sum(coalesce(total_sold)) as total_sold, sum(coalesce(totalsales)) as totalsales')
                ->groupBy('parent_id')
                ->where('parent_id', '=', $id)
                ->first();

        $cropsrelated = crops_related::where('parent_id', '=', $id)->get();

        return view('projects.selectedproject')
         ->with('mnes' , $mnes)
         ->with('cropsrelated', $cropsrelated)
         ->with('cropsrelatedtotal', $cropsrelatedtotal)
         ->with('cropsrelatedtotal', $cropsrelatedtotal);
    }

    public function editrelatedcrops_save(Request $request) {

        $validator = Validator::make($request->all(),[
            'edit_nocycles' => 'required',
            'edit_cropsprovided' => 'required',
            'edit_noofcropspercycle' => 'required'
        ]);
    
        if($validator->fails()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        } else {
            $values = [
                    'cycle' => $request->edit_nocycles,
                    'crops' => $request->edit_cropsprovided,
                    'crops_per_cycle' => $request->edit_noofcropspercycle,
                    'planted_target' => $request->edit_targetdateplanted,
                    'total_area_planted_target' => $request->edit_targettotalareaplanted,
                    'date_harvested_target' => $request->edit_targetdateharvested,
                    'total_area_harvested_target' => $request->edit_targettotalareaharvested,
                    'planted_actual' => $request->edit_actualdateplanted,
                    'total_area_planted_actual' => $request->edit_actualtotalareaplanted,
                    'date_harvested_actual' => $request->edit_actualdateharvested,
                    'total_area_harvested_actual' => $request->edit_actualtotalareaharvested,
                    'total_produce' => $request->edit_totalproduced,
                    'total_sold' => $request->edit_totalsold,
                    'priceperkg' => $request->edit_priceperkg,
                    'totalsales' => $request->edit_totalsales,
                    'remarks' => $request->edit_remarks];
    
                $query = DB::table('crops_related')
                        ->where('id', $request->id)
                        ->update($values);
    
                if( $query ) {
                    return response()->json(['status'=>1, 'msg'=>'Crops Related Successfully Updated']); 
                }
    
        } 
    }

    public function editrelatedcrops($id) {
        $cropsrelated = crops_related::find($id);
        $seletedCycle = $cropsrelated->cycle;
        $selectOption = '<option value="">Select Number of Cycles </option>';
        $selectOption .= '<option value="1st Cycle" ';
        if($seletedCycle=="1st Cycle") { $selectOption .= ' selected '; } 
        $selectOption .= ' >1st Cycle</option>';
        $selectOption .= '<option value="2nd Cycle" ';
        if($seletedCycle=="2nd Cycle") { $selectOption .= ' selected '; } 
        $selectOption .= ' >2nd Cycle</option>';
        $selectOption .= '<option value="3rd Cycle" ';
        if($seletedCycle=="3rd Cycle") { $selectOption .= ' selected '; } 
        $selectOption .= ' >3rd Cycle</option>';
        $selectOption .= '<option value="4th Cycle" ';
        if($seletedCycle=="4th Cycle") { $selectOption .= ' selected '; } 
        $selectOption .= ' >4th Cycle</option>';
        $selectOption .= '<option value="5th Cycle" ';
        if($seletedCycle=="5th Cycle") { $selectOption .= ' selected '; } 
        $selectOption .= ' >5th Cycle</option>';

           $values = [
                'selectOption'=>$selectOption, 
                'cycle'=>$cropsrelated->cycle,
                'crops'=>$cropsrelated->crops,
                'crops_per_cycle'=>$cropsrelated->crops_per_cycle,
                'planted_target'=>$cropsrelated->planted_target,
                'total_area_planted_target'=>$cropsrelated->total_area_planted_target,
                'date_harvested_target'=>$cropsrelated->date_harvested_target,
                'total_area_harvested_target'=>$cropsrelated->total_area_harvested_target,
                'planted_actual'=>$cropsrelated->planted_actual,
                'total_area_planted_actual'=>$cropsrelated->total_area_planted_actual,
                'date_harvested_actual'=>$cropsrelated->date_harvested_actual,
                'total_area_harvested_actual'=>$cropsrelated->total_area_harvested_actual,
                'total_produce'=>$cropsrelated->total_produce,
                'total_sold'=>$cropsrelated->total_sold,
                'priceperkg'=>$cropsrelated->priceperkg,
                'totalsales'=>$cropsrelated->totalsales,
                'remarks'=>$cropsrelated->remarks 
           ];
            
        return response()->json($values);
    }


    public function allcropsrelated($id)
    {
        //if ($request->ajax()) {
            $data = crops_related::where('parent_id', '=', $id)->get();
            // $data = tblmne::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                         $btn =  '<button type="button" name="edit"   id="'.$data->id.'" class="cropsrel_edit btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>';
                         $btn .= '  <button type="button" name="delete" id="'.$data->id.'" class="cropsrel_delete btn btn-danger btn-sm"><i class="fas fa-eraser"></i></button>';
                         return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);

        return view('projects.selectedproject');
    }

    public function allcropsrelatedtotal($id)
    {
           
                $a = crops_related::selectRaw('1 as `no`, "Total Produce" AS `Grand`, SUM(COALESCE(total_produce)) AS `Total`')
                    ->where('parent_id', '=' ,  $id);
                $b = crops_related::selectRaw('2 as `no`, "Total Sold" AS `Grand`, sum(coalesce(total_sold)) as `Total`')
                    ->where('parent_id', '=' ,  $id)
                    ->unionAll($a);
                $c = crops_related::selectRaw('3 as `no`, "Total Sales" AS `Grand`, sum(COALESCE(`totalsales`)) as `Total`')
                    ->where('parent_id', '=' ,  $id)
                    ->unionAll($b)
                    ->orderByRaw('no ASC')
                    ->get();
            return DataTables::of($c)->make(true);
                // $result = $c;

            // return DataTables::of($data)->make(true);
           // }
        return view('projects.selectedproject');
    }




    public function  destroy($id){
        $data = tblmne::findOrFail($id);
        $data->delete();
    }

    public function  cropsrelateddestroy($id){
        $data = crops_related::findOrFail($id);
        $data->delete();
    }

    

}
