

(function($) {
    /* "use strict" */
	
 var dlabChartlist = function(){
	
	var screenWidth = $(window).width();
	let draw = Chart.controllers.line.__super__.draw; //draw shadow
		var pieChart2 = function(){
			 var options = {
			  series: [30, 40, 20, 30],
			  chart: {
			  type: 'donut',
			  height:260
			},
			dataLabels:{
				enabled: false
			},
			stroke: {
			  width: 0,
			},
			colors:['#2251F8', '#50D37D', '#AB31E4','#F87C22'],
			legend: {
				  position: 'bottom',
				  show:false
				},
			responsive: [{
			  breakpoint: 768,
			  options: {
			   chart: {
				  height:200
				},
				
			  }
			}]
			};

			var chart = new ApexCharts(document.querySelector("#pieChart2"), options);
			chart.render();
		
		}
	var widgetChart4 = function(){
		if(jQuery('#widgetChart4').length > 0 ){
			const widgetChart4 = document.getElementById("widgetChart4").getContext('2d');
			//generate gradient
			const widgetChart4gradientStroke = widgetChart4.createLinearGradient(0, 1, 0, 500);
			widgetChart4gradientStroke.addColorStop(0, "rgba(68, 129, 78, 1)");
			widgetChart4gradientStroke.addColorStop(1, "rgba(68, 129, 78, 1)");

			new Chart(widgetChart4, {
				type: "line",
				data: {
					labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "January", "February", "March", "April"],

					datasets: [{
						label: "Sales Stats",
						borderColor: 'transparent',
						pointBackgroundColor: '#44814E',
						pointBorderColor: '#44814E',
						borderWidth:4,
						borderRadius:10,
						pointHoverBackgroundColor: '#44814E',
						pointHoverBorderColor: '#44814E',
						backgroundColor: widgetChart4gradientStroke,
						
						data: [12, 20, 16, 13, 16, 24, 20, 21, 19, 23, 17, 14, 24, 21, 13, 15, 27, 29, 21, 11, 14, 19, 21, 17]
					}]
				},
				options: {
					title: {
						display: !1
					},
					tooltips: {
						intersect: !1,
						mode: "nearest",
						xPadding: 10,
						yPadding: 10,
						caretPadding: 10
					},
					
					legend: {
						display: !1
					},
					responsive: !0,
					maintainAspectRatio: !1,
					hover: {
						mode: "index"
					},
					scales: {
						xAxes: [{
							display: !1,
							gridLines: !1,
							scaleLabel: {
								display: !0,
								labelString: "Month"
							}
						}],
						yAxes: [{
							display: !1,
							gridLines: !1,
							scaleLabel: {
								display: !0,
								labelString: "Value"
							},
							ticks: {
								beginAtZero: !0
							}
						}]
					},
					elements: {
						point: {
							radius: 0,
							borderWidth: 0
						}
					},
					layout: {
						padding: {
							left: 0,
							right: 0,
							top: 5,
							bottom: 0
						}
					}
				}
			});

		}
	}
	var widgetChart5 = function(){
		if(jQuery('#widgetChart5').length > 0 ){
			const widgetChart5 = document.getElementById("widgetChart5").getContext('2d');
			//generate gradient
			const widgetChart4gradientStroke = widgetChart5.createLinearGradient(0, 1, 0, 500);
			widgetChart4gradientStroke.addColorStop(0, "rgba(68, 129, 78, 1)");
			widgetChart4gradientStroke.addColorStop(1, "rgba(68, 129, 78, 1)");

			new Chart(widgetChart5, {
				type: "line",
				data: {
					labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "January", "February", "March", "April"],

					datasets: [{
						label: "Sales Stats",
						borderColor: 'transparent',
						pointBackgroundColor: '#44814E',
						pointBorderColor: '#44814E',
						borderWidth:4,
						borderRadius:10,
						pointHoverBackgroundColor: '#44814E',
						pointHoverBorderColor: '#44814E',
						backgroundColor: widgetChart4gradientStroke,
						
						data: [12, 20, 16, 13, 16, 24, 20, 21, 19, 23, 17, 14, 24, 21, 13, 15, 27, 29, 21, 11, 14, 19, 21, 17]
					}]
				},
				options: {
					title: {
						display: !1
					},
					tooltips: {
						intersect: !1,
						mode: "nearest",
						xPadding: 10,
						yPadding: 10,
						caretPadding: 10
					},
					
					legend: {
						display: !1
					},
					responsive: !0,
					maintainAspectRatio: !1,
					hover: {
						mode: "index"
					},
					scales: {
						xAxes: [{
							display: !1,
							gridLines: !1,
							scaleLabel: {
								display: !0,
								labelString: "Month"
							}
						}],
						yAxes: [{
							display: !1,
							gridLines: !1,
							scaleLabel: {
								display: !0,
								labelString: "Value"
							},
							ticks: {
								beginAtZero: !0
							}
						}]
					},
					elements: {
						point: {
							radius: 0,
							borderWidth: 0
						}
					},
					layout: {
						padding: {
							left: 0,
							right: 0,
							top: 5,
							bottom: 0
						}
					}
				}
			});

		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
 
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				pieChart2();
				widgetChart4();
				widgetChart5();
				
			},
			
			resize:function(){
			}
		}
	
	}();

	
		
	jQuery(window).on('load',function(){
		setTimeout(function(){
			dlabChartlist.load();
		}, 1000); 
		
	});

     

})(jQuery);