
<div class="form-group">
    <!-- POST NAME -->
    <?php $post_category_name = $request->get('post_titlename') ? $request->get('post_name') : @$post->post_category_name ?>
    {!! Form::label($name, trans('post::post.name').':') !!}
    {!! Form::text($name, $post_category_name, ['class' => 'form-control', 'placeholder' => trans('post::post.name').'']) !!}
   <!-- /POST NAME -->
    <!-- POST NAME -->
    <?php $post_category_desription = $request->get('post_titlename') ? $request->get('post_category_desription') : @$post->post_category_desription ?>
    {!! Form::label($de, trans('post::post.description').':') !!}
    {!! Form::text($de, $post_category_desription, ['class' => 'form-control', 'placeholder' => trans('post::post.de').'']) !!}
   <!-- /POST NAME -->
   <!-- POST NAME -->
    {!! Form::label( trans('post::post.post_category_img').':') !!}

    {!!Form::file('Upfile')!!}
   <!-- /POST NAME -->
</div>
