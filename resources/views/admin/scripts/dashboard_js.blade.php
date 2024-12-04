<script>
    $(document).ready(function() {
        var fromDate = $('#from_date').val();
        var toDate = $('#to_date').val();

        getDashCounts(fromDate, toDate);
        getPieChart(fromDate, toDate);
        getWeeklyChart(fromDate, toDate);
        getSalesEnquiryChart(fromDate, toDate);
    });

    function interval(val) {
        var fromDate = $('#from_date').val();
        var toDate = $('#to_date').val();

        clearCountData(fromDate, toDate);
        getDashCounts(fromDate, toDate, val);
        getPieChart(fromDate, toDate, val);
        getWeeklyChart(fromDate, toDate, val);
        getSalesEnquiryChart(fromDate, toDate, val);
    }

    function applyFiler(val) {
        var fromDate = $('#from_date').val();
        var toDate = $('#to_date').val();

        clearCountData();
        getDashCounts(fromDate, toDate, val);
        getPieChart(fromDate, toDate, val);
        getWeeklyChart(fromDate, toDate, val);
        getSalesEnquiryChart(fromDate, toDate, val);
    }

    function clearCountData() {
        $('#sales_count').html(0);
        $('#support_count').html(0);
        $('#feedback_count').html(0);
        $('#request_count').html(0);
        $('#webinar_count').html(0);
        $('#total_count').html(0);
    }

    function getDashCounts(fromDate, toDate, interval = null) {
        // clearCountData();


        $.ajax({
            url: "{{ route('admin.dashboard.counts') }}",
            method: "get",
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                from_date: fromDate,
                to_date: toDate,
                interval: interval,
            },
            success: function(data) {

                $('#sales_count').html(data.salesCount);
                $('#support_count').html(data.customerCount);
                $('#feedback_count').html(data.feedbackCount);
                $('#request_count').html(data.requestCount);
                $('#webinar_count').html(data.webinarCount);
                $('#total_count').html(data.enquiriesCount);
            }
        });
    }

    function getPieChart(fromDate, toDate, interval = null) {

        $.ajax({
            url: "{{ route('admin.dashboard.pie') }}",
            method: "get",
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                from_date: fromDate,
                to_date: toDate,
                interval: interval,
            },
            success: function(data) {
                // console.log(data);
                pieChart(data);
            }
        });
    }

    function getWeeklyChart(fromDate, toDate, interval = null) {

        $.ajax({
            url: "{{ route('admin.dashboard.weekly') }}",
            method: "get",
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                from_date: fromDate,
                to_date: toDate,
                interval: interval,
            },
            success: function(data) {
                // console.log(data);
                weeklyChart(data);
            }
        });
    }

    function getSalesEnquiryChart(fromDate, toDate, interval = null) {

        $.ajax({
            url: "{{ route('admin.dashboard.sales') }}",
            method: "get",
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                from_date: fromDate,
                to_date: toDate,
                interval: interval,
            },
            success: function(data) {
                salesEnquiryChart(data);
            }
        });
    }

    $('#searchModal').click(function() {
        $('#filterModal').modal('show');
    });

    $('#clearFilter').click(function() {
        clearCountData();
        location.reload();
    });

    $('#applyFilter').on('click', function() {
        applyFiler();
        $('#filterModal').modal('hide');
    });
