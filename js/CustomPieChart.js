		var pieData = [
				{	
					value: 10,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Excellent"
				},
				{	
					value: 30,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Good"
				},
				{	
					value: 6,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Average"
				},
				{	
					value: 4,
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "Bad"
				}
			];

			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myPie = new Chart(ctx).Pie(pieData);
			};