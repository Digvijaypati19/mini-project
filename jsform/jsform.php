
<head>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        
        <script type="text/javascript">
          
            $(document).ready(function() {
                $("#family").validate({
                  rules: {
                    d_name: "required",
                    d_cont: {
                      required:true,
                      minlength:10,
                      number:true
                    },
                    d_email:{
                      required:true,
                      email:true
                    },
                    d_birth:"required",
                    d_add:"required",
                    d_blood:"required"
                  },
                
                });
            )};
</head></script>