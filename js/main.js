$(document).ready(function(){
    $('.search-button').click(function(){
        $('.search-form').slideToggle('animate');
        return false;
    })

    $('#Property_country').change(function(){
        var id = $(this).val();
        $('#Property_city').html('<option>Loading...</option>');
        $('#Property_area').html('<option>-- pick city --</option>');
        $('#Property_city').load('/ajax/cityList', {id:id});

    });
    $('#Property_city').change(function(){
        var id = $(this).val();
        $('#Property_area').html('<option>Loading...</option>');
        $('#Property_area').load('/ajax/cityList', {id:id});
    });



});


function loader(){

}