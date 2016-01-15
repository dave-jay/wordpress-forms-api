<div style="padding: 7px; color: #86b414; font-size: 18px; border-bottom: 1px solid #86b414;">
    Successful Entries
</div>

<div style="margin-top:20px;padding:40px;">
    <table class="table table-responsive table-hover">
        <tr>
            <th>Log ID</th>
            <th>IP</th>
            <th>Payload</th>
            <th>Status</th>
            <th>Date</th>
        </tr>
        <?php if ($data): ?>
            <?php foreach ($data as $each_data): ?>
                <tr >
                    <td ><?php print $each_data["id"]; ?></td>
                    <td ><?php print $each_data["user_ip"]; ?></td>
                    <td ><?php print $each_data["payload"]; ?></td>
                    <td ><?php print $each_data["status"]; ?></td>
                    <td ><?php print date("m/d/Y H:i:s", strtotime($each_data["created_at"])); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
                <tr><td colspan="5">No Logs Found</td></tr>
        <?php endif; ?>
    </table>
</div>