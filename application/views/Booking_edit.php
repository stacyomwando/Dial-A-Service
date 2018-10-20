<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>booking</title> 
   </head> 
	
   <body> 
      <form method = "" action = "">
		
         <?php 
            echo form_open('Booking_controller/update_booking'); 
            echo form_hidden('old_booking_id',$old_booking_id); 
            echo form_label('booking_id'); 
            echo form_input(array('id'⇒'booking_id', 'name'⇒'booking_id', 'value'⇒ $records[0]→booking_id)); 
               
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


            echo form_label('Phone Number'); 
            echo form_input(array('id'⇒'phone','name'⇒'phone', 'value'⇒$records[0]→phone)); 
               
            echo "  ";

            echo form_label('address'); 
            echo form_input(array('id'⇒'address','name'⇒'address', 'value'⇒$records[0]→address)); 
               
            echo "  ";

            echo form_label('date'); 
            echo form_input(array('id'⇒'date','name'⇒'date', 'value'⇒$records[0]→date)); 
               
            echo "  ";

            echo form_submit(array('id'⇒'submit','value'⇒'Edit')); 
            echo form_close();
         ?> 
			
      </form> 
   </body>
	
</html>