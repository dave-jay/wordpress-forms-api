<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="<?php print _MEDIA_URL ?>js/jquery.maskedinput.min.js"></script>
<?php include 'message.php'; ?>
<div style="padding: 7px; color: #86b414; font-size: 18px; border-bottom: 1px solid #86b414;">
    API Settings
</div>

<div style="margin-top:20px;padding:40px;">
    <table class="table table-responsive table-hover">
        <tr>
            <th>No</th>
            <th>IP</th>
            <th>Handshake Password</th>
            <th>Date</th>
            <th>Comments</th>
            <th style="width:151px;">Action</th>
        </tr>
        <?php foreach ($api_settings as $each_setting): ?>
            <tr id="data_row_<?php print $each_setting["id"]; ?>">
                <td id="id_<?php print $each_setting["id"]; ?>"><?php print $each_setting["id"]; ?></td>
                <td id="ip_<?php print $each_setting["id"]; ?>"><?php print $each_setting["ip_address"]; ?></td>
                <td id="handshake_<?php print $each_setting["id"]; ?>"><?php print $each_setting["handshake_password"]; ?></td>
                <td id="date_<?php print $each_setting["id"]; ?>"><?php print $each_setting["date"]; ?></td>
                <td id="comments_<?php print $each_setting["id"]; ?>"><?php print $each_setting["comments"]; ?></td>
                <td><button class="btn btn-success" onclick="return GetAPIData('<?php print $each_setting["id"]; ?>')">Edit</button>&nbsp;<button class="btn btn-warning" onclick="DeleteRecord('<?php print $each_setting["id"]; ?>')">Delete</button></td>
            </tr>
        <?php endforeach; ?>
        <tr>
        <form action="" method="post">
            <td>&nbsp;</td>
            <td><input class="form-control" type="text" name="ip_address_add" id="ip_address_add" value="" placeholder="IP" required=""/></td>
            <td><input class="form-control" type="text" name="handshake_password_add" id="handshake_password_add" value="" placeholder="Handshake Password" required=""/></td>
            <td><input class="form-control" type="text" name="date_add" id="date_add" value="" placeholder="Date" required=""/></td>
            <td><input class="form-control" type="text" name="comments_add" id="comments_add" value="" placeholder="Comments"/></td>
            <td>
                <input class="btn btn-success" type="submit" value="Add" name="save_record" id="save_record"/>
                <input class="btn btn-default" type="button" value="Reset" name="reset" id="reset" onclick="return Reset();"/>
                <input type="hidden" name="edit_id" id="edit_id" value="0" />
            </td>
        </form>
        </tr>
    </table>
</div>