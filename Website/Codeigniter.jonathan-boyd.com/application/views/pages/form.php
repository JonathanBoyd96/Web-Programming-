<?
echo "<div class='error'>".validation_errors()."</div>";
echo form_open();
echo form_label("First Name:", "first").form_input("first", set_value("first"))."<br>";
echo form_label("Last Name:", "last").form_input("last", set_value("last"))."<br>";
echo form_label("Email:", "email").form_input("email", set_value("email"))."<br>";
echo form_submit('submit', 'Submit Form Data')."<br>";
echo form_close();
?>