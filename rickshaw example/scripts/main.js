
			var palette = new Rickshaw.Color.Palette();

			var graph = new Rickshaw.Graph( {
					element: document.querySelector("#chart"),
					width: 720,
					height: 320,
					renderer: 'line',
					series: [
							{
									name: "Japan",
									data: [ { x: -157766400, y: 17.8 }, { x: -126230400, y: 17.3 }, { x: -94694400, y: 17.8 }, { x: -63158400, y: 18.0 }, { x: -31536000, y: 18.3 }, { x: 0, y: 19.2 },  { x: 31536000, y: 19.5 }, { x: 63072000, y: 20.2 }, { x: 94694400, y: 21.9 }, { x: 126230400, y: 22.4 }, { x: 157766400, y: 20.4 }, { x: 189302400, y: 21.2 }],
									color: 'rgba(255,0,0,1)'
							},
							{
									name: "Spain",
									data: [ { x: -157766400, y: 14.7 }, { x: -126230400, y: 13.6 }, { x: -94694400, y: 16.9 }, { x: -63158400, y: 16.1 }, { x: -31536000, y: 16.4 }, { x: 0, y: 15.9 },  { x: 31536000, y: 16.2 }, { x: 63072000, y: 17.1 }, { x: 94694400, y: 17.7 }, { x: 126230400, y: 17.1 }, { x: 157766400, y: 18.4 }, { x: 189302400, y: 18.4 }],
									color: 'rgba(255,127,127,1)'
							},
							{
									name: "Switzerland",
									data: [ { x: -157766400, y: 17.5 }, { x: -126230400, y: 18.1 }, { x: -94694400, y: 18.1 }, { x: -63158400, y: 18.9 }, { x: -31536000, y: 19.9 }, { x: 0, y: 19.2 },  { x: 31536000, y: 18.9 }, { x: 63072000, y: 19.3 }, { x: 94694400, y: 21.3 }, { x: 126230400, y: 22.1 }, { x: 157766400, y: 23.8 }, { x: 189302400, y: 25.1 }],
									color: 'rgba(127,255,0,1)'
							},
							{
									name: "United Kingdom",
									data: [ { x: -157766400, y: 30.4 }, { x: -126230400, y: 31.2 }, { x: -94694400, y: 33.1 }, { x: -63158400, y: 34.3 }, { x: -31536000, y: 36.0 }, { x: 0, y: 36.7 },  { x: 31536000, y: 34.8 }, { x: 63072000, y: 33.1 }, { x: 94694400, y: 31.2 }, { x: 126230400, y: 34.2 }, { x: 157766400, y: 34.9 }, { x: 189302400, y: 34.8 }],
									color: 'rgba(0,255,255,1)'
							},
							{
									name: "United States",
									data: [ { x: -157766400, y: 24.7 }, { x: -126230400, y: 25.0 }, { x: -94694400, y: 26.1 }, { x: -63158400, y: 25.5 }, { x: -31536000, y: 27.9 }, { x: 0, y: 27.0 },  { x: 31536000, y: 25.0 }, { x: 63072000, y: 25.6 }, { x: 94694400, y: 25.5 }, { x: 126230400, y: 26.2 }, { x: 157766400, y: 25.6 }, { x: 189302400, y: 24.9 }],
									color: 'rgba(255,0,255,1)'
							},
					]
			});
			
			var x_axis = new Rickshaw.Graph.Axis.Time( { graph: graph } );
			
			var y_axis = new Rickshaw.Graph.Axis.Y( {
					graph: graph,
					orientation: 'left',
					tickFormat: Rickshaw.Fixtures.Number.formatKMBT,
					element: document.getElementById('y_axis'),
			});
			
			var legend = new Rickshaw.Graph.Legend( {
					element: document.querySelector('#legend'),
					graph: graph
			});
			
			var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight({
   					graph: graph,
    				legend: legend
			});
			
			var hoverDetail = new Rickshaw.Graph.HoverDetail( {
    				graph: graph
			});
			
			var offsetForm = document.getElementById('offset_form');
			
			offsetForm.addEventListener('change', function(e) {
					var offsetMode = e.target.value;
			
					if (offsetMode == 'lines') {
							graph.setRenderer('line');
					} else {
							graph.setRenderer('bar');
							graph.renderer.unstack = true;
					}       
					graph.render();
			
			}, false);
			
			graph.render();
		
		