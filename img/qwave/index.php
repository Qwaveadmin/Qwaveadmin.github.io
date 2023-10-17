<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ุเครื่องมือสำหรับ QWAVE DEV</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Additional CSS for triangle visualization */
        .triangle {
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-bottom: 10px solid black;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">ุรวม Tools ไว้ใช้</h1>
        <!-- Add Nav tabs -->
        <ul class="nav nav-tabs" id="myTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="calculation-tab" data-toggle="tab" href="#calculation" role="tab" aria-controls="calculation" aria-selected="true">คำนวณระยะทาง</a>
            </li>
            <!-- Add more tabs for additional features -->
        </ul>

        <!-- Add tab content -->
        <div class="tab-content mt-4" id="myTabsContent">
            <div class="tab-pane fade show active" id="calculation" role="tabpanel" aria-labelledby="calculation-tab">
                <form id="distanceForm">
                    <div class="mb-3">
                        <label for="horizontalDistance" class="form-label">ระยะทางแนวราบ (กิโลเมตร):</label>
                        <input type="number" class="form-control" id="horizontalDistance" step="0.01" placeholder="ระยะทางแนวราบ">
                    </div>
                    <div class="mb-3">
                        <label for="verticalDistance" class="form-label">ระยะทางแนวดิ่ง (กิโลเมตร):</label>
                        <input type="number" class="form-control" id="verticalDistance" step="0.01" placeholder="ระยะทางแนวดิ่ง">
                    </div>
                    <button type="submit" class="btn btn-primary">คำนวณระยะทาง</button>
                </form>
    
                <p id="formula" class="mt-3">สูตร: ระยะทางรวม = √(ระยะทางแนวราบ² + ระยะทางแนวดิ่ง²)</p>
                
                <div class="triangle"></div>
                
                <p id="result" class="mt-3"></p>
            </div>
            <!-- Add more tab content for additional features -->
        </div>
    </div>

    <script>
        document.getElementById('distanceForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const horizontalDistance = parseFloat(document.getElementById('horizontalDistance').value);
            const verticalDistance = parseFloat(document.getElementById('verticalDistance').value);

            if (!isNaN(horizontalDistance) && !isNaN(verticalDistance)) {
                const totalDistance = Math.sqrt(Math.pow(horizontalDistance, 2) + Math.pow(verticalDistance, 2));
                document.getElementById('result').innerHTML = `ระยะทางจากคุณไปสู่วัตถุคือ: ${totalDistance.toFixed(2)} กิโลเมตร`;
            } else {
                document.getElementById('result').innerHTML = 'กรุณากรอกข้อมูลให้ถูกต้อง';
            }
        });
    </script>

    <!-- Add Bootstrap JS and Popper.js script links here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</body>
</html>
