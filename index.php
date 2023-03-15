<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Lato -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/container.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/jquery.js"></script>
</head>

<body>

    <section class="section_purple">
        <div class="container">
            <form action="pdf.php" method="POST">
                <div class="invoice_wrapper">
                    <div class="invoice">
                        INVOICE
                    </div>
                    <div class="invoice_header">
                        <img class="logo_img" src="images/logo.png" alt="">
                        <p class="txt_black_50">85 Great Portland street, <br> London, W1w7LT</p>
                    </div>
                    <div class="input_boxes_wrapper">
                        <div class="input_box">
                            <label class="input_item">
                                <p>Name</p>
                                <input type="text" name="name">
                            </label>
                            <label class="input_item">
                                <p>Company</p>
                                <input type="text" name="company">
                            </label>
                            <label class="input_item">
                                <p>Email</p>
                                <input type="text" name="email">
                            </label>
                        </div>
                        <div class="input_box">
                            <label class="input_item">
                                <p>Invoice No</p>
                                <input type="text" name="invoice">
                            </label>
                            <label class="input_item">
                                <p>Payment due date</p>
                                <input type="date" name="duedate">
                            </label>
                        </div>
                    </div>

                    <div class="table_wrapper">
                        <table class="invoice_table txt_blue">
                            <thead>
                                <tr class="fs_18">
                                    <th class="w_40 txt_left">Project description</th>
                                    <th class="w_20 txt_left pl_10">Price</th>
                                    <th class="w_20 txt_left">Sub total</th>
                                    <th class="w_10 txt_left">Total</th>
                                </tr>
                            </thead>
                            <tbody id="inputRows">
                                <tr id="firstRow" class="inprow">
                                    <td class="txt_left">
                                        <textarea name="desc[]" class="table_input">• 1 dedicated resources for mont</textarea>
                                    </td>
                                    <td class="txt_left pl_10">
                                        <div class="table_input_wrapper">
                                            <p>£</p>
                                            <input name="price[]" type="number" class="table_input input_price" value="213">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_input_wrapper">
                                            <p>£</p>
                                            <input name="subtotal" type="number" class="table_input input_subtotal" value="213">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_input_wrapper">
                                            <p>£</p>
                                            <input name="total" type="number" class="table_input input_total" value="213">
                                        </div>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td class="txt_left">
                                        <textarea name="" class="table_input">• 1 dedicated resources for mont</textarea>
                                    </td>
                                    <td class="txt_left pl_10">
                                        <div class="table_input_wrapper">
                                            <p>£</p>
                                            <input name="" type="number" class="table_input input_price" value="214">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_input_wrapper">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_input_wrapper"></div>
                                    </td>
                                </tr> -->
                                <!-- <tr>
                                    <td class="txt_left">
                                        <textarea name="" class="table_input">• 1 dedicated resources for mont</textarea>
                                    </td>
                                    <td class="txt_left pl_10">
                                        <div class="table_input_wrapper">
                                            <p>£</p>
                                            <input name="" type="number" class="table_input input_price" value="214">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_input_wrapper">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table_input_wrapper"></div>
                                    </td>
                                </tr> -->
                                <tr class="invoice_total_row">
                                    <td class="txt_left">
                                        <button class="blue_btn" type="button" id="AddRow" style="margin-top: 15px;margin-bottom:25px">+</button>
                                    </td>
                                    <td class="txt_left fw_gold-bold fs_18 pl_10">Total</td>
                                    <td></td>
                                    <td>
                                        <div class="table_input_wrapper">
                                            <p>£</p>
                                            <input name="" type="number" class="table_input input_total" value="213">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="after_table">
                        <div class="sign_seal">
                            <img src="images/signature_Seal.png" alt="">
                            <div class="sing_text">
                                <p>Jason Wood</p>
                                <p>Head of Operations</p>
                                <p>Funel Limited</p>
                            </div>
                        </div>

                        <div class="footer_btn">
                            <button class="blue_btn" type="submit" name="formsubmit"><img src="images/pdf-file-img.png" alt="" class="btn_img">
                                <p>Generate</p>
                            </button>
                            <button class="blue_btn"><img src="images/send-img.png" alt="" class="btn_img">
                                <p>Send</p>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>


    <!-- <script src="js/app.js"></script> -->
    <script src="js/operations.js"></script>
</body>

</html>