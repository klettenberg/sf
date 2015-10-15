<html>
<head>
    <title></title>
    <script src="js_lib/jquery-1.11.3.js" type="application/javascript"></script>
    <style>
        .accordion {
            display: none;
        }

    </style>

</head>
<body>
<?php
// add class form_field_yes_$id to yes btn and vice versa
// add a data-id attribute with yes-$id and no-$id
?>
<form>
    <div class="form_field">
        <input type="checkbox" name="yes" class="form_field_yes form_field_yes_1" data-id="yes-1"><label>Ich
            will.</label>
    </div>
    <div class="form_field">
        <input type="checkbox" name="no" class="form_field_no form_field_no_1" data-id="no-1"><label>Ich will
            nichts ändern</label>
    </div>
    <div class="accordion" id="1">
        <p>Ich bin die erweiterte Form</p>
    </div>
    <div class="btn">
        <input type="submit" name="Speichern">
    </div>
</form>
<form>
    <div class="form_field">
        <input type="checkbox" name="yes" class="form_field_yes form_field_yes_2" data-id="yes-2"><label>Ich
            will.</label>
    </div>
    <div class="form_field">
        <input type="checkbox" name="no" class="form_field_no form_field_no_2" data-id="no-2"><label>Ich will
            nicht</label>
    </div>
    <div class="accordion" id="2">
        <p>Ich bin die erweiterte Form</p>
    </div>
    <div class="btn">
        <input type="submit" name="Speichern">
    </div>
</form>
<form>
    <div class="form_field">
        <input type="checkbox" id="yes" name="yes" class="form_field_yes form_field_yes_3" data-id="yes-3"><label for="yes">Ich
            will.</label>
    </div>
    <div class="form_field">
        <input type="checkbox" id="no" name="no" class="form_field_no form_field_no_3" data-id="no-3"><label for="no">Ich will
            nicht</label>
    </div>
    <div class="accordion" id="3">
        <p>Ich bin die erweiterte Form</p>
    </div>
    <div class="btn">
        <input type="submit" name="Speichern">
    </div>
</form>
<script>
    $(document).ready(function () {

        $(".form_field_yes, .form_field_no").on("click", function (event) {

            var dataId = ( $(this).data('id') );

            var darray = dataId.split("-");
            var choice = darray[0];
            var did = darray[1];

            var cb_yes_data_sel = '[data-id="yes-' + did + '"]';
            var cb_no_data_sel = '[data-id="no-' + did + '"]';
            var accordion_sel = '#' + did;

            console.log("data-id:" + did);
            console.log("choice:" + choice);
            console.log("whichEvent:" + event.type)

            if (choice == 'yes') {

                console.log('yes clicked');
                console.log(cb_no_data_sel + " - " + cb_yes_data_sel);
                console.log(accordion_sel)

                $(cb_no_data_sel).prop('checked', false);
                $(accordion_sel).toggle();
                //  $(cb_yes_data_sel).prop('checked', true);


            } else {
                console.log('no clicked');
                $(cb_yes_data_sel).prop('checked', false);
                $(accordion_sel).slideUp();
                if (!$(this).is(':checked')) {
                    console.log('not checked no');
                    $(cb_yes_data_sel).prop('checked', true);
                    $(accordion_sel).slideDown();
                }
            }


        });
    });

</script>
</body>
</html>