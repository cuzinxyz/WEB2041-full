</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="/assets/admin/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="/assets/admin/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="/assets/admin/js/off-canvas.js"></script>
<script src="/assets/admin/js/hoverable-collapse.js"></script>
<script src="/assets/admin/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->

<!-- <script src="/assets/admin/js/chart.js"></script> -->

<script type="text/javascript">

// Product Statistcs
var xValues = [<?php foreach ($array as $key => $data) {
  echo "'" . $data['categoryName'] . " ', ";
} ?>];
var yValues = [<?php foreach ($array as $key => $data) {
  echo "'" . $data['total'] . " ', ";
} ?>, 0];
var barColors = ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(173, 161, 30, 0.3)","rgba(145, 59, 0, 0.5)"];
new Chart("product", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Thống kê sản phẩm"
    }
  }
});

// Customer Statistics
    var xCustomer = [<?php foreach ($customer as $key => $data) {
        if ($data['sex'] == null) { echo "'Không xác định',"; } else {echo "'" . $data['sex'] . " ', ";}
    } ?>];
    var yCustomer = [<?php foreach ($customer as $key => $data) {
        echo "'" . (int) $data['percent'] . " ', ";
    } ?>];
    var colorList = [
        "#b91d47",
        "#00aba9",
        "#23fh78"
    ];

    new Chart("customer", {
        type: "doughnut",
        data: {
            labels: xCustomer,
            datasets: [{
                backgroundColor: colorList,
                data: yCustomer
            }]
        },
        options: {
            title: {
                display: true,
                text: "Tỉ lệ giới tính khách hàng (%)"
            }
        }
    });

</script>

<!-- End custom js for this page -->
</body>

</html>
