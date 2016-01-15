<div style="padding: 7px; color: #86b414; font-size: 18px; border-bottom: 1px solid #86b414;">
    Test Payload 
</div>
<div class="row" style="padding:20px;">

    <div class="col-md-4">
        <form action="?q=test_push" method="post">
            <div class="form-group">
                <label for="payload">Payload</label>
                <textarea rows="7" class="form-control" id="payload" name="data" ></textarea>
            </div>
            <div class="form-group">
                <label for="handshake">Handshake</label>
                <input type="text" class="form-control" id="handshake" name="handshake" >
            </div>

            <div class="form-group">
                <label for="ip">IP</label>
                <input type="text" class="form-control" id="ip" >
            </div>

            <input  type="submit" name="test_front_end_push" class="btn btn-primary" value="Test FRONT END POST">
        </form>
    </div>
</div>
<?php include "message.php"; ?>