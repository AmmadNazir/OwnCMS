<div class="welcome">
    <h2>Welcome To GraphCart, Ammad</h2>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="total-front visitor">
                <h4>Total <b>Visitior</b></h4>
                <i class="fa fa-globe pull-right"></i>
                <h3>22,536</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="total-front sale">
                <h4>Total <b>Sale</b></h4>
                <i class="fa fa-shopping-basket pull-right"></i>
                <h3>22,536</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="total-front income">
                <h4>Total <b>Income</b></h4>
                <i class="fa fa-money pull-right"></i>
                <h3>22,536</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="total-front user">
                <h4>Total <b>User</b></h4>
                <i class="fa fa-users pull-right"></i>
                <h3>22,536</h3>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['Mushrooms', 3],
                ['Onions', 1],
                ['Olives', 1],
                ['Zucchini', 1],
                ['Pepperoni', 2]
            ]);

            // Set chart options
            var options = {'title':'How Much Pizza I Ate Last Night',
                'width':400,
                'height':300};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
    <div id="chart_div"></div>
</div>