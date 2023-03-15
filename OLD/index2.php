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
</head>

<body>

    <section class="section_purple">
        <div class="container">
            <form action="pdf.php" method="post">
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
                                    <th class="w_20 txt_center">Sub total</th>
                                    <th class="w_20">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="txt_left">
                                        <textarea id="desc" name="desc" class="table_input">• 1 dedicated resources for mont</textarea>
                                    </td>
                                    <td class="txt_left pl_10">
                                        <textarea name="price" class="table_input">CA£213</textarea>
                                    </td>
                                    <td>
                                        <textarea name="subtotal" id="sub_total_price" class="table_input txt_center">-</textarea>
                                    </td>
                                    <td>
                                        <textarea name="total" id="total_input_price" class="table_input txt_right">-</textarea>
                                    </td>
                                </tr>
                                <tr class="invoice_total_row">
                                    <td class="txt_left"></td>
                                    <td class="txt_left fw_gold-bold fs_18 pl_10">Total</td>
                                    <td></td>
                                    <td id="total_price">-</td>
                                </tr>
                                <!-- <tr class="invoice_total_row">
                                    <td class="txt_left"></td>
                                    <td class="txt_left fw_gold-bold fs_18 pl_10">Tax</td>
                                    <td></td>
                                    <td>-</td>
                                </tr>
                                <tr class="invoice_total_row">
                                    <td class="txt_left"></td>
                                    <td class="txt_left fw_gold-bold fs_18 pl_10">Discount</td>
                                    <td></td>
                                    <td>CA£213</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>

                    <div class="after_table" style="margin-top: 40px;">
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

</body>
<script>
    window.onload = function() {
        const myElement = document.getElementById("sub_total_price");
        
        myElement.addEventListener("keyup", function() {
            const total_input_price = document.getElementById("total_input_price");
            total_input_price.value = myElement.value;

            const total_price = document.getElementById("total_price");
            total_price.innerHTML = myElement.value;

        });
    };

</script>
</html>