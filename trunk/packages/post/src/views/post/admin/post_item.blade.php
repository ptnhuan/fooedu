
@if( ! $posts->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <th style='width:5%'>{{ trans('post::post.order') }}</th>
            
            <th style='width:30%'>Tên bài viết</th>
            <th style='width:30%'>Mô tả ngắn</th>
            <th style='width:30%'>Hình ảnh</th>
            <th style='width:20%'>{{ trans('post::post.operations') }}</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nav = $posts->toArray();
        $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($posts as $post)
        <tr>
            <td>
                <?php echo $counter;
                $counter++ ?>
            </td>
            <td>{!! $post->post_name !!}</td>
            <td>{!! $post->post_noidung !!}</td>
            <td>{!! $post->post_img !!}</td>
            <td>
                <a href="{!! URL::route('admin_post.edit', ['id' => $post->post_id]) !!}"><i class="fa fa-edit fa-2x"></i></a>
                <a href="{!! URL::route('admin_post.delete',['id' =>  $post->post_id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <span class="clearfix"></span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<span class="text-warning">
    <h5>
        {{ trans('post::post.message_find_failed') }}
    </h5>
</span>
@endif
<div class="paginator">
    {!! $posts->appends($request->except(['page']) )->render() !!}
</div>