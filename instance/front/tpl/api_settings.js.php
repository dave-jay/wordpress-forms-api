<script type="text/javascript">
    $(document).ready(function () {
        $("#date_add").datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true
        });
        
        $('#ip_address_add').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
              'Z': {
                pattern: /[0-9]/, optional: true
              }
            }
          });
        $('#ip_address_add').mask('999.999.999.999');
    });

    function GetAPIData(id) {
        Reset();
        $("#ip_address_add").val($("#ip_" + id).html());
        $("#handshake_password_add").val($("#handshake_" + id).html());
        $("#date_add").val($("#date_" + id).html());
        $("#comments_add").val($("#comments_" + id).html());
        $("#edit_id").val(id);
        $("#save_record").val("Update");
    }

    function Reset() {
        $("#ip_address_add").val('');
        $("#handshake_password_add").val('');
        $("#date_add").val('');
        $("#comments_add").val('');
        $("#edit_id").val('0');
        $("#save_record").val("Add");
    }

    function DeleteRecord(id) {

        $.ajax({
            url: _U + 'api_settings',
            async: "false",
            dataType: "json",
            data: {Deletedata: 1, id: id},
            success: function (r) {
                $("#data_row_" + id).remove();
                _success("Record has been deleted successfully");
            }
        });
    }
</script>