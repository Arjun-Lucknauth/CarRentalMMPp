<?php

namespace App\Http\Controllers;
use App\VehiclesAttribute;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use App\Category;
use Session;
use App\vehicle;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;
use File;
use Illuminate\Http\UploadedFile;



class VehicleController extends Controller
{

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function addVehicle(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
         // echo "<pre>"; print_r($data); die;
            if(empty($data['category_id'])){
                return redirect()->back()->with('flash_message_error',' Please insert Category!');

            }
            $vehicle = new Vehicle();
            $vehicle->category_id = $data['category_id'];
            $vehicle->vehicle_name = $data['vehicle_name'];
            $vehicle->vehicle_year  = $data['vehicle_year'];
            $vehicle->vehicle_color = $data['vehicle_color'];
            $vehicle->vehicle_Brand = $data['vehicle_Brand'];
            $vehicle->model_year = $data['model_year'];
            $vehicle->seating_capacity = $data['seating_capacity'];
            $vehicle->fuel_type = $data['fuel_type'];
            $vehicle->transmission_type = $data['transmission_type'];
            $vehicle->Engine_Capacity = $data['Engine_Capacity'];
            $vehicle->Airbag = $data['Airbag'];
            $vehicle->CDPlayer = $data['CDPlayer'];
            $vehicle->power_steering = $data['power_steering'];
            $vehicle->price_per_day = $data['price_per_day'];
           // $vehicle->url=$data['url'];
            if(!empty($data['description'])){
                $vehicle->description = $data['description'];
            }else{
                $vehicle->description = '';
            }
            
            
            
           
            // Upload Image
            if($request->hasFile('image')){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $large_image_path = 'images/backend_image/vehicle/large'.$filename;
                    $medium_image_path = 'images/backend_image/vehicle/medium/'.$filename;
                    $small_image_path = 'images/backend_image/vehicle/small/'.$filename;
                    // Resize Images and save it to following directory
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,524)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,262)->save($small_image_path);
                    // Store image name in vehicle table
                    $vehicle->image = $filename;
                }
            }
            $vehicle->save();
            return redirect('/Admin/view_vehicle')->with('flash_message_success','vehicle has been added successfully!');
        }
        //Vehicle categories dropdown
        $categories = Category::where(['parent_id'=>0])->get();
        $categories_dropdown = "<option value='' selected disabled>Select</option>";
        foreach ($categories as $cat){
            $categories_dropdown .= "<option value='".$cat->id."'>".$cat->name."</option>";
            $sub_categories =Category::where(['parent_id'=>$cat ->id])->get();
            foreach ($sub_categories as $sub_cat){
                $categories_dropdown .= "<option value= '".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
            }
        }
    return view('Admin.Vehicles.add_vehicle')->with(compact('categories_dropdown'));
    }

    //view vehicle function
    public function viewVehicle ()
    {
        $vehicles = vehicle::get ();
        $vehicles = json_decode ( json_encode ( $vehicles ) );
        foreach ( $vehicles as $key => $val ) {
            $category_name = Category::where ( [ 'id' => $val->category_id ] )->first ();
            $vehicles[ $key ]->category_name = $category_name->name;
        }
        return view ( 'Admin.vehicles.view_vehicle' )->with ( compact ( 'vehicles' ) );
    }
    //end view vehicle function

    //Edit Vehicle function
    public function editVehicle(Request $request, $id =null){
        if($request->isMethod('post')){
            $data = $request->all();

            //use same function from add vehicle function above with minor changes

            if($request->hasFile('image')){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $large_image_path = 'images/backend_images/vehicle/large/'.$filename;
                    $medium_image_path = 'images/backend_images/vehicle/medium/'.$filename;
                    $small_image_path = 'images/backend_images/vehicle/small/'.$filename;
                    // Resize Images
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                    // Note, storage of image would be done with the function below, the function will check whether new image is being uploaded
                    //if new image is being upload, it will go to database and replace the previous one. If no image was selected, current image will not change
                }
            }else {
                $filename=$data['current_image'];
            }
            //to avoid integrity constraint violation for description being empty.
            if(empty($data['description'])){
                $data['description'] = '';
            }

            //will update the database  => matching id's provided
            Vehicle::where(['id'=>$id])->update(['category_id'=>$data['category_id']],
            ['vehicle_name'=>$data['vehicle_name']],['vehicle_Brand'=>$data['vehicle_Brand']],
                ['price_per_day'=>$data['price_per_day']],['model_year'=>$data['model_year']],
                ['vehicle_color'=>$data['vehicle_color']],['image'=>$filename],
                    ['vehicle_year'=>$data['vehicle_year']],['status'=>$data['status']],
                        ['description'=>$data['description']],['seating_capacity'=>$data['seating_capacity']],
                            ['fuel_type'=>$data['fuel_type']],['transmission_type'=>$data['transmission_type']],
                                ['Engine_Capacity'=>$data['Engine_Capacity']],['Airbag'=>$data['Airbag']],
                                    ['CDPlayer'=>$data['CDPlayer']],['power_steering'=>$data['power_steering']]);
            return redirect()->back()->with('flash_message_success', 'Update completed successfully');
        }
        //Get vehicle details
        $vehicleDetails= Vehicle::where(['id'=>$id])->first();
        //category dropdown function implemented in edit page
        $categories = Category::where(['parent_id'=>0])->get();
        $categories_dropdown = "<option selected disabled>Select</option>";
        foreach ($categories as $cat){
            if($cat->id==$vehicleDetails->category_id) {
                $selected = "selected";
            }else{
            $selected="";
            }
            $categories_dropdown .= "<option value='".$cat->id." ".$selected." > ".$cat->name."</option>";
            $sub_categories =Category::where(['parent_id'=>$cat ->id])->get();
            foreach ($sub_categories as $sub_cat){
                if($sub_cat->id==$vehicleDetails->category_id) {
                    $selected = "selected";
                }else{
                $selected="";
            }
                $categories_dropdown.= "<option value='".$sub_cat->id."' ".$selected." >&nbsp;--&nbsp; ".$sub_cat->name."</option>";
            }
        }

        return view('admin.Vehicles.edit_vehicle')->with(compact('vehicleDetails','categories_dropdown'));
    }
    //end Edit

    //function to delete image from edit table and delete vehicle from view
    public function deleteImage($id=null){
        Vehicle::where(['id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success','Image has been removed');
    }

    public function deleteVehicle($id=null){
        Vehicle::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Vehicle deleted successfully');
    }
    //end delete functions

    //Something wrong here, can't figure out
    public function addAttributes(Request $request,$id=null){
        $vehicleDetails = Vehicle::where(['id'=>$id])->first();
        if($request ->isMethod( 'post')){
            $data=$request->all();
           echo "<pre>"; print_r ( $data);die;
            foreach ($data['sku'] as $key =>$val){
                if(!empty($val)){
                    $attribute = new VehiclesAttribute;
                    $attribute ->vehicle_id =$id;
                    $attribute -> sku =$val;
                    $attribute ->additional_driver = $data['additional_driver'][$key];
                    $attribute ->baby_sit = $data['baby_sit'][$key];
                    $attribute ->personal_insurance = $data['personal_insurance'][$key];
                    $attribute ->price = $data['price'][$key];
                    $attribute ->stock = $data['stock'][$key];
                    $attribute -> save ();
                }
            }
            return redirect ('Admin/add_attributes/'.$id)->with('flash_message_success','Attributes has been added successfully');
        }
    return view('Admin.Vehicles.add_attributes')->with(compact('vehicleDetails'));
    }
    //end that...

    /*To call url from database to use as links for products. This will dynamically add or remove from Admin panel.
     This will call unique url from database.
    //if vehicle not available, it will show page 404 to avoid getting sent to debug developer mode
    */
    public function vehicles($url=null){
        $countCategory = Category::where(['url'=>$url])->count();
        if ($countCategory==0){
           abort ( 404);
        }

        $categories = Category::where(['parent_id'=>0])->get();
        $categoryDetails = Category::where(['url'=>$url])->first();
        $allVehicles = Vehicle::where(['category_id'=>$categoryDetails->id])->paginate(12);
        return view('vehicles.listing')->with(compact('categoryDetails','allVehicles','categories'));
    }


    //Get vehicle details to display on front. 1st function was suppose to get url but it doesn't seems to be working
    //getting error(undefined variable)
    /*    public function vehicles1($url=null)
       {
           $vehicleAll = Vehicle::where ( [ 'url' => $url ] )->first ();
           $allVehicles1 = Vehicle::where ( [ 'vehicle_id' => $vehicleAll->id ] );
           $categoriesHeader = Category::with ( 'categories' )->where ( [ 'parent_id' => 0 ] )->get ();
           return view ( 'Vehicles.details' )->with ( compact ( 'vehicleAll' , 'allVehicles1' , 'categoriesHeader' ;

       }*/

    //this one works great.
       public function vehiclee($id=null){
           $vehicleDetails = Vehicle::where('id',$id)->first();
           $categories = Category::with('categories')->where([ 'parent_id' => 0 ])->get();
           return view('Vehicles.details')->with(compact('vehicleDetails','categories'));
       }
}
