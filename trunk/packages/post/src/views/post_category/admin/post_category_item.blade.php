<!--ADD SAMPLE CATEGORY ITEM-->
<div class="row margin-bottom-12">
    <div class="col-md-12">
        <a href="{!! URL::route('admin_post_category.edit') !!}" class="btn btn-info pull-right">
            <i class="fa fa-plus"></i>{{trans('post::post.post_category_add_button')}}
        </a>
    </div>
</div>
<!--/END ADD SAMPLE CATEGORY ITEM-->

@if( ! $posts_categories->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <th style='width:5%'>
                {{ trans('post::post.order') }}
            </th>

           

            <th style='width:50%'>
                {{ trans('post::post.post_categoty_name') }}
            </th>
            <th style='width:50%'>
                {{ trans('post::post.post_categoty_desription') }}
            </th>
            <th style='width:50%'>
                {{ trans('post::post.post_categoty_img') }}
            </th>

            <th style='width:20%'>
                {{ trans('post::post.operations') }}
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $posts_categories->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($posts_categories as $post_category)
        <tr>
            <!--COUNTER-->
            <td>
                <?php echo $counter; $counter++ ?>
            </td>
            <!--/END COUNTER-->

            <!--POST CATEGORY ID-->
            
            <!--/END POST CATEGORY ID-->

            <!--POST CATEGORY NAME-->
            <td>
                {!! $post_category->post_category_name !!}
            </td>
            <!--/END POST CATEGORY NAME-->
             <td>
                {!! $post_category->post_category_desription !!}
            </td>
             <td>
                {!! $post_category->post_category_img !!}
            </td>
            <!--OPERATOR-->
            <td>
                <a href="{!! URL::route('admin_post_category.edit', ['id' => $post_category->post_category_id]) !!}">
                    <i class="fa fa-edit fa-2x"></i>
                </a>
                <a href="{!! URL::route('admin_post_category.delete',['id' =>  $post_category->post_category_id, '_token' => csrf_token()]) !!}"
                   class="margin-left-5 delete">
                    <i class="fa fa-trash-o fa-2x"></i>
                </a>
                <span class="clearfix"></span>
            </td>
            <!--/END OPERATOR-->
        </tr>
        @endforeach
    </tbody>
</table>
@else
    <!-- FIND MESSAGE -->
    <span class="text-warning">
        <h5>
            {{ trans('post::post.message_find_failed') }}
        </h5>
    </span>
    <!-- /END FIND MESSAGE -->
@endif
<div class="paginator">
    {!! $posts_categories->appends($request->except(['page']) )->render() !!}
</div>