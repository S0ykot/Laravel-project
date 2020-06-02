
$(document).ready(function(){
	$('.goHome').on('click',function goHome(){
        window.location='http://localhost:3000//student/home';
    });

    $('.goToTopics').on('click',function goToTopics(){
        window.location='http://localhost:3000/student/availableTopics';
    });

    $('#apply').on('click',function applyTopic(){
        window.location='http://localhost:3000/studentTopics';
    });

    $('.details').on('click',function applyTopic(){
        window.location='http://localhost:3000/studentTopics/topicDetails/'+$('.details').val();
    });

    $('.myResearch').on('click',function myResearch(){
        window.location='http://localhost:3000/student/research';
    });

    $('#abc').on('keyup',function(event){
        var token = $('input[name=_token]').val();
        var searchValue = $(this).val();
        $.ajax({
            url:'http://localhost:3000/student/availableTopics/search',
            method:'POST',
            data:{_token:token, value:searchValue},
            success:function(response){
                $('#studentInfo').html(response);
            },
            error: function(error){
                alert(error.status);
            }
        });
    });

    $(document).on('click','.page-link',function(event){
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        var token = $('input[name=_token]').val();

        $.ajax({
            url:'http://localhost:3000/student/availableTopics',
            method:'POST',
            data:{_token:token, page:page},
            success:function(response){
                $('#page').html(response);
            },
            error: function(error){
                alert(error.status);
            }
        });
    });
});

function goTo(value){
	window.location='http://localhost:3000/student/topic/details/'+value;
}

function apply(value){
    window.location='http://localhost:3000/studentTopics/apply/'+value;
}

function addMember(value){
    window.location='http://localhost:3000/group/addMember/'+value;
}

function groupDetails(value){
    window.location='http://localhost:3000/studentGroup';
}

function memberDetails(value){
    window.location='http://localhost:3000/group/memberDetails/'+value;
}

function download(value){
    window.location='http://localhost:3000/studentDownload/download/'+value;
}