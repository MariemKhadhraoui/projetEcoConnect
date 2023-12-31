<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PostController extends Controller
{
    

    public function index() {
        $listPosts = Posts::all();
         return view('frontOffice/accueil',['listPosts' => $listPosts]);
               
    }

    public function showProfile() {
        
        return view('frontOffice.profileUser');
              
    }



    //create
    public function create()
    {
        return view('frontOffice.Post.create');
    }
    
   
    //store
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string|max:255',
            'image' => 'required',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'titre.required' => 'Le Titre est obligatoire',
            'description.required' => 'La description est obligatoire',
            'image.required' => 'Image est obligatoire',
        ]);
    
        $data = $request->all(); // Récupérez toutes les données du formulaire

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $storagePath = 'public/images';
            $imageName = time() . rand(1, 99) . '.' . $image->getClientOriginalExtension();
            $image->move($storagePath, $imageName);
            $data['image'] = $imageName;
        }
        $newPost = Posts::create($data);

        return back()->with('success', 'Ajout avec succès');
    }
    
    public function edit($id)
    {

        $post = Posts::find($id);
        return view('frontOffice.Post.edit',['post' => $post]);

    }



   //store
   public function update(Request $request,$id)
   {
       $request->validate([
           'titre' => 'required|string',
           'description' => 'required|string|max:255',
        //    'image' => 'required',
           'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ], [
           'titre.required' => 'Le Titre est obligatoire',
           'description.required' => 'La description est obligatoire',
        //    'image.required' => 'Image est obligatoire',
       ]);
   
       $data = $request->all(); // Récupérez toutes les données du formulaire

     
    if ($request->hasFile('image')) {
        $image = $request->file('image');

        // Define the storage path (you can customize this as needed)
        $storagePath = 'public/images';

        // Generate a unique filename for the uploaded image
        $imageName = time() . rand(1, 99) . '.' . $image->getClientOriginalExtension();

        // Move the uploaded image to the specified storage path with the unique filename
        $image->move($storagePath, $imageName);

        // Save the image's filename (or full path, depending on your needs) in your data array
        $data['image'] = $imageName;
        } else {
        // Handle the case where no file was uploaded
        }
       $Post = Posts::find($id);
       $Post->update($data);

       return back()->with('success', 'Modification avec succès');
   }
   

}