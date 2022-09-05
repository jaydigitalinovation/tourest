<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class home_controller extends Controller
{
    public function index(){

        $banner_data=DB::table('banner')->get();

        $data['banner_data']=$banner_data;



        $about_data=DB::table('about')->get();

        $data['about_image']=$about_data[0]->image;

        $data['about_sub_title']=$about_data[0]->sub_title;

        $data['about_title']=$about_data[0]->title;

        $data['about_description']=$about_data[0]->description;



        $service_data=DB::table('service')->take(3)->get();

        $data['service_data']=$service_data;

        $package_data=DB::table('package')->get();

        $data['package_data']=$package_data;

        $tour_type_data=DB::table('tour_type')->get();

        $data['tour_type_data']=$tour_type_data;



        $choose_image=DB::table('choose_image')->get();



        $data['choose_image_title']=$choose_image[0]->title;

        $data['choose_image_image']=$choose_image[0]->image;



        $choose_data=DB::table('choose')->get();

        $data['choose_data']=$choose_data;

        $review_data=DB::table('reviews')->get();

        $data['review_data']=$review_data;


        //common data

        $admin_data=DB::table('admins')->get();

        $data['admin_data']=$admin_data;

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description;

        $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

        $data['footer_gallary']=$footer_gallary;



        return view('index' , $data);
    }

    public function about_us(){

        $aboutus_about=DB::table('aboutus_about')->get();

        $data['aboutus_about_image']=$aboutus_about[0]->image;

        $data['aboutus_about_title']=$aboutus_about[0]->title;

        $data['aboutus_about_description']=$aboutus_about[0]->description;



        $aboutus_video=DB::table('aboutus_video')->get();

        $data['aboutus_video_image']=$aboutus_video[0]->image;

        $data['aboutus_video_video']=$aboutus_video[0]->video;



        $aboutus_detail=DB::table('aboutus_detail')->get();

        $data['aboutus_detail']=$aboutus_detail;


        $aboutus_question=DB::table('aboutus_question')->get();

        $data['aboutus_question']=$aboutus_question;



        $banner_data=DB::table('page_banner')->where('page_name','about_us')->get();

        $data['page_banner_title']=$banner_data[0]->title;

        $data['page_banner_image']=$banner_data[0]->image;



        //common data

        $admin_data=DB::table('admins')->get();

        $data['admin_data']=$admin_data;

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description;

        $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

        $data['footer_gallary']=$footer_gallary;

        return view('about_us',$data);
    }

    public function service(){


        $service_data=DB::table('service')->get();

        $data['service_data']=$service_data;

        $service_description=DB::table('service_description')->get();

        $data['service_description_sub_title']=$service_description[0]->sub_title;

        $data['service_description_title']=$service_description[0]->title;

        $data['service_description_description']=$service_description[0]->description;


        $banner_data=DB::table('page_banner')->where('page_name','service')->get();

        $data['page_banner_title']=$banner_data[0]->title;

        $data['page_banner_image']=$banner_data[0]->image;



        //common data

        $admin_data=DB::table('admins')->get();

        $data['admin_data']=$admin_data;

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description;

        $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

        $data['footer_gallary']=$footer_gallary;

        return view('service',$data);
    }

    public function package(){

        $pd=1;

        $data['pd']=$pd;


        $package_data=DB::table('package')->paginate(2);

        $data['package_data']=$package_data;

        $tour_type_data=DB::table('tour_type')->get();

        $data['tour_type_data']=$tour_type_data;


        $banner_data=DB::table('page_banner')->where('page_name','package')->get();

        $data['page_banner_title']=$banner_data[0]->title;

        $data['page_banner_image']=$banner_data[0]->image;


        //common data

        $admin_data=DB::table('admins')->get();

        $data['admin_data']=$admin_data;

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description;

        $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

        $data['footer_gallary']=$footer_gallary;

        return view('package',$data);
    }

    public function package_detail($id){

        $package_data=DB::table('package')->where('id',$id)->get();

        $data['package_data']=$package_data;

        $travel_plan_data=DB::table('travel_plan')->where('package_id',$id)->get();

        $data['travel_plan_data']=$travel_plan_data;


        $banner_data=DB::table('page_banner')->where('page_name','package_detail')->get();

        $data['page_banner_title']=$banner_data[0]->title;

        $data['page_banner_image']=$banner_data[0]->image;



        $slider_image=DB::table('multi_image')->where('package_id',$id)->inRandomOrder()->limit(3)->get();

        $data['slider_image']=$slider_image;




        $description_image=DB::table('multi_image')->where('package_id',$id)->inRandomOrder()->limit(2)->get();

        $data['description_image']=$description_image;

        $description_image1=DB::table('multi_image')->where('package_id',$id)->inRandomOrder()->limit(1)->get();

        $data['description_image1']=$description_image1;



        $gallary_image=DB::table('multi_image')->where('package_id',$id)->inRandomOrder()->limit(6)->get();

        $data['gallary_image']=$gallary_image;

       /* $gallary_image2=DB::table('multi_image')->where('package_id',$id)->inRandomOrder()->limit(1)->get();

        $data['gallary_image2']=$gallary_image2;

        $gallary_image3=DB::table('multi_image')->where('package_id',$id)->inRandomOrder()->limit(2)->get();

        $data['gallary_image3']=$gallary_image3;

        $gallary_image4=DB::table('multi_image')->where('package_id',$id)->inRandomOrder()->limit(1)->get();

        $data['gallary_image4']=$gallary_image4;
*/


        //common data

        $admin_data=DB::table('admins')->get();

        $data['admin_data']=$admin_data;

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description;

        $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

        $data['footer_gallary']=$footer_gallary;

        return view('package_detail',$data);
    }

    public function gallary(){


        $gallary_data=DB::table('gallary')->get();

        $data['gallary_data']=$gallary_data;


        $banner_data=DB::table('page_banner')->where('page_name','gallary')->get();

        $data['page_banner_title']=$banner_data[0]->title;

        $data['page_banner_image']=$banner_data[0]->image;


        //common data

        $admin_data=DB::table('admins')->get();

        $data['admin_data']=$admin_data;

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description;

        $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

        $data['footer_gallary']=$footer_gallary;

        return view('gallary',$data);
    }

    public function contact(){




        $banner_data=DB::table('page_banner')->where('page_name','contact')->get();

        $data['page_banner_title']=$banner_data[0]->title;

        $data['page_banner_image']=$banner_data[0]->image;



        //common data

        $admin_data=DB::table('admins')->get();

        $data['admin_data']=$admin_data;

        $footer_description=DB::table('footer_description')->get();

        $data['footer_description']=$footer_description;

        $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

        $data['footer_gallary']=$footer_gallary;

        return view('contact',$data);
    }

    public function inquiry(Request $request){

        $hidden=$request->input('hidden');

        if($hidden == 0){

            $validated=$request->validate([
                'name'=>'required',
                'email'=>'required|email',
                'subject'=>'required',
                'message'=>'required',
            ]);

            $name=$request->input('name');

            $email=$request->input('email');

            $subject=$request->input('subject');

            $message=$request->input('message');

            DB::table('inquiry')->insert(['name'=>$name , 'email'=>$email , 'number'=>NULL , 'subject'=>$subject , 'message'=>$message]);

            return redirect('/contact')->with('error','response submitted successfully!!');

        }
        else{

            $validated=$request->validate([
                'name'=>'required',
                'email'=>'required|email',
                'number'=>'required',
                'message'=>'required',
            ]);

            $package_detail_id=$request->input('package_detail_id');

            $name=$request->input('name');

            $email=$request->input('email');

            $number=$request->input('number');

            $message=$request->input('message');

            DB::table('inquiry')->insert(['name'=>$name , 'email'=>$email , 'number'=>$number , 'subject'=>NULL , 'message'=>$message]);

            return redirect('/package_detail/'.$package_detail_id)->with('error','response submitted successfully!!');

        }
    }


    public function find_tour(Request $request){


        $package_name=$request->input('name');

        $package_price=$request->input('price');

        $package_travel_type=$request->input('travel_type');

        if($package_name !='' AND $package_price !='' AND $package_travel_type !=''){

            $package_data1=DB::table('package')->where('id',$package_name)->where('price' ,'<=', $package_price)->where('tour_type_id',$package_travel_type)->get();

            if(count($package_data1) ==0){

                $pd=0;

                $data['pd']=$pd;

                $data['error']='Tour Not Available';
            }
            else{

                $pd=1;

                $data['pd']=$pd;

                $package_data=DB::table('package')->where('id',$package_name)->where('price' ,'<=', $package_price)->where('tour_type_id',$package_travel_type)->paginate(2);

                $data['package_data']=$package_data;
            }

            $tour_type_data=DB::table('tour_type')->get();

            $data['tour_type_data']=$tour_type_data;


            $banner_data=DB::table('page_banner')->where('page_name','package')->get();

            $data['page_banner_title']=$banner_data[0]->title;

            $data['page_banner_image']=$banner_data[0]->image;


            //common data

            $admin_data=DB::table('admins')->get();

            $data['admin_data']=$admin_data;

            $footer_description=DB::table('footer_description')->get();

            $data['footer_description']=$footer_description;

            $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

            $data['footer_gallary']=$footer_gallary;

            return view('package',$data);
        }

        elseif($package_name !='' AND $package_price !=''){

            $package_data=DB::table('package')->where('id',$package_name)->where('price' ,'<=', $package_price)->paginate(2);

            $data['package_data']=$package_data;

            $tour_type_data=DB::table('tour_type')->get();

            $data['tour_type_data']=$tour_type_data;


            $banner_data=DB::table('page_banner')->where('page_name','package')->get();

            $data['page_banner_title']=$banner_data[0]->title;

            $data['page_banner_image']=$banner_data[0]->image;


            //common data

            $admin_data=DB::table('admins')->get();

            $data['admin_data']=$admin_data;

            $footer_description=DB::table('footer_description')->get();

            $data['footer_description']=$footer_description;

            $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

            $data['footer_gallary']=$footer_gallary;

            return view('package',$data);
        }

        elseif($package_name !='' AND $package_travel_type !=''){

            $package_data=DB::table('package')->where('id',$package_name)->where('tour_type_id',$package_travel_type)->paginate(2);

            $data['package_data']=$package_data;

            $tour_type_data=DB::table('tour_type')->get();

            $data['tour_type_data']=$tour_type_data;


            $banner_data=DB::table('page_banner')->where('page_name','package')->get();

            $data['page_banner_title']=$banner_data[0]->title;

            $data['page_banner_image']=$banner_data[0]->image;


            //common data

            $admin_data=DB::table('admins')->get();

            $data['admin_data']=$admin_data;

            $footer_description=DB::table('footer_description')->get();

            $data['footer_description']=$footer_description;

            $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

            $data['footer_gallary']=$footer_gallary;

            return view('package',$data);
        }

        elseif($package_price !='' AND $package_travel_type !=''){

            $package_data=DB::table('package')->where('price' ,'<=', $package_price)->where('tour_type_id',$package_travel_type)->paginate(2);

            $data['package_data']=$package_data;

            $tour_type_data=DB::table('tour_type')->get();

            $data['tour_type_data']=$tour_type_data;


            $banner_data=DB::table('page_banner')->where('page_name','package')->get();

            $data['page_banner_title']=$banner_data[0]->title;

            $data['page_banner_image']=$banner_data[0]->image;


            //common data

            $admin_data=DB::table('admins')->get();

            $data['admin_data']=$admin_data;

            $footer_description=DB::table('footer_description')->get();

            $data['footer_description']=$footer_description;

            $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

            $data['footer_gallary']=$footer_gallary;

            return view('package',$data);
        }

        elseif($package_name !=''){

            $package_data=DB::table('package')->where('id',$package_name)->paginate(2);

            $data['package_data']=$package_data;

            $tour_type_data=DB::table('tour_type')->get();

            $data['tour_type_data']=$tour_type_data;


            $banner_data=DB::table('page_banner')->where('page_name','package')->get();

            $data['page_banner_title']=$banner_data[0]->title;

            $data['page_banner_image']=$banner_data[0]->image;


            //common data

            $admin_data=DB::table('admins')->get();

            $data['admin_data']=$admin_data;

            $footer_description=DB::table('footer_description')->get();

            $data['footer_description']=$footer_description;

            $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

            $data['footer_gallary']=$footer_gallary;

            return view('package',$data);
        }

        elseif($package_price !=''){

            $package_data=DB::table('package')->where('price' ,'<=', $package_price)->paginate(2);

            $data['package_data']=$package_data;

            $tour_type_data=DB::table('tour_type')->get();

            $data['tour_type_data']=$tour_type_data;


            $banner_data=DB::table('page_banner')->where('page_name','package')->get();

            $data['page_banner_title']=$banner_data[0]->title;

            $data['page_banner_image']=$banner_data[0]->image;


            //common data

            $admin_data=DB::table('admins')->get();

            $data['admin_data']=$admin_data;

            $footer_description=DB::table('footer_description')->get();

            $data['footer_description']=$footer_description;

            $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

            $data['footer_gallary']=$footer_gallary;

            return view('package',$data);
        }

        elseif($package_travel_type !=''){

            $package_data=DB::table('package')->where('tour_type_id',$package_travel_type)->paginate(2);

            $data['package_data']=$package_data;

            $tour_type_data=DB::table('tour_type')->get();

            $data['tour_type_data']=$tour_type_data;


            $banner_data=DB::table('page_banner')->where('page_name','package')->get();

            $data['page_banner_title']=$banner_data[0]->title;

            $data['page_banner_image']=$banner_data[0]->image;


            //common data

            $admin_data=DB::table('admins')->get();

            $data['admin_data']=$admin_data;

            $footer_description=DB::table('footer_description')->get();

            $data['footer_description']=$footer_description;

            $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

            $data['footer_gallary']=$footer_gallary;

            return view('package',$data);
        }

        else{

            

            $data['pd']=0;

            $data['error']='Please Select Anyone you need';

            $tour_type_data=DB::table('tour_type')->get();

            $data['tour_type_data']=$tour_type_data;


            $banner_data=DB::table('page_banner')->where('page_name','package')->get();

            $data['page_banner_title']=$banner_data[0]->title;

            $data['page_banner_image']=$banner_data[0]->image;


            //common data

            $admin_data=DB::table('admins')->get();

            $data['admin_data']=$admin_data;

            $footer_description=DB::table('footer_description')->get();

            $data['footer_description']=$footer_description;

            $footer_gallary=DB::table('gallary')->inRandomOrder()->limit(6)->get();

            $data['footer_gallary']=$footer_gallary;

            return view('package',$data);
        }


    }

    
}
