<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<?php echo form_open_multipart('main/save/'); ?>
    <table class="table">
        <tr>
            <td>Title</td>
            <td><?php echo form_input('title'); ?></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><?php echo form_upload('pic'); ?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
        </tr>       
    </table>
</body>
</html>