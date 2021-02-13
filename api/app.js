$(document).ready(function(){
	$.ajax({
		url:"http://localhost/thesis_1/api/data.php",
		method: "GET",
		success: function(data){
			console.log(data);

			var grade = [];
			var term = [];

			for(var i in data){
				grade.push(data[i].cGrade);
				term.push(data[i].cSemester);
			}

			var chartdata = {
				labels: term,
				datasets : [
					{
						label: 'asdasd',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 0.75)',
						hoverBorderColor: 'rgba(200, 200, 200, 0.75)',
						data: grade
					}

				]
			};
			var ctx = document.getElementById('chart');
			var ctx = document.getElementById('chart').getContext('2d');
			var ctx = $('#chart');
			var barGraph = new Chart(ctx,{
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data){
			console.log(data);
		}

		});
	$.ajax({
		url:"http://localhost/thesis_1/api/data1.php",
		method: "GET",
		success: function(data1){
			console.log(data1);

			var student = [];
			var year = [];

			for(var i in data1){
				student.push(data1[i].aa);
				year.push(data1[i].cYearLevel);
			}

			var chartdata = {
				labels: student,
				datasets : [
					{
						label: 'asdasd',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 0.75)',
						hoverBorderColor: 'rgba(200, 200, 200, 0.75)',
						data: student
					}

				]
			};
			var ctx = document.getElementById('chart1');
			var ctx = document.getElementById('chart1').getContext('2d');
			var ctx = $('#chart1');
			var barGraph = new Chart(ctx,{
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data1){
			console.log(data1);
		}

		});

});