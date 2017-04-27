 SAMPLE NAME 
<head>
    <script src="{{asset('//cloud.tinymce.com/stable/tinymce.min.js')}}"></script>
    <script>
tinymce.init({
    selector: '#myTextarea',
    theme: 'modern',
    width: 600,
    height: 300,
    plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'save table contextmenu directionality emoticons template paste textcolor'
    ],
    content_css: 'css/content.css',
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
});

    </script>
</head>
<div class="form-group">

    {!! Form::label($name, trans('partner::partner.field_name').':') !!}
    {!! Form::text($name, null, ['class' => 'form-control', 'placeholder' => trans('partner::partner.field_name').'']) !!}
<!--     EMAIL -->
    {!! Form::label($title, trans('partner::partner.field_title').':') !!}
    {!! Form::text($title, null, ['class' => 'form-control', 'placeholder' => trans('partner::partner.field_title').'']) !!}
<!--     /EMAIL -->
<!--     FEEDBACK -->
<!--     //FEEDBACK -->
<!--     IMG -->
    {!! Form::label( trans('partner::partner.field_img').':') !!}

    {!!Form::file('Upfile')!!}
<!--     IMG -->
</div>
