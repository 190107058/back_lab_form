<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemDetails;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class UploadController extends Controller
{
public function uploadForm()
{
return view('upload_form');
}
public function uploadSubmit(Request $request)
{
$this->validate($request, [
'name' => 'required',
'photos'=>'required',
]);
if($request->hasFile('photos'))
{
$allowedfileExtension=['pdf','jpg','png','docx'];
$files = $request->file('photos');
foreach($files as $file){
$filename = $file->getClientOriginalName();
$extension = $file->getClientOriginalExtension();
$check=in_array($extension,$allowedfileExtension);
//dd($check);
if($check)
{
$items= Item::create($request->all());
foreach ($request->photos as $photo) {
$filename = $photo->store('photos');
ItemDetails::create([
'item_id' => $items->id,
'filename' => $filename
]);
}
echo "Upload Successfully";
}
else
{
echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
}
}
}
}
public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Adil';
        $objDemo->receiver = 'Adil Adambek';
 
        Mail::to("adil.adambekov@mail.ru")->send(new DemoEmail($objDemo));
    }
}
