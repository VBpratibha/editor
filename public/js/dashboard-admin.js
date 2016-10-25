as.dashboard = {};

as.dashboard.adjustWidgetsHeight = function () {
    var maxHeight = 0;
    jQuery(".panel-widget .panel-heading").height('auto');
    jQuery(".panel-widget .panel-heading").each(function () {
        if (jQuery(this).height() > maxHeight) {
            maxHeight = jQuery(this).height();
        }
    });
    jQuery(".panel-widget .panel-heading").height(maxHeight);
};

as.dashboard.initChart = function () {

    "use strict";

    var data = {
        labels: months,
        datasets: [
            {
                label: trans.chartLabel,
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: users
            }
        ]
    };

    var ctx = document.getElementById("myChart").getContext("2d");
    var myLineChart = new Chart(ctx).Line(data, {
        responsive: true,
        maintainAspectRatio: false,
        tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %> "+trans.new+" <%= value == 1 ? '"+trans.user+"' : '"+trans.users+"' %>",
    });
};

jQuery(document).ready(function () {

     "use strict";

    //as.dashboard.adjustWidgetsHeight();
    //as.dashboard.initChart();
});