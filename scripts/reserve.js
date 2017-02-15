var disabledDates = [];
var disabledTimes = [];
var maxPeople = [5,55,100];
var dpActive = false;

function initDP(){
        $("#datepicker").datepicker({
        beforeShowDay: function(date){
            var s = $.datepicker.formatDate('mm/dd/yyyy');
            return [disabledTimes.indexOf(s) == -1]
        },
        minDate:"+2D",
        maxDate:"+2M",
        onSelect:function(){
            var input = $(this).val();
            disabledTimes = getTimesByDateRoom(input,$("#room").val());
            $("#time").removeAttr("disabled");
            
        }
    });
    dpActive = true;
}

function getDatesByRoom(room){
    /**$.ajax('/reserve/data.php?query=datesByRoom',{
        data:{'room':room},
        method:POST,
        complete:function(response,status){
            if(response=="success"){
                return JSON.parse(response);
            }else{
                alert('An unknown error occured!');
            }
        }
    });*/
    return["02/17/2017"];
    
}

function getTimesByDateRoom(date,room){
    /**$.ajax('/reserve/data.php?query=timesByDateRoom',{
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
    });*/
    return [];
    
}

function getPrice(pacakge, number){
    
}

function refreshDates(){
    if(dpActive)$("#datepicker").datepicker("remove");
    initDP();
}

$(function(){
    $("#room").change(function(){
        var input = $(this).val();
        
        $("#datepicker").removeAttr("disabled");
        $("#number").removeAttr("disabled");
        disabledDates = getDatesByRoom(input);
        $("#number").attr("max",maxPeople[input-1]);
        refreshDates();
    });
    
});