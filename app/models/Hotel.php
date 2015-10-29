<?php

    class Hotel extends Eloquent
    {
        public $sort = 'Asc';

        public function createItem(){

            $hotel_name = $this->hotel_name;
            $city_id    = $this->city_id;
            $address    = $this->address;
            $result = DB::table('hotel_details')->insert(array('hotel_name' => $hotel_name,'cityid'=> $city_id, 'address' => $address));
           
            return $result;
        }
        
        public function getCities(){
           $data =  DB::table('city_details')
                    ->get();
           
           $CityArray = array();
           foreach ($data as $City)
            {
                 $CityArray[$City->cityid] = $City->city_name;
            }

            return $CityArray;
           
        }
        
        public function GetListData($value=false,$sort=false){

            if(!isset($sort) && $sort == '' && $sort == false){
               $sort = $this->sort; 
            }

           if(isset($value) && $value != '' && $value != false && $value != '0' && $value != 0){     
           $data =  DB::table('hotel_details')
                    ->join('city_details', 'city_details.cityid', '=', 'hotel_details.cityid')
                    ->where('city_details.cityid', $value)
                    ->orderBy('hotel_details.hotelid', $sort)
                    ->get();
            }else{
            $data =  DB::table('hotel_details')
                    ->join('city_details', 'city_details.cityid', '=', 'hotel_details.cityid')
                    ->orderBy('hotel_details.hotelid', $sort)
                    ->get();    
            }

           if(count($data) == 0){ 
           return "NoData";
           }else{
           $ListData = array();
           foreach ($data as $value)
            {
                 $ListData[$value->hotelid]['hotel_name'] = $value->hotel_name;
                 $ListData[$value->hotelid]['city_name'] = $value->city_name;
                 $ListData[$value->hotelid]['address'] = $value->address;
                 
            }


            return $ListData;
           }
           
        }
    }
    
    ?>