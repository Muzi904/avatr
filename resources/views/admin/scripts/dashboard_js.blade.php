<script>
    $(document).ready(function() {

        getDashCounts();

        $('#dash_filter').click(function() {
            clearCountData();
            getDashCounts();
        });
    });

    function interval(val) {
        var fromDate = $('#from_date').val();
        var toDate = $('#to_date').val();

        clearCountData();
        getDashCounts(val);

    }

    function applyFiler(val) {
        var fromDate = $('#from_date').val();
        var toDate = $('#to_date').val();

        clearCountData();
        getDashCounts();

    }

    function clearCountData() {
        $('#totalEnquiryCount').html(0);
        $('#contactEnquiryCount').html(0);
        $('#experienceEnquiryCount').html(0);

    }

    function assignValue(fromDate, toDate) {
        $('#from_date_total').val(fromDate);
        $('#to_date_total').val(toDate);
        $('#from_date_contact').val(fromDate);
        $('#to_date_contact').val(toDate);
        $('#from_date_experience').val(fromDate);
        $('#to_date_experience').val(toDate);

    }

    function getDashCounts(interval = null) {
        clearCountData();

        var fromDate = $('#from_date').val();
        var toDate = $('#to_date').val();

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
                assignValue(data.startDate, data.endDate);

                $('#totalEnquiryCount').html(data.totalEnquiryCount);
                $('#contactEnquiryCount').html(data.contactEnquiryCount);
                $('#experienceEnquiryCount').html(data.experienceEnquiryCount);

                totalEnqGraphTitle = data.dayWiseTotalEnquiryCounts.date;
                totalEnqGraphCount = data.dayWiseTotalEnquiryCounts.count;
                totalCountGraph(totalEnqGraphTitle, totalEnqGraphCount);
                console.log(totalEnqGraphTitle, totalEnqGraphCount);

                contactEnqGraphTitle = data.dayWiseContactEnquiryCount.date;
                contactEnqGraphCount = data.dayWiseContactEnquiryCount.count;
                contactCountGraph(contactEnqGraphTitle, contactEnqGraphCount);

                experienceEnqGraphTitle = data.dayWiseExperienceEnquiryCount.date;
                experienceEnqGraphCount = data.dayWiseExperienceEnquiryCount.count;
                experienceCountGraph(experienceEnqGraphTitle, experienceEnqGraphCount);

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




    function totalCountGraph(title, count) {
        window.ApexCharts && (new ApexCharts(document.getElementById('total-enquiry-count'), {
            chart: {
                type: "area",
                fontFamily: 'inherit',
                height: 40.0,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false
                },
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
                name: "counts",
                data: count
            }],
            tooltip: {
                theme: 'dark'
            },
            grid: {
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
                    padding: 4,
                    formatter: (value) => {
                        return value.toFixed(0)
                    },
                },
            },
            labels: title,
            colors: ['#333CFF'],
            legend: {
                show: false,
            },
        })).render();
    }

    function contactCountGraph(title, count) {
        window.ApexCharts && (new ApexCharts(document.getElementById('contact-enquiry-count'), {
            chart: {
                type: "area",
                fontFamily: 'inherit',
                height: 40.0,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false
                },
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
                name: "counts",
                data: count
            }],
            tooltip: {
                theme: 'dark'
            },
            grid: {
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
                    padding: 4,
                    formatter: (value) => {
                        return value.toFixed(0)
                    },
                },
            },
            labels: title,
            colors: ['#0099ff'],
            legend: {
                show: false,
            },
        })).render();
    }

    function experienceCountGraph(title, count) {
        window.ApexCharts && (new ApexCharts(document.getElementById('experience-enquiry-count'), {
            chart: {
                type: "area",
                fontFamily: 'inherit',
                height: 40.0,
                sparkline: {
                    enabled: true
                },
                animations: {
                    enabled: false
                },
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
                name: "counts",
                data: count
            }],
            tooltip: {
                theme: 'dark'
            },
            grid: {
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
                    padding: 4,
                    formatter: (value) => {
                        return value.toFixed(0)
                    },
                },
            },
            labels: title,
            colors: ['#ff0066'],
            legend: {
                show: false,
            },
        })).render();
    }
</script>
