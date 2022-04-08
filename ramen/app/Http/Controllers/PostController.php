<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function add()
    {
        // DB::table('posts')->insert(
        //     //user_id la khoa ngoai nen phai khop voi id trong bang user
        //     ['title' => 'Post3', 'content' => 'content3', 'user_id' => 2]
        // );
        # cach khong hay dung
        // $post = new Post;
        // $post->title = "Laravel Pro 1";
        // $post->content = "content Pro 1";
        // $post->user_id = 3;
        // $post->votes = 50;
        // $post->save();
        #cach hay dung
        // Post::create([
        //     'title' => 'title8',
        //     'content' => 'content create 8',
        //     'user_id' => 3,
        //     'votes' => 70
        // ]);
        #form
        return view('post.create');
    }
    function show()
    {
        #1get method is run query select(*)
        // $posts = DB::table('posts') -> select('title', 'content') -> get();

        #2 foreach loop to echo every resuld
        // foreach($posts as $post){
        //     echo $post ->  title;
        //     echo "<br>";
        //     echo $post ->  content;
        //     echo "<br>";
        // $posts = DB::table('posts') -> select('title', 'content') ->where('id', 3) -> first();
        // echo $posts ->title;
        // print_r($posts) ;

        // echo $post;
        #find by id
        // $posts = DB::table('posts')->find(3);
        // $count = DB::table('posts')->where('user_id',2)->count();
        // print_r($count);

        # max min avg
        // $max = Db::table('posts') -> avg('user_id');
        // echo $max;

        #JOIN 2 table
        // $posts = DB::table('posts') -> join('users','users.id','=','posts.user_id')
        // ->select('users.*')
        // ->get();
        // print_r($posts);
        // return($posts);

        #and or statement
        // $posts = DB::table('posts')
        // and clause
        //     ->where([
        //         ['content', 'like', '%iphone%'],
        //         ['votes', '>=', 6]
        //     ])
        //     ->get();
        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";
        //or clause
        //         ->where('user_id', '=', 3)
        //         ->orWhere('votes', '<', 5)
        //         ->get();
        //     echo "<pre>";
        //     print_r($posts);
        //     echo "</pre>";
        #　GROUP BY
        //     $posts = DB::table('posts')
        //         ->selectRaw("COUNT('id') as number_posts, user_id")
        //         ->groupBy('user_id')
        //         ->get();
        //     echo "<pre>";
        //     print_r($posts);
        //     echo "</pre>";
        #ORDER BY
        // $posts = DB::table('posts')
        //     ->orderBy('votes', 'desc')
        //     ->get();
        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";
        // $posts = Post::all();
        // return view('post.index', compact('posts'));
        #Query builder
        // $posts = DB::table('posts')->paginate(4);
        // return view('post.index', compact('posts'));
        #eluquent ORM
        $posts = Post::where('id','>',9)->orderby('id', 'desc')->Paginate(3); /// or simplePaginate
        $posts->withPath('demo/show'); // sau đó định nghĩa lại đường dẫn trong web.php
        return view('post.index', compact('posts'));

    }
    function update($id)
    {  # QUERY BUILDER
        //     DB::table('posts')
        //         ->where('id', 2)
        //         ->update([
        //             'title' => 'title1',
        //             'votes' => 20,
        //             'content' => 'content1'
        //         ]);
        #ELUQUENT ORM

        // $post = Post::find($id);
        // $post->title = "Laravel Pro 1";
        // $post->content = "content Pro 1";
        // $post->user_id = 2;
        // $post->votes = 50;
        // $post->save();
        $post = Post::where('id', $id)
            ->update([
                'title' => 'title5',
                'content' => 'content 5',
                'user_id' => 3,
                'votes' => 65
            ]);
    }
    function delete($id)
    {  # QUERY BUILDER
        // return DB::table('posts')
        //     ->where('id', $id)
        //     ->delete();
        #ELOQUENT ORM
        $post = Post::find($id);
        // $post->delete();
        // Post::where('user_id', $id)->delete();
        // Post::destroy($id);
        return Post::destroy([6, 7]);
    }
    function read()
    {
        // eluquent orm
        // $posts = Post::all();
        // return $posts;
        // $posts = Post::where('title', 'like', '%iphone%')->get();
        // return $posts;
        // $post = Post::find(3);
        // $posts = Post::orderBy('votes', 'desc')->get();
        // $posts = Post::selectRaw("COUNT('id') as number_posts, user_id")
        //         ->groupBy('user_id')
        //         ->orderBy('votes', 'desc')
        //         ->get();
        #limit and offset
        // $posts = Post::limit(2)
        //     ->offset(1)
        //     ->get();
        // return $posts;
        # Lấy tất  cả các phần tử bao gồm đã xóa tạm thời
        //     $posts = Post::withTrashed()
        //         ->get();
        //     return  $posts;
        #lấy những phần tử đã xóa tạm thời
        // $posts = Post::onlyTrashed()
        //     ->get();
        // return $posts;
        #thiết lâoj database one to one
        // $img = Post::find(8)
        //     ->FeaturedImages;
        // return $img;
        # thiết lập lấy data one to many
        // $user = Post::find(8)
        //     ->user;
        $posts = User::find(2)
            ->posts; // posts nay la function trong User.php
        return $posts;
    }
    function store(Request $request)
    {
        #Form store info from form
        #Điều hướng lỗi
        $request->validate(
            [
                'title' => 'required',
                'content' => 'required'
            ],
            [ //hiện thị lỗi chi tiết băng cách khai báo trong required
                'required' => 'trường :attribute không được để trống '
            ],
            [ // đổi tên tiếng anh
                'title' => 'Tiêu đề',
                'content' => 'Nội dung'
            ]
        );

        #chèn thêm ảnh lấy toàn bộ request
        $input = $request->all();

        if ($request->hasFile('file')) {
            //Lấy kích thước file
            $file = $request->file;
            $filesize = $file->getSize();
            echo "<br>";
            //Lấy tên file
            $filename = $file->getClientOriginalName();
            echo "tên file : " . "<br>";
            //Lấy đuôi file
            $fileExten = $file->getClientOriginalExtension();
            echo  "<br>";
            // chuyển file lên server
            $path = $file->move('public/uploads', $file->getClientOriginalName());
            $thumbnail = 'public/uploads/' . $filename;

            $input['thumbnail'] = $thumbnail;
        }
        $input['user_id'] = 2;
        Post::create($input);
        # Chuyên hướng qua một URl
        // return redirect('post/show');
        #chuyển hướng qua một route
        // return redirect()->route('post.show') ;
        # chuyển hướng flash
        return redirect('post/show')->with('status', 'Thêm bài viết ok ');

        // return $request->input();
    }
    function restore($id)
    {
        // #restore lại những cái đã xóa
        // // $post = Post::onlyTrashed()
        // //     ->where('id', $id)
        // //     ->restore();
    }
    function permanentlyDelete($id)
    {
        Post::onlyTrashed()
            ->where('id', $id)
            ->forceDelete();
    }
}


#QUERY BUILDER
// $posts = $table('posts')->where('title', 'like', '%iphone%')->get();
#ELOQUENT ORM
// $posts = Post::where('title', 'like', '%iphone%')->get();
