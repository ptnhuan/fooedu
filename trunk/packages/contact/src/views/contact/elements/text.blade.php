<head>
    <script src='//cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
        tinymce.init({

        selector: 'textarea', // change this value according to your HTML
        plugin: 'a_tinymce_plugin',
        a_plugin_option: true,
        a_configuration_option: 400
    });
</script>
</head>


<!-- SAMPLE NAME 4-->
<div class="form-group">
    <?php $contact_name = $request->get('contact_name') ? $request->get('contact_name') : @$contact->contact_name ?>
    {!! Form::label($name, trans('contact::contact.field_contact_name').':') !!}
    {!! Form::text($name, $contact_name, ['class' => 'form-control', 'placeholder' => trans('contact::contact.place_holder_name').'']) !!}



    <?php $contact_email = $request->get('contact_email') ? $request->get('contact_email') : @$contact->contact_email ?>
    {!! Form::label($email, trans('contact::contact.field_contact_email').':') !!}
    {!! Form::text($email, $contact_email, ['class' => 'form-control', 'placeholder' => trans('contact::contact.place_holder_email').'']) !!}


    <?php $contact_phone = $request->get('contact_phone') ? $request->get('contact_phone') : @$contact->contact_phone ?>
    {!! Form::label($phone, trans('contact::contact.field_contact_phone').':') !!}
    {!! Form::text($phone, $contact_phone, ['class' => 'form-control', 'placeholder' => trans('contact::contact.place_holder_phone').'']) !!}



    <?php $contact_company = $request->get('contact_company') ? $request->get('contact_company') : @$contact->contact_company ?>
    {!! Form::label($company, trans('contact::contact.field_contact_company').':') !!}
    {!! Form::text($company, $contact_company, ['class' => 'form-control', 'placeholder' => trans('contact::contact.place_holder_company').'']) !!}



    <?php $contact_message = $request->get('contact_message') ? $request->get('contact_message') : @$contact->contact_message ?>
    {!! Form::label($message, trans('contact::contact.field_contact_message').':') !!}
    {!! Form::textarea($message, $contact_message, ['class' => 'form-control', 'placeholder' => trans('contact::contactplace_holder_message').'']) !!}
</div>

<!-- /SAMPLE NAME -->