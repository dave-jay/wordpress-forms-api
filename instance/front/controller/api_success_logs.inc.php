<?php

$data = q("select * from api_push_logs where status != 'FAILED' ");
_cg("page_title", "Successful Entries");
