<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use Hash;

class Admin_controller extends Controller
{
     public function __construct(){

        $this->middleware('auth:admin');
    }


    public function home(){

        return view('admin.home');
    }

    public function edit_profile(){


        $admin=auth()->guard('admin')->id();

        $userdata=DB::table('admins')->where('id',$admin)->get();

        $data['id']=$userdata[0]->id;

        $data['image']=$userdata[0]->image;

        $data['name']=$userdata[0]->name;

        $data['email']=$userdata[0]->email;

        $data['phone_no']=$userdata[0]->phone_no;

        $data['address']=$userdata[0]->address;

        return view('admin.edit_profile',$data);
    }

    public function store_update_profile(Request $request,$id){

        $validated=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone_no'=>'required',
            'address'=>'required',
        ]);

        $name=$request->input('name');

        $email=$request->input('email');

        $phone_no=$request->input('phone_no');

        $address=$request->input('address');

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('admins')->where('id',$id)->update(['image'=>$imagename]);
        }

        DB::table('admins')->where('id',$id)->update(['name'=>$name,'email'=>$email,'phone_no'=>$phone_no,'address'=>$address,]);

        return redirect('/admin/home')->with('error','profile updated successfully!!');
    }

    public function store_change_password(Request $request,$id){

        $validated=$request->validate([
            'password'=>'required|min:6',
            'c_password'=>'required|same:password',
        ]);

        DB::table('admins')->where('id',$id)->update(['password'=>Hash::make($request->password),]);

        return redirect('/admin/home')->with('error','password changed successfully!!');
    }

    public function banner(){

        $userdata=DB::table('banner')->get();

        $data['userdata']=$userdata;

        return view('admin.banner',$data);
    }

    public function add_banner_info(){

        return view('admin.add_banner_info');
    }

    public function store_add_banner_info(Request $request){

        $validated=$request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

        $title=$request->input('title');

        $description=$request->input('description');

        $file=$request->file('image');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            $extension=$file->getClientOriginalExtension();
        
        }
        
        DB::table('banner')->insert(['image'=>$imagename,'extension'=>$extension ,'title'=>$title , 'description'=>$description]);

        return redirect('/admin/banner')->with('error','data submited successfully!!');
    }


    public function delete_banner_data($id){

        $userdata=DB::table('banner')->where('id',$id)->get();

        $image=$userdata[0]->image;

        if($image){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('banner')->where('id',$id)->delete();

        return redirect('/admin/banner')->with('error','data deleted successfully!!');
    }


    public function update_banner_data($id){

        $userdata=DB::table('banner')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['image']=$userdata[0]->image;

        $data['title']=$userdata[0]->title;

        $data['description']=$userdata[0]->description;


        return view('admin.update_banner_data',$data);
    }


    public function store_update_banner_data(Request $request,$id){

        $validated=$request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

        $title=$request->input('title');

        $description=$request->input('description');

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            $extension=$file->getClientOriginalExtension();

            if($oldimage){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('banner')->where('id',$id)->update(['image'=>$imagename , 'extension'=>$extension]);
        }

        DB::table('banner')->where('id',$id)->update(['title'=>$title,'description'=>$description]);

        return redirect('/admin/banner')->with('error','data updated successfully!!');
    }


    public function about(){

        $userdata=DB::table('about')->get();

        $data['userdata']=$userdata;

        return view('admin.about',$data);
    }


    public function add_about_info(){

        return view('admin.add_about_info');
    }

    public function store_add_about_info(Request $request){

        $validated=$request->validate([
            'sub_title'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);

        $sub_title=$request->input('sub_title');

        $title=$request->input('title');

        $description=$request->input('description');

        $file=$request->file('image');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);
        
        }
        
        DB::table('about')->insert(['image'=>$imagename,'sub_title'=>$sub_title ,'title'=>$title , 'description'=>$description]);

        return redirect('/admin/about')->with('error','data submited successfully!!');
    }


    public function delete_about_data($id){

        $userdata=DB::table('about')->where('id',$id)->get();

        $image=$userdata[0]->image;

        if($image){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('about')->where('id',$id)->delete();

        return redirect('/admin/about')->with('error','data deleted successfully!!');
    }


    public function update_about_data($id){

        $userdata=DB::table('about')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['image']=$userdata[0]->image;

        $data['sub_title']=$userdata[0]->sub_title;

        $data['title']=$userdata[0]->title;

        $data['description']=$userdata[0]->description;


        return view('admin.update_about_data',$data);
    }


    public function store_update_about_data(Request $request,$id){

        $validated=$request->validate([
            'sub_title'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);

        $sub_title=$request->input('sub_title');

        $title=$request->input('title');

        $description=$request->input('description');

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('about')->where('id',$id)->update(['image'=>$imagename]);
        }

        DB::table('about')->where('id',$id)->update(['sub_title'=>$sub_title,'title'=>$title,'description'=>$description]);

        return redirect('/admin/about')->with('error','data updated successfully!!');
    }


    public function service(){

        $userdata=DB::table('service')->get();

        $data['userdata']=$userdata;

        $service_description=DB::table('service_description')->get();

        $data['service_description']=$service_description;

        return view('admin.service',$data);
    }


    public function add_service_info(){

        return view('admin.add_service_info');
    }

    public function store_add_service_info(Request $request){

        $validated=$request->validate([
            'icon'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);

        $icon=$request->input('icon');

        $title=$request->input('title');

        $description=$request->input('description');

        $file=$request->file('image');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);
        }
        
        DB::table('service')->insert(['image'=>$imagename,'icon'=>$icon ,'title'=>$title , 'description'=>$description]);

        return redirect('/admin/service')->with('error','data submited successfully!!');
    }


    public function delete_service_data($id){

        $userdata=DB::table('service')->where('id',$id)->get();

        $image=$userdata[0]->image;

        if($image){
            unlink(public_path('/uploads/'.$image));
        }

        DB::table('service')->where('id',$id)->delete();

        return redirect('/admin/service')->with('error','data deleted successfully!!');
    }


    public function update_service_data($id){

        $userdata=DB::table('service')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['image']=$userdata[0]->image;

        $data['icon']=$userdata[0]->icon;

        $data['title']=$userdata[0]->title;

        $data['description']=$userdata[0]->description;


        return view('admin.update_service_data',$data);
    }


    public function store_update_service_data(Request $request,$id){

        $validated=$request->validate([
            'icon'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);

        $icon=$request->input('icon');

        $title=$request->input('title');

        $description=$request->input('description');

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('service')->where('id',$id)->update(['image'=>$imagename]);
        }

        DB::table('service')->where('id',$id)->update(['icon'=>$icon,'title'=>$title,'description'=>$description]);

        return redirect('/admin/service')->with('error','data updated successfully!!');
    }


    public function update_service_description_data($id){

        $userdata=DB::table('service_description')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['sub_title']=$userdata[0]->sub_title;

        $data['title']=$userdata[0]->title;

        $data['description']=$userdata[0]->description;

        return view('admin.update_service_description_data',$data);
    }

    public function store_update_service_description_data(Request $request,$id){

        $validated=$request->validate([
            'sub_title'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);

        $sub_title=$request->input('sub_title');

        $title=$request->input('title');

        $description=$request->input('description');

        DB::table('service_description')->where('id',$id)->update(['sub_title'=>$sub_title , 'title'=>$title , 'description'=>$description]);

        return redirect('/admin/service')->with('error','data updated successfully!!');
    }


    public function choose_image(){

        $userdata=DB::table('choose_image')->get();

        $data['userdata']=$userdata;

        return view('admin.choose_image',$data);
    }


    public function add_choose_image_info(){

        return view('admin.add_choose_image_info');
    }

    public function store_add_choose_image_info(Request $request){

        $validated=$request->validate([
            'title'=>'required',
        ]);

        $title=$request->input('title');

        $file=$request->file('image');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);
        
        }
        
        DB::table('choose_image')->insert(['image'=>$imagename,'title'=>$title ,]);

        return redirect('/admin/choose_image')->with('error','data submited successfully!!');
    }


    public function delete_choose_image_data($id){

        $userdata=DB::table('choose_image')->where('id',$id)->get();

        $image=$userdata[0]->image;

        if($image){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('choose_image')->where('id',$id)->delete();

        return redirect('/admin/choose_image')->with('error','data deleted successfully!!');
    }


    public function update_choose_image_data($id){

        $userdata=DB::table('choose_image')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['image']=$userdata[0]->image;

        $data['title']=$userdata[0]->title;

        return view('admin.update_choose_image_data',$data);
    }


    public function store_update_choose_image_data(Request $request,$id){

        $validated=$request->validate([
            'title'=>'required',
        ]);

        $title=$request->input('title');

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('choose_image')->where('id',$id)->update(['image'=>$imagename]);
        }

        DB::table('choose_image')->where('id',$id)->update(['title'=>$title,]);

        return redirect('/admin/choose_image')->with('error','data updated successfully!!');
    }


    public function choose(){

        $userdata=DB::table('choose')->get();

        $data['userdata']=$userdata;

        return view('admin.choose',$data);
    }


    public function add_choose_info(){

        return view('admin.add_choose_info');
    }

    public function store_add_choose_info(Request $request){

        $validated=$request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

        $title=$request->input('title');

        $description=$request->input('description');

        $file=$request->file('icon');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);
        
        }
        
        DB::table('choose')->insert(['icon'=>$imagename ,'title'=>$title , 'description'=>$description]);

        return redirect('/admin/choose')->with('error','data submited successfully!!');
    }


    public function delete_choose_data($id){

        $userdata=DB::table('choose')->where('id',$id)->get();

        $image=$userdata[0]->icon;

        if($image){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('choose')->where('id',$id)->delete();

        return redirect('/admin/choose')->with('error','data deleted successfully!!');
    }


    public function update_choose_data($id){

        $userdata=DB::table('choose')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['icon']=$userdata[0]->icon;

        $data['title']=$userdata[0]->title;

        $data['description']=$userdata[0]->description;


        return view('admin.update_choose_data',$data);
    }


    public function store_update_choose_data(Request $request,$id){

        $validated=$request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

        $title=$request->input('title');

        $description=$request->input('description');

        $file=$request->file('icon');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('choose')->where('id',$id)->update(['icon'=>$imagename]);
        }

        DB::table('choose')->where('id',$id)->update(['title'=>$title,'description'=>$description]);

        return redirect('/admin/choose')->with('error','data updated successfully!!');
    }

    public function reviews(){

        $userdata=DB::table('reviews')->get();

        $data['userdata']=$userdata;

        return view('admin.reviews',$data);
    }


    public function add_reviews_info(){

        return view('admin.add_reviews_info');
    }

    public function store_add_reviews_info(Request $request){

        $validated=$request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);

        $name=$request->input('name');

        $description=$request->input('description');

        $file=$request->file('image');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);
        
        }
        
        DB::table('reviews')->insert(['image'=>$imagename ,'name'=>$name , 'description'=>$description]);

        return redirect('/admin/reviews')->with('error','data submited successfully!!');
    }


    public function delete_reviews_data($id){

        $userdata=DB::table('reviews')->where('id',$id)->get();

        $image=$userdata[0]->image;

        if($image){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('reviews')->where('id',$id)->delete();

        return redirect('/admin/reviews')->with('error','data deleted successfully!!');
    }


    public function update_reviews_data($id){

        $userdata=DB::table('reviews')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['image']=$userdata[0]->image;

        $data['name']=$userdata[0]->name;

        $data['description']=$userdata[0]->description;


        return view('admin.update_reviews_data',$data);
    }


    public function store_update_reviews_data(Request $request,$id){

        $validated=$request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);

        $name=$request->input('name');

        $description=$request->input('description');

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('reviews')->where('id',$id)->update(['image'=>$imagename]);
        }

        DB::table('reviews')->where('id',$id)->update(['name'=>$name,'description'=>$description]);

        return redirect('/admin/reviews')->with('error','data updated successfully!!');
    }

    public function tour_type(){

        $userdata=DB::table('tour_type')->get();

        $data['userdata']=$userdata;

        return view('admin.tour_type',$data);
    }


    public function add_tour_type_info(){

        return view('admin.add_tour_type_info');
    }

    public function store_add_tour_type_info(Request $request){

        $validated=$request->validate([
            'tour_name'=>'required',
        ]);

        $tour_name=$request->input('tour_name');
        
        DB::table('tour_type')->insert(['tour_name'=>$tour_name]);

        return redirect('/admin/tour_type')->with('error','data submited successfully!!');
    }


    public function delete_tour_type_data($id){

        DB::table('tour_type')->where('id',$id)->delete();

        return redirect('/admin/tour_type')->with('error','data deleted successfully!!');
    }


    public function update_tour_type_data($id){

        $userdata=DB::table('tour_type')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['tour_name']=$userdata[0]->tour_name;

        return view('admin.update_tour_type_data',$data);
    }


    public function store_update_tour_type_data(Request $request,$id){

        $validated=$request->validate([
            'tour_name'=>'required',
        ]);

        $tour_name=$request->input('tour_name');

        DB::table('tour_type')->where('id',$id)->update(['tour_name'=>$tour_name]);

        return redirect('/admin/tour_type')->with('error','data updated successfully!!');
    }


    public function package(){

        $userdata=DB::table('package')->get();

        $data['userdata']=$userdata;

        $multi_image=DB::table('multi_image')->get();

        $data['multi_image']=$multi_image;

        $tour_type=DB::table('tour_type')->get();

        $data['tour_type']=$tour_type;

        return view('admin.package',$data);
    }

    public function add_package_info(){

        $userdata=DB::table('tour_type')->get();

        $data['userdata']=$userdata;

        return view('admin.add_package_info',$data);
    }



    public function add_section(){

        return response()->json([
            'success'=>'200',
        ]);
    }


    public function remove_section(){

        return response()->json([
            'success'=>'200',
        ]);
    }

    public function store_add_package_info(Request $request){

        $validated=$request->validate([
            
            'tour_name'=>'required',
            'tour_type'=>'required',
            'price'=>'required',
            'duration'=>'required',
            'description'=>'required',
            'detail_description'=>'required',
            'travel_type_title'=>'required',
            'travel_type_description'=>'required',
            'location'=>'required',
        ]);


        $tour_name=$request->input('tour_name');

        $tour_type_id=$request->input('tour_type');

        $price=$request->input('price');

        $duration=$request->input('duration');

        $description=$request->input('description');

        $detail_description=$request->input('detail_description');

        $location=$request->input('location');

        $file=$request->file('image');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);
        }


        DB::table('package')->insert(['tour_name'=>$tour_name,'tour_type_id'=>$tour_type_id,'price'=>$price , 'duration'=>$duration , 'location'=>$location , 'description'=>$description,'detail_description'=>$detail_description,'image'=>$imagename]);

        $package_id=DB::table('package')->max('id');

        $multifile=$request->file('multi_image');

        if($multifile){

            foreach($multifile as $m){

                $imagename1='';

                $destination_path='uploads';

                $imagename1=time().'_'.$m->getClientOriginalName();

                $m->move($destination_path,$imagename1);

                DB::table('multi_image')->insert(['multi_image'=>$imagename1 , 'package_id'=>$package_id]);
            }
        }

       

            
        

            $travel_type_title=$request->input('travel_type_title');

            $travel_type_description=$request->input('travel_type_description');

            DB::table('travel_plan')->insert(['title'=>$travel_type_title , 'description'=>$travel_type_description , 'package_id'=>$package_id]);

          /*  dd($travel_type_title);

            foreach($request->input('travel_type_titles') as $t){

                $travel_type_titles=$request->input('travel_type_titles');

                foreach($request->input('travel_type_descriptions') as $t){

                 $travel_type_descriptions=$request->input('travel_type_descriptions');

                
            }

            }
*/

             $order_details = [];

     $travel_type_titles=$request->input('travel_type_titles');



     $travel_type_descriptions=$request->input('travel_type_descriptions');



    for($i= 0; $i < count($travel_type_titles); $i++){

      $order_details[] = [


        'title' =>$travel_type_titles[$i],
        'description' => $travel_type_descriptions[$i],
        'package_id'=>$package_id,
      
      ];

   }

   DB::table('travel_plan')->insert($order_details);

        return redirect('/admin/package')->with('error','data submited successfully!!');
    }


    public function delete_package_data($id){

        $userdata=DB::table('package')->where('id',$id)->get();

        $image=$userdata[0]->image;

        if($image !=''){

            unlink(public_path('/uploads/'.$image));
        }

        $image_file=DB::table('multi_image')->where('package_id', $id)->get();

                    if($image_file !=''){

                      foreach($image_file as $pi){


                          if ($pi->multi_image!=''){

                            unlink(public_path("/uploads/".$pi->multi_image));
                          }

                      }
 
                  }

        DB::table('multi_image')->where('package_id',$id)->delete();

        DB::table('travel_plan')->where('package_id',$id)->delete();

        DB::table('package')->where('id',$id)->delete();

        return redirect('/admin/package')->with('error','data deleted successfully!!');

    }


    public function update_package_data($id){

        $userdata=DB::table('package')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['image']=$userdata[0]->image;

        $data['tour_name']=$userdata[0]->tour_name;

        $data['tour_type_id']=$userdata[0]->tour_type_id;

        $data['price']=$userdata[0]->price;

        $data['duration']=$userdata[0]->duration;

        $data['location']=$userdata[0]->location;

        $data['description']=$userdata[0]->description;

        $data['detail_description']=$userdata[0]->detail_description;

        $travel_plan_data=DB::table('travel_plan')->where('package_id',$id)->get();

        $data['travel_plan_data']=$travel_plan_data;

        $multi_image=DB::table('multi_image')->where('package_id',$id)->get();

        $data['multi_image']=$multi_image;

        return view('admin.update_package_data',$data);
    }


    public function store_update_package_data(Request $request,$id){

        $validated=$request->validate([
            
            'tour_name'=>'required',
            'tour_type'=>'required',
            'price'=>'required',
            'duration'=>'required',
            'description'=>'required',
            'detail_description'=>'required',
            'travel_type_titles'=>'required',
            'travel_type_descriptions'=>'required',
            'location'=>'required',
        ]);


        $tour_name=$request->input('tour_name');

        $tour_type_id=$request->input('tour_type');

        $price=$request->input('price');

        $duration=$request->input('duration');

        $description=$request->input('description');

        $detail_description=$request->input('detail_description');

        $location=$request->input('location');

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('package')->where('id',$id)->update(['image'=>$imagename]);
        }

        DB::table('package')->where('id',$id)->update(['tour_name'=>$tour_name,'tour_type_id'=>$tour_type_id,'price'=>$price , 'duration'=>$duration, 'location'=>$location , 'description'=>$description,'detail_description'=>$detail_description]);

        $package_id=DB::table('package')->max('id');

        $multifile=$request->file('multi_image');

        if($multifile){

            foreach($multifile as $m){

                $imagename1='';

                $destination_path='uploads';

                $imagename1=time().'_'.$m->getClientOriginalName();

                $m->move($destination_path,$imagename1);

                DB::table('multi_image')->insert(['multi_image'=>$imagename1 , 'package_id'=>$id]);
            }
        }

        DB::table('travel_plan')->where('package_id',$id)->delete();

        $order_details = [];

        $travel_type_titles=$request->input('travel_type_titles');



        $travel_type_descriptions=$request->input('travel_type_descriptions');



        for($i= 0; $i < count($travel_type_titles); $i++){

          $order_details[] = [


            'title' =>$travel_type_titles[$i],
            'description' => $travel_type_descriptions[$i],
            'package_id'=>$id,
          
          ];

       }

        DB::table('travel_plan')->insert($order_details);

        return redirect('/admin/package')->with('error','data updated successfully!!');

    }


    public function delete_package_image($id){

        $userdata=DB::table('multi_image')->where('id',$id)->get();

        $image=$userdata[0]->multi_image;

        $package_id=$userdata[0]->package_id;

        if($image){
            unlink(public_path('/uploads/'.$image));
        }

        DB::table('multi_image')->where('id',$id)->delete();

        return redirect('/admin/update_package_data/'.$package_id);
    }

    public function update_package_image($id){

        $userdata=DB::table('multi_image')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['multi_image']=$userdata[0]->multi_image;

        return view('admin.update_package_image',$data);
    }

    public function store_update_package_image(Request $request,$id){

        $file=$request->file('multi_image');

        $imagename='';

        $oldimage=$request->input('oldimage');

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('multi_image')->where('id',$id)->update(['multi_image'=>$imagename]);
        }

        $userdata=DB::table('multi_image')->where('id',$id)->get();

        $package_id=$userdata[0]->package_id;

        return redirect('/admin/update_package_data/'.$package_id);
    }


    public function aboutus_about(){

        $userdata=DB::table('aboutus_about')->get();

        $data['userdata']=$userdata;

        return view('admin.aboutus_about',$data);
    }

    public function add_aboutus_about_info(){

        return view('admin.add_aboutus_about_info');
    }


    public function store_add_aboutus_about_info(Request $request){

        $validated=$request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

        $title=$request->input('title');

        $description=$request->input('description');

        $file=$request->file('image');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);
        
        }
        
        DB::table('aboutus_about')->insert(['image'=>$imagename,'title'=>$title , 'description'=>$description]);

        return redirect('/admin/aboutus_about')->with('error','data submited successfully!!');
    }


    public function delete_aboutus_about_data($id){

        $userdata=DB::table('aboutus_about')->where('id',$id)->get();

        $image=$userdata[0]->image;

        if($image){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('aboutus_about')->where('id',$id)->delete();

        return redirect('/admin/aboutus_about')->with('error','data deleted successfully!!');
    }


    public function update_aboutus_about_data($id){

        $userdata=DB::table('aboutus_about')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['image']=$userdata[0]->image;

        $data['title']=$userdata[0]->title;

        $data['description']=$userdata[0]->description;


        return view('admin.update_aboutus_about_data',$data);
    }


    public function store_update_aboutus_about_data(Request $request,$id){

        $validated=$request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

        $title=$request->input('title');

        $description=$request->input('description');

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('aboutus_about')->where('id',$id)->update(['image'=>$imagename]);
        }

        DB::table('aboutus_about')->where('id',$id)->update(['title'=>$title,'description'=>$description]);

        return redirect('/admin/aboutus_about')->with('error','data updated successfully!!');
    }


    public function aboutus_video(){

        $userdata=DB::table('aboutus_video')->get();

        $data['userdata']=$userdata;

        return view('admin.aboutus_video',$data);
    }

    public function add_aboutus_video_info(){

        return view('admin.add_aboutus_video_info');
    }


    public function store_add_aboutus_video_info(Request $request){

        $validated=$request->validate([
            'image' =>'required|image|mimes:jpeg,png,jpg,gif',
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);

        $file=$request->file('image');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);
        
        }

        $file1=$request->file('video');

        $imagename1='';

        if($file1){

            $destination_path='uploads';

            $imagename1=time().'_'.$file1->getClientOriginalName();

            $file1->move($destination_path,$imagename1);
        
        }

        
        
        DB::table('aboutus_video')->insert(['image'=>$imagename,'video'=>$imagename1]);

        return redirect('/admin/aboutus_video')->with('error','data submited successfully!!');
    }


    public function delete_aboutus_video_data($id){

        $userdata=DB::table('aboutus_video')->where('id',$id)->get();

        $image=$userdata[0]->image;

        if($image){

            unlink(public_path('/uploads/'.$image));
        }

        $image1=$userdata[0]->video;

        if($image1){

            unlink(public_path('/uploads/'.$image1));
        }

        DB::table('aboutus_video')->where('id',$id)->delete();

        return redirect('/admin/aboutus_video')->with('error','data deleted successfully!!');
    }


    public function update_aboutus_video_data($id){

        $userdata=DB::table('aboutus_video')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['image']=$userdata[0]->image;

        $data['video']=$userdata[0]->video;

        return view('admin.update_aboutus_video_data',$data);
    }


    public function store_update_aboutus_video_data(Request $request,$id){

        $validated=$request->validate([
            'image' =>'image|mimes:jpeg,png,jpg,gif',
            'video' => 'mimes:mp4,ogx,oga,ogv,ogg,webm',
        ]);

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file !=''){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('aboutus_video')->where('id',$id)->update(['image'=>$imagename]);
        }

        $file1=$request->file('video');

        $oldvideo=$request->input('oldvideo');

        $videoname='';

        if($file1 !=''){

            $destination_path='uploads';

            $videoname=time().'_'.$file1->getClientOriginalName();

            $file1->move($destination_path,$videoname);

            if($oldvideo){

                unlink(public_path('/uploads/'.$oldvideo));
            }

            DB::table('aboutus_video')->where('id',$id)->update(['video'=>$videoname]);
        }

        return redirect('/admin/aboutus_video')->with('error','data updated successfully!!');
    }

    public function aboutus_detail(){

        $userdata=DB::table('aboutus_detail')->get();

        $data['userdata']=$userdata;

        return view('admin.aboutus_detail',$data);
    }

    public function add_aboutus_detail_info(){

        return view('admin.add_aboutus_detail_info');
    }

    public function store_add_aboutus_detail_info(Request $request){

        $validated=$request->validate([
            'count'=>'required|numeric',
            'title'=>'required',
        ]);

        $count=$request->input('count');

        $title=$request->input('title');

        DB::table('aboutus_detail')->insert(['count'=>$count , 'title'=>$title]);

        return redirect('/admin/aboutus_detail')->with('error','data submited successfully!!');
    }

    public function delete_aboutus_detail_data($id){

        DB::table('aboutus_detail')->where('id',$id)->delete();

        return redirect('/admin/aboutus_detail')->with('error','data deleted successfully!!');
    }

    public function update_aboutus_detail_data($id){

        $userdata=DB::table('aboutus_detail')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['count']=$userdata[0]->count;

        $data['title']=$userdata[0]->title;

        return view('admin.update_aboutus_detail_data',$data);
    }

    public function store_update_aboutus_detail_data(Request $request,$id){

        $validated=$request->validate([
            'count'=>'required|numeric',
            'title'=>'required',
        ]);

        $count=$request->input('count');

        $title=$request->input('title');

        DB::table('aboutus_detail')->where('id',$id)->update(['count'=>$count , 'title'=>$title]);

        return redirect('/admin/aboutus_detail')->with('error','data updated successfully!!');

    }


    public function aboutus_question(){

        $userdata=DB::table('aboutus_question')->get();

        $data['userdata']=$userdata;

        return view('admin.aboutus_question',$data);
    }

    public function add_aboutus_question_info(){

        return view('admin.add_aboutus_question_info');
    }

    public function store_add_aboutus_question_info(Request $request){

        $validated=$request->validate([
            'question'=>'required',
            'answer'=>'required',
        ]);

        $question=$request->input('question');

        $answer=$request->input('answer');

        DB::table('aboutus_question')->insert(['question'=>$question , 'answer'=>$answer]);

        return redirect('/admin/aboutus_question')->with('error','data submited successfully!!');
    }

    public function delete_aboutus_question_data($id){

        $userdata=DB::table('aboutus_question')->where('id',$id)->delete();

        return redirect('/admin/aboutus_question')->with('error','data deleted successfully!!');
    }

    public function update_aboutus_question_data($id){

        $userdata=DB::table('aboutus_question')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['question']=$userdata[0]->question;

        $data['answer']=$userdata[0]->answer;

        return view('admin.update_aboutus_question_data',$data);
    }


    public function store_update_aboutus_question_data(Request $request,$id){

        $validated=$request->validate([
            'question'=>'required',
            'answer'=>'required',
        ]);

        $question=$request->input('question');

        $answer=$request->input('answer');

        DB::table('aboutus_question')->where('id',$id)->update(['question'=>$question , 'answer'=>$answer]);

        return redirect('/admin/aboutus_question')->with('error','data updated successfully!!');
    }

    public function gallary(){

        $userdata=DB::table('gallary')->get();

        $data['userdata']=$userdata;

        return view('admin.gallary',$data);
    }

    public function add_gallary_info(){

        return view('admin.add_gallary_info');
    }

    public function store_add_gallary_info(Request $request){

        $file=$request->file('multi_image');

        $imagename='';

        if($file){

            foreach($file as $i){

                $destination_path='uploads';

                $imagename=time().'_'.$i->getClientOriginalName();

                $i->move($destination_path,$imagename);

                DB::table('gallary')->insert(['multi_image'=>$imagename]);
            }
        }

        return redirect('/admin/gallary')->with('error','data submited successfully!!');
    }

    public function delete_gallary_data($id){

        $userdata=DB::table('gallary')->where('id',$id)->get();

        $image=$userdata[0]->multi_image;

        if($image){

            unlink(public_path('/uploads/'.$image));
        }

        DB::table('gallary')->where('id',$id)->delete();

        return redirect('/admin/gallary')->with('error','data deleted successfully!!');
    }

    public function update_gallary_data($id){

        $userdata=DB::table('gallary')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['multi_image']=$userdata[0]->multi_image;

        return view('admin.update_gallary_data',$data);
    }

    public function store_update_gallary_data(Request $request,$id){

        $file=$request->file('multi_image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('gallary')->where('id',$id)->update(['multi_image'=>$imagename]);
        }



        return redirect('/admin/gallary')->with('error','data updated successfully!!');

    }

    public function footer_description(){


        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description;

        return view('admin.footer_description',$data);
    }

    public function update_footer_description_data($id){

        $userdata=DB::table('footer_description')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['image']=$userdata[0]->image;

        $data['description']=$userdata[0]->description;

        return view('admin.update_footer_description_data',$data);
    }

    public function store_update_footer_description_data(Request $request,$id){

        $validated=$request->validate([
            'description'=>'required',
        ]);

        $description=$request->input('description');

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage){

                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('footer_description')->where('id',$id)->update(['image'=>$imagename]);
        }

        DB::table('footer_description')->where('id',$id)->update(['description'=>$description]);

        return redirect('/admin/footer_description')->with('error','data updated successfully!!');
    }

    public function customer_response(){

        $userdata=DB::table('inquiry')->where('subject' , 'not like', "")->get();

        $data['userdata']=$userdata;

        return view('admin.customer_response',$data);
    }

    public function package_inquiry(){

        $userdata=DB::table('inquiry')->where('number' , 'not like', "")->get();

        $data['userdata']=$userdata;

        return view('admin.package_inquiry',$data);
    }

    public function page_banner(){

        $userdata=DB::table('page_banner')->get();

        $data['userdata']=$userdata;

        return view('admin.page_banner',$data);
    }

    public function update_page_banner_data($id){

        $userdata=DB::table('page_banner')->where('id',$id)->get();

        $data['id']=$userdata[0]->id;

        $data['title']=$userdata[0]->title;

        $data['image']=$userdata[0]->image;

        return view('admin.update_page_banner_data',$data);
    }

    public function store_update_page_banner_data(Request $request,$id){

        $validated=$request->validate([
            'title'=>'required',
        ]);

        $title=$request->input('title');

        $file=$request->file('image');

        $oldimage=$request->input('oldimage');

        $imagename='';

        if($file){

            $destination_path='uploads';

            $imagename=time().'_'.$file->getClientOriginalName();

            $file->move($destination_path,$imagename);

            if($oldimage){
                unlink(public_path('/uploads/'.$oldimage));
            }

            DB::table('page_banner')->where('id',$id)->update(['image'=>$imagename]);
        }

        DB::table('page_banner')->where('id',$id)->update(['title'=>$title]);

        return redirect('/admin/page_banner')->with('error','data submited successfully!!!');
    }


    public function delete_selected_data(Request $request)
    {
        $ids = $request->ids;

        $userdata=DB::table("gallary")->whereIn('id',explode(",",$ids))->get();

        $image=$userdata[0]->multi_image;

        if($image){
            unlink(public_path('/uploads/'.$image));
        }



        DB::table("gallary")->whereIn('id',explode(",",$ids))->delete();
        return response()->json(['success'=>"Products Deleted successfully."]);
    }


}
