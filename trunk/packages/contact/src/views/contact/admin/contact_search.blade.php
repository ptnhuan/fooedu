
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i><?php echo trans('contact::contact.page_search_contact') ?></h3>
    </div>
    <div class="panel-body">

        {!! Form::open(['route' => 'admin_contact','method' => 'get']) !!}

        <!--TITLE-->
        <div class="form-group">
            {!! Form::label('contact_name', trans('contact::contact.search_name_label')) !!}
            {!! Form::text('contact_name', @$params['contact_name'], ['class' => 'form-control', 'placeholder' => trans('contact::contact.search_name_place')]) !!}
        </div>
        
        <!--/END TITLE-->

        {!! Form::submit(trans('contact::contact.search_name_label').'', ["class" => "btn btn-info pull-right"]) !!}
        {!! Form::close() !!}
    </div>
</div>


