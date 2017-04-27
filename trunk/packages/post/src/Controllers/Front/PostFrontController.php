<?php

namespace Post\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator; //
use Session;
use URL,
    Route,
    Redirect;
use Post\Models\Posts;
use Post\Models\PostsCategories;
use Post\Validators\PostAdminValidator;

class PostFrontController extends Controller
{
    public $data_view = array();

    private $obj_post = NULL;
    private $obj_validator = NULL;
  private $obj_post_category = NULL;
    public function __construct() {
        $this->obj_post = new Posts();
          $this->obj_post_category = new PostsCategories();
    }
    
    public function index(Request $request) {

         $params = $request->all();

        $list_post = $this->obj_post->get_posts($params);
         $list_post_category = $this->obj_post_category->get_posts_categories($params);

        $this->data_view = array_merge($this->data_view, array(
            'posts' => $list_post,
             'posts_categories' => $list_post_category,
            'request' => $request,
            'params' => $params
        ));
        return view('post::post.front.index', $this->data_view);
    }
    
     public function abc(Request $request) {

         $params = $request->all();

        $posts = $this->obj_post->get_posts($params);

        $this->data_view = array_merge($this->data_view, array(
            'posts' => $posts,
            'request' => $request,
            
        ));
        return view('post::post.front.index', $this->data_view);
    }
 public function delete(Request $request) {

        $post = NULL;
        $post_id = $request->get('id');

        if (!empty($post_id)) {
            $post = $this->obj_post->find($post_id);

            if (!empty($post)) {
                  //Message
                \Session::flash('message', trans('post::post.message_delete_successfully'));

                $post->delete();
            }
        } else {

        }

        $this->data_view = array_merge($this->data_view, array(
            'post' => $post,
        ));

        return Redirect::route("post");
    }
    
     public function edit(Request $request) {

        $post = NULL;
        $post_id = (int) $request->get('id');


        if (!empty($post_id) && (is_int($post_id))) {
            $post = $this->obj_post->find($post_id);
        }

        $this->data_view = array_merge($this->data_view, array(
            'post' => $post,
            'request' => $request
        ));
        return view('post::post.front.edit', $this->data_view);
    }

    /**
     *
     * @return type
     */
    public function post(Request $request) {

        $this->obj_validator = new PostAdminValidator();

        $input = $request->all();

        $post_id = (int) $request->get('id');
        $post = NULL;

        $data = array();

        if (!$this->obj_validator->validate($input)) {

            $data['errors'] = $this->obj_validator->getErrors();

            if (!empty($post_id) && is_int($post_id)) {
                    
                $post = $this->obj_post->find($post_id);
            }

        } else {
            if (!empty($post_id) && is_int($post_id)) {
                $file = Input::file('Upfile');
                $file_path = null;
                if ($file != null) {
                    $file_path = $this->attachFile($file);
                }
                $request->request->add([
                    'post_img' => $file_path
                ]);
                $post = $this->obj_post->find($post_id);

                if (!empty($post)) {

                    $input['post_id'] = $post_id;
                    $post = $this->obj_post->update_post($input);

                    //Message
                    \Session::flash('message', trans('post::post.message_update_successfully'));
                    return Redirect::route("post", ["id" => $post->post_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('post::post.message_update_unsuccessfully'));
                }
            } else {
                $file = Input::file('Upfile');
                $file_path = null;
                if ($file != null) {
                    $file_path = $this->attachFile($file);
                }
                $request->request->add([
                    'post_img' => $file_path
                ]);
                $post = $this->obj_post->add_post($input);

                if (!empty($post)) {

                    //Message
                    \Session::flash('message', trans('post::post.message_add_successfully'));
                    return Redirect::route("post", ["id" => $post->post_id]);
                } else {

                    //Message
                    \Session::flash('message', trans('post::post.message_add_unsuccessfully'));
                }
            }
        }

        $this->data_view = array_merge($this->data_view, array(
            'post' => $post,
            'request' => $request,
        ), $data);

        return view('post::post.front.edit', $this->data_view);
    }
    
    public function add(Request $request) {
       // $post = null;
        $post = new Posts();
        $post = $post->get();
        $input = $request->all();
        
        
        $post_id = $this->obj_post->add_post($input);
        $this->data_view = array(
            'post' => $post,
            'request' => $request
        );
       
        return Redirect::route("post");
    }
    ///UP FILE 
    public function attachFile($file) {
        if ($file != null && $file->isValid()) {
            $location_file = public_path();
            $file_name = null;
            $destinationPath = 'foosteel/upload/';
            $extension = $file->getClientOriginalExtension();
            $file_name = rand(111, 999) . $file->getClientOriginalName();
            $file->move($destinationPath, $file_name);
            return $destinationPath . $file_name;
        }
    }



}