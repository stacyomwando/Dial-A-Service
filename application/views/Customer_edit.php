<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head> 
	
   <body> 
      <form method = "" action = "">
		
         <?php 
            echo form_open('Customer_controller/update_customer'); 
            echo form_hidden('old_customer_id',$old_customer_id); 
            echo form_label('Customer_id'); 
            echo form_input(array('id'⇒'customer_id', 'name'⇒'customer_id', 'value'⇒ $records[0]→customer_id)); 
               
            echo "  "; 
         
            echo form_label('First Name'); 
            echo form_input(array('id'⇒'Firstname','name'⇒'Firstname', 'value'⇒$records[0]→Firstname)); 
               
            echo "  "; 
           
           echo form_label('Last Name'); 
            echo form_input(array('id'⇒'Lastname','name'⇒'Lastname', 'value'⇒$records[0]→Lastname)); 
               
            echo "  ";

            echo form_label('ID Number'); 
            echo form_input(array('id'⇒'idno','name'⇒'idno', 'value'⇒$records[0]→idno)); 
               
            echo "  ";

            echo form_label('DOB'); 
            echo form_input(array('id'⇒'DOB','name'⇒'DOB', 'value'⇒$records[0]→DOB)); 
               
            echo "  ";

            echo form_label('Phone Number'); 
            echo form_input(array('id'⇒'Phone','name'⇒'Phone', 'value'⇒$records[0]→Phone)); 
               
            echo "  ";

            echo form_label('Email'); 
            echo form_input(array('id'⇒'Email','name'⇒'Email', 'value'⇒$records[0]→Email)); 
               
            echo "  ";

            echo form_label('password'); 
            echo form_input(array('id'⇒'password','name'⇒'password', 'value'⇒$records[0]→password)); 
               
            echo "  ";

            echo form_label('category'); 
            echo form_input(array('id'⇒'category','name'⇒'category', 'value'⇒$records[0]→category)); 
               
            echo "  ";

            echo form_submit(array('id'⇒'submit','value'⇒'Edit')); 
            echo form_close();
         ?> 
			
      </form> 
   </body>
	
</html>