$(function(){
    $("form[name='webContact']").validate({
        rules: {
            username: "required",
            number: "required",
            email:{
                required: true,
                email: true
            },
            age: "required",
            comment: "required"   
        },
        messages: {
            username: "Please enter your username.",
            number: "Please enter your phone number.",
            email: "Please enter a valid email address.",
            age: "Please enter your age.",
            comment: "Please enter a comment"
        },
   });
   
});