</script>
<script>
    function pieChart(data) {
        // document.addEventListener("DOMContentLoaded", function() {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-pie'), {
            chart: {
                type: "donut",
                fontFamily: 'inherit',
                height: 240,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false
                },
            },
            fill: {
                opacity: 1,
            },
            series: data.count,
            labels: data.title,
            tooltip: {
                theme: 'dark'
            },
            grid: {
                strokeDashArray: 4,
            },
            colors: [tabler.getColor("primary"), tabler.getColor("primary", 0.8), tabler.getColor(
                "primary", 0.6), tabler.getColor("gray-300")],
            legend: {
                show: true,
                position: 'bottom',
                offsetY: 12,
                markers: {
                    width: 10,
                    height: 10,
                    radius: 100,
                },
                itemMargin: {
                    horizontal: 8,
                    vertical: 8
                },
            },
            tooltip: {
                fillSeriesColor: false
            },
        })).render();
        // });
    }

    function weeklyChart(value) {
        window.ApexCharts && (new ApexCharts(document.getElementById('weekly-chart'), {
            chart: {
                type: "area",
                fontFamily: 'inherit',
                height: 240,
                parentHeightOffset: 0,
                toolbar: {
                    show: false,
                },
                animations: {
                    enabled: false
                },
                stacked: true,
            },
            dataLabels: {
                enabled: false,
            },
            fill: {
                opacity: .16,
                type: 'solid'
            },
            stroke: {
                width: 2,
                lineCap: "round",
                curve: "smooth",
            },
            series: [{
                    name: "Sales",
                    data: value.sales
                },
                {
                    name: "Support",
                    data: value.customer
                },
                {
                    name: "Feedback",
                    data: value.feedback
                }, {
                    name: "Request",
                    data: value.request
                }, {
                    name: "Webinar",
                    data: value.webinar
                }
            ],
            tooltip: {
                theme: 'dark'
            },
            grid: {
                padding: {
                    top: -20,
                    right: 0,
                    left: -4,
                    bottom: -4
                },
                strokeDashArray: 4,
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                axisBorder: {
                    show: false,
                },
                type: 'datetime',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: value.date,
            colors: [tabler.getColor("primary"), tabler.getColor("red")],
            legend: {
                show: false,
            },
        })).render();
    }

    function salesEnquiryChart(value) {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-social-referrals'), {
            chart: {
                type: "line",
                fontFamily: 'inherit',
                height: 288,
                parentHeightOffset: 0,
                toolbar: {
                    show: false,
                },
                animations: {
                    enabled: false
                },
            },
            fill: {
                opacity: 1,
            },
            stroke: {
                width: 2,
                lineCap: "round",
                curve: "smooth",
            },
            series: [{
                    name: "Sign Up",
                    data: value.signup
                },
                {
                    name: "Contact US",
                    data: value.contact_us
                },
                {
                    name: "MasterCard BNPL",
                    data: value.master_card_bnpl
                },
                {
                    name: "Master Card",
                    data: value.master_card
                },
                {
                    name: "MasterCard B2B",
                    data: value.master_card_b2b
                },
                {
                    name: "Beehive",
                    data: value.beehive
                },
                {
                    name: "Enbd BBG UAE",
                    data: value.enbd_bbg_uae
                },
                {
                    name: "Enbd BBG",
                    data: value.enbd_bbg
                },
                {
                    name: "Floating Button",
                    data: value.floating
                },
            ],
            tooltip: {
                theme: 'dark'
            },
            grid: {
                padding: {
                    top: -20,
                    right: 0,
                    left: -4,
                    bottom: -4
                },
                strokeDashArray: 4,
                xaxis: {
                    lines: {
                        show: true
                    }
                },
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                type: 'datetime',
            },
            yaxis: {
                tickAmount: 1,
                labels: {
                    padding: 4,
                    formatter: function(val) {
                        return Math.floor(val); // Rounds values to remove decimals
                    }
                },
            },
            labels: value.date,
            colors: [tabler.getColor("facebook"), tabler.getColor("primary", 0.6), tabler.getColor(
                    "twitter"), tabler.getColor("gray-300"), tabler.getColor("dribbble"), tabler
                .getColor("primary"), tabler.getColor("red"), tabler.getColor("lime"), tabler.getColor(
                    "green")
            ],
            legend: {
                show: true,
                position: 'bottom',
                offsetY: 12,
                markers: {
                    width: 10,
                    height: 10,
                    radius: 100,
                },
                itemMargin: {
                    horizontal: 8,
                    vertical: 8
                },
            },
        })).render();
    }
</script>
