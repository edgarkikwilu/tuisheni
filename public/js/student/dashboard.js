$('select[name="subject"]').on('change', function(){
    var subjectId = $(this).val();
    
    if(subjectId) {
      $.ajax({
      url: '/student/gettopics/'+subjectId,
      type:"GET",
      dataType:"json",
      data:{id: subjectId},      
          success:function(data) {
              $('select[name="topic"]').empty();
              $.each(data, function(key, value){
              $('select[name="topic"]').append('<option value="'+ key +'">' + value + '</option>');
          });
          }
      });
    } else {
        $('select[name="topic"]').empty();
    }

});

$('select[name="topic"]').on('change', function(){
    var topicId = $(this).val();
    
    if(topicId) {
      
        $.ajax({
            url: '/student/getsubtopics/'+topicId,
            type:"GET",
            dataType:"json",
            data:{id: topicId},
            success:function(data) {
                $('select[name="subtopic"]').empty();
                $.each(data, function(key, value){
                    $('select[name="subtopic"]').append('<option value="'+ key +'">' + value + '</option>');
                });
            }
        });
    } else {
        $('select[name="subtopic"]').empty();
    }

});

$('.btnAdd').on('click', function(e){
    // e.preventDefault();
    $('.uploader').clone().prependTo('.buttonAdd');
});

$('.btnShowNotification').click(function(e){
    e.preventDefault();
    var id = $(this).val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $.ajax({
        url: '/read/message',
        method: 'post',
        data: {id: id},
        success: function(data){
            console.log(data);
        },
        error:function(error){
            console.log(error);
        }
    });
});

// charts
var votes;
var weeklyPoints;
var monthlyPoints;
var weeklyExamsAverageScore;
var monthlyExamsAverageScore;
var contentCollection;

$.ajax({
    url: "/student/chart/data",
    data: {},
    type: 'GET',
    success: function(data){
        weeklyPoints = data.weeklyPoints;
        monthlyPoints = data.monthlyPoints;
        weeklyExamsAverageScore = data.weeklyPerfomance;
        monthlyExamsAverageScore = data.monthlyPerfomance;
        contentCollection = data.contentCollection;
    },
    error:function(error){
        alert('error');
    }
});

$(document).ajaxComplete(function(){

/*
this shows monthly earned points in the current year
*/
gradientBarChartConfiguration = {
    maintainAspectRatio: false,
    legend: {
      display: false
    },

    tooltips: {
      backgroundColor: '#fff',
      titleFontColor: '#333',
      bodyFontColor: '#666',
      bodySpacing: 4,
      xPadding: 12,
      mode: "nearest",
      intersect: 0,
      position: "nearest"
    },
    responsive: true,
    scales: {
      yAxes: [{

        gridLines: {
          drawBorder: true,
          color: 'rgba(129,140,48,0.1)',
          zeroLineColor: "transparent",
        },
        ticks: {
          suggestedMin: 60,
          suggestedMax: 120,
          padding: 20,
          fontColor: "#9e9e9e"
        }
      }],

      xAxes: [{

        gridLines: {
          drawBorder: false,
          color: 'rgba(29,140,248,0.1)',
          zeroLineColor: "transparent",
        },
        ticks: {
          padding: 20,
          fontColor: "#9e9e9e"
        }
      }]
    }
  };
var ctx = document.getElementById("yearPointChart").getContext('2d');
var yearPointChart = new Chart(ctx, {
type: 'bar',
data: {
    labels: ['January', 'February', 'March', 'April', 'May', 'June','July','Aug', 'Sep', 'Oct',
            'Nov','Dec'],
    datasets: [{
        label: '',
        data: monthlyExamsAverageScore,
        backgroundColor:
            'rgba(255, 199, 12, 0.2)',
        borderColor: '#1f8ef1',
        borderWidth: 1
    }]
},
options: gradientBarChartConfiguration
});

$('#0').click(function(e){
e.preventDefault();
var ctx = document.getElementById("yearPointChart").getContext('2d');
var yearPointChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June','July','Aug', 'Sep', 'Oct',
                'Nov','Dec'],
        datasets: [{
            label: 'Average Score This Year',
            data: monthlyExamsAverageScore,
            backgroundColor:
                'rgba(255, 199, 12, 0.2)',
            borderColor: '#1f8ef1',
            borderWidth: 1
        }]
    },
    options: gradientBarChartConfiguration
});

});
$('#1').click(function(e){
e.preventDefault();
var ctx = document.getElementById("yearPointChart").getContext('2d');
var yearPointChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June','July','Aug', 'Sep', 'Oct',
                'Nov','Dec'],
        datasets: [{
            label: 'Earned Points This Year',
            data: monthlyPoints,
            backgroundColor:
                'rgba(255, 199, 12, 0.2)',
            borderColor: '#1f8ef1',
            borderWidth: 1
        }]
    },
    options: gradientBarChartConfiguration
});

});


/**
* this shows weekly earned points
*/
var ctx = document.getElementById("weeklyPointChart").getContext('2d');
var weeklyPointChart = new Chart(ctx, {
type: 'line',
data: {
    labels:['week 1', 'week 2', 'week 3', 'week 4'],
    datasets:[{
        data: weeklyPoints,
        backgroundColor: '#fff',
        borderColor: '#000',
        borderWidth: 0.5
    }]
},
options: gradientBarChartConfiguration
});

/**
* this shows weekly perfomance
*/
var ctx = document.getElementById("weeklyPerfomanceChart").getContext('2d');
var weeklyPointChart = new Chart(ctx, {
type: 'line',
data: {
    labels:['week 1', 'week 2', 'week 3', 'week 4'],
    datasets:[{
        data: weeklyExamsAverageScore,
        backgroundColor: '#fff',
        borderColor: '#000',
        borderWidth: 0.5
    }]
},
options: gradientBarChartConfiguration
});

/**
* this shows uploaded content analysis
*/
var ctx = document.getElementById("uploadedContentAnalysis").getContext('2d');
var uploadedContentAnalysisChart = new Chart(ctx, {
type: 'bar',
data: {
    labels:['Notes', 'Exams', 'Quiz', 'Tutorials'],
    datasets:[{
        data: contentCollection,
        backgroundColor: '#fff',
        borderColor: '#000',
        borderWidth: 0.5
    }]
},
options: gradientBarChartConfiguration
});

});
// End of Ajax complete Method
