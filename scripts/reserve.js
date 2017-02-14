var disabled_dates;
var disabled_times;
var max_people = {25,55,100}

function initDP(){
        $("#datepicker").datepicker({
        beforeShowDay: function(date){
            var s = $.datepicker.formatDate('mm/dd/yyyy');
            return [taken.indexOf(s) == -1]
        },
        minDate:"+2D",
        maxDate:"+2M",
        onSelect:function(){
            var input = $(this).val();
            disabled_times = getTimesByDateRoom(input,$("#room").val());
            $("#time").removeAttr("disabled");
            
        }
    });
}

function getDatesByRoom(room){
    $.ajax('/reserve/data.php?query=datesByRoom',{
        data:{'room':room},
        method:POST,
        complete:function(response,status){
            if(response=="success"){
                return JSON.parse(response);
            }else{
                alert('An unknown error occured!');
            }
        }
    })
    
}

function getTimesByDateRoom(date,room){
    $.ajax('/reserve/data.php?query=timesByDateRoom',{
        data:{
            'room':room,
            'date':date,
        },
        method:POST,
        complete:function(response,status){
            if(response=="success"){
                return JSON.parse(response);
            }else{
                alert('An unknown error occured!');
            }
        }
    })
    
}

function refreshDates(){
    $("#datepicker").datepicker("remove");
    initDP();
}

$(function(){
    $("#room").change(function(){
        var in = $(this).val();
        
        $("#datepicker").removeAttr("disabled");
        $("#number").removeAttr("disabled");
        disabled_dates = getDatesByRoom(in);
        $("#number").attr("max",max_people[in-1]);
        refreshDates();
    });
    
});