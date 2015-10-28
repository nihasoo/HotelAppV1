<?php

class HotelController extends \BaseController {

    protected $model;
    
    
            
    function __construct() {
      $this->model =  new Hotel();
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $CityData = $this->model->getCities();
            $HotelData = $this->model->GetListData();

		 return View::make('ListView')
                         ->with('Cities', $CityData)
                         ->with('Hotels', $HotelData);
	}
        
        public function Search($city_id){

                    $HotelData = $this->model->GetListData($city_id);

                    $Table_design = "";
                    foreach($HotelData As $index=>$value){
                        $Table_design  .= "<tr>";
                        $Table_design  .= "<td>".$index."</td>";
                        $Table_design  .= "<td>".$value['hotel_name']."</td>";
                        $Table_design  .= "<td>".$value['city_name']."</td>";
                        $Table_design  .= "<td>".$value['address']."</td>";
                        $Table_design  .= "</tr>";
                    }

                    return Response::json($Table_design); 
        }
        /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function SavePost()
	{
            $allPostValues = Input::all();

            $this->model->hotel_name = (isset($allPostValues['hotel_name']))? $allPostValues['hotel_name']:'' ;//die;die;
            $this->model->city_id = (isset($allPostValues['city_id']))? $allPostValues['city_id']:'' ;
            $this->model->address    = (isset($allPostValues['address']))? $allPostValues['address']:'' ;
            
            $result = $this->model->createItem();
            $CityData = $this->model->getCities();
            $HotelData = $this->model->GetListData();

		 return View::make('ListView')
                         ->with('Cities', $CityData)
                         ->with('Hotels', $HotelData);
		
	}
        

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id=false)
	{
            $CityData = $this->model->getCities();
		return View::make('AddHotelDetails')
                ->with('Cities', $CityData);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
