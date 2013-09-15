				var graph = new Rickshaw.Graph({
					element: document.querySelector("#chart"),
					width: 720,
					height: 320,
					renderer: 'area',
					series: [{ 
								name: "test",
								data:[
									{x:1,y:10},
									{x:2,y:5},
									{x:3,y:7}
									],
								color: "rgb(255,0,0)"
							}]
				});
				
				graph.render();