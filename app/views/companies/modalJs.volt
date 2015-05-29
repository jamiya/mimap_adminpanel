<script>
    
$('#categoryId').multiSelect();    
    
 function getAjax(url,callback){
     
    $.ajax({
      	url: url,  
       type: 'GET',    
    success: callback
     });
     
     
 }
 
 
  function postAjax(url,data,callback){
     
    $.ajax({
           type: "POST",
            url: url,
           data: data, 
        success: callback
         });
     
     
 }
 
  function refreshCatServ(){
     
     getAjax('cmservice/catserv',function(data) {
                        
         $("#modalCatServ #catservList").html(data);
         
    });
                        
 }
 
 
  $('#modalCatServ').on('show.bs.modal', function (e) {
       refreshCatServ();
 });
 
     
   $('#modalAdd').on('hide.bs.modal', function (e) {
       
       $('#modalAdd #modalmessage').empty();
       $('#modalAdd #serviceListName').val('');   
     //  $("#categoryId").multiSelect("deselectAll", false);

 });
 
 
     var response;
     
    $.validator.addMethod(
        "uniqueCategoryName", 
        function(value, element) {
            $.ajax({
                type: "POST",
                 url: "cmservice/namexist",
                data: "serviceName="+value,
            dataType:"html",
                success: function(data)
                {
                    response = ( data == "true" ) ? false : true;
                }
             });
            return response;
        },
        "Ийм нэртэй үйлчилгээ байна."
    );
     
 
   $("#addform").validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                
                rules:{
                serviceListName:{
                    required : true,
                    uniqueCategoryName: true
                      }
                },

                highlight: function (element) { // hightlight error inputs
                   $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                }
    }); 
    
function modalMessage(type,message){
       $("#modalAdd #modalmessage").html('<div class="alert alert-'+type+'">'+message+'</div>');
}

function updateModalMessage(type,message){
       $("#modalUpdate #modalmessage").html('<div class="alert alert-'+type+'">'+message+'</div>');
}
    
    
function addService(){

       if($("#addform").valid()){
         
              postAjax('cmservice/add',$("#addform").serialize(),function(data) { 
                 
                 if(data.responseResultType=="SUCCESS"){
                     
                     modalMessage('success','Хадгаллаа');
                     refreshList();
                     
                 }
                 else{
                     
                     modalMessage('danger','Алдаа');
                     
                 }
                  
              // console.log(data); // show response from the php script.
            });
         } 
  
}



function refreshList(){
    
     getAjax('cmservice/list',function(data) {
                        
        $("#serviceList").html(data);
        
       // $('#table_1').dataTable().draw();
        
    });
    
}


  $.validator.addMethod(
        "parentId", 
        function(value, element) {
            
           return (value == $('#modalEdit #categoryId').val()) ? false : true;
        },
        "Өөрийгөө агуулж болохгүй"
    );
 
   $("#updateform").validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
        rules: {
        categoryName: {
            required : true
        },    
        parentId: {
            parentId: true
        }
    },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label
                        .closest('.form-group').removeClass('has-error'); // set success class to the control group
                },

                submitHandler: function (form) {
                    success1.show();
                    error1.hide();
                }
    }); 



function updateCat(id){
    
     getAjax('cmcategory/update/'+id,function(data) {
                        
        $("#updateformBody").html(data);
        
        $('#modalUpdate').modal('show');
               
    });
        
}
    
function saveCat(){
    
       if($("#updateform").valid()){
         
              postAjax('cmcategory/update',$("#updateform").serialize(),function(data) { 
                 
                 if(data.responseResultType=="SUCCESS"){
                     
                    $('#modalUpdate').modal('hide');
                     flashMessage('success','Хадгаллаа');
                     refreshList();
                     
                 }
                 else{
                     
                     updateModalMessage('danger','Алдаа');
                     
                 }
                                
              // console.log(data); // show response from the php script.
            });
         }        
}
    




</script>
