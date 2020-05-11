
$(document).ready(function(){


    $('#btn_basic_information').click(function(){

        var surnameError= '';
        var firstname_error='';
        var error_age ='';

        if($.trim($('#surname').val()).length==0){
            surnameError ='Surname is required';
            $('#error_surname').text(surnameError);
            $('#surname').addClass('has_error');
           

        } else{
            var surnameError= '';
            $('#error_surname').text(surnameError);
            $('#surname').removeClass('has_error');
        }
        if($.trim($('#firstname').val()).length==0){
            firstname_error ='First Name is required';
            $('#error_firstname').text(firstname_error);
            $('#firstname').addClass('has_error');

        } else {
            var firstname_error='';
            $('#error_firstname').text(firstname_error);
            $('#firstname').removeClass('has_error');
        }
        
        if($.trim($('#datepicker').val()).length ==0){
            error_age ='Age is required';
            $('#error_age').text(error_age);
            $('#datepicker').addClass('has_error');
        }
        else{
            error_age ='';
            $('#error_age').text(error_age);
            $('#datepicker').removeClass('has_error');
        }
        if(surnameError !='' || firstname_error !='' || error_age != ''){
            return false;
        }
        else{
            $('#list_basic_information').removeClass('active active_tab1');
            $('#list_basic_information').removeAttr('href data-toggle');
            $('#basic_information').removeClass('active');
            // $('#basic_information').addClass('fade');
            $('#list_basic_information').addClass('inactive_tab1');
            $('#list_personal_information').removeClass('inactive_tab1');
            $('#list_personal_information').addClass('active_tab1 active');
            $('#list_personal_information').attr('href', '#personal_information');
            $('#list_personal_information').attr('data-toggle', 'tab');
            $('#personal_information').removeClass(' fade ');
            $('#personal_information').addClass('active');
        

        }


    })

    $('#btn_personal_information_prev').click(function(){
        
        $('#list_basic_information').addClass('active active_tab1');
        // $('#list_basic_information').removeAttr('href data-toggle');
        $('#basic_information').addClass('active');
        $('#basic_information').removeClass('fade');
        $('#list_basic_information').addClass('active_tab1');
        $('#list_personal_information').addClass('inactive_tab1');
        $('#list_personal_information').removeClass('active_tab1 active');
        $('#list_personal_information').attr('href', '#basic_information');
        $('#list_personal_information').attr('data-toggle', 'tab');
        $('#personal_information').addClass(' fade ');
        $('#personal_information').removeClass('active');

    })

    $('#btn_personal_information_nxt').click(function(){

        var error_genotype='';
        var error_blood_group='';
        var error_health_issue='';

        if($.trim($('#genotype').val()).length==0){
            error_genotype=" Genotype is required";
            $('#error_genotype').text(error_genotype);
            $('#genotype').addClass('has_error');

        }
        else {
            error_genotype='';
            $('#error_genotype').text(error_genotype);
            $('#genotype').removeClass('has_error');
        }
        if($.trim($('#bloodgroup').val()).length==0){
            error_blood_group=" Bloodgroup is required";
            $('#error_blood_group').text(error_blood_group);
            $('#bloodgroup').addClass('has_error');
        }
       else  {
        error_blood_group='';
        $('#error_blood_group').text(error_blood_group);
        $('#bloodgroup').removeClass('has_error');
       }
       if($.trim($('#healthissue').val()).length==0){
        error_health_issue=" Health state is required";
            $('#error_health_issue').text(error_health_issue);
            $('#healthissue').addClass('has_error');
        } else{

            error_health_issue='';
            $('#error_health_issue').text(error_health_issue);
            $('#healthissue').removeClass('has_error');
        }
        if(error_genotype !=''  || error_blood_group !='' || error_health_issue != ''){
            return false;
        }
        else{

            $('#list_personal_information').removeClass('active active_tab1');
            $('#list_personal_information').removeAttr('href data-toggle');
            $('#list_personal_information').addClass('inactive_tab1');
            $('#personal_information').addClass('fade');
            $('#personal_information').removeClass('active');

            $('#list_education_information').removeClass('inactive_tab1');
            $('#list_education_information').addClass('active active_tab1');
            $('#list_education_information').attr('href', '#pervious_eduction_info');
            $('#list_education_information').attr('data-toggle', 'tab');
            $('#pervious_eduction_info').removeClass('fade');
            $('#pervious_eduction_info').addClass('active in');

        }

        
    })


    $('#btn_eduction_prev').click(function(){
        $('#list_church_information').addClass('active active_tab1');
        $('#list_church_information').removeAttr('href data-toggle');
        $('#list_eduction_information').addClass('inactive_tab1');
        $('#personal_information').removeClass('fade');
        $('#personal_information').addClass('active');

        $('#list_education_information').addClass('inactive_tab1');
        // $('#list_education_information').addClass('active active_tab1');
        // $('#list_education_information').attr('href', '#pervious_eduction_info');
        // $('#list_education_information').attr('data-toggle', 'tab');
        $('#pervious_eduction_info').addClass('fade');
        $('#pervious_eduction_info').removeClass('active');
    })



    $('#btn_eduction_next').click(function(){

        var pry_sch_name_error ='';
        var pry_sch_start_date_error ='';
        var pry_sch_end_date_error= '';
        if($.trim($('#pry_sch_name').val()).length==0){
            pry_sch_name_error= "Primay School name is required";
            $('#pry_sch_name_error').text(pry_sch_name_error);
            $('#pry_sch_name').addClass('has_error');
        }else{
            pry_sch_name_error= "";
            $('#pry_sch_name_error').text(pry_sch_name_error);
            $('#pry_sch_name').removeClass('has_error');
        }
        if($.trim($('#prystartdatepicker').val()).length==0){
            pry_sch_start_date_error= "Start date is required";
            $('#pry_sch_start_date_error').text(pry_sch_start_date_error);
            $('#prystartdatepicker').addClass('has_error');
        }else{
            pry_sch_start_date_error= "";
            $('#pry_sch_start_date_error').text(pry_sch_start_date_error);
            $('#prystartdatepicker').removeClass('has_error');
        }
        if($.trim($('#pryenddatepicker').val()).length==0){
            pry_sch_end_date_error= "Primay School name is required";
            $('#pry_sch_end_date_error').text(pry_sch_end_date_error);
            $('#pryenddatepicker').addClass('has_error');
        }else{
            pry_sch_end_date_error= "";
            $('#pry_sch_end_date_error').text(pry_sch_end_date_error);
            $('#pryenddatepicker').removeClass('has_error');
        }

        if(pry_sch_name_error !=''|| pry_sch_start_date_error !='' || pry_sch_end_date_error !='' ){
            return false;
        } else{
            $('#list_education_information').removeClass('active active_tab1');
        $('#list_education_information').removeAttr('href data-toggle');
        $('#list_education_information').addClass('inactive_tab1');

        $('#list_church_information').removeClass('inactive_tab1');
        $('#list_church_information').addClass('active active_tab1');
        $('#church_details').removeClass('fade');
        $('#church_details').addClass('active');

        // $('#list_education_information').addClass('inactive_tab1');
        // $('#list_education_information').addClass('active active_tab1');
        // $('#list_education_information').attr('href', '#pervious_eduction_info');
        // $('#list_education_information').attr('data-toggle', 'tab');
        $('#pervious_eduction_info').addClass('fade');
        $('#pervious_eduction_info').removeClass('active');
        }

        
    })

    $('#btn_church_prev').click(function(){
        $('#list_church_information').removeClass('active_tab1');
        $('#list_church_information').addClass('inactive_tab1');
        $('#church_details').addClass('fade');
        $('#church_details').removeClass('active');

        $('#list_education_information').removeClass('inactive_tab1');
        $('#list_education_information').addClass('active active_tab1');
        $('#pervious_eduction_info').removeClass('fade');
        $('#pervious_eduction_info').addClass('active');
    })
    $('#btn_church_next').click(function(){
        $('#list_parent_information').removeClass('inactive_tab1');
        $('#list_parent_information').addClass('active_tab1');

        $('#parent_information').removeClass('fade');
        $('#parent_information').addClass('active');

        $('#list_church_information').removeClass('active_tab1');
        $('#list_church_information').addClass('inactive_tab1');
        $('#church_details').addClass('fade');
        $('#church_details').removeClass('active');

        // hide submit button

        $('#btn_submit').hide();

    })

    $('#btn_parent_details_prev').click(function(){
        $('#list_parent_information').addClass('inactive_tab1');
        $('#list_parent_information').removeClass('active_tab1');

        $('#parent_information').addClass('fade');
        $('#parent_information').removeClass('active');

        $('#list_church_information').addClass('active_tab1');
        $('#list_church_information').removeClass('inactive_tab1');
        $('#church_details').removeClass('fade');
        $('#church_details').addClass('active');


    })

    $('#btn_parent_details_next').click(function(){
        var parent_name_error='';
        var parent_address_error='';
        var parent_professional_error='';
        var parent_phone_number_error='';

        if($.trim($('#parent_name').val()).length==0){
            parent_name_error = 'Parent name is required';
            $('#parent_name_error').text(parent_name_error);
            $('#parent_name').addClass('has_error');
        }
        else{
            parent_name_error = '';
            $('#parent_name_error').text(parent_name_error);
            $('#parent_name').removeClass('has_error');
        }
        if($.trim($('#parent_address').val()).length==0){
            parent_address_error='Address is required '
            $('#parent_address_error').text(parent_address_error);
            $('#parent_address').addClass('has_error');
        }
        else{
            parent_address_error=''
            $('#parent_address_error').text(parent_address_error);
            $('#parent_address').removeClass('has_error');
        }

        if($.trim($('#parent_occupation').val()).length==0){
            parent_professional_error='Parent occupation is required '
            $('#parent_professional_error').text(parent_professional_error);
            $('#parent_occupation').addClass('has_error');
        }
        else{
            parent_professional_error=''
            $('#parent_professional_error').text(parent_professional_error);
            $('#parent_occupation').removeClass('has_error');
        }

        if($.trim($('#parent_phone_number').val()).length==0){
            parent_phone_number_error='Phone number is required '
            $('#parent_phone_number_error').text(parent_phone_number_error);
            $('#parent_phone_number').addClass('has_error');
        }
        else{
            parent_phone_number_error=''
            $('#parent_phone_number_error').text(parent_phone_number_error);
            $('#parent_phone_number').removeClass('has_error');
        }

        if(parent_name_error !='' || parent_phone_number_error !='' || parent_professional_error !='' || parent_address_error !=''){
            return false;
        }else{
            $('#btn_parent_details_next').hide();
            $('#btn_submit').show();
        }

    })

})