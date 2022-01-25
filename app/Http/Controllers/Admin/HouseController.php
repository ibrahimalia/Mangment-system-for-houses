<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\House;
class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses =House::all();
        return view('admin.house')->with('houses',$houses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editHouse(Request $request ,$id)
    {
        $houses = House::findOrFail($id);
        return view('admin.House-edit')->with('houses',$houses);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateHouse(Request $request, $id)
    {
        $x =House::find($id);
       
        ////////
        $x->governorate=$request->governorate;
        $x->nameHouse=$request->nameHouse;
        $x->categoryHouse=$request->categoryHouse;
        $x->typeHouse=$request->typeHouse;
        $x->site=$request->site;
        $x->price=$request->price;
        $x->typePrice=$request->typePrice;
        $x->phone=$request->phone;
        $x->description=$request->description;
        $x->bathroom=$request->bathroom;
        $x->roomNumber=$request->roomNumber;

       // add main image
       if( $x->mainImage != null){
        $x->mainImage = $request->mainImage;
        if ($request->hasFile('mainImage'))
        {
            $file = $request->file('mainImage');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('mainImage/', $filename);
            $x->mainImage = $filename;
        }
    }

        //add apartmentImage
       
        $image1 = $request->file('apartmentImage');
        if ($request->hasFile('apartmentImage')) :
            foreach ($image1 as $item1):
                $var1 = date_create();
                $time1 = date_format($var1, 'YmdHis');
                $imageName1 = $time1 . '-' . $item1->getClientOriginalName();
                $item1->move( 'apartmentImage/', $imageName1);
                $arr1[] = $imageName1;
            endforeach;
            $im1 = implode(",", $arr1);
            $x->apartmentImage=$im1;
        endif;
   
    
        //add livingRoomImage
        $image2 = $request->file('livingRoomImage');
        if ($request->hasFile('livingRoomImage')) :
            foreach ($image2 as $item2):
                $var2 = date_create();
                $time2 = date_format($var2, 'YmdHis');
                $imageName2 = $time2 . '-' . $item2->getClientOriginalName();
                $item2->move( 'livingRoomImage/', $imageName2);
                $arr2[] = $imageName2;
            endforeach;
            $im2 = implode(",", $arr2);
        
            $x->livingRoomImage=$im2;
        endif;
      

        //add bedRoomImage
        $image3 = $request->file('bedRoomImage');
        if ($request->hasFile('bedRoomImage')) :
            foreach ($image3 as $item3):
                $var3 = date_create();
                $time3 = date_format($var3, 'YmdHis');
                $imageName3 = $time3 . '-' . $item3->getClientOriginalName();
                $item3->move( 'bedRoomImage/', $imageName3);
                $arr3[] = $imageName3;
            endforeach;
            $im3 = implode(",", $arr3);
            $x->bedRoomImage=$im3;
        endif;
     

        //add kitchenImage
        $image4 = $request->file('kitchenImage');
        if ($request->hasFile('kitchenImage')) :
            foreach ($image4 as $item4):
                $var4 = date_create();
                $time4 = date_format($var4, 'YmdHis');
                $imageName4 = $time4 . '-' . $item4->getClientOriginalName();
                $item4->move( 'kitchenImage/', $imageName4);
                $arr4[] = $imageName4;
            endforeach;
            $im4 = implode(",", $arr4);
            $x->kitchenImage=$im4;
        endif;
        

        //add garageImage
        $image5 = $request->file('garageImage');
        if ($request->hasFile('garageImage')) :
            foreach ($image5 as $item5):
                $var5 = date_create();
                $time5 = date_format($var5, 'YmdHis');
                $imageName5 = $time5 . '-' . $item5->getClientOriginalName();
                $item5->move( 'garageImage/', $imageName5);
                $arr5[] = $imageName5;
            endforeach;
            $im5 = implode(",", $arr5);
            $x->garageImage=$im5;
        endif;
        
        $x->update();
        ////////
       
        return redirect('/role-house')->with('status','you are update user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteHouse(Request $request ,$id)
    {
        $House = House::findOrFail($id);
        $House->delete();
        return redirect('/role-house')->with('status','you are delete house');

    }


    public function up(Request $request, $id)
    {

    }
}
