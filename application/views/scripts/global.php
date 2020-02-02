<script>
    function isCheckById(check_id) {
        return document.getElementById(check_id).checked;
    }

    function debugConsole(func) {
        return console(func);
    }

    function onCheckIdHandler(check_id, func) {
        if (document.getElementById(check_id).checked) {
            func;
        }
    }

    function onEnterToSubmit(event, form_id) {
        if (event.inputType == "insertLineBreak") {
            document.getElementById(form_id).submit();
        }
    }
</script>