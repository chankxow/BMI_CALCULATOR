<?php require('calculate.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>คำนวญดัชนีมวลกาย</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;700&family=Kanit:ital,wght@0,100;0,600;1,900&display=swap');

        * {
            font-family: 'Chakra Petch', sans-serif;
            font-family: 'Kanit', sans-serif;
        }
    </style>

</head>

<body>

    <div class="container mt-4" style="max-width:1000px ">
        <div class="text-center mb-5 ">
            <h1 class="fw-bolder mb-0">เครื่องคำนวณหาค่าดัชนีมวลกาย (BMI)</h1>
        </div>

        <form method="post" action="" class="shadow-lg p-4">
            <div class=" justify-content-center">
                <div class="col ">
                    <div class="  
                        justify-content-center
                        ">
                        <div class="col text-start mb-3 mb-md-5">
                            <label for="height" class="fs-3 mb-3">ส่วนสูง</label>
                            <div class="input-group">
                                <input id="height" class=" form-control form-control-custom w-50" name="height" type="number" step="any" value="<?php if (!empty($height)) {
                                                                                                                                                    echo $height;
                                                                                                                                                } ?>">

                                <div class="form-floating">
                                    <select class="form-select" name="heightunit">
                                        <option value="centimeter">เซนติเมตร</option>
                                        <option value="inch">นิ้ว</option>
                                        <option value="foot">ฟุต</option>
                                        <option value="meter">เมตร</option>
                                    </select>
                                    <label for="floatingSelect">คลิกเพื่อเลือกหน่วย</label>
                                </div>
                            </div>

                        </div>

                        <div class="col text-start mb-3 mb-md-4 ">
                            <label for="weight" class="fs-3 mb-3">น้ำหนัก</label>
                            <div class="input-group ">
                                <input id="weight" class="form-control form-control-custom w-50" name="weight" type="number" step="any" value="<?php if (!empty($weight)) {
                                                                                                                                                    echo $weight;
                                                                                                                                                } ?>">
                                <div class="form-floating">
                                    <select class="form-select" name="weightunit">
                                        <option value="kilogram">กิโลกรัม</option>
                                        <option value="pound">ปอนด์</option>
                                    </select>
                                    <label for="floatingSelect">คลิกเพื่อเลือกหน่วย</label>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center mb-3 mb-md-4"><input type="submit" name="submit" value="คำนวณ" class="btn btn-outline-primary"></div>

                    </div>
                </div>



        </form>
        <div class=""><?php if (isset($bmiindex) && is_numeric($bmiindex)) { ?> <!-- Result -->
                <div class="row justify-content-center text-center">
                    <div class="col text-start">
                        <div>
                            <div class="d-flex justify-content-center">
                                <div class="text-center col-4 mb-2">
                                    <label for="Result" class="fs-2">ผลลัพธ์</label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mb-5">
                                <div class="text-center shadow-lg col-4">
                                    <p id="Result" name="Result" class="fs-4"><?php echo 'ค่า BMI ของคุณคือ ' . $bmiindex . ' คุณ' . $message; ?></p>
                                </div>
                            </div>


                            <p id="Result" name="Result" class="fs-4"><?php echo  $warning; ?></p>
                        </div>

                    </div>
                </div>
            <?php }
                        if (isset($error)) { ?><!-- Error Messages -->
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="alert alert-danger shadow-sm" role="alert">Error: <?php echo $error; ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>




    </div>


    <div class="mt-4"></div>

</body>

</html>