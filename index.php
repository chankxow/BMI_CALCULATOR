<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>คำนวญดัชนีมวลกาย</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container " style="max-width:800px">
        <div class="text-center mb-5">
            <h1 class="fw-bolder mb-0">ดัชนีมวลกายทองคำ</h1>
        </div>

        <form method="post" action="" class="">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="row row-cols-1 
                        row-cols-sm-2 
                        row-cols-md-2 
                        row-cols-lg-2 
                        row-cols-xl-2 
                        justify-content-center">
                        <div class="col text-center mb-3 mb-md-5">
                            <label for="height" class="fs-3">ส่วนสูง</label>
                            <div class="input-group">
                                <input id="height" class="form-control form-control-custom w-50" name="height" type="number" step="any" value="<?php if (!empty($height)) {echo $height;} ?>">
                            <select class="form-select w-50" name="heightunit" >
                            <option value="centimeter" >เซนติเมตร</option>
                            <option value="inch" >นิ้ว</option>
                            <option value="foot" >ฟุต</option>
                            <option value="meter" >เมตร</option>


                            </select>

                        </div>

                    </div>
                </div>
            </div>



        </form>
    </div>




</body>

</html>