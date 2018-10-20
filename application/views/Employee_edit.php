<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>booking</title> 
   </head> 
	
   <body> 
      <form method = "" action = "">
		
         <?php 
            echo form_open('Employee_controller/update_employee'); 
            echo form_hidden('old_Employee_id',$old_Employee_id); 
            echo form_label('Employee_id'); 
            echo form_input(array('id'⇒'Employee_id', 'name'⇒'Employee_id', 'value'⇒ $records[0]→Employee_id)); 
               
            echo "  "; 
         
            echo form_label('Category'); 
            echo form_input(array('id'⇒'Category','name'⇒'Category', 'value'⇒$records[0]→Category)); 
               
            echo "  "; 
           
           echo form_label('county'); 
            echo form_input(array('id'⇒'county','name'⇒'county', 'value'⇒$records[0]→county)); 
               
            echo "  ";

            echo form_label('constituency'); 
            echo form_input(array('id'⇒'constituency','name'⇒'constituency', 'value'⇒$records[0]→constituency)); 
               
            echo "  ";


            echo form_label('municipality'); 
            echo form_input(array('id'⇒'municipality','name'⇒'municipality', 'value'⇒$records[0]→municipality)); 
               
            echo "  ";

   
            echo form_submit(array('id'⇒'submit','value'⇒'Edit')); 
            echo form_close();
         ?> 
			
      </form> 
   </body>
	
</html>