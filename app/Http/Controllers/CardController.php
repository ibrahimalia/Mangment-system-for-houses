<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\OrederCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function card()
    {
      $card=DB::select('select * from cards');
        $user = Auth::user()->id;
        $data = DB::select('select * from oreder_cards where idUser=?', [$user]);
        if ($data == null) {
            $show = 0;
        } else {
            $show = 1;
        }
      return view('home.card',compact('card','show','data'));
    }
    public function orderCard(Request $request)
    {
       $x= new OrederCard();
       $x->idUser=$request->idUser;
        $x->nameUser=$request->nameUser;
        $x->typeUser=$request->typeUser;
        $x->idCard=$request->idCard;
        $x->cardPrice=$request->cardPrice;
        $x->CardQuantity=$request->CardQuantity;
        $x->save();
        session()->flash('card','Success Add Order...please Wait for your request to be approved ');
        return redirect('/home');
    }
    public function addHome()
    {
        $user=Auth::user()->id;
        $house=DB::select('select count(id) as num from houses where idUser=?',[$user]);
        $quantityCard=DB::select('select * from oreder_cards where typeUser="office" and idUser=?',[$user]);

        if ($quantityCard == null){
            $show=1;
        }
        else
        {
            foreach ($house as $data1){
                foreach ($quantityCard as $data2){
                    if ($data1->num == $data2->CardQuantity){
                        $show=1;
                        DB::delete('delete from oreder_cards where idUser=?',[$user]);
                    }else{
                        $show=0;
                    }
                }
            }
        }

        return view('home.AddPage',compact('show'));
    }
    public function AddDataHome(Request $request){
        $validatedData = $request->validate([
            'governorate' => ['regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/','max:15'],
            'nameHouse' => ['regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/','max:20'],
            'site' => ['regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/','max:12'],
            'price' => ['integer'],
            'phone' => ['integer'],
            'description'=>['regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/','max:100'],
            'bathroom' => ['integer'],
            'roomNumber' => ['integer'],
            'apartmentImage' => ['max:6','min:2'],
            'livingRoomImage' => ['max:6','min:2'],
            'bedRoomImage' => ['max:6','min:2'],
            'kitchenImage' => ['max:6','min:2'],
            'garageImage' => ['max:6','min:2'],
        ]);

        $x=new House();
        $x->idUser=Auth::user()->id;
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
        $x->mainImage = $request->mainImage;
        if ($request->hasFile('mainImage'))
        {
            $file = $request->file('mainImage');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('mainImage/', $filename);
            $x->mainImage = $filename;
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
        else:
            $im1 = '';
        endif;
        $x->apartmentImage=$im1;

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
        else:
            $im2 = '';
        endif;
        $x->livingRoomImage=$im2;

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
        else:
            $im3 = '';
        endif;
        $x->bedRoomImage=$im3;

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
        else:
            $im4 = '';
        endif;
        $x->kitchenImage=$im4;

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
        else:
            $im5 = '';
        endif;
        $x->garageImage=$im5;
        $x->save();
        session()->flash('card','Success Add Home ...GOOD');
        return redirect('/card');
    }
}
