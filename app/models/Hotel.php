<?php

    class Hotel extends Eloquent
    {

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
        
        public function GetListData($value=false){

           if(isset($value) && $value != '' && $value != false){ 
           $data =  DB::table('hotel_details')
                    ->join('city_details', 'city_details.cityid', '=', 'hotel_details.cityid')
                    ->where('city_details.cityid', $value)  
                    ->get();
            }else{
            $data =  DB::table('hotel_details')
                    ->join('city_details', 'city_details.cityid', '=', 'hotel_details.cityid')
                    ->get();    
            }

            
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
    
    ?>