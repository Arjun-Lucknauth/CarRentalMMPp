
var form_validation = function() {

    //Add and remove field dynamically for add attributes
    $(document).ready(function(){
        var maxField = 10;
        var addButton = $('.add_button');
        var wrapper = $('.field_wrapper');
        var fieldHTML = '<div class="field_wrapper" style="margin-right:80px;"><input type="text" name="sku[]" id="sku" placeholder="SKU" style="width:85px;"><input type="text" name="additional_driver[]" id="additional_driver" placeholder="Additional Driver" style="width:85px;"/><input type="text" name="baby_sit[]" id="baby_sit" placeholder="Baby Sit"  style="width:80px;"/><input type="text" name="personal_insurance[]" id="personal_insurance" placeholder="Personal Insurance"  style="width:80px;"/><input type="text" name="price" id="price" placeholder="Price" style="width:80px;"/><input type="text" name="stock" id="stock" placeholder="Stock"  style="width:80px;"/><a href="javascript:void(0);" class="remove_button btn btn-danger btn-xs btn-addon m-b-10 m-l-5"  title="Remove field" style="width:50px;">Remove</a></div>'; //New input field html
        var x = 1;
        $(addButton).click(function(){
            if(x < maxField){
                x++;
                $(wrapper).append(fieldHTML);
            }
        });
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        });
    });
//https://www.codexworld.com/add-remove-input-fields-dynamically-using-jquery/ //


   //Check password
    $('#current_password').keyup(function () {
        var current_password = $("#current_password").val();
        $.ajax({
                type:'get',
                url:'/Admin/check_password',
                data:{current_password:current_password},
                success:function(resp){
                    if(resp=="false")
                    {
                        $("#check_password").html("<font color = 'red'> Current Password is Incorrect </font>");
                    }
                    else if(resp=="true")
                    {
                        $("#check_password").html("<font color ='Green'> Current Password is Correct </font>");
                    }
                },error:function () {
                    alert("Error");
            }
            })
    });
//delete category
    $('#deleteCat').click(function () {
        if(confirm('Are you sure you want to delete this Category?')){
            return true;
        }
        return false;
    });

    //Add Category
    $("#add_category").validate({
        rules: {
            category_name: {
                required: true
            },
            description: {
                required: true,
            },
            url: {
                required: true,
            }
        }
    });

    //trial for delete
    /*$("#delVehicle").click(function(){
        if(confirm('Are you sure you want to delete?')){
            return true;
        }
        return false;
        }
    );*/

// Delete using sweetalert.js
    $(".deleteVehicl").click(function(){
        var pog = $(this).attr('rel');
        var delVeh = $(this).attr('rel1');
        swal({
            title: "Are you sure you want to delete this Item?",
            text: "Won't be able to recover after clicking yes",
            type: "Warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonClass: "btn btn-warning btn sweet-success-cancel",
            confirmButtonText: 'Yes delete, it!'
        },
            function () {
                window.location.href ="/Admin/"+delVeh+"/"+pog;

            });
    });

// Add vehicle Validation
    $("#add_vehicle").validate({
        rules: {
            Select_Category:{
                required:true
            },
            category_id: {
                required: true
            },
            vehicle_name: {
                required: true
            },
            image:{
                required:true
            },
            vehicle_Brand: {
                required: true,
            },
            vehicle_color: {
                required: true,
            },
            price_per_day: {
                required: true,
                number: true
            },
            model_year:{
                required:true,
                number:true
            },

            vehicle_year:{
              required:true,
                number:true
            },

            description:{
                required:true,
            },
            seating_capacity:{
                require:true,
                number:true
            },
            fuel_type:{
                required:true
            },
            transmission_type:{
                required:true,
            },
            Engine_Capacity:{
                required:true,
                number:true
            },
            Airbag:{
                required:true,
            },
            CDPlayer:{
                required:true,
            },
            power_steering:{
                require:true,
            },
        }
    });

    var e = function() {
            jQuery(".form-valide").validate({
                ignore: [],
                errorClass: "invalid-feedback animated fadeInDown",
                errorElement: "div",
                errorPlacement: function(e, a) {
                    jQuery(a).parents(".form-group > div").append(e)
                },
                highlight: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
                },
                success: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
                },
                rules: {
                    "val-username": {
                        required: !0,
                        minlength: 3,
                        maxlength: 20
                    },
                    "val-email": {
                        required: !0,
                        email: !0
                    },
                    "current_password": {
                        required: !0,
                        minlength: 5,
                        maxlength:20
                    },

                    "new_password": {
                        required: !0,
                        minlength: 5
                    },
                    "val-confirm-password": {
                        required: !0,
                        equalTo: "#new_password"
                    },
                    "val-select2": {
                        required: !0
                    },
                    "val-select2-multiple": {
                        required: !0,
                        minlength: 2
                    },
                    "val-suggestions": {
                        required: !0,
                        minlength: 5
                    },
                    "val-skill": {
                        required: !0
                    },
                    "val-currency": {
                        required: !0,
                        currency: ["$", !0]
                    },
                    "val-website": {
                        required: !0,
                        url: !0
                    },
                    "val-phoneus": {
                        required: !0,
                        phoneUS: !0
                    },
                    "val-digits": {
                        required: !0,
                        digits: !0
                    },
                    "val-number": {
                        required: !0,
                        number: !0
                    },
                    "val-range": {
                        required: !0,
                        range: [1, 5]
                    },
                    "val-terms": {
                        required: !0
                    }
                },
                messages: {
                    "val-username": {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 3 characters"
                    },
                    "val-email": "Please enter a valid email address",
                    "new_password": {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    "current_password": {
                        required: "Please provide Current password",
                        minlength: "Your password must be at least 5 characters long",
                        maxlength:"Maximum length is 20"
                    },
                    "val-confirm-password": {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Please enter the same password as above"
                    },
                    "val-select2": "Please select a value!",
                    "val-select2-multiple": "Please select at least 2 values!",
                    "val-suggestions": "What can we do to become better?",
                    "val-skill": "Please select a skill!",
                    "val-currency": "Please enter a price!",
                    "val-website": "Please enter your website!",
                    "val-phoneus": "Please enter a US phone!",
                    "val-digits": "Please enter only digits!",
                    "val-number": "Please enter a number!",
                    "val-range": "Please enter a number between 1 and 5!",
                    "val-terms": "You must agree to the service terms!"
                }
            })
        }
    return {
        init: function() {
            e(), a(), jQuery(".js-select2").on("change", function() {
                jQuery(this).valid()
            })
        }
    }
}();
jQuery(function() {
    form_validation.init()
});