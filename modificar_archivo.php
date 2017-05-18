<?php

    function modificar_archivo($ruta_archivos, $cambios) {

        //Make the changes for each files
        foreach($ruta_archivos as $ruta_archivo) {

            //Get the contents of the file and close it
            $archivo = fopen($ruta_archivo, "r+");
            $contenido = fread($archivo, filesize($ruta_archivo));
            fclose($archivo);

            //Open the file and delete its contents
            $archivo = fopen($ruta_archivo, "w");

            //All of changes are made and then saved to the file and closed
            foreach($cambios as $cambio_esto => $por_esto) {
                $contenido = str_replace($cambio_esto, $por_esto, $contenido);
            }
            fwrite($archivo, $contenido);
            fclose($archivo);
        }

    }

    //Routes of the files to be edited
    $rutas = array (
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/account.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/backoffice_order.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/bankwire.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/cheque.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/contact.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/contact_form.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/credit_slip.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/download_product.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/employee_password.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/forward_msg.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/guest_to_customer.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/in_transit.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/log_alert.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/newsletter.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/order_canceled.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/order_changed.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/order_conf.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/order_customer_comment.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/order_merchant_comment.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/order_return_state.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/outofstock.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/password.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/password_query.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/payment.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/payment_error.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/preparation.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/refund.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/reply_msg.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/shipped.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/test.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/voucher.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/log_alert.html",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/voucher_new.html",

        "/home/NAME/public_html/themes/NAME_THEME/mails/es/account.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/backoffice_order.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/bankwire.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/cheque.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/contact.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/contact_form.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/credit_slip.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/download_product.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/employee_password.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/forward_msg.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/guest_to_customer.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/in_transit.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/log_alert.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/newsletter.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/order_canceled.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/order_changed.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/order_conf.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/order_customer_comment.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/order_merchant_comment.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/order_return_state.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/outofstock.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/password.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/password_query.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/payment.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/payment_error.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/preparation.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/refund.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/reply_msg.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/shipped.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/test.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/voucher.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/log_alert.txt",
        "/home/NAME/public_html/themes/NAME_THEME/mails/es/voucher_new.txt",

        "/home/NAME/public_html/themes/NAME_THEME/modules/mailalerts/mails/es/new_order.html",
        "/home/NAME/public_html/themes/NAME_THEME/modules/mailalerts/mails/es/new_order.txt",
    );

    //Changes that will be made to the files ("what will be searched" => "for what will be replaced")
    $cambios = array (
        "#333333" => "#000",
        "#C3D600" => "#000",
        ' creado por <a href="http://www.prestashop.com/" style="color:#337ff1">PrestaShop&trade;</a>' => "",
        ' powered by <a href="http://www.prestashop.com/" style="color:#337ff1">PrestaShop&trade;</a>' => "",
        "{shop_name} [{shop_url}] creado por" => "{shop_name} [{shop_url}]",
        "{shop_name} [{shop_url}] powered by" => "{shop_name} [{shop_url}]",
        "PrestaShop(tm) [http://www.prestashop.com/]" => "",
        '<style>' => '<style>  body { font-family: "Arial" !important; } ',
    );

    modificar_archivo($rutas, $cambios);

?>