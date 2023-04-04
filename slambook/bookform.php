 <html>
     <head>
     <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/jquery.min.js"></script>
     <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        
        
        <script type="text/javascript">
             $(document).ready(function(){
                 $("#bookform").validate({
                     rules:{
                         b_name:"required",
                         b_contact:{
                             required:true,
                             minlength:10,
                             number:true
                         },
                         b_email:{
                             required:true,
                             email:true
                         },
                         b_add:"required",
                         b_dob:"required",
                         b_nikname:"required",
                         b_color:"required",
                         b_food:"required",
                         b_actor:"required",
                         b_flower:"required",
                         b_car:"required",
                         b_movie:"required",
                         b_place:"required",
                         b_sportman:"required"
                     },
                     message:{
                         b_name:"Please enter full Name",
                         b_contact:{
                             required:"Please enter contact",
                             minlength:"contact should be 10 digit",
                             number:"Please enter valide no"
                         },
                         b_email:{
                             required:"Please enter email",
                             email:"Please enter valid email"
                         },
                         b_add:"Please enter your address",
                         b_dob:"Please enter your B'date ",
                         b_nikname:"Please enter nikname ",
                         b_color:"Please enter favorite color",
                         b_food:"Please enter favorite food",
                         b_actor:"Please enter favorite actor",
                         b_flower:"Please enter favorite flower",
                         b_car:"Please enter favorite car",
                         b_movie:"Please enter favorite movie",
                         b_place:"Please enter favorite movie",
                         b_sportman:"Please enter favorite sportman"
                     },
                     submitHandler:function(form){
                         alert("Data is correct.!!");
                         form.submit();
                     }
                 });
             });
             </script>
             </head>
             <center>
             <body background="dpw.jpg">
                   <form id="bookform" action="saves.php" method="POST">
                       <h1 >My Slam</h1>
  👦            <input type="text" id="b_name" name="b_name" value="" placeholder="User Name"/><br/><br/>
📱                <input type="text" id="b_contact" name="b_contact" maxlength="10" value="" placeholder="User Contact"/><br/> <br/>
Enter Email            <input type="text" id="b_email" name="b_email" value="" placeholder="User Email"/><br/><br/>   
Enter address           <input type="text" id="b_add" name="b_add" value="" placeholder="User Address"/><br/> <br/> 
🎂            <input type="text" id="b_dob" name="b_dob" value="" placeholder="User B'date"/><br/><br/>  
👳         <input type="text" id="b_nikname" name="b_nikname" value="" placeholder="User nikname"/><br/><br/>   
favorite Color            <input type="text" id="b_color" name="b_color" value="" placeholder="favorite color"/><br/> <br/>
🍜           <input type="text" id="b_food" name="b_food" value="" placeholder="favorite food"/><br/> <br/>        
favorite Actor          <input type="text" id="b_actor" name="b_actor" value="" placeholder="favorite actor"/><br/><br/>
🌷        <input type="text" id="b_flower" name="b_flower" value="" placeholder="favorite flower"/><br/> <br/>
🚗           <input type="text" id="b_car" name="b_car" value="" placeholder="favorite car"/><br/><br/>
favorite movie          <input type="text" id="b_movie" name="b_movie" value="" placeholder="favorite movie"/><br/><br/>
⛳                    <input type="text" id="b_place" name="b_place" value="" placeholder="favorite place"/><br/><br/>
  ⚽          <input type="text" id="b_sportman" name="b_sportman" value="" placeholder="favorite sportman"/><br/><br/>           
                                
                               <input type="reset" name="reset" value="reset"></br>
                           <button type="submit">Submit</button>
            </form></center>
            </body>
            </html>
                